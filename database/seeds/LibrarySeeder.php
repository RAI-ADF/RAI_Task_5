<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
       $user1 = User::create([
       	'name' => $faker->name,
       	'email' => 'yolo1@gmail.com',
       	'password' => $faker->password,
       	]);

       $user2 = User::create([
       	'name' => $faker->name,
       	'email' => 'yolo2@gmail.com',
       	'password' => $faker->password,
       	]);


    }
}
