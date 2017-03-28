<?php  
include "koneksi.php";
mysqli_query($link, "DELETE FROM transaksi_jual_detail WHERE id_jual='$_GET[id]' ");
header("location: penjualan-kasir.php");
?>