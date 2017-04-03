<?php  
include "koneksi.php";
if (isset($_POST['input'])) {
	$nama=$_POST['namapengguna'];
	$alamat=$_POST['alamat'];
	$telpon=$_POST['telpon'];
	$status=$_POST['level'];
	$user=$_POST['username'];
	$pass=$_POST['password'];

	$result=mysqli_query($link, "INSERT INTO user (id_user, nama_pengguna, alamat, telpon, level, username, password) values (null, '$nama', '$alamat', '$telpon', '$status', '$user', '$pass')");
	if ($result) {
		echo "<script>location = 'daftar-user.php'</script>";
	} else {
		echo "Error :".mysqli_error($link);
	}
}
mysqli_close($link);
?>