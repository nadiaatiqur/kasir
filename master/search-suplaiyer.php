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
<body>
<body class="skin-black">
<?php include "nav-bar.php"; ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <?php include "side-bar.php"; ?>
     </aside>

<aside class="right-side">

<!-- Main content -->
<section class="content">

<div class="row" style="margin-bottom:5px;">
<h1 align="center">SUPLIER</h1>

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="input-suplaiyer.php" class="btn btn-lg btn-info"><i class="glyphicon glyphicon-plus"></i>Input Suplaiyer</a>
                    </div>  
                    <div class="col-md-5">
                        <form method="POST" action="search-suplaiyer.php">
                        <div class="form-group">
                        <div class = "input-group">
                             <input type="text" class="form-control input-lg"" placeholder="cari suplaiyer" name="key">
                             <span class = "input-group-btn">
                                <input type="submit" name="submit" class= "btn btn-info btn-lg" value="Cari">
                             </span>
                        </div>
                       </form>
                    </div>    
                </div><br><br>
                <table class="table table-striped table-bordered">
                    <form method="" action="">
                        <tr>
                            <th>NO</th>
                            <TH>KODE</TH>
                            <TH>SUPLAIYER</TH>
                            <TH>ALAMAT</TH>
                            <TH>TELEPON</TH>
                            <TH>EMAIL</TH>
                            <TH>KONTAK</TH>
                            <TH>REKENING</TH>
                            <th>OPSI</th>
                        </tr>
                        <?php  
                        include "koneksi.php";

                        $no=1;
                        $key=$_POST['key'];
                        $result=mysqli_query($link, "SELECT * FROM penyuplai WHERE id_penyuplai LIKE '%$key%' or nama_penyuplai LIKE '%$key%' ");
                        while ($row=mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['id_penyuplai']; ?></td>
                            <td><?php echo $row['nama_penyuplai']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['telpon']; ?></td>
                            <td><?php echo $row['kontak']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['rekening']; ?></td>
                            <td>
                                <a href="update-suplier.php?id=<?php echo $row['id_penyuplai'];?>" class="btn btn-info">
                                <span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="proses-deletesuplaiyer.php?id=<?php echo $row['id_penyuplai'];?>" onclick="return confirm ('Hapus <?php echo $row['nama_penyuplai'];?> ?');"title="Hapus" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </form>
                </table>

    </div>
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