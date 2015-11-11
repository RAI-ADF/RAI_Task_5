<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('SeederRelasi');
		# Tampilkan informasi berikut bila Seeder telah dilakukan
		$this->command->info('SeederRelasi berhasil.');
	}

}
