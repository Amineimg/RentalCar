<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Allow columns to be filled with data
    protected $fillable = [
        'car_id', 
        'season', 
        'start_date', 
        'end_date', 
        'price_per_night', 
        'prices'
    ];
    // Storing arrays in base
    protected $casts = [
        'prices' => 'array',
    ];

    public function price_ranges(){
        return $this->hasMany('App\Models\Admin\PriceRange');
    }
}