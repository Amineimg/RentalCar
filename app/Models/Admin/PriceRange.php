<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PriceRange extends Model
{

    // Allow columns to be filled with data
    protected $fillable = [
        'season_id',
        'doors', 
        'price_per_night'
    ];

    public function season(){
        return $this->belongsTo('App\Models\Admin\Season');
    }
}
