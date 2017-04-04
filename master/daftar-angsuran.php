<?php  
session_start();
if (!isset($_SESSION['username'])) {
    die("Anda belum login");
}
if ($_SESSION['level']!="admin") {
    die("Anda bukan admin");
}
?>
<?php $tanggal=date("Y-m-d"); ?>
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
    <!-- ANIMATE  CSS -->
    <link href="css/animate.css" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="css/prettyPhoto.css" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="css/styleSwitcher.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="css/bola.css">



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
<?php include 'nav-bar.php'; ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <?php include 'side-bar.php'; ?>
    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row" style="margin-bottom:5px;">

                    <h1 align="center">HISTORY ANGSURAN HUTANG</h1>

                    <div class="col-md-3">
                        <form method="POST">
                        <div class="form-group">
                        <div class = "input-group">
                             <input type="text" class="form-control input-lg"" placeholder="cari barang" name="kunci">
                             <span class = "input-group-btn">
                                <input type="submit" name="submit" class= "btn btn-info btn-lg" value="Cari">
                             </span>
                        </div>
                         <p>--Cari Berdasarkan no.faktur--</p>
                        <?php 
                        if (isset($_POST['submit'])) {
                            include "koneksi.php";
                            $no=1;
                            $akbp=mysqli_query($link, "SELECT * FROM history_hutang WHERE faktur='$_POST[kunci]'");
                            $result= mysqli_fetch_array($akbp); 
                            $faktur1=$result['faktur'];
                        }?>
                        <?php
                        if (empty($result)) {
                        ?>
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="primary">
                                        <th>No</th>
                                        <th>ID Hutang</th>
                                        <th>No Faktur</th>
                                        <th>ID Penyuplai</th>
                                        <th>Nama Penyuplai</th>
                                        <th>Pembayaran Awal</th>
                                        <th>Total Bayar</th>
                                        <th>Uang Angsuran</th>
                                        <th>Yang Harus Dibayar</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <?php } else {
                        ?>
                       </form>
                        <div class="container">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="primary">
                                        <th>No</th>
                                        <th>ID Hutang</th>
                                        <th>No Faktur</th>
                                        <th>ID Penyuplai</th>
                                        <th>Nama Penyuplai</th>
                                        <th>Pembayaran Awal</th>
                                        <th>Total Bayar</th>
                                        <th>Uang Angsuran</th>
                                        <th>Yang Harus Dibayar</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  
                                include "koneksi.php";

                                $no=1;
                                $sql=mysqli_query($link, "SELECT * FROM history_hutang WHERE faktur='$_POST[kunci]' ");
                                while ($row=mysqli_fetch_array($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['id_hutang'] ?></td>
                                        <td><?= $row['faktur'] ?></td>
                                        <td><?= $row['id_penyuplai'] ?></td>
                                        <td><?= $row['nama_penyuplai']?></td>
                                        <td><?= $row['uang_pembayaran']?></td>
                                        <td><?= $row['total_bayar']?></td>
                                        <td><?= $row['uang_angsuran']?></td>
                                        <td><?= $row['harus_dibayar'] ?></td>
                                        <td><?= $row['status'] ?></td>
                                        <td>
                                            <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?= $no ?>">Cicil</a>
                                            <!-- Modal -->
                                            <div id="modal<?= $no ?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                 <!-- konten modal-->
                                                 <div class="modal-content">
                                                 <!-- heading modal -->
                                                 <div class="modal-header">
                                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" align="center">Cicil Hutang</h4>
                                                <input type="text" name="tgl_angsur" value="<?= $tanggal ?>" disabled>
                                                </div>
                                                <!-- body modal -->

                                <form method="POST" action="proses-angsur.php">
                                                <div class="modal-body">
                                                    <div class="row"><div class="col-md-6">
                                                    <input type="hidden" name="status" value="<?= $row['status'] ?>">
                                                        <div class="form-group">
                                                        <span>No Faktur </span>
                                                        <input type="text" class="form-control" name="faktur" value="<?= $row['faktur'] ?>" readonly>
                                                        <span>ID Penyuplai</span>
                                                        <input type="text" class="form-control" name="id_penyuplai" value="<?= $row['id_penyuplai'] ?>" readonly>
                                                        <span>Nama Penyuplai</span>
                                                        <input type="text" class="form-control" name="nama_penyuplai" value="<?= $row['nama_penyuplai'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <span>Yang Dibayar</span>
                                                        <input type="text" class="form-control" name="uang_pembayaran" value="<?= $row['uang_pembayaran'] ?>" readonly>
                                                        <span>Total Bayar</span>
                                                        <input type="text" class="form-control" name="total_bayar" value="<?= $row['total_bayar'] ?>" readonly>
                                                        <span>Uang Angsuran</span>
                                                        <input type="text" class="form-control" name="uang_angsuran" placeholder="Rp.">
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <!-- footer modal -->
                                                <div class="modal-footer">
                                                <input type="submit" class="btn btn-info" name="simpan1" value="Simpan Transaksi">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup Modal</button>
                                </form>         
                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <?php
                                include "koneksi.php";
                                $qtmp=mysqli_query($link, "SELECT SUM(uang_angsuran) FROM history_hutang WHERE faktur='$_POST[kunci]' GROUP BY faktur "); 
                                $res=mysqli_fetch_array($qtmp);
                                ?>
                                <tfoot>
                                    <td colspan="7">Total Keseluruhan Uang Angsuran</td>
                                    <td colspan="5" align="center">Rp.<?= number_format($res['SUM(uang_angsuran)']) ?></td>
                                </tfoot>
                            </table>
                        </div>
                        <a href="rekam-jejak-cicilhutang.php?id=<?= $faktur1 ?>" class="btn btn-primary">Cetak</a>
                        <?php } ?>
                        <a href="hutang.php" class="btn btn-default">Kembali</a>
                    </div>
                        
                      </section>
                  </div>
              </div>
              <!-- row end -->
                </section><!-- /.content -->
                <div class="footer-main">
                    Copyright &copy Director, 2014
                </div>
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