<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_pelanggan.xls");

?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>DATA Pelanggan</h1></center>
<table border="1">
	<tr>
		<TH>KODE</TH>
		<TH>NAMA</TH>
		<TH>ALAMAT</TH>
		<TH>TELEFON</TH>
		<TH>STATUS</TH>
		<TH>USERNAME</TH>
		<TH>PASSWORD</TH>
	</tr>
	<?php  
    include "koneksi.php";

    $result=mysqli_query($link, "SELECT id_user, nama_pengguna, alamat, telpon, level, username, password FROM user WHERE level='pelanggan' ");
    while ($row=mysqli_fetch_array($result)) {
    ?>
    <tr>
    	<td><?php echo $row['id_user']; ?></td>
        <td><?php echo $row['nama_pengguna']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['telpon']; ?></td>
        <td><?php echo $row['level']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>