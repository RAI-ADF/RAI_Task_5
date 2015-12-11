<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('reservasis', function($table){
               		$table->increments('id');
                	$table->string('nama')->unique();
               	 	$table->string('jumlah');
                	$table->string('ormawa');
                	$table->string('kode');
                	$table->timestamps();
             });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
