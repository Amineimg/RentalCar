<?php



namespace App\Http\Controllers\Admin;



use App\Models\Admin\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Currency;

class AdminPurchaseController extends Controller

{

    public function index(){

        $purchases = Purchase::orderBy('created_at','desc')->paginate(10);

        $currency_code = get_setting('currency_code', 'site');

        $currency = Currency::where('code',$currency_code)->first()->toArray();


        $currency = $currency['symbol'] ? $currency['symbol'] : '';

        return view('admin.owner.purchase', compact('purchases', 'currency'));

    }

}

