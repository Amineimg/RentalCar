<?php

namespace App\Constants;
class Constant{

    const LANG_FR_ID = 1;
    const LANG_AR_ID = 2;


    const super_admin_role = 1;
    const admin_role = 2;
    const user_role = 3;


    public static function getRoles(){
        return collect([
            ["id"=> self::super_admin_role,"name"=>"Super Admin"],
            ["id"=> self::admin_role,"name"=>"Admin"],
            ["id"=> self::user_role,"name"=>"user"],
        ]);
    }

}
