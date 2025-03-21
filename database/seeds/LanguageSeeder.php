<?php

namespace Database\Seeders;

use App\Models\Admin\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages=collect([
            [
                "default"=>1,
                "language"=>"Français",
                "code"=>'fr',
                "flag"=>'fr.png',
            ],
            [
                "default"=>0,
                "language"=>"English",
                "code"=>'en',
                "flag"=>'en.png',
            ],
        ]);

        $languages->each(function($language){
            Language::updateOrCreate(['code'=>$language['code']],$language);
        });
    }
}
