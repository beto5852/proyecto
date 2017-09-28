<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        /*$this->call(EtapaTableSeeder::class);
        $this->call(MesTableSeeder::class);
        $this->call(RubroTableSeeder::class);
        $this->call(SemanasTableSeeder::class);
        $this->call(TecnologiaTableSeeder::class);
        $this->call(VariedadTableSeeder::class);*/
        factory('App\User','admin',3)->create();
        factory('App\User','miembro',10)->create();
        factory('App\Telefono',13)->create();
        factory('App\Notificacion',10)->create();
        factory('App\Rubro',10)->create();
        factory('App\Tenologia',10)->create();
        factory('App\Cultivo',10)->create();
        factory('App\Etapa',10)->create();
        factory('App\Variedad',10)->create();
        factory('App\Caracteristica',10)->create();
        /*factory('App\Practica',30)->create();*/

        Model::unguard();
    }
}
