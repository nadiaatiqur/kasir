<?php  ?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
    <title>Toko Laris</title>
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
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                Toko Laris
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-left">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                       <li class="dropdown users-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-users fa-lg"></i>
                                <span>MASTER<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="barang.php">
                                        <h5>Barang</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="suplier.php">
                                        <h5>Suplier</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="pelanggan.php">
                                        <h5>Pelanggan</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="backoffice.php">
                                        <h5>Backoffice</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h5>Kalkulator</h5>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h5>Pengaturan</h5>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- end user -->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user fa-lg"></i>
                                <span>User <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                <li class="divider"></li>

                                    <li>
                                        <a href="user.php">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <a data-toggle="modal" href="#modal-user-settings">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="index.html"><i class="fa fa-unlock-alt fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <div class="content">
                	<div class="container">
                	<h1><center>Kwitansi Penjualan</center></h1>
                		<div class="row">
                		<h4 style='margin-bottom:0;padding-bottom:0;'>Printout Penjualan</h4>
						<p style='margin-top:0;padding-top:0;'><i>Data Penjualan Barang</i></p>
                		</div>
                		<div class="row">
                		<input type="hidden" name="id" value="<?= $_GET['id']?>">
                		<?php  
                		include "koneksi.php";

                		$id=$_GET['id'];
                		$res=mysqli_query($link, "SELECT * FROM penjualan WHERE no_transaksi='$id' ");
                		$row=mysqli_fetch_array($res);
                		?>
                			<table>
                				<tr style='border-bottom:1px dashed #ccc;'>
                					<td width="150px">No. Transaksi</td>
                					<td width="10px">:</td>
                					<td><b><?php echo $row['no_transaksi']; ?></b></td>
                				</tr>
                				<tr style="border-bottom:1px dashed #ccc;">
                					<td width="150px">ID PELANGGAN</td>
                					<td width="10px">:</td>
                					<td><b><?php echo $row['id_pelanggan']; ?></b></td>
                				</tr>
                				<tr style="border-bottom:1px dashed #ccc;">
                					<td width="150px">NAMA PELANGGAN</td>
                					<td width="10px">:</td>
                					<td><b><?php echo $row['nama_pelanggan']; ?></b></td>
                				</tr>
                				<tr style="border-bottom:1px dashed #ccc;">
                					<td width="150px">TANGGAL BELI</td>
                					<td width="10px">:</td>
                					<td><b><?php echo $row['tanggal_jual']; ?></b></td>
                				</tr>
                				<tr style="border-bottom:1px dashed #ccc;">
                					<td width="150px">TOTAL BAYAR</td>
                					<td width="10px">:</td>
                					<td>Rp.<b><?php echo number_format($row['total_bayar'],0,'.',','); ?></b></td>
                				</tr>
                				<tr style="border-bottom:1px dashed #ccc;">
                					<td width="150px">YANG DIBAYAR</td>
                					<td width="10px">:</td>
                					<td>Rp.<b><?php echo number_format($row['jumlah_bayar'],0,'.',','); ?></b></td>
                				</tr>
                				<tr style="border-bottom:1px dashed #ccc;">
                					<td width="150px">POTONGAN HARGA</td>
                					<td width="10px">:</td>
                					<td>Rp.<b><?php echo number_format($row['potongan'],0,'.',','); ?></b></td>
                				</tr>
                				<tr style="border-bottom:1px dashed #ccc;">
                					<td width="150px">STATUS</td>
                					<td width="10px">:</td>
                					<td><b><?php echo $row['status']; ?></b></td>
                				</tr>
                			</table><br>
                		</div>
                		<div class="row">
                		<p style='margin-top:0;padding-top:0;'><i>Data Barang Beli</i></p>
                			<table class="table table-striped table-bordered">
	                			<thead>
		                			<tr>
	                					<th>#</th>
	                					<th>ID BARANG</th>
	                					<th>NAMA BARANG</th>
	                					<th>HARGA</th>
	                					<th>JUMLAH</th>
	                					<th>DISCOUNT</th>
	                					<th>TOTAL</th>
	                				</tr>
	                			</thead>
                				<?php  
                				include "koneksi.php";

                				$id=$_GET['id'];
                				$no=1;
                				$sql=mysqli_query($link, "SELECT a.*, b.total_bayar, b.jumlah_bayar, b.potongan FROM transaksi_jual_detail as a LEFT JOIN penjualan as b ON a.id_pelanggan = b.id_pelanggan WHERE a.no_transaksi='$id' ") or die(mysqli_error($link));
                				while ($res=mysqli_fetch_array($sql)) {
                					$harga_disc = $res['harga_jual'] - (($res['harga_jual'] * $res['disc']) / 100);
                					$total_bayar = $total_ = $harga_disc * $res['jumlah_jual'];
                					$kembalian=$res['jumlah_bayar'] - $res['total_bayar'];
                				?>
                				<tbody>
	                				<tr>
	                					<td><?php echo $no++ ;?></td>
	                					<td align="center"><?php echo $res['id_barang']; ?></td>
	                					<td align="center"><?php echo $res['nama_barang']; ?></td>
	                					<td align="right">Rp.<?php echo number_format($res['harga_jual'],0,'.',','); ?></td>
	                					<td align="center"><?php echo $res['jumlah_jual']; ?> unit</td>
	                					<td align="center"><?php echo $res['disc']; ?>%</td>
	                					<td align="right">Rp. <?php echo number_format($total_,0,'.',','); ?></td>
	                				</tr>
                				</tbody>
                				<tfoot>
                					<tr>
                						<td colspan="6">TOTAL HARGA</td>
                						<td colspan="1" align="right">Rp. <?php echo number_format($total_,0,'.',','); ?></td>
                					</tr>
                					<tr>
                						<td colspan="6">POTONGAN</td>
                						<td colspan="1" align="right">Rp.<?php echo number_format($res['potongan'],0,'.',','); ?></td>
                					</tr>
                					<tr>
                						<td colspan="6">TOTAL BAYAR</td>
                						<td colspan="1" align="right">Rp.<?php echo number_format($res['total_bayar']); ?></td>
                					</tr>
                					<tr>
                						<td colspan="6">YANG DIBAYAR</td>
                						<td colspan="1" align="right">Rp.<?php echo number_format($res['jumlah_bayar']); ?></td>
                					</tr>
                					<tr>
                						<td colspan="6">KEMBALIAN</td>
                						<td colspan="1" align="right"><b>Rp.<?php echo number_format($kembalian); ?></b></td>
                					</tr>
                				</tfoot>
                			</table>
                		</div>
                		<a href="penjualan.php" class="btn btn-danger"><span class="glyphicon glyphicon-share-alt"></span>Back</a>
                		<a href="tabel-penjualan.php" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Transaksi Baru</a>
                		<a href="cetakan-penjualan.php?id_transaksi=<?php echo $res['no_transaksi'] ;?>" onclick="return confirm ('Cetak <?php echo $res['no_transaksi'];?> dengan nama <?php echo $res['nama_pelanggan']; ?> ?');"title="Cetak" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> Cetak</a>
                		<?php } ?>
                	</div>
                </div>
</body>
</html>