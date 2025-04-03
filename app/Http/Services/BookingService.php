<?php
namespace App\Http\Services;

use App\Constants\Constant;
use App\Http\Helpers\Helpers;
use App\Mail\AdminBookingMail;
use App\Mail\ClientBookingMail;
use App\Models\Admin\Booking;
use App\Models\Admin\Car;
use App\Models\Admin\Price;
use Carbon\CarbonPeriod;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Locale;

class BookingService{

    public static function get_price_infos ($start_date,$end_date, $car, $nights) {
        $start_date = ($start_date != '') ? Carbon::parse($start_date) : Session::get('start_date');
        $end_date   = ($end_date != '') ? Carbon::parse($end_date) : Session::get('end_date');



        $datedebut = $start_date;
        $datefin = $end_date;
        $period = CarbonPeriod::create($datedebut, $datefin); // la periode de la reservation
        if(count($period) > $nights) { // si l'utilisateur ne depace pas 4 heures enlever un jour de la pediode
            $datefin->subDay();
            $period = CarbonPeriod::create($datedebut, $datefin);
        }

        $price= 0;
        foreach ($period as $date) {
            $day_price = Price::where(['car_id' => $car->id, 'date' => $date])->first();
            if( count($period) >= 11 ) {
                if(empty($day_price)){
                    $price = $car->d_11 * count($period);
                    break;
                }
                $price += $day_price->d_11;
            } elseif( count($period) >= 5 ) {
                if(empty($day_price)){
                    $price = $car->d_10 * count($period);
                    break;
                }
                $price += $day_price->d_10;
            } elseif( count($period) >= 2 ) {
                if(empty($day_price)){
                    $price = $car->price_per_night * count($period);
                    break;
                }
                $price += $day_price->d_4;
            } elseif( count($period) == 1 ) {
                if(empty($day_price)){
                    $price = $car->price_per_night + $car->franchise;
                    break;
                }
                $price = $car->d_1 + $car->franchise;
                // $price = $day_price->d_4 + $car->franchise;
            }
        }

        return $price;
    }
    public static function sendBookingMails($booking,$params=[]){
        $from = $admin_email = Config::get("mail.from.address");

        // $static_data = $this->static_data;
        // $booking  = Booking::findOrFail(27);
        $client  = json_decode($booking->client_data);
        $services  = json_decode($booking->services);
        // dd($client,$services,$booking,$params);


        $car= $booking->car;

        // Create the mail and send it
        $client_data=[
            "client"=>
            [
                "full_name"=>isset($client->name) ? $client->name : '',
                "email"=>isset($client->email) ? $client->email : '',
                "phone"=>isset($client->phone) ? $client->phone : '',
                "flight_number"=>isset($client->flight_number) ? $client->flight_number : '',
            ],
            "pickup_location"=> isset($params["pickupLocation"]) ?  Helpers::getAttributeFromTranslate("location",Helpers::getDefaultLanguage('id'),1,$params["pickupLocation"]) : '',
            "dropoff_location"=>isset($params["dropOffLocation"]) ?  Helpers::getAttributeFromTranslate("location",Helpers::getDefaultLanguage('id'),1,$params["dropOffLocation"]) : '',
            "start_date"=>$booking->start_date,
            "end_date"=>$booking->end_date,
            "total"=> Helpers::moneyFormatDevise($booking->total) ,
            "nights_number"=> isset($params["periods"]) ? $params["periods"] : '',
            "franchise"=> Helpers::moneyFormatDevise(10) ,
            "payment_method_check"=> $booking->payment_method == Constant::BANK_PAYMENT ? __("website.by_bank_card") : __("website.cache") ,
            "car"=> isset($booking->car) ? Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$car) : '',
            "currency_code"=>Helpers::getDefaultCurrency('code'),
            "lang"=>Locale::getDisplayLanguage(app()->getLocale(), app()->getLocale()),
        ];

        // dd($client_data);
        // client email
        Mail::to($client_data['client']['email'])->send(new ClientBookingMail($client_data));
        Mail::to($admin_email)->send(new AdminBookingMail($client_data));


        // Mail::send('emails.booked_admin', ['mail_data' => $mail_data], function ($m) use ($mail_data,$client_data,$from,$admin_email) {
        //     $m->from($from, $mail_data['site_name']);
        //     $m->to($admin_email, $mail_data['name'])->subject($mail_data['subject'])
        //     ->replyTo($client_data['client']['email']); // Add reply-to email
        // });
    }

}
