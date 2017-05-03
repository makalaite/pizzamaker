<?php

namespace App\Models;


class DbPizzaIngredientsConnections extends CoreModel
{
    protected $table = 'db_pizza_ingredients_connections';

    protected $fillable = ['id', 'pizza_id', 'ingredient_id'];
}
