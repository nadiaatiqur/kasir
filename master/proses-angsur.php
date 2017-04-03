<?php  
include "koneksi.php";
if (isset($_POST['simpan1'])) {

	$harus_dibayar=$_POST['total_bayar'] - ($_POST['uang_pembayaran']+$_POST['uang_angsuran']);

	$result=mysqli_query($link, "INSERT INTO history_hutang(id_hutang, faktur, id_penyuplai, nama_penyuplai, uang_pembayaran, total_bayar, uang_angsuran, harus_dibayar, status) VALUES(NULL, '$_POST[faktur]', '$_POST[id_penyuplai]', '$_POST[nama_penyuplai]', '$_POST[uang_pembayaran]', '$_POST[total_bayar]', '$_POST[uang_angsuran]', '$harus_dibayar', '$_POST[status]')");

	$sql=mysqli_query($link, "SELECT id_hutang, uang_pembayaran, total_bayar, uang_angsuran, harus_dibayar FROM history_hutang WHERE faktur='$_POST[faktur]' ORDER BY id_hutang desc limit 1 ");

	if (mysqli_num_rows($sql)>0) {
		$res=mysqli_fetch_array($sql);
		$id_hutang=$res['id_hutang'];
		$total_bayar=$res['total_bayar'];
		$uang_angsuran=$_POST['uang_angsuran'];
		$uang_pembayaran_baru=$res['uang_pembayaran'] + $uang_angsuran ;
		$harus_dibayar=$total_bayar-($uang_pembayaran_baru+$uang_angsuran);
		$status1="LUNAS";
	}
	$update=mysqli_query($link, "UPDATE history_hutang SET uang_pembayaran='$uang_pembayaran_baru' , harus_dibayar='$harus_dibayar' WHERE id_hutang='$id_hutang' ") or die(mysqli_error($link));
	if ($update) {
		if ($res['harus_dibayar'] <= 0 ) {
			echo "gagal mas";
		} else {
			$update1=mysqli_query($link, "UPDATE history_hutang SET status='$status1' WHERE harus_dibayar<='0' AND id_hutang='$id_hutang' ") or die(mysqli_error($link));
			mysqli_query($link, "UPDATE pembelian SET uang_pembayaran='$uang_pembayaran_baru', status='$status1' WHERE faktur='$_POST[faktur]' ");
			header("location: daftar-angsuran.php");
		}
	} else {
		echo "gagal";
	}
}
?>