<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    //
    public function Date(){
    	return $this->belongsTo('App\Date','serial_date');
    }
}
