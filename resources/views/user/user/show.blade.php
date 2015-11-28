@extends('layouts.master')

@section('content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                </tr>
            </tbody>    
        </table>
        <?php
            try{
                $address =  $user->address()->get()->first();
            }catch(Exception $e){
                $address = NULL;
            }
        ?>
    </div>
    <h3>Alamat</h3>
        @if($address!=NULL)
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Province</th>
                    <th>City</th>
                    <th>Street</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $address->country }}</td>
                    <td>{{ $address->province }} </td>
                    <td>{{ $address->city }} </td>
                    <td>{{ $address->street }} </td>
                    <td>
                        <a href="{{ url('/address/'.$address->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> 
                        / 
                        {!! Form::open(['method'=>'delete','action'=>['AddressController@destroy',$address->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}
                    </td>
                </tr>
            </tbody>    
        </table>
        @else
                    {!! Form::open(['url' => 'address', 'class' => 'form-horizontal']) !!}
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
                            {!! Form::hidden('user_id', $user->id) !!}
                            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                        </div>    
                    </div>
                    {!! Form::close() !!}                   
        
        @endif

@endsection