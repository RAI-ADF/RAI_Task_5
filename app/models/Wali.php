<?php


class Wali extends Eloquent {


	protected $table = 'wali';

	protected $fillable = array('nama', 'id_mahasiswa');


	public function mahasiswa() {
		return $this->belongsTo('Mahasiswa', 'id_mahasiswa');
	}

}
?>