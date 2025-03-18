<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Language;
use App\Models\Admin\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminServiceController extends Controller
{
    protected $languages;
    public function __construct(){
        $this->languages = Language::all();
    }

    public function index(){
        $services = Service::paginate(10);
        $languages = $this->languages;
        $default_language = Language::where('default', 1)->first();
        return view('admin.taxonomy.service', compact('services', 'default_language', 'languages'));
    }

    public function destroy(Request $request, $id){
        if($request->ajax()) {
            $service = Service::findOrFail($id);
            $service->delete();
            return response()->json(get_string('success_delete'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Storing Service
    public function store(Request $request){
        //dd($request->all());
        $languages = $this->languages;
        // Validating the request
        foreach($languages as $language){
            $this->validate($request, [
                'service.'.$language->id.'' => 'required',
            ], [
                'service.'.$language->id.'.required' => get_string('required_field')
            ]);
        }

        $data = $request->all();
        /* Add image */
        $file = $request->file('image');
        //dd($file);
        if (isset($file) && $file->isValid()) {
            $photo_name =  uniqid() .'.'. $file->getClientOriginalExtension();
            $file->move(public_path('images/services/'), $photo_name);
            $data['image'] = $photo_name;
        }

        // Store the Service
        Service::create($data);

        // Refresh the page
        return redirect()->back();
    }

    // Updating Service
    public function update(Request $request){

        // Validating the request
        $languages = $this->languages;
        foreach($languages as $language){
            $this->validate($request, [
                'service.'.$language->id.'' => 'required',
            ], [
                'service.'.$language->id.'.required' => get_string('required_field')
            ]);
        }

        $service = Service::findOrFail($request->id);
        $service->service = $request->service;
        $service->max_number = $request->max_number;
        $service->price = $request->price;
        /* Add image */
        $file = $request->file('image');
        //dd($file);
        if (isset($file) && $file->isValid()) {
            $photo_name =  uniqid() .'.'. $file->getClientOriginalExtension();
            $file->move(public_path('images/services/'), $photo_name);
            $service->image = $photo_name;
        }
        $service->save();

        // Refresh the page
        return redirect()->back();
    }

    // Getting Service
    public function getService(Request $request, $id){
        if($request->ajax()) {
            $service = Service::findOrFail($id)->toArray();
            return response()->json($service, 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

}
