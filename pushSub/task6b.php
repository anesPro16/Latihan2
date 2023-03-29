<!DOCTYPE html>
<html>
<head>
	<title>Tugas 06</title>
</head>
<body>
<h1>Data Registrasi</h1>
<table border="1">
	<tr>
		<td width="250">Nama</td>
		<td> <?php echo $_POST["nama"]; ?> </td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo $_POST['alamat'] ?></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td><?php echo $_POST['bp'] ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><?php echo $_POST['bd'] ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><?php echo $_POST['je_kel']; ?></td>
	</tr>
	<tr>
		<td>Pendidikan </td>
		<td><?php echo $_POST['educ'] ?></td>
	</tr>
</table>
<a href="task6.php">Back To Home</a>
</body>
</html>