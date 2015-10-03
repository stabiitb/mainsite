<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TutorialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('TutorialsTable', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Name',200);
			$table->string('url',200);
			$table->string('Club',50);
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
		Schema::dropIfExists('TutorialsTable');
	}

}
