<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   use \Rutorika\Sortable\SortableTrait;
   
   protected $table='sliders';

   protected $fillable=['imagen','link'];

    protected static $sortableField = 'position';
}
