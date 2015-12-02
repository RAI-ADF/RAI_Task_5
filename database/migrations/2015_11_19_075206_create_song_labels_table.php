<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_labels', function (Blueprint $table) {
            $table->integer('song_id')->unsigned();
            $table->integer('label_id')->unsigned();

            $table->foreign('song_id')->references('song_id')->on('songs')->onDelete('cascade');
            $table->foreign('label_id')->references('label_id')->on('labels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('song_labels');
    }
}
