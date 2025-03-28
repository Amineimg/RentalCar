<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
       'default','code', 'language', 'flag'
    ];

    // Get flag link
    public function getFlagPathAttribute($value){
        return '/front/build/img/flags/'. $this->flag;
    }
}
