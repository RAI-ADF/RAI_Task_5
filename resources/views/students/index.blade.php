@extends('students.layout')
@section('content')
<h1>This is Result</h1>
<p>	Student Data</p>
	
  
	
<form action="input" class="form-horizontal">

  <div class="form-group">
	<label for="name">name</label>
		<input type="text" class="form-control" placeholder="name" name="name">
  </div>
  <div class="form-group">
	<label for="major">major</label>
		<input type="text" class="form-control" placeholder="major" name="major">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
  
</form> 

<table class="table table-hover">
	<th>ID</th>
	<th>Nama</th>
	@foreach ($students as $student)
		<tr>
		<td><a href="{{ url('/students', $student ->id) }}">{{$student ->id}}</td>
		<td>{{$student->name}}</td>
		</tr>
	@endforeach
</table>

@if($errors -> any())
		<ul class="alert alert-danger">
			@foreach($errors ->all()as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
@endif
	
@stop
