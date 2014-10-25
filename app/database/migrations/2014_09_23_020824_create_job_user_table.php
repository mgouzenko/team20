<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('job_user', function($table)
        {
            $table->increments('id');
            $table->integer('job_id');
            $table->integer('user_id');
            $table->timestamps();
            $table->index('job_id');
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
        Schema::drop('job_user');
	}

}
