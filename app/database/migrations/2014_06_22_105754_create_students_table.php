<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('students', function($table)
    {
        $table->increments('id', 11);
        $table->string('fname', 64);
        $table->string('lname', 64);
        $table->string('email', 64)->unique();
        $table->string('phone', 16);
        $table->string('addr', 64);
        $table->string('addr2', 16);
        $table->string('city', 32);
        $table->string('state', 16);
        $table->string('zip', 16);
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
    Schema::drop('students');
	}

}
