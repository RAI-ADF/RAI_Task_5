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
    <h1>Member</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th>
                    @if($group->isowned(Auth::user()))
                    <th>Option</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->name }} </td><td> {{ $user->email }} </td>
                    @if($group->isowned(Auth::user()))
                    <td>
                        <a href="#"><button type="submit" class="btn btn-primary btn-xs">Kick</button></a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>    
        </table>
    </div>
    <h1>Add Member</h1>
    {!! Form::open(['url' => '/group/addUser', 'class' => 'form-horizontal']) !!}
    
    <div class="form-group">
                        {!! Form::label('user_id', 'ID: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-2">
            {!! Form::hidden('group_id', $group->id) !!}
            {!! Form::submit('Add', ['class' => 'btn btn-primary btn-md form-control']) !!}
        </div>    
    </div>
    {!! Form::close() !!}

@endsection