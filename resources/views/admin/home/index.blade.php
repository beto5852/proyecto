@extends('layouts.admin')

@section('title','<i class="fa fa-home" aria-hidden="true"></i>'.' '.'Bienvenido')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('home') !!}</li>
    </ul>
@endsection

@section('content')

    @if(Session::has('message-error'))
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('message-error')}}
        </div>
    @endif

    <div class="row">

        <div class="list-group">
            <div class="list-group-item">
                <div class="row-picture">
                    <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                </div>
                <div class="row-content">
                    <h4 class="list-group-item-heading">Tile with avatar</h4>

                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
                </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
                <div class="row-picture">
                    <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
                </div>
                <div class="row-content">
                    <h4 class="list-group-item-heading">Tile with another avatar</h4>

                    <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                </div>
            </div>

        </div>


    </div>


    <div class="row">

        <div class="list-group">
            <div class="list-group-item">
                <div class="row-picture">
                    <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                </div>
                <div class="row-content">
                    <h4 class="list-group-item-heading">Tile with avatar</h4>

                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
                </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
                <div class="row-picture">
                    <img class="circle" src="http://lorempixel.com/56/56/people/6" alt="icon">
                </div>
                <div class="row-content">
                    <h4 class="list-group-item-heading">Tile with another avatar</h4>

                    <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                </div>
            </div>

        </div>


    </div>


    <footert>

        <div class="container">
            <p class="text-center"> Derechos Reservados INTA &copy; 2017
                Contiguo a la Policía Nacional del Distrito 5, Managua
                Telf.: 505-22780471 Email:<a href="#" class="alert-link">oaip@inta.gob.ni</a></p>
        </div>

    </footert>

@endsection