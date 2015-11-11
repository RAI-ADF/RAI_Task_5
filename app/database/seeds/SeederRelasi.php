<?php

# Sesuaikan nama class dengan nama file yang dibuat
class SeederRelasi extends Seeder {

	public function run() {

		# Kosongin isi tabel
		DB::table('mahasiswa')->delete();
		DB::table('wali')->delete();
		DB::table('dosen')->delete();

		/***********************************
		 *** SIAPKAN SEEDER DOSEN DISINI ***
		 ***********************************/

		$darwis = Dosen::create(array(
			'nama' => 'Darwis',
			'nip' => '12321310'));

		# Mahasiswa Pertama bernama Noviyanto Rachmadi. Dengan NIM 1015015072.
		$nabil = Mahasiswa::create(array(
			'nama' => 'Nabil Farras',
			'nim'  => '1103124323',
			'id_dosen' => $darwis->id));

		# Mahasiswa Kedua bernama Djaffar. Dengan NIM 1015015088.
		$dani = Mahasiswa::create(array(
			'nama' => 'Dani Firdaus',
			'nim'  => '11031202323',
			'id_dosen' => $darwis->id));


		# Informasi ketika mahasiswa telah diisi.
		$this->command->info('Mahasiswa telah diisi!');

		/*
		 * Disini kita akan menggunakan ketiga variabel yang kita
		 * deklarasikan diatas yaitu '$novay', '$dije', '$ayu'
		 * dengan cara mengambil id dari masing-masing variabel yang
		 * baru saja di isi.
		 */

		# Ciptakan wali si $novay
		Wali::create(array(
			'nama'  => 'Darto',
			'id_mahasiswa' => $nabil->id
		));
		# Ciptakan wali si $dije
		Wali::create(array(
			'nama'  => 'Iman',
			'id_mahasiswa' => $dani->id
		));

		// # Informasi ketika semua wali telah diisi.
		// $this->command->info('Data mahasiswa dan wali telah diisi!');

		/***********************************
		 *** SIAPKAN SEEDER HOBI DISINI  ***
		 ***********************************/

		//

	}
}
?>