<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('videos', function($table)
		{
			$table->string('title');
			$table->date('release');
			$table->time('duration');
			$table->integer('rating');
			$table->string('des');
			$table->string('review');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('videos', function($table)
		{
			$table->drop_column('title');
			$table->drop_column('release');
			$table->drop_column('duration');
			$table->drop_column('rating');
			$table->drop_column('des');
			$table->drop_column('review');
		});
	}

}
