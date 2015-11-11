<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahFieldAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anggota', function($table) {
			$table->unsignedInteger('id_rental')->after('nama')->nullable();
			$table->foreign('id_rental')->references('id')->on('rental')->onDelete('CASCADE');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('anggota', function($table) {
			$table->dropColumn('id_rental');
		});
    }
}
