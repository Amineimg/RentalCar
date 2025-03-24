<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CategoryContent extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Enable columns to be filled with data
    protected $fillable = [
        'name', 'description','meta_title','meta_description', 'category_id', 'language_id',
    ];

    // Get the Car Category for the content
    public function category(){
        return $this->belongsTo('App\Models\Admin\Category');
    }
}
