<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //   
    public function getClassEvent()
    {
    	return $this->belongsTo('App\class_events', 'event_id');
    }
    public function getUser()
    {
    	return $this->belongsTo('App\user', 'user_id');
    }
}
