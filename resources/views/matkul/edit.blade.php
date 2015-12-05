@extends('layouts.master')

@section('content')

    <h1>Edit Matkul</h1>
    <hr/>

    {!! Form::model($matkul, ['method' => 'PATCH', 'action' => ['MatkulController@update', $matkul->id], 'class' => 'form-horizontal']) !!}

    <div class="form-group">
                        {!! Form::label('nama', 'Nama: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('jmlSKS', 'Jmlsks: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::number('jmlSKS', null, ['class' => 'form-control']) !!}
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