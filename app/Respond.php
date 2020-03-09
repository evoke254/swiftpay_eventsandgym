<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respond extends Model
{
    //
    public function customer()
    {
    	# code...
    return $this->belongsTo('App\Customer');
    }
}
