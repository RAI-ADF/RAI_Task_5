@extends('layouts.master')

@section('content')

    <h1>Wali</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nama</th><th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $wali->id }}</td> <td> {{ $wali->nama }} </td><td> {{ $wali->alamat }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection