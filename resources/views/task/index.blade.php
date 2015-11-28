@extends('layouts.master')

@section('content')

    <h1>Tasks <a href="{{ url('/task/create') }}" class="btn btn-primary pull-right btn-sm">Add New Task</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Name</th><th>Description</th><th>Starting Time</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($tasks as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/task', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->description }}</td><td>{{ $item->starting_time }}</td>
                    <td><a href="{{ url('/task/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['TaskController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection