<?php  
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_tabel_penjualan_barang.xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>DATA TABEL PENJUALAN BARANG</h1></center>
<table border="1">
	<tr>
		<th>No</th>
        <th>ID jual</th>
        <th>No.Transaksi</th>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Jumlah Jual</th>
        <th>Tanggal Jual</th>
        <th>Discount</th>
        <th>Harga Jual</th>
	</tr>
	<?php  
    include "koneksi.php";

    $no=1;
    $result=mysqli_query($link, "SELECT * FROM transaksi_jual_detail");
    while ($row=mysqli_fetch_array($result)) {
    ?>
	<tr>
		<td><?= $no++ ?></td>
        <td><?= $row['id_jual'] ?></td>
        <td><?= $row['no_transaksi'] ?></td>
        <td><?= $row['id_barang'] ?></td>
        <td><?= $row['nama_barang'] ?></td>
        <td><?= $row['kategori'] ?></td>
        <td><?= $row['jumlah_jual'] ?></td>
        <td><?= $row['tanggal_jual'] ?></td>
        <td><?= $row['disc'] ?></td>
        <td><?= $row['harga_jual'] ?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>