@extends('layouts.admin')

@section('title','Crear práctica agricola')

@section('content')

        <!--Aqui va el formulario de la practica agricola-->
        {!! Form::open(['url' => '/practicas', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::text('nombre_practica','',['class' => 'form-control','placeholder' => 'Título...']) }}
        </div>
        <div class="form-group">
            {{ Form::textarea('tags','',['id' => 'body','class' => 'ckeditor']) }}
        </div>


        <div class="form-group text-right">
            <a href="{{url('/admin/practicas')}}">Regrese a la lista de prácticas</a>
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>

        {!! Form::close() !!}
@endsection