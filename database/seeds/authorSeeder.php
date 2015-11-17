<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class authorSeeder extends Seeder {
	public function run(){
		DB::table('author')->delete();

		$author = array(
			array(
				'name' => 'Aji',
				'email' => 'ajitrisantoso@gmai.com'
				)

			);
		DB::table('author')->insert($author);
	}
}
