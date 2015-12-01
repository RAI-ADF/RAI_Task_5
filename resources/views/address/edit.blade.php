@extends('layouts.master')

@section('content')

    <h1>Edit Address</h1>
    <hr/>

    {!! Form::model($address, ['method' => 'PATCH', 'action' => ['AddressController@update', $address->id], 'class' => 'form-horizontal']) !!}

    <div class="form-group">
                        {!! Form::label('country', 'Country: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('country', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('province', 'Province: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('province', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('city', 'City: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('city', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('street', 'Street: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('street', null, ['class' => 'form-control']) !!}
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