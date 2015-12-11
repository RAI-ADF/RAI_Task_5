<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class many extends Model
{
    //
	public function onemany {
	return $this->belongsTo('App\many');
	return $this->belongsTo('App\many', 'foreign_key');
	}
}
