<?php  
include "koneksi.php";
if (isset($_POST['simpan'])) {


	$id_barang=$_POST['id_barang'];
	$nama_barang=$_POST['nama_barang'];
	$tglbeli=$_POST['tglbeli'];
	$harga_beli=$_POST['harga_beli'];
	$jumlah_beli=$_POST['jumlah_beli'];
	$total=$_POST['total'];
	$sub_total=$_POST['subtotal'];

	$no_faktur=$_POST['no_faktur'];
	$id_suplier=$_POST['id_suplier'];
	$suplier=$_POST['suplier'];
	$pembayaran=$_POST['pembayaran'];
	$status=$_POST['status'];

	$sql_tmp = mysqli_query($link, "SELECT * FROM transaksi_beli");
		$temukan = mysqli_num_rows($sql_tmp);

		if ($temukan > 0) {
			$qsup = mysqli_query($link, "SELECT * FROM penyuplai WHERE id_penyuplai = '$id_suplier' AND nama_penyuplai='$suplier' ");
			if(mysqli_num_rows($qsup) > 0)
			{
				$sup = mysqli_fetch_array($qsup);
				$kodesup = $sup['id_penyuplai'];
				$nama_toko = $sup['nama_penyuplai'];
			}
			else
			{
				$kodesup = "";
				$nama_toko = "";
			}

			$status= (string) $status;
			$resPembelian = mysqli_query($link, "INSERT INTO pembelian(id_beli, faktur, id_penyuplai, nama_penyuplai, tanggal_beli, uang_pembayaran, sub_total, status) VALUES(NULL, '$no_faktur', '$id_suplier', '$suplier', '$tglbeli', '$pembayaran', '$sub_total', '$status')") or die(mysqli_error($link));

			while ($b = mysqli_fetch_array($sql_tmp)) {
				$resDetail = mysqli_query($link, "INSERT INTO transaksi_beli_detail(id_beli, faktur, id_barang, nama_barang, tanggal_beli, harga_beli, jumlah_beli, total) VALUES(NULL, '$no_faktur', '$b[id_barang]','$b[nama_barang]','$b[tanggal_beli]', '$b[harga_beli]', '$b[jumlah_beli]', '$b[total]')");
				mysqli_query($link, "UPDATE barang SET jumlah_barang=jumlah_barang + '$b[jumlah_beli]' WHERE id_barang='$id_barang' ");
				mysqli_query($link, "DELETE FROM transaksi_beli");
				if (!$resDetail) {
					echo"Gagal transaksi mas".mysqli_error($link);
				}
			}

			if (!$resPembelian) {
				echo"Gagal transaksi yof".mysqli_error($link);
			}
			else
			{
				header("location:kwitansi-pembelian.php?id_transaksi=".$no_faktur);
			}
		}
		else
		{
			echo "Tidak data barang yang di beli!";
		}
}
mysqli_close($link);
?>