<?php

use Illuminate\Database\Seeder;

class PtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i<10; $i++) {

            \DB::table('pt')->insert(array(

                'practicas_id_tags' => App\Practica::all()->random()->id,
                'tags_id_practicas' => App\Tag::all()->random()->id
            ));
        }
    }
}
