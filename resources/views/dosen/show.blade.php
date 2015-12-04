@extends('layouts.master')

@section('content')

    <h1>Dosen</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nama</th><th>Nip</th><th>Kelompok Keahlain</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $dosen->id }}</td> <td> {{ $dosen->nama }} </td><td> {{ $dosen->nip }} </td><td> {{ $dosen->kelompok_keahlain }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection