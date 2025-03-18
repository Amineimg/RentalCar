<?php



namespace App\Http\Controllers\Admin;



use App\Models\Admin\Booking;

use App\Models\Admin\Car;

use App\Models\Admin\Currency;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Admin\AdminRoomBookingController;

use App\Models\Admin\Service;

use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;



class AdminBookingController extends Controller

{
    protected $default_language;
    protected $static_data;

    public function __construct()
    {
        $this->default_language = default_language();
        $this->static_data = static_home();
    }

    public function index(){
        $currency_code = get_setting('currency_code', 'site');
        $currency = currency()->getCurrency($currency_code);
        $currency = $currency['symbol'] ? $currency['symbol'] : '';
        $bookings = Booking::orderBy('created_at','desc')->paginate(10);
        return view('admin.booking', compact('bookings', 'currency'));
    }

    public function edit($id){
        $static_data = $this->static_data;
        $booking  = Booking::with('payments')->findOrFail($id);
        $client   = json_decode($booking->client_data);
        //SERVICES CHOSEN BY CLIENT FROM WEBSITE
        $booked_services = json_decode($booking->services,true);
        //SYSTEMSERVICES
        $services       = Service::all();
        //BASE PRICE
        $total_services_price = 0;
        foreach($booked_services as $service){
            $total_services_price+=$service['price'];
        }
        $total_services_price +=$booking->franchise;
        $total_services_price +=$booking->full_fuel;
        $base_price = $booking->total - $total_services_price;
        $currencies = Currency::all();
        $cars     = Car::all();
        return view('admin.booking.edit',compact('booking','client','services','booked_services','cars','static_data','base_price','currencies'));
    }

    public function update(Request $request,$id){
        //dd($request->all());
        $static_data = $this->static_data;
        $data        = $request->all();
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
        $request->start_date     = $request->start_date.' '.$request->start_time;
       //return $request->start_date;
        $request->end_date     = $request->end_date.' '.$request->end_time;
        $data['start_date']   = Carbon::createFromFormat('Y-m-d H:s', $request->start_date);
        $data['end_date']     = Carbon::createFromFormat('Y-m-d H:s', $request->end_date);

        $client_data['name']          = $request->name;
        $client_data['email']         = $request->email;
        $client_data['phone']         = $request->phone;
        $client_data['flight_number'] = $request->flight_number;

        $data['client_data']          =json_encode($client_data);
        $data['car_name'] = Car::findOrFail($request->car_id)->alias;
        $booking          = Booking::findOrFail($id);
        $booking->update($data);
        return 1;
    }

    public function userInfo(Request $request, $id){
        if($request->ajax()) {
            $booking = Booking::findOrFail($id);
            return response()->json($booking->user_data, 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    public function delete(Request $request, $id){
        if($request->ajax()) {
            $booking = Booking::findOrFail($id);
            $booking->delete();
            return response()->json(get_string('success_delete'), 200);
        }else{
            return response()->json(get_string('something_happened'), 400);
        }
    }

    public function activate(Request $request, $id){
        if($request->ajax()) {
            $booking = Booking::findOrFail($id);
            $booking->completed = 1;

            // Mailing
            $static_data = static_home();
            $car = Car::where('id', $booking->car_id)->first();
            $mail_data['car'] = isset($car->contentload->name) ? $car->contentload->name : '';
            $mail_data['start_date'] = $booking->start_date;
            $mail_data['end_date'] = $booking->end_date;
            $mail_data['total'] = $booking->total;
            $mail_data['first_name'] = $booking->user_data['first_name'];
            $mail_data['email'] = $booking->user_data['email'];
            $mail_data['currency'] = $static_data['site_settings']['currency'];
            $mail_data['subject'] = $static_data['strings']['booking_accepted'] . ' - ' . $static_data['site_settings']['site_name'];
            $mail_data['admin_email']   = $static_data['site_settings']['contact_email'];
            $mail_data['site_name'] = $static_data['site_settings']['site_name'];
            $mail_data['from'] = $static_data['strings']['from'];
            $mail_data['to'] = $static_data['strings']['to'];
            $mail_data['thank'] = $static_data['strings']['booking_is_confirmed'];
            $mail_data['regards'] = $static_data['strings']['regards'];
            $mail_data['str_car'] = $static_data['strings']['car'];

            if(empty($request->doors)){
                $data['doors'] = 0;
            }

            if(empty($request->suitcases)){
                $data['suitcases'] = 0;
            }

            if(empty($request->carburant)){
                $data['carburant'] = 'petrol';
            }

            if(empty($request->transmission)){
                $data['transmission'] = 'manual';

            }



            if(empty($request->airconditioner)){

                $data['airconditioner'] = 0;

            }



            $mail_data['str_total'] = $static_data['strings']['total'];

            $mail_data['mail_after_text_book'] = $static_data['strings']['mail_after_text_book'];



            // Create the mail and send it

            Mail::send('emails.success_booked', ['mail_data' => $mail_data], function ($m) use ($mail_data) {

                $m->from($mail_data['admin_email'], $mail_data['site_name'])

                ->to($mail_data['email'], $mail_data['first_name'])

                ->subject($mail_data['subject']);

            });



            $booking->save();

            return response()->json(get_string('successfully_accepted'), 200);

        }else{

            return response()->json(get_string('something_happened'), 400);

        }

    }



    public function reject(Request $request, $id){

        if($request->ajax()) {

            $booking = Booking::findOrFail($id);

            $booking->completed = 0;



            // Mailing

            $static_data = static_home();

            $car = Car::where('id', $booking->car_id)->first();

            $mail_data['car'] = isset($car->contentload->name) ? $car->contentload->name : '';

            $mail_data['first_name'] = $booking->user_data['first_name'];

            $mail_data['email'] = $booking->user_data['email'];

            $mail_data['subject'] = $static_data['strings']['booking_rejected'] . ' - ' . $static_data['site_settings']['site_name'];

            $mail_data['admin_email']   = $static_data['site_settings']['contact_email'];

            $mail_data['site_name'] = $static_data['site_settings']['site_name'];

            $mail_data['thank'] = $static_data['strings']['booking_is_rejected'];

            $mail_data['reason'] = $request->reason;

            $mail_data['str_reason'] = $static_data['strings']['reason'];

            $mail_data['regards'] = $static_data['strings']['regards'];

            $mail_data['str_car'] = $static_data['strings']['car'];

            $mail_data['mail_after_text_book'] = $static_data['strings']['mail_after_text_book'];



            // Create the mail and send it

            Mail::send('emails.reject_booked', ['mail_data' => $mail_data], function ($m) use ($mail_data) {

                $m->from($mail_data['admin_email'], $mail_data['site_name']);

                $m->to($mail_data['email'], $mail_data['first_name'])->subject($mail_data['subject']);

            });



            $roombooking_controller = new AdminRoomBookingController();

            $roombooking_controller->reject_fully($booking->car_id, $booking->start_date, $booking->end_date);



            $booking->save();

            return response()->json(get_string('successfully_rejected'), 200);

        }else{

            return response()->json(get_string('something_happened'), 400);

        }

    }



}



