<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('texto_1');
            $table->text('taller1');
            $table->text('musica');
            $table->text('taller2');
            $table->text('yoga');
            $table->text('taller3');
            $table->text('arte');
            $table->text('taller4');
            $table->text('chef');
            $table->text('taller5');
            $table->text('ingles');
            $table->text('taller6');
            $table->text('teatro');
            $table->text('horario');
            $table->text('profesional');
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
        Schema::dropIfExists('tallers');
    }
}
