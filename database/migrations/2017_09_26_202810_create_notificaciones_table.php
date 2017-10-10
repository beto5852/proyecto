<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('notificaciones', function(Blueprint $tabla) {
            $tabla->engine = 'InnoDB';

            $tabla->increments('id');
            $tabla->text('Mensaje');
            $tabla->unsignedInteger('id_usuario_envia');
            $tabla->unsignedInteger('id_usuario_recibe');


            $tabla->timestamps();

        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('notificaciones');
    }
}
