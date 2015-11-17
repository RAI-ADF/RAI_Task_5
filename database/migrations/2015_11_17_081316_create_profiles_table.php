<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
  public function up()
  {
    Schema::create('profiles', function($table)
    {
      $table->increments('id');
      $table->string('name');
      $table->timestamps();

      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::drop('profiles');
  }
}
