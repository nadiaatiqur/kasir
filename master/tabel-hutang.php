<?php  
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=DATA-TABEL-HUTANG.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>DATA TABEL HUTANG</h1></center>
<table border="1">
	<tr>
		<th>No Faktur</th>
        <th>ID Penyuplai</th>
        <th>Nama Penyuplai</th>
        <th>Tanggal Pembelian</th>
        <th>Yang Dibayar</th>
        <th>Total Bayar</th>
        <th>Status</th>
        <th>Aksi</th>
	</tr>
	<?php  
	include "koneksi.php";
	$sql=mysqli_query($link, "SELECT * FROM pembelian WHERE status='HUTANG' ");
	while ($row=mysqli_fetch_array($sql)) {
	?>
	<tr>
		<td><?= $row['faktur'] ?></td>
        <td><?= $row['id_penyuplai'] ?></td>
        <td><?= $row['nama_penyuplai'] ?></td>
        <td><?= $row['tanggal_beli'] ?></td>
        <td><?= $row['uang_pembayaran'] ?></td>
        <td><?= $row['sub_total'] ?></td>
        <td><?= $row['status'] ?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>