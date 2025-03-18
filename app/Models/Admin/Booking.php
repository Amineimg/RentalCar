<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Allow columns to be filled with data
    protected $fillable = [
        'car_name',
        'car_id',
        'start_date',
        'end_date',
        'client_data',
        'total',
        'services',
        'franchise',
        'payment_method',
        'full_fuel',
        'user_id',
        'owner_id',
        'status'
    ];

    // Allow to be stored as array
    protected $casts = [
        'user_data' => 'array'
    ];

    // Get booking's car
    public function car(){
        return $this->belongsTo('App\Models\Admin\Car');
    }

    // Get booking's car
    public function service(){
        return $this->belongsTo('App\Models\Admin\Service');
    }

    // Get booking's user
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function owner(){
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function payments(){
        return $this->hasMany('App\Models\Admin\Payment');
    }

}
