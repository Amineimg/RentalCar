<?php
namespace App\Http\Controllers;

use App\Models\Admin\Car;
use App\Models\Admin\CarContent;
use App\Models\Admin\Service;
use App\Models\Admin\Season;
use App\Models\Admin\ServiceContent;
use App\Models\Admin\Booking;
use App\Models\Admin\CarDate;
use App\Models\Admin\Location;
use Illuminate\Support\Facades\Validator;
use \Carbon\Carbon;
use App\Http\Controllers\CarController;
use App\Http\Services\BookingService;
use App\Models\Admin\Carmake;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    protected $default_language, $static_data, $CarController;
    public function __construct(CarController $CarController){
        $this->default_language = default_language();
        $this->static_data = static_home();
        $this->CarController = $CarController;
    }

    public function index(Request $request){
        $default_language = $this->default_language;
        $static_data    = $this->static_data;

        $term = $request->keyword ? $request->keyword : '';

        $car_ids = CarContent::where('name', 'LIKE', '%'.$term.'%')->get()->pluck('car_id');

        // If filtering by features is enabled
        $feature_ids = [];
        if(get_setting('filter_by_features', 'car')){
            if($request->features){
                foreach($request->features as $feature){
                    $p = Car::whereNot('features', 'LIKE', '%"' . $feature . '"%')->pluck('id')->toArray();
                    array_push($feature_ids, $p);
                }
                if(count($feature_ids)) $feature_ids = array_unique(array_reduce($feature_ids, 'array_merge', []));
            }
        }
        // highlights
        $highlight_ids = [];
        if($request->highlights){
            foreach($request->highlights as $highlight){
                $p = Car::whereNot('highlights', 'LIKE', '%"' . $highlight . '"%')->pluck('id')->toArray();
                array_push($highlight_ids, $p);
            }
            if(count($highlight_ids)) $highlight_ids = array_unique(array_reduce($highlight_ids, 'array_merge', []));
        }

        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                        $query->where('language_id', $default_language->id);
                        }])
                            ->where('status', 1)
                            ->whereIn('id', $car_ids)
                            ->whereNotIn('id', $feature_ids);

        if($request->location_id) {
            $cars->where('location_id', $request->location_id);
        }
        if($request->category_id) {
            $cars->where('category_id', $request->category_id);
        }

        $cars = $cars->orderBy('created_at', 'desc')->get();

        if(get_setting('services_allowed', 'service')){
            $service_ids = ServiceContent::where('name', 'LIKE', '%'.$term.'%')->get()->pluck('service_id');

            $services = Service::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->whereIn('id', $service_ids);

            if($request->location_id) {
                $services->where('location_id', $request->location_id);
            }
            if($request->category_id) {
                $services->where('category_id', $request->category_id);
            }

            $services = $services->get();
        } else {
            $services = [];
        }

        if(get_setting('allow_featured_cars','car')){
            $featured_cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->where('featured', 1)->inRandomOrder()->take(6)->get();

            foreach ($featured_cars as $pr) {
                $pr->price_from = get_min_price($pr->id);
            }
        }else{
            $featured_cars = null;
        }

        foreach ($cars as $pr) {
            $pr->price_from = get_min_price($pr->id);
        }

        if(get_setting('services_allowed', 'service') && get_setting('allow_featured_services', 'service')){
            $featured_services = Service::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->where('featured', 1)->inRandomOrder()->take(6)->get();
        }else{
            $featured_services = null;
        }
        return view('home.search', compact('services', 'static_data', 'default_language', 'featured_cars', 'featured_services',
            'services', 'cars'));
    }

        // Get Cars
    public function cars(Request $request){
        // dd($request->all());
        $default_language = $this->default_language;
        $static_data = $this->static_data;

        $locations= Location::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);

        }])->where('featured', 1)->orderBy("order",'asc')->get();

        $pickup_location = $dropoff_location  = Location::where('id', $request->pickup_location)->first();
        $brands = Carmake::with(['models','contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);

        }])->orderBy("order",'asc')->get();
        $categories = Category::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);

        }])->orderBy("order",'asc')->get();

        // dd( Location::where('id', $request->pickup_location)->first());

        if(!empty($request->pickup_location)){
            $pickup_location= $request->pickup_location;
        }
        else{
           $pickup_location =  Session::has('pickup_location')  && !empty(Session::get('pickup_location')) ? Session::get('pickup_location') : '';
        }

        if(!empty($request->dropoff_location)){
            $dropoff_location= $request->dropoff_location;
        }
        else{
           $dropoff_location =  Session::has('dropoff_location')  && !empty(Session::get('dropoff_location')) ? Session::get('dropoff_location') : '';
        }

        if(!empty($request->start_date)){
            $start_date= !empty($request->start_time) ?  Carbon::parse( $request->start_date .' '.$request->start_time) :  Carbon::parse( $request->start_date);
        }
        else{
           $start_date =  Session::has('start_date')  && !empty(Session::get('start_date')) ? Session::get('start_date') : Carbon::now();
        }

        if(!empty($request->end_date)){
            $end_date= !empty($request->end_date) ?  Carbon::parse( $request->end_date .' '.$request->end_time) :  Carbon::parse( $request->end_date);
        }
        else{
           $end_date =  Session::has('end_date')  && !empty(Session::get('end_date')) ? Session::get('end_date') : Carbon::now()->addDay();
        }


        Session::put('pickup_location', $pickup_location);
        Session::put('dropoff_location', $dropoff_location);
        Session::put('start_date',$start_date);
        Session::put('end_date', $end_date);

        // dd($start_date,$end_date);

        // Handle Data
        $ids = [];
        $seasons_ids = [];
        if( !empty($request->start_date) || !empty($request->end_date)){
            // Bookings
            $ids        = Booking::whereDate('start_date', '<', $end_date->format("Y-m-d"))
                          ->WhereDate('end_date', '>', $start_date->format("Y-m-d"))
                          ->get()->pluck('car_id')->toArray();
            $dates = CarDate::whereNotIn('car_id', $ids)
                                 ->whereNotNull('dates')
                                 ->pluck('dates', 'car_id');

            // Owners booked dates
            if(!empty($dates)){
                foreach($dates as $key => $value){
                    $id = $key;
                    if(!empty($value)){
                        foreach($value as $kk => $vv){
                            if(Carbon::parse($key)->between($start_date->format("Y-m-d"), $end_date->format("Y-m-d"))){
                                $ids[] = $id;
                                break;
                            }
                        }
                    }
                }
            }
        }
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)
        ->where(function($query)use($request){
            if(isset($request->filterData) && !empty($request->filterData)){

                if(isset($request->filterData["brands"]) && !empty($request->filterData["brands"])){
                    $query->whereHas("carmodel",function($q)use($request){
                        return $q->whereIn('carmake_id', $request->filterData["brands"]);
                    });
                }

                if(isset($request->filterData["categories"]) && !empty($request->filterData["categories"])){
                    return $query->whereIn('category_id', $request->filterData["categories"]);

                }
                if(isset($request->filterData["transmission"]) && !empty($request->filterData["transmission"])){
                    return $query->whereIn('transmission', $request->filterData["transmission"]);

                }

                if(isset($request->filterData["fuel"]) && !empty($request->filterData["fuel"])){
                    return $query->whereIn('carburant', $request->filterData["fuel"]);

                }

            }
        });



        // if(!empty($request->budget)){
        //     $budget = explode('-', $request->budget);
        //     if($budget[1] == '+'){
        //         $seasons_ids = Season::select('car_id')
        //                              ->where('price_per_night', '<', [$budget[0]])
        //                              ->distinct('car_id')
        //                              ->get()->pluck('car_id')->toArray();
        //     }else{
        //         $seasons_ids = Season::select('car_id')
        //                              ->whereBetween('price_per_night', [$budget[0], $budget[1]])
        //                              ->distinct('car_id')
        //                              ->get()->pluck('car_id')->toArray();
        //     }

        //     $cars->whereIn('id',$seasons_ids);
        // }


        // highlights
        $highlight_ids = [];
        if(!empty($request->highlights)){
            $highlight_ids = Car::where('highlights', 'NOT LIKE', '%"' . $request->highlights . '"%')->pluck('id')->toArray();
        }
        if(!empty($highlight_ids)) $cars->whereNotIn('id', $highlight_ids);
        //dd($highlight_ids);

        if($request->location_id) $cars->where('location_id', $request->location_id);
        if($request->category_id) $cars->where('category_id', $request->category_id);


        $selected_car_id  = Session::get('selected_car_id');
        $selected_car=null;
        if($selected_car_id){
            $selected_car     = Car::find($selected_car_id);
            $cars->whereNotIn('id',[$selected_car_id]);
        }

        $cars = $cars->orderBy('alias', 'asc');



        $services = [];
        $featured_cars = null;
        $featured_services = null;

        $date1 = Carbon::parse($request->start_date . ' ' . $request->start_time);
        $date2 = Carbon::parse($request->start_date . ' ' . $request->end_time);



        // Calculer la différence en jours entre les deux dates
        $nombreDeJours = $start_date->diffInDays($end_date);
        // Calculer la différence en heures entre les deux dates
        $diffEnHeures = $date1->diffInHours($date2) % 24;

        // Vérifier si les heures sont déplacées de plus de 4 heures
        if ($diffEnHeures > 4) {
            // Si les heures sont déplacées de plus de 4 heures, ajouter un jour
            $nombreDeJours++;
        }

        foreach($cars as $car) {
            $car->booking_price =  BookingService::get_price_infos($start_date,$end_date,$car,$nombreDeJours);
        }

        $cars = $cars->get();

        return view("front.listing-list",[
            "cars"=>$cars,
            "locations"=>$locations,
            "brands"=>$brands,
            "categories"=>$categories,
            "filterDate"=>isset($request->filterData) ? $request->filterData : null,
        ]);

        return view('home.search', compact('static_data', 'default_language', 'featured_cars','selected_car', 'cars', 'filter_doors', 'pickup_location', 'dropoff_location', 'nombreDeJours'));
    }

    public function devis_email(Request $request) {
        $validator = Validator::make($request->all(), [
            'user_devis_email'         => 'email|required',
        ]);
        if ($validator->fails()) {
            return response()->json($static_data['strings']['something_happened'], 400);
        } else {
            $car = Car::findOrFail($request->input('car_id'));
            $p_locations = Location::with('contentload')->where('id', $request->input('pickup_loc'))->first();
            $d_locations = Location::with('contentload')->where('id', $request->input('dropoff_loc'))->first();
            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'From: ' . 'Jacarandacar Rental <noreply@jacarandacar.com>' . "\r\n";
            // $entete .= 'Cc: ' . 'fatimezzahra.seocom@gmail.com' . "\r\n";
            $entete .= 'Cc: ' . 'jacarandacar2021@gmail.com,yassineseocom@gmail.com,younesjacarandacar@gmail.com' . "\r\n";
            $entete .= 'Reply-To: <'.$request->input('user_devis_email').'>' . "\r\n";

            $data_info =    "<h3><font color='black'>Voiture                                        :   </font><font color='green'>".$car->contentload->name."</font></h3>".
                            "<h3><font color='black'>E-mail                                         :   </font><font color='green'>".$request->input('user_devis_email')."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée                                :   </font><font color='green'>".$p_locations->contentload->location."</font></h3>".
                            "<h3><font color='black'>Ville de retour                                :   </font><font color='green'>".$d_locations->contentload->location."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée                                 :   </font><font color='green'>".Session::get('start_date') . ", " . Session::get('start_time')."</font></h3>".
                            "<h3><font color='black'>Date de retour                                 :   </font><font color='green'>".Session::get('end_date') . ", " . Session::get('end_time') ."</font></h3>".
                            "<h3><font color='black'>Franchise                                      :   </font><font color='green'>".currency( $car->franchise,'EUR','EUR')."</font></h3>".
                            "<h3><font color='black'>Nombre de jours                                :   </font><font color='green'>".$request->input('booking_days'). " jour(s)" . "</font></h3>".
                            "<h3><font color='black'>Total de la résérvation                        :   </font><font color='green'>".currency( $request->input('booking_price') + ($car->franchise * $request->input('booking_days')) + $p_locations->tarif + $d_locations->tarif ,'EUR','EUR') . "</font></h3>".
                            "<h3><font color='black'>Langue                                         :   </font><font color='green'>".Session::get('language')."</font></h3>";

            try {
                // Utilisez les données pour envoyer un e-mail
                // echo $data_info; die;
                mail('info@jacarandacar.com', "Demande de devis", $data_info, $entete,'-f info@jacarandacar.com');
                // mail('fatimezzahra.seocom@gmail.com', "Demande de devis", $data_info, $entete,'-f info@jacarandacar.com');
                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }
    //REDIRECT TO SEARCH PAGE
    public function searchPage($id){
        $static_data       =  $this->static_data;
        $default_language  =  $this->default_language;
        Session::put('selected_car_id',$id);
        return view('home.search_page',compact('static_data', 'default_language'));
    }
}
