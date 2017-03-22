<?php  
include "koneksi.php";
mysqli_query($link, "DELETE FROM transaksi_jual WHERE id_jual='$_GET[id]' ");
header("location: tabel-penjualan.php");
?>