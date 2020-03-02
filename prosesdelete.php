<?php

include "koneksi.php";
$nim = $_GET['nim'];
$sql = "delete from mahasiswa where nim = '$nim'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
	echo "
			Data berhasil terhapus.
			<meta http-equiv='refresh' content='0; url=data.php'>";
}
?>