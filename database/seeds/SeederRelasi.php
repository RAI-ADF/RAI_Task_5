<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;
class SeederRelasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->delete();
		DB::table('wali')->delete();
		DB::table('dosen')->delete();
		DB::table('hobi')->delete();
		DB::table('mahasiswa_hobi')->delete();

		$dosen = Dosen::create(array(
			'nama' => 'Fazma Arif',
			'nipd' => '1234567890'));
		$this->command->info('Data dosen telah diisi!');

		$puji = Mahasiswa::create(array(
			'nama' => 'Puji Muharani',
			'nim'  => '1103120133',
			'id_dosen' => $dosen->id));
		$aul = Mahasiswa::create(array(
			'nama' => 'Aulia Marchita',
			'nim'  => '1103120264',
			'id_dosen' => $dosen->id));
		$ganin = Mahasiswa::create(array(
			'nama' => 'Ganine Vinanda',
			'nim'  => '1103124321',
			'id_dosen' => $dosen->id));
		$this->command->info('Mahasiswa telah diisi!');

		Wali::create(array(
			'nama'  => 'Bedy Purnama',
			'id_mahasiswa' => $puji->id));
		Wali::create(array(
			'nama'  => 'Tjokorda',
			'id_mahasiswa' => $aul->id));
		Wali::create(array(
			'nama'  => 'Fatimah Arum',
			'id_mahasiswa' => $ganin->id));
		$this->command->info('Data mahasiswa dan wali telah diisi!');

		$menggambar = Hobi::create(array('hobi' => 'Menggambar'));
		$ngoding = Hobi::create(array('hobi' => 'Ngoding'));

		$puji->hobi()->attach($menggambar->id);
		$aul->hobi()->attach($ngoding->id);
		$ganin->hobi()->attach($menggambar->id);
		$ganin->hobi()->attach($ngoding->id);
		$this->command->info('Mahasiswa beserta Hobi telah diisi!');
    }
}
?>