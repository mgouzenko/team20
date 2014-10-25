<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('location_user', function($table)
		{
			$table->increments('id');
			$table->integer('location_id');
			$table->integer('user_id');
			$table->timeStamps();
			$table->index('location_id');
			$table->index('user_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			Schema::drop('location_user');
	}

}
