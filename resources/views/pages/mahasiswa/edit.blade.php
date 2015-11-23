@extends('layout')
@section('content')

{!! Form::open(['url'=>'/mahasiswa/form-edit-update', 'class'=>'pure-form']) !!}
{!! Form::hidden('nim',$data->nim) !!}
{!! $data->nim !!}
	<div class="pure-control-group">
		{!! Form::label('nama','Nama Mahasiswa') !!}
		{!! Form::text('nama',$data->nama,['placeholder'=>'Nama Lengkap']) !!}
	</div>
	<div class="pure-control-group">
		{!! Form::label('jurusan','Jurusan') !!}
		{!! Form::select('jurusan',array('IF' => 'Informatic Science', 'CS' => 'Computer Science', 'IS' => 'Information System')) !!}
	</div>
	<div class="pure-control-group">
		{!! Form::submit('Simpan',['class'=>'pure-button']) !!}
	</div>
 {!! Form::close() !!}
@stop

 {{$data->nama}}
