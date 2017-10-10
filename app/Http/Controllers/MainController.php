<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notificacion;

class MainController extends Controller
{

    public function home(){
        //return view('main.home',["name"=>"Esta es una prueba"]);

       // $mensaje = Notificacion::findBySession(null);

        return view('admin.main.home',['mensaje' => $mensaje]);
    }


}