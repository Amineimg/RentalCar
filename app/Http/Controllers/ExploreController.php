<?php

namespace App\Http\Controllers;

use App\Models\Admin\Car;
use App\Models\Admin\Room;
use App\Models\Admin\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ExploreController extends Controller
{
    protected $default_language, $static_data;
    public function __construct(){
        $this->default_language = default_language();
        $this->static_data = static_home();
    }

    public function cars(){
        $default_language = $this->default_language;
        $static_data = $this->static_data;

        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();
        

        $markers = $cars->pluck('location', 'id')->toArray();
        $cars_array = $cars->keyBy('id')->toArray();

        foreach ($cars as $pr) {
            $pr->price_from = get_min_price($pr->id);
        }

        if(get_setting('allow_featured_cars','car')){
            $featured_cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->where('featured', 1)->inRandomOrder()->take(6)->get();

            foreach ($featured_cars as $pr) {
                $pr->price_from = get_min_price($pr->id);
            }

            $featured_markers = $featured_cars->pluck('location', 'id')->toArray();
        }else{
            $featured_cars = null;
            $featured_markers = null;
        }

        return view('home.explore.cars', compact('static_data', 'default_language', 'cars', 'featured_cars',
        'markers', 'cars_array', 'featured_markers'));
    }

    public function wishlist(){
        $default_language = $this->default_language;
        $static_data = $this->static_data;

        $wishlist = session()->get('wishlist');
        $markers = null;
        $cars_array = array();
        if(!empty($wishlist)){
            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->whereIn('id', $wishlist)->orderBy('created_at', 'desc')->take(6)->get();
            

            $markers = $cars->pluck('location', 'id')->toArray();
            $cars_array = $cars->keyBy('id')->toArray();

            foreach ($cars as $pr) {
                $pr->price_from = get_min_price($pr->id);
            }

            $featured_cars = null;
            $featured_markers = null;
        }else{
            $cars = array();
            $featured_cars = null;
            $featured_markers = null;
        }

        return view('home.explore.wishlist', compact('static_data', 'default_language', 'cars', 'featured_cars',
        'markers', 'cars_array', 'featured_markers'));
    }

    public function services(){
        $default_language = $this->default_language;
        $static_data = $this->static_data;

        $services = Service::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();

        $markers = $services->pluck('location', 'id')->toArray();
        $services_array = $services->keyBy('id')->toArray();

        if(get_setting('allow_featured_cars','car')){
            $featured_services = Service::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->where('featured', 1)->inRandomOrder()->take(6)->get();
            $featured_markers = $featured_services->pluck('location', 'id')->toArray();
        }else{
            $featured_services = null;
            $featured_services = null;
        }

        return view('home.explore.services', compact('static_data', 'default_language', 'services', 'featured_services',
            'markers', 'services_array', 'featured_markers'));
    }

    // Get Additional Cars
    public function get_cars(Request $request){

        $default_language = $this->default_language;
        $static_data = $this->static_data;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->orderBy('created_at', 'desc')->paginate(2);

        foreach ($cars as $pr) {
            $pr->price_from = get_min_price($pr->id);
        }

        $markers = $cars->pluck('location', 'id')->toArray();

        return View::make('home.templates.cars_explore', ['cars' => $cars, 'static_data' => $static_data, 'markers' => $markers])->render();

    }

    // Get Additional Cars
    public function get_wishlist_cars(Request $request){

        $default_language = $this->default_language;
        $static_data = $this->static_data;

        $wishlist = session()->get('wishlist');
        if(!empty($wishlist)){

            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->whereIn('id', $wishlist)->orderBy('created_at', 'desc')->paginate(2);

            foreach ($cars as $pr) {
                $pr->price_from = get_min_price($pr->id);
            }
            $markers = $cars->pluck('location', 'id')->toArray();
        }else{
            $cars = array();
            $markers = array();
        }


        return View::make('home.templates.cars_explore', [ 
                                                                'cars' => $cars, 
                                                                'static_data' => $static_data, 
                                                                'markers' => $markers 
                                                            ])->render();

    }

    // Get Additional Services
    public function get_services(Request $request){
        if($request->ajax()){
            $default_language = $this->default_language;
            $static_data = $this->static_data;
            $services = Service::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->orderBy('created_at', 'desc')->paginate(2);
            $markers = $services->pluck('location', 'id')->toArray();
            return View::make('home.templates.services_explore', ['services' => $services, 'static_data' => $static_data, 'markers' => $markers])->render();
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }
}
