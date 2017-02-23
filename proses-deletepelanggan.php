<?php 
include "koneksi.php";

$id=$_GET['id'];

$result=mysqli_query($link, "DELETE FROM user WHERE id_user='$id' ");
if ($result) {
	echo "<script type = 'text/javascript'>location = 'pelanggan.php'</script>";
} else {
	echo "Error :".mysqli_error($link);
}
mysqli_close($link);
?>