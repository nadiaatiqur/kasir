<?php  
if (isset($_POST['input'])) {
	include "koneksi.php";

	$nama=$_POST['nama_barang'];
	$kategori=$_POST['kategori'];
	$jumlah=$_POST['jumlah_barang'];
	$satuan=$_POST['satuan'];
	$spesifikasi=$_POST['spesifikasi'];
	$hargabeli=$_POST['harga_beli'];
	$hargajual=$_POST['harga_jual'];
	$penyuplai=$_POST['penyuplai'];

	
	$result=mysqli_query($link, "INSERT INTO barang(id_barang, nama_barang, kategori, jumlah_barang, satuan, spesifikasi, harga_beli, harga_jual, nama_penyuplai) VALUES (NULL, '$nama', '$kategori', '$jumlah', '$satuan', '$spesifikasi', '$hargabeli', '$hargajual', '$penyuplai')");


	if ($result) {
		header("location: barang.php");
	} else{
		echo "Error :".mysqli_error($link);
	}
}
mysqli_close($link);
?>