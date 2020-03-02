<?php

include "koneksi.php";
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

if (empty($nama)) {
	echo "Field tidak boleh kosong
	<meta http-equiv='refresh' content='0; url=data.php'>";
}
elseif (empty($jeniskelamin)) {
	echo "Field tidak boleh kosong
	<meta http-equiv='refresh' content='0; url=data.php'>";
}
elseif (empty($jurusan)) {
	echo "Field tidak boleh kosong
	<meta http-equiv='refresh' content='0; url=data.php'>";	
}
elseif (empty($alamat)) {
	echo "Field tidak boleh kosong
	<meta http-equiv='refresh' content='0; url=data.php'>";
}
else {
		$sql = "insert into mahasiswa (nama, jeniskelamin, jurusan, alamat) values ('$nama', '$jeniskelamin', '$jurusan', '$alamat')";
		$query = mysqli_query($koneksi, $sql);

		if ($query) {
			echo "berhasil
				<meta http-equiv='refresh' content='0; url=data.php'>";
		}
		else {
			echo "cek kembali form anda
				<meta http-equiv='refresh' content='0; url=data.php'>";
		}
}

?>