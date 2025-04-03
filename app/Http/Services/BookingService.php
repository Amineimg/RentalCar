<?php
namespace App\Http\Services;

use App\Models\Admin\Price;
use Carbon\CarbonPeriod;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

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

}