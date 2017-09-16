<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    //
    public function Number(){
    	return $this->hasMany('App\Serial','serial_date','id');
    }
}
