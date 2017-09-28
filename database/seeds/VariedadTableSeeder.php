<?php

use Illuminate\Database\Seeder;

class VariedadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('variedades')->insert([
            'nombre_variedad'=> 'NB-S',
            'variedada_id_cultivo'=> 1,
        ]);
        DB::table('variedades')->insert([
            'nombre_variedad'=> 'NB-6',
            'variedada_id_cultivo'=> 2,
        ]);
        DB::table('variedades')->insert([
            'nombre_variedad'=> 'NB-6',
            'variedada_id_cultivo'=> 3,
        ]);
        DB::table('variedades')->insert([
            'nombre_variedad'=> 'Nutrinta Amarillo',
            'variedada_id_cultivo'=> 4,
        ]);
        DB::table('variedades')->insert([
            'nombre_variedad'=> 'NUTRADER',
            'variedada_id_cultivo'=> 5,
        ]);

    }
}
