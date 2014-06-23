<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesWeeklyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classes_weekly', function($table)
    {
        $table->increments('id', 11);
        $table->string('name',64)->unique();
        $table->string('description'); // varchar(255)
        $table->string('date', 24);
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
    Schema::drop('classes_weekly');
	}
}
