<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Group;

class Group_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $groups = Group::all();
        foreach($groups as $group){
        	$i = rand(3,11);
        	$users = User::orderByRaw("RAND()")->get()->take($i);
        	foreach ($users as $user) {
        		DB::table('group_user')->insert([
	        		'group_id'=>$group->id,
	        		'user_id'=>$user->id,
	        	]);	
        	}
        }
    }
}
