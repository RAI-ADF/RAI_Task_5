<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{

	protected $table = 'buku';
	protected $fillable = array('buku');

	public function anggota() {
		return $this->belongsToMany('App\Anggota', 'anggota_buku', 'id_buku', 'id_anggota');
	}
}
