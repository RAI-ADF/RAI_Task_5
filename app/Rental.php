<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
	protected $table = 'rental';

	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'alamat');

	/*
	 * Relasi One-to-Many
	 * ==================
	 */
	public function anggota() {
		return $this->hasMany('App\Anggota', 'id_rental');
	}
}
