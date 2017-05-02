<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DbPizzaConnections extends CoreModel
{
    protected $table = 'db_pizza_ingredients';

    protected $fillable = ['id', 'dough_id', 'cheese_id', 'ingredient_id'];
}
