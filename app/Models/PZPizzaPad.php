<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZPizzaPad extends PZBaseModel
{
    protected $table = 'pz_pizzaPad';

    protected $fillable = ['id', 'pizza_pad_name', 'calorie'];

    public function cheese()
    {
        return $this->hasOne(PZConnections_ingredients_pizzaPad_cheese::class, 'cheese_id', 'id')->with(['cheese']);
    }

    public function ingredients()
    {
        return $this->belongsToMany(PZIngredients::class,'pz_connections_ingredients_pizzaPad_cheese', 'ingredients_id', 'pizzaPad_id',
            'cheese_id');
    }
}
