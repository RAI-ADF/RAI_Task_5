@extends('layouts.master')

@section('content')

    <h1>Group</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $group->id }}</td> <td> {{ $group->name }} </td><td> {{ $group->description }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection