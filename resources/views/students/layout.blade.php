<html>
	<head>	
		<title> document </title>
		
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">

	
	</head>
	<body>
	
		<p>this text from student </p>
		
			@section('sidebar')
				<p>master sidebar</p>
			@show
		
		<div class="container">
			@yield('content')
		</div>	
		
	</body>
</html>