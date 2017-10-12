@extends('layouts.admin')


@section('title','<i class="fa fa-list" aria-hidden="true"></i>'.' '.'Lista de Tecnologias generadas por el INTA')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('tecnologias') !!}</li>
    </ul>
@endsection

@section('content')

    @if(Session::has('message'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('message')}}
        </div>
    @endif

    <table class="table table-striped table-hover" >
        <thead>
        <tr >
            <th>Labor agricola</th>
            <th>Descripción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tecnologias as $tecnologia)
            <tr class="info">
                <td>{{  $tecnologia->nombre_tecnologia }}</td>
                <td >{!! $tecnologia->descripcion_tecnologia !!}</td>
                <td>
                    <a href="{{url('admin/tecnologias/'.$tecnologia->id.'/edit')}}" class="btn btn-raised btn-success" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{url('tecnologias/'.$tecnologia->id)}}" class="btn btn-raised btn-warning" role="button"
                       onclick="return confirm('Esta seguro de eliminar al usuario')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <center>{{ $tecnologias->links() }}</center>

    <div class="floating">
        <a href="{{url('admin/tecnologias/create')}}" class="btn btn-primary btn-fab">
            <i class="material-icons">add</i>
        </a>
    </div>
@endsection