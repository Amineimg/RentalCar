<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CarmodelContent extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Enable columns to be filled with data
    protected $fillable = [
        'name','meta_title','meta_description', 'carmodel_id', 'language_id'
    ];

    // Get the Carmodel for the content
    public function category(){
        return $this->belongsTo('App\Models\Admin\Carmodel');
    }
}
