<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
	<h1 align="center">Tambah Data Mahasiswa</h1>
	<form action="" method="post">
	<table cellspacing="4" cellpadding="6" align="center">
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Prodi</td>
			<td>:</td>
			<td><select name="prodi" style="width:175px">
				<option value="RPL">RPL</option>
				<option value="IF">IF</option>
				<option value="SI">SI</option>
				<option value="DKV">DKV</option>
				<option value="TI">TI</option>
				<option value="TT">TT</option>
				<option value="TE">TE</option>
			</select></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES(null,'$nim','$nama','$prodi')");
  header("location:index.php");
}
?>