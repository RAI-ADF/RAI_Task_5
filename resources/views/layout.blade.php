<html>
	<head>
		<title> document </title>
	</head>
	<body>
	

	
		<p>this text from master not student </p>
		
			@section('sidebar')
				<p>master sidebar</p>
			@show
		
		<div class="container">
			@yield('content')
		</div>	
		
	</body>
</html>