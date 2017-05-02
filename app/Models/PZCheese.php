<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZCheese extends PZBaseModel
{
    protected $table = 'pz_cheese';

    protected $fillable = ['id', 'cheese_name', 'calorie'];
}
