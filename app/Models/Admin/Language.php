<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
       'default','code', 'language', 'flag'
    ];

    // Get flag link
    public function getFlagAttribute($value){
        return '/assets/images/flags/'. $value;
    }
}
