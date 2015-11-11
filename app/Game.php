<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
# Tentukan nama tabel terkait
	protected $table = 'game';
    
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('game');

	/*
	 * Relasi Many-to-Many
	 * ===================
	 */
	public function anggota() {
		return $this->belongsToMany('App\Anggota', 'anggota_game', 'id_game', 'id_anggota');
	}
}
