@extends('layouts.admin')

@section('content')

    <div class="container white">
        <h1>Agregar Nueva Practica Agricola</h1>
        <!--Aqui va el formulario de la practica agricola-->
        {!! Form::open(['url' => '/practicas', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::text('nombre_practica','',['class' => 'form-control','placeholder' => 'Título...']) }}
        </div>
        <div class="form-group">
            {{ Form::textarea('tags','',['class' => 'form-control','placeholder' => 'Título...']) }}
        </div>
        <div class="form-group text-right">
            <a href="{{url('/admin/practicas')}}">Regrese a la lista de prácticas</a>
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>



        {!! Form::close() !!}
    </div>
@endsection