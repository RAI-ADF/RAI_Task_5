<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    //
	protected $fillable=['name'];
	
	public function movie(){
		return $this->belongsT('App\movie');
	}
}
