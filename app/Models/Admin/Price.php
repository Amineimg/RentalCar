<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [ 'car_id', 'date', 'd_4', 'd_10', 'd_11', 'created_at', 'updated_at'];

    // Getting the car
    public function car() {
        return $this->belongsTo('App\Models\Admin\Car');
    }
}
