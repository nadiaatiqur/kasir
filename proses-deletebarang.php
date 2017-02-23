<?php 
/**/
include "koneksi.php";

$id=$_GET['id'];

$result=mysqli_query($link, "DELETE FROM barang WHERE id_barang='$id' ");
if ($result) {
	header("location: barang.php");
} else {
	echo "Error :".mysqli_error($link);
}
mysqli_close($link);
?>