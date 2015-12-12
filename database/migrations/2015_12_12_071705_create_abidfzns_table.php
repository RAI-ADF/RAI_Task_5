<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbidfznsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abidfzns',function(Blueprint $table){
            $table->increments('id_abids');
            $table->int('nim_user');
            $table->string('nama');
            $table->string('angkatan');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('abidfzns');
        //
    }
}
