<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
        $users = User::all()->take(10);
        foreach($users as $user){
        	DB::table('groups')->insert([
        		'name'=>$faker->company,
        		'user_id'=>$user->id,
        		'description'=>$faker->sentence(10),
        	]);
        }
    }
}
