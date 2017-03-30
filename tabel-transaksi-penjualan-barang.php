<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Data_Tabel_Transaksi_Penjualan_Barang.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Data Tabel Transaksi Penjualan Barang</h1></center>
<table border="1">
	<tr>
		<th>ID jual</th>
        <th>No.Transaksi</th>
        <th>ID Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Tanggal Jual</th>
        <th>Total Bayar</th>
        <th>Jumlah Bayar</th>
        <th>Potongan</th>
        <th>Status</th>
	</tr>
	<?php 
	include "koneksi.php";
	$result=mysqli_query($link, "SELECT * FROM penjualan");
    while ($row=mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?= $row['id_jual'] ?></td>
        <td><?= $row['no_transaksi'] ?></td>
        <td><?= $row['id_pelanggan'] ?></td>
        <td><?= $row['nama_pelanggan'] ?></td>
        <td><?= $row['tanggal_jual'] ?></td>
        <td><?= $row['total_bayar'] ?></td>
        <td><?= $row['jumlah_bayar'] ?></td>
        <td><?= $row['potongan'] ?></td>
        <td><?= $row['status'] ?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>
