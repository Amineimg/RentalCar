<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Enable columns to be filled with data
    protected $fillable = [
        'carmake_id', 
        'featured_image', 
        'alias', 
        'order',
    ];

    // Getting the content - Default Language
    public function contentDefault(){
        $default = Language::where('default', 1)->first();
        return $this->hasOne('App\Models\Admin\CarmodelContent')->where('language_id', $default->id);
    }

    // Getting the content all Languages
    public function content($language_id = 1){
        return $this->hasOne('App\Models\Admin\CarmodelContent')->where('language_id', $language_id)->first();
    }

    // Getting the content all Languages
    public function contentload(){
        return $this->hasOne('App\Models\Admin\CarmodelContent');
    }

    // Getting the carmake
    public function carmake(){
        return $this->belongsTo('App\Models\Admin\Carmake');
    }

    // Featured image
    public function getFeaturedImageAttribute($value){
        if($value){
            return '/images/data/'. $value;
        }else{
            return '';
        }
    }
}
