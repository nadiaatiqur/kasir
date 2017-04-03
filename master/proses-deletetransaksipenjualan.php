<?php  
include "koneksi.php";
mysqli_query($link, "DELETE FROM penjualan WHERE id_jual='$_GET[id]' ");
header("location: tabel-transaksi-penjualan.php");
?>