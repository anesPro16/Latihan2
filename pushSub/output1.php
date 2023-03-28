<!DOCTYPE html>
<html>
<head>
	<title>Output Data Mahasiswa</title>
	<style>
		tr{
			background-color: aqua;
		}
	</style>
</head>
<body>
	<?php 
	$c1 = $_POST['c1'];
	$c2 = $_POST['c2'];
	$c3 = $_POST['c3'];
	 ?>
<table border="1">
	<th colspan="2"><b>Data Mahasiswa</b></th>
	<tr>
		<td>Nama</td>
		<td> <?php echo $_POST["nama"];  ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td> <?php echo $_POST["alamat"]; ?> </td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td> <?php echo $_POST["jenis_kel"]; ?> </td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td> <?php echo $_POST["job"]; ?> </td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td><?php echo $c1,",",$c2,",",$c3; ?> </td>
	</tr>
</table>
<a href="forminput.php">INPUT DATA LAGI</a>
</body>
</html>