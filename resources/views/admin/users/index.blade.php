@extends('layouts.admin')

@section('title','<i class="fa fa-list" aria-hidden="true"></i>'.' '.'Lista de usuarios ')

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
                <td><strong>Nombre y Apellidos</strong></td>
                <td><strong>Correo</strong></td>
                <td><strong>Tipo usuario</strong></td>
                <td><strong>Acciones</strong></td>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="info">
                    <td>{{  $user->name}}</td>
                    <td>{{  $user->email}}</td>
                    <td>{{  $user->type}}</td>
                    <td>
                        <a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-raised btn-success" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-raised btn-warning" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <center>{{ $users->links() }}</center>
        <div class="floating">
            <a href="{{url('admin/users/create')}}" class="btn btn-primary btn-fab">
                <i class="material-icons">add</i>
            </a>
        </div>

@endsection