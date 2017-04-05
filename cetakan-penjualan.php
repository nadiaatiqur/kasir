<?php  
require "fpdf181/fpdf.php";

$pdf= new FPDF('L','cm',array(30,20));
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Image('img/logo_kecil.jpg',1,1,2,2); 
$pdf->SetX(3); 
$pdf->MultiCell(19.5,0.5,'www.MasCitra.com',0,'L'); 
$pdf->SetX(3); 
$pdf->MultiCell(19.5,0.5,'Pemerintah Kota Jember, Jawa Timur',0,'L'); 
$pdf->SetFont('Arial','B',10); 
$pdf->SetX(3); 
$pdf->MultiCell(19.5,0.5,'JL. Mengkubumi No. 1, Telpon : 0411400000',0,'L'); 
$pdf->SetX(3); 
$pdf->MultiCell(19.5,0.5,'website : www.MasCitra.com email : MasCitra12@gmail.com',0,'L'); 
$pdf->Line(1,3.1,30,3.1); 
$pdf->SetLineWidth(0.1); 
$pdf->Line(1,3.2,30,3.2); 
$pdf->SetLineWidth(0);
$pdf->SetX(12); 
$pdf->MultiCell(19.5,1,'Kwitansi Transaksi',0,'L'); 

$pdf->Ln();


include 'master/koneksi.php';

$id=$_GET['id_transaksi'];
$res=mysqli_query($link, "SELECT * FROM penjualan WHERE no_transaksi='$id' ");
$row=mysqli_fetch_array($res);
$no_transaksi=$row['no_transaksi'];
$id_pelanggan=$row['id_pelanggan'];
$nama_pelanggan=$row['nama_pelanggan'];
$tanggal_jual=$row['tanggal_jual'];
$total_bayar=$row['total_bayar'];
$jumlah_bayar=$row['jumlah_bayar'];
$potongan=$row['potongan'];
$status=$row['status'];

$pdf->SetFont('times','B',10);
$pdf->Cell(3,1,"No Transaksi",0,0,"L");
$pdf->Cell(2,1,$no_transaksi,0,0,"L");
$pdf->Ln();

$pdf->Cell(3,1,"ID Pelanggan",0,0,"L");
$pdf->Cell(2,1,$id_pelanggan,0,0,"L");
$pdf->Ln();

$pdf->Cell(3,1,"Nama Pelanggan",0,0,"L");
$pdf->Cell(3,1,$nama_pelanggan,0,0,"L");
$pdf->Ln();

$pdf->Cell(3,1,"Tanggal Beli",0,0,"L");
$pdf->Cell(4,1,$tanggal_jual,0,0,"L");
$pdf->Ln();

$pdf->Cell(3,1,"Total Bayar",0,0,"L");
$pdf->Cell(3,1,number_format($total_bayar,0,',','.'),0,0,"L");
$pdf->Ln();

$pdf->Cell(3,1,"Yang Dibayar",0,0,"L");
$pdf->Cell(3,1,number_format($jumlah_bayar,0,',','.'),0,0,"L");
$pdf->Ln();

$pdf->Cell(3,1,"Potongan Harga",0,0,"L");
$pdf->Cell(3,1,number_format($potongan,0,',','.'),0,0,"L");
$pdf->Ln();

$pdf->Cell(3,1,"Status",0,0,"L");
$pdf->Cell(3,1,$status,0,0,"L");
$pdf->Ln();

$pdf->SetFont('times','B',10);
$pdf->Cell(2.5,1,"ID BARANG",1,0,"C");
$pdf->Cell(3.5,1,"NAMA BARANG",1,0,"C");
$pdf->Cell(2,1,"HARGA",1,0,"C");
$pdf->Cell(2,1,"JUMLAH",1,0,"C");
$pdf->Cell(3,1,"DISCOUNT",1,0,"C");
$pdf->Cell(7.4,1,"TOTAL",1,0,"C");

$pdf->Ln();

include "master/koneksi.php";

$id=$_GET['id_transaksi'];
$sql=mysqli_query($link, "SELECT a.*, b.total_bayar, b.jumlah_bayar, b.potongan FROM transaksi_jual_detail as a LEFT JOIN penjualan as b ON a.id_pelanggan = b.id_pelanggan WHERE a.no_transaksi='$id' ") or die(mysqli_error($link));
    while ($res=mysqli_fetch_array($sql)) {
        $id_barang=$res['id_barang'];
        $nama_barang=$res['nama_barang'];
        $harga_jual=$res['harga_jual'];
        $jumlah_jual=$res['jumlah_jual'];
        $disc=$res['disc'];

        $harga_disc = $res['harga_jual'] - (($res['harga_jual'] * $res['disc']) / 100);
        $total_bayar = $total_ = $harga_disc * $res['jumlah_jual'];
        $kembalian=$res['jumlah_bayar'] - $res['total_bayar'];
          /*
            <td align="center"><?php echo $res['id_barang']; ?></td>
            <td align="center"><?php echo $res['nama_barang']; ?></td>
            <td align="right">Rp.<?php echo number_format($res['harga_jual'],0,'.',','); ?></td>
            <td align="center"><?php echo $res['jumlah_jual']; ?> unit</td>
            <td align="center"><?php echo $res['disc']; ?>%</td>
            <td align="right">Rp. <?php echo number_format($total_,0,'.',','); ?></td>
          */
        $pdf->Cell(2.5,1,$id_barang,1,0,"C");
        $pdf->Cell(3.5,1,$nama_barang,1,0,"C");
        $pdf->Cell(2,1,number_format($harga_jual,0,',','.'),1,0,"C");
        $pdf->Cell(2,1,$jumlah_jual,1,0,"C");
        $pdf->Cell(3,1,$disc,1,0,"C");
        $pdf->Cell(7.4,1,number_format($total_,0,',','.'),1,0,"C");
        $pdf->Ln();
      }

$pdf->SetFont('times','B',10);
$pdf->Cell(13,1,"KEMBALIAN",1,0,"L");
$pdf->Cell(7.4,1,number_format($kembalian,0,',','.'),1,0,"C");
$pdf->Ln();

$pdf->SetX(1); 
$pdf->MultiCell(19.5,0.5,'*Barang yang sudah dibeli tidak dapat dikembalikan',0,'L');
$pdf->SetX(1); 
$pdf->MultiCell(19.5,0.5,'* Barang-barang yang diservice, apabila tidak diambil dalam jangka 3 bulan, resiko kehilangan bukan menjadi tanggung jawab kami',0,'L');
$pdf->Ln();

$pdf->Output('Kwitansi-Transaksi','I');
?>