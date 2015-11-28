@extends('layouts.master')

@section('content')

    <h1>Address</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Country</th><th>Province</th><th>City</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $address->id }}</td> <td> {{ $address->country }} </td><td> {{ $address->province }} </td><td> {{ $address->city }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection