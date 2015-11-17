<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('follows', function($table)
    {
      $table->increments('id');
      $table->timestamps();

      $table->integer('followee_id')->unsigned();
      $table->integer('follower_id')->unsigned();
      $table->foreign('followee_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('follows');
  }
}
