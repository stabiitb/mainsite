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
			$table->string('name',200);
			$table->string('url',200);
			$table->string('club',50);
			$table->integer('by');
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
