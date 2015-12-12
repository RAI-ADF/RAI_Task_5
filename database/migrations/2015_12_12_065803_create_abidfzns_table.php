<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use app\abidfzns;

class CreateAbidfznsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abidfzns', function (Blueprint $table) {
            $table->increments('id');
            $table->int('nim');
            $table->string('nama');
            $table->string('angkatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('abidfzns');
    }
}
