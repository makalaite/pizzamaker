<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DbPizzaIngredients extends CoreModel
{
    protected $table = 'db_pizza_ingredients';

    protected $fillable = ['id', 'name', 'calories'];
}
