<?php  
session_start();
if (!isset($_SESSION['username'])) {
    die("Anda belum login");
}
if ($_SESSION['level']!="admin") {
    die("Anda bukan admin");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Jejak Rekam Cicilan Hutang</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">
            .w3-theme {color:#fff !important;background-color:#4CAF50 !important;}
    .w3-btn {background-color:#4CAF50 ;margin-bottom:4px;}
    .w3-code{border-left:4px solid #4CAF50}
    @media only screen and (max-width: 601px) {.w3-top{position:static;} #main{margin-top:0px !important}}


    .tbl th.header { 
        background-image: url(js/table.sorter/themes/blue/bg.gif);
        cursor: pointer; 
        font-weight: bold; 
        background-repeat: no-repeat; 
        background-position: center left; 
        padding-left: 20px; 
        margin-left: -1px; 
    }

    .tbl th.headerSortUp { 
      background-image: url(js/table.sorter/themes/blue/asc.gif);
      cursor: pointer; 
        font-weight: bold; 
        background-repeat: no-repeat; 
        background-position: center left; 
        padding-left: 20px; 
        margin-left: -1px; 

    } 
    .tbl th.headerSortDown { 
      background-image: url(js/table.sorter/themes/blue/desc.gif);
      cursor: pointer; 
        font-weight: bold; 
        background-repeat: no-repeat; 
        background-position: center left; 
        padding-left: 20px; 
        margin-left: -1px; 
    }
    #flash {
        position:absolute;
        top:0px;
        left:0px;
        z-index:5000;
        width:100%;
        height:500px;
        background-color:#c00;
        display:none;
    }

    #left-nav {
        overflow: hidden;
    }
 
    .ui-datepicker {
        font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
        font-size: 80.5%;
    }
    .ui-tooltip-content {
        font-size: 80.5%;
    }
    ui-autocomplete {
        font-size: 80%;
    }
    </style>
</head>
<body>
<h4 style="padding-bottom:0;margin-bottom:0;"><b style="color: orange;">CI </b><b style="color: gray;">MasCitra.com</b></h4>
<div class="row">
	<div class="col-md-6">Consultan IT<br>
		Jl.Bungur No.130 Kec.Patrang Kab.Jember Prov.Jawa Timur
		Telp. (0741) 670523
	</div>
	<div class="col-md-6">
		<span align="right">
	<br>
		</span>
	</div>
</div>
<div style="border-bottom:3px solid #ccc;"></div>
<center><h5>Rekam Jejak Cicilan Hutang</h5></center>
<div class="content">
	<div class="container">
		<table class="table table-bordered">
		<input type="hidden" name="id" value="<?= $_GET['id']?>">
        <thead>
        	<tr class="primary">
            	<th>No</th>
                <th>Faktur</th>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal cicil</th>
                <th>Total Bayar</th>
                <th>Uang Pembayaran Awal</th>
                <th>Uang Angsuran</th>
                <th>Yang Harus Dibayar</th>
                <th>Status</th>
        	</tr>
        </thead>
        <tbody>
        <?php  
        include "koneksi.php";
        $id=$_GET['id'];
        $no=1;
        $sql=mysqli_query($link, "SELECT * FROM history_piutang WHERE no_transaksi='$id' ");
        while ($row=mysqli_fetch_array($sql)) {
        ?>
        <tr>
        	<td><?= $no++ ?></td>
            <td><?= $row['no_transaksi'] ?></td>
            <td><?= $row['id_pelanggan'] ?></td>
            <td><?= $row['nama_pelanggan'] ?></td>
            <td><?= $row['tanggal_cicil'] ?></td>
            <td><?= $row['total_bayar'] ?></td>
            <td><?= $row['uang_pembayaran'] ?></td>
            <td><?= $row['uang_angsuran'] ?></td>
            <td><?= $row['harus_dibayar'] ?></td>
            <td><?= $row['status'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
    <?php
    include "koneksi.php";
    $qtmp=mysqli_query($link, "SELECT SUM(uang_angsuran) FROM history_piutang WHERE no_transaksi='$id' GROUP BY no_transaksi "); 
    $res=mysqli_fetch_array($qtmp);
                                ?>
    <tfoot>
	    <tr>
	    	<td colspan="7">Total Keseluruhan Uang Angsuran</td>
        	<td colspan="5" align="center">Rp.<?= number_format($res['SUM(uang_angsuran)']) ?></td>
	    </tr>
    </tfoot>
    </table>
	</div>
</div>
</body>
</html>