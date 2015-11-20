<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('movies', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('id_director');
			$table->integer('id_cinemas');
			
			$table->foreign('id_director')
			->references('id')->on('directors')
			->onDelete('cascade');
			

			$table->foreign('id_cinemas')
			->references('id')->on('cinemas')
			->onDelete('cascade');
			
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
