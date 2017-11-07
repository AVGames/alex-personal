@extends('juegoslayout')

@section('content')
	<div id="wrapper">
        <!-- ============================================================== -->
    
                <div class="col-sm-6 col-sm-offset-3">
				<h2>
					listado de juegos

				</h2>
				<a href="{{ action('GameController@index') }}" class="btn btn-primary btn-sm pull-right">List</a>
				<br>
						{!! Form::model($game->id,['route' => ['games.update', $game->id], 'method' => 'PUT']) !!}

					<div class="form-group">
						{!!Form::label('name', 'Name ') !!}
						{!!Form::text('name', $game->name, ['class'=> 'form-control', 'placeholder'=> 'Nombre del juego'])!!}
					</div>
					
					<div class="form-group">
						{!!Form::label('short', 'descripcion ') !!}
						{!!Form::text('short', $game->short, ['class'=> 'form-control', 'placeholder'=> 'descripcion del juego'])!!}
					</div>

					<div class="form-group">
						{!!Form::label('body', 'texto ') !!}
						{!!Form::textarea('body', $game->body, ['class'=> 'form-control', 'placeholder'=> 'Informacion extra'])!!}
					</div>

					<div class="form-group">
						{!!Form::submit('Save', ['class'=> 'btn btn-primary'])!!}
					</div>
					{!! Form::close() !!}
				</div>
				<div class="col-sm-6">
				
					@include('games.extra.error')

				</div>
	</div>
               


@endsection