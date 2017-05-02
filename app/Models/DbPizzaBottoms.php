<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DbPizzaBottoms extends CoreModel
{
    protected $table = 'db_pizza_bottoms';

    protected $fillable = ['id', 'name', 'calories'];
}
