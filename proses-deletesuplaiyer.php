<?php  
include "koneksi.php";

$id=$_GET['id'];
$result=mysqli_query($link, "DELETE FROM penyuplai WHERE id_penyuplai='$id'");
if ($result) {
	header("location: suplier.php");
} else {
	echo "Error :".mysqli_error($link);
}
mysqli_close($link);
?>