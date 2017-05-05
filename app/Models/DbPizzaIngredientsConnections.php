<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DbPizzaIngredientsConnections extends Model
{
    protected $updated_at = false;

    protected $table = 'db_pizza_ingredients_connections';

    protected $fillable = ['pizza_id', 'ingredient_id'];

    public function IngredientsData()
    {
        return $this->hasOne(DbIngredients::class, 'id', 'ingredient_id');
    }
}
