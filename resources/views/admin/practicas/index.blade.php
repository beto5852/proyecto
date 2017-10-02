@extends('layouts.admin')


@section('title','Lista de Practicas')


@section('content')


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
                        <a href="#" class="btn btn-raised btn-primary" role="button">Editar</a>
                        <a href="#" class="btn btn-raised btn-danger" role="button">Eliminar</a>

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