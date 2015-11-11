<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelAnggotaBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_buku', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_anggota');
            $table->foreign('id_anggota')->references('id')->on('anggota')->onDelete('CASCADE');
            $table->unsignedInteger('id_buku');
            $table->foreign('id_buku')->references('id')->on('buku')->onDelete('CASCADE');

        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anggota_buku');
    }
}
