<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Prácticas Agricolas en Nicaragua</a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>


                <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Tecnologias
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tecnologias</a></li>
                        <li><a href="#">Practicas</a></li>
                        <li><a href="#">Etapas</a></li>
                        <li><a href="#">Videos</a></li>
                    </ul>
                </li>
            </ul>

            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control col-md-8" placeholder="Buscar">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="#">Calendario</a></li>
                <li class=""><a href="#">Videos</a></li>
                <li><a href="#">Contacto</a></li>
                <li class="dropdown">
                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Acceder
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/login')}}">Entrar</a></li>
                        <li><a href="#">Registrarse</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>