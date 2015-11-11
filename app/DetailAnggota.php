<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAnggota extends Model
{
	protected $table = 'detailanggota';

	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('jenisKelamin', 'alamat','telp', 'id_anggota');

	public function anggota() {
		return $this->belongsTo('App\Anggota', 'id_anggota');
	}
}
