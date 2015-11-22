<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cinema extends Model
{
    //
	
	public $timestamps = false;
	protected $fillable=['name'];
	
	public function movie(){
		return $this->hasMany('App\movie');
	}
}
