<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
	
	$id_barang=$_POST['id'];
	$barang=$_POST['barang'];
	$tgl=$_POST['tgl'];
	$hargabeli=$_POST['hargabeli'];
	$jumlah=$_POST['jumlah'];
	$total=$hargabeli * $jumlah; 

	$cek_barang = mysqli_query($link, "SELECT * FROM barang WHERE id_barang ='$id_barang' ");
	
	if (mysqli_num_rows($cek_barang)> 0) {
		$cek_det_barang = mysqli_query($link, "SELECT * FROM transaksi_beli WHERE id_barang = '$id_barang' ");
		if (mysqli_num_rows($cek_det_barang)> 0) {
			mysqli_query($link, "UPDATE transaksi_beli SET jumlah_beli=jumlah_beli+'$jumlah' where id_barang='$id_barang'");
			header("location: tabel-pembelian.php");
			//echo "wes ditambahno jumlah'e";
		} else {
			mysqli_query($link, "INSERT INTO transaksi_beli (id_beli, id_barang, nama_barang, tanggal_beli, harga_beli, jumlah_beli, total) VALUES (NULL, '$id_barang', '$barang', '$tgl', '$hargabeli', '$jumlah', '$total')");
			header("location: tabel-pembelian.php");
			//echo "wes dimasuk'no keranjang barang'e";
		}
	} else {
		echo"barang tidak ditemukan!";
	}
}
mysqli_close($link);
?>