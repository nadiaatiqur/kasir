<?php  
include "koneksi.php";
if (isset($_POST['simpan'])) {

	$uang_pembayaran=$_POST['uang_pembayaran'];
	$total_bayar=$_POST['total_bayar'];
	$uang_angsuran=$_POST['uang_angsuran'];
	$harus_dibayar=$total_bayar - ($uang_pembayaran+$uang_angsuran);
	$status1="LUNAS";

	 	$sql=mysqli_query($link, "INSERT INTO history_hutang (id_hutang, faktur, id_penyuplai, nama_penyuplai, uang_pembayaran, total_bayar, uang_angsuran, harus_dibayar, status) VALUES (null, '$_POST[faktur]', '$_POST[id_penyuplai]', '$_POST[nama_penyuplai]', '$_POST[uang_pembayaran]', '$_POST[total_bayar]', '$_POST[uang_angsuran]', '$harus_dibayar', '$_POST[status]')");

	 	$qtmp=mysqli_query($link, "SELECT * FROM history_hutang");
	 	if (mysqli_num_rows($qtmp)) {
		 	if (!$sql) {
		 		echo "gagal";
		 	} else {
		 		$id_hutang=mysqli_query($link, "SELECT id_hutang FROM history_hutang WHERE faktur='$_POST[faktur]' ORDER BY id_hutang desc limit 1 ");
				$res=mysqli_fetch_array($id_hutang);
				if ($harus_dibayar <= 0) {
					echo "gagal";	
				} else {
					$update1=mysqli_query($link, "UPDATE history_hutang SET status='$status1' WHERE harus_dibayar<='0' AND id_hutang='$res[id_hutang]' ") or die(mysqli_error($link));
					$update_pembelian=mysqli_query($link, "UPDATE pembelian SET status='$status1' WHERE faktur='$_POST[faktur]' ");
					header("location: daftar-angsuran.php");
				}
		 	}
	 	}
}
?>