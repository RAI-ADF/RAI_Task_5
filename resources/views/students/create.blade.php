@extends('layout')
@section('content')
{!! Form::open(['url'=>'student', 'class'=>'pure-form']) !!}
<div class="pure-control-group">
	{!! Form::label('name','Name') !!}
	{!! Form::text('name',null,['placeholder'=>'student name']) !!}
</div>
<div class="pure-control-group">
	{!! Form::label('major','Major') !!}
	{!! Form::text('major') !!}
</div>
<div class="pure-control-group">
	{!! Form::label('description','Description') !!}
	{!! Form::textarea('description',null,['rows'=>'4', 'cols'=>'40']) !!}
</div>
<div class="pure-control-group">
	{!! Form::label('birthdate','birthdate') !!}
	{!! Form::input('date','birthdate',date('Y-m-d')) !!}
</div>
<div class="pure-control-group">
	{!! Form::submit('Submit',['class'=>'pure-button']) !!}
</div>
{!! Form::close() !!}
@stop