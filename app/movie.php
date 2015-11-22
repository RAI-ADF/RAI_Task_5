<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    //
	public $timestamps = false;
	protected $fillable=['name'];
	
	public function director(){
		return $this->belongsTo('App\director');
	}
	
	public function genre(){
		return $this->hasMany('App\genre');
	}
	
	public function cinema(){
		return $this->belongsTo('App\cinema');
	}
}
