<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>View Data</h1>
	<table border="1" align="center" width="50%">
		<tr align="center">
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Jurusan</td>
			<td>Alamat</td>
			<td>Pilihan</td>
		</tr>

		<?php

		include "koneksi.php";
		$query = "select * from mahasiswa";
		$sql = mysqli_query($koneksi, $query);
		while ($data = mysqli_fetch_array($sql)) {
			$nama = $data['nama'];
			$jeniskelamin = $data['jeniskelamin'];
			$jurusan = $data['jurusan'];
			$alamat = $data['alamat'];
			$nim = $data['nim'];
		?>
		<tr>
			<td><?php echo $nama; ?></td>
			<td><?php echo $jeniskelamin; ?></td>
			<td><?php echo $jurusan; ?></td>
			<td><?php echo $alamat; ?></td>
			<td>
				<a href="update.php?<?php echo "nim=$nim"?>">Update</a>
				<a href="prosesdelete.php?<?php echo "nim=$nim"?>">Delete</a>
				<a href="create.php?<?php echo "nim=$nim"?>">Create</a>
			</td>
		</tr>
	<?php } ?>
	</table>
	</center>
</body>
</html>