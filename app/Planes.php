<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    protected $table='planes';

    protected $fillable=['nombre_plan','imagen','descripcion','precio_plan','cantidad_per'];
}
