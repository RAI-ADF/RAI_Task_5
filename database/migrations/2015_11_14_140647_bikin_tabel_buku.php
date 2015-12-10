<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BikinTabelBuku extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bukus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul');
			$table->string('pengarang');
			$table->string('genre');
			$table->date('published');
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
		Schema::drop('bukus');
	}

}
