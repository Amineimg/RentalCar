<?php



namespace App\Http\Controllers\Admin;



use App\Common\Utility;

use App\Models\Admin\Language;

use App\Models\Admin\Carmake;

use App\Models\Admin\CarmakeContent;

use App\Models\Admin\Car;

use App\Models\Admin\Service;

use Illuminate\Http\Request;



use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;

use Intervention\Image\Facades\Image;



class AdminCarmakeController extends Controller

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

        $carmakes = Carmake::orderBy('order', 'asc')->paginate(10);

        //dd($carmakes);

        return view('admin.taxonomy.carmake.index', compact('carmakes'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $languages = $this->languages;

        return view('admin.taxonomy.carmake.create', compact('languages'));

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



        $data = [];

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

        $data['alias'] = Utility::alias($request->name[$default_language->id], [], 'carmake');

        $carmake = Carmake::create($data);

        unset($data);

        foreach($languages as $language) {

            // Getting name

            $data['name'] = $request->name[$language->id];



            // Getting content from textarea

            //$data['description'] = $request->description[$language->id];

            $data['carmake_id'] = $carmake->id;

            $data['language_id']  = $language->id;

            CarmakeContent::create($data);



        }



        return redirect('admin/taxonomy/carmake');

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

        $carmake = Carmake::findOrFail($id);

        $languages = $this->languages;

        return view('admin.taxonomy.carmake.edit', compact('carmake', 'languages'));

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



        // We get the carmake

        $carmake = Carmake::findOrFail($id);



        $data = [];

        // Handing the Featured image

        $file = $request->file('featured_image');

        if(isset($file) && $file->isValid()){

            if(strpos($carmake->featured_image, 'no_image.jpg') === FALSE && File::exists(public_path() . $carmake->featured_image)){

                File::delete((public_path() . $carmake->featured_image));

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



        $data['order'] = $request->order ? $request->order : $carmake->order;

        // Updating the carmake

        $default_language = Language::where('default', 1)->first();



        // Update Alias

        if($request->alias){

            if($request->alias == ''){

                $data['alias'] = $carmake->alias;

            }else{

                $alias = Utility::fixAlias($request->alias);

                $c = count(Carmake::where('alias', 'LIKE', '%'. $alias .'%')->where('id', '<>', $carmake->id)->get());

                if($c){

                    $data['alias'] = $alias .'-'. $c;

                }else{

                    $data['alias'] = $alias;

                }

            }

        }



        

        $carmake->update($data);



        // Updating the Content

        foreach($languages as $language) {



            unset($data);

            // Getting name

            $data['name'] = $request->name[$language->id];



            // Getting content from textarea

            $data['description'] = $request->description[$language->id];

            $data['carmake_id'] = $carmake->id;

            $data['language_id']  = $language->id;



            // Update the Carmake Content

            $carmake_content = CarmakeContent::where(['language_id' => $language->id, 'carmake_id' => $id])->first();

            $carmake_content->update($data);

        }



        return redirect('admin/taxonomy/carmake');

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

            if(Car::where('carmake_id', $id)->first() || Service::where('carmake_id', $id)->first()){

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

                if(Car::where('carmake_id', $id)->first() || Service::where('carmake_id', $id)->first()){

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



    // Validating the carmake on craete

    public function validateCat(Request $request, $lang_id){

        $this->validate($request, [

            'name.'.$lang_id.'' => 'required',

            'description.'.$lang_id.'' => 'max:300',

            'featured_image.'.$lang_id.'' => 'dimensions:min_width=1920,min_height=600'

        ],[

            'name.'.$lang_id.'.required'    => get_string('required_field'),

            'featured_image.'.$lang_id.'.dimension'      => get_string('min_dimension_featured'),

            'description.'.$lang_id.'.max'  => get_string('description_max_300')

        ]);

    }



    // Validating the carmake on update

    public function validateCatUpdate(Request $request, $id, $lang_id){

        $this->validate($request, [

            'name.'.$lang_id.'' => 'required',

            'description.'.$lang_id.'' => 'max:300',

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



            $carmakes = CarmakeContent::where([['name', 'LIKE', '%' . $term . '%'],['language_id', '=', $default->id]])->take(5)->get();

            foreach ($carmakes as $carmake) {

                $results[] = ['id' => $carmake->carmake_id, 'name' => $carmake->name];

            }



            return $results;

        }else{

            return response()->json(get_string('something_happened'), 400);

        }

    }



    // Searching carmake carmakes

    public function search(Request $request){

        $term = $request->get('term') ? $request->get('term') : '';



        $carmake_ids = CarmakeContent::where('name', 'LIKE', '%'.$term.'%')->get()->pluck('carmake_id');



        $carmakes = Carmake::whereIn('id', $carmake_ids)->orderBy('order', 'asc')->paginate(10);



        return view('admin.taxonomy.carmake.search', compact('carmakes'));

    }



    // Helper function for delete

    public function delete($id){



        // Getting the carmake

        $carmake = Carmake::findOrFail($id);



        // Deleting the Content

        $languages = $this->languages;

        foreach($languages as $language){

            $carmake->content($language->id)->delete();

        }



        // Delete the Featured Image

        if(strpos($carmake->featured_image, 'no_image.jpg') === FALSE && File::exists(public_path() . $carmake->featured_image)){

            File::delete((public_path() . $carmake->featured_image));

        }



        // Deleting the carmake

        $carmake->delete();

    }



    // Delete Featured Image

    public function deleteFeatured(Request $request, $id)

    {

        if($request->ajax()){

            $carmake = Carmake::findOrFail($id);

            if(strpos($carmake->featured_image, 'no_image.jpg') === FALSE && File::exists(public_path() . $carmake->featured_image)){

                File::delete((public_path() . $carmake->featured_image));

            }

            $carmake->featured_image = null;

            $carmake->save();

            return response()->json(get_string('success_delete'), 200);

        }else{

            return response()->json(get_string('something_happened'), 400);

        }

    }

}

