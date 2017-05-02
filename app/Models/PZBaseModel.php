<?php
/**
 * Created by PhpStorm.
 * User: Code Academy
 * Date: 5/2/2017
 * Time: 1:06 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class PZBaseModel extends Model
{
    use SoftDeletes;

    public $incrementing = false;


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            $model->{$model->getKeyName()} = (string)$model->generateNewId();
        });
    }

    /**
     *
     * @return \Ramsey\Uuid\UuidInterface
     */
    public function generateNewId()
    {
        if (isset($this->attributes['id'])) {
            return $this->attributes['id'];
        }

        return Uuid::uuid4();
    }
}