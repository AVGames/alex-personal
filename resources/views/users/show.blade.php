@extends('juegoslayout')

@section('content')
	
	<div class="col-sm-6 col-sm-offset-3">

		<h2>
			{{ $user->name}}
			<a href=" {{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm pull-right glyphicon glyphicon-pencil">Edit</a>
			
		<hr>
		</h2>
		<p>
			{{ $user->email }}
		</p>
		<p>
		{{$user->admin}}
		</p>
		<a href="{{ action('UserController@index') }}" class="btn btn-primary btn-sm pull-left">List</a>
	</div>
	<div class="col-sm-6">
		

	</div>

@endsection