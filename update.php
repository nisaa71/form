<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>

	<?php
	include "koneksi.php";
	$nim = $_GET['nim'];
	$sql = "select * from mahasiswa where nim = '$nim'";
	$query = mysqli_query($koneksi, $sql);
	while ($update = mysqli_fetch_array($query)) {
		$nama = $update['nama'];
		$jeniskelamin = $update['jeniskelamin'];
		$jurusan = $update['jurusan'];
		$alamat = $update['alamat'];
		$nim = $update['nim'];
	}
	?>

	<form action="prosesupdate.php" method="post">
		<h2>Update Data</h2>
		<input type="text" name="nim" value="<?php echo $nim; ?>">
		<h3>Nama</h3>
		<input class="active" name="nama" type="text" value="<?php echo $nama; ?>">
		<h3>Jenis Kelamin</h3>
		<input class="active" name="jeniskelamin" type="text" value="<?php echo $jeniskelamin; ?>">
		<h3>Jurusan</h3>
		<input class="active" name="jurusan" type="text" value="<?php echo $jurusan ?>">
		<h3>Alamat</h3>
		<input class="active" name="alamat" type="text" value="<?php echo $alamat ?>">
		<input type="submit" value="Submit">
	</form>
</body>
</html>