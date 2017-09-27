<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms', function (Blueprint $table) {
            $table->increments('id');

            
            $table->integer('ms_id_mes')->unsigned();
            $table->foreign('ms_id_mes')->references('id')->on('mes');

            $table->integer('ms_id_semana')->unsigned();;
            $table->foreign('ms_id_semana')->references('id')->on('semanas');

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
        Schema::drop('ms');
    }
}
