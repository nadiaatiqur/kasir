<?php 
$link=mysqli_connect('localhost','root','','db_kasir');
if (isset($_POST['simpan'])) {
	$id_barang=$_POST['id_barang'];

	$no_transaksi =$_POST['transaksi'];
	$idpelanggan=$_POST['id_pelanggan'];
	$pelanggan=$_POST['pelanggan'];
	$potongan=$_POST['potongan'];
	$jmlbayar = $_POST['bayar'];
	$status=$_POST['status'];
	$total_bayar = 0;

	$tgl = date('Y-m-d');
	$qtmp = mysqli_query($link, "SELECT * FROM transaksi_jual");

		if (mysqli_num_rows($qtmp) > 0) {

			while($tmp = mysqli_fetch_array($qtmp))
			{
				$chart[] = $tmp;

				//hitung total
				$harga_disc = $tmp['harga_jual'] - (($tmp['harga_jual'] * $tmp['disc']) / 100);
				$sub_total = $harga_disc * $tmp['jumlah_jual'];

				$total_bayar =  $total_bayar + $sub_total;
			}
			$potongan = (int) $potongan;
			if ($potongan > 0) {
				$total_bayar -= $potongan;
			}
			//print_r($chart);
			$qpel = mysqli_query($link, "SELECT * FROM user WHERE id_user='$idpelanggan' AND username='$pelanggan' AND level='pelanggan' ");
			if(mysqli_num_rows($qpel) > 0)
			{
				$p = mysqli_fetch_array($qpel);
				$kode_pel = $p['id_user'];
				$nama_pelanggan = $p['username'];
			}
			else
			{
				$kode_pel = "$idpelanggan";
				$nama_pelanggan = "$pelanggan";
			}
			//echo $nama_pelanggan;

			//apakah pembayaran sudah cukup
			if ($total_bayar <= $jmlbayar || $status == "PIUTANG" ) {
				//start transaction

				//pembuatan header
				$qsimpanheader = mysqli_query($link, "INSERT INTO penjualan(id_jual, no_transaksi, id_pelanggan, nama_pelanggan, tanggal_jual, total_bayar, jumlah_bayar, potongan, status) VALUES(null, '$no_transaksi', '$kode_pel', '$nama_pelanggan', '$tgl', '$total_bayar', '$jmlbayar','$potongan', '$status')");
				if (!$qsimpanheader) {
					//flash('example_message', '<p>Transaksi Gagal.</p>', 'w3-red');
					echo"gagal yof ".mysqli_error($link);	
				}
				else
				{
					foreach ($chart as $row) {
						$qsimpandetail = mysqli_query($link, "INSERT INTO transaksi_jual_detail(id_jual, no_transaksi, id_pelanggan, id_barang, nama_barang, kategori, jumlah_jual, tanggal_jual, disc, harga_jual) VALUES(null, '$no_transaksi', '$kode_pel', '$row[id_barang]', '$row[nama_barang]', '$row[kategori]', '$row[jumlah_jual]', '$row[tanggal_jual]', '$row[disc]', '$row[harga_jual]')");
						mysqli_query($link, "UPDATE barang SET jumlah_barang= jumlah_barang -'$row[jumlah_jual]' WHERE id_barang='$row[id_barang]' ");
						mysqli_query($link, "DELETE FROM transaksi_jual");
						if (!$qsimpandetail) {
							//flash('example_message', '<p>Transaksi gagal.</p>', 'w3-red' );
							echo"gagal mas";	
						}
					}
					//echo "succes";
					header("location: kwitansi-penjualan.php?id=".$no_transaksi);
				}
				//commit();
			}
			else {
				//flash('example_message', '<p>Pembayaran tidak cukup!</p>', 'w3-yellow');
				echo"pembayaran tidak cukup";	
			}

				
		}
		else
		{
			//flash('example_message', '<p>Tidak ada barang yang di jual!</p>', 'w3-red');
			echo"tidak ada barang yang dijual";	
		}
}else{
	echo"tidak ada barang yang dijual mas";	
}
?>