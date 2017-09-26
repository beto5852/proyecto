<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ps', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ps_id_practica')->unsigned();;
            $table->foreign('ps_id_practica')->references('id')->on('practicas');

            $table->integer('ps_id_semana')->unsigned();
            $table->foreign('ps_id_semana')->references('id')->on('semanas');

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
        //
        Schema::drop('ps');
    }
}
