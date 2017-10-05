@extends('layouts.admin')

@section('title','<i class="fa fa-list" aria-hidden="true"></i>'.' '.'Crear Usuarios')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('users.create') !!}</li>
    </ul>
@endsection

@section('content')
    @if(count($errors) > 0)

        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach($errors->all() as $mensaje)
                    <li>{{$mensaje}}</li>
                @endforeach
            </ul>
        </div>
        @endif





    <!--Aqui va el formulario de la practica agricola-->
    {!! Form::open(['url' => 'admin/users', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Correo electrónico') !!}
            {!! Form::email('email',null,['class' =>'form-control', 'placeholder' =>'example@gmail.com','required'])!!}
        </div>


        <div class="form-group">
            {{ Form::label('sexo','Sexo') }}
            {{ Form::select('sexo',['' => 'Seleccione una opción' , 'masculino' => 'mascúlino', 'femenino' => 'femenino'],null,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {!! Form::label('password','Contraseña') !!}
            {!! Form::password('password',['class' =>'form-control', 'placeholder' =>'','required'])!!}
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