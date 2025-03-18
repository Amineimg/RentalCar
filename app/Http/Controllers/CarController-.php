<?php

namespace App\Http\Controllers;

use App\Models\Admin\Booking;
use App\Models\Admin\Feature;
use App\Models\Admin\Highlight;
use App\Models\Admin\ExtraService;
use App\Models\Admin\Service;
use App\Models\Admin\Season;
use App\Models\Admin\Car;
use App\Models\Admin\CarDate;
use App\Models\Admin\Location;
use App\Models\Admin\Carmodel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection; 
use Session;

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

    public function booking(Request $request){
        $static_data      = $this->static_data;
        $default_language = $this->default_language;
        $car = Car::with(['images', 'front_image', 'contentload' => function ($query) use ($default_language) {
            $query->where('language_id', $default_language->id);
        }])->where('id', $request->car_id)->first();

        $car_services = [];
        if(!empty($car->services)){
            $car_services = Service::whereIn('id', $car->services)->get();
        }

        $seasons = Season::where('car_id', $request->car_id)->orderBy('start_date', 'ASC')->get();

        //IF REQUEST IS COMING FROM SEARCH PAGE
        if(!$request->home){
            $pickup_location  = Location::where('id', Session::get('pickup_location'))->first();
            $dropoff_location = Location::where('id', Session::get('dropoff_location'))->first();

            $x=Session::get('start_time');
            $y=Session::get('end_time');


            $start_date = Session::get('start_date').' '.Session::get('start_time');
            $end_date   = Session::get('end_date').' '.Session::get('end_time');
            
        }else{
            //IF REQUEST IS COMMING FROM HOME,PARC OR CAR_DETAILS PAGE
            $pickup_location  = Location::where('id', $request->pickup_location)->first();
            $dropoff_location = Location::where('id', $request->dropoff_location)->first();

            $x=$request->start_time;
            $y=$request->end_time;

            $start_date = $request->start_date.' '.$request->start_time;
            $end_date   = $request->end_date.' '.$request->end_time;
            
            
            Session::put('start_date', $request->start_date);
            Session::put('start_time', $request->start_time);
            Session::put('end_date', $request->end_date);
            Session::put('end_time', $request->end_time);
        }
        
        $zzz = '';
        
        $nights  = Carbon::createFromFormat('d/m/Y H:s', $end_date)->diffInDays(Carbon::createFromFormat('d/m/Y H:s', $start_date));
        $nights2 = Carbon::createFromFormat('d/m/Y H:s', $end_date)->diffInHours(Carbon::createFromFormat('d/m/Y H:s', $start_date));

        if($x>$y){
            $hour_time = ($nights2 - ($nights*24)) * -1;
        }else{
            $hour_time = $nights2 - ($nights*24);
        }

        
        if(!empty($car->promo)){
            $price = $this->get_price( $seasons->all(), $start_date, $end_date );
        }else{
            $price = $this->get_price( $seasons->all(), $start_date, $end_date );
        }

        if($hour_time>=4){
            $price = $price + ($price/$nights) + $dropoff_location->tarif + $pickup_location->tarif;
            $nights = $nights+1;
        }else if($hour_time>=0 && $hour_time<4){
            $price = $price + $dropoff_location->tarif + $pickup_location->tarif;
            
        }else if($hour_time<0 && $nights!=0){
            $price = $price + ($price/$nights)+ $dropoff_location->tarif + $pickup_location->tarif;
            $nights = $nights+1;
        }else{
            $nights = $nights+1; 
            $price = ($price/$nights)+ $dropoff_location->tarif + $pickup_location->tarif; 
        }
        return view('home.booking', compact(
                                            'car',
                                            'car_services',
                                            'pickup_location',
                                            'dropoff_location',
                                            'static_data',
                                            'default_language',
                                            'price',
                                            'nights'
                                        ));

    }

    public function book(Request $request){
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'email'         => 'email|required',
            'start_date'    => 'required',
            'end_date'      => 'required',
            'car_id'        => 'required',
            'payment_method'=> 'required',
            'nights_number' => 'required',
            'total'         => 'required',
            'price_base'    => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($static_data['strings']['something_happened'], 400);
        } else {
            $data = $request->all();
            $services = null;
            $i=0;
            foreach($data['services_data'] as $key=>$item){
                $services[$i]['id']   = $key;
                //caluculate service price
                $service = Service::find($key);
                $services[$i]['name']  = $service->service[1];
                $services[$i]['count'] = $item;
                $services[$i]['price'] = $service->price;
                $i++;
            }
            $data['services'] = json_encode($services);
        //    dd($data['services']);
            $data['start_date']   = Carbon::createFromFormat('d/m/Y H:s', $request->start_date);
            $data['end_date']     = Carbon::createFromFormat('d/m/Y H:s', $request->end_date);

            $client_data['name']          = $request->name;
            $client_data['email']         = $request->email;
            $client_data['phone']         = $request->phone;
            $client_data['flight_number'] = $request->flight_number;
            

            $data['client_data']          =json_encode($client_data);
            $data['car_name'] = Car::findOrFail($request->car_id)->alias;

            $booking = Booking::create($data);
            $this->sendBookingMails($request);
            return view('home.thanks_for_booking_page',compact('static_data','default_language'));
        }
    }

    public function details($id,$alias){
        $static_data     = $this->static_data;
        $car             = Car::with('seasons')->findOrFail($id);
        $car->price_from = get_min_price($car->id);
        return view('home.car_details',compact('static_data','car'));
    }

    public function sendBookingMails($request){
        
        $static_data = $this->static_data;
        $currency_code = get_setting('currency_code', 'site');
        $currency = currency()->getCurrency($request->currency_code);
        
        //dd($currency, $request->currency_code);
        $currency = $currency['symbol'] ? $currency['symbol'] : '';
        
        $data = $request->all();
        $data['completed']    = get_setting('autoapprove_booking', 'car');
        $data['start_date']   = Carbon::createFromFormat('d/m/Y H:s', $data['start_date'])->format('Y-m-d H:s');
        $dtotal = $data['total'];
        if ($currency_code != $request->currency_code) {
            $data['total']    = currency($data['total'], 'EUR','EUR', false);
        }
        //dd($data['total'], $dtotal  );
        $data['end_date']     = Carbon::createFromFormat('d/m/Y H:s', $data['end_date'])->format('Y-m-d H:s');
        $data['user_id']      = ($static_data['user']) ? $static_data['user']->id : 0;
        $data['user_data']['name'] = $data['name'];
        $data['user_data']['email']      = $data['email'];
        $data['user_data']['phone']      = $data['phone'];
        $data['user_data']['flight_number']      = $data['flight_number'];
        $data['gps'] = $request->services_data[30];
        $data['siege'] = $request->services_data[31];
        // dd($data['siege']);

        //dd($static_data['strings']);
        // Generate helper data
        $mail_data = $data;
        $car           = Car::where('id', $request->car_id)->first();
        $data['owner_id']   = $car->user_id;
        $data['status']     = 0;
        $mail_data['car'] = isset($car->contentload->name) ? $car->contentload->name : '';
        $mail_data['currency'] = $currency;
        $mail_data['subject']  = $static_data['strings']['booking_mail_subject'] ;
        $mail_data['admin_email']  = $static_data['site_settings']['contact_email'];
        $mail_data['site_name']    = $static_data['strings']['home_meta_title'];
        $mail_data['from']         = $static_data['strings']['from_2'];
        $mail_data['to']           = $static_data['strings']['to'];
        $mail_data['client_info']  = $static_data['strings']['client_info'];
        $mail_data['name_text']    = $static_data['strings']['name'];
        $mail_data['email_text']   = $static_data['strings']['email'];
        $mail_data['phone_text']   = $static_data['strings']['phone'];
        $mail_data['thank']        = $static_data['strings']['thank_you_for_book_mail'];
        $mail_data['regards']      = $static_data['strings']['regards'];
        $mail_data['str_car'] = $static_data['strings']['car'];
        $mail_data['str_total'] = $static_data['strings']['total'];
        $mail_data['mail_after_text_book'] = $static_data['strings']['mail_after_text_book'];
        \Log::info($mail_data["admin_email"]=='info@jacarandacar.com');
        // dd($mail_data);
        
        if($data['flight_number'] != "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] != 0 && $data['gps'] !=0 && $data['siege']!=0)
                { 
                    $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                                    "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                                    "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                                    "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                                    "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                                    "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                                    "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                                    "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                                    "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                                    "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                                    "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                                    "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                                    "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] == 0 && $data['gps'] !=0 && $data['siege']!=0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] != 0 && $data['gps'] !=0 && $data['siege']!=0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] == 0 && $data['gps'] !=0 && $data['siege']!=0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] == 0 && $data['gps'] !=0 && $data['siege']!=0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] == 0 && $data['gps'] !=0 && $data['siege']!=0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] != 0 && $data['gps'] !=0 && $data['siege']!=0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] == "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] != 0 && $data['gps'] !=0 && $data['siege']!=0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] != "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] != 0 && $data['gps'] ==0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] == 0 && $data['gps'] ==0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] != 0 && $data['gps'] ==0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] == 0 && $data['gps'] ==0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] == 0 && $data['gps'] ==0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] == 0 && $data['gps'] ==0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] != 0 && $data['gps'] ==0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] == "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] != 0 && $data['gps'] ==0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] != "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] != 0 && $data['siege']==0)
                { 
                    $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                                    "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                                    "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                                    "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                                    "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                                    "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                                    "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                                    "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                                    "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                                    "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                                    "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                                    "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] == 0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] != 0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] == 0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] == 0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] == 0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] != 0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] == "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] != 0 && $data['siege']==0)
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }else if($data['flight_number'] != "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] != 0 && $data['gps'] ==0 )
                { 
                    $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                                    "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                                    "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                                    "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                                    "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                                    "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                                    "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                                    "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                                    "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                                    "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                                    "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                                    "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] == 0 && $data['gps'] ==0 )
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] != 0 && $data['gps'] ==0 )
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        } else if($data['flight_number'] == "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] == 0 && $data['gps'] ==0 )
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] == 0 && $data['gps'] ==0 )
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] == 0 && $data['gps'] ==0 )
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] != "" && $data['dropoff_tarif'] == 0 && $data['pickup_tarif'] != 0 && $data['gps'] ==0 )
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>".$data['flight_number']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        else if($data['flight_number'] == "" && $data['dropoff_tarif'] != 0 && $data['pickup_tarif'] != 0 && $data['gps'] ==0 )
        { 
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>".
                            "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                            "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                            "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>".
                            "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                            "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                            "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>".
                            "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>".
                            "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                            "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                            "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>";
        }
        
               
        //  dd($data_info);

               //  "GPS                     :".$data['services_data[30]']."</font></h3>".
                       //  "Siége bébé              :".$data['services_data[31]']."</font></h3>".


        // "<table>
        //                   <tr>
        //                      <th width='15%'><h3><font color='black'>Nom</font></h3></th>
        //                      <th width='25%'><h3><font color='black'>E-mail</font></h3></th>
        //                      <th width='10%'><h3><font color='black'>Numéro Tél</font></h3></th>
        //                      <th width='20%'><h3><font color='black'>Numéro Vol</font></h3></th>
        //                      <th width='30%'><h3><font color='black'>Véhicule</font></h3></th>
        //                   </tr>
        //                      <tr>
        //                         <td width='15%'><h3><font color='blue'>".$data['name']." </font></h3></td>".
        //                         "<td width='25%'><h3><font color='blue'>".$data['email']." </font></h3></td>".
        //                         "<td width='10%'><h3><font color='blue'>".$data['phone']." </font></h3></td>".
        //                         "<td width='20%'><h3><font color='blue'>".$data['flight_number']." </font></h3></td>".
        //                         "<td width='30%'><h3><font color='blue'>".$car->contentload->name."</font></h3></td>
        //                     </tr>
        //                 </table>
        //                 <br>
        //                <table>
        //                   <tr>
        //                      <th width='25%'><h3><font color='black'>Ville d'arrivée</font></h3></th>
        //                      <th width='25%'><h3><font color='black'>Ville de retour</font></h3></th>
        //                      <th width='25%'><h3><font color='black'>Date d'arrivée</font></h3></th>
        //                      <th width='25%'><h3><font color='black'>Date de retour</font></h3></th>
        //                   </tr>
        //                      <tr>
        //                         <td width='25%'><h3><font color='blue'>".$data['pickup_location']." </font></h3></td>".
        //                         "<td width='25%'><h3><font color='blue'>".$data['dropoff_location']." </font></h3></td>".
        //                         "<td width='25%'><h3><font color='blue'>".$data['start_date']." </font></h3></td>".
        //                         "<td width='25%'><h3><font color='blue'>".$data['end_date']." </font></h3></td>
        //                       </tr>
        //                 </table>
        //                 <br>
        //                 <table>
        //                 <tr>
        //                    <th width='22%'><h3><font color='black'>Tarif Con-Depart</font></h3></th>
        //                    <th width='22%'><h3><font color='black'>Tarif Con-Retour</font></h3></th>
        //                    <th width='22%'><h3><font color='black'>Nombre Jours</font></h3></th>
        //                    <th width='17%'><h3><font color='black'>Franchise</font></h3></th>
        //                    <th width='17%'><h3><font color='black'>Total</font></h3></th>
        //                 </tr>
        //                    <tr>
        //                       <td width='22%'><h3><font color='blue'>".$data['pickup_tarif']." ".$currency." </font></h3></td>".
        //                       "<td width='22%'><h3><font color='blue'>".$data['dropoff_tarif']." ".$currency." </font></h3></td>".
        //                       "<td width='22%'><h3><font color='blue'>".$data['nights_number']." </font></h3></td>".
        //                       "<td width='17%'><h3><font color='blue'>".$data['franchise']." ".$currency." </font></h3></td>".
        //                       "<td width='17%'><h3><font color='blue'>".$data['total']." ".$currency." </font></h3></td>
        //                     </tr>
        //               </table>";



                  
                                
                    //  "Nom       :".$data['name']." <br>".
                    //  "E-mail     :".$data['email']."<br>".
                    //  "Numéro     :".$data['phone']."<br>".
                    //  "Ville d'arrivée     :".$data['pickup_location']."<br>".
                    //  "Tarif Convoyage Depart   :".$data['pickup_tarif']." ".$currency." <br>".
                    //  "Ville de retour     :".$data['dropoff_location']."<br>".
                    //  "Tarif Convoyage Retour     :".$data['dropoff_tarif']." ".$currency."<br>".
                    //  "Numéro Vol     :".$data['flight_number']."<br>".
                    //  "Date d'arrivée     :".$data['start_date']."<br>".
                    //  "Date de retour      :".$data['end_date']."<br>".
                    //  "Nombre Jours      :".$data['nights_number']."<br>".
                    // //  "GPS      :".$data['services_data[30]']."<br>".
                    // //  "Siége bébé      :".$data['services_data[31]']."<br>".
                    //  "Franchise      :".$data['franchise']." ".$currency."<br>".
                    //  "Fuel      :".$data['full_fuel']." ".$currency."<br>".
                    //  "Total      :".$data['total']." ".$currency."<br>".
                    //  "Véhicule       :".$car->contentload->name;
                // dd($data_info);

        $headers = array(
            'MIME-Version' => '1.0',
            'From' => 'Jacarandacar Rental <noreply@jacarandacar.com>',
            'Reply-To' => 'Jacarandacar Rental <info@jacarandacar.com>',
            //'Cc' => 'amine.seocom@gmail.com',
            'Content-type' => 'text/html;charset=UTF-8',
            'X-Mailer' => 'PHP/' . phpversion()
        );
        
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . 'Jacarandacar Rental <noreply@jacarandacar.com>' . "\r\n";
        //$entete .= 'Cc: ' . 'amine.seocom@gmail.com' . "\r\n";
        $entete .= 'Reply-To: ' . $data['name'].' <'.$data['email'].'>' . "\r\n";

        $email  = view('emails.booked',compact('mail_data'))->render();


        mail($data['email'], $mail_data['subject'], $email ,$headers,'-f info@jacarandacar.com');
        mail('info@jacarandacar.com', $mail_data['subject'], $data_info, $entete,'-f info@jacarandacar.com');
        // mail('seocom.hamza@gmail.com', $mail_data['subject'], $email ,$headers,'-f  info@jacarandacar.com');

        // Create the mail and send it
        // Mail::send('emails.booked', ['mail_data' => $mail_data], function ($m) use ($mail_data) {
        //     $m->from('info@jacarandacar.com'/*$mail_data['admin_email']*/, $mail_data['site_name']);
        //     $m->to($mail_data['email'], $mail_data['name'])->subject($mail_data['subject']);
        // });
        
        // Mail::send('emails.booked', ['mail_data' => $mail_data], function ($m) use ($mail_data) {
        //     $m->from('info@jacarandacar.com'/*$mail_data['admin_email']*/, $mail_data['site_name']);
        //     $m->to('info@jacarandacar.com'/*$mail_data['email']*/, $mail_data['name'])->subject($mail_data['subject']);
        // });
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
                    $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format(($start_year-1).'-m-d');
                }else{
                    $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format($start_year.'-m-d');
               }

                if( $season_end_month < $season_start_month && ( $end_year > $start_year || $start_month > $season_end_month ) ){
                    $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format(($start_year+1).'-m-d');
                }else{
                    $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format($start_year.'-m-d');
                }

                $start_diff_season_start = Carbon::parse($season_start_date)->diffInDays($start_date, false);
                $start_diff_season_end = Carbon::parse($season_end_date)->diffInDays($start_date, false);

                //if($season_end_month == 1) dd($season_start_date, $start_date, $start_diff_season_start, $start_diff_season_end);

                $debug['start_diff_season_start | start_diff_season_end'][] = $start_diff_season_start .' | '. $start_diff_season_end;

                if($start_diff_season_start >= 0 && $start_diff_season_end <= 0){
                    $id_start = $i;
                    $first_season_days = abs($start_diff_season_end)+1;
                    $debug['season start'] = $seasons[$i]->season;
                    $debug['season start diff'] = $start_diff_season_end;
                    if($first_season_days > $total_days){
                        $first_season_days = $total_days;
                    }
                }
                //------------
                // Verifier si date end entrer par le client existe dans la saison actuelle
                if( $season_end_month < $season_start_month && ( $end_year > $start_year || $end_month <= $season_start_month ) ){
                    $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format(($end_year-1).'-m-d');
                }else{
                    $season_start_date = Carbon::createFromFormat('Y-m-d', $season->start_date)->format($end_year.'-m-d');
                }

                if( $season_end_month < $season_start_month && $end_year == $start_year && $end_month > $season_start_month ){
                    $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format(($end_year+1).'-m-d');
                }else{
                    $season_end_date = Carbon::createFromFormat('Y-m-d', $season->end_date)->format($end_year.'-m-d');
                }


                $end_diff_season_start = Carbon::parse($season_start_date)->diffInDays($end_date, false);
                $end_diff_season_end   = Carbon::parse($season_end_date)->diffInDays($end_date, false);

                //if($season_end_month == 1) dd($season_end_date, $end_date, $end_diff_season_start, $end_diff_season_end);

                $debug['end_diff_season_start | end_diff_season_end'][] = $end_diff_season_start .' | '. $end_diff_season_end;

                if($end_diff_season_start >= 0 && $end_diff_season_end <= 0){
                    $id_end = $i;
                    $last_season_days = abs($end_diff_season_start)+1;
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

                        $included_seasons = array_slice( $seasons, $id_start, ($id_end-$id_start)+1 );
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

                if(!empty($included_seasons)){
                    $price = $this->get_price_in_season($included_seasons[0], $first_season_days, $total_days);
                    
                    if( $end_year == $start_year+1 && $id_start == $id_end ){
                        $rr = 1;
                        if( Carbon::parse($included_seasons[0]->start_date)->diffInDays($included_seasons[0]->end_date, false) < $total_days ){
                            $price += $this->get_price_in_season($included_seasons[0], $last_season_days, $total_days);
                            $kk = count($included_seasons);
                        }
                    }else{
                        if(count($included_seasons)>1){
                            //dd($price, $this->get_price_in_season($included_seasons[count($included_seasons)-1], $last_season_days, $total_days));
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
                ->orderBy('alias', 'asc')
                    ->get();
        foreach($cars as $car)
            $car->price_from = get_min_price($car->id);
        return view('home.parc',compact('cars','static_data','default_language'));
    }

    public function get_price_in_season($season, $days, $total_days){
        $price = 0;
        $total = 0;
        
        if($total_days >= 1 && $total_days < 4){
            if(isset($season->prices['d_2'])){
                $price = currency($season->prices['d_2'], Session::get('currency'), Session::get('currency'), false);
            }else{
                $price = $season->price_per_night;
            }
        }
        
        if($total_days >= 4 && $total_days < 7){
            if(isset($season->prices['d_7'])){
                $price = currency($season->prices['d_7'], Session::get('currency'), Session::get('currency'), false);
            }else{
                $price = $season->price_per_night;
            }
        }

        if($total_days >= 7){
            if(isset($season->prices['d_14'])){
                $price = currency($season->prices['d_14'], Session::get('currency'), Session::get('currency'), false);
            }else{
                $price = $season->price_per_night;
            }
        }

        if($price == 0){
            $price = $season->price_per_night;
        }
        
        
        $total = $days * $price;
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
