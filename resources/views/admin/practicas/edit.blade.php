@extends('layouts.admin')

@section('title','<i class="fa fa-list" aria-hidden="true"></i>'.' '.'Editar Practica')


@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('practicas.edit') !!}</li>
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
        {!! Form::open(['url' => ['admin/practicas',$practica], 'method' => 'PUT','enctype' => 'multipart/form-data','files'=> 'true']) !!}
        <div class="form-group">
            {{ Form::label('nombre_practica','Nombre de la labor agricola') }}
            {{ Form::text('nombre_practica',$practica->nombre_practica,['class' =>'form-control', 'placeholder' =>'Nombre practica','required'])}}
        </div>

        <div class="form-group">
            {{ Form::label('tecnologia','Tecnológia') }}
            {{ Form::select('practica_id_tecnologia',$tecnologias,$practica->tecnologia->id,['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{ Form::label('contenido','Descripción') }}
             {{  Form::textarea('contenido',$practica->contenido,['id' => 'article-ckeditor','class' => 'article-ckeditor']) }}
        </div>

        <div class="form-group">
            {{ Form::label('pt_id_tags','Tags') }}
            {{ Form::select('pt_id_tags[]',$tags,$my_tags,['class'=>'form-control select', 'multiple select']) }}
        </div>

        <div class="form-group">
            {{ Form::label('user','Cambiar editor') }}
           {{ Form::select('practica_id_usuario',$users,null,['class' => 'form-control'])}}

        </div>



             @if(empty($practica->path))
            <img src="{{asset('img/no-imagen.jpg')}}" alt="" style="width: 100px;" />
            @else
            <img src="{{asset('img/')}}/{{$practica->path}}" alt="" style="width: 100px;" />
            @endif
            <div class="form-group">
                {{ Form::label('imagen','Imagen de la práctica') }}
                {{ Form::file('path')}}
            </div>


        <div class="form-group text-right">

            <a href="{{url('admin/practicas')}}" class="btn btn-info" >volver a prácticas</a>
            {{ Form::submit('Actualizar', ['class' => 'btn btn-info']) }}

        </div>
        {!! Form::close() !!}




@endsection