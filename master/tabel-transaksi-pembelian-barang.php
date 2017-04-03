<?php  
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data-transaksi-pembelian-barang.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Data Transaksi Pembelian Barang</h1></center>
<table border="1">
	<tr>
		<th>ID BELI</th>
        <th>NO FAKTUR</th>
        <th>ID PENYUPLAI</th>
        <th>NAMA PENYUPLAI</th>
        <th>TANGGAL BELI</th>
        <th>UANG PEMBAYARAN</th>
        <th>TOTAL BAYAR</th>
        <th>STATUS</th>
	</tr>
	<?php  
	include "koneksi.php";
	$result=mysqli_query($link, "SELECT * FROM pembelian");
    while ($row=mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?= $row['id_beli'];?></td>
        <td><?= $row['faktur'];?></td>
        <td><?= $row['id_penyuplai'];?></td>
        <td><?= $row['nama_penyuplai'];?></td>
        <td><?= $row['tanggal_beli'];?></td>
        <td><?= $row['uang_pembayaran'];?></td>
        <td><?= $row['sub_total'];?></td>
        <td><?= $row['status'];?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>