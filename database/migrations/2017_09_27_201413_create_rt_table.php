<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rt', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('rt_id_rubro')->unsigned();
            $table->foreign('rt_id_rubro')->references('id')->on('rubros');

            $table->integer('rt_id_tecnologia')->unsigned();;
            $table->foreign('rt_id_tecnologia')->references('id')->on('tecnologias');

            
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
        Schema::drop('rt');
    }
}
