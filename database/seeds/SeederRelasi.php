<?php

use Illuminate\Database\Seeder;
use App\Anggota;
use App\Status;
use App\Buku;
use App\TokoBuku;
use Faker\Factory as Faker;

class SeederRelasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run() {

        $faker = Faker::create();
		# Kosongin isi tabel
		DB::table('anggota')->delete();
		DB::table('status')->delete();
		DB::table('tokoBuku')->delete();
		

		# Tambahkan data toko buku
		$tokoBuku = TokoBuku::create(array(
			'nama' => 'Taman Bacaan',
			'alamat' => 'Jl. Cikapundung no. 17',
			'telp' => '022-3261723'
		));

		$this->command->info('Data Toko Buku telah diisi!');

		#Faker
		$fake1 = Anggota::create(array(
			'nama' => $faker -> name,
			'id_tokoBuku' => $tokoBuku->id
		));

		$fake2 = Anggota::create(array(
			'nama' => $faker -> name,
			'id_tokoBuku' => $tokoBuku->id
		));

		$aulia = Anggota::create(array(
			'nama' => 'Aulia Marchita',
			'email' => 'auliamarchita@gmail.com',
			'id_tokoBuku' => $tokoBuku->id
		));

		$arvin = Anggota::create(array(
			'nama' => 'Arvin Chs',
			'email' => 'arvinchs@gmail.com',
			'id_tokoBuku' => $tokoBuku->id
		));

		$puji = Anggota::create(array(
			'nama' => 'Puji Muharani',
			'email' => 'pujimuharani@gmail.com',
			'id_tokoBuku' => $tokoBuku->id
		));


		$this->command->info('Anggota telah diisi!');

		Status::create(array(
			'pekerjaan'  => 'Pelajar',
			'id_anggota' => $aulia->id
		));

		Status::create(array(
			'pekerjaan'  => 'Mahasiswa',
			'id_anggota' => $arvin->id
		));

		Status::create(array(
			'pekerjaan'  => 'Pegawai',
			'id_anggota' => $puji->id
		));

		$this->command->info('Data anggota dan status telah diisi!');

		DB::table('buku')->delete();
		DB::table('anggota_buku')->delete();

		# Isi tabel buku
		$circa = Buku::create(array(
			'judul' => 'Circa',
			'penulis' => 'Sitta Karina'

		));
		$madah = Buku::create(array(
			'judul' => 'Madah',
			'penulis' => 'Risa Saraswati'
		));

		$nts = Buku::create(array(
			'judul' => 'Nothing To Lose',
			'penulis' => 'Alia Zalea'
		));

		$aulia->buku()->attach($circa->id);
		$arvin->buku()->attach($nts->id);
		$arvin->buku()->attach($madah->id);
		$puji->buku()->attach($circa->id);

		$this->command->info('Anggota beserta buku telah diisi!');


	}
   
}
