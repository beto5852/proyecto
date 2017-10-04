@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Acceso</div>
                    <div class="panel-body">

                        {!! Form::open(['url' => 'admin/login','method' => 'POST'], ['class' => 'form-horizontal', 'role' => 'form']) !!}


                        <div class="form-group">
                            {!! Form::label('email','Correo electrónico',['class' =>'col-md-4 control-label']) !!}
                            {!! Form::email('email',null,['class' =>'form-control', 'placeholder' =>'example@gmail.com','required'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password','Contraseña',['class' =>'col-md-4 control-label']) !!}
                            {!! Form::password('password',['class' =>'form-control', 'placeholder' =>'','required'])!!}
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <a href="{{url('admin/users')}}" class="text-info">recuperar passs</a>
                                    {{ Form::submit('Entrar', ['class' => 'btn btn-info']) }}

                                </div>
                            </div>
                        </div>


                        {!! Form::close() !!}





                </div>
            </div>
        </div>
    </div>
@endsection
