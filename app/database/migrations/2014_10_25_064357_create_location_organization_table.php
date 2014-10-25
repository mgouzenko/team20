<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationOrganizationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('location_organization', function($table)
		{
			$table->increments('id');
			$table->integer('location_id');
			$table->integer('organization_id');
			$table->timeStamps();
			$table->index('location_id');
			$table->index('organization_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('location_organization');
	}

}
