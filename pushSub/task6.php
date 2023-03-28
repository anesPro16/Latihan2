<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<h1>Form Registrasi</h1>
<form action="task6b.php" method="post">
	<table>
	Isi Data Dibawah ini : <br>
	<tr>
	<td width="180">Nama</td>
	<td><input type="text" name="nama"></td>
	</tr>
	<tr>
	<td>Alamat</td> 
	<td><textarea name="alamat" rows="3" cols="35"></textarea></td></tr>
	<tr>
	<td>Tempat Lahir</td>
	<td><input type="text" name="bp"></td></tr>
	<tr>
	<td>Tanggal Lahir</td>
	<td><input type="text" name="bd"></td></tr>
	<tr>
	<td>Jenis Kelamin</td>
	<td><input type="radio" name="je_kel" value="laki-laki">laki-laki<input type="radio" name="je_kel" value="perempuan">Perempuan</td></tr>
	<tr>
	<td>Pendidikan</td>
	<td><select name="educ">
		<option>S1</option>
		<option>S2</option>
		<option>S3</option>
	</select></td>
	</tr>
</table>
	
	<input type="submit" name="Submit">
	<input type="reset" name="Cancel">
</form>

</body>
</html>