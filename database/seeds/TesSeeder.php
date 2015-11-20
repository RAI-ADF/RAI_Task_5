<?php

use Illuminate\Database\Seeder;
//use App\student;
class TesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('students')->delete();
		$student1=student::create(['name'=>'aul','major'=>'IF']);
		$student1=student::create(['name'=>'lala','major'=>'IF']);

		
    }
}
