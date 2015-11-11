<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelDetailAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailAnggota', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('jenisKelamin');
            $table->string('alamat');
            $table->string('telp');
            
            $table->unsignedInteger('id_anggota');
            $table->foreign('id_anggota')->references('id')->on('anggota')->onDelete('CASCADE');

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
        Schema::drop('detailAnggota');
    }
}
