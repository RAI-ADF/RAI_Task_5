@extends('movie.layout')

@section('content')
<div class="row">
  <div class="col-md-6" style="background-color:lavender;">
 <h1>cinema form</h1>
 {!! Form::open(['url' => 'cinema_input']) !!}
 
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
	<input type="name" class="form-control" id="name" placeholder="name" name="name">
  </div>
 
 <button type="submit" class="btn btn-default">Submit</button>

{!! Form::close() !!}

  </br>
 </div>
 
  <div class="col-md-6" style="background-color:lavenderblush;">
  <h1>cinema list</h1>
<table class="table table-hover">
	<th>ID</th>
	<th>Nama</th>
	@foreach ($cinemas as $cinema)
		<tr>
		<td><a href="{{ url('/cinema', $cinema ->id) }}">{{$cinema ->id}}</td>
		<td>{{$cinema->name}}</td>
		</tr>
	@endforeach
</table>
  </div>
</div>



@stop