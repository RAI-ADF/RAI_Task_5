<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdGenreForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs', function (Blueprint $table) {
            // add new genre column
            $table->integer('genre_id')->unsigned();
            // add foreign key
            $table->foreign('genre_id')->references('genre_id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songs', function (Blueprint $table) {
            // drop genre column
            $table->dropColumn('genre_id');
        });
    }
}
