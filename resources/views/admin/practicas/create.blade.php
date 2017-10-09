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

        <div class="form-group">
            {{ Form::label('tecnologia','Tecnológia') }}
            {{ Form::select('practica_id_tecnologia',$tecnologias,null,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('semana','Semana') }}
            {{ Form::select('ps_id_semana',$semanas,null,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('mes','Mes') }}
            {{ Form::select('ms_id_semana',$meses,null,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('etapas','Etapas') }}
            {{ Form::select('ce_id_etapa',$etapas,null,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::hidden('user_id',Auth::user()->id,null,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('imagen','Imagen de la práctica') }}
            {{ Form::file('path')}}
        </div>


        <div class="form-group text-right">
            <a href="{{url('admin/practicas')}}">Regrese a la lista de prácticas</a>
            {{ Form::submit('Guardar', ['class' => 'btn btn-info']) }}

        </div>

        {!! Form::close() !!}
@endsection