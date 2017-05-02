<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZConnections_ingredients_pizzaPad_cheese extends Model
{
    protected $table = 'pz_connections_ingredients_pizzaPad_cheese';

    protected $fillable = ['id', '	pizzaPad_id', 'ingredients_id','cheese_id'];

}
