<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos',function($table)
		{
			$table->increments('id');
			$table->integer('cat_id');
			$table->integer('sub_cat_id');
			$table->string('cat_name');
			$table->string('sub_cat_name');
			$table->integer('paid');
			$table->string('thumbnail');
			$table->string('tailer');
			$table->string('movie');
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
		Schema::drop('videos');
	}

}
