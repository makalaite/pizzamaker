<?php

namespace App\Models;



class DbCheeses extends CoreModel
{
    protected $table = 'db_cheeses';

    protected $fillable = ['id', 'name', 'calories'];
}
