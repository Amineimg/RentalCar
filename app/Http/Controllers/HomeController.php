<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Admin\Blog;
use App\Models\Admin\Car;
use App\Models\Admin\Review;
use App\Models\Admin\Location;
use App\Models\Admin\Highlight;
use App\Models\Admin\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    protected $static_data, $default_language;
    public function __construct(){
        $this->static_data = static_home();
        $this->default_language = default_language();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;

        // Get the cars (Eager Load)
        $number_of_cars = 8;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take($number_of_cars);


        if($static_data['design_settings']['fp_show_featured_only']){
            $cars->where('featured', 1);
        }
        $cars->get();

        foreach ($cars as $pr) {
            $pr->price_from = get_min_price($pr->id);
        }


        $locations= Location::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('featured', 1)->orderBy("order",'asc')->get();

        // Get the blog (Eager Load)
        $posts = Blog::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        $static_data['highlights'] = Highlight::orderBy('order', 'asc')->get();
        $static_data['services'] = Service::all();
        return view("front.index",[
            'cars'=>$cars,
            'locations'=>$locations,
            'posts'=>$posts,
        ]);
    }

    public function generalconditions(){
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;

        return view('home.general_condition',compact('static_data','default_language'));
    }

    public function faq(){
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;

        return view('home.faq',compact('static_data','default_language'));
    }

    // Contact page
    public function contact(){
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        return view('front.contact-us', []);
    }
    public function submitContact(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->only(['name', 'email', 'message','subject']);
        $to = Config::get('mail.from.address');

        Mail::to($to)->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }

    // Location de voiture Rabat
    public function loc_rabat() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $current_location = Location::with('contentload')->where('alias', 'rabat')->first();
        /*$cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();*/
        return view('home.location_rabat', compact('static_data', 'default_language','current_location'));
    }

    // Location de voiture Tanger
    public function loc_tanger() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $current_location = Location::with('contentload')->where('alias', 'tanger')->first();
        /*$cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();*/
        return view('home.location_tanger', compact('static_data', 'default_language','current_location'));
    }

    // Location de voiture Gueliz
    public function loc_gueliz() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();
        return view('home.location_gueliz', compact('static_data', 'default_language','cars'));
    }

    // Location de voiture Medina
    public function loc_medina() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();
        return view('home.location_medina', compact('static_data', 'default_language','cars'));
    }

    // Location de voiture Agadir
    public function loc_agadir() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $current_location = Location::with('contentload')->where('alias', 'agadir')->first();
        /*$cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();*/
        return view('home.location_agadir', compact('static_data', 'default_language','current_location'));
    }

    // Location de voiture Casablanca
    public function loc_casablanca() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $current_location = Location::with('contentload')->where('alias', 'casablanca')->first();
        /*$cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();*/
        return view('home.location_casablanca', compact('static_data', 'default_language','current_location'));
    }

    // Location de voiture Marrakech
    public function loc_marrakech() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();
        return view('home.location-marrakech', compact('static_data', 'default_language','cars'));
    }

    // Location de voiture Mohammedia
    public function loc_mohammedia() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;

        // Get the cars (Eager Load)
        $number_of_cars = get_setting('fp_cars_count', 'design');;
        if($static_data['design_settings']['fp_show_featured_only']){
            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->where('featured', 1)->inRandomOrder()->take($number_of_cars)->get();
        }else{
            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->inRandomOrder()->take($number_of_cars)->get();
        }
        foreach ($cars as $pr) {
            $pr->price_from = get_min_price($pr->id);
        }


        $f_locations = Location::with('contentload')->where('featured', 1)->orderBy('order', 'asc')->get();
        $current_location = Location::with('contentload')->where('alias', 'mohammedia')->first();

        // Get the blog (Eager Load)
        $posts = Blog::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        $static_data['highlights'] = Highlight::orderBy('order', 'asc')->get();
        $static_data['services'] = Service::all();

        // Returning the View
        return view('home.location-mohammedia', compact('posts', 'default_language',
            'cars', 'static_data', 'f_locations', 'current_location'));
    }

    // Location de voiture Essaouira
    public function loc_essaouira() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;

        // Get the cars (Eager Load)
        $number_of_cars = get_setting('fp_cars_count', 'design');;
        if($static_data['design_settings']['fp_show_featured_only']){
            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->where('featured', 1)->inRandomOrder()->take($number_of_cars)->get();
        }else{
            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->inRandomOrder()->take($number_of_cars)->get();
        }
        foreach ($cars as $pr) {
            $pr->price_from = get_min_price($pr->id);
        }


        $f_locations = Location::with('contentload')->where('featured', 1)->orderBy('order', 'asc')->get();
        $current_location = Location::with('contentload')->where('alias', 'essaouira')->first();

        // Get the blog (Eager Load)
        $posts = Blog::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        $static_data['highlights'] = Highlight::orderBy('order', 'asc')->get();
        $static_data['services'] = Service::all();

        // Returning the View
        return view('home.location-essaouira', compact('posts', 'default_language',
            'cars', 'static_data', 'f_locations', 'current_location'));
    }

    // Location de voiture Fes
    public function loc_fes() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;

        // Get the cars (Eager Load)
        $number_of_cars = get_setting('fp_cars_count', 'design');;
        if($static_data['design_settings']['fp_show_featured_only']){
            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->where('featured', 1)->inRandomOrder()->take($number_of_cars)->get();
        }else{
            $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
                $query->where('language_id', $default_language->id);
            }])->where('status', 1)->inRandomOrder()->take($number_of_cars)->get();
        }
        foreach ($cars as $pr) {
            $pr->price_from = get_min_price($pr->id);
        }


        $f_locations = Location::with('contentload')->where('featured', 1)->orderBy('order', 'asc')->get();
        $current_location = Location::with('contentload')->where('alias', 'fés')->first();

        // Get the blog (Eager Load)
        $posts = Blog::with(['contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        $static_data['highlights'] = Highlight::orderBy('order', 'asc')->get();
        $static_data['services'] = Service::all();

        // Returning the View
        return view('home.location-fes', compact('posts', 'default_language', 'cars', 'static_data', 'f_locations', 'current_location'));
    }

    // Pas cher
    public function cher(){
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();
        return view('home.location-pas-cher', compact('static_data', 'default_language','cars'));
    }

    // 4x4
    public function qat_qat(){
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();
        return view('home.location-qat', compact('static_data', 'default_language','cars'));
    }

    // airport
    public function airport(){
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();
        return view('home.airport', compact('static_data', 'default_language','cars'));
    }

    // sans caution
    public function caution(){
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->inRandomOrder()->take(4)->get();
        return view('home.caution', compact('static_data', 'default_language','cars'));
    }

    // Location de voiture Rabat
    public function loc_automatic() {
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where([ 'status' => 1, 'transmission' => 'automatic' ])->inRandomOrder()->take(4)->get();
        return view('home.loc_automatic', compact('static_data', 'default_language','cars'));
    }

    // AUTOMATIQUE ET MANUELLE
    public function loc_manuel(){
        // Get Static Data
        $static_data = $this->static_data;
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where(['status' => 1, 'transmission' => 'manual'])->inRandomOrder()->take(4)->get();
        return view('home.loc_manuel', compact('static_data', 'default_language','cars'));
    }


    public function sitemap(){
        $default_language = $this->default_language;
        $cars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)
            ->get();

        // dd( $cars, "{{route('car_details',[$cars[0]->id,$cars[0]->alias])}}" );

        return response()->view('sitemap_xml', ['cars' => $cars])->header('Content-Type', 'text/xml');
    }

    public function reCaptcha(Request $request){
        if($request->ajax()){
            $parameters = http_build_query([
                'secret'   => get_setting('reCaptcha_api_secret', 'site'),
                'response' => $request->response,
            ]);
            $url           = 'https://www.google.com/recaptcha/api/siteverify?' . $parameters;
            $checkResponse = null;
            $checkResponse = file_get_contents($url);
            if (is_null($checkResponse) || empty( $checkResponse )) {
                response()->json(['status' => false]);
            }
            $response = json_decode($checkResponse);
            return response()->json(['status' => $response->success]);
        }else{
            return response()->json($static_data['strings']['something_happened'], 400);
        }
    }

    public function review(Request $request){
        $data = $request->all();
        if($request->car_id){
            $data['service_id'] = 0;
        }else{
            $data['car_id'] = 0;
        }
        $data['status'] = 0;
        Review::create($data);
        Session::flash('reviewDone', true);
        return Review::all();
    }

    public function changeLang(){
        return redirect()->back();

    }
}
