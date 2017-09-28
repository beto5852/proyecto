<?php

use Illuminate\Database\Seeder;

class TecnologiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tecnologias')->insert([
            'nombre_tecnologia'=> 'Producción de semilla',
            'descripcion_tecnologia'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        /*DB::table('tecnologias')->insert([
            'nombre_tecnologia'=> 'Conservacion de suelos y agua',
            'descripcion_tecnologia'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',

        ]);
        DB::table('tecnologias')->insert([
            'nombre_tecnologia'=> 'Postcosehca',
            'descripcion_tecnologia'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',

        ]);
        DB::table('tecnologias')->insert([
            'nombre_tecnologia'=> 'Producción animal',
            'descripcion_tecnologia'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',

        ]);
        DB::table('tecnologias')->insert([
            'nombre_tecnologia'=> 'Manejo Integrado de plagas',
            'descripcion_tecnologia'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',

        ]);*/
        
    }
}
