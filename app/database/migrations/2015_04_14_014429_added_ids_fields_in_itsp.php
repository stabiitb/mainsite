<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedIdsFieldsInItsp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('ITSP', function($table)
		{	

			$table->integer('number')->nullable();
			$table->integer('completed')->nullable();
			$table->integer('user_id2')->nullable();
			$table->integer('user_id3')->nullable();
			$table->integer('user_id4')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
