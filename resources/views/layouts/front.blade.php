<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>APP INTA</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/bootstrap-material-design.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" >

    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">

    @include('partials.navfront')

    <div class="container">

        @yield('breadcrumb')

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> @yield('title')</h3>
            </div>

            <div class="panel-body">

                @yield('content')
            </div>
        </div>
    </div>


</div>

<!-- Scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



</body>
</html>
