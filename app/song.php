<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['title', 'artist', 'genre_id'];

    public function genre(){
    	return $this->belongsTo('App\Genre');
    }

    public function labels()
    {
    	return $this->belongsToMany('App\Label');
    }

    public function lyric()
    {
    	return $this->hasOne('App\Lyric');
    }
}
