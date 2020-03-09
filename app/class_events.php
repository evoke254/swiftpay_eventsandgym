<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class_events extends Model
{
    //
    public function getTrainer()
    {
    	return $this->belongsTo('App\User', 'trainer', 'id');
    }
     public function getClass()
    {
    	return $this->belongsTo('App\Services', 'services_id', 'id');
    }
    public function getBookings()
    {
    	return $this->hasMany('App\Booking', 'event_id', 'id');
    }
}
