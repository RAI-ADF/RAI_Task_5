<?php

namespace App;

use Illuminate\Database\Elpquent\Model;

class alamat extends Model
{

	public function buku()
	{
		return $this->belongsToMany('App\buku','buku_genre','genre_id');
	}

}