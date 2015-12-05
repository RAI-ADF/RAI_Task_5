@extends('layouts.master')

@section('content')

    <h1>Dosens <a href="{{ url('/dosen/create') }}" class="btn btn-primary pull-right btn-sm">Add New Dosen</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Nama</th><th>Nip</th><th>Kelompok Keahlain</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($dosens as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/dosen', $item->id) }}">{{ $item->nama }}</a></td><td>{{ $item->nip }}</td><td>{{ $item->kelompok_keahlain }}</td>
                    <td><a href="{{ url('/dosen/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['DosenController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection