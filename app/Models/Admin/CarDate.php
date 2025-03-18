<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CarDate extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Allow columns to be filled with data
    protected $fillable = [
        'car_id', 'dates'
    ];

    // Store dates as an array
    protected $casts = [
      'dates' => 'array'
    ];

}
