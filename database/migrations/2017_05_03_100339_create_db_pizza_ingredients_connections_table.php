<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbPizzaIngredientsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('db_pizza_ingredients_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('pizza_id', 36)->nullable()->index('fk_db_pizza_ingredients_connections_db_pizza_idx');
			$table->string('ingredient_id', 36)->nullable()->index('fk_db_pizza_ingredients_connections_db_ingredients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('db_pizza_ingredients_connections');
	}

}
