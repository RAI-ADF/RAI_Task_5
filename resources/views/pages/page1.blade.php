@extends('layout')

@section('sidebar')
	<p>Page 1 Sidebar</p>
@stop

@section('content')
<h1>
	This is About {{ $name1 }}
</h1>
<p> this is from page 1 </p>
@stop
