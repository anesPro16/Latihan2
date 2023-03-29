<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Data</title>
</head>
<body>
<h1>Masukkan Identitas Anda</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
<pre>
	Isikan Nama    :<input type="text" name="nama">
	Isikan No Telp :<input type="text" name="notelp">
	Isikan Alamat  :<textarea name="alamat" rows="5" cols="40"></textarea>
	<input type="submit" value="TAMPIL"><input type="reset" value="BATAL">
</pre>
</form>
<?php
error_reporting(0);
$nama = $_POST['nama'];
$telp = $_POST['notelp'];
$alamat = $_POST['alamat'];
if (!empty($nama)) {
	echo "Nama 		: $nama <br>";
	# code...
}
if (!empty($telp)) {
	echo "No. Telp 	: $telp <br>";
	# code...
}
if (!empty($alamat)) {
	echo "Alamat 	: $alamat <br>";
	# code...
}
 ?>
</body>
</html>