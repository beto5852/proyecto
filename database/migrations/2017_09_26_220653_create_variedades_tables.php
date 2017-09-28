<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariedadesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('variedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_variedad');
            $table->integer('variedada_id_cultivo')->unsigned()->nullable();
            $table->foreign('variedada_id_cultivo')->references('id')->on('cultivos');

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
        Schema::drop('variedades');
    }
    
}
