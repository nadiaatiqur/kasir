<?php  
include "koneksi.php";
if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$suplier=$_POST['nama_penyuplai'];
	$alamat=$_POST['alamat'];
	$telpon=$_POST['telepon'];
	$kontak=$_POST['kontak'];
	$email=$_POST['email'];
	$rekening=$_POST['rekening'];

	$result=mysqli_query($link, "UPDATE penyuplai SET nama_penyuplai='$suplier' ,alamat='$alamat' ,telpon='$telpon' ,kontak='$kontak' ,email='$email' ,rekening='$rekening'  WHERE  id_penyuplai='$id' ");
	if ($result) {
		header("location: suplier.php");
	} else {
		echo "Error :".mysqli_error($link);
	}
}
mysqli_close($link)
?>