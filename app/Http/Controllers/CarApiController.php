<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Carbon\Carbon;
use App\Models\Admin\Car;
use App\Models\Admin\Price;
use App\Models\Admin\Review;
use App\Models\Admin\Season;
use App\Models\Admin\Booking;
use App\Models\Admin\Feature;
use App\Models\Admin\Service;
use App\Models\Admin\CarDate;
use App\Models\Admin\Language;
use App\Models\Admin\Location;
use App\Models\Admin\Highlight;
use Illuminate\Support\Collection;
use App\Models\Admin\ExtraService;
use App\Http\Resources\CarResource;
use App\Http\Services\BookingService;
use App\Models\Admin\Currency;
use App\Models\Admin\LocationContent;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class CarApiController extends Controller
{
    protected $static_data, $default_language;

     public function __construct()
    {
        $this->static_data = static_home();
    //   $this->middleware(function ($request, $next) {
    //         if ($request->getMethod() === "OPTIONS") {
    //             $response = response()->json('OK', 200);
    //             $response->headers->set('Access-Control-Allow-Origin', 'https://jacarandacar.fr');
    //             $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    //             $response->headers->set('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    //             return $response;
    //         }

    //         $response = $next($request);
    //         $response->headers->set('Access-Control-Allow-Origin', 'https://jacarandacar.fr');
    //         $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    //         $response->headers->set('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    //         return $response;
    //     });
    }


    public function getCars(Request $request)
    {
        $static_data      = $this->static_data;
        $default_language = Language::where('code', $request->lang)->first();

        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)
        ->orderBy('alias', 'asc')
        // ->take(6)
        ->get();

        foreach($cars as $car) {
            $car->price_from = get_min_price($car->id);
        }


        $response = ['cars' => CarResource::collection($cars)];
        return response()->json($response);
    }

    public function getCar(Request $request, $id, $alias){
        $static_data     = $this->static_data;
        $default_language = Language::where('code', $request->lang)->first();
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
            $seasons_table['normale']['p1']  = $car_price->d_4;
            $seasons_table['normale']['p2']  = $car_price->d_10;
            $seasons_table['normale']['p3']  = $car_price->d_11;

            $car_price = Price::where(['car_id' => $car->id, 'date' => Carbon::create($current_year, 7, 1, 0, 0, 0) ])->first();
            $seasons_table['high']['title'] = $static_data["strings"]["high_season"];
            $seasons_table['high']['p1']  = $car_price->d_4  .' '.userCurrencySymbol();;
            $seasons_table['high']['p2']  = $car_price->d_10  .' '.userCurrencySymbol();;
            $seasons_table['high']['p3']  = $car_price->d_11  .' '.userCurrencySymbol();;
        } else {
            $car_price = Car::where(['id' => $car->id])->first();
            $seasons_table['normale']['title'] = $static_data["strings"]["normal_rates"];
            $seasons_table['normale']['p1']  =$car_price->price_per_night .' '.userCurrencySymbol();
            $seasons_table['normale']['p2']  = $car_price->d_10 .' '.userCurrencySymbol();
            $seasons_table['normale']['p3']  = $car_price->d_11 .' '.userCurrencySymbol();
        }

        $response = [
            'car' => $car,
            'image' => asset('/images/data/'.$car->front_image->image),
            'seasons_table' => $seasons_table,
            'seasons_table_th' => $seasons_table_th
        ];

        return response()->json($response);
    }

    public function getCarForBook(Request $request, $id) {
        $default_language = Language::where('code', $request->lang)->first();
        $car = Car::with(['images', 'seasons', 'front_image', 'contentload' => function ($query) use ($default_language) {
            $query->where('language_id', $default_language->id);
        }])->where('id', $id)->first();

        $car_services = [];
        if(!empty($car->services)){
            $car_services = Service::whereIn('id', $car->services)->get();
        }

        $data_services = [];
        foreach($car_services as $car_service) {
            $data_services[] = [
                "id"         => $car_service->id,
                "image"      => asset($car_service->image),
                "price"      => $car_service->price,
                "title"      => $car_service->service[$default_language->id] ?? null,
                "currency"   => $car_service->price .' '.userCurrencySymbol(),
                "max_number" => $car_service->max_number
            ];
        }

        $current_year = date('Y');
        $datedebut = Carbon::create($current_year, 1, 1, 0, 0, 0);
        $datefin = Carbon::create($current_year, 12, 31, 0, 0, 0);
        $CurrentYearNbrDays = $datefin->diffInDays($datedebut) + 1;
        $current_year_prices = Price::where(['car_id' => $car->id])
        ->whereBetween('date', [$datedebut, $datefin])->get();

        if( count($current_year_prices) == $CurrentYearNbrDays ) {
            $car_price = Price::where(['car_id' => $car->id, 'date' => Carbon::create($current_year, 1, 1, 0, 0, 0) ])->first();
            $seasons_table['normale']['p1']  = $car_price->d_4;
            $seasons_table['normale']['p2']  = $car_price->d_10;
            $seasons_table['normale']['p3']  = $car_price->d_11;

            $car_price = Price::where(['car_id' => $car->id, 'date' => Carbon::create($current_year, 7, 1, 0, 0, 0) ])->first();
            $seasons_table['high']['p1']  = $car_price->d_4;
            $seasons_table['high']['p2']  = $car_price->d_10;
            $seasons_table['high']['p3']  = $car_price->d_11;
        } else {
            $car_price = Car::where(['id' => $car->id])->first();
            $seasons_table['normale']['p1']  = $car_price->price_per_night;
            $seasons_table['normale']['p2']  = $car_price->d_10;
            $seasons_table['normale']['p3']  = $car_price->d_11;
        }

        $response = [
            'car'           => $car,
            'seasons_table' => $seasons_table,
            'data_services' => $data_services
        ];

        return response()->json($response);
    }

    public function booking(Request $request){
        $car = Car::with(['images', 'front_image', 'contentload'])
        ->where('id', $request->car_id)->first();

        $car_services = [];
        if(!empty($car->services)){
            $car_services = Service::whereIn('id', $car->services)->get();
        }

        $seasons = Season::where('car_id', $request->car_id)->orderBy('start_date', 'ASC')->get();

        // current language id
        $code = Session::get('language');
        $current_language = Language::where('code', $code)->first()->id;

        //IF REQUEST IS COMING FROM SEARCH PAGE
        if(!$request->home){
            $pickup_loc  = LocationContent::where('location_id', Session::get('pickup_location'))->first();
            $dropoff_loc = LocationContent::where('location_id', Session::get('dropoff_location'))->first();

            $pickup_location  = Location::where('id', Session::get('pickup_location'))->first();
            $dropoff_location = Location::where('id', Session::get('dropoff_location'))->first();

            $x=Session::get('start_time');
            $y=Session::get('end_time');


            $start_date = Session::get('start_date').' '.Session::get('start_time');
            $end_date   = Session::get('end_date').' '.Session::get('end_time');

        }else{
            //IF REQUEST IS COMMING FROM HOME,PARC OR CAR_DETAILS PAGE
            $pickup_loc  = LocationContent::where('location_id', $request->pickup_location)->where('language_id', $current_language)->first();
            $dropoff_loc = LocationContent::where('location_id', $request->dropoff_location)->where('language_id', $current_language)->first();

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

        if($hour_time>=4){
            $zzz .= 'ccc';
            $nights = $nights+1;
        }else if($hour_time>=0 && $hour_time<4){
            $zzz .= 'ddd';
        }else if($hour_time<0 && $nights!=0){
            $zzz .= 'eee';
            $nights = $nights+1;
        }else{
            $zzz .= 'fff';
            $nights = $nights+1;
        }

       $price =  BookingService::get_price_infos($request->start_date,$request->end_date,$car,$nights);

        // current language id
        $code = Session::get('language');

        $response = [
            'car'              => $car,
            'price'            => $price,
            'nights'           => $nights,
            'pickup_loc'       => $pickup_loc,
            'dropoff_loc'      => $dropoff_loc,
            'car_services'     => $car_services,
            'pickup_location'  => $pickup_location,
            'dropoff_location' => $dropoff_location,
        ];

        return response()->json($response);
    }



    public function book(Request $request){
        $static_data = $this->static_data;
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'email'          => 'email|required',
            'start_date'     => 'required',
            'end_date'       => 'required',
            'car_id'         => 'required',
            'payment_method' => 'required',
            'nights_number'  => 'required',
            'total'          => 'required',
            'price_base'     => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $static_data['strings']['something_happened']], 400);
        } else {
            $data = $request->all();
            $services = null;
            $i=0;

            foreach($data['services_data'] as $key=>$item){
                $services[$i]['id']   = $key;
                $service = Service::find($key);
                $services[$i]['name']  = $service->service[1];
                $services[$i]['count'] = $item;
                $services[$i]['price'] = $service->price;
                $i++;
            }

            $data['services'] = json_encode($services);
            $data['start_date']   = Carbon::createFromFormat('d/m/Y H:s', $request->start_date);
            $data['end_date']     = Carbon::createFromFormat('d/m/Y H:s', $request->end_date);

            $client_data['name']          = $request->name;
            $client_data['email']         = $request->email;
            $client_data['phone']         = $request->phone;
            $client_data['flight_number'] = $request->flight_number;
            $data['client_data']          = json_encode($client_data);
            $data['car_name'] = Car::findOrFail($request->car_id)->alias;

            $booking = Booking::create($data);
            if($booking) {
                $this->sendBookingMails($request);
                switch ($request->lang) {
                    case 'en':
                        $msg = "Reservation successful!";
                        break;
                    default:
                        $msg = "Réservation réussie !";
                        break;
                }
                return response()->json(['status' => 200, 'message' => 'Réservation réussie !'], 200);
            }
        }
    }

    public function sendBookingMails($request){

        $static_data = $this->static_data;
        $currency_code = get_setting('currency_code', 'site');
        $currency = Currency::where('code',$request->currency_code)->first()->toArray();

        $currency = $currency['symbol'] ? $currency['symbol'] : '';

        $data = $request->all();
        $data['completed']    = get_setting('autoapprove_booking', 'car');
        $data['start_date']   = Carbon::createFromFormat('d/m/Y H:s', $data['start_date'])
                                ->format('Y-m-d H:s');
        $dtotal = $data['total'];
        if ($currency_code != $request->currency_code) {
            $data['total']    = $data['total'].' '. userCurrencySymbol();
        }

        $data['user_id']   = ($static_data['user']) ? $static_data['user']->id : 0;
        $data['end_date']  = Carbon::createFromFormat('d/m/Y H:s', $data['end_date'])
                             ->format('Y-m-d H:s');

        $data['user_data']['name']  = $data['name'];
        $data['user_data']['email'] = $data['email'];
        $data['user_data']['phone'] = $data['phone'];
        $data['user_data']['flight_number'] = $data['flight_number'];
        $data['gps']    = $request->services_data[30];
        $data['siege']  = $request->services_data[31];
        $data['siege2'] = $request->services_data[32];

        $mail_data = $data;
        $car = Car::where('id', $request->car_id)->first();
        $data['owner_id']   = $car->user_id;
        $data['status']     = 0;
        $mail_data['car']   = isset($car->contentload->name) ? $car->contentload->name : '';
        $mail_data['currency']     = $currency;
        if ($request->lang == 'fr') {
            $mail_subject_fr = env('MAIL_SUBJECT_FR') ?: 'jacarandacar.fr';
            $subject = 'Demande de réservation du site '.$mail_subject_fr;
            // $subject = $static_data['strings']['booking_mail_subject'].' '.$static_data['strings']['from'].' '.$mail_subject_fr;
        } else {
            $subject = $static_data['strings']['booking_mail_subject'];
        }
        $mail_data['subject']      = $subject;
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
        $mail_data['str_car']      = $static_data['strings']['car'];
        $mail_data['str_total']    = $static_data['strings']['total'];
        $mail_data['mail_after_text_book'] = $static_data['strings']['mail_after_text_book'];
        \Log::info($mail_data["admin_email"]=='info@jacarandacar.com');

        // if (Session::get('language') == 'en') {
        if ($request->lang == 'en') {
            $data_info =    "<h3><font color='black'>Name                      :   </font><font color='green'>".$data['name']."</font></h3>";
                                    $data_info .= !empty($data['flight_number']) ? "<h3><font color='black'>Flight number               :   </font><font color='green'>" . $data['flight_number'] . "</font></h3>" : "";
                                    $data_info .= "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                                    "<h3><font color='black'>Phone Number         :   </font><font color='green'>".$data['phone']."</font></h3>".
                                    "<h3><font color='black'>Arrival city          :   </font><font color='green'>".$data['pickup_location']."</font></h3>";
                                    $data_info .= !empty($data['pickup_tarif']) ? "<h3><font color='black'>Departure Convoy Rate   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>" : "";
                                    $data_info .= "<h3><font color='black'>City of Return          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>";
                                    $data_info .= !empty($data['dropoff_tarif']) ? "<h3><font color='black'>Return Convoy Rate   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>" : "";
                                    $data_info .= "<h3><font color='black'>Arrival date           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                                    "<h3><font color='black'>Return date           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                                    "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Days </font></h3>";
                                    $data_info .= !empty($data['gps']) ? "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>" : "";
                                    $data_info .= !empty($data['siege']) ? "<h3><font color='black'>Baby seat               :   </font><font color='green'>".$data['siege']." </font></h3>" : "";
                                    $data_info .= !empty($data['siege2']) ? "<h3><font color='black'>Child seat               :   </font><font color='green'>".$data['siege2']." </font></h3>" : "";
                                    $data_info .= "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Total booking  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Payment method      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                                    "<h3><font color='black'>Vehicle                 :   </font><font color='green'>".$car->contentload->name."</font></h3>".
                                    "<h3><font color='black'>Language                      :   </font><font color='green'>".Session::get('language')."</font></h3>";
        } else {
            $data_info =    "<h3><font color='black'>Nom                      :   </font><font color='green'>".$data['name']."</font></h3>";
                                    $data_info .= !empty($data['flight_number']) ? "<h3><font color='black'>Numéro Vol               :   </font><font color='green'>" . $data['flight_number'] . "</font></h3>" : "";
                                    $data_info .= "<h3><font color='black'>E-mail                   :   </font><font color='green'>".$data['email']."</font></h3>".
                                    "<h3><font color='black'>Numéro Télephone         :   </font><font color='green'>".$data['phone']."</font></h3>".
                                    "<h3><font color='black'>Ville d'arrivée          :   </font><font color='green'>".$data['pickup_location']."</font></h3>";
                                    $data_info .= !empty($data['pickup_tarif']) ? "<h3><font color='black'>Tarif Convoyage Depart   :   </font><font color='green'>".$data['pickup_tarif']." ".$currency."</font></h3>" : "";
                                    $data_info .= "<h3><font color='black'>Ville de retour          :   </font><font color='green'>".$data['dropoff_location']."</font></h3>";
                                    $data_info .= !empty($data['dropoff_tarif']) ? "<h3><font color='black'>Tarif Convoyage Retour   :   </font><font color='green'>".$data['dropoff_tarif']." ".$currency."</font></h3>" : "";
                                    $data_info .= "<h3><font color='black'>Date d'arrivée           :   </font><font color='green'>".$data['start_date']."</font></h3>".
                                    "<h3><font color='black'>Date de retour           :   </font><font color='green'>".$data['end_date']."</font></h3>".
                                    "<h3><font color='black'>Location                 :   </font><font color='green'>".$data['nights_number']." Jours </font></h3>";
                                    $data_info .= !empty($data['gps']) ? "<h3><font color='black'>GPS                      :   </font><font color='green'>".$data['gps']." </font></h3>" : "";
                                    $data_info .= !empty($data['siege']) ? "<h3><font color='black'>Siége bébé               :   </font><font color='green'>".$data['siege']." </font></h3>" : "";
                                    $data_info .= !empty($data['siege2']) ? "<h3><font color='black'>Siége enfant               :   </font><font color='green'>".$data['siege2']." </font></h3>" : "";
                                    $data_info .= "<h3><font color='black'>Franchise                :   </font><font color='green'>".$data['franchise']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Total de la résérvation  :           </font><font color='green'>".$data['total']." ".$currency."</font></h3>".
                                    "<h3><font color='black'>Méthode de paiement      :   </font><font color='green'>".$data['payment_method_check']."</font></h3>".
                                    "<h3><font color='black'>Véhicule                 :   </font><font color='green'>".$car->contentload->name."</font></h3>".
                                    "<h3><font color='black'>Langue                      :   </font><font color='green'>".Session::get('language')."</font></h3>";
        }

        $headers = array(
            'MIME-Version' => '1.0',
            'From'         => 'Jacarandacar <noreply@jacarandacar.com>',
            'Reply-To'     => 'Jacarandacar <info@jacarandacar.com>',
            'Content-type' => 'text/html;charset=UTF-8',
            'X-Mailer'     => 'PHP/' . phpversion()
        );

        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . 'Jacarandacar <noreply@jacarandacar.com>' . "\r\n";
        $entete .= 'Cc: ' . 'jacarandacar2021@gmail.com,yassineseocom@gmail.com,younesjacarandacar@gmail.com' . "\r\n";
        $entete .= 'Reply-To: ' . $data['name'].' <'.$data['email'].'>' . "\r\n";

        // $email  = view('emails.booked',compact('mail_data'))->render();

        // mail($data['email'], $mail_data['subject'], $email ,$headers,'-f info@jacarandacar.com');
        // mail('info@jacarandacar.com', $mail_data['subject'], $data_info, $entete,'-f info@jacarandacar.com');

        $emailContent = view('emails.booked', compact('mail_data'))->render();

        Mail::send([], [], function ($message) use ($data, $mail_data, $emailContent) {
            $message->to($data['email'])
                    ->subject($mail_data['subject'])
                    ->from('info@jacarandacar.com', 'Jacarandacar')
                    ->setBody($emailContent, 'text/html'); // Set email content as HTML
        });

        // Send to the admin email
        Mail::send([], [], function ($message) use ($mail_data, $data_info, $emailContent) {
            $message->to('info@jacarandacar.com')
                    ->subject($mail_data['subject'])
                    ->from('info@jacarandacar.com', 'Jacarandacar')
                    ->setBody($emailContent, 'text/html'); // Set email content as HTML
        });
    }
}
