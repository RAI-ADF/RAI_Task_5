<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Post::truncate();

        foreach(range(1,10) as $index)
        {
            Post::create([
                'user_id' => rand(1,3),
                'content' => $faker->realText($maxNbChars = 50, $indexSize = 2)
            ]);
        }
    }
}
