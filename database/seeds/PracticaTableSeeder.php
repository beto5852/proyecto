<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class PracticaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        for($i = 0; $i<20; $i++){
            $title = $faker->sentence;
            $body = $faker->paragraph;
            //$path = $faker->file(public_path('photos/uploads/tmp'), public_path('photos/uploads'), false);
            $tags = $faker->word;
            $slug = Str::slug($title);
            \DB::table('practicas')->insert(array(
                'nombre_practica' => $title,
                'contenido'  => $body,
                'tags'  => $tags,
                'slug'  => $slug,
                'practica_id_tecnologia'=> App\Tecnologia::all()->random()->id,
                'practica_id_usuario' => App\User::all()->random()->id
            ));
            

        }
    }
}
