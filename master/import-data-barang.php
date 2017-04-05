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
    .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
  </style>
</head>
<body class="skin-black">
<?php include 'nav-bar.php'; ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <?php include "side-bar.php"; ?>
    </aside>

    <aside class="right-side">
        <div class="container">
            <h2>Import Import Data Barang CSV</h2>
            <?php if(!empty($statusMsg)){
                echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
            } ?>
            <section class="content">
                <a href="tambah-data-barang.php" type="button" class="btn btn-warning">Buat Template</a>
            </section>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Members list
                    <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import Members</a>
                </div>
                <div class="panel-body">
                    <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                        <input type="file" name="file" />
                        <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="danger">
                                <TH>ID BARANG</TH>
                                <TH>NAMA BARANG</TH>
                                <TH>KATEGORI</TH>
                                <TH>JUMLAH</TH>
                                <TH>SATUAN</TH>
                                <TH>SPESIFIKASI</TH>
                                <TH>HARGA BELI</TH>
                                <TH>HARGA JUAL</TH>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "koneksi.php";

                            $result=mysqli_query($link, "SELECT * FROM barang ORDER BY id_barang");
                            if($sma=mysqli_num_rows($result) > 0){ 
                                while($row = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                              <td><?php echo $row['id_barang']; ?></td>
                              <td><?php echo $row['nama_barang']; ?></td>
                              <td><?php echo $row['kategori']; ?></td>
                              <td><?php echo $row['jumlah_barang']; ?></td>
                              <td><?php echo $row['satuan']; ?></td>
                              <td><?php echo $row['spesifikasi']; ?></td>
                              <td><?php echo $row['harga_beli']; ?></td>
                              <td><?php echo $row['harga_jual']; ?></td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="5">No member(s) found.....</td></tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <?php include '1.php'; ?>
        </div>
        <a href="backoffice.php" type="button" class="btn btn-primary btn-lg">Keluar</a>
    </aside>

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
</body>
</html>