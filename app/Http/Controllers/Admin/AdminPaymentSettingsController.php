<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Currency;

class AdminPaymentSettingsController extends Controller
{
    public function index(){
        $currency_code = get_setting('currency_code', 'site');
        $currency = Currency::where('code',$currency_code)->first()->toArray();
        $currency = $currency['symbol'] ? $currency['symbol'] : '';
        return view('admin.settings.payment_settings', compact('currency'));
    }

    // Inserting the keys
    public function insert(Request $request){

        $settings = Setting::where('type', 'payment')->get();
        foreach($settings as $setting){
            $key = $setting->key;
            if($request->$key != '' && isset($request->$key)){
                $setting->value = $request->$key;
                $setting->save();
            }
        }

        return redirect()->back();

    }
}
