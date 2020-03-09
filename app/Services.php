<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    public function classEvents()
    {
    	# code...
    return $this->belongsTo('App\class_events');
    }
}
