<?php
	session_start();
	$conn=mysqli_connect('localhost', 'root', '', 'd_ta6');
	$nim = $_SESSION['nim'];
	$sql = mysqli_query($conn, "SELECT * FROM t_ta6 WHERE nim = '$nim'");
?>

<form method="POST">
<h1 align="center"> REGISTRASI </h1>
<table align="center">
	<tr>
		<td>NIM</td>
		<td><input type="text" name="nim"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>
			<input type="radio" name="kelas" value="01"> D3MI-41-01 <br>
			<input type="radio" name="kelas" value="02"> D3MI-41-02 <br>
			<input type="radio" name="kelas" value="03"> D3MI-41-03 <br>
			<input type="radio" name="kelas" value="04"> D3MI-41-04 <br>
		</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>
			<input type="radio" name="jk" value="laki"> Laki-laki <br>
			<input type="radio" name="jk" value="perempuan"> Perempuan
		</td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td>
			<input type="checkbox" name="hobi[]" value="menari"> Menari <br>
			<input type="checkbox" name="hobi[]" value="membaca"> Membaca <br>
			<input type="checkbox" name="hobi[]" value="tidur"> Tidur <br>
			<input type="checkbox" name="hobi[]" value="masak"> Masak <br>
		</td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td><select name="fakultas">
			<option>---Pilih---</option>
			<option value="fte"> Fakultas Teknik Elektro </option>
			<option value="fif"> Fakultas Informatika </option>
			<option value="fri"> Fakultas Rekayasa Industri </option>
			<option value="feb"> Fakultas Ekonomi Bisnis </option>
			<option value="fkb"> Fakultas Komunikasi Bisnis </option>
			<option value="fik"> Fakultas Industri Kreatif </option>
			<option value="fit"> Fakultas Ilmu Terapan </option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td><input type="submit" name="edit" value="Edit"></td>
	</tr>
</table>
</form>


<?php

	if(isset($_POST['edit'])){
		$nama= $_POST['nama'];
		$nim=$_POST['nim'];
		$kelas=$_POST['kelas'];
		$jk=$_POST['jk'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$ceknim=strlen($_POST['nim']);
		$ceknama=strlen($_POST['nama']);

		$cek=true;
			if(empty($_POST['nim'])) {
				echo "NIM tidak boleh kosong !!";
				$cek=false;
			}else if($ceknim>10){
				echo "NIM maksimal 10 digit !!";
				$cek=false;
			}else{
				$nim=$_POST['nim'];
			}

			if(empty($_POST['nama'])) {
				echo "Nama tidak boleh kosong !!";
				$cek=false;
			}else if($ceknama>35){
				echo "Nama maksimal 35 digit !!";
				$cek=false;
			}else{
				$nama=$_POST['nama'];
			}

			if($cek){
				$conn= mysqli_connect('localhost','root','','d_ta6');
				$sql = "UPDATE  t_ta6 SET nama='$nama' , kelas='$kelas',jk='$jk', hobi='$hobi', fakultas='$fakultas', alamat='$alamat' WHERE nim='$nim'";
				header("location:datatampil.php");
				echo "DATA BERHASIL DI UBAH";			  
			}
 	}
?>