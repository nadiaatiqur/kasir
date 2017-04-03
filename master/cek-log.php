<?php
if (isset($_POST['submit'])) {
include "koneksi.php";
$user=$_POST['user'];
$pass=$_POST['password'];
$sql=mysqli_query($link,"SELECT * FROM user where username='$user' and password='$pass'");
if ($sql) {
	session_start();
	$data=mysqli_fetch_array($sql);
	$_SESSION['user']=$data['username'];
	$_SESSION['password']=$data['password'];
	header("location:tampilan.html");
}else{
	echo "Gagal".mysqli_error($link);

}
}
?>