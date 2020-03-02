<?php

include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama']; 
$jeniskelamin = $_POST['jeniskelamin']; 
$jurusan = $_POST['jurusan']; 
$alamat = $_POST['alamat'];

$sql = "update mahasiswa set nama = '$nama', jeniskelamin = '$jeniskelamin', jurusan = '$jurusan', alamat = '$alamat' where nim = '$nim' ";
$query = mysqli_query($koneksi, $sql);

if ($query) {
	echo " berhasil 
			<meta http-equiv='refresh' content='0; url=data.php'>";
}
else {
	echo "gagal
	<meta http-equiv='refresh' content='0; url=update.php'>";
}

?> 