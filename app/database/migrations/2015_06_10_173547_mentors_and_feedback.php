<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MentorsAndFeedback extends Migration {

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

			$table->string('mentor1',50)->nullable();
			$table->string('mentor2',50)->nullable();
			$table->string('mentor_feedback',500)->nullable();
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
