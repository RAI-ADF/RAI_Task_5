<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class director extends Model
{
    //
	public $timestamps = false;
	protected $fillable=['name'];
	
	public function movie(){
		return $this->hasOne('App\movie');
	}
}
