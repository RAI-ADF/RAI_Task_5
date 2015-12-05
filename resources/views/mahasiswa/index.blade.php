@extends('layouts.master')

@section('content')

    <h1>Mahasiswas <a href="{{ url('/mahasiswa/create') }}" class="btn btn-primary pull-right btn-sm">Add New Mahasiswa</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Nama</th><th>Nim</th><th>Kelas</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($mahasiswas as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/mahasiswa', $item->id) }}">{{ $item->nama }}</a></td><td>{{ $item->nim }}</td><td>{{ $item->kelas }}</td>
                    <td><a href="{{ url('/mahasiswa/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['MahasiswaController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection