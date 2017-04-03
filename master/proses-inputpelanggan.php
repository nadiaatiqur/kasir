<?php  
include "koneksi.php";

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

$result=mysqli_query($link, "INSERT INTO user (id_user, nama_pengguna, alamat, telpon, level, username, password) VALUES (NULL, '$nama', '$alamat', '$telpon', '$level', '$user', '$pass')");
if ($result) {
	echo "<script>location = 'pelanggan.php'</script>";
} else {
	echo "Error :".mysqli_error($link);
}
mysqli_close($link);
?>