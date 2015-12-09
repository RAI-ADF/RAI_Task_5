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
				font-family: 'Open Sans',arial;
			}
			fieldset {
				max-width:300px;
				background-color: #D3D3D3;
			}
			.pure-form{	
				font-size: 24px;
				text-align: center;
			 	margin-bottom:0px;
			 	margin-left:500px;
			}
			li {
				font-size: 12px;
				margin-bottom:0px;
			 	margin-left:500px;
			 	color: red;
			}
		</style>
	<title>Legitz Account</title>
</head>
<body>
	<h1>Create your Legitz Account</h1>
	{!! Form::open(['url'=>'users', 'class'=>'pure-form']) !!}
	<form class="pure-form pure-form-aligned">	
		<fieldset>
			<div class="pure-control-group">
				{!! Form::text('name',null,['required'=>"required",'placeholder'=>'Name']) !!}
			</div>

			<div class="pure-control-group">
				{!! Form::text('email',null,['required'=>"required",'placeholder'=>'E-mail']) !!}
			</div>

			<div class="pure-control-group">
				{!! Form::password('password',array('required'=>"required",'placeholder'=>'Password')) !!}
			</div>
		
			<div class="pure-control-group">
				{!! Form::submit('Sign Up',['class'=>'pure-button']) !!}
			</div>
		</fieldset>
	</form>
 	{!! Form::close() !!}

 	@if ( $errors->any() )
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li><strong> {{ $error }} </strong></li>
		@endforeach
	</ul>
  @endif

</body>
</html>
