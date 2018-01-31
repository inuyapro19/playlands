<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->string('direccion',70);
            $table->string('ciudad',20);
            $table->string('email',75);
            $table->string('telefono',15);
            $table->string('movil',15);
            $table->string('facebook1')->nullable();
            $table->text('texto_bien');
            $table->text('texto_cafeteria');
            $table->text('texto_ser1');
            $table->text('texto_ser2');
            $table->string('imagen_somos')->default('imagen.jpg');
            $table->text('quienes_somos');
            $table->text('url_mapa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
