<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    // Allow columns to be filled with data
    protected $fillable = [
        'user_id', 'activity', 'points', 'car_id', 'service_id', 'end_date'
    ];

    // Get activity's user
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Get activity's car
    public function car(){
        return $this->belongsTo('App\Models\Admin\Car');
    }

    // Get activity's user
    public function service(){
        return $this->belongsTo('App\Models\Admin\Service');
    }
}
