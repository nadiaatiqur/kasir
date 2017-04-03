<?php ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Cetak Kwitansi</title>
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
<center><h5>KWITANSI PEMBELIAN</h5></center>

<div class="content">
	<div class="container">
		<div class="row">
        	<input type="hidden" name="id_pembelian" value="<?= $_GET['id_pembelian']?>">
            	<div class="col-md-3">
                <p style='margin-top:0;padding-top:0;'><i>Data Pembelian Barang</i></p>
                <?php  
                include "koneksi.php";

                $id_bla=$_GET['id_pembelian'];
                $no=1;
                $result=mysqli_query($link, "SELECT * FROM pembelian WHERE faktur='$id_bla' ");
                $row=mysqli_fetch_assoc($result);
                $kembalian=$row['uang_pembayaran']-$row['sub_total'];
                ?>
                <table>
                	<tr style="border-bottom:1px dashed #ccc;">
                		<td width="150px">NO FAKTUR</td>
                		<td width="10px">:</td>
                		<td><b><?= $row['faktur'] ?></b></td>
					</tr>
    				<tr style="border-bottom:1px dashed #ccc;">
    					<td width="150px">ID PENYUPLAI</td>
                		<td width="10px">:</td>
                		<td><b><?= $row['id_penyuplai'] ?></b></td>
    				</tr>
                	<tr style="border-bottom:1px dashed #ccc;">
                		<td width="150px">NAMA PENYUPLAI</td>
                		<td width="10px">:</td>
                		<td><b><?= $row['nama_penyuplai'] ?></b></td>
					</tr>
    				<tr style="border-bottom:1px dashed #ccc;">
                		<td width="150px">TANGGAL BELI</td>
                		<td width="10px">:</td>
                		<td><b><?= $row['tanggal_beli'] ?></b></td>
					</tr>
    				<tr style="border-bottom:1px dashed #ccc;">
                		<td width="150px">YANG DIBAYAR </td>
                		<td width="10px">:</td>
						<td>Rp.<b><?= number_format($row['uang_pembayaran']) ?></b></td>
    				</tr>
    				<tr style="border-bottom:1px dashed #ccc;">
						<td width="150px">TOTAL BAYAR</td>
                		<td width="10px">:</td>
                		<td>Rp.<b><?= number_format($row['sub_total']) ?></b></td>
					</tr>
    				<tr style="border-bottom:1px dashed #ccc;">
    					<td width="150px">KEMBALIAN</td>
    					<td width="10px">:</td>
    					<td>Rp.<b><?= number_format($kembalian) ?></b></td>
    				</tr>
    				<tr style="border-bottom:1px dashed #ccc;">
                		<td width="150px">STATUS</td>
                		<td width="10px">:</td>
                		<td><b><?= $row['status'] ?></b></td>
					</tr>
            	</table>
        		</div>
                <div class="col-md-9">
                <p style='margin-top:0;padding-top:0;'><i>Tabel Barang Pembelian</i></p>
                <table class="table table-striped table-bordered">
                	<thead>
                		<tr>
                			<th>#</th>
                			<th>ID BARANG</th>
                			<th>NAMA BARANG</th>
                			<th>HARGA BELI</th>
                			<th>JUMLAH BELI</th>
                			<th>TOTAL</th>
                		</tr>
                		</thead>
                		<tbody>
                		<?php  
                		include "koneksi.php";

                		$id_bla=$_GET['id_pembelian'];
                		$no=1;
                		$total_bayar=0;
                		$res=mysqli_query($link, "SELECT a.*,b.uang_pembayaran FROM transaksi_beli_detail as a LEFT JOIN pembelian as b ON a.faktur=b.faktur WHERE a.faktur='$id_bla' ");
                		while ($sql=mysqli_fetch_array($res)) {
                		$total_bayar+=$sql['total'];
                		$bayar=$sql['uang_pembayaran'];
                		$kembalian=$bayar-$total_bayar;
                		?>
                			<tr>
                				<td><?= $no++ ?></td>
                				<td><?= $sql['id_barang'] ?></td>
                				<td><?= $sql['nama_barang'] ?></td>
                				<td align="right">Rp.<?= number_format($sql['harga_beli']) ?></td>
                				<td><?= $sql['jumlah_beli'] ?></td>
                				<td align="right">Rp.<?= number_format($sql['total']) ?></td>
                			</tr>
                			<?php } ?>
                			</tbody>
                			<tfoot>
                				<tr>
                					<td colspan="5">TOTAL BAYAR</td>
                					<td colspan="1" align="right">Rp.<?= number_format($total_bayar) ?></td>
                				</tr>
                				<tr>
                					<td colspan="5">YANG DIBAYAR</td>
                					<td colspan="1" align="right">Rp.<?= number_format($bayar) ?></td>
                				</tr>
                				<tr>
                					<td colspan="5">KEMBALIAN</td>
                					<td colspan="1" align="right">Rp.<?= number_format($kembalian) ?></td>
                				</tr>
                			</tfoot>
                </table>
                </div>
        </div>
        <div class="row">
            <p>
                * Barang yang sudah dibeli tidak dapat dikembalikan<br>
                * Barang-barang yang diservice, apabila tidak diambil dalam jangka 3 bulan, resiko kehilangan bukan menjadi tanggung jawab kami
            <br>
            
            </p>
        </div>
	</div>
</div>
</body>
</html>