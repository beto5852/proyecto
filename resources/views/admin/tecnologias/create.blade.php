@extends('layouts.admin')

@section('title','<i class="fa fa-list" aria-hidden="true"></i>'.' '.'Crear tecnológia INTA')

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
            {!! Form::label('nombre_tecnologia','Nombre de la tecnológia') !!}
            {!! Form::text('nombre_tecnologia',null,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('descripcion_tecnologia','Descripción de la tecnológia') !!}
            {!! Form::textarea('descripcion_tecnologia',null,['class' =>'ckeditor'])!!}
        </div>

        <div class="form-group text-right">
            <a href="{{url('admin/tecnologias')}}" class="btn btn-info">ver lista de tecnologias</a>
            {{ Form::submit('Registrar', ['class' => 'btn btn-info']) }}

        </div>
        {!! Form::close() !!}


@endsection