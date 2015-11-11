<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelAnggotaGame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_game', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_anggota');
            $table->foreign('id_anggota')->references('id')->on('anggota')->onDelete('CASCADE');
            $table->unsignedInteger('id_game');
            $table->foreign('id_game')->references('id')->on('game')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anggota_game');
    }
}
