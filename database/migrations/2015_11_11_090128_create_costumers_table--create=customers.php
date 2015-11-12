<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumersTableCreate=customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create ('customers', function(Blueprint $table){
			$table->increments('id');
			$table->string ('name');
			$table->string ('phone');
			$table->string ('address');
			$table->timestamps('birthdate');
			$table->timestamps();
			$table->rememberToken();
			
		});
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::drop('customers');
    }
}
