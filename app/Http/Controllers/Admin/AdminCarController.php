<?php

namespace App\Http\Controllers\Admin;

use App\Common\Utility;
use App\Http\Controllers\Controller;
use App\Models\Admin\Car;
use App\Models\Admin\CarContent;
use App\Models\Admin\CarDate;
use App\Models\Admin\Category;
use App\Models\Admin\CategoryContent;
use App\Models\Admin\CarmakeContent;
use App\Models\Admin\Carmodel;
use App\Models\Admin\ExtraService;
use App\Models\Admin\Feature;
use App\Models\Admin\Highlight;
use App\Models\Admin\Language;
use App\Models\Admin\Location;
use App\Models\Admin\LocationContent;
use App\Models\Admin\PriceRange;
use App\Models\Admin\Service;
use App\Models\Admin\Season;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminCarController extends Controller
{
    private $validation_rules, $validation_messages;
    protected $languages;
    public function __construct(){
        $this->validation_rules = [
            'business_hours.sat'  => 'business_hours',
            'business_hours.week' => 'business_hours',
            'business_hours.sun'  => 'business_hours'
        ];

        $this->validation_messages = [
            'business_hours.sat.business_hours'  => get_string('business_hours_validation'),
            'business_hours.week.business_hours' => get_string('business_hours_validation'),
            'business_hours.sun.business_hours'  => get_string('business_hours_validation'),
        ];
        $this->languages = Language::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('status','desc')->orderBy('created_at','desc')->paginate(50);
        return view('admin.car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $default_language = Language::where('default', 1)->first();
        $categories = CategoryContent::where('language_id', $default_language->id)->get()->pluck('name', 'category_id');
        $carmakes = CarmakeContent::where('language_id', $default_language->id)->get()->pluck('name', 'carmake_id');
        $languages = $this->languages;
        $features = Feature::all();
        $highlights = Highlight::all();
        $extraservices = ExtraService::all();
        $services = Service::all();
        return view('admin.car.create', compact( 'categories',
                                                 'carmakes',
                                                 'languages',
                                                 'features',
                                                 'highlights',
                                                 'extraservices',
                                                 'services',
                                                 'default_language' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $languages = $this->languages;
        // Validating the Car
        /*
        if($this->validateService($request)){
            return $this->validateService($request);
        }
        */

        // Store to base
        $data = [];
        $data['featured'] = isset($request->featured) ? 1 : 0;
        $data = $request->except('markers', '_token', 'action', 'images', 'front_image', 'name', 'description', 'meta_title', 'meta_description');
        $data['status'] = 0;
        $data['user_id'] = Auth::id();


        if(empty($request->passengers_number)){
            $data['passengers_number'] = 0;
        }

        if(empty($request->doors)){
            $data['doors'] = 0;
        }

        if(empty($request->suitcases)){
            $data['suitcases'] = 0;
        }

        if(empty($request->category_id)){
            $default_cat = Category::orderBy('order', 'asc')->first();
            $data['category_id'] = $default_cat->id;
        }

        if(empty($request->location_id)){
            $default_loc = Location::orderBy('order', 'asc')->first();
            $data['location_id'] = $default_loc->id;
        }

        if(empty($request->franchise)){
            $data['franchise'] = 0;
        }

        if(empty($request->full_fuel)){
            $data['full_fuel'] = 0;
        }

        if(empty($request->transmission)){
            $data['transmission'] = 'manual';
        }

        if(empty($request->airconditioner)){
            $data['airconditioner'] = 0;
        }

        if(empty($request->carburant)){
            $data['carburant'] = 'petrol';
        }

        $default_language = Language::where('default', 1)->first();
        $data['alias'] = Utility::alias($request->name[$default_language->id], [], 'car');
        $car = Car::create($data);

        if(isset($request->images)){
            foreach($request->images as $image){
                Image::create(['image' => $image, 'imageable_id' => $car->id, 'imageable_type' => 'App\Models\Admin\Car']);
            }
        }

        if(isset($request->front_image)){
            Image::create(['image' => $request->front_image, 'imageable_id' => $car->id, 'imageable_type' => 'App\Models\Admin\Car']);
        }
        // dd($car);
        // dd($languages );
        // Updating the Content
        foreach($languages as $language) {

            unset($data);
            // Getting name

            $data['name'] = $request->name[$language->id];
            // Getting content from textarea
            $data['description'] = $request->description[$language->id];
            $data['meta_title'] = $request->meta_title[$language->id];
            $data['meta_description'] = $request->meta_description[$language->id];
            $data['car_id'] = $car->id;
            $data['language_id']  = $language->id;
            // dd($data);

            // Create the Car Content
            CarContent::updateOrCreate([
                'car_id' => $car->id,
                'language_id'  => $language->id,
            ],$data);
        }
        //---- Seasons ---------
        if(!empty($request->seasons)){
            foreach ($request->seasons as $season) {
                $season['car_id'] = $car->id;
                Season::create($season);
            }
        }
        //-------------------------
        // Create available dates
        CarDate::create(['dates' => null, 'car_id' => $car->id]);

        // Redirect after saving
        return redirect('admin/car');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Why do we need to show this? You will see it in the front-end.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $default_language = Language::where('default', 1)->first();
        $languages = $this->languages;
        $categories = CategoryContent::where('language_id', $default_language->id)->get()->pluck('name', 'category_id');
        $carmakes = CarmakeContent::where('language_id', $default_language->id)->get()->pluck('name', 'carmake_id');
        $features = Feature::all();
        $highlights = Highlight::all();
        $extraservices = ExtraService::all();
        $services = Service::all();
        $car = Car::findOrFail($id);

        $carmodels = [];
        $selected_carmake = 0;
        $selected_carmodel = 0;

        if(!empty($car->carmodel)){
            $carmodels = Carmodel::with(['contentload' => function ($query) use ($default_language) {
                $query->where('language_id', $default_language->id);
            }])->where('carmake_id', $car->carmodel->carmake_id)->orderBy('alias', 'ASC')->get()->pluck('contentload.name', 'contentload.carmodel_id');

            $selected_carmake = $car->carmodel->carmake_id;
            $selected_carmodel = $car->carmodel->id;
        }

        $seasons = Season::where('car_id', $car->id)
                            ->orderBy('start_date', 'ASC')
                            ->get();

        return view('admin.car.edit', compact( 'car',
                                               'categories',
                                               'carmakes',
                                               'carmodels',
                                               'selected_carmake',
                                               'selected_carmodel',
                                               'default_language',
                                               'languages',
                                               'features',
                                               'highlights',
                                               'extraservices',
                                               'services',
                                               'seasons' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $languages = $this->languages;
        // Validating the Car
        //dd($this->validateServiceUpdate($request, $id));
        if($this->validateServiceUpdate($request, $id)){
            return $this->validateServiceUpdate($request, $id);
        }

        $data = $request->except('markers', '_token', 'action', 'images', 'front_image', 'name', 'description');

        $car = Car::findOrFail($id);
        $car->touch();
        //---- Seasons ---------
        if(!empty($request->seasons)){
            $seasons_to_update = array();
            $seasons_to_add = array();

            foreach ($request->seasons as $season) {
                if(!empty($season['start_date']) && !empty($season['start_date']) && !empty($season['price_per_night'])){
                    if(!empty($season['id'])){
                        $seasons_to_update[$season['id']] = $season;
                    }else{
                        $seasons_to_add[] = $season;
                    }
                }
            }

            if(!empty($seasons_to_update)){
                foreach ($seasons_to_update as $season) {
                    $ss = Season::findOrFail($season['id']);
                    $season['car_id'] = $car->id;
                    $ss->update($season);
                }

                Season::where('car_id', $car->id)
                      ->whereNotIn('id', array_keys($seasons_to_update))
                      ->delete();
            }

            if(!empty($seasons_to_add)){
                foreach ($seasons_to_add as $season) {
                    $season['car_id'] = $car->id;
                    if(empty($season['season'])){ $season['season'] = 'Saison'; }
                    Season::create($season);
                }
            }
        }else{
            Season::where('car_id', $car->id)->delete();
        }
        //-------------------------

        $default_language = Language::where('default', 1)->first();
        $data['featured'] = isset($request->featured) ? 1 : 0;

        // Update Alias
        if($request->alias){
            if($request->alias == ''){
                $data['alias'] = $car->alias;
            }else{
                $alias = Utility::fixAlias($request->alias);
                $c = count(Car::where('alias', 'LIKE', '%'. $alias .'%')->where('id', '<>', $car->id)->get());
                if($c){
                    $data['alias'] = $alias .'-'. $c;
                }else{
                    $data['alias'] = $alias;
                }
            }
        }

        if(empty($request->passengers_number)){
            $data['passengers_number'] = 0;
        }

        if(empty($request->doors)){
            $data['doors'] = 0;
        }

        if(empty($request->suitcases)){
            $data['suitcases'] = 0;
        }

        if(empty($request->carburant)){
            $data['carburant'] = 'petrol';
        }

        if(empty($request->transmission)){
            $data['transmission'] = 'manual';
        }

        if(empty($request->airconditioner)){
            $data['airconditioner'] = 0;
        }

        if(empty($request->status)){
            $data['status'] = 0;
        }

        $car->update($data);

        $old_images = $car->images;

        if(isset($request->images)){
            foreach($old_images as $image){
                if(!in_array_r($image->image, $request->images)){
                    $image->delete();
                }
            }

            $old_images = $old_images->toArray();
            $sort_order = 0;
            foreach($request->images as $image){
                $sort_order++;

                $data_img = [
                        'image'          => $image,
                        'sort_order'     => $sort_order,
                        'imageable_id'   => $car->id,
                        'imageable_type' => 'App\Models\Admin\Car'
                    ];
                if(!in_array_r($image, $old_images, true)){
                    Image::create($data_img);
                }else{
                    $img_to_update = Image::where(['image' => $image, 'imageable_id' => $car->id])->first();
                    if(!empty($img_to_update)){
                        $img_to_update->update($data_img);
                    }
                }
            }
        }

        $old_front_image = $car->front_image;

        if(isset($request->front_image)){
            if(empty($old_front_image) || $request->front_image != $old_front_image->image){
                if(!empty($old_front_image)) $old_front_image->delete();
                Image::create(['image' => $request->front_image, 'imageable_id' => $car->id, 'imageable_type' => 'App\Models\Admin\Car']);
            }
        }else{
            if(!empty($old_front_image)) $old_front_image->delete();
        }

        // Updating the Content
        foreach($languages as $language) {

            unset($data);
            // Getting name
            $data['name'] = $request->name[$language->id];

            // Getting content from textarea
            $data['description'] = $request->description[$language->id];
            $data['meta_title'] = $request->meta_title[$language->id];
            $data['meta_description'] = $request->meta_description[$language->id];
            $data['car_id'] = $car->id;
            $data['language_id'] = $language->id;

            // Update the Category Content
            CarContent::updateOrCreate(['language_id' => $language->id, 'car_id' => $id],$data);
        }

        // Redirect after saving
        //return redirect('admin/car');

        return redirect()->route('admin.car.edit', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax()){
            $this->delete($id);
            return response()->json(get_string('success_delete'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }


    // Handling mass deletion
    public function massDestroy(Request $request){
        if($request->ajax() && isset($request->id)){
            $ids = $request->id;
            foreach ($ids as $id){
                $this->delete($id);
            }
            return response()->json(get_string('success_delete'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Activating post
    public function activate(Request $request, $id){

        if($request->ajax()) {
            $car = Car::findOrFail($id);
            $car->status = 1;
            $car->touch();
            $car->save();
            return response()->json(get_string('success_activate'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Making Featured
    public function makeFeatured(Request $request, $id){

        if($request->ajax()) {
            $car = Car::findOrFail($id);
            $car->featured = 1;
            $car->touch();
            $car->save();
            return response()->json(get_string('success_service_featured'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Make Default
    public function makeDefault(Request $request, $id){

        if($request->ajax()) {
            $car = Car::findOrFail($id);
            $car->featured = 0;
            $car->touch();
            $car->save();
            return response()->json(get_string('success_service_default'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Deactivating post
    public function deactivate(Request $request, $id){

        if($request->ajax()) {
            $car = Car::findOrFail($id);
            $car->status = 0;
            $car->touch();
            $car->save();
            return response()->json(get_string('success_deactivate'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Validating the Car upon creating
    public function validateService(Request $request){

        $languages = $this->languages;
        $validator = Validator::make(
            $request->all(),
            $this->validation_rules,
            $this->validation_messages
        );

        if($validator->fails()){
            if(isset($request->images)){
                foreach($request->images as $image){
                    $path = public_path('images/data/'.$image);
                    if(File::exists($path)){
                        File::delete($path);
                    }
                }
            }
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            foreach($languages as $language) {
                $validator = Validator::make($request->all(), [
                    'name.' . $language->id . ''             => 'required|max:200',
                    //'description.' . $language->id . ''      => 'required|min:100|max:5000',
                ], [
                    'name.'.$language->id.'.required'        => get_string('required_field'),
                    //'name.'.$language->id.'.max'             => get_string('max_100'),
                    //'description.'.$language->id.'.required' => get_string('required_field'),
                    //'description.'.$language->id.'.min'      => get_string('min_100'),
                ]);
                if($validator->fails()) {
                    if (isset($request->images)) {
                        foreach ($request->images as $image) {
                            $path = public_path('images/data/' . $image);
                            if (File::exists($path)) {
                                File::delete($path);
                            }
                        }
                    }
                    return Redirect::back()->withInput()->withErrors($validator);
                }
            }
        }
    }

    // Validating the Car upon updating
    public function validateServiceUpdate(Request $request, $id){
        $languages = $this->languages;
        $validator = Validator::make(
            $request->all(),
            $this->validation_rules,
            $this->validation_messages
        );
        $images =Car::findOrFail($id)->images()->exists() ?  Car::findOrFail($id)->images->toArray() :[];
//dd($validator->fails());
        if($validator->fails()){
            if(isset($request->images)){
                foreach($request->images as $image){
                    if(!in_array_r($image, $images)){
                        $path = public_path('images/data/'.$image);
                        if(File::exists($path)){
                            File::delete($path);
                        }
                    }
                }
            }
            dd('validator fails 1',$validator);
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            foreach($languages as $language) {
                $validator = Validator::make($request->all(), [
                    'name.' . $language->id . '' => 'required|max:200',
                    //'description.' . $language->id . '' => 'required|min:100|max:5000',
                ], [
                    'name.'.$language->id.'.required'           => get_string('required_field'),
                    'name.'.$language->id.'.max'         => get_string('max_100'),
                    //'description.'.$language->id.'.required'    => get_string('required_field'),
                    //'description.'.$language->id.'.min'         => get_string('min_100'),
                ]);
                if($validator->fails()) {
                    if (isset($request->images)) {
                        foreach ($request->images as $image) {
                            $path = public_path('images/data/' . $image);
                            if (File::exists($path)) {
                                File::delete($path);
                            }
                        }
                    }
                    //dd('validator fails 2');
                    return Redirect::back()->withInput()->withErrors($validator);
                }
            }
        }
    }

    // Autocomplete
    public function autocomplete(Request $request){

        if($request->ajax()) {
            $term = $request->get('term') ? $request->get('term') : '';
            $results = [];
            $default = Language::where('default', 1)->first();

            $cars = CarContent::where([['name', 'LIKE', '%' . $term . '%'],['language_id', '=', $default->id]])->take(5)->get();
            foreach ($cars as $car) {
                $results[] = ['id' => $car->id, 'name' => $car->name];
            }
            return $results;
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Searching for Cars
    public function search(Request $request){
        $term = $request->get('term') ? $request->get('term') : '';

        $car_ids = CarContent::where('name', 'LIKE', '%'.$term.'%')->get()->pluck('car_id');

        $cars = Car::whereIn('id', $car_ids)->orderBy('created_at','desc')->paginate(50);

        return view('admin.car.search', compact('cars'));
    }

    // Helper function for delete
    public function delete($id){

        // Getting the post
        $car = Car::findOrFail($id);

        // Unlinking the images
        if($car->images){
            foreach($car->images as $image){
                $path = public_path('images/data/'.$image->image);
                if(File::exists($path) && $image->image != '/images/no_image.jpg'){
                    File::delete($path);
                }
                $image->delete();
            }
        }

        // Deleting the Content
        $languages = $this->languages;
        foreach($languages as $language){
            $car_cntnt = $car->content($language->id);
            if(!empty($car_cntnt)){
            $car_cntnt->delete();
            }
        }

        $car->prop_dates()->delete();

        // Deleting the post
        $car->delete();
    }

    public function updateDates(Request $request){
        // Update available days
        $car_dates = CarDate::where('car_id', $request->car_id)->first();
        $data['dates'] = explode(',', $request->dates);
        $data['dates'] = array_map('trim', $data['dates']);
        $car_dates->update($data);
        return redirect('admin/car');
    }
}
