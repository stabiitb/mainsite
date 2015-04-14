<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingItspFieldInUserProfile1 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Users', function($table)
		{	
			$table->dropColumn('itsp');
  			//$table->integer('itsp')->unsigned();
			//$table->foreign('itsp')->references('id')->on('ITSP');
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
