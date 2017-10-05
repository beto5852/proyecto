@extends('layouts.admin')


@section('title','<i class="fa fa-list" aria-hidden="true"></i>'.' '.'Lista de Practicas')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('practicas') !!}</li>
    </ul>
@endsection

@section('content')

    @if(Session::has('message'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('message')}}
        </div>
    @endif

        <table class="table table-striped table-hover">
            <thead>
                <tr >
                    <td>ID</td>
                    <td>Práctica</td>
                    <td>Contenido</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
              @foreach($practicas as $practica)
                <tr class="info">
                    <td>{{  $practica->id }}</td>
                    <td>{{  $practica->nombre_practica}}</td>
                    <td>{{  $practica->contenido}}</td>
                    <td>
                        <a href="{{url('admin/practicas/'.$practica->id.'/edit')}}" class="btn btn-raised btn-success" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-raised btn-danger" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       <center>{{ $practicas->links() }}</center>

        <div class="floating">
            <a href="{{url('admin/practicas/create')}}" class="btn btn-primary btn-fab">
                <i class="material-icons">add</i>
            </a>
        </div>
@endsection