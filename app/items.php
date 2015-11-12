<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    //
	protected $table = 'item';

	public function customer(){
		return $this->belongsTo('\App\customer');
		
	}
	
	public function address(){
		return $this->belongsToMany('\App\address','address_id');
		
	}
}
