<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
        DB::table('customer')->truncate();

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            
            $data = [
				'name'      => $faker->name,
                'address'   => $faker->address,
                'phone'     => $faker->phoneNumber,
				'birthdate'	=> $faker->datetime()
            ];
            //dd($data);
            Customer::create($data);
			
			$data2 = [
				'brand'     => $faker->UserAgent,
				'type'		=> $faker->Payment
            ];
            //dd($data);
            Customer::create($data2);
			
			$data = [
				'street'       => $faker->streetAddress,
                'city'   	   => $faker->city,
                'province'     => $faker->country
				
            ];
            //dd($data);
            Customer::create($data);
			
        }

    }
    
}
