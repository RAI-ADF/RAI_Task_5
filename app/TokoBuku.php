<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class TokoBuku extends Model
{

	protected $table = 'tokoBuku';
	protected $fillable = array('nama', 'alamat','telp');

	public function anggota() {
		return $this->hasMany('App\Anggota', 'id_tokoBuku');
	}
}
