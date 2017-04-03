<?php  
include "koneksi.php";
if (isset($_POST['input'])) {

	$suplier=$_POST['nama_penyuplai'];
	$alamat=$_POST['alamat'];
	$telpon=$_POST['telepon'];
	$kontak=$_POST['kontak'];
	$email=$_POST['email'];
	$rekening=$_POST['rekening'];

	$sql=mysqli_query($link, "INSERT INTO penyuplai(id_penyuplai, nama_penyuplai, alamat, telpon, kontak, email, rekening) VALUES (null, '$suplier', '$alamat', '$telpon', '$kontak', '$email', '$rekening' )");
	if (!empty($sql)) {
		header("location: suplier.php");
	}else {
		echo "Error :".mysqli_error($link);
	}
}
mysqli_close($link);
?>