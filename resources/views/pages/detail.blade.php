<html>
<head> 
	<title> This is Home </title>
</head>
<body>
	Welcome to home  <br>
	
	@if ($name=='joko')
		This is joko
	@else
		This is {!! $name !!}
	@endif
</body>
</html>


