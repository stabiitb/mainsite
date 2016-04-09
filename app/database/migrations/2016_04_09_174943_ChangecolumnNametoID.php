<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangecolumnNametoID extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::statement('ALTER TABLE  `ITSP_Projects` DROP PRIMARY KEY , ADD PRIMARY KEY (`team_id`) ;');

//        Schema::table('ITSP_Projects', function($table)
//		{
////			$table->dropPrimary('id');
////			$table->primary('team_id');
//			$table->primary('team_id');
//		});
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
