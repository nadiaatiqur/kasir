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
    <link href="css/dateran  gepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
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
<?php include 'nav-bar.php'; ?>
                    <div class="content">
                    <div class="container">
                    <h1 align="center">Data Penjualan</h1>
                        <div align="left" class='w3-container w3-small w3-pale-green w3-leftbar w3-border-green'>
                        <a href="penjualan.php" class="btn btn-danger"><i class="glyphicon glyphicon-share-alt"></i>back</a>
                            <h4 style='margin-bottom:0;padding-bottom:0;'>Form Transaksi Penjualan</h4>
                            <p style='margin-top:0;padding-top:0;'><i>Input Data Penjualan Barang</i></p>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <form method="POST">
                                        <div class="form-group">
                                        <div class = "input-group">
                                             <input type="text" class="form-control" name="id_barang" placeholder="Masukkan barang">
                                             <span class = "input-group-btn">
                                                <input type="submit" name="submit" class= "btn btn-info" value="Cari">
                                             </span>
                                        </div>
                                        <!--ini untuk scrip cari-->
                                <?php 
                                if (isset($_POST['submit'])) {
                                include "koneksi.php";
                                $id_barang=$_POST['id_barang'];
                                $result= mysqli_fetch_array(mysqli_query($link, "SELECT * FROM barang WHERE id_barang='$id_barang'")); 
                                }?>
                                <?php
                                if (empty($result)) {
                                ?>

                                <?php } else {
                                ?>
                                </form>
                                <form method="POST" action="jual-barang.php">
                                    <div class="form-group">
                                        <label>ID BARANG</label> :<?php echo $result['id_barang'];?><input type="hidden" class="form-control" name='id_barang' value="<?php echo $result['id_barang'];?>">
                                    </div>  
                                    <div class="form-group">
                                        <label>NAMA BARANG</label> :<?php echo $result['nama_barang'];?><input type="hidden" class="form-control" name="nama_barang" value="<?php echo $result['nama_barang'];?>">
                                    </div>  
                                    <div class="form-group">
                                      <label>KATEGORI</label> :<?php echo $result['kategori'];?><input class="form-control" type="hidden" name="kategori" value="<?php echo $result['kategori'];?>">
                                    </div>
                                    <div class="form-group">
                                       <label>HARGA BELI</label> :<?php echo $result['harga_jual'];?><input type="hidden" class="form-control" name="harga_jual" value="<?php echo $result['harga_jual'];?>" >
                                    </div>
                                    <div class="form-group">
                                        <label>JUMLAH BELI</label> :<input type="text" class="form-control" name="jumlah" placeholder="jumlah barang yang dibeli">
                                    </div>
                                    <div class="form-group">
                                        <label>DISCOUNT</label> :<input type="text" class="form-control" name="discount" value="0" placeholder="%">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="simpan" class="btn btn-info" value = "Simpan" ></a>
                                    </div>
                              </form>
                             <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                           <td>#</td>
                                           <td>ID JUAL</td>
                                           <TD>ID BARANG</TD>
                                           <TD>NAMA BARANG</TD>
                                           <TD>KATEGORI</TD>
                                           <TD>HARGA BELI</TD>
                                           <td>TANGGAL BELI</td>
                                           <TD>JUMLAH BELI</TD>
                                           <TD>DISCOUNT</TD> 
                                           <td>AKSI</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                    include "koneksi.php";

                                    $no=1;
                                    $res=mysqli_query($link, "SELECT * FROM transaksi_jual");
                                    while ($row=mysqli_fetch_array($res)) {
                                        $harga_disc = $row['harga_jual'] - (($row['harga_jual'] * $row['disc']) / 100);
                                        $total_bayar = $total_ = $harga_disc * $row['jumlah_jual'];
                                    ?>
                                        <tr>
                                           <td><?php $no++ ?></td>
                                           <td><?php echo $row['id_jual']; ?></td>
                                           <td><?php echo $row['id_barang']; ?>
                                               <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
                                           </td>
                                           <td><?php echo $row['nama_barang']; ?></td>
                                           <td><?php echo $row['kategori']; ?></td> 
                                           <td>Rp.<?php echo $row['harga_jual']; ?></td>
                                           <td><?php echo $row['tanggal_jual']; ?></td>
                                           <td><?php echo $row['jumlah_jual'] ; ?></td>
                                           <td><?php echo $row['disc']; ?>%</td>
                                           <TD>
                                           <a href="proses-deletetabelpenjualan.php?id=<?php echo $row['id_jual'];?>" onclick="return confirm ('Hapus <?php echo $row['nama_barang'];?> ?');"title="Hapus" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                           </TD>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <form method="POST">
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td colspan="7" align="right">Rp. <input type="text" id="total" value="<?php echo !empty($total_)? $total_ : 0; ?>" disabled ></td>    
                                        </tr>
                                        <tr>
                                            <td colspan="3">Potongan Harga</td>
                                            <td colspan="7"><input type="text" class="form-control" name="potongan" id="potongan" placeholder="Rp."></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">TOTAL BAYAR</td>
                                            <TD colspan="7" align="right"><input type="text" name="total_bayar" id="hasil" value="<?php echo !empty($total_bayar)? $total_bayar : 0;?>"></TD>
                                        </tr>
                                    </form>
                                    </tfoot>
                                </table>
                                <div class="col-md-5">
                                <span><h4>Tabel Pembayaran</h4></span>
                                <form method="POST" action="proses-penjualanbarang.php">
                                     <input type="hidden" name="potongan" id="potongan_insert" value=""> 
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="transaksi" id="transaksi" placeholder="isi no transaksi">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="id_pelanggan" id="id_pelanggan" placeholder="id_pelanggan">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pelanggan" id="pelanggan" placeholder="nama pelanggan">
                                    </div>
                                    <div class="form-group">
                                        <span>Yang Dibayarkan</span>
                                        <input type="text" class="form-control" name="bayar" id="bayar" placeholder="Rp.">
                                    </div>
                                    <div class="form-group">
                                        <div class='col-md-6'>
                                            <input type='radio' name='status' value='LUNAS' id="status" checked>
                                            <span>LUNAS</span>
                                        </div>
                                        <div class='col-md-6'>
                                            <input type='radio' name='status' value='PIUTANG' id="status">
                                            <span>PIUTANG</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn btn-info" name="simpan" value="Simpan Transaksi">
                                    </div>
                                </form>
                                </div>

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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("form").prop('autocomplete', 'off');
    });

    $("#potongan").keyup(function(){
        var total    = parseInt($("#total").val());
        var potongan = parseInt($(this).val());

        $("#hasil").val(total - potongan); 
        $("#potongan_insert").val(potongan);
    });
</script>
</html>