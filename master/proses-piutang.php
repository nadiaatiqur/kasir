<?php  
include "koneksi.php";
if (isset($_POST['simpan'])) {

	$jumlah_bayar=$_POST['pembayaran_awal'];
	$total_bayar=$_POST['total_bayar'];
	$uang_angsuran=$_POST['uang_angsuran'];
	$harus_dibayar=$total_bayar - ($jumlah_bayar+$uang_angsuran);
	$status1="LUNAS";

	$sql=mysqli_query($link, "INSERT INTO  history_piutang(id_piutang, no_transaksi, id_pelanggan, nama_pelanggan, tanggal_cicil, total_bayar, uang_pembayaran, uang_angsuran, harus_dibayar, status) VALUES(null, '$_POST[no_transaksi]', '$_POST[id_pelanggan]', '$_POST[nama_pelanggan]', '$_POST[tanggal_cicil]', '$_POST[total_bayar]', '$_POST[pembayaran_awal]', '$_POST[uang_angsuran]', '$harus_dibayar', '$_POST[status]')") or die(mysqli_error($link));
	$qtmp=mysqli_query($link, "SELECT * FROM history_piutang");
	if (mysqli_num_rows($qtmp)) {
		if (!$sql) {
			echo "gagal yof";
		} else {
			$id_piutang=mysqli_query($link, "SELECT id_piutang FROM history_piutang WHERE no_transaksi='$_POST[no_transaksi]' ORDER BY id_piutang DESC LIMIT 1 ");
			$res=mysqli_fetch_array($id_piutang);
			if ($harus_dibayar <=0) {
				echo "gagal mas";
			} else {
				$update_piutang=mysqli_query($link, "UPDATE history_piutang SET status='$status1' WHERE harus_dibayar<='0' AND id_piutang='$res[id_piutang]' ") or die(mysqli_error($link));
				header("location: daftar-angsuran2.php");
			}
		}
	} else {
		echo "gagal";
	}
}
?>