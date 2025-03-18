<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Language;
use App\Models\Admin\ExtraService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminExtraServiceController extends Controller
{
    protected $languages;
    public function __construct(){
        $this->languages = Language::all();
    }

    public function index(){
        $extraservices = ExtraService::paginate(10);
        $languages = $this->languages;
        $default_language = Language::where('default', 1)->first();
        return view('admin.taxonomy.extraservice', compact('extraservices', 'default_language', 'languages'));
    }

    public function destroy(Request $request, $id){
        if($request->ajax()) {
            $extraservice = ExtraService::findOrFail($id);
            $extraservice->delete();
            return response()->json(get_string('success_delete'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Storing ExtraService
    public function store(Request $request){
        $languages = $this->languages;
        // Validating the request
        foreach($languages as $language){
            $this->validate($request, [
                'extraservice.'.$language->id.'' => 'required',
            ], [
                'extraservice.'.$language->id.'.required' => get_string('required_field')
            ]);
        }
        // Store the ExtraService
        ExtraService::create($request->all());

        // Refresh the page
        return redirect()->back();
    }

    // Updating ExtraService
    public function update(Request $request){

        // Validating the request
        $languages = $this->languages;
        foreach($languages as $language){
            $this->validate($request, [
                'extraservice.'.$language->id.'' => 'required',
            ], [
                'extraservice.'.$language->id.'.required' => get_string('required_field')
            ]);
        }

        $extraservice = ExtraService::findOrFail($request->id);
        $extraservice->extraservice = $request->extraservice;
        $extraservice->save();

        // Refresh the page
        return redirect()->back();
    }

    // Getting ExtraService
    public function getExtraService(Request $request, $id){
        if($request->ajax()) {
            $extraservice = ExtraService::findOrFail($id);
            return response()->json($extraservice->extraservice, 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

}
