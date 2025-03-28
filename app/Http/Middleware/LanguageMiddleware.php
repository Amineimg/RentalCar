<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        // dd( Session::get('language'));
        $lang =Config::get("app.locale");
        if($request->has("lang") &&  in_array($request->lang,Language::get()->pluck("code")->toArray())){
            $lang = $request->lang;
            Session::put('language',$lang);
        }
        elseif(Session::has('language')){
            $lang =Session::get('language');
        }
        Session::put('language',$lang);
        App::setLocale($lang);

        //dd(app()->getLocale(), Session::get('language'));

        // if(!Session::has('currency')){
        //     Session::put('currency', 'EUR');
        // }
        // dd("jjj");
        return $next($request);
    }
}
