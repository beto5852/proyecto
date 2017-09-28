<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('mes')->insert([
            'nombre_mes'=> 'Enero'
        ]);
        DB::table('mes')->insert([
            'nombre_mes'=> 'Febrero'
        ]);
        DB::table('mes')->insert([
            'nombre_mes'=> 'Marzo'
        ]);
        DB::table('mes')->insert([
            'nombre_mes'=> 'Abril'
        ]);

        DB::table('mes')->insert([
            'nombre_mes'=> 'Mayo'
        ]);

        DB::table('mes')->insert([
            'nombre_mes'=> 'Junio'
        ]);
        DB::table('mes')->insert([
            'nombre_mes'=> 'Julio'
        ]);

        DB::table('mes')->insert([
            'nombre_mes'=> 'Agosto'
        ]);
        DB::table('mes')->insert([
            'nombre_mes'=> 'Septiembre'
        ]);

        DB::table('mes')->insert([
            'nombre_mes'=> 'Octubre'
        ]);

        DB::table('mes')->insert([
            'nombre_mes'=> 'Noviembre'
        ]);
        DB::table('mes')->insert([
            'nombre_mes'=> 'Diciembre'
        ]);

    }
}
