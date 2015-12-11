@extends('layout.auth')

@section('title')
    Form Masuk
@stop

@section('form')
    @include('additional.errors')
    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('email','Email',['class'=>'control-label']) !!}
        {!! Form::email('email',null,['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password',['class'=>'control-label']) !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    Belum punya akun? <a href="{{ url('/auth/register') }}">Daftar disini</a>
    <hr/>
    {!! Form::submit('Kirim',['class'=>'form-control btn btn-success']) !!}
    {!! Form::close() !!}
@stop