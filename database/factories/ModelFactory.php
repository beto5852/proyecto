<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

/**************************Usuario Administrado********************************/
$factory->define(App\User::class,'admin', function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name($gender = null|'male'|'female'),
        'email' => $faker->email,
        'password' => $password ?: $password = bcrypt('secret'),
        'type'=> 'admin',
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\User::class,'miembro', function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name($gender = null|'male'|'female'),
        'email' => $faker->email,
        'password' => $password ?: $password = bcrypt('secret'),
        'type'=> 'admin',
        'remember_token' => str_random(10),
    ];
});
/*****************Telefonos****************************************/

$factory->define(App\Telefono::class, function (Faker\Generator $faker) {

    return [
        'telefono' => $faker->phoneNumber,
        'telefono_id_usuario'=> App\User::all()->random()->id,

    ];
});
/******************Notificaciones**************************************/

$factory->define(App\Tenologia::class, function (Faker\Generator $faker) {

    return [
        'nombre_practica' => $faker->name,
        'contenido' => $faker->paragraph,
        'tags' => $faker->word,
        'practica_id_tecnologia'=> App\Tenologia::all()->random()->id,
        'practica_id_usuario' => App\User::all()->random()->id,
    ];
});


$factory->define(App\Practica::class, function (Faker\Generator $faker) {

    return [
        'nombre_practica' => $faker->sentence,
        'practica_id_tecnologia'=> App\Tenologia::all()->random()->id,
        'practica_id_usuario' => App\User::all()->random()->id,
    ];
});