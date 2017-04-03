<?php  
include "koneksi.php";
mysqli_query($link, "DELETE FROM transaksi_beli_detail WHERE id_beli='$_GET[id]' ");
header("location: pembelian-kasir.php");
?>