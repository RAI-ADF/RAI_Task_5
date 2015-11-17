<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        foreach(range(1,3) as $index)
        {
            User::create([
                'name' => str_replace('.', '_', $faker->unique()->userName),
                'email' => $faker->email,
                'password' => 'password'
            ]);
        }
    }
}
