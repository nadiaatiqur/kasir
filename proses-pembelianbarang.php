<?php  
include "koneksi.php";
if (isset($_POST['simpan'])) {

	function start_transaction()
	{
		mysqli_query($link, "START TRANSACTION");
	}

	function commit()
	{
		mysqli_query($link, "COMMIT");
	}

	function rollback()
	{
		mysqli_query($link, "ROLLBACK");
	}

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

			start_transaction();

			$resPembelian = mysqli_query($link, "INSERT INTO pembelian(id_beli, faktur, id_penyuplai, nama_penyuplai, tanggal_beli, uang_pembayaran) VALUES(NULL, '$no_faktur', '$id_suplier', '$suplier', '$tglbeli', '$pembayaran')");

			while ($b = mysqli_fetch_array($sql_tmp)) {
				$resDetail = mysqli_query($link, "INSERT INTO transaksi_beli_detail(id_beli, faktur, id_barang, nama_barang, tanggal_beli, harga_beli, jumlah_beli, total) VALUES(NULL, '$no_faktur', '$b[id_barang]','$b[nama_barang]','$b[tanggal_beli]', '$b[harga_beli]', '$b[jumlah_beli]', '$b[total]')");
				mysqli_query($link, "UPDATE barang SET jumlah_barang=jumlah_barang + '$b[jumlah_beli]' WHERE id_barang='$id_barang' ");
				mysqli_query($link, "DELETE FROM transaksi_beli");
				if (!$resDetail) {
					rollback();
					echo"Gagal transaksi";
					exit();
				}
			}

			if (!$resPembelian) {
				rollback();
				echo"Gagal transaksi";
				exit();
			}
			else
			{
				commit();
				header("location: tabel-pembelian.php");
			}
		}
		else
		{
			echo "Tidak data barang yang di beli!";
		}
}
mysqli_close($link);
?>