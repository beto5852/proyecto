@extends('layouts.admin')

@section('title','<i class="fa fa-home" aria-hidden="true"></i>'.' '.'Bienvenido')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('home') !!}</li>
    </ul>
@endsection

@section('content')

    @if(Session::has('message-error'))
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('message-error')}}
        </div>
    @endif

    <h1>Aqui Va el contenido</h1>

@endsection