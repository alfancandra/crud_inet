<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
	<h1 align="center">Data Mahasiswa</h1>
	<center><a href="tambah.php">+Tambah Data</a></center>
	<br>
	<table cellpadding="6" cellspacing="4" align="center" border="1" style="border-collapse: collapse;">
		<tr>
			<th>Nama</th>
			<th>Nim</th>
			<th>Prodi</th>
			<th>Aksi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$sql=mysqli_query($koneksi,"SELECT * FROM mahasiswa");
		while ($r=mysqli_fetch_array($sql)) {
		?>
		<tr>
			<td><?php echo $r['nama'];?></td>
			<td><?php echo $r['nim'];?></td>
			<td><?php echo $r['prodi'];?></td>
			<td><a href="hapus.php?id=<?php echo $r['id'];?>" onclick="return confirm('Apakah data ingin dihapus Y/N')">Hapus</a> | |
				<a href="edit.php?id=<?php echo $r['id'];?>">Edit</a></td>
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>