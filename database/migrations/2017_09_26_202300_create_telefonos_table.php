<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // //Realizar Cambios
        Schema::create('telefonos',function(Blueprint $tabla){
            $tabla->string("telefono")->nullable();
            $tabla->integer('telefono_id_usuario')->unsigned();
            $tabla->foreign('telefono_id_usuario')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('telefonos');
    }
}
