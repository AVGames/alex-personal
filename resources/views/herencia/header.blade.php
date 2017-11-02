<header>
		<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
    <a class="navbar-brand" href="inicio.php"><span class="glyphicon glyphicon-home"></span> Home</a>
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
		<li><a href="Infamous.php">Infamous</a></li>
		<li><a href="hs.php">HearthStone</a></li>
		<li><a href="lol.php">League of legend</a></li>
    <li class="collapse navbar-collapse" id="app-navbar-collapse">
        @guest
            <li><a href="{{ route('login') }}" >Login</a></li>
            <li><a href="{{ route('register') }}" >Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="navbar-default dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <h5>Logout</h5>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @if (Auth::user()->admin == 1)
                    <li>
                        <a href="{{ action('UserController@index') }}">
                            <h5>admin panel</h5>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>
        @endguest
      </li >
	</ul>
  </div>
	</div>
</nav>
</header>
