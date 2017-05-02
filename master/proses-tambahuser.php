<?php  
include 'koneksi.php';

if (isset($_POST['kirim'])) {
	$adf=mysqli_query($link, "INSERT INTO user(id_user, nama_pengguna, alamat, telpon, level, username, password) VALUES (null, '$_POST[nama_pengguna]', '$_POST[alamat]', '$_POST[telpon]', '$_POST[level]', '$_POST[username]', '$_POST[password]') ") or mysqli_error();
	if ($adf) {
		header("location: daftar-user.php");
	} else {
		echo "error".mysqli_error($link);
	}
}
?>