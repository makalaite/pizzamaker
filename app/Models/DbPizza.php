<?php

namespace App\Models;


class DbPizza extends CoreModel
{
    protected $table = 'db_pizza';

    protected $fillable = ['id', 'cheese_id', 'base_id', 'comment', 'client_name'];

    public function orderIngredientConnection()
    {
        return $this->belongsToMany(DbIngredients::class, 'db_pizza_ingredients_connections',
            'pizza_id', 'ingredient_id');
    }

    public function ingredients()
    {
        return $this->hasMany(DbPizzaIngredientsConnections::class, 'pizza_id',
            'id')->with(['IngredientsData']);
    }

    public function cheese()
    {
        return $this->hasOne(DbCheeses::class, 'id',
            'cheese_id');
    }

    public function base()
    {
        return $this->hasOne(DbBase::class, 'id',
            'base_id');
    }

}
