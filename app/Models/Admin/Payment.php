<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    	'booking_id', 'amount', 'exchange_rate', 'currency', 'date'
    ];

    // Get purchase's user
    public function booking(){
        return $this->belongsTo('App\Models\Admin\Booking');
    }
}
