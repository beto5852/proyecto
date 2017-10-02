@extends('layouts.admin')

@section('title','Crear Usuarios')

@section('content')

    <!--Aqui va el formulario de la practica agricola-->
    {!! Form::open(['url' => 'admin/users', 'method' => 'POST']) !!}
    <div class="form-group text-info">
        {{ Form::text('name','',['class' => 'form-control','placeholder' => 'Nombres de usuario','required']) }}
    </div>
    <div class="form-group">
        {{ Form::text('email','',['class' => 'form-control','placeholder' => 'ejemplo@gmail.com','required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('sexo','Sexo') }}
        {{ Form::select('sexo',['' => 'Seleccione una opción' , 'masculino' => 'mascúlino', 'femenino' => 'femenino'],null,['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('password','Contraseña') }}

        {{ Form::password('password',['class' => 'form-control','placeholder' => 'password','required']) }}
    </div>
    <div class="form-group">

        {{ Form::label('type','Tipo de usuario') }}
        {{ Form::select('type',['' => 'Seleccione tipo de usuario' , 'miembro' => 'miembro', 'admin' => 'admin'],null,['class' => 'form-control'])}}
    </div>

    <div class="form-group text-right">
        <a href="{{url('admin/users')}}" class="text-info">Lista de usuarios</a>
        {{ Form::submit('Registrar', ['class' => 'btn btn-info']) }}

    </div>
    {!! Form::close() !!}


@endsection