<?php

namespace App\Models;


class DbIngredients extends CoreModel
{
    protected $table = 'db_ingredients';

    protected $fillable = ['id', 'name', 'calories'];
}
