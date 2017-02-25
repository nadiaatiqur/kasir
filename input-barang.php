  <!doctype html>
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


        <div class="content">
            <div class="container-fluid">
            <center><h1 for="user">Input Barang</h1></center>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        
                        <div class="row">
                            <form method="POST" action="proses-inputbarang.php">
                            <div class="col-md-6">
                                 <div class="form-group">
                                <label for="user">NAMA BARANG</label>
                                <input type="text" class="form-control" name="nama_barang" placeholder="Nama barang">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="user">KATEGORI BARANG</label>
                                <input type="text" class="form-control" name="kategori" placeholder="kategori barang">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user">JUMLAH BARANG</label>
                                    <input type="text" class="form-control" name="jumlah_barang" placeholder="Jumlah Barang">
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user">SATUAN BARANG</label>
                                    <input type="text" class="form-control" name="satuan" placeholder="Satuan Barang">
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user">HARGA BELI</label>
                                    <input type="text" class="form-control" name="harga_beli" placeholder="Harga Beli">
                                </div>
                            </div> 
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user">HARGA JUAL</label>
                                    <input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual">
                                </div>
                            </div>     
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <label for="user">SPESIFIKASI BARANG</label>
                            <textarea class="form-control" name="spesifikasi" placeholder="SPESIFIKASI"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user">SUPLIER</label>
                                    <input type="text" class="form-control" name="penyuplai" placeholder="Suplier"> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user">NO.TELEFON</label>
                                    <input type="text" class="form-control" name="notelpon" placeholder="No.telefon">
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user">EMAIL</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user">KONTAK PRIBADI</label>
                                    <input type="text" class="form-control" name="kontak_pribadi" placeholder="Kontak Pribadi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user">ALAMAT</label>
                                    <textarea class="form-control" name="alamat_penyuplai" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user">NO.REKENING</label>
                                    <input type="text" class="form-control" name="rekening" placeholder="No.Rekening">
                                </div> 
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user">KETERANGAN</label>
                                    <input type="text" class="form-control" name="keterangan" placeholder="keterangan barang datang">
                                </div> 
                            </div>                           
                        </div>
                        <div>
                            <button type="submit" name="input" class="btn btn-info btn-lg">Simpan</button>
                           <a href="barang.php" class="btn btn-default btn-lg">Keluar</a>
                        </div>
                        </form>
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
