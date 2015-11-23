<html>
<head> 
	<title> This is View Page </title>
</head>
<body>
	<a href="/laravel/public/mahasiswa/form-create"> Tambah Data </a>
	<table>
		<thead>
			<tr>
				<!-- <th> # </th> -->
				<th> NIM </th>
				<th> Nama Lengkap </th>
				<th> Jurusan </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<!-- @$counter=1; -->
			@foreach ($data as $mhs)
			<tr>
				<!-- <td> @echo $counter; </td> -->
				<td> {{ $mhs->nim }}</td>
				<td> {{ $mhs->nama }}</td>
				<td> {{ $mhs->jurusan }}</td>
				<td> 
				<a href="/laravel/public/mahasiswa/form-edit/{{$mhs->nim}}"> [Edit] </a>
				||
				<a href="/laravel/public/mahasiswa/form-delete/{{$mhs->nim}}"> [Delete] </a>
				</td>
			</tr>
			<!-- @ $counter++; -->
			@endforeach
		</tbody>
	</table>
</body>
</html>
