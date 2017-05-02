<?php
/**
 * Created by PhpStorm.
 * User: Agne
 * Date: 2017.05.02
 * Time: 14:04
 */

namespace App;


use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CoreModel
{
    use SoftDeletes;

    public $incrementing = false;

    public $hidden = ['count', 'created_at', 'updated_at', 'deleted_at'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4();
        });
    }
}