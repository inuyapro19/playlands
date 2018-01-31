<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $table='tallers';

    protected $fillable=[
    			'texto_1',
                'taller1',
    			'musica',
                'taller2',
    			'yoga',
                'taller3',
    			'arte',
                'taller4',
    			'chef',
                'taller5',
    			'ingles',
                'taller6',
    			'teatro',
    			'horario',
    			'profesional'
    			];
}
