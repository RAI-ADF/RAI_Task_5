@extends('master')
@section('konten')

ini materi
@if(count($datas))
<ul>
	@foreach($datas as $materi)
	<li>{{$materi}}</li>
	@endforeach
</ul>
@endif

@stop