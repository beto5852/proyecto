@include('layouts.admin')

@section('title','<i class="fa fa-home" aria-hidden="true"></i>'.' '.'Inicio')

@section('breadcrumb')
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li>{!! Breadcrumbs::render('home') !!}</li>
    </ul>
@endsection

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('message')}}
        </div>
    @endif






@endsection
