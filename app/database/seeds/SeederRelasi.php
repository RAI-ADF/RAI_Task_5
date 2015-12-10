<?php


class SeederRelasi extends Seeder {

	public function run() {

		DB::table('mahasiswa')->delete();
		DB::table('wali')->delete();
		DB::table('dosen')->delete();

		$darwis = Dosen::create(array(
			'nama' => 'Darwis',
			'nip' => '12321310'));

		$nabil = Mahasiswa::create(array(
			'nama' => 'Nabil Farras',
			'nim'  => '1103124323',
			'id_dosen' => $darwis->id));

		$dani = Mahasiswa::create(array(
			'nama' => 'Dani Firdaus',
			'nim'  => '11031202323',
			'id_dosen' => $darwis->id));


		$this->command->info('Mahasiswa telah diisi!');


		Wali::create(array(
			'nama'  => 'Darto',
			'id_mahasiswa' => $nabil->id
		));

		Wali::create(array(
			'nama'  => 'Iman',
			'id_mahasiswa' => $dani->id
		));

	}
}
?>