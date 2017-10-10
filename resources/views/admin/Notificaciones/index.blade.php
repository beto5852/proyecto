@extends('layouts.admin')

@section('title','<i class="fa fa-commenting" aria-hidden="true"></i>'.' '.'Enviar Mensaje')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('notificaciones') !!}</li>
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
        {!! Form::open(['route' => 'enviar.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {{ Form::label('user_id','Enviar a:') }}
            {{ Form::select('user_id',$names,null,['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{ Form::textarea('Mensaje','',['class' => 'ckeditor']) }}
        </div>


        <div class="form-group text-right"><i class="fa fa-paper-plane" aria-hidden="true"></i>
            {{ Form::submit('Enviar mensaje',['class' => 'btn btn-info']) }}

        </div>

        {!! Form::close() !!}





@endsection