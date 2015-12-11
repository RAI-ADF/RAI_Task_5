<?php

use App\Fish;
use App\Picnic;
use App\Tree;
use Illuminate\Database\Seeder;
use App\Bear;
use Illuminate\Support\Facades\DB;

class BearAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bears')->delete();
        DB::table('fish')->delete();
        DB::table('picnics')->delete();
        DB::table('trees')->delete();
        DB::table('bears_picnics')->delete();

        $faker = Faker\Factory::create();
        $bear1 = Bear::create([
            'name' => $faker->name,
            'type' => $faker->word,
            'danger_level' => $faker->numberBetween(1, 10)
        ]);

        $bear2 = Bear::create([
            'name' => $faker->name,
            'type' => $faker->word,
            'danger_level' => $faker->numberBetween(1, 10)
        ]);

        $bear3 = Bear::create([
            'name' => $faker->name,
            'type' => $faker->word,
            'danger_level' => $faker->numberBetween(1, 10)
        ]);

        Fish::create([
            'weight' => $faker->numberBetween(1, 20),
            'bear_id' => $bear1->getAttribute('id')
        ]);

        Fish::create([
            'weight' => $faker->numberBetween(1, 20),
            'bear_id' => $bear2->getAttribute('id')
        ]);

        Fish::create([
            'weight' => $faker->numberBetween(1, 20),
            'bear_id' => $bear1->getAttribute('id')
        ]);

        Tree::create([
            'type' => $faker->word,
            'age' => $faker->numberBetween(200, 400),
            'bear_id' => $bear1->getAttribute('id')
        ]);

        Tree::create([
            'type' => $faker->word,
            'age' => $faker->numberBetween(200, 400),
            'bear_id' => $bear1->getAttribute('id')
        ]);

        $picnic1 = Picnic::create([
            'name' => $faker->firstName,
            'taste_level' => $faker->numberBetween(1, 5)
        ]);
        $picnic2 = Picnic::create([
            'name' => $faker->firstName,
            'taste_level' => $faker->numberBetween(1, 5)
        ]);

        DB::table('bears_picnics')->insert([

        ]);
        $bear1->picnics()->attach($picnic1->getAttribute('id'));
        $bear1->picnics()->attach($picnic2->getAttribute('id'));

        $bear2->picnics()->attach($picnic1->getAttribute('id'));
        $bear2->picnics()->attach($picnic2->getAttribute('id'));

        $bear3->picnics()->attach($picnic1->getAttribute('id'));
        $bear3->picnics()->attach($picnic2->getAttribute('id'));
    }

}
