<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $descripcion = $faker->sentence;

        for($i = 0; $i<10; $i++) {

            \DB::table('cv')->insert(array(
                'descripcion_caracteristica' => $faker->paragraph,
                'cv_id_caracteristica' => App\Caracteristica::all()->random()->id,
                'cv_id_variedad' => App\Variedad::all()->random()->id
            ));
        }
    }
}
