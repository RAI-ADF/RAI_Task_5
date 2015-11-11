<?php

use Illuminate\Database\Seeder;
use App\Anggota;
use App\DetailAnggota;
use App\Rental;
use App\Game;
use Faker\Factory as Faker;

class SeederRelasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        # Kosongin isi tabel
		DB::table('anggota')->delete();
		DB::table('detailanggota')->delete();
        DB::table('rental')->delete();

        
        $rental = Rental::create(array(
			'nama' => 'Hanzo',
			'alamat' => 'Jalan Buah Batu'
        ));

		$this->command->info('Data rental telah diisi!');

        #Faker testing
        $anggota1 = Anggota::create(array(
            'nama' => $faker->name ,
            'id_rental' => $rental->id
        ));
        $anggota2 = Anggota::create(array(
            'nama' => $faker->name ,
            'id_rental' => $rental->id
        ));
        $anggota3 = Anggota::create(array(
            'nama' => $faker->name,
            'id_rental' => $rental->id
        ));
        
		# Buat anggota
		$arvin = Anggota::create(array(
			'nama' => 'Arvin Chendriyana Supriyadi',
            'id_rental' => $rental->id
        ));

		$aulia = Anggota::create(array(
			'nama' => 'Aulia Marchita Ramadhani',
            'id_rental' => $rental->id
        ));

		$elmo = Anggota::create(array(
			'nama' => 'Elmo Aryaputra',
            'id_rental' => $rental->id
        ));

		# Informasi ketika anggota telah diisi.
		$this->command->info('Anggota telah diisi!');

		# Buat Detail Anggota
		DetailAnggota::create(array(
            'jenisKelamin' => 'Laki-laki',
            'alamat' => 'Jalan Sidomukti No. 78',
            'telp' => '08112282323',
            'id_anggota' => $arvin->id
            
		));

		DetailAnggota::create(array(
            'jenisKelamin' => 'Perempuan',
            'alamat' => 'Tangerang',
            'telp' => '081310713931',
            'id_anggota' => $aulia->id
		));

		DetailAnggota::create(array(
            'jenisKelamin' => 'Laki-laki',
            'alamat' => 'Jalan Cigadung',
            'telp' => '082117713169',
            'id_anggota' => $elmo->id
		));

		# Informasi ketika detail telah diisi.
		$this->command->info('Detail anggota telah diisi!');
        
        #Seeder Game
        DB::table('game')->delete();
		DB::table('anggota_game')->delete();
        
        $fallout_4 = Game::create(array(
            'judul' => 'Fallout 4',
            'genre' => 'RPG',
            'developer' => 'Bethesda'
        ));
        
		$witcher_3 = Game::create(array(
            'judul' => 'The Witcher 3: Wild Hunt',
            'genre' => 'RPG',
            'developer' => 'CD Projekt RED'
        ));
        
		$kh_3 = Game::create(array(
            'judul' => 'Kingdom Hearts 3',
            'genre' => 'RPG',
            'developer' => 'Square Enix'
        ));

		$arvin->game()->attach($fallout_4->id);
        $arvin->game()->attach($witcher_3->id);
        $arvin->game()->attach($kh_3->id);
		$aulia->game()->attach($kh_3->id);
        $aulia->game()->attach($fallout_4->id);
		$elmo->game()->attach($witcher_3->id);

		# Tampilkan bila berhasil diisi
		$this->command->info('Anggota beserta game telah diisi!');

    }
}
