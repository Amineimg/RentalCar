<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Language;
use App\Models\Admin\Highlight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHighlightController extends Controller
{
    protected $languages;
    public function __construct(){
        $this->languages = Language::all();
    }

    public function index(){
        $highlights = Highlight::paginate(10);
        $languages = $this->languages;
        $default_language = Language::where('default', 1)->first();
        return view('admin.taxonomy.highlight', compact('highlights', 'default_language', 'languages'));
    }

    public function destroy(Request $request, $id){
        if($request->ajax()) {
            $highlight = Highlight::findOrFail($id);
            $highlight->delete();
            return response()->json(get_string('success_delete'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Storing Highlight
    public function store(Request $request){
        $languages = $this->languages;
        // Validating the request
        foreach($languages as $language){
            $this->validate($request, [
                'highlight.'.$language->id.'' => 'required',
            ], [
                'highlight.'.$language->id.'.required' => get_string('required_field')
            ]);
        }
        // Store the Highlight
        Highlight::create($request->all());

        // Refresh the page
        return redirect()->back();
    }

    // Updating Highlight
    public function update(Request $request){

        // Validating the request
        $languages = $this->languages;
        foreach($languages as $language){
            $this->validate($request, [
                'highlight.'.$language->id.'' => 'required',
            ], [
                'highlight.'.$language->id.'.required' => get_string('required_field')
            ]);
        }

        $highlight = Highlight::findOrFail($request->id);
        $highlight->highlight = $request->highlight;
        $highlight->save();

        // Refresh the page
        return redirect()->back();
    }

    // Getting Highlight
    public function getHighlight(Request $request, $id){
        if($request->ajax()) {
            $highlight = Highlight::findOrFail($id);
            return response()->json($highlight->highlight, 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

}
