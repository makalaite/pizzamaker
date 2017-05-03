<?php

namespace App\Models;


class DbPizza extends CoreModel
{
    protected $table = 'db_pizza';

    protected $fillable = ['id', 'cheese_id', 'base_id', 'comment', 'client_name'];
}
