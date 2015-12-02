@extends('layout')
@section('content')

{!! Form::open(['url'=>'/mahasiswa/login-check', 'class'=>'pure-form']) !!}
	
	<div class="pure-control-group">
		{!! Form::label('lusername','Username') !!}
		{!! Form::text('username',null,['placeholder'=>'Username']) !!}
	</div>
	<div class="pure-control-group">
		{!! Form::label('lpassword','Password') !!}
		{!! Form::password('password',array('placeholder'=>'Password')) !!}
	</div>
	<div class="pure-control-group">
		{!! Form::submit('Login',['class'=>'pure-button']) !!}
	</div>
 {!! Form::close() !!}
@stop