<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SemanasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('semanas')->insert([
            'nombre_semana'=> 'Semana 1',
        ]);

        DB::table('semanas')->insert([
            'nombre_semana'=> 'Semana 2',
        ]);

        DB::table('semanas')->insert([
            'nombre_semana'=> 'Semana 3',
        ]);

        DB::table('semanas')->insert([
            'nombre_semana'=> 'Semana 4',
        ]);


    }
}
