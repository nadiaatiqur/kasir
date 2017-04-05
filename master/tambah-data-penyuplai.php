<?php  
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_penyuplai.xls");
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
            <th>id_penyuplai</th>
            <th>nama_penyuplai</th>
            <th>alamat</th>
            <th>telpon</th>
            <th>kontak</th>
            <th>email</th>
            <th>rekening</th>
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