@extends('layouts.admin')

@section('title','<i class="fa fa-list" aria-hidden="true"></i>'.' '.'Crear práctica agricola')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('practicas.create') !!}</li>
    </ul>
    @endsection


@section('content')

        <!--Aqui va el formulario de la practica agricola-->
        {!! Form::open(['url' => 'admin/practicas', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::text('nombre_practica','',['class' => 'form-control','placeholder' => 'Título...']) }}
        </div>
        <div class="form-group">
            {{ Form::textarea('contenido','',['class' => 'ckeditor']) }}
        </div>

        <div class="form-group text-right">
            <a href="{{url('admin/practicas')}}">Regrese a la lista de prácticas</a>
            {{ Form::submit('Registrar', ['class' => 'btn btn-info']) }}

        </div>

        {!! Form::close() !!}
@endsection