<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelMahasiswaMatkul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_matkul', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_mahasiswa');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('CASCADE');
            $table->unsignedInteger('id_matkul');
            $table->foreign('id_matkul')->references('id')->on('matkul')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahasiswa_matkul');
    }
}
