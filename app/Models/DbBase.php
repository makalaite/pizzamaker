<?php

namespace App\Models;


class DbBase extends CoreModel
{
    protected $table = 'db_base';

    protected $fillable = ['id', 'name', 'calories'];
}
