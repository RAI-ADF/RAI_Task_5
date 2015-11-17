@extends('layouts.master')

@section('content')
  @foreach ($posts as $post)
    <div class="title">“{{$post->content}}” - {{$post->user->name}}</div>
  @endforeach
@endsection
