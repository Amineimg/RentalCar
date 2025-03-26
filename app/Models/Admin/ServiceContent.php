<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceContent extends Model
{
    use HasFactory;

        // Allow columns to be filled with data
        protected $fillable = [
            'name','description','meta_title','meta_description', 'language_id', 'service_id'
        ];

        // Get the post for the content
        public function service(){
            return $this->belongsTo('App\Models\Admin\Service');
        }

}
