@extends('layouts.admin')

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

                {!! Form::open(['url' => 'youtube.search', 'method' => 'POST', 'class' => 'form-inline']) !!}
                <div class="form-group">
                    {!! form::label('search','Buscar')!!}
                    {!! form::text('search',null,['class' => 'form-control']) !!}
                    {{ Form::submit('Buscar', ['class' => 'btn btn-info']) }}
                </div>
                {!! Form::close() !!}


    <div class="panel-body">
        <div class="row">
            @if(isset($videos))
                @foreach($videos as $video)
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail">
                            <!-- Mostrmamos la fotos mediana del video -->
                            <img src="{{$video->snippet->thumbnails->medium->url}}">
                            <div class="caption">
                                <!-- Mostrmamos el titulo del video -->
                                <h3><a href="https://www.youtube.com/watch?v={{$video->id->videoId}}">
                                        {{$video->snippet->title}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection