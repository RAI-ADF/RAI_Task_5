<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
	protected $table = 'customer';

	public function address(){
		return $this->hasOne('\App\Address');
		
	}
	
	public function items(){
		return $this->hasMany('\App\Items');
		
	}
}
