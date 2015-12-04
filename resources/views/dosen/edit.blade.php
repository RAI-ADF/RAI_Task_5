@extends('layouts.master')

@section('content')

    <h1>Edit Dosen</h1>
    <hr/>

    {!! Form::model($dosen, ['method' => 'PATCH', 'action' => ['DosenController@update', $dosen->id], 'class' => 'form-horizontal']) !!}

    <div class="form-group">
                        {!! Form::label('nama', 'Nama: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('nip', 'Nip: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nip', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('kelompok_keahlain', 'Kelompok Keahlain: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('kelompok_keahlain', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection