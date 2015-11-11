<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
	protected $table = 'anggota';
    
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'id_rental');

	public function detailanggota() {
		return $this->hasOne('App\DetailAnggota', 'id_anggota');
	}
	
    public function rental() {
		return $this->belongsTo('App\Rental', 'id_rental');
	}

	public function game() {
		return $this->belongsToMany('App\Game', 'anggota_game', 'id_anggota', 'id_game');
	}
}
