<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{

	protected $table = 'anggota';
	protected $fillable = array('nama', 'email', 'id_tokoBuku');

	public function status() {
		return $this->hasOne('App\Status', 'id_anggota');
	}

	public function tokoBuku() {
		return $this->belongsTo('App\TokoBuku', 'id_tokoBuku');
	}

	public function buku() {
		return $this->belongsToMany('App\Buku', 'anggota_buku', 'id_anggota', 'id_buku');
	}

}
