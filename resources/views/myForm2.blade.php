<html>
<head>
	<title>Form Method POST</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1> Kuisioner Penggunaan Browser</h1>
	<div>
		<form action="myResult.php" method="post">
			<p>Nama :
				<br><input type="text" name="nama">
			</p>
	  		<p>
	  			NIM :
	  			<br><input type="password" name="nim">
	  		</p>
	  		<p>
	  			Jenis Kelamin :
	  			<br><input type="radio" name="kelamin" value="Pria"> Pria
		  		<br><input type="radio" name="kelamin" value="Wanita"> Wanita
	  		</p>
	  		<p>
	  			Device yang dimiliki untuk browsing :
	  			<br><input type="checkbox" name="device[]" value="Laptop">Laptop
				<br><input type="checkbox" name="device[]" value="Tablet">Tablet
				<br><input type="checkbox" name="device[]" value="Smartphone">Smartphone
	  		</p>
	  		
			<p>
				Browser yang paling sering dipakai :
				<br><select name="browser">
					<option selected value="Chrome">Chrome
					<option value="Firefox">Firefox
					<option value="Opera">Opera
					<option value="Safari">Safari
				</select>
			</p>
			<p>
				Komentar :
	  			<br><textarea name="komentar"></textarea>
	  		</p>
	  		<br><input type="submit" value="Submit">
	  		<input type="reset" value="Reset">
	  		<input type="hidden" name="myNIM" value="1103120206">
		</form>
		<a href="index.html">Back to Home</a>
	</div>
</body>
</html>