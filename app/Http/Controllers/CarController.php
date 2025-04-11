<?php

namespace App\Http\Controllers;

use App\Constants\Constant;
use App\Http\Helpers\Helpers;
use App\Http\Requests\BookingRequest;
use App\Http\Services\BookingService;
use App\Mail\AdminBookingMail;
use App\Mail\ClientBookingMail;
use App\Models\Admin\Booking;
use App\Models\Admin\Feature;
use App\Models\Admin\Highlight;
use App\Models\Admin\ExtraService;
use App\Models\Admin\Service;
use App\Models\Admin\Season;
use App\Models\Admin\Car;
use App\Models\Admin\Price;
use App\Models\Admin\CarDate;
use App\Models\Admin\Location;
use App\Models\Admin\LocationContent;
use App\Models\Admin\Carmodel;
use App\Models\Admin\Currency;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use App\Models\Admin\Language;
use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use Locale;

class CarController extends Controller
{
    protected $default_language;
    protected $static_data;

    public function __construct(){
        $this->default_language = default_language();
        $this->static_data = static_home();
    }

    public function index($alias){
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $car = Car::with(['images', 'front_image', 'contentload' => function ($query) use ($default_language) {
            $query->where('language_id', $default_language->id);
        }])->where('alias', $alias)->first();

        // sort by name (only first language)
        $features = Feature::orderBy('feature', 'asc')->get();
        //dd($features->all());
        $highlights = Highlight::all();
        $extraservices = ExtraService::all();
        $services = Service::all();

        if ($car) {

            $seasons = Season::where('car_id', $car->id)->orderBy('start_date', 'ASC')->get();

            $dates = CarDate::where('car_id', $car->id)->pluck('dates')->toArray();
            if ($dates || !count($dates)) {
                $dates = [];
            }
            $bookings = Booking::where('car_id', $car->id)->get();
            foreach ($bookings as $booking) {
                $date = generateDateRangeB(Carbon::createFromFormat('Y-m-d', $booking->start_date), Carbon::createFromFormat('Y-m-d', $booking->end_date));
                if ($date) {
                    $dates[] = $date;
                }
            }
            if (isset($dates[0])) {
                $dates = array_reduce($dates, 'array_merge', []);
            }
            $reviews = Review::where('car_id', $car->id)->where('status', 1)->take(3)->get();

            $similar = new Collection();
            $max = Car::max('doors');
            $min = Car::min('doors');
            $i = 0;
            for($k=$min; $k<$max; $k++ ) {
                $similar_query = Car::with(['images', 'front_image', 'contentload' => function ($query) use ($default_language) {
                        $query->where('language_id', $default_language->id);
                    }])
                    ->where('id', '!=', $car->id)
                    ->where('doors', $car->doors+$i)
                    ->where( function ($query) use ($car) { $query
                                                                    ->where('category_id', $car->category->id)
                                                                    ->orWhere('location_id', $car->prop_location->id);

                        })->inRandomOrder()->take(3-$similar->count())->get();
                if($similar_query){
                    $similar = $similar->merge($similar_query);
                }
                if ($similar->count()>=3){
                    break;
                }
                if ($k-$i>0 && $i!=0) {
                    // code nombre chambre min
                    $similar_query = Car::with(['images', 'front_image', 'contentload' => function ($query) use ($default_language) {
                            $query->where('language_id', $default_language->id);
                        }])
                        ->where('id', '!=', $car->id)
                        ->where('doors', $car->doors-$i)
                        ->where( function ($query) use ($car) { $query
                                                                        ->where('category_id', $car->category->id)
                                                                        ->orWhere('location_id', $car->prop_location->id);

                            })->inRandomOrder()->take(3-$similar->count())->get();
                    if($similar_query)
                    $similar=$similar->merge($similar_query);
                    if ($similar->count()>=3){
                        break;
                    }
                }
                if ($car->doors+$i>=$max && $car->doors-$i<=$min)
                    break;
                $i++;
            }

            //dd($i, $similar);

            foreach ($similar as $pr) {
                $pr->price_from = get_min_price($pr->id);
            }

            if(!empty(Session::get('start_date')) && !empty(Session::get('end_date'))){
                $doors = 0;
                if(Session::get('doors')){
                    $doors = Session::get('doors');
                }

                $start_date = Carbon::createFromFormat('d/m/Y', Session::get('start_date'))->format('Y-m-d');
                $end_date   = Carbon::createFromFormat('d/m/Y', Session::get('end_date'))->format('Y-m-d');

                $days = Carbon::parse($end_date)->diffInDays($start_date);

                $total_book = $this->get_price($seasons->all(), $start_date, $end_date);
                //dd($start_date, $end_date, $total_book, $days);
                Session::put('total_book', $total_book);
                Session::put('days', $days);
            }

            $current_season = new Session();
            foreach ($seasons as $season) {
                $now_date = Carbon::now();
                $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format($now_date->year.'-m-d');
                $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format($now_date->year.'-m-d');
                $diff_start = Carbon::parse($season_start_date)->diffInDays($now_date, false);
                $diff_end = Carbon::parse($season_end_date)->diffInDays($now_date, false);

                if($diff_start >= 0 && $diff_end < 0){
                    $current_season = $season;
                }
            }

            $mainCar = $car;
            return view('home.car', compact( 'mainCar',
                                                  'car',
                                                  'static_data',
                                                  'features',
                                                  'highlights',
                                                  'extraservices',
                                                  'services',
                                                  'seasons',
                                                  'current_season',
                                                  'default_language',
                                                  'similar',
                                                  'reviews',
                                                  'dates' ));
        } else {
            abort(404);
        }
    }

