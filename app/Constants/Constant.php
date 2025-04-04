<?php

namespace App\Constants;
class Constant{

    const LANG_FR_ID = 1;
    const LANG_AR_ID = 2;


    const super_admin_role = 1;
    const admin_role = 2;
    const user_role = 3;


    // transmissions

    const TRANSMISSION_AUTOMATIC = "automatic";
    const TRANSMISSION_MANUAL = "manual";


    // fuel
    const FUEL_PETROL="petrol";
    const FUEL_DIESEL="diesel";

    CONST CACHE_PAYMENT=0;
    CONST BANK_PAYMENT=1;


    public static function getRoles(){
        return collect([
            ["id"=> self::super_admin_role,"name"=>"Super Admin"],
            ["id"=> self::admin_role,"name"=>"Admin"],
            ["id"=> self::user_role,"name"=>"user"],
        ]);
    }



    public static function getTransmissions(){
        return collect([
            ['name'=>'automatic','value' =>SELF::TRANSMISSION_AUTOMATIC],
            ['name'=>'manual','value' => SELF::TRANSMISSION_MANUAL],
        ]);
    }
    public static function getFuelTypes(){
        return collect([
            ['name'=>'petrol','value' =>SELF::FUEL_PETROL],
            ['name'=>'diesel','value' => SELF::FUEL_DIESEL],
        ]);
    }

    public static function getPaymentTypes(){
        return collect([
            ["name"=>__("website.cache"),'value'=>SELF::CACHE_PAYMENT ,'percentage'=>0],
            // ["name"=>__("website.by_bank_card"),'value'=>SELF::BANK_PAYMENT ,'percentage'=>3],
        ]);
    }

}
