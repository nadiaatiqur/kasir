<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_barang.xls");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<body>
<center><h1>DATA BARANG</h1></center>
<table border="1">
	<tr>
		<TH>ID BARANG</TH>
        <TH>NAMA BARANG</TH>
        <TH>KATEGORI</TH>
        <TH>JUMLAH</TH>
        <TH>SATUAN</TH>
        <TH>SPESIFIKASI</TH>
        <TH>HARGA BELI</TH>
        <TH>HARGA JUAL</TH>
	</tr>
	 <?php  
     include "koneksi.php";

     $result=mysqli_query($link, "SELECT * FROM barang");
     while ($row=mysqli_fetch_array($result)) {
     ?>
	<tr>
		<td><?php echo $row['id_barang']; ?></td>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['kategori']; ?></td>
        <td><?php echo $row['jumlah_barang']; ?></td>
        <td><?php echo $row['satuan']; ?></td>
        <td><?php echo $row['spesifikasi']; ?></td>
        <td><?php echo $row['harga_beli']; ?></td>
        <td><?php echo $row['harga_jual']; ?></td>
	</tr>
	<?php } ?>
</table>
</body>
</body>
</html>