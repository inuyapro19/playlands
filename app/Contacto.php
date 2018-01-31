<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table='contactos';

    protected $fillable=[
    	 'nombre',
         'direccion',
         'ciudad',
         'email',
         'telefono',
         'movil',
         'facebook1',
          'facebook2',
          'texto_bien',
            'texto_cafeteria',
            'texto_ser1',
           'texto_ser2',
           'imagen_somos',
            'quienes_somos'
    ];
}
