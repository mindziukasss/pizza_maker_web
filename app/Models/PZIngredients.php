<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZIngredients extends PZBaseModel
{
    protected $table = 'pz_ingredients';

    protected $fillable = ['id', 'ingredients_names', 'calorie'];
}