    public function booking(Request $request,$car_alias){
        $static_data      = $this->static_data;
        $defaultLanguage =Helpers::getDefaultLanguage('object');
        $car = Car::with(['images', 'front_image', 'contentload' => function ($query) use ($defaultLanguage) {
            $query->where('language_id', $defaultLanguage->id);
        }])->where('alias', $car_alias)->first();

        $services = Service::get();

        $seasons = Season::where('car_id', $car->id)->orderBy('start_date', 'ASC')->get();

        // current language id
        $code = Session::get('language');
        $current_language = Language::where('code', $code)->first()->id;


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
            // dd( Session::has('end_date')  && !empty(Session::get('end_date')),Session::get('end_date'));
           $end_date =  Session::has('end_date')  && !empty(Session::get('end_date')) ? Session::get('end_date') : Carbon::now()->addDay();
        }
        // dd(Session::get('end_date'));


        Session::put('pickup_location', $pickup_location);
        Session::put('dropoff_location', $dropoff_location);
        Session::put('start_date',$start_date);
        Session::put('end_date', $end_date);
        $pickup_location_model = Location::where('id', $pickup_location)->first();
        $dropoff__location_model = Location::where('id', $dropoff_location)->first();


        $date1 = Carbon::parse( Session::get('start_date')->format("Y-m-d H:i"));
        $date2 = Carbon::parse(Session::get('start_date')->format("Y-m-d").' '. Session::get('end_date')->format("H:i"));
        // dd($date1,$date2);



        // Calculer la différence en jours entre les deux dates
        $nombreDeJours = $start_date->diffInDays($end_date);
        // Calculer la différence en heures entre les deux dates
        $diffEnHeures = $date1->diffInHours($date2) % 24;

        // Vérifier si les heures sont déplacées de plus de 4 heures
        if ($diffEnHeures > 4) {
            // Si les heures sont déplacées de plus de 4 heures, ajouter un jour
            $nombreDeJours++;
        }

        $price = BookingService::get_price_infos($start_date,$end_date,$car,$nombreDeJours);

        // current language id
        return view("front.bookings.booking-detail",[
            'car' => $car,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'price' => $price,
            'nombreDeJours' => $nombreDeJours,
            'services' => $services,
            'pickup_location' => $pickup_location_model,
            'dropoff_location' => $dropoff__location_model,
            // 'errors' => session()->get('errors')


        ]);

    }


    public function book(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                'first_name' => 'required',
                'last_name'  => 'required',
                'email'      => 'email|required',
                'payment_method'=> 'required',
            ],[
                "first_name.required"=>"hhhh",
                "last_name.required"=>"hhhh",
                "email.required"=>"hhhh",
            ]);
            if($validator->fails()){
                // dd($validator->errors()->all()); // Dumps all errors as an array

                // dd($validator);
                Session::flash('errors', $validator->errors());
                Session::flash('success', 'Operation successful!');
                // dd(Session::all());
                // return redirect()->back();

                return redirect()->back()->with('errors', $validator->errors())->with('success', 'Operation successful!');

            }

            // dd($request->all());
       $static_data = $this->static_data;
        $default_language = $this->default_language;

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
            // dd( Session::has('end_date')  && !empty(Session::get('end_date')),Session::get('end_date'));
           $end_date =  Session::has('end_date')  && !empty(Session::get('end_date')) ? Session::get('end_date') : Carbon::now()->addDay();
        }

        Session::put('pickup_location', $pickup_location);
        Session::put('dropoff_location', $dropoff_location);
        Session::put('start_date',$start_date);
        Session::put('end_date', $end_date);
        $pickup_location_model = Location::where('id', $pickup_location)->first();
        $dropoff__location_model = Location::where('id', $dropoff_location)->first();
        $car = Car::with(['images', 'front_image', 'contentload' => function ($query) use ($default_language) {
            $query->where('language_id', $default_language->id);
        }])->where('id', $request->car_id)->first();

        $date1 = Carbon::parse( Session::get('start_date')->format("Y-m-d H:i"));
        $date2 = Carbon::parse(Session::get('start_date')->format("Y-m-d").' '. Session::get('end_date')->format("H:i"));
        $nombreDeJours = $start_date->diffInDays($end_date);
        $diffEnHeures = $date1->diffInHours($date2) % 24;

        if ($diffEnHeures > 4) {
            $nombreDeJours++;
        }

        $price = BookingService::get_price_infos($start_date,$end_date,$car,$nombreDeJours);

            $data = $request->all();
            $services = [];
            $totalServices =0;
            if( isset($data['services']) && count($data['services'])>0){
                foreach($data['services'] as $key=>$item){
                    $services[$key]['id']   = $key;
                    //caluculate service price
                    $service = Service::find($key);
                    $services[$key]['name']  =Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$service);
                    $services[$key]['count'] = $item;
                    $services[$key]['price'] = $service->price;
                    $totalServices+= $item>0 ? ($item * $service->price) : 0;
                }
            }


        $franchise = $totalFranchise = 0;
        if($request->has("franchise")){
            $franchise = $car->franchise;
            $totalFranchise = $franchise * $nombreDeJours;
        }
        $totalPrice = $price  + ($pickup_location_model->tarif ?? 0) + ($dropoff__location_model->tarif ?? 0) + $totalServices + $totalFranchise;
        if (isset($request->payment_method ) &&  $request->payment_method== Constant::BANK_PAYMENT) {
            $totalPrice+=  $totalPrice * 0.03;
        }

            $data['services'] = json_encode($services);
            //    dd($data['services']);
            $data['start_date']   = $start_date;
            $data['end_date']     = $end_date;
            $data['completed']     = 0;
            $data['status']     = 0;
            $data['total'] = $totalPrice;
            $data['franchise'] = $franchise;
            $data['owner_id'] = null;

            $client_data['name']          = $request->first_name . ' '.$request->last_name;
            $client_data['email']         = $request->email;
            $client_data['phone']         = $request->phone;
            $client_data['flight_number'] = $request->flight_number;
            $client_data['description'] = $request->description;

            $data['client_data']          =json_encode($client_data);
            $data['car_name']=  $car->alias;
            $booking = Booking::create($data);
            $bookingMailData=[

                "pickupLocation"=>$pickup_location_model,
                "dropOffLocation"=>$dropoff__location_model,
                "periods"=>$nombreDeJours,
            ];
            BookingService::sendBookingMails($booking,$bookingMailData);


            return view('front.bookings.booking-success',[
                'price'=>$price,
                'nombreDeJours'=>$nombreDeJours,
                'booking'=>$booking,
                'client'=>json_decode($booking->client_data) ,
                'services'=>$services ,
                'car'=>$car,
                'pickup_location'=>$pickup_location_model,
                'dropoff_location'=>$dropoff__location_model,
                'errors' => session()->get('errors')

            ]);

    } catch (Exception $th) {
            dd($th->getMessage());
    }
    }

    public function details($id,$alias){
        $static_data     = $this->static_data;
        $default_language = $this->default_language;
        // $car             = Car::with('seasons')->findOrFail($id);
        $car             = Car::with(['seasons', 'contentload' => function ($query) use ($default_language) {
            $query->where('language_id', $default_language->id);
        }])->findOrFail($id);

        $to = ' à ';
        $more_than = 'Plus de ';
        switch (Session::get('language')) {
            case 'en': $to = ' to '; $more_than = 'More than'; break;
            case 'es': $to = ' a ';  $more_than = 'Más de';    break;
            case 'it': $to = ' a ';  $more_than = 'Più di';    break;
            case 'pl': $to = ' do ';  $more_than = 'Więcej';    break;
            case 'nl': $to = ' tot ';  $more_than = 'Meer dan';    break;
            case 'pt': $to = ' a ';  $more_than = 'Mais de';    break;
            default:   $to = ' à ';  $more_than = 'Plus de';   break;
        }
        $seasons_table_th = [];
        $seasons_table_th[] = '2 '.$to.' 4 '.$static_data['strings']['days'];
        $seasons_table_th[] = '5 '.$to.' 10 '.$static_data['strings']['days'];
        $seasons_table_th[] = $more_than.' 11 '.$static_data['strings']['days'];

        $seasons_table = [];

        // Verifier si le tableau des saisons est rempli
        $current_year = date('Y');
        $datedebut = Carbon::create($current_year, 1, 1, 0, 0, 0);
        $datefin = Carbon::create($current_year, 12, 31, 0, 0, 0);
        $CurrentYearNbrDays = $datefin->diffInDays($datedebut) + 1;
        $current_year_prices = Price::where(['car_id' => $id])
                ->whereBetween('date', [$datedebut, $datefin])->get();

        if( count($current_year_prices) == $CurrentYearNbrDays ) {
            $car_price = Price::where(['car_id' => $car->id, 'date' => Carbon::create($current_year, 1, 1, 0, 0, 0) ])->first();
            $seasons_table['normale']['title'] = $static_data["strings"]["normal_rates"];
            $seasons_table['normale']['p1']  = $car_price->d_4.' '. userCurrencySymbol();
            $seasons_table['normale']['p2']  = $car_price->d_10.' '. userCurrencySymbol();
            $seasons_table['normale']['p3']  = $car_price->d_11.' '. userCurrencySymbol();

            $car_price = Price::where(['car_id' => $car->id, 'date' => Carbon::create($current_year, 7, 1, 0, 0, 0) ])->first();
            $seasons_table['high']['title'] = $static_data["strings"]["high_season"];
            $seasons_table['high']['p1']  = $car_price->d_4.' '. userCurrencySymbol();
            $seasons_table['high']['p2']  = $car_price->d_10.' '. userCurrencySymbol();
            $seasons_table['high']['p3']  = $car_price->d_11.' '. userCurrencySymbol();
        } else {
            $car_price = Car::where(['id' => $car->id])->first();
            $seasons_table['normale']['title'] = $static_data["strings"]["normal_rates"];
            $seasons_table['normale']['p1']  = $car_price->price_per_night.' '. userCurrencySymbol();
            $seasons_table['normale']['p2']  = $car_price->d_10.' '. userCurrencySymbol();
            $seasons_table['normale']['p3']  = $car_price->d_11.' '. userCurrencySymbol();
        }
        $locations= Location::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);

        }])->where('featured', 1)->orderBy("order",'asc')->get();

        return view('front.cars.listing-details',[
            'car' => $car,
            'locations' => $locations,
        ]);
        if(!empty(request('test'))){
            //dd($car->seasons, $seasons_table);
            return view('home.car_details-2',compact('static_data','car', 'seasons_table', 'seasons_table_th'));
        }
        return view('home.car_details',compact('static_data', 'car', 'seasons_table', 'seasons_table_th'));
    }



    public function get_price($seasons, $start_date, $end_date){
        $price = 0;
        if(!empty($start_date) && !empty($end_date)){
            $debug = [];

            $start_date = Carbon::createFromFormat('d/m/Y H:s', $start_date);
            $end_date   = Carbon::createFromFormat('d/m/Y H:s', $end_date);
            $Client_date_diffInYears = $start_date->diffInYears($end_date, false);

            $debug['Client Start - End date'] = $start_date . ' | ' . $end_date;
            $debug['Client date diffInYears'] = $Client_date_diffInYears;

            $total_days  = $end_date->diffInDays($start_date);
            if($total_days==0){$total_days=1;}
            $start_year  = $start_date->year;
            $end_year    = $end_date->year;

            $start_month = $start_date->month;
            $end_month   = $end_date->month;


            $id_start = null;
            $id_end = null;
            $first_season_days = 0;
            $last_season_days = 0;

            $debug['Count seasons'] = count($seasons);
            $debug['Total days'] = $total_days;
            $debug['start_diff_season_start | start_diff_season_end'] = array();
            $debug['end_diff_season_start | end_diff_season_end'] = array();

            $debug['season_end_month | season_start_month'] = array();

            for($i = 0; $i < count($seasons); $i++) {
                $season = $seasons[$i];
                $season_start_month = Carbon::createFromFormat('Y-m-d', $season->start_date)->month;
                $season_end_month = Carbon::createFromFormat('Y-m-d', $season->end_date)->month;

                $debug['season_end_month | season_start_month'][] = $season_start_month.' | '.$season_end_month;

                //------------
                // Verifier si date start entrer par le client existe dans la saison actuelle

                if( $season_end_month < $season_start_month && $end_year == $start_year && $start_month <= $season_end_month ){
                    $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format(($start_year-1).'-m-d '.$start_date->format('H:i'));
                }else{
                    $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format($start_year.'-m-d '.$start_date->format('H:i'));
                }
                //$season_start_date =
                //dd($start_date->format('H:i'));

                if( $season_end_month < $season_start_month && ( $end_year > $start_year || $start_month > $season_end_month ) ){
                    $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format(($start_year+1).'-m-d '.$start_date->format('H:i'));
                }else{
                    $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format($start_year.'-m-d '.$start_date->format('H:i'));
                }

                //$season_end_date_hour = Carbon::createFromFormat('Y-m-d', $season->end_date)->format($start_year.'-m-d :);

                $start_diff_season_start = Carbon::parse($season_start_date)->diffInDays($start_date, false);
                $start_diff_season_end = Carbon::parse($season_end_date)->diffInDays($start_date, false);

                //if($season_end_month == 1) dd($season_start_date, $start_date, $start_diff_season_start, $start_diff_season_end);

                $debug['start_diff_season_start | start_diff_season_end'][] = $start_diff_season_start .' | '. $start_diff_season_end;

                if($start_diff_season_start >= 0 && $start_diff_season_end <= 0){
                    $id_start = $i;
                    $first_season_days = abs($start_diff_season_end) + 1;
                    $debug['season start'] = $seasons[$i]->season;
                    $debug['season start diff'] = $start_diff_season_end;
                    if($first_season_days > $total_days){
                        $first_season_days = $total_days;
                    }
                }
                //dd($first_season_days, $start_diff_season_end, $season_end_date, $start_date);
                //------------
                // Verifier si date end entrer par le client existe dans la saison actuelle
                if( $season_end_month < $season_start_month && ( $end_year > $start_year || $end_month <= $season_start_month ) ){
                    $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format(($end_year-1).'-m-d '.$start_date->format('H:i'));
                }else{
                    $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format($end_year.'-m-d '.$start_date->format('H:i'));
                }


                if( $season_end_month < $season_start_month && $end_year == $start_year && $end_month > $season_start_month ){
                    $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format(($end_year+1).'-m-d '.$start_date->format('H:i'));
                }else{
                    $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format($end_year.'-m-d '.$start_date->format('H:i'));
                }

                //$season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format(($end_year+1).'-m-d '.$start_date->format('H:i'));


                $end_diff_season_start = Carbon::parse($season_start_date)->diffInDays($end_date, false);
                $end_diff_season_end   = Carbon::parse($season_end_date)->diffInDays($end_date, false);

                //if($i == 1) dd($season_start_date, $end_date, $end_diff_season_start);

                //if($season_end_month == 1) dd($season_end_date, $end_date, $end_diff_season_start, $end_diff_season_end);

                $debug['end_diff_season_start | end_diff_season_end'][] = $end_diff_season_start .' | '. $end_diff_season_end;

                if($end_diff_season_start > 0 && $end_diff_season_end <= 0){
                    $id_end = $i;
                    $last_season_days = abs($end_diff_season_start);
                    $debug['season end'] = $seasons[$i]->season;
                    $debug['season end diff'] = $last_season_days;
                    if($last_season_days > $total_days){
                        $last_season_days = $total_days;
                    }
                }
                //------------
            }
            $debug['id_start | id_end'] = $id_start . ' | ' . $id_end;

            //------------------------------
            $debug['included seasons'] = array();
            if($Client_date_diffInYears == 0 ){

                if( isset($id_start) && isset($id_end) ){
                    if($end_year == $start_year && $id_start <= $id_end){
                        $debug['condition'] = 1;
                        /*
                        0 - S1 -----> Start date 2020
                        1 - S2
                        2 - S3
                        3 - S4 -----> End date 2020
                        4 - S5
                        5 - S6

                        Doit retourner { S1, S2, S3, S4 }
                        */

                        $included_seasons = array_slice( $seasons, $id_start, ($id_end-$id_start)+1 );/////////////////////////
                        foreach ($included_seasons as $included_season) {
                            $debug['included seasons'][] = $included_season->start_date . ' | ' . $included_season->end_date;
                        }
                    }elseif($end_year == $start_year && $id_start > $id_end){
                        $debug['condition'] = 1;
                        /*
                        4 - S1 -----> Start date 2020
                        5 - S2
                        0 - S3
                        1 - S4 -----> End date 2020
                        2 - S5
                        3 - S6

                        Doit retourner { S4, S5, S0, S1 }
                        */

                        $included_seasons = array_merge(
                                                        array_slice( $seasons, $id_start, count($seasons)-$id_start ),
                                                        array_slice( $seasons, 0, $id_end+1 )
                                                    );

                        foreach ($included_seasons as $included_season) {
                            $debug['included seasons'][] = $included_season->start_date . ' | ' . $included_season->end_date;
                        }
                    }elseif( $end_year == $start_year+1 && $id_start == $id_end ){
                        $debug['condition'] = 2;
                        /*
                        0 - S1
                        1 - S2
                        2 - S3
                        3 - S4
                        4 - S5 -----> Start date 2020 -----> End date 2021
                        5 - S6

                        Doit retourner { S1, S2, S3, S4, S5, S6 } ou { S5 }
                        */
                        if( Carbon::parse($seasons[$id_start]->start_date)->diffInDays($seasons[$id_start]->end_date, false) < $total_days ){
                            $included_seasons = $seasons;
                        }else{
                            $included_seasons[] = $seasons[$id_start];
                        }

                        foreach ($included_seasons as $included_season) {
                            $debug['included seasons'][] = $included_season->start_date . ' | ' . $included_season->end_date;
                        }

                    }elseif( $end_year == $start_year+1 && $id_start > $id_end ){
                        $debug['condition'] = 3;
                        /*
                        0 - S1
                        1 - S2 -----> End date 2021
                        2 - S3
                        3 - S4
                        4 - S5 -----> Start date 2020
                        5 - S6

                        Doit retourner { { S5, S6 } { S1, S2 } }
                        */
                        $included_seasons = array_merge( array_slice( $seasons, $id_start, (count($seasons)-$id_start) ),
                                                         array_slice( $seasons, 0, $id_end+1 ) );

                        foreach ($included_seasons as $included_season) {
                            $debug['included seasons'][] = $included_season->start_date . ' | ' . $included_season->end_date;
                        }

                    }
                }
                if(!empty($included_seasons)){//dd($included_seasons[0]);die;
                    $price = $this->get_price_in_season($included_seasons[0], $first_season_days, $total_days);
                    //dd($included_seasons, $price, $total_days, $first_season_days);

                    if( $end_year == $start_year+1 && $id_start == $id_end ){
                        $rr = 1;
                        if( Carbon::parse($included_seasons[0]->start_date)->diffInDays($included_seasons[0]->end_date, false) < $total_days ){
                            $price += $this->get_price_in_season($included_seasons[0], $last_season_days, $total_days);
                            $kk = count($included_seasons);
                        }
                    }else{
                        if(count($included_seasons)>1){//dd($price);
                            $price += $this->get_price_in_season($included_seasons[count($included_seasons)-1], $last_season_days, $total_days);//////////////////////////////////////
                        }
                        $rr = 2;
                        $kk = count($included_seasons)-1;
                    }
                    if(count($included_seasons)> $rr){
                        for($i = 1; $i < $kk; $i++) {
                            $season = $included_seasons[$i];
                            $season_days = Carbon::parse($season->start_date)->diffInDays($season->end_date)+1;
                            $price +=  $this->get_price_in_season($season, $season_days, $total_days);
                        }
                    }
                }
            }elseif($Client_date_diffInYears != 0){
                $debug['condition'] = 4;
                $included_seasons = $seasons;

                if(!empty($included_seasons)){
                    $price = $this->get_price_in_season($included_seasons[0], $first_season_days, $total_days);
                    $rr = 1;

                    if( $end_year == $start_year+1 && $id_start == $id_end ){
                        $price += $this->get_price_in_season($included_seasons[0], $last_season_days, $total_days);
                        $kk = count($included_seasons);
                    }else{
                        if(count($included_seasons)>1){
                            $price += $this->get_price_in_season($included_seasons[count($included_seasons)-1], $last_season_days, $total_days);
                        }
                        $rr = 2;
                        $kk = count($included_seasons)-1;
                    }
                    if(count($included_seasons)> $rr){
                        for($i = 1; $i < $kk; $i++) {
                            $season = $included_seasons[$i];
                            $season_days = Carbon::parse($season->start_date)->diffInDays($season->end_date)+1;
                            $price +=  $this->get_price_in_season($season, $season_days, $total_days);
                        }
                    }
                }

            }
        }

        $debug['Total price'] = $price;

        //dd($debug);

        return $price;
    }

    public function getParcAuto(){
        $default_language = $this->default_language;
        $static_data      = $this->static_data;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                    $query->where('language_id', $default_language->id);
                }])->where('status', 1)
                ->orderBy('listing_order', 'asc')
                    ->get();

        foreach($cars as $car)
            $car->price_from = get_min_price($car->id);

        return view('home.parc',compact('cars','static_data','default_language'));
    }

    public function get_price_in_season($season, $days, $total_days){
        $price = 0;
        $total = 0;

        if($total_days >= 1 && $total_days <= 4){
            if(isset($season->prices['d_2'])){
                $price = $season->prices['d_2'].' '. userCurrencySymbol();
            }else{
                $price = $season->price_per_night;
            }
        }else if($total_days >= 5 && $total_days <= 10){
            if(isset($season->prices['d_7'])){
                $price = $season->prices['d_7'].' '. userCurrencySymbol();
            }else{
                $price = $season->price_per_night;
            }
        }else if($total_days >= 11){
            if(isset($season->prices['d_14'])){
                $price = $season->prices['d_14'].' '. userCurrencySymbol();
            }else{
                $price = $season->price_per_night;
            }
        }

        if($price == 0){
            $price = $season->price_per_night;
        }


        $total = $days * $price;
        // dd($total);
        return $total;
    }


    public function get_ajax_price(Request $request){
        $seasons = Season::where('car_id', $request->id)->orderBy('start_date', 'ASC')->get();
        //dd($seasons->all());
        $start_date = $request->start_date;
        $end_date   = $request->end_date;
        $response['log']   = $seasons->all();
        $response['total'] = $this->get_price( $seasons->all(), $start_date, $end_date );
        $response['days']  = Carbon::parse($end_date)->diffInDays($start_date);
        return $response;
    }


    public function get_carmodels(Request $request){
        $default_language = $this->default_language;
        $carmodels = Carmodel::with(['contentload' => function ($query) use ($default_language) {
            $query->where('language_id', $default_language->id);
        }])->where('carmake_id', $request->carmake_id)->orderBy('alias', 'ASC')->get();
        $data = array();
        foreach ($carmodels as $carmodel) {
            $data[] = array( 'id' => $carmodel->id, 'name' => $carmodel->contentload->name );
        }
        //dd($data);
        return $data;
    }


    public function add_to_wishlist(Request $request){
        //Session::forget('wishlist');
        if(!empty($request->car_id)){
            if(Session::has('wishlist') == false){
                Session::put('wishlist', [] );
            }
            if(!in_array($request->car_id, Session::get('wishlist'))){
                Session::push('wishlist', $request->car_id );
            }
        }

        return Session::get('wishlist');
    }


    public function remove_from_wishlist(Request $request){
        $wishlist = session()->pull('wishlist', []); // Second argument is a default value
        if(($key = array_search($request->car_id, $wishlist)) !== false) {
            unset($wishlist[$key]);
        }
        Session::put('wishlist', array_values($wishlist));

        return Session::get('wishlist');
    }
}
