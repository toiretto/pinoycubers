@extends('layouts.master')

@section('title')
@parent
	::Login
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3" style="background:#EE3D39; color: #e5e5e5;">
			{{ Form::open(array('url' => 'login')) }}
				<h1>Login</h1>

				<!-- if there are login errors, show them here -->
				<p>
					{{ $errors->first('email') }}
					{{ $errors->first('password') }}
				</p>

				<p>
					{{ Form::label('email', 'Email Address') }}
					{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
				</p>

				<p>
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password') }}
				</p>


			{{ Form::close() }}				
		</div>
	</div>

</div>


@stop