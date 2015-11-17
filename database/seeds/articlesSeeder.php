<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

	class articlesSeeder extends Seeder {
		public function run(){
			DB::table('articles')->delete();

			$articles = array(
				array(
					'author_id' =>1,
					'title' => 'judul artikel 1',
					'description' => 'deskripsi artikel 1',					
					'body' => 'artikel pertama ini adalah ...',
					),
				array(
					'author_id' =>1,
					'title' => 'judul artikel 2',
					'description' => 'deskripsi artikel 2',					
					'body' => 'artikel kedua ini adalah ...',
					)
		);
		
		DB::table('articles')->insert($articles);
	}
}
