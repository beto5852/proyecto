<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tr_id_tecnologia')->unsigned();;
            $table->foreign('tr_id_tecnologia')->references('id')->on('tecnologias');

            $table->integer('tr_id_rubro')->unsigned();
            $table->foreign('tr_id_rubro')->references('id')->on('rubros');

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
        Schema::drop('tr');
    }

}
