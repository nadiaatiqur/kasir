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
	$alamat=$_POST['alamat_penyuplai'];
	$notelpon=$_POST['notelpon'];
	$kontak=$_POST['kontak_pribadi'];
	$email=$_POST['email'];
	$keterangan=$_POST['keterangan'];

	$result=mysqli_query($link, "INSERT INTO barang (id_barang, nama_barang, kategori, jumlah_barang, satuan, spesifikasi, harga_beli, harga_jual) VALUES (NULL, '$nama', '$kategori', '$jumlah', '$satuan', '$spesifikasi', '$hargabeli', '$hargajual')");
	$sql=mysqli_query($link, "INSERT INTO penyuplai (id_penyuplai, nama_barang, nama_penyuplai, alamat, telpon, kontak, email, keterangan) VALUES (null, '$nama', '$penyuplai', '$alamat', '$notelpon', '$kontak', '$email', '$keterangan')");

	if ($result&& $sql) {
		echo "berhasil";
	} else{
		echo "Error :".mysqli_error($link);
	}
}
mysqli_close($link);
?>