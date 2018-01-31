<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table="galerias";

    protected $fillable=['imagen','albums_id'];

     public function albums()
   {
   	 return $this->belongsTo('App\Album');
   }
}
