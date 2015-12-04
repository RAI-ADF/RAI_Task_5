@extends('layouts.master')

@section('content')

    <h1>Matkul</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nama</th><th>JmlSKS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $matkul->id }}</td> <td> {{ $matkul->nama }} </td><td> {{ $matkul->jmlSKS }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection