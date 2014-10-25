<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventWeightTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_weight', function($table)
		{
			$table->increments('id');
			$table->integer('event_id');
			$table->integer('weight_id');
			$table->timeStamps();
			$table->index('event_id');
			$table->index('weight_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_weight');
	}

}
