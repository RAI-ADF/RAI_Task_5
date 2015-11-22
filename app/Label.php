<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    //
    public function songs()
    {
    	return $this->hasMany('App\Song');
    }
}
