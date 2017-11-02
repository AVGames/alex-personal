<header>

		<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
      	<a class="navbar-brand" href="inicio.php"><span class="glyphicon glyphicon-home"></span> Games</a>
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
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
		 <!-- Right Side Of Navbar -->
			
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

<div class="col-md-12">
			<img class="img" src="pick.jpeg">
  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

<!-- Wrapper for slides styles -->
		    <div class="carousel-inner" align="center" >
		     	<div class="item active">
	       	 		<img src="if.image/if.jpg" style="width:74%;">  
				</div>

		     	<div class="item">
		        	<img src="lol.image/lol2.jpg" style="width:82.5%;">
		        </div>

	      		<div class="item" >
		        	<img src="hs.image/hs.jpg" style="width:57%;">
	      		</div>
	     	 </div>
		</div> 
<!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel"  data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a> 
</div>

