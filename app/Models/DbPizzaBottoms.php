<?php

namespace App\Models;


class DbPizzaBottoms extends CoreModel
{
    protected $table = 'db_pizza_bottoms';

    protected $fillable = ['id', 'name', 'calories'];
}
