<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CarContent extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Allow columns to be filled with data
    protected $fillable = [
        'name',
        'meta_title',
        'meta_description',
        'features',
        'highlights',
        'extraservices',
        'services',
        'description',
        'car_id',
        'language_id'
    ];

    // Storing arrays in base
    // Storing arrays in base
    protected $casts = [
        'features'   => 'array',
        'highlights' => 'array',
        'extraservices' => 'array',
        'services'   => 'array'
    ];

    // Get the Service Category for the content
    public function car(){
        return $this->belongsTo('App\Models\Admin\Car');
    }
}
