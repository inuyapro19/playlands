<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table='albums';

    protected $fillable=['nombre','descripcion','imagen'];

    public function galeria()
    {
        return $this->hasMany('App\galeria');
    }
}
