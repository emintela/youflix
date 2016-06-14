<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaymentdetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paymentdetails',function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('payment_status');
			$table->string('payment_gross');
			$table->string('payer_id');
			$table->string('payer_email');
			$table->string('txn_id');
			$table->string('verify_sign');
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
		Schema::drop('paymentdetails');
	}

}
