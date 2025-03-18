<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\Car;
use App\Models\Admin\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    protected $default_language, $static_data;
    public function __construct(){
        $this->default_language = default_language();
        $this->static_data = static_home();

    }

    public function index($alias){

        // Get the Category
        $default_language = $this->default_language;
        $static_data = $this->static_data;

        // Get Category, Cars and Services -- Eager Loading
        $category = Category::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('alias', $alias)->first();

        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])
            ->where('category_id', $category->id)
            ->where('status', 1)
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(6)->get();

        foreach ($cars as $pr) {
            $pr->price_from = get_min_price($pr->id);
        }

        if(get_setting('allow_featured_cars','car')){
            $featured_cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('category_id', $category->id)->where('status', 1)->where('featured', 1)->inRandomOrder()->take(6)->get();

            foreach ($featured_cars as $pr) {
                $pr->price_from = get_min_price($pr->id);
            }
        }else{
            $featured_cars = null;
        }

        $featured_services = null;
        if(get_setting('services_allowed', 'service')){
            $services = Service::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('category_id', $category->id)->where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();
            if(get_setting('allow_featured_services', 'service')){
                $featured_services = Service::with(['images', 'contentload' => function($query) use($default_language){
                    $query->where('language_id', $default_language->id);
                }])->where('category_id', $category->id)->where('status', 1)->where('featured', 1)->inRandomOrder()->take(6)->get();
            }else{
                $featured_services = null;
            }
        }else{
            $services = null;
        }
        return view('home.category', compact('static_data', 'category', 'default_language',
            'services', 'cars', 'featured_cars', 'featured_services'));
    }

    // Get Additional Cars
    public function get_cars(Request $request, $id){
        if($request->ajax()){
            $default_language = $this->default_language;
            $static_data = $this->static_data;
            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])
            ->where('category_id', $id)
            ->where('status', 1)
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(3);


            foreach ($cars as $pr) {
                $pr->price_from = get_min_price($pr->id);
            }

            return View::make('home.templates.cars', ['cars' => $cars, 'static_data' => $static_data])->render();
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Get Additional Services
    public function get_services(Request $request, $id){
        if($request->ajax()){
            $default_language = $this->default_language;
            $static_data = $this->static_data;
            $services = Service::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('category_id', $id)->where('status', 1)->orderBy('created_at', 'desc')->paginate(3);
            return View::make('home.templates.services', ['services' => $services, 'static_data' => $static_data])->render();
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }
}
