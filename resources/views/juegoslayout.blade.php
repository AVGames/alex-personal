<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Panel de Control</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
	@include('herencia.header')
	<div class="container-fluid">
		@if (Auth::user()->admin == 1)
			<div>
				@yield('content')
								
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