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
<table border="1">
    <thead>
        <tr>
            <TH>id_barang</TH>
            <TH>nama_barang</TH>
            <TH>kategori</TH>
            <TH>jumlah_barang</TH>
            <TH>satuan</TH>
            <TH>spesifikasi</TH>
            <TH>harga_beli</TH>
            <TH>harga_jual</TH>
            <th>nama_penyuplai</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
        </tr>
    </tbody>
</table>
<p>
    * id_barang mohon untuk jangan diisi karena dapat mengganggu sistem<br>
    * ketika diimport pastikan file anda disimpan dalam format .csv(Comma delimited)<br>
    * ketika ingin mengimport mohon untuk menghapusnya karena dapat mengganggu sistem<br>
</p>
</body>
</html>