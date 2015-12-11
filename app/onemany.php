<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class onemany extends Model
{
    public function manys {
		return $this->hasMany('App/manys');
		$manys = App\many::find(1)->manys;
		foreach ($manys as $many) {
    //
		}
		 return $this->hasMany('App\many', 'foreign_key');
		 return $this->hasMany('App\many', 'foreign_key', 'local_key');
		
	}
}
