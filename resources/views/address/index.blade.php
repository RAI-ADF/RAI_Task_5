@extends('layouts.master')

@section('content')

    <h1>Addresses <a href="{{ url('/address/create') }}" class="btn btn-primary pull-right btn-sm">Add New Address</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Country</th><th>Province</th><th>City</th><th>Street</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($addresses as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/address', $item->id) }}">{{ $item->country }}</a></td>
                    <td>{{ $item->province }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->street }}</td>
                    <td>
                        <a href="{{ url('/address/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> 
                        / 
                        {!! Form::open(['method'=>'delete','action'=>['AddressController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection