<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DbCheeses extends CoreModel
{
    protected $table = 'db_cheeses';

    protected $fillable = ['id', 'name', 'calories'];
}
