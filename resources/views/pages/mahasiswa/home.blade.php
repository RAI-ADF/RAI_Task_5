<html>
<head> 
	<title> This is Home </title>
</head>
<body>
	Welcome to home (RAI Task 5) <br>
	<table >
	<th>ID</th><th>Nama</th>
		@foreach ($mhs as $temp)
			<tr>
				<td>	{{$temp ->nim}}</td>
				<td>{{$temp->nama}}</td>
				<td>{{$temp->jurusan}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>


