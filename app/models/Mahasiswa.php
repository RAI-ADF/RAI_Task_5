<?php

# Sesuaikan nama class dengan nama file yang dibuat
class Mahasiswa extends Eloquent {


	protected $table = 'mahasiswa';

	protected $fillable = array('nama', 'nim','id_dosen');


	public function wali() {
		return $this->hasOne('Wali', 'id_mahasiswa');
	}

	public function dosen() {
		return $this->belongsTo('Dosen', 'id_dosen');
	}

}
?>