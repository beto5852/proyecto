@extends('layouts.front')

@section('carrusel')

    <div class="jumbotron col-md-4">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Tecnologias</h3>
            </div>
            <div class="panel-body">

                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-picture">
                            <img class="circle" src="{{asset('img/cultivomaiz.jpg')}}" alt="icon">
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Tile with avatar</h4>

                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-picture">
                            <img class="circle" src="{{asset('img/cultivomaiz.jpg')}}" alt="icon">
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Tile with another avatar</h4>

                            <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                </div>

            </div>
        </div>
    </div>




    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{{asset('img/no-imagen.jpg')}}" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="{{{asset('img/no-imagen.jpg')}}" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection
