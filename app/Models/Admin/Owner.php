<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    // Disable timestamps
    public $timestamps = false;

    // Allow columns to be filled with data
    protected $fillable = [
        'user_id', 'active_balance', 'pending_balance', 'first_name', 'phone', 'last_name', 'address', 'city', 'state', 'zip', 'country', 'logo', 'points'
    ];

    // Add prefix to the avatar column when retrieved from db
    public function getLogoAttribute($value){
        return '/images/owner/' . $value;
    }

    // Return user data for this owner
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Return owners cars
    public function car(){
        return $this->belongsTo('App\Models\Admin\Car');
    }

    // Return owners cars
    public function service(){
        return $this->belongsTo('App\Models\Admin\Service');
    }

    public function carCountRelation(){
        return $this->car()->selectRaw('id, count(*) as count')->groupBy('id');
    }

    public function getCarCountAttribute(){
        return $this->carCountRelation->first() ? $this->carCountRelation->first()->count : 0;
    }

    public function serviceCountRelation(){
        return $this->service()->selectRaw('id, count(*) as count')->groupBy('id');
    }

    public function getServiceCountAttribute(){
        return $this->serviceCountRelation->first() ? $this->serviceCountRelation->first()->count : 0;
    }
}
