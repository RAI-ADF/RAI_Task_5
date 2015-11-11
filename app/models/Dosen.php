
<?php

# Sesuaikan nama class dengan nama file yang dibuat
class Dosen extends Eloquent {

	protected $table = 'dosen';


	protected $fillable = array('nama', 'nip');

	
	public function mahasiswa() {
		return $this->hasMany('Mahasiswa', 'id_dosen');
	}

}
?>