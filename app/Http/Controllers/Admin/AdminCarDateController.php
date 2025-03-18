<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Car;
use App\Models\Admin\Season;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Carbon\Carbon;
use \Carbon\CarbonPeriod;
use App\Models\Admin\Price;

class AdminCarDateController extends Controller
{
    public function index($id){
        $car = Car::findOrFail($id);
        return view('admin.car.old_date', compact('car'));
    }

    public function display_prices_calendar($id) {
        $events = [];

        $car = Car::with(['dayprices'])->findOrFail($id);


        $year = Carbon::now()->year;
        $datedebut = Carbon::create($year, 1, 1, 0, 0, 0);
        $datefin = Carbon::create($year+5, 12, 31, 0, 0, 0);
        $period = \Carbon\CarbonPeriod::create($datedebut, $datefin);

        foreach ($period as $date) {
            $event = [];
            $color = "#5cb85c";
            $title = [
                'd_4' => '',
                'd_10' => '',
                'd_11' => ''
            ];

            $car_price = Price::where([ 'car_id' => $id, 'date' => $date->format('Y-m-d') ])->first();
            if ( !empty($car_price) ) {
                if ($date->format('Y-m-d') == $car_price->date) {
                    $title = [
                        'd_4' => $car_price->d_4,
                        'd_10' => $car_price->d_10,
                        'd_11' => $car_price->d_11
                    ];
                }
            }
            // else {
            //         $title = [
            //             'd_4' => $car->price_per_night,
            //             'd_10' => $car->d_10,
            //             'd_11' => $car->d_11
            //         ];
            // }

            // Tester si la date appartient a la haut saison pour changer la couleur
            $current_year = $date->format('Y');
            $datedebut = Carbon::create($current_year, 7, 1, 0, 0, 0);
            $datefin = Carbon::create($current_year, 9, 30, 0, 0, 0);
            $high_season = \Carbon\CarbonPeriod::create($datedebut, $datefin);

            if ($high_season->contains($date)) {
                $color = "#f0ad4e";
            }

            $event['title'] = $title;
            $event['start'] = $date->format('Y-m-d');
            $event['end']   = $date->format('Y-m-d');
            $event['color'] = $color;
            $event['allDay'] = true;

            $events[] = $event;
        }
        // dd($events);die;
        // dd(count($events), $events);
        return view('admin.car.date', compact('car', 'events'));
    }

    public function prices_calendar_store(Request $request, $id)
    {
        $data = [];
        $data['success'] = 0;

        $d1 = explode("/", $request->start_date);
        $d2 = explode("/", $request->end_date);
        $date1 = Carbon::create($d1[2], $d1[1], $d1[0], 0, 0, 0);
        $date2 = Carbon::create($d2[2], $d2[1], $d2[0], 0, 0, 0);

        $diff = $date1->diffInDays($date2);

        if ($diff > 0) {
            for ($i=0; $i < $diff; $i++) {
                $price = new Price();

                if ($i == 0) {
                    $price->date = $date1;
                    $oldpr = Price::where(['car_id' => $id, 'date' => $date1])->first();
                } else {
                    $price->date = $date1->addDay();
                    $oldpr = Price::where(['car_id' => $id, 'date' => $price->date])->first();
                }

                if ($oldpr){
                    $price = $oldpr;
                }

                $price->car_id = $id;
                if( !empty($request->d_4) && !empty($request->d_10) && !empty($request->d_11) ){
                    $price->d_4 = $request->d_4;
                    $price->d_10 = $request->d_10;
                    $price->d_11 = $request->d_11;
                }

                if ($price->save()){
                    $data['prices'][] = $price;
                }
            }

            $data['success'] = 1;
        }

        $car = Car::findOrFail($id);

        return response()->json( array('success' => $data['success']) );
    }

}
