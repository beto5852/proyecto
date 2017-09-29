<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function(Blueprint $tabla){

            $tabla->increments('id');
            $tabla->string('nombre_practica');
            $tabla->text('contenido');
            $tabla->string('slug')->unique();
            $tabla->string('path')->nullable();
            $tabla->string('tags');
            $tabla->integer('practica_id_tecnologia')->unsigned();
            $tabla->foreign('practica_id_tecnologia')->references('id')->on('tecnologias');
            
            $tabla->integer('practica_id_usuario')->unsigned()->nullable();          
            $tabla->foreign('practica_id_usuario')->references('id')->on('users');

            $tabla->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('practicas');
    }
}
