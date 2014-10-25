<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_location', function($table)
		{
			$table->increments('id');
			$table->integer('event_id');
			$table->integer('location_id');
			$table->timeStamps();
			$table->index('event_id');
			$table->index('location_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_location');
	}

}
