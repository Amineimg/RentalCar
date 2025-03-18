<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CarmakeContent extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Enable columns to be filled with data
    protected $fillable = [
        'name', 'carmake_id', 'language_id'
    ];

    // Get the Carmake for the content
    public function category(){
        return $this->belongsTo('App\Models\Admin\Carmake');
    }
}
