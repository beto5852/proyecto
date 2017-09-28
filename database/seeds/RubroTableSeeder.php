<?php

use Illuminate\Database\Seeder;

class RubroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'Arroz',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
       /* DB::table('rubros')->insert([
            'nombre_rubro'=> 'Maíz',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'Frijol',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'pasto',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'pithaya',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'repollo',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'Tomate',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'Musacea',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'Piña',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'papa',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'papa',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'Musacea',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'Bovino',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('rubros')->insert([
            'nombre_rubro'=> 'Porcino',
            'descripcion_rubro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);*/
    }
}
