@extends('layout')

@section('content')
<h2>Detail Result</h2>
<p>
	Nama : {{ $student->name }} <br>
	Major : {{ $student->major }} <br>

</p>
@stop
