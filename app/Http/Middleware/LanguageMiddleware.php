<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\Language;

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
        Session::put('language', app()->getLocale());
        //dd(app()->getLocale(), Session::get('language'));
        
        if(!Session::has('currency')){
            Session::put('currency', 'EUR');
        }

        /*
        $exploreslug = '';
        if(Session::get('language') == 'fr')
        $exploreslug = 'location-villa-marrakech';
        else
        $exploreslug = 'rental-villa-marrakech';
        \View::share('exploreslug', $exploreslug);
        */
        
        //dd(Session::get('language'), app()->getLocale());
        return $next($request);
    }
}
