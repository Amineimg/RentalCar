<?php

namespace App\Models\Admin;

use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // Allow columns to be filled with data
    protected $fillable = [
        'user_id',
        'status',
        'front_image',
        'category_id',
        'carmodel_id',
        'location',
        'contact',
        'social',
        'business_hours',
        'featured',
        'features',
        'highlights',
        'extraservices',
        'services',
        'type_id',
        'location_id',
        'car_info',
        'prices',
        'alias',
        'd_1',
        'price_per_night',
        'd_10',
        'd_11',
        'promo',
        'franchise',
        'full_fuel',
        'passengers_number',
        'doors',
        'airconditioner',
        'suitcases',
        'transmission',
        'carburant',
        'meta_keywords',

    ];

    // Storing arrays in base
    protected $casts = [
        'features'       => 'array',
        'highlights'     => 'array',
        'extraservices'  => 'array',
        'services'       => 'array',
        'location'       => 'array',
        'contact'        => 'array',
        'social'         => 'array',
        // 'images'         => 'array',
        'business_hours' => 'array',
        'prices'         => 'array',
        'car_info'       => 'array',
    ];

    // Returning the post's user
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Getting the images in the post content
    public function images(){
        return $this->morphMany(Image::class, 'imageable')->where('image', 'NOT LIKE', '%front-%')->orderBy('sort_order', 'ASC');
    }

    // Getting the front image
    public function front_image(){
        return $this->morphOne('App\Models\Image', 'imageable')->where('image', 'LIKE', '%front-%');
    }

    // Getting the location
    public function prop_location(){
        return $this->belongsTo('App\Models\Admin\Location', 'location_id', 'id');
    }

    // Getting the category
    public function category(){
        return $this->belongsTo('App\Models\Admin\Category');
    }

    // Getting the carmodel
    public function carmodel(){
        return $this->belongsTo('App\Models\Admin\Carmodel');
    }

    // Getting the content - Default Language
    public function contentDefault(){
        $default = Language::where('default', 1)->first();
        return $this->hasOne('App\Models\Admin\CarContent')->where('language_id', $default->id);
    }

    // Getting the content all Languages
    public function content($language_id = 1){
        return $this->hasOne('App\Models\Admin\CarContent')->where('language_id', $language_id)->first();
    }

    // Getting car booked dates
    public function booking(){
        return $this->hasMany('App\Models\Admin\Booking');
    }

    // Getting car available dates
    public function prop_dates(){
        return $this->hasOne('App\Models\Admin\CarDate');
    }

    // Getting the content all Languages
    public function contentload(){
        return $this->hasOne('App\Models\Admin\CarContent');
    }

    // Add Attribute to the images
    public function getImageAttribute($value){
        if($value == 'no_image.jpg'){
            return '/images/'. $value;
        }else{
            return '/images/data/'. $value;
        }
    }

    public function getCreatedAtAttribute($date){
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($date){
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function seasons(){
        return $this->hasMany('App\Models\Admin\Season');
    }

    // Getting property prices
    public function dayprices() {
        return $this->hasMany('App\Models\Admin\Price');
    }
}
