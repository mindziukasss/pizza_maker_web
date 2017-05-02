<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZConnections_ingredients_pizzaPad_cheese extends Model
{
    public $updated_at = false;

    public $created_at = false;

    protected $table = 'pz_connections_ingredients_pizzaPad_cheese';

    protected $fillable = ['id', 'pizzaPad_id', 'ingredients_id','cheese_id'];

    public function cheese()
    {
        return $this->hasOne(PZCheese::class, 'id', 'cheese_id');
    }

    public function pizzaPad()
    {
        return $this->hasOne(PZPizzaPad::class, 'id', 'pizzaPad_id');
    }

}
