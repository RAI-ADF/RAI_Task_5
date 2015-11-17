<?php

class authorTableSeeder extends Seeder {
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
