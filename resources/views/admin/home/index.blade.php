@extends('layouts.admin')

@section('title','<i class="fa fa-home" aria-hidden="true"></i>'.' '.'Bienvenido')

@section('breadcrumb')

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">{!! Breadcrumbs::render('home') !!}</li>
            </ol>
        </div>
    </section>

@endsection

@section('content')

    @if(Session::has('message-error'))
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('message-error')}}
        </div>
    @endif

    <section id="main">
        <div class="container">


                <div class="jumbotron col-md-3">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Listar opciones</h3>
                        </div>
                        <div class="panel-body">

                            <div class="col-md-15">

                                <div class="list-group">
                                    <div class="list-group-item">
                                        <a href="#" class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i> Tegnológias <span class="badge">{!! $totalusers->count() !!}</span></a>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <a href="#" class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i> Prácticas <span class="badge">{!! $totaltecnologias->count() !!}</span></a>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <a href="#" class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i> Cultivos <span class="badge">{!! $totalcultivos->count() !!}</span></a>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Etapas <span class="badge">12</span></a>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <a href="#" class="list-group-item"><i class="fa fa-tags" aria-hidden="true"></i> Tags <span class="badge">33</span></a>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <a href="#" class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i></span> Calendario <span class="badge">203</span></a>
                                    </div>
                                    <div class="list-group-separator"></div>

                                </div>



                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-md-9">
                    <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Reportes</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {!! $totalusers->count() !!}</h2>
                                    <h4>Usuarios</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {!! $totaltecnologias->count() !!}</h2>
                                    <h4>Tecnológias</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {!! $totalpracticas->count() !!}</h2>
                                    <h4>Prácticas</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h2>
                                    <h4>Visitantes</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Users -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ultimos usuarios</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined</th>
                                </tr>
                                <tr>
                                    <td>Jill Smith</td>
                                    <td>jillsmith@gmail.com</td>
                                    <td>Dec 12, 2016</td>
                                </tr>
                                <tr>
                                    <td>Eve Jackson</td>
                                    <td>ejackson@yahoo.com</td>
                                    <td>Dec 13, 2016</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>jdoe@gmail.com</td>
                                    <td>Dec 13, 2016</td>
                                </tr>
                                <tr>
                                    <td>Stephanie Landon</td>
                                    <td>landon@yahoo.com</td>
                                    <td>Dec 14, 2016</td>
                                </tr>
                                <tr>
                                    <td>Mike Johnson</td>
                                    <td>mjohnson@gmail.com</td>
                                    <td>Dec 15, 2016</td>
                                </tr>
                                <tr>
                                    <td>Stephanie Landon</td>
                                    <td>landon@yahoo.com</td>
                                    <td>Dec 14, 2016</td>
                                </tr>
                                <tr>
                                    <td>Mike Johnson</td>
                                    <td>mjohnson@gmail.com</td>
                                    <td>Dec 15, 2016</td>
                                </tr>
                                <tr>
                                    <td>Stephanie Landon</td>
                                    <td>landon@yahoo.com</td>
                                    <td>Dec 14, 2016</td>
                                </tr>
                                <tr>
                                    <td>Mike Johnson</td>
                                    <td>mjohnson@gmail.com</td>
                                    <td>Dec 15, 2016</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <footert>

        <div class="container">
            <p class="text-center"> Derechos Reservados INTA &copy; 2017
                Contiguo a la Policía Nacional del Distrito 5, Managua
                Telf.: 505-22780471 Email:<a href="#" class="alert-link">oaip@inta.gob.ni</a></p>
        </div>

    </footert>

@endsection