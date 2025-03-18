<?php
namespace App\Http\Controllers;

use App\Models\Admin\Carmake;
use App\Models\Admin\Car;
use App\Models\Admin\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CarmakeController extends Controller
{
    protected $default_language, $static_data;
    public function __construct(){
        $this->default_language = default_language();
        $this->static_data = static_home();

    }

    public function index($alias){

        // Get the Carmake
        $default_language = $this->default_language;
        $static_data = $this->static_data;

        // Get Carmake, Cars and Services -- Eager Loading
        $carmake = Carmake::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('alias', $alias)->first();

        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])
            ->where('carmake_id', $carmake->id)
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
            }])->where('carmake_id', $carmake->id)->where('status', 1)->where('featured', 1)->inRandomOrder()->take(6)->get();

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
            }])->where('carmake_id', $carmake->id)->where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();
            if(get_setting('allow_featured_services', 'service')){
                $featured_services = Service::with(['images', 'contentload' => function($query) use($default_language){
                    $query->where('language_id', $default_language->id);
                }])->where('carmake_id', $carmake->id)->where('status', 1)->where('featured', 1)->inRandomOrder()->take(6)->get();
            }else{
                $featured_services = null;
            }
        }else{
            $services = null;
        }
        return view('home.carmake', compact('static_data', 'carmake', 'default_language',
            'services', 'cars', 'featured_cars', 'featured_services'));
    }

    // Get Additional Carmodels
    public function get_carmodels(Request $request, $id){
        if($request->ajax()){
            $default_language = $this->default_language;
            $static_data = $this->static_data;
            $carmodels = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])
            ->where('carmake_id', $id)
            ->where('status', 1)
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(3);


            foreach ($carmodels as $cm) {
                $cm->price_from = get_min_price($cm->id);
            }

            return View::make('home.templates.carmodels', ['carmodels' => $carmodels, 'static_data' => $static_data])->render();
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }
}
