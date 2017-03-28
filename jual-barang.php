<?php 
include "koneksi.php";
if (isset($_POST['simpan'])) {
	
	$id_barang=$_POST['id_barang'];
	$nama_barang=$_POST['nama_barang'];
	$kategori=$_POST['kategori'];
	$harga_jual=$_POST['harga_jual'];
	$jumlah_jual=$_POST['jumlah'];
	$tanggal= date("Y-m-d");
	$discount=$_POST['discount'];

	$cek_barang = mysqli_query($link, "SELECT * FROM barang WHERE id_barang ='$id_barang' ");
	
	if (mysqli_num_rows($cek_barang)> 0) {
		$cek_det_barang = mysqli_query($link, "SELECT * FROM transaksi_jual WHERE id_barang = '$id_barang' ");
		if (mysqli_num_rows($cek_det_barang)> 0) {
			mysqli_query($link, "UPDATE transaksi_jual SET jumlah_jual=jumlah_jual +'$jumlah_jual' where id_barang='$id_barang'");
			header("location: tabel-penjualan.php");
		} else {
			mysqli_query($link, "INSERT INTO transaksi_jual(id_jual, id_barang, nama_barang, kategori, jumlah_jual, tanggal_jual, disc, harga_jual) VALUES (NULL, '$id_barang', '$nama_barang', '$kategori', '$jumlah_jual', '$tanggal', '$discount', '$harga_jual')");
			header("location: tabel-penjualan.php");
		}
	} else {
		echo"barang tidak ditemukan!";
	}
}
?>