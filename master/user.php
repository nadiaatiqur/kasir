<?php  
session_start();
if (!isset($_SESSION['username'])) {
    die("Anda belum login");
}
if ($_SESSION['level']!="admin") {
    die("Anda bukan admin");
}
?>
<!doctype html>
<html lang="en">
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

                     <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <a href="daftar-user.php" class="btn btn-info"><span class="glyphicon glyphicon-user"> DaftarUser</span></h4></a>
                            </div>

                            <div class="container">
                            <h1 align="center">Profile</h1>
                            <hr>
                          <div class="row">
                              <!-- left column -->
                              <?php
                              include 'koneksi.php';
                              
                              $result=mysqli_query($link, "SELECT * FROM user WHERE level='admin' ");
                              $p=mysqli_fetch_array($result);
                              ?>
                              <!-- edit form column -->
                              <div class="col-md-9 personal-info">
                                <div class="alert alert-info alert-dismissable">
                                  <a class="panel-close close" data-dismiss="alert">×</a> 
                                  <i class="fa fa-coffee"></i>
                                  Isi kolom yang ada di bawah 
                                </div>
                                <h3>Personal info</h3>
                                <table class="tabel table-bordered col-md-8">
                                <form class="form-horizontal" role="form">
                                <tr>
                                <th>
                                  <div class="form-group">
                                    <label class="col-lg-3 control-label">Username:</label>
                                </th>
                                <th>
                                    <div class="col-lg-15">
                                      <input class="form-control" type="text" value="<?= $p['username'] ?>">
                                    </div>
                                  </div>
                                  </th>
                                  </tr>
                                  <tr>
                                  <div class="form-group">
                                  <th>
                                    <label class="col-lg-3 control-label">No.telp:</label>
                                    </th>
                                    <th>
                                    <div class="col-lg-15">
                                      <input class="form-control" type="text" value="<?= $p['telpon'] ?>">
                                      </th>
                                    </div>
                                  </div>
                                  </tr>
                                  <tr>
                                  <div class="form-group">
                                  <th>
                                    <label class="col-lg-3 control-label">Alamat:</label>
                                    </th>
                                    <th>
                                    <div class="col-lg-15">
                                      <textarea class="form-control" type="text"><?= $p['alamat'] ?></textarea>
                                    </div>
                                  </div>
                                  </th>
                                  </tr>
                                  <tr>
                                  <div class="form-group">
                                  <th>
                                  <label class="col-md-3 control-label">Status</label>
                                  </th>
                                  <th>
                                  <div class="col-md-">
                                  <select class="form-control" name="level">
                                  <option><?= $p['level'] ?></option>
                                  <option>admin</option>
                                  <option>petugas</option>
                                  <option>pelanggan</option>
                                  </select>
                                  </div>
                                  </div>
                                  </th>
                                  </tr>
                                  <tr>
                                  <div class="form-group">
                                  <th>
                                    <label class="col-md-3 control-label">Password:</label>
                                    </th>
                                    <th>
                                    <div class="col-md-20">
                                      <input class="form-control" type="text" value="<?= $p['password'] ?>">
                                    </div>
                                    </div>
                                    </th>
                                    </tr>
                                </form>
                              </div>
                          </div>
                          </table>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
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
</body>
</html>
