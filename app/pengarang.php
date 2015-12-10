<?php

namespace App;

use Illuminate\Database\Elpquent\Model;

class pengarang extends Model
{

	public function alamat()
	{
		return $this->hasOne('App\alamat');
	}

	public function buku()
	{
		return $this->hasMany('App\buku');
	}

	public function getJalan()
	{
		return $this->alamats->jalan;
	}

	public function getKota()
	{
		return $this->alamat->kota;
	}

}