@extends('layouts.admin')

@section('title','<i class="fa fa-list" aria-hidden="true"></i>'.' '.'Crear tecnológia INTA')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('tecnologias.create') !!}</li>
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
        {!! Form::open(['url' => 'admin/tecnologias', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('nombre_tecnologia','Nombre de la tecnológia') }}
            {{ Form::text('nombre_tecnologia',null,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])}}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_tecnologia','Descripción de la tecnológia') }}
            {{ Form::textarea('descripcion_tecnologia','',['id'=>'my-editor','class' => 'my-editor'])}}
        </div>

        <div class="form-group text-right">
            <a href="{{url('admin/tecnologias')}}" class="btn btn-info">ver lista de tecnologias</a>
            {{ Form::submit('Guardar', ['class' => 'btn btn-info']) }}

        </div>
        {!! Form::close() !!}


@endsection