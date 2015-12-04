<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Matkul;

class LibrarySeeder extends Seeder
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

        //seeder dosen dibawah ini

        DB::table('dosen')->delete();

        $dosen = Dosen::create(array(
        	'nama' => 'Ganjar',
        	'nip' => '123456890',
        	'kelompok_keahlain' => 'ICM'));

        $this->command->info('Data dosen telah diisi');

        $arida = Mahasiswa::create(array(
        	'nama' => 'Arida Kartika',
        	'nim' => '1103130173',
        	'kelas' => 'IF-37-08',
        	'id_dosen' => $dosen->id));

        $lilin = Mahasiswa::create(array(
        	'nama' => 'Lilin',
        	'nim' => '1103131307',
        	'kelas' => 'IF-37-08',
        	'id_dosen' => $dosen->id));

        $irasanti = Mahasiswa::create(array(
        	'nama' => 'Irasanti Primabara',
        	'nim' => '1103130176',
        	'kelas' => 'IF-37-08',
        	'id_dosen' => $dosen->id));

        $this->command->info('Data mahasiswa telah diisi');

        Wali::create(array(
        	'nama' => 'Muhammad Karib',
        	'alamat' => 'Kompleks Bukit Nirwana E.11',
        	'id_mahasiswa' => $arida->id));

        Wali::create(array(
        	'nama' => 'Sutedjo',
        	'alamat' => 'Jalan kertasari no.11',
        	'id_mahasiswa' => $lilin->id));

        Wali::create(array(
        	'nama' => 'Primabara',
        	'alamat' => 'Jalan Buah Batu no.13',
        	'id_mahasiswa' => $irasanti->id));

        $this->command->info('Data mahasiswa_wali telah diisi');

        //seeder matkul akan ada disini
        DB::table('matkul')->delete();
        DB::table('mahasiswa_matkul')->delete();

        $rai = Matkul::create(array(
            'nama' => 'Rekayasa Apikasi Internet',
            'jmlSKS' => '3'));

        $ai = Matkul::create(array(
            'nama' => 'Artificial Intelegence',
            'jmlSKS' => '3'));

        $arida->matkul()->attach($rai->id);
        $arida->matkul()->attach($ai->id);
        $lilin->matkul()->attach($ai->id);
        $irasanti->matkul()->attach($rai->id);

        $this->command->info('Mahasiswa beserta Hobi telah diisi');


    }	

}
