@extends('layouts.master')

@section('content')

    <h1>Mahasiswa</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nama</th><th>Nim</th><th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $mahasiswa->id }}</td> <td> {{ $mahasiswa->nama }} </td><td> {{ $mahasiswa->nim }} </td><td> {{ $mahasiswa->kelas }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection