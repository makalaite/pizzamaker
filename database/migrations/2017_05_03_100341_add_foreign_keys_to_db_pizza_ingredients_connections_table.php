<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDbPizzaIngredientsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('db_pizza_ingredients_connections', function(Blueprint $table)
		{
			$table->foreign('ingredient_id', 'fk_db_pizza_ingredients_connections_db_ingredients1')->references('id')->on('db_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizza_id', 'fk_db_pizza_ingredients_connections_db_pizza')->references('id')->on('db_pizza')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('db_pizza_ingredients_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_db_pizza_ingredients_connections_db_ingredients1');
			$table->dropForeign('fk_db_pizza_ingredients_connections_db_pizza');
		});
	}

}
