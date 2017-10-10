@extends('layouts.admin')

@section('title','<i class="fa fa-commenting" aria-hidden="true"></i>'.' '.'Enviar Mensaje')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('notificaciones') !!}</li>
    </ul>
@endsection

@section('content')

    @if(Session::has('message'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('message')}}
        </div>
    @endif

            <!--Aqui va el formulario de la practica agricola-->
        {!! Form::open(['url' => 'admin/notificaciones/enviar', 'method' => 'POST']) !!}

        <div class="form-group">
            {{ Form::label('semana','Semana') }}
            {{ Form::select('user_id',$users,null,['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{ Form::textarea('Mensaje','',['class' => 'ckeditor']) }}
        </div>


        <div class="form-group text-right">
            <a href="{{url('admin/practicas')}}">Regrese a la lista de prácticas</a>
            {{ Form::submit('Guardar', ['class' => 'btn btn-info']) }}

        </div>

        {!! Form::close() !!}





@endsection