<?php
if (isset($_POST['update'])) {
	include "koneksi.php";

	$id=$_POST['id'];
	$nama=$_POST['nama_pengguna'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$alamat=$_POST['alamat'];
	$telpon=$_POST['telpon'];
	$status=$_POST['level'];

	$result=mysqli_query($link, "UPDATE user SET nama_pengguna='$nama', alamat='$alamat', telpon='$telpon', level='$status', username='$user', password='$pass' WHERE id_user='$id' ");
	if ($result) {
		echo "<script>location = 'daftar-user.php'</script>";
	} else {
		echo "SALAH :".mysqli_error($link);
}
}
mysqli_close($link);
?>