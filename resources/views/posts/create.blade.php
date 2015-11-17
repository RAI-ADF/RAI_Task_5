@extends('layouts.master')

@section('content')
  {!! Form::open(array('action' => 'PostController@store')) !!}
    {!! Form::token() !!}
    {!! Form::textarea('content') !!}
    {!! Form::submit('post') !!}
  {!! Form::close() !!}
@endsection
