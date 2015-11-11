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
        $this->call('PostTableSeeder');
        // $this->call(UserTableSeeder::class);

        //Model::reguard();

        Eloquent::unguard();
        $this->call('SeederRelasi');
        $this->command->info('SeederRelasi berhasil.');
    }
}

class PostTableSeeder extends Seeder
{
  public function run()
  {
    App\Post::truncate();

    factory(App\Post::class, 20)->create();
  }
}
?>
