@extends('juegoslayout')

@section('content')

<div class="wrapper">

	
				<div class="col-sm-6 col-sm-offset-3">

					<h2>
						{{ $game->name }}
						<a href=" {{ route('games.edit', $game->id) }}" class="btn btn-warning btn-sm pull-right glyphicon glyphicon-pencil">Edit</a>
						
					<hr>
					</h2>
					<p>
						{{ $game->short }}
					</p>
					<p>
					{{$game->body}}
					</p>
					<a href="{{ action('GameController@index') }}" class="btn btn-primary btn-sm pull-left">List</a>
				</div>
</div>
          

@endsection