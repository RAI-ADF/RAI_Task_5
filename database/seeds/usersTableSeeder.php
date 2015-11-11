<?php

use Illuminate\Database\Seeder;
//require_once '/path/to/Faker/src/autoload.php';
use Faker\Factory as Faker;


class usersTableSeeder extends Seeder
{

	

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for($i=0;$i<=9;$i++)
    	{
    		DB::table('users')->insert([
	        	'name' => $faker->name,
	        	'email' => $faker->email,
	        	'password' => $faker->password,
	        ]);		
    	}
    }
}
