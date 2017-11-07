<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Panel de Control</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Menu CSS -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/css.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/css/default.css" id="theme" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
    <header class="navbar-fixed-top">
        <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
    <a class="navbar-brand" href="{{ action('HomeController@inicio') }}"><span class="glyphicon glyphicon-home"></span> Home</a>
 
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ action('HomeController@Infamous') }}">Infamous</a></li>
        <li><a href="{{ action('HomeController@hs') }}">HearthStone</a></li>
        <li><a href="{{ action('HomeController@lol') }}">League of legend</a></li>
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

	<div >
		@if (Auth::user()->admin == 1)
			<div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
     
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                    <h3 class="page-header" align="center"> 
                       <i class="fa fa-align-justify" aria-hidden="true"></i> Admin panel
                    </h3>
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{ route('games.index') }}"><i class="fa fa-star fa-fw" aria-hidden="true"></i>Games</a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}" ><i class="fa fa-user fa-fw" aria-hidden="true" ></i>Users</a>
                    </li>

                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h3 class="page-title">Dashboard</h3> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Usuarios</h3>
                            <ul class="list-inline">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li><span class=" text-success">5</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">reseñas de juegos</h3>
                            <ul class="list-inline">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li><span class=" text-purple">3</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">visitas</h3>
                            <ul class="list-inline">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li><span class=" text-info">911</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
              
    
                <div >
                    @yield('content')

                  
                </div>

          <footer class="footer text-center"> 2017 &copy; Gameblog.com </footer>
        </div>
        
    </div>
            <!-- /.container-fluid -->
</div>
					
		@else

		
			<div class="page-header text-center">
				<h2 class=" alert alert-danger col-sm-6 col-sm-offset-3">
					! lo sentimos no tiene acseso a esta pagina por favor inicie sesion como adminitrador o ponganse en contacto con uno
				</h2>
			</div>

		@endif
	</div>
</body>
</html>