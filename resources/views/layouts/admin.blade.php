<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'Administración') }}</title>

    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('/css/bootstrap-material-desing.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('/css/ripples.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('/chosen/chosen.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet" type="text/css">



    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">



</head>
<body>
<div id="app">

    @include('partials.navadmin')

    <div class="container">

        @yield('breadcrumb')

        <div class="panel panel-info">
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



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/material.min.js') }}"></script>
<script src="{{ asset('js/ripples.min.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>

<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('chosen/chosen.jquery.js') }}"></script>


<script>
        $.material.init();
</script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',

   };
</script>
<script>
    $('.select').chosen({width: "100%"});
</script>


<script>
    CKEDITOR.replace('article-ckeditor',options);
</script>

</body>
</html>
