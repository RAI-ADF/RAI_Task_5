<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

	protected $table = 'status';
	protected $fillable = array('pekerjaan', 'id_anggota');

	public function anggota() {
		return $this->belongsTo('App\Anggota', 'id_anggota');
	}
}
