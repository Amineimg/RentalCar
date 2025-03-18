<?php

namespace App\Http\Controllers;

use App\Models\Admin\Booking;
use App\Models\Admin\Car;
use App\Models\Admin\CarDate;
use App\Models\Admin\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FilterController extends Controller
{
    protected $default_language, $static_data;
    public function __construct(){
        $this->default_language = default_language();
        $this->static_data = static_home();
    }

    // Get Cars
    public function cars(Request $request){

        if(!empty($request->start_date)) $request->session()->put('start_date', $request->start_date);
        if(!empty($request->end_date))   $request->session()->put('end_date', $request->end_date);
        //dd($request);
        if($request->ajax()){
            $default_language = $this->default_language;
            $static_data = $this->static_data;

            // Handle Data
            if($request->start_date != '' || $request->end_date != ''){
                // Bookings
                $start_date = ($request->start_date != '') ? Carbon::createFromFormat('d/m/Y', $request->start_date)->format('Y-m-d') : Carbon::now()->format('Y-m-d');
                $end_date = ($request->end_date != '') ? Carbon::createFromFormat('d/m/Y', $request->end_date)->format('Y-m-d') : Carbon::now()->addDay()->format('Y-m-d');
                $ids = Booking::whereDate('start_date', '<', $end_date)->WhereDate('end_date', '>', $start_date)->get()->pluck('car_id')->toArray();
                $dates = CarDate::whereNotIn('car_id', $ids)->whereNotNull('dates')->pluck('dates', 'car_id');

                // Owners booked dates
                $start_date = Carbon::createFromFormat('Y-m-d', $start_date);
                $end_date   = Carbon::createFromFormat('Y-m-d', $end_date);
                if(!empty($dates)){
                    foreach($dates as $key => $value){
                        $id = $key;
                        foreach($value as $value => $key){
                            if(Carbon::createFromFormat('m/d/Y', trim($key))->between($start_date, $end_date)){
                                $ids[] = $id;
                                break;
                            }
                        }
                    }
                }
            }else {
                $ids = [];
            }

            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->whereNotIn('id',$ids);
            //----------------

            if($request->location_id) $cars->where('location_id', $request->location_id);
            if($request->category_id) $cars->where('category_id', $request->category_id);

            // If filtering by features is enabled
            if(get_setting('filter_by_features', 'car')){
                $feature_ids = [];
                if($request->features){
                    foreach($request->features as $feature){
                        $p = Car::where('features', 'NOT LIKE', '%"' . $feature . '"%')->pluck('id')->toArray();
                        array_push($feature_ids, $p);
                    }
                    if(count($feature_ids)) $feature_ids = array_unique(array_reduce($feature_ids, 'array_merge', []));
                }
                if(count($feature_ids)) $cars->whereNotIn('id', $feature_ids);
            }


            if($request->sort_id){
                switch($request->sort_id){
                    case 1: $cars = $cars->orderBy('price_per_night', 'asc'); break;
                    case 2: $cars = $cars->orderBy('price_per_night', 'desc'); break;
                }
            }

            $cars = $cars->get();

            if($request->isExplore){
                $markers = $cars->pluck('location', 'id')->toArray();
                return View::make('home.templates.cars_explore', ['cars' => $cars, 'static_data' => $static_data, 'markers' => $markers])->render();
            }else{
                return View::make('home.templates.cars', ['cars' => $cars, 'static_data' => $static_data])->render();
            }

        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    // Get Services
    public function services(Request $request){
        if($request->ajax()){
            $default_language = $this->default_language;
            $static_data = $this->static_data;

            $services = Service::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1);

            if($request->location_id) $services->where('location_id', $request->location_id);
            if($request->category_id) $services->where('category_id', $request->category_id);

            $services = $services->get();

            if($request->isExplore){
                $markers = $services->pluck('location', 'id')->toArray();
                return View::make('home.templates.services_explore', ['services' => $services, 'static_data' => $static_data, 'markers' => $markers])->render();
            }else{
                return View::make('home.templates.services', ['services' => $services, 'static_data' => $static_data])->render();
            }
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

}
