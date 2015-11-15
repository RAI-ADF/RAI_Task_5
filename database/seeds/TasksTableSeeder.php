<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Group;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = Group::all();
        $faker = Faker::create();
        foreach($groups as $group){
        	$user = $group->users()->take(1)->get();
        	DB::table('tasks')->insert([
        		'name'=>$faker->word,
        		'description'=>$faker->sentence(10),
        		'starting_time'=>$faker->dateTimeBetween('- 10 days','+ 10 days'),
        		'finising_time'=>$faker->dateTimeBetween('+ 11 days','+ 20 days'),
        		'user_id'=>$user[0]->id,
        		'group_id'=>$group->id,
        	]);
        }
    }
}
