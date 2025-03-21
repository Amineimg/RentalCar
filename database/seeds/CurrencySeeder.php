<?php

namespace Database\Seeders;

use App\Models\Admin\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencties = collect([
            [
                "name"=>"Euro Member Countries",
                "code"=>"EUR",
                "symbol"=>"€",
                "format"=>"1 €",
                "exchange_rate"=>"1",
                "active"=>1,
            ],
        ]);

        $currencties->each(function($currency){
           Currency::updateOrCreate(["code"=>$currency["code"]],$currency);
        });
    }
}
