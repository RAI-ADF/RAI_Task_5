@extends('layouts.master')

@section('content')

    <h1>Task</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Description</th><th>Starting Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $task->id }}</td> <td> {{ $task->name }} </td><td> {{ $task->description }} </td><td> {{ $task->starting_time }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection