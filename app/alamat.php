<?php

namespace App;

use Illuminate\Database\Elpquent\Model;

class alamat extends Model
{

	public function pengarang()
	{
		return $this->belongsTo('App\pengarang');
	}
}