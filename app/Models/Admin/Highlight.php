<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Allow columns to be filled with data
    protected $fillable = [
        'highlight'
    ];
    // Storing arrays in base
    protected $casts = [
        'highlight' => 'array',
    ];

}
