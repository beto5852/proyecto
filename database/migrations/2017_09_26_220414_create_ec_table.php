<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ec_id_cultivo')->unsigned();;
            $table->foreign('ec_id_cultivo')->references('id')->on('cultivos');

            $table->integer('ec_id_etapa')->unsigned();
            $table->foreign('ec_id_etapa')->references('id')->on('etapas');

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
        Schema::drop('ec');
    }
}
