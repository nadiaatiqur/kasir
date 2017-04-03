<?php  
include "koneksi.php";
mysqli_query($link, "DELETE FROM pembelian WHERE id_beli='$_GET[id]' ");
header("location: pembelian-kasir.php");
?>