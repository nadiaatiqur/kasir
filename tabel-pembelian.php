<?php $tanggal= date("Y-m-d"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
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

                <div class="container">

        <div class='w3-row-padding'>
                	<h1 align="center">Data Pembelian</h1>
                	<div style="margin-left:250px;">
    <div id="main" class="w3-container" style="margin-top:110px">
        <div class='w3-container w3-small w3-pale-green w3-leftbar w3-border-green'>
        <a href="pembelian.php" class="btn btn-danger"><i class="glyphicon glyphicon-share-alt"></i>back</a>
            <h4 style='margin-bottom:0;padding-bottom:0;'>Form Transaksi Pembelian</h4>
            <p style='margin-top:0;padding-top:0;'><i>Input Data Pembelian Barang</i></p>
        </div>
                <div class='w3-col s3 w3-card'>
                    Input Barang
                    <div style='border-bottom:1px dashed #ccc;'></div><br>
                    <form action='beli-barang.php' method='POST' class='w3-container'>
                    <table class="table table-bordered">
                    <tr>
                        <div class='w3-card-2 w3-light-blue col-xs-4'>
                            <label class='w3-label w3-text-black w3-right'>Date :</label>
                            <input type="text" name="tgl" value="<?php echo $tanggal?>"><br>
                            <input type='hidden' name='harga2' id='harga2'><br>
                            <input type="text" name="id" class="form-control" placeholder="ketik id barang ..." required><br>
                            <input type='text' name='barang' id='barang' placeholder='ketik nama barang ...' class="form-control" required>

                            <label class='w3-label w3-text-black'>Harga Beli (Rp):</label>
                            <input type='text' name='hargabeli' id='harga' class="form-control" required>
                            <p>
                            <div class='w3-row'>
                                <div class='w3-col s8'>
                                    <label class='w3-label w3-text-black w3-right'>JUMLAH:</label>
                                </div>
                                <div class='w3-col s4 col-xs-4'>
                                    <input type='text' name='jumlah' placeholder='0' id='qty' class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </tr>
                    </table>
                            <p><!--<button class="btn btn-warning" onclick="return confirm('Klik OK untuk melanjutkan');"><i class='fa fa-cart-plus'></i> Tambah Barang</button>--><input type="submit" name="submit" class="btn btn-warning fa fa-cart-plus" value="Tambah Barang" onclick="return confirm('Klik OK untuk melanjutkan');"></p>
                    </form>
                            </div>
                            </p>
                        </form>
                    </div>

                    <br>
                </div>

                <form method="POST" action="proses-pembelianbarang.php">
                        <div class="row">
                        <h4>DATA PEMBELIAN</h4>
                            <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <TH>#</TH>
                                    <th>ID BELI</th>
                                    <th>ID BARANG</th>
                                    <th>BARANG</th>
                                    <th>TANGGAL BELI</th>
                                    <th>JUMLAH BELI</th>
                                    <th>HARGA BELI</th>
                                    <th>SUB TOTAL</th>
                                    <TH>AKSI</TH>
                                </tr>
                            </thead>
                            <?php  
                            include "koneksi.php";

                            $no=1;
                            $result=mysqli_query($link, "SELECT * FROM transaksi_beli");
                            $subtotal=0;
                            while ($row=mysqli_fetch_array($result)) {
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['id_beli']; ?></td>
                                <td><?php echo $row['id_barang']; ?>
                                    <input type="hidden" name="id_barang" id="id_barang" value="<?php echo $row['id_barang']; ?>">
                                </td>
                                <td><?php echo $row['nama_barang']; ?>
                                    <input type="hidden" name="nama_barang" id="nama_barang" value="<?php echo $row['nama_barang']; ?>">
                                </td>
                                <td><?php echo $row['tanggal_beli']; ?></td>
                                <td>Rp.<?php echo number_format($row['harga_beli'],0,',','.'); ?>
                                    <input type="hidden" name="harga_beli" value="<?php echo $row['harga_beli']; ?>">
                                </td>
                                <TD><?php echo $row['jumlah_beli']." UNIT"; ?>
                                    <input type="hidden" name="jumlah_beli" value="<?php echo $row['jumlah_beli'];?>">
                                </TD>
                                <td>Rp.<?php echo number_format($row['total'],0,',','.'); ?>
                                    <input type="hidden" name="total" value="<?php echo $row['total']; ?>">
                                </td>
                                <TD>
                                    <a href="proses-deletetabelpembelian.php?id=<?php echo $row['id_beli'];?>" onclick="return confirm ('Hapus <?php echo $row['nama_barang'];?> ?');"title="Hapus" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                </TD>
                            </tr>
                            </tbody>
                            <?php } ?>
                            <?php  
                            include "koneksi.php";

                            $result1=mysqli_query($link, "SELECT SUM(total) FROM transaksi_beli");
                            while ($q=mysqli_fetch_array($result1)) {
                            ?>
                            <tfoot>
                            <tr>
                                <td colspan='7'><b>TOTAL</td>
                                <td colspan='2'>Rp.<?php echo number_format($q['SUM(total)'],0,',','.'); ?><input type="hidden" name="subtotal" value="<?php echo $q['SUM(total)']; ?>"></td>      
                            </tr>
                            </tfoot>
                                    <?php } ?>
                            </table>
                            <div class="row">
                                <div class="col-md-6">
                                    
                                </div>
                                <div class="col-md-6">
                                 <div class="form-group">
                                    <input type='text' name='no_faktur' id='no_faktur' class="form-control" placeholder='Nomor Faktur ...' required>
                                 </div>
                                 <div class="form-group">
                                    <input type='text' name='id_suplier' id='id_suplier' class="form-control" placeholder='ketik ID Supplier ...' required>
                                 </div>
                                 <div class="form-group">
                                    <input type='text' name='suplier' id='suplier' class="form-control" placeholder='ketik Nama Supplier ...' required>
                                 </div>
                                 <div class="form-group">
                                    <label for="user">Tanggal Beli :</label>
                                    <input type='text' name='tglbeli' class="form-control" value='<?php echo $tanggal= date("Y-m-d");?>' required>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="radio" name="status" value="LUNAS" checked>
                                        <span>LUNAS</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="status" value="HUTANG">
                                        <span>HUTANG</span>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <input type='text' name='pembayaran' id='pembayaran' class="form-control" placeholder='Uang yang dibayarkan ...' required>

                                    <p><input type="submit" name="simpan" class="form-control btn btn-info fa fa-save" onclick=\"return confirm('Klik OK untuk melanjutkan');\" value="Simpan Pembelian"></p>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

            </div>
                </div>


<!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
	    <!--  WOW ANIMATION SCRIPTS -->
	    <script src="js/wow.min.js"></script>
	    <!-- EASY PIE CHART SCRIPTS -->
	    <script src="js/jquery.easypiechart.min.js"></script>
	    <!-- PRETTY PHOTO SCRIPTS -->
	    <script src="js/jquery.prettyPhoto.js"></script>
	    <!--  STYLE SWITCHER SCRIPTS -->
	    <script src="js/styleSwitcher.js"></script>
	    <!--  CUSTOM SCRIPTS -->
	    <script src="js/custom.js"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
</body>
</html>