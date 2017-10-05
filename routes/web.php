<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/','LoginController@index');


Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {

    //
   // Auth::routes();
    Route::resource('/login','LoginController');
    Route::resource('/home','HomeController');
    Route::resource('/users','UsersController');
    Route::resource('/tecnologias','TecnologiasController');
    Route::resource('/practicas','PracticasController');


});

Route::get('users/{id}',[
    'uses' => "UsersController@destroy",
    'as'   =>  "users.destroy"
]);

Route::get('tecnologias/{id}',[
    'uses' => "TecnologiasController@destroy",
    'as'   =>  "tecnologias.destroy"
]);

Route::get('logout',[
    'uses'  =>  'LoginController@logout',
    'as'    =>  'logout'
] );




//Auth::routes();
//controlador de recurso



/* rutas que se generarian
    GET /products => index  muestra coleccion
    POST /products => store  guardaria el producto
    GET /products => create mostraria el formulario para crear

    GET /products/id => el id es dinamico para mostrar un producto con ID
    GET/products/:id/edit =>formulario de edicion
    PUT/PATCH/:id  =>actualiza el producto
    DELETE/products/:id elimina el producto

*/


