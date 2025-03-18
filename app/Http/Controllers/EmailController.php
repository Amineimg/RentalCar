<?php

namespace App\Http\Controllers;
use App\Models\Admin\Booking;
use App\Models\Admin\Feature;
use App\Models\Admin\Highlight;
use App\Models\Admin\ExtraService;
use App\Models\Admin\Service;
use App\Models\Admin\Season;
use App\Models\Admin\CarDate;
use App\Models\Admin\Location;
use App\Models\Admin\Carmodel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Session;

class EmailController extends Controller
{
    protected $static_data;
    protected $default_language;

    public function __construct()
    {
        $this->default_language = default_language();
        $this->static_data = static_home();
    }

    public function contact(Request $request)
    {
        
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        
        $currency_code = get_setting('currency_code', 'site');
        $currency = currency()->getCurrency($request->currency_code);  
    
        if ($request->ajax()) {
            // Validate request
            /*
            $validation = Validator::make($request->all(), [
                'email' => 'required|email',
                'name' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'body' => 'required'
            ], [
                'email.required' => $static_data['strings']['required_field'],
                'email.email' => $static_data['strings']['email_invalid'],
                'phone.required' => $static_data['strings']['required_field'],
                'name.required' => $static_data['strings']['required_field'],
                'subject.required' => $static_data['strings']['required_field'],
                'body.required' => $static_data['strings']['required_field'],
            ]);
            if ($validation->fails()) {
                $errors = $validation->errors()->toArray();
                return response()->json(['status' => false, 'errors' => $errors]);
            } else {
            */
                // Generate helper data
                $mail_data = [];
                $mail_data['email'] = $request->email;
                $mail_data['phone'] = $request->phone;
                $mail_data['name'] = $request->name;
                $mail_data['subject'] = $request->subject;
                $mail_data['message'] = $request->body;
                //$mail_data['contact_msg'] = $static_data['strings']['contact_email_msg'];
                $mail_data['site_name'] = $static_data['site_settings']['site_name'];
                $mail_data['from'] = $static_data['strings']['from'];
                $mail_data['to'] = 'info@jacarandacar.com';
                $mail_data['admin_email'] = $static_data['site_settings']['contact_email'];
                $mail_data['site_name'] = 'Jacaranda Car';
                $mail_data['mail_after_text'] = '';
                $mail_data['regards'] = $static_data['strings']['regards'];
                $mail_data['reply'] = $static_data['strings']['reply'];
                
                // Create the mail and send it
                
                Mail::send('emails.contact', ['mail_data' => $mail_data, 'data' => $mail_data], function ($m) use ($mail_data) {
                    $m->from('noreply@jacarandacar.com', 'Jacarandacar');
                    $m->to('info@jacarandacar.com', 'Jacarandacar')->subject($mail_data['subject']);
                    $m->cc(['jacarandacar2021@gmail.com', 'yassineseocom@gmail.com', 'younesjacarandacar@gmail.com']);
                    $m->replyTo($mail_data['email'], $mail_data['name']);
                });
                if (Session::get('language') == 'en') {
                    $msg = "Email sent";
                } elseif (Session::get('language') == 'es') {
                    $msg = "Correo electrónico enviado";
                } elseif(Session::get('language') == 'it') {
                    $msg = "Email inviato";
                } elseif(Session::get('language') == 'pl') {
                    $msg = "Email wysłany";
                } elseif(Session::get('language') == 'nl') {
                    $msg = "E-mail verzonden";
                } elseif(Session::get('language') == 'pt') {
                    $msg = "E-mail enviado";
                } else {
                    $msg = "Email envoyé";
                }
                return response()->json(['status' => true, 'msg' => Session::get('language')], 200);
                /*
                $entete  = 'MIME-Version: 1.0' . "\r\n";
                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $entete .= 'From: ' . 'noreply@jacarandacar.com' . "\r\n";
                //$entete .= 'Cc: ' . 'yassineseocom@gmail.com' . "\r\n";
                //$entete .= 'Cc: ' . 'jacarandacar2021@gmail.com' . "\r\n";
                $entete .= 'Reply-To: '. $mail_data['email'] . "\r\n";
                
                $email  = view('emails.contact',compact('mail_data'))->render();

                //mail('info@jacarandacar.com', $mail_data['subject'], $email , $entete, '-f info@jacarandacar.com');
                return back();

                //return view('home.sentConfirm',compact('static_data','default_language'));

                */
                
            //}
            } else {
                return response()->json($static_data['strings']['something_happened'], 400);
            }
        }
}
