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


<script src="{{ asset('fullcalendar-3.5.1/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('fullcalendar-3.5.1//lib/moment.min.js') }}"></script>
<script src="{{ asset('fullcalendar-3.5.1//fullcalendar.min.js') }}"></script>

<script>
    $(document).ready(function () {
           $.material.init();
    })

</script>

<script>
    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '2017-09-12',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2017-09-01'
                },
                {
                    title: 'Long Event',
                    start: '2017-09-07',
                    end: '2017-09-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-09-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-09-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2017-09-11',
                    end: '2017-09-13'
                },
                {
                    title: 'Meeting',
                    start: '2017-09-12T10:30:00',
                    end: '2017-09-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2017-09-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2017-09-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2017-09-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2017-09-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2017-09-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2017-09-28'
                }
            ]
        });

    });




</script>


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
