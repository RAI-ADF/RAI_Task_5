<?php

use Illuminate\Database\Seeder;
use App\Song;
use App\Genre;
use App\Lyric;
use App\Label;
use Faker\Factory;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('lyrics')->delete();
        DB::table('songs')->delete();
        DB::table('labels')->delete();
        DB::table('genres')->delete();
        DB::table('label_song')->delete();


        $faker = Faker\Factory::create();

		// seeding genre
        $genre1 = Genre::create(['name' => 'pop']);
        $genre2 = Genre::create(['name' => 'metal']);
        $genre3 = Genre::create(['name' => 'classical']);

        // seeding songs
        $song1 = Song::create([
        	'title' => $faker->catchPhrase,
        	'artist' => $faker->name,
        	'genre_id' => $genre1->id
        ]);
        $song1->lyric()->create([
        	'lyrics' => $faker->text]);

        $song2 = Song::create([
        	'title' => $faker->catchPhrase,
        	'artist' => $faker->name,
        	'genre_id' => $genre2->id
        ]);
        $song2->lyric()->create([
        	'lyrics' => $faker->text]);

        $song3 = Song::create([
        	'title' => $faker->catchPhrase,
        	'artist' => $faker->name,
        	'genre_id' => $genre3->id
        ]);
        $song3->lyric()->create([
        	'lyrics' => $faker->text]);

        $song4 = Song::create([
        	'title' => $faker->catchPhrase,
        	'artist' => $faker->name,
        	'genre_id' => $genre1->id
        ]);
        $song4->lyric()->create([
        	'lyrics' => $faker->text]);


        // seeding labels
        $label1 = Label::create(['name' => 'guitar solo']);
        $label2 = Label::create(['name' => 'piano']);
        $label3 = Label::create(['name' => 'violin']);
        $label4 = Label::create(['name' => 'electronic']);

        // attaching labels
        $song1->labels()->attach([$label1->id, $label3->id]);
        $song2->labels()->attach([$label2->id, $label4->id]);
        $song3->labels()->attach([$label1->id, $label2->id]);
        $song4->labels()->attach([$label3->id, $label4->id]);
    }
}
