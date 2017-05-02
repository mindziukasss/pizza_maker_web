<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZPizzaPad extends PZBaseModel
{
    protected $table = 'pz_pizzaPad';

    protected $fillable = ['id', 'pizza_pad_name', 'calorie'];
}
