<?php
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'd_ta6');
	$sql="SELECT status, foto FROM t_ta6";
	$query= mysqli_query($conn, $sql);
	$hasil= mysqli_fetch_array($query);
?>
<form method="post" enctype="multipart/form-data">
	<h1 align="center"> POSTING STATUS </h1>
	<table align="center">
		<tr>
			<td>Posting</td>
			<td> : </td>
			<td><textarea rows="20" cols="80"></textarea></td>
		</tr>
		<tr>
			<td>Upload Foto</td>
			<td> : </td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td colspan="3" align="center">
				<input type="submit" name="Kirim">
			</td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['submit'])){
		$cerita = $_POST['status'];
		$foto =  basename($_FILES["foto"]["name"]);
		$query = "INSERT INTO t_jurnal6 (status , foto) VALUES ('$status','$foto')";

		if(mysqli_query($conn,$query)){
			$sql = "SELECT status, foto FROM t_jurnal6";
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				    	$foto = $row["foto"];
				        echo "<br> Foto: ". $row["foto"]. "<br> Gambar :";
				        echo "<img src=image/".$row['foto'].">";
				    }
				} else {
				    echo "0 results";
				}
				$conn->close();
		}else{
			echo "GAGAL";
		}
	}

?>

<h4 align="center"><a href="daftarpostingan.php">DAFTAR POSTINGAN</a></h4>
