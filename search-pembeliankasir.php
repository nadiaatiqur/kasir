<?php  
?>
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
                <h1 align="center">PEMBELIAN KASIR</h1>
                	<div class="row">
                        <div class="col-md-2">
                        <div class="form-group">
                            <a href="tabel-pembelian.php" class="btn btn-lg btn-info"><i class="glyphicon glyphicon-plus"></i>Tambah</a>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <form method="POST" action="">
                            <div class="form-group">
                            <div class = "input-group">
                                 <input type="text" class="form-control input-lg"" placeholder="cari barang" name="kunci">
                                 <span class = "input-group-btn">
                                    <input type="submit" name="submit" class= "btn btn-info btn-lg" value="Cari">
                                 </span>
                            </div>
                       </form>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                	</div><br><br>
                	<table class="table table-striped table-bordered">
						  	<thead>
						  		<tr class="warning">
                                    <th>#</th>
						  			<th>ID BELI</th>
						          	<th>NO FAKTUR</th>
						          	<th>ID PENYUPLAI</th>
                                    <th>NAMA PENYUPLAI</th>
						          	<th>TANGGAL BELI</th>
						          	<th>UANG PEMBAYARAN</th>
                                    <TH>AKSI</TH>
						  		</tr>
						  	</thead>
                            <?php  
                            include "koneksi.php";

                            $no=1;
                            $result=mysqli_query($link, "SELECT * FROM transaksi_beli_detail WHERE id_beli LIKE '%$_POST[kunci]%' or faktur LIKE '%$_POST[kunci]%' or id_barang LIKE '%$_POST[kunci]%' or nama_barang LIKE '%$_POST[kunci]%' ");
                            while ($row=mysqli_fetch_array($result)) {
                                ?>
						  	<tbody>
                                <tr>
                                     <td><?= $no++; ?></td>
                                   <td><?= $row['id_beli'];?></td>
                                   <td><?= $row['faktur'];?></td>
                                   <td><?= $row['id_barang'];?></td>
                                   <td><?= $row['nama_barang'];?></td>
                                   <td><?= $row['tanggal_beli'];?></td>
                                   <td><?php echo number_format($row['harga_beli'],0,',','.');?></td>
                                   <td><?= $row['jumlah_beli'];?></td>
                                   <td><?= $row['total'];?></td>
                                   <td><a href="proses-deletepembeliankasir.php?id=<?php echo $row['id_beli'];?>" onclick="return confirm ('Hapus <?php echo $row['nama_penyuplai'];?> ?');"title="Hapus" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>HAPUS</a></td>
                                </tr>
						  	</tbody>
                            <?php } ?>
						  </table><br><br><br>
                          <a href="Pembelian.php" class="btn btn-default">KELUAR</a>
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