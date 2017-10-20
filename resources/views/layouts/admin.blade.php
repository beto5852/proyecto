<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Administración') }}</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/bootstrap-material-design.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" >

    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('chosen/chosen.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('chosen/chosen.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fullcalendar-3.5.1/fullcalendar.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fullcalendar-3.5.1/fullcalendar.print.min.css')}}" rel="stylesheet" type="text/css" media='print'>

</head>
<div id="app">

    @include('partials.navadmin')

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

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>


<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


<script src="{{ asset('js/material.min.js') }}"></script>
<script src="{{ asset('js/ripples.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('chosen/chosen.jquery.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>



<script src="{{ asset('fullcalendar-3.5.1/lib/moment.min.js') }}"></script>
<script src="{{ asset('fullcalendar-3.5.1/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('fullcalendar-3.5.1/fullcalendar.min.js') }}"></script>
<script src='{{ asset('fullcalendar-3.5.1/locale-all.js') }}'></script>
<script>
    $(document).ready(function () {
           $.material.init();
    })

</script>

@yield('script')

<script>
      $('.chosen-select').chosen({width: "100%"});
</script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
</script>

<script>
    CKEDITOR.replace('my-editor', options);
</script>




</body>
</html>
