<?php  
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_Tabel_Pembelian_Barang.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Data Tabel Pembelian Barang</h1></center>
<table border="1">
	<tr>
		<th>ID BELI</th>
		<th>NO FAKTUR</th>
		<th>ID BARANG</th>
        <th>NAMA BARANG</th>
		<th>TANGGAL BELI</th>
        <TH>HARGA BELI</TH>
        <TH>JUMLAH BELI</TH>
		<th>TOTAL</th>		
	</tr>
	<?php  
	include "koneksi.php";
	$result=mysqli_query($link, "SELECT * FROM transaksi_beli_detail");
	while ($row=mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?= $row['id_beli'];?></td>
		<td><?= $row['faktur'];?></td>
		<td><?= $row['id_barang'];?></td>
		<td><?= $row['nama_barang'];?></td>
		<td><?= $row['tanggal_beli'];?></td>
		<td><?= $row['harga_beli'];?></td>
		<td><?= $row['jumlah_beli'];?></td>
		<td><?= $row['total'];?></td>

	</tr>
	<?php } ?>
</table>
</body>
</html>