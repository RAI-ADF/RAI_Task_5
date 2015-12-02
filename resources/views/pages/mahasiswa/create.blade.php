@extends('layout')
@section('content')
@if (Session::has('message'))
		<span class='label success'>
			{{ Session::get('message')}}
		</span>
	@endif
{!! Form::open(['url'=>'/mahasiswa/form-create-save', 'class'=>'pure-form']) !!}
	<div class="pure-control-group">
		{!! Form::label('nim','NIM') !!}
		{!! Form::text('nim', null,['placeholder'=>'Nomor Induk Mahasiswa']) !!}
	</div>
	<div class="pure-control-group">
		{!! Form::label('nama','Nama Mahasiswa') !!}
		{!! Form::text('nama',null,['placeholder'=>'Nama Lengkap']) !!}
	</div>
	<div class="pure-control-group">
		{!! Form::label('jurusan','Jurusan') !!}
		{!! Form::select('jurusan',array('IF' => 'Informatic Science', 'CS' => 'Computer Science', 'IS' => 'Information System')) !!}
	</div>
	<div class="pure-control-group">
		{!! Form::submit('Simpan',['class'=>'pure-button']) !!}
	</div>

{!! Form::close() !!}
@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif
@stop
