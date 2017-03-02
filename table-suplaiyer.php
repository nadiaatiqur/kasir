<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_supliyer.xls");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<CENTER><h1>DATA SUPLIYER</h1></CENTER>
<table border="1">
	<tr>
		<TH>KODE</TH>
	    <TH>NAMA BARANG</TH>
	    <TH>SUPLAIYER</TH>
	    <TH>ALAMAT</TH>
	    <TH>TELEPON</TH>
	    <TH>EMAIL</TH>
	    <TH>KONTAK</TH>
	    <TH>REKENING</TH>
	    <TH>KETERANGAN</TH>
	</tr>
	<?php  
	include "koneksi.php";
	
	$result=mysqli_query($link, "SELECT * FROM penyuplai");
    while ($row=mysqli_fetch_array($result)) {
	?>
	<tr>
		 <td><?php echo $row['id_penyuplai']; ?></td>
		 <td><?php echo $row['nama_barang']; ?></td>
		 <td><?php echo $row['nama_penyuplai']; ?></td>
		 <td><?php echo $row['alamat']; ?></td>
		 <td><?php echo $row['telpon']; ?></td>
		 <td><?php echo $row['kontak']; ?></td>
		 <td><?php echo $row['email']; ?></td>
		 <td><?php echo $row['rekening']; ?></td>
		 <td><?php echo $row['keterangan'];?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>