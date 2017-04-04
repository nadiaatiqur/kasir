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
            
                <?php include"nav-bar.php"; ?>

                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <?php include"side-bar.php"; ?>
                    </aside>

                <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row" style="margin-bottom:5px;">

                        
                        <div class="col-md-4">
                        <?php  
                        include "koneksi.php";
                        $ko=mysqli_query($link, "SELECT no_transaksi, COUNT(*) FROM penjualan GROUP BY no_transaksi");
                        $mel=mysqli_num_rows($ko);
                        ?>
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-red"><i class="fa fa-shopping-cart"></i></span>
                                <div class="sm-st-info">
                                    <span><?= $mel." Transaksi" ?></span>
                                    Banyak Transaksi Jual
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <?php
                        include "koneksi.php";
                        $sql217=mysqli_query($link, "SELECT SUM(jumlah_bayar) FROM penjualan WHERE YEAR(tanggal_jual) = YEAR(NOW()) AND MONTH(tanggal_jual) = MONTH(NOW()) GROUP BY MONTH(tanggal_jual)");
                        while ($res=mysqli_fetch_array($sql217)) {
                        ?>
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-blue"><i class="fa fa-money"></i></span>
                                <div class="sm-st-info">
                                    <span>Rp.<?= number_format($res['SUM(jumlah_bayar)'],2,',','.') ?></span>
                                    Pemasukkan PerBulan
                                </div>
                            </div>
                         <?php } ?>
                        </div>
                        <div class="col-md-4">
                        <?php
                        include "koneksi.php";
                        $up=mysqli_query($link, "SELECT id_user, COUNT(*) FROM user WHERE level='petugas' GROUP BY id_user ");
                        $koe=mysqli_num_rows($up);
                        ?>
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-user"></i></span>
                                <div class="sm-st-info">
                                    <span><?= $koe ?></span>
                                    Petugas
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="row">

                        <div class="col-md-9">
                            <!--earning graph start-->
                            <section class="panel">
                                <header class="panel-heading">
                                    Grafik Penjualan Barang
                                </header>
                                <div class="panel-body">
                                    <canvas id="linechart" width="600" height="330"></canvas>
                                </div>
                            </section>
                                        <!--earning graph end-->

                        </div>
                                    <div class="col-lg-3">

                                        <!--chat start-->
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Notifications
                                            </header>
                                                <div class="panel-body" id="noti-box">

                                                <div class="alert alert-danger">
                                                <?php  
                                                include "koneksi.php";
                                                $res=mysqli_query($link, "SELECT * FROM barang WHERE jumlah_barang <='100' ");
                                                $om=mysqli_fetch_array($res);
                                                ?>
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
														<strong>WARNING!!!</strong> Sisa barang <?= $om['nama_barang'] ?> tinggal <?= $om['jumlah_barang'] ?>. Segera isi ulang.                                                        
                                                </div>
												<div class="alert alert-success">
                                                    <?php  
                                                    include "koneksi.php";
                                                    $res=mysqli_query($link, "SELECT * FROM user WHERE level='petugas' ORDER BY id_user DESC");
                                                    $kor=mysqli_fetch_array($res);
                                                    ?>
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Berhasil!</strong> Petugas <b><?= $kor['nama_pengguna']?></b>  dengan user <b><?= $kor['username'] ?></b> telah berhasil ditambahkan.
                                                   </div>
                                                <div class="alert alert-info">
                                                <?php  
                                                include "koneksi.php";
                                                $res=mysqli_query($link, "SELECT * FROM user WHERE level='pelanggan' ORDER BY id_user DESC ");
                                                $kor1=mysqli_fetch_array($res);
                                                ?>
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Berhasil!</strong> Pelanggan <b><?= $kor1['nama_pengguna'] ?></b> dengan user <b><?= $kor1['username'] ?> </b> telah berhasil ditambahkan.
                                                </div>
                                                <div class="alert alert-warning">
                                                <?php  
                                                include "koneksi.php";
                                                $res=mysqli_query($link, "SELECT * FROM penyuplai ORDER BY id_penyuplai DESC");
                                                $kor2=mysqli_fetch_array($res);
                                                ?>
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Berhasil!</strong> Penyuplai <b><?= $kor2['nama_penyuplai'] ?></b> telah berhasil ditambahkan.
                                                </div>
                                                <div class="alert alert-block alert-danger">
                                                <?php  
                                                include "koneksi.php";
                                                $res=mysqli_query($link, "SELECT * FROM barang ORDER BY id_barang DESC");
                                                $kor3=mysqli_fetch_array($res);
                                                ?>
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Berhasil!</strong> <b><?= $kor3['nama_barang'] ?></b> telah berhasil ditambahakan ke rak Barang.
                                                </div>
                                                <div class="alert alert-success">
                                                    <?php  
                                                    include "koneksi.php";
                                                    $res=mysqli_query($link, "SELECT a.*, b.nama_barang FROM pembelian as a LEFT JOIN transaksi_beli_detail as b ON a.faktur=b.faktur WHERE a.id_beli ORDER BY id_beli DESC");
                                                    $kor4=mysqli_fetch_array($res);
                                                    ?>
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                       	<strong>Pembelian Barang!</strong><br>
                                                        No. Faktur <b><?= $kor4['faktur'] ?></b> telah melakukan pembelian barang <b><?= $kor4['nama_barang'].","?></b> oleh penyuplai <b><?= $kor4['nama_penyuplai'] ?></b> dengan status <b><?= $kor4['status'] ?></b>.
                                                </div>
                                                <div class="alert alert-info">
                                                <?php  
                                                include "koneksi.php";
                                                $res=mysqli_query($link, "SELECT a.*, b.nama_barang, b.disc FROM penjualan as a LEFT JOIN transaksi_jual_detail as b ON a.no_transaksi=b.no_transaksi WHERE a.no_transaksi ORDER BY no_transaksi DESC ");
                                                $kor5=mysqli_fetch_array($res);
                                                ?>
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Penjualan!</strong><br>
                                                        Pada tanggal <b><?= $kor5['tanggal_jual'] ?></b> Pelanggan <b><?= $kor5['nama_pelanggan'] ?></b> dengan No.Faktur <b><?= $kor5['no_transaksi'] ?></b> melakukan pembelian <b><?= $kor5['nama_barang']."," ?></b> dengan total <b>Rp.<?= number_format($kor5['total_bayar'],0,",",".") ?></b>, yang telah dipotong <b>Rp.<?= number_format($kor5['potongan'],0,",",".") ?></b> dan dengan Discount <b><?= $kor5['disc'] ?></b>% dinyatakan status <b><?= $kor5['status'] ?></b>
                                                </div>

                                                </div>

                                        </section>



                      </div>

                        
                      </section>
                  </div>
              </div>
              <!-- row end -->
                </section><!-- /.content -->
               
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


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
<?php  
include "koneksi.php";

$sql=mysqli_query($link, "SELECT date_format(tanggal_jual, '%b') as bulan FROM transaksi_jual_detail");
$id=mysqli_fetch_array($sql);
$res=mysqli_query($link, "SELECT * FROM transaksi_jual_detail ");
?>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: [<?php while ($ko=mysqli_fetch_array($sql)) { echo "'".$ko["bulan"]."',"; }?>],
                    datasets: [
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [<?php while ($gor=mysqli_fetch_array($res)) { echo $gor["harga_jual"].","; } ?>]
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