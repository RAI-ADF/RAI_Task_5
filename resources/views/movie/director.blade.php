@extends('movie.layout')

@section('content')
<div class="row">
  <div class="col-md-6" style="background-color:lavender;">
 <h1>director form</h1>
 {!! Form::open(['url' => 'director_input']) !!}
 
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
	<input type="name" class="form-control" id="name" placeholder="name" name="name">
  </div>
 
 <button type="submit" class="btn btn-default">Submit</button>

{!! Form::close() !!}

  </br>
 </div>
 
  <div class="col-md-6" style="background-color:lavenderblush;">
  <h1>director list</h1>
<table class="table table-hover">
	<th>ID</th>
	<th>Nama</th>
	@foreach ($directors as $director)
		<tr>
		<td><a href="{{ url('/director', $director ->id) }}">{{$director ->id}}</td>
		<td>{{$director->name}}</td>
		</tr>
	@endforeach
</table>
  </div>
</div>



@stop
