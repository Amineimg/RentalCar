<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    // No timestamps
    public $timestamps = false;

    // Allow columns to be filled with data
    protected $fillable = [
        'page_id','meta_title','meta_description', 'language_id', 'title', 'content'
    ];

    // Get the post for the content
    public function page(){
        return $this->belongsTo('App\Models\Admin\Page');
    }
}
