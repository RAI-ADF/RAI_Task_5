<?php

# Sesuaikan nama class dengan nama file yang dibuat
class Mahasiswa extends Eloquent {

	# Tentukan nama tabel terkait
	protected $table = 'mahasiswa';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'nim','id_dosen');

	/*
	 * Relasi One-to-One
	 * =================
	 * Buat function bernama wali(), dimana model 'Mahasiswa' memiliki relasi One-to-One
	 * terhadap model 'Wali' sebagai 'id_mahasiswa'
	 */
	public function wali() {
		return $this->hasOne('Wali', 'id_mahasiswa');
	}

	public function dosen() {
		return $this->belongsTo('Dosen', 'id_dosen');
	}

}
?>