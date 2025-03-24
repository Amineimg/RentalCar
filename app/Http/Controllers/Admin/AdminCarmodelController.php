<?php



namespace App\Http\Controllers\Admin;



use App\Common\Utility;

use App\Models\Admin\Language;

use App\Models\Admin\Carmodel;

use App\Models\Admin\CarmodelContent;

use App\Models\Admin\CarmakeContent;

use App\Models\Admin\Car;

use App\Models\Admin\Service;

use Illuminate\Http\Request;



use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Models\Admin\Carmake;
use Illuminate\Support\Facades\File;

use Intervention\Image\Facades\Image;



class AdminCarmodelController extends Controller

{

    protected $languages;

    public function __construct(){

        $this->languages = Language::all();

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $carmodels = Carmodel::orderBy('order', 'asc')->paginate(50);

        return view('admin.taxonomy.carmodel.index', compact( 'carmodels' ));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $default_language = Language::where('default', 1)->first();

        $languages = $this->languages;

        $carmakes = CarmakeContent::where('language_id', $default_language->id)->get()->pluck('name', 'carmake_id');

        return view('admin.taxonomy.carmodel.create', compact('carmakes', 'languages'));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $languages = $this->languages;

        foreach($languages as $language) {

            // Validation

            $this->validateCat($request, $language->id);

        }



        $data = $request->all();

        // Handing the Featured image

        $file = $request->file('featured_image');

        if(isset($file) && $file->isValid()){

            $name = uniqid() . unique_string() .'.'. $file->getClientOriginalExtension();

            $img = Image::make($file->getRealPath());

            $date = date('M-Y');

            if(!File::exists(public_path() . '/images/data/'. $date)){

                File::makeDirectory(public_path() . '/images/data/'. $date, 0755, true);

            }

            $img->save(public_path().'/images/data/'. $date .'/'. $name);

            $data['featured_image'] = $date .'/'. $name;

        }



        $default_language = Language::where('default', 1)->first();

        $data['order'] = $request->order ? $request->order: 0;

        $data['alias'] = Utility::alias($request->name[$default_language->id], [], 'carmodel');



        if(empty($request->carmake_id)){

            $default_carmake = Carmake::orderBy('order', 'asc')->first();

            $data['carmake_id'] = $default_carmake->id;

        }

        $carmodel = Carmodel::create($data);

        unset($data);

        foreach($languages as $language) {

            // Getting name

            $data['name'] = $request->name[$language->id];



            // Getting content from textarea

            //$data['description'] = $request->description[$language->id];

            $data['carmodel_id'] = $carmodel->id;

            $data['language_id']  = $language->id;
            $data['meta_title']  = $request->meta_title[$language->id];
            $data['meta_description']  =$request->meta_description[$language->id];

            CarmodelContent::create($data);



        }



        return redirect('admin/taxonomy/carmodel');

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

        $carmodel = Carmodel::findOrFail($id);

        $carmakes = CarmakeContent::where('language_id', $default_language->id)->get()->pluck('name', 'carmake_id');

        $languages = $this->languages;

        return view('admin.taxonomy.carmodel.edit', compact('carmakes', 'carmodel', 'languages'));

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

        $languages = $this->languages;

        foreach($languages as $language) {

            // Validation

            $this->validateCatUpdate($request, $id, $language->id);

        }



        // We get the carmodel

        $carmodel = Carmodel::findOrFail($id);



        $data = $request->all();

        // Handing the Featured image

        $file = $request->file('featured_image');

        if(isset($file) && $file->isValid()){

            if(strpos($carmodel->featured_image, 'no_image.jpg') === FALSE && File::exists(public_path() . $carmodel->featured_image)){

                File::delete((public_path() . $carmodel->featured_image));

            }

            $name = uniqid() . unique_string() .'.'. $file->getClientOriginalExtension();

            $img = Image::make($file->getRealPath());

            $date = date('M-Y');

            if(!File::exists(public_path() . '/images/data/'. $date)){

                File::makeDirectory(public_path() . '/images/data/'. $date, 0755, true);

            }

            $img->save(public_path().'/images/data/'. $date .'/'. $name);

            $data['featured_image'] = $date .'/'. $name;

        }



        if(empty($request->carmake_id)){

            $default_carmake = Carmake::orderBy('order', 'asc')->first();

            $data['carmake_id'] = $default_carmake->id;

        }

        $data['order'] = $request->order ? $request->order : $carmodel->order;

        // Updating the carmodel

        $default_language = Language::where('default', 1)->first();



        // Update Alias

        if($request->alias){

            if($request->alias == ''){

                $data['alias'] = $carmodel->alias;

            }else{

                $alias = Utility::fixAlias($request->alias);

                $c = count(Carmodel::where('alias', 'LIKE', '%'. $alias .'%')->where('id', '<>', $carmodel->id)->get());

                if($c){

                    $data['alias'] = $alias .'-'. $c;

                }else{

                    $data['alias'] = $alias;

                }

            }

        }





        $carmodel->update($data);



        // Updating the Content

        foreach($languages as $language) {



            unset($data);

            // Getting name

            $data['name'] = $request->name[$language->id];



            // Getting content from textarea

            // $data['description'] = $request->description[$language->id];

            $data['carmodel_id'] = $carmodel->id;

            $data['language_id']  = $language->id;
            $data['meta_title']  = $request->meta_title[$language->id];
            $data['meta_description']  =$request->meta_description[$language->id];



            // Update the Carmodel Content

            CarmodelContent::updateOrCreate([
                'language_id' => $language->id, 'carmodel_id' => $id
            ],
            $data);

        }



        return redirect('admin/taxonomy/carmodel');

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

            if(Car::where('carmodel_id', $id)->first() ){

                return response()->json(get_string('connected_item'), 400);

            }else {

                $this->delete($id);

            }

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

                if(Car::where('carmodel_id', $id)->first() || Service::where('carmodel_id', $id)->first()){

                    return response()->json(get_string('connected_item'), 400);

                }else {

                    $this->delete($id);

                }

            }

            return response()->json(get_string('success_delete'), 200);

        }else{

            return response()->json(get_string('something_happened'), 400);

        }

    }



    // Validating the carmodel on craete

    public function validateCat(Request $request, $lang_id){

        $this->validate($request, [

            'name.'.$lang_id.'' => 'required',

            'description.'.$lang_id.'' => 'max:300',
            'meta_title.'.$lang_id.'' => 'required',
            'meta_description.'.$lang_id.'' => 'required',

            'featured_image.'.$lang_id.'' => 'dimensions:min_width=1920,min_height=600'

        ],[

            'name.'.$lang_id.'.required'    => get_string('required_field'),

            'featured_image.'.$lang_id.'.dimension'      => get_string('min_dimension_featured'),

            'description.'.$lang_id.'.max'  => get_string('description_max_300')

        ]);

    }



    // Validating the carmodel on update

    public function validateCatUpdate(Request $request, $id, $lang_id){

        $this->validate($request, [

            'name.'.$lang_id.'' => 'required',

            'description.'.$lang_id.'' => 'max:300',
            'meta_title.'.$lang_id.'' => 'required',
            'meta_description.'.$lang_id.'' => 'required',

            'featured_image.'.$lang_id.'' => 'dimensions:min_width=1920,min_height=600'

        ],[

            // 'name.'.$lang_id.'.required'    => get_string('required_field'),

            'name.'.$lang_id.'.unique'      => get_string('not_unique_field'),

            'featured_image.'.$lang_id.'.dimension'      => get_string('min_dimension_featured'),

            'description.'.$lang_id.'.max'  => get_string('description_max_300')

        ]);

    }



    // Autocomplete

    public function autocomplete(Request $request){



        if($request->ajax()) {

            $term = $request->get('term') ? $request->get('term') : '';

            $results = [];

            $default = Language::where('default', 1)->first();



            $carmodels = CarmodelContent::where([['name', 'LIKE', '%' . $term . '%'],['language_id', '=', $default->id]])->take(5)->get();

            foreach ($carmodels as $carmodel) {

                $results[] = ['id' => $carmodel->carmodel_id, 'name' => $carmodel->name];

            }



            return $results;

        }else{

            return response()->json(get_string('something_happened'), 400);

        }

    }



    // Searching carmodel carmodels

    public function search(Request $request){

        $term = $request->get('term') ? $request->get('term') : '';



        $carmodel_ids = CarmodelContent::where('name', 'LIKE', '%'.$term.'%')->get()->pluck('carmodel_id');



        $carmodels = Carmodel::whereIn('id', $carmodel_ids)->orderBy('order', 'asc')->paginate(50);



        return view('admin.taxonomy.carmodel.search', compact('carmodels'));

    }



    // Helper function for delete

    public function delete($id){



        // Getting the carmodel

        $carmodel = Carmodel::findOrFail($id);



        // Deleting the Content

        $languages = $this->languages;

        foreach($languages as $language){

            $carmodel->content($language->id)->delete();

        }



        // Delete the Featured Image

        if(strpos($carmodel->featured_image, 'no_image.jpg') === FALSE && File::exists(public_path() . $carmodel->featured_image)){

            File::delete((public_path() . $carmodel->featured_image));

        }



        // Deleting the carmodel

        $carmodel->delete();

    }



    // Delete Featured Image

    public function deleteFeatured(Request $request, $id)

    {

        if($request->ajax()){

            $carmodel = Carmodel::findOrFail($id);

            if(strpos($carmodel->featured_image, 'no_image.jpg') === FALSE && File::exists(public_path() . $carmodel->featured_image)){

                File::delete((public_path() . $carmodel->featured_image));

            }

            $carmodel->featured_image = null;

            $carmodel->save();

            return response()->json(get_string('success_delete'), 200);

        }else{

            return response()->json(get_string('something_happened'), 400);

        }

    }

}

