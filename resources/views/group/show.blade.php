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
                    @if($group->isowned(Auth::user()) && Auth::user()->id!=$user->id)
                    <td>
                        <a href="#"><button type="submit" class="btn btn-primary btn-xs">Kick</button></a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>    
        </table>
    </div>
    <h2>Tasks</h2>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Task Name</th><th>Description</th><th>Finishing Time</th><th>User name</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($tasks as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/task', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->description }}</td><td>{{ $item->finising_time }}</td><td>{{ $item->user()->get()->first()->name }}</td>
                    @if(Auth::user()->id == $group->user_id)
                    <td><a href="{{ url('/task/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['TaskController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if(Auth::user()->id == $group->user_id)
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

    <h2>Create New Task</h2>
    <hr/>

    {!! Form::open(['url' => 'task', 'class' => 'form-horizontal']) !!}
    
                        <div class="form-group">
                        {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('starting_time', 'Starting Time: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::input('datetime-local', 'starting_time', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('finising_time', 'Finising Time: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::input('datetime-local', 'finising_time', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('user_id', 'User ID: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
                        </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::hidden('group_id', $group->id) !!}
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>    
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @endif

@endsection