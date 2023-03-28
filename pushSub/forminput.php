<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
	<style>
		body{
			/*background-color: green;*/
		}
	</style>
</head>
<body>
	<h1>Pengelolaan Data Mahasiswa</h1>
	<form action="output1.php" method="post">
	Nama : <input type="text" name="nama" placeholder="Masukkan Nama"><br>
	Alamat : <input type="text" name="alamat" placeholder="Masukkan Alamat"><br>
	Jenis Kelamin : <input type="radio" name="jenis_kel" value="Laki-laki">Laki-laki <input type="radio" name="jenis_kel" value="Perempuan">Perempuan <br>
	Pekerjaan :
	<select name="job" >
		<option>Pelajar</option>
		<option>Mahasiswa</option>
		<option>Guru</option>
		<option>Dosen</option> <br>
	</select> <br>
	Hobi : <input type="checkbox" name="c1" value="Olahraga">Olahraga
	<input type="checkbox" name="c2" value="Musik">Musik
	<input type="checkbox" name="c3" value="Jalan-jalan">Jalan-jalan <br>
	<input type="submit" value="Kirim"><input type="reset" value="Batal">
</form>
</body>
</html>