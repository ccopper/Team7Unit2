<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPetsAndPettypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pets', function($table)
		{
			$table->increments('id');
			$table->string('Name');
			$table->integer('Age');
			$table->integer('Pettype_id');
		});
		Schema::create('pettypes', function($table)
		{
			$table->increments('id');
			$table->string('Name');
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
