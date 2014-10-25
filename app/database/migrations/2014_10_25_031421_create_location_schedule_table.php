<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('location_schedule', function($table)
		{
			$table->increments('id');
			$table->integer('location_id');
			$table->integer('schedule_id');
			$table->timeStamps();
			$table->index('location_id');
			$table->index('schedule_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('location_schedule');
	}

}
