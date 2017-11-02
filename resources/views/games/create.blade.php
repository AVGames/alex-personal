@extends('juegoslayout')

@section('content')
	
	<div class="col-sm-8 col-sm-offset-2">
		<h2>
			Add a Game
			<a href="{{ action('GameController@index') }}" class="btn btn-primary pull-right">List</a>

		</h2>

			@include('games.extra.error')
		{!! Form::open(['route' => 'games.store']) !!}

			<div class="form-group">
				{!!Form::label('name', 'Name ') !!}
				{!!Form::text('name', null, ['class'=> 'form-control', 'placeholder'=> 'Nombre del juego'])!!}
			</div>
			
			<div class="form-group">
				{!!Form::label('short', 'descripcion ') !!}
				{!!Form::text('short', null, ['class'=> 'form-control', 'placeholder'=> 'descripcion del juego'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('body', 'texto ') !!}
				{!!Form::textarea('body', null, ['class'=> 'form-control', 'placeholder'=> 'Informacion extra'])!!}
			</div>

			<div class="form-group">
				{!!Form::submit('Add', ['class'=> 'btn btn-primary'])!!}
			</div>
		{!! Form::close() !!}
	</div>


@endsection