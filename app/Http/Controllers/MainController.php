<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{

    public function home(){
        //return view('main.home',["name"=>"Esta es una prueba"]);
        return view('main.home',[]);
    }


}