<?php  
include "koneksi.php";
if (isset($_POST['simpan2'])) {
	
	$harus_dibayar=$_POST['total_bayar'] - ($_POST['pembayaran_awal'] + $_POST['uang_angsuran']);

	$result=mysqli_query($link, "INSERT INTO history_piutang(id_piutang, no_transaksi, id_pelanggan, nama_pelanggan, tanggal_cicil, total_bayar, uang_pembayaran, uang_angsuran, harus_dibayar, status) VALUES(NULL, '$_POST[no_transaksi]', '$_POST[id_pelanggan]', '$_POST[nama_pelanggan]', '$_POST[tanggal_cicil]', '$_POST[total_bayar]', '$_POST[pembayaran_awal]', '$_POST[uang_angsuran]', '$harus_dibayar', '$_POST[status]')") or die(mysqli_error($link));

	$sql=mysqli_query($link, "SELECT id_piutang, total_bayar, uang_pembayaran, uang_angsuran, harus_dibayar FROM history_piutang WHERE no_transaksi='$_POST[no_transaksi]' ORDER BY id_piutang desc limit 1 ");

	if (mysqli_num_rows($sql)>0) {
		$res=mysqli_fetch_array($sql);
		$id_piutang=$res['id_piutang'];
		$total_bayar=$res['total_bayar'];
		$uang_angsuran=$_POST['uang_angsuran'];
		$uang_pembayaran_baru=$res['uang_pembayaran'] + $uang_angsuran ;
		$harus_dibayar=$total_bayar - ($uang_pembayaran_baru + $uang_angsuran);
		$status1="LUNAS";
	}
	$update=mysqli_query($link, "UPDATE history_piutang SET uang_pembayaran='$uang_pembayaran_baru', harus_dibayar='$harus_dibayar' WHERE id_piutang='$id_piutang' ") or die(mysqli_error($link));
	if ($update) {
		if ($res['harus_dibayar'] <= 0) {
			echo "gagal mas";
		} else {
			$update1=mysqli_query($link, "UPDATE history_piutang SET status='$status1' WHERE harus_dibayar<='0' AND id_piutang='$id_piutang' ") or die(mysqli_error($link));
			mysqli_query($link, "UPDATE penjualan SET status='$status1' WHERE no_transaksi='$_POST[no_transaksi]' ");
			header("location: daftar-angsuran2.php");
		}
	} else {
		echo "gagal";
	}
}
?>