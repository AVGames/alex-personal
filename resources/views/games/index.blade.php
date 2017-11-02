@extends('juegoslayout')

@section('content')
	
	
	<div class="col-sm-8 col-sm-offset-2">
		<h1 class="page-header text-center">Games</h1>
		<a class="btn btn-default" href="{{ route('users.index') }}">Users</a>
		<a class="btn btn-default" href="{{ route('games.index') }}">Games</a>
		<h2>
			lista de juegos
			
		</h2>
		<br>
		<table class="table table-condensed  table-hover">
			<thead>
				<th width="20px"><strong>ID</strong></th>
				<th> Juego</th>
				<th>Descripcion</th>
				<th colspan="2">&nbsp;</th>
				<th><a  class="btn btn-primary btn-sm pull-right" href="{{ route('games.create') }}">Add</a></th>
			</thead>
			<tbody>
				
				@foreach($games as $game)
					<tr>
						<td>{{ $game->id }}</td>
						<td width="100px"> 
							<strong>{{ $game->name }}</strong><br>
						</td>
						<td>{{ $game->short }}</td>
						<td>
							<a href=" {{ route('games.show', $game->id) }}" class='btn btn-info btn-sm glyphicon glyphicon-eye-open'>Show</a>
						</td>
						<td>
							<a href=" {{ route('games.edit', $game->id) }}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
						</td>

												<td>
							<form action="{{action('GameController@destroy', $game->id) }}" method="POST" >
								{{csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</button>
							</form>
						</td>
					</tr>

				@endforeach
			</tbody>
		</table>
		{!! $games->render()!!}

	</div>

@endsection