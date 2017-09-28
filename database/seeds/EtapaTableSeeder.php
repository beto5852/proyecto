<?php

use Illuminate\Database\Seeder;
use Faker\Generator;

class EtapaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Siembra',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'pre-siembra',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'post-cosecha',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'vegetativa',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Pre-almacenamiento',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Almacenamiento',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Desarrollo Vegetativo',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Establecimiento de semilleros',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'coseha',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Floracion',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Tuberazcion',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Senescencia',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Lactancia y engorde',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Post-destete',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Manejo de potreros',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Naciencia',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Sanidad Animal',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
        DB::table('etapas')->insert([
            'nombre_etapa'=> 'Alimentacion ',
            'descripcion_etapa'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a velit nec libero ullamcorper pharetra. Aenean at dui id lorem.',
        ]);
       
    }
}
