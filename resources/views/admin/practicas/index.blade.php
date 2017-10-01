@extends('layouts.admin')


@section('content')

    <div class="big-padding text-center blue-grey white-text">
        <h1>Labores y prácticas Agricolas</h1>
    </div>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr >
                    <td>ID</td>
                    <td>Práctica</td>
                    <td>Tags</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
              @foreach($practicas as $practica)
                <tr class="info">
                    <td>{{  $practica->id }}</td>
                    <td>{{  $practica->nombre_practica}}</td>
                    <td>{{  $practica->tags}}</td>
                    <td>Acciones</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="floating">
            <a href="{{url('admin/practicas/create')}}" class="btn btn-primary btn-fab">
                <i class="material-icons">add</i>
            </a>
        </div>
    </div>
@endsection