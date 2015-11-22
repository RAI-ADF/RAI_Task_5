<!DOCTYPE html>
<html lang="en">
	<head>	
		<title> director </title>
		
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet" type="text/css">
		<script src="{{asset('js/jquery-1.10.2.js')}}"></script>
		<script src="{{asset('js/bootstrap.js')}}"></script>


	</head>
	<style>

	</style>
	
<body>
	
	
<p>layout page </p>
	
	@section('sidebar')
	<ul class="nav nav-tabs">
	  <li role="presentation"><a href="director">director</a></li>
	  <li role="presentation"><a href="cinema">cinema</a></li>
	  <li role="presentation"><a href="genre">genre</a></li>
	  <li role="presentation"><a href="movie">movie</a></li>
	</ul>
	@show
	
	<div class="container">
		@yield('content')
	</div>	
		
	<div>
		@yield('content1')
	</div>
		
</body>

</html>