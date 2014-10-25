<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('organization_user', function($table)
        {
            $table->increments('id');
            $table->integer('organization_id');
            $table->integer('user_id');
            $table->timeStamps();
            $table->index('organization_id');
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
		 Schema::drop('organization_user');
	}

}
