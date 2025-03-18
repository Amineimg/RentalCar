<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Language;
use App\Models\Admin\PriceRange;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPriceRangeController extends Controller
{
    protected $languages;
    public function __construct(){
        $this->languages = Language::all();
    }

    public function index(){
        $price_ranges = PriceRange::paginate(10);
        $languages = $this->languages;
        $default_language = Language::where('default', 1)->first();
        return view('admin.taxonomy.price_range', compact('price_ranges', 'default_language', 'languages'));
    }

    public function destroy(Request $request, $id){
        if($request->ajax()) {
            $price_range = PriceRange::findOrFail($id);
            $price_range->delete();
            return response()->json(get_string('success_delete'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Storing PriceRange
    public function store(Request $request){
        $languages = $this->languages;
        // Validating the request
        foreach($languages as $language){
            $this->validate($request, [
                'price_range.'.$language->id.'' => 'required',
            ], [
                'price_range.'.$language->id.'.required' => get_string('required_field')
            ]);
        }
        // Store the PriceRange
        PriceRange::create($request->all());

        // Refresh the page
        return redirect()->back();
    }

    // Updating PriceRange
    public function update(Request $request){

        // Validating the request
        $languages = $this->languages;
        foreach($languages as $language){
            $this->validate($request, [
                'price_range.'.$language->id.'' => 'required',
            ], [
                'price_range.'.$language->id.'.required' => get_string('required_field')
            ]);
        }

        $price_range = PriceRange::findOrFail($request->id);
        $price_range->price_range = $request->price_range;
        $price_range->save();

        // Refresh the page
        return redirect()->back();
    }

    // Getting PriceRange
    public function getPriceRange(Request $request, $id){
        if($request->ajax()) {
            $price_range = PriceRange::findOrFail($id);
            return response()->json($price_range->price_range, 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }
}
