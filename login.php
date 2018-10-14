<!DOCTYPE html>
<html>
<head>
	<title> TA 6 </title>
</head>
<body>
	<form method="POST">
		<h1 align="center"> LOGIN </h1>
		<table align="center">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>


<?php
	session_start();
	$conn=mysqli_connect('localhost', 'root', '', 'd_ta6');
	if(isset($_POST['login'])){	
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$data = mysqli_query($conn, "SELECT * FROM t_ta6 WHERE nim= '$nim'");
		$result = mysqli_fetch_row($data); 
		header("Location:datatampil.php"); 
	}
?>

<br>
<p align="center">Belum memiliki akun? <a href ="pendaftaran.php"> DAFTAR</a></p>