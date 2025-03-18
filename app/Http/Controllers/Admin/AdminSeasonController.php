<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Language;
use App\Models\Admin\Season;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSeasonController extends Controller
{
    protected $languages;
    public function __construct(){
        $this->languages = Language::all();
    }

    public function index(){
        $seasons = Season::paginate(10);
        $languages = $this->languages;
        $default_language = Language::where('default', 1)->first();
        return view('admin.taxonomy.season', compact('seasons', 'default_language', 'languages'));
    }

    public function destroy(Request $request, $id){
        if($request->ajax()) {
            $season = Season::findOrFail($id);
            $season->delete();
            return response()->json(get_string('success_delete'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Storing Season
    public function store(Request $request){
        $languages = $this->languages;
        // Validating the request
        foreach($languages as $language){
            $this->validate($request, [
                'season.'.$language->id.'' => 'required',
            ], [
                'season.'.$language->id.'.required' => get_string('required_field')
            ]);
        }
        // Store the Season
        Season::create($request->all());

        // Refresh the page
        return redirect()->back();
    }

    // Updating Season
    public function update(Request $request){

        // Validating the request
        $languages = $this->languages;
        foreach($languages as $language){
            $this->validate($request, [
                'season.'.$language->id.'' => 'required',
            ], [
                'season.'.$language->id.'.required' => get_string('required_field')
            ]);
        }

        $season = Season::findOrFail($request->id);
        $season->season = $request->season;
        $season->save();

        // Refresh the page
        return redirect()->back();
    }

    // Getting Season
    public function getSeason(Request $request, $id){
        if($request->ajax()) {
            $season = Season::findOrFail($id);
            return response()->json($season->season, 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

}
