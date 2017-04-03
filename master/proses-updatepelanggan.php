<?php
	include "koneksi.php";

	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telpon=$_POST['telpon'];
	$level=$_POST['level'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	/*echo $nama."<br>";
	echo $alamat."<br>";
	echo $telpon."<br>";
	echo $level."<br>";
	echo $user."<br>";
	echo $pass;*/
	$result=mysqli_query($link, "UPDATE user SET nama_pengguna='$nama', alamat='$alamat', telpon='$telpon', level='$level', username='$user', password='$pass' WHERE id_user='$id' ");
	if ($result) {
		echo "<script>location = 'pelanggan.php'</script>";
	} else {
		echo "Error :".mysqli_error($link);
	}
mysqli_close($link);
?>