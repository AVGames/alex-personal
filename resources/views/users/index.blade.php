@extends('juegoslayout')

@section('content')

<div id="wrapper">
  

           	<table class="table table-condensed table-hover">
			<thead>
				<th width="20px"><strong>ID</strong></th>
				<th > User</th>
				<th> Correo</th>
				<th width="30px"> Admin</th>
				<th colspan="3">&nbsp;</th>
			</thead>
			<tbody>
				
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td> 
							<strong>{{ $user->name }}</strong><br>
							{{ $user->short }}
						</td>

						<td>{{$user->email}}</td>
						<td>
							@if ($user->admin == 1)
								admin
							@else 
								user
							@endif

						</td>
						<td>&nbsp;</td>
						<td>
							<a href=" {{ route('users.show', $user->id) }}" class='btn btn-info btn-sm glyphicon glyphicon-eye-open'>Show</a>
						</td>
						<td>
							<a href=" {{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
						</td>

												<td>
							<form action="{{action('UserController@destroy', $user->id) }}" method="POST" >
								{{csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</button>
							</form>
						</td>
					</tr>

				@endforeach
			</tbody>
		</table>
		{!! $users->render()!!}

</div>

               

       
	
@endsection