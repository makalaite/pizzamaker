<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDbPizzaConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('db_pizza_connections', function(Blueprint $table)
		{
			$table->foreign('cheese_id', 'fk_db_bottom_cheese_ingredient_connection_db_cheeses1')->references('id')->on('db_cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('dough_id', 'fk_db_bottom_cheese_ingredient_connection_db_pizza_bottoms')->references('id')->on('db_pizza_bottoms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ingredient_id', 'fk_db_bottom_cheese_ingredient_connection_db_pizza_ingredients1')->references('id')->on('db_pizza_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('db_pizza_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_db_bottom_cheese_ingredient_connection_db_cheeses1');
			$table->dropForeign('fk_db_bottom_cheese_ingredient_connection_db_pizza_bottoms');
			$table->dropForeign('fk_db_bottom_cheese_ingredient_connection_db_pizza_ingredients1');
		});
	}

}
