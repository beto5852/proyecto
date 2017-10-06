
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/admin/home')}}">ADMIN INTA</a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Usuarios
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('admin/users/create')}}">Crear usuarios</a></li>
                        <li><a href="{{url('admin/users/')}}">Listar Usuarios</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Prácticas Agricola
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('admin/practicas/create')}}">Crear práctica</a></li>
                        <li><a href="{{url('admin/practicas/')}}">Listar prácticas</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Tecnologias
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('admin/tecnologias/create')}}">Crear tecnologia</a></li>
                        <li><a href="{{url('admin/tecnologias/')}}">Listar tecnologia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Cultivos
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Agregar Cultivo</a></li>
                        <li><a href="#">Listar cultivos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Agregar etapa de siembra</a></li>
                        <li><a href="#">Listar etapas de siembra</a></li>

                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control col-sm-8" placeholder="Buscar Práctica ">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        {!! Auth::user()->name !!}
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Editar Perfil</a></li>
                        <li><a href="{{url('logout')}}">Salir</a></li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
</div>


