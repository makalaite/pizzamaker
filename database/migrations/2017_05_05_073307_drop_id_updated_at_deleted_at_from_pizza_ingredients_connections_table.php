<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropIdUpdatedAtDeletedAtFromPizzaIngredientsConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('db_pizza_ingredients_connections', function (Blueprint $table) {
            $table->dropUnique('id_UNIQUE');
            $table->dropColumn('id');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('db_pizza_ingredients_connections', function (Blueprint $table) {
            $table->string('id', 36)->unique('id_UNIQUE');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
