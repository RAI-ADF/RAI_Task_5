<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
            User::create([
                'name'      => $faker->name,
                'email'     => $faker->email,
                'password'  => bcrypt('qwerty')
            ]);
        }
    }
}
