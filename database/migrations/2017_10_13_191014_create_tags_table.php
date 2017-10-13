<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nombre_tags');
            $table->timestamps();
        });

        ///practicas y tags
        Schema::create('pt',function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('practicas_id_tags')->unsigned()->nullable();;
            $table->foreign('practicas_id_tags')->references('id')->on('practicas')->onDelete('set null');;

            $table->integer('tags_id_practicas')->unsigned()->nullable();;
            $table->foreign('tags_id_practicas')->references('id')->on('tags')->onDelete('set null');;

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
        Schema::drop('tags');

        Schema::drop('pt');
    }
}
