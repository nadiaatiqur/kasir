<?php  
if (isset($_POST['update'])) {
	include "koneksi.php";

	$id=$_POST['id'];
	$user=$_POST['nama_barang'];
	$kategori=$_POST['kategori'];
	$jumlah=$_POST['jumlah'];
	$satuan=$_POST['satuan'];
	$spesifikasi=$_POST['spesifikasi'];
	$hargabeli=$_POST['harga_beli'];
	$hargajual=$_POST['harga_jual'];

	$result=mysqli_query($link, "UPDATE barang SET nama_barang='$user', kategori='$kategori', jumlah_barang='$jumlah', satuan='$satuan', spesifikasi='$spesifikasi', harga_beli='$hargabeli', harga_jual='$hargajual' WHERE id_barang='$id' ");
	if ($result) {
		echo "<script>location = 'barang.php'</script>";
	} else {
		echo "SALAH :".mysqli_error($link);
}
}
mysqli_close($link);/**/
?>