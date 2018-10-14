<?php

session_start();
$conn = mysqli_connect('localhost','root','','d_ta6');

$sql="SELECT * FROM t_ta6";
$query=mysqli_query($conn, $sql);
$key= mysqli_fetch_array($query);
?>


<h1 align="center"> DATA </h1>
<table align="center" cellpadding="3">
	<tr>
		<td>NIM</td>
		<td> : </td>
		<td><?php echo $key['nim']; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td> : </td>
		<td><?php echo $key['nama']; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td> : </td>
		<td><?php echo $key['kelas']; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td> : </td>
		<td><?php echo $key['jk']; ?></td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td> : </td>
		<td><?php echo $key['hobi']; ?></td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td> : </td>
		<td><?php echo $key['fakultas']; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td> : </td>
		<td><?php echo $key['alamat']; ?></td>
	</tr>
</table>


<h5 align="center"><a href ="editprofile.php"> EDIT</a></h5>
<h5 align="center"><a href ="posting.php"> POSTING</a></h5>