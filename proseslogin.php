<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from login";
$query = mysqli_query($koneksi, $sql);

while ($login = mysqli_fetch_array($query)) {
		$udb = $login['username'];
		$pdb = $login['password'];

	if (($username != $udb) || ($password != $pdb)) {
		echo "Salah";
		}
	else {
		echo "<meta http-equiv='refresh' content='0;url=data.php'>";
	}
}
?>