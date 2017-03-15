<?php  
include "koneksi.php";
mysqli_query($link, "DELETE FROM transaksi_beli WHERE id_beli='$_GET[id]' ");
header("location: tabel-pembelian.php");
?>