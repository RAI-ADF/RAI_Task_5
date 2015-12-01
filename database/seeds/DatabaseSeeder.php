<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(usersTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(Group_usersTableSeeder::class);
        $this->call(TasksTableSeeder::class);

        Model::reguard();
    }
}
