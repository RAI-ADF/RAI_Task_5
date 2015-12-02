<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
	public $timestamps = false;
	protected $fillable = ['lyric'];

    public function song()
    {
    	return $this->belongsTo('App\Song');
    }
}
