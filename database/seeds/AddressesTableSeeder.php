<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = User::all();
        foreach ($users as $user) {
        	/*$address = new Address();
        	$address->country = $faker->country;
        	$address->province = $faker->state;
        	$address->city = $faker->city;
        	$address->street = $faker->Address;
        	$address->attach($user->id);
        	$address->save();*/
        	DB::table('addresses')->insert([
        		'country'=>$faker->country,
        		'province'=>$faker->state,
        		'city'=>$faker->city,
        		'street'=>$faker->address,
        		'user_id'=>$user->id,
        	]);
        }
    }
}
