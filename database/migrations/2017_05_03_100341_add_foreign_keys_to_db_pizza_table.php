<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDbPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('db_pizza', function(Blueprint $table)
		{
			$table->foreign('base_id', 'fk_db_pizza_db_base1')->references('id')->on('db_base')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cheese_id', 'fk_db_pizza_db_cheeses1')->references('id')->on('db_cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('db_pizza', function(Blueprint $table)
		{
			$table->dropForeign('fk_db_pizza_db_base1');
			$table->dropForeign('fk_db_pizza_db_cheeses1');
		});
	}

}
