<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    //
	protected $table = 'address';
	public function customer(){
		
		return $this->belongsTo('App\customer');
	}
	
	public function items(){
		return $this->belongsToMany('\App\items','items_id');
		
	}
}
