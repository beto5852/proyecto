<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">

                      <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                APP INTA
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">


                <!-- Authentication Links -->
                @if (Auth::guest())
                     <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrarse</a></li>
                @else

                    <li>

                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>