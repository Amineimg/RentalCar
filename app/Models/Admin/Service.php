<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Allow columns to be filled with data
    protected $fillable = [
        'service', 
        'image', 
        'max_number', 
        'price', 
        'created_at', 
        'updated_at'
    ];
    // Storing arrays in base
    protected $casts = [
        'service' => 'array',
    ];

    // Add prefix to the image column when retrieved from db
    public function getImageAttribute($value){
        return '/images/services/' . $value;
    }
}
