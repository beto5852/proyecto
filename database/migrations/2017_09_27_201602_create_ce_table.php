<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ce', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ce_id_cultivo')->unsigned();;
            $table->foreign('ce_id_cultivo')->references('id')->on('cultivos');

            $table->integer('ce_id_etapa')->unsigned();
            $table->foreign('ce_id_etapa')->references('id')->on('etapas');

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
        Schema::drop('ce');
    }
}
