<?php
session_start();
include 'master/koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];
$op=$_GET['op'];

if ($op=="in") {
	$sql=mysqli_query($link, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
	if (mysqli_num_rows($sql)==1) {
		$res=mysqli_fetch_array($sql);
		$_SESSION['username']=$res['username'];
		$_SESSION['password']=$res['password'];
		$_SESSION['level']=$res['level'];
		if ($res['level']=="admin") {
			header("location: master/tampilan.php");
		} elseif ($res['level']=="petugas") {
			header("location: petugas.php");
		} else {
?>
	<script language="JavaScript">
		alert('Username atau Password tidak sesuai. Silahkan diulang kembali');
		document.location='index.html';
	</script>
<?php 
		}
	}
} elseif ($op=="out") {
	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header("location: index.php");
}
?>