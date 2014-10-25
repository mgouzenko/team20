<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedule_user', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('schedule_id');
			$table->timeStamps();
			$table->index('user_id');
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
		Schema::drop('schedule_user');
	}

}
