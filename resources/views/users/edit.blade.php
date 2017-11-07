@extends('juegoslayout')

@section('content')
<div id="wrapper">
        <!-- ============================================================== -->
        <!-- ============================================================== -->
      
           <div class="col-sm-6 col-sm-offset-3">
           		<h2>
					listado de juegos

				</h2>
				<a href="{{ action('UserController@index') }}" class="btn btn-primary btn-sm pull-right">List</a>
				<br>
					{!! Form::model($user->id,['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

				<div class="form-group">
					{!!Form::label('name', 'Name ') !!}
					{!!Form::text('name', $user->name, ['class'=> 'form-control', 'placeholder'=> 'Nombre'])!!}
				</div>
				
				<div class="form-group">
					{!!Form::label('email', 'Email') !!}
					{!!Form::text('email', $user->email, ['class'=> 'form-control', 'placeholder'=> 'email'])!!}
				</div>

				<div class="form-group">
					{!!Form::label('admin', 'Roll ') !!}
					{!!Form::text('admin', $user->admin, ['class'=> 'form-control', 'placeholder'=> 'roll'])!!}
				</div>

				<div class="form-group">
					{!!Form::submit('Save', ['class'=> 'btn btn-primary'])!!}
				</div>
			     {!! Form::close() !!}
	      </div>

        
    </div>
            <!-- /.container-fluid -->
</div>
	



@endsection