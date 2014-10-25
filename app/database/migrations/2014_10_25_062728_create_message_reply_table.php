<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messsage_reply', function($table)
		{
			$table->increments('id');
			$table->integer('message_id');
			$table->integer('reply_id');
			$table->timeStamps();
			$table->index('message_id');
			$table->index('reply_id');

		});
	}
	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messsage_reply');	
	}

}
