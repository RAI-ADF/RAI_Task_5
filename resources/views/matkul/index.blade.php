@extends('layouts.master')

@section('content')

    <h1>Matkuls <a href="{{ url('/matkul/create') }}" class="btn btn-primary pull-right btn-sm">Add New Matkul</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Nama</th><th>JmlSKS</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($matkuls as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/matkul', $item->id) }}">{{ $item->nama }}</a></td><td>{{ $item->jmlSKS }}</td>
                    <td><a href="{{ url('/matkul/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['MatkulController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection