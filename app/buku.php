<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{

	public function pengarang()
	{
		return $this->belongsTo('App\pengarang');
	}

	public function genre()
	{
		return $this->belongsToMany('App\genre','buku_genre','buku_id');
	}

	public function getListGenre()
	{
		return $this->genre->list('id')->toArray();
	}

}