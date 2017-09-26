<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sm', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('sm_id_semana')->unsigned();;
            $table->foreign('sm_id_semana')->references('id')->on('semanas');

            $table->integer('sm_id_mes')->unsigned();
            $table->foreign('sm_id_mes')->references('id')->on('mes');

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
        Schema::drop('sm');
    }
}
