<!DOCTYPE html>
<html>
<head>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400&lang=en" rel="stylesheet" type="text/css">
		<style>
			h1 {
				font-family: 'Open Sans',arial;
				font-size: 32px;
				text-align: center;
			}
			body {
				background-color: #ffffff;
				font-family: 'Open Sans',arial;
				font-size: 16px;
			}
			div.pure-control-group {
    			font-size: 16px;
    			text-align: center;
			}
			p {
				font-size: 12px;
				color: green;
				text-align: center;
			}
			li {
				font-size: 12px;
				margin-bottom:0px;
			 	margin-left:525px;
			 	color: red;
			}

		</style>
	<title>Legitz</title>
</head>
<body>
	<h1>Legitz Administration Control</h1>
		@if(Session::has('message'))
			<p><strong> {{ Session::get('message') }} </strong></p>
		@endif

	{!! Form::open(['url'=>'login']) !!}
		<div class="pure-control-group">
			{!! Form::text('email',null,['required'=>"required",'placeholder'=>'E-mail']) !!}
		</div>
		<div class="pure-control-group">	
			{!! Form::password('password',array('required'=>"required",'placeholder'=>'Password')) !!}
		</div>
		<div class="pure-control-group">
			{!! Form::submit('Sign In',['class'=>'pure-button']) !!}</p>
		</div>
	{!! Form::close() !!}
		<div class="pure-control-group">
			<a href="users/create">Create Account</a>
		</div>

		@if(Session::has('invalid'))
		<ul class="alert alert-danger">
			<li><strong> {{ Session::get('invalid') }} </strong></li>
		@endif
		</ul>

		@if ( $errors->any() )
		<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li><strong> {{ $error }} </strong></li>
		@endforeach
	</ul>




  @endif
</body>
</html>
