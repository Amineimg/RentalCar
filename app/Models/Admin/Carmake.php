<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Carmake extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Enable columns to be filled with data
    protected $fillable = [
        'featured_image',
        'alias',
        'order',
    ];

    // Getting the content - Default Language
    public function contentDefault(){
        $default = Language::where('default', 1)->first();
        return $this->hasOne('App\Models\Admin\CarmakeContent')->where('language_id', $default->id);
    }

    // Getting the content all Languages
    public function content($language_id = 1){
        return $this->hasOne('App\Models\Admin\CarmakeContent')->where('language_id', $language_id)->first();
    }

    // Getting the content all Languages
    public function contentload(){
        return $this->hasOne('App\Models\Admin\CarmakeContent');
    }

     // Getting the content all Languages
     public function models(){
        return $this->hasMany(Carmodel::class,"carmake_id","id");
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
