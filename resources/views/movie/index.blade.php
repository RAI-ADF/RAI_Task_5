@extends('movie.layout')
@section('content')

<p>tes movie page</p>
<div class="row">
  <div class="col-md-6" style="background-color:lavender;">
 <h1>movie form</h1>
 {!! Form::open(['url' => 'movie_input']) !!}
 
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
	<input type="name" class="form-control" id="name" placeholder="name" name="name">
  </div>
  
  <label for="exampleInputEmail1">pilih cinema</label>
	<select class="form-control" id="exampleSelect1" name="cinema">
	<option value="--">--</option>
	@foreach ($cinemas as $cinema)
		 <option value="{{$cinema->id}}">{{$cinema->name}}</option>

	@endforeach
    </select>
	
	<label for="exampleInputEmail1">pilih director </label>
	<select class="form-control" id="exampleSelect1" name="director">
	<option value="--">--</option>
	@foreach ($directors as $director)
		 <option value="{{$director->id}}">{{$director->name}}</option>

	@endforeach
    </select>
 
 </br>
 <button type="submit" class="btn btn-default">Submit</button>

{!! Form::close() !!}

  </br>
 </div>
 
  <div class="col-md-6" style="background-color:lavenderblush;">
  <h1>movie list</h1>
<table class="table table-hover">
	@foreach ($movies as $movie)
		<tr>
		<td><a href="{{ url('/movie', $movie ->id) }}">{{$movie ->id}}</td>
		<td>{{$movie->title}}</td>
		<td>{{$movie->director->name}}</td>
		</tr>
	@endforeach
</table>
  </div>
</div>
@stop