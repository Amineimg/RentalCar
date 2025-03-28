<?php

namespace App\Http\Helpers;

use App\Models\Admin\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Helpers {

    public static function getAttributeFromTranslate($key,$language_id,$model_id,$model){
        $translation= $model->contentload()->where('language_id', $language_id)->first();
        return $translation  ? $translation->$key  : '';
    }

    public static function moneyFormatDevise($amount){
        if(is_numeric($amount))
            return number_format($amount, 2, ',', '.').' '. ' '.userCurrencySymbol();
        return "error parsing number";
    }
    public static function getDefaultLanguage($returnWhat='object'){
        $code =App::getLocale();
        // dd(Session::get('language'));
        if($code){
            $default_language = Language::where('code', $code)->first();
        }else{
            $default_language = Language::where('default', 1)->first();
        }

       switch ($returnWhat) {
        case 'object':
            return $default_language;
        case 'id':
            return $default_language->id;
        case 'code':
            return $default_language->code;
        case 'language':
            return $default_language->language;
        case 'flagPath':
            return $default_language->flagPath;

        default:
            return $default_language;
        break;
       }
    }

}
