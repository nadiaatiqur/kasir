<?php  
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data-tabel-piutang.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Data Tabel Piutang</h1></center>
<table border="1">
	<tr>
		<th>No Faktur</th>
		<th>ID Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Tanggal Jual</th>
        <th>Total Bayar</th>
        <th>Yang Dibayar</th>
        <th>Status</th>
	</tr>
	<?php  
	include "koneksi.php";
	$sql=mysqli_query($link, "SELECT * FROM penjualan WHERE status='PIUTANG' ");
	while ($row=mysqli_fetch_array($sql)) {
	?>
	<tr>
		<td><?= $row['no_transaksi'] ?></td>
		<td><?= $row['id_pelanggan'] ?></td>
        <td><?= $row['nama_pelanggan'] ?></td>
        <td><?= $row['tanggal_jual'] ?></td>
        <td><?= $row['total_bayar'] ?></td>
        <td><?= $row['jumlah_bayar'] ?></td>
        <td><?= $row['status'] ?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>