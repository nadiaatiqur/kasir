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

$pdf->Ln();

$pdf->SetX(12); 
$pdf->MultiCell(19.5,0.5,'Rekam Jejak Cicil Piutang',0,'L');
$pdf->Ln();

$pdf->SetFont('times','B',10);
$pdf->Cell(1,1,"#",1,0,"C");
$pdf->Cell(2,1,"Faktur",1,0,"C");
$pdf->Cell(2,1,"Id Pelanggan",1,0,"C");
$pdf->Cell(3,1,"Nama Pelanggan",1,0,"C");
$pdf->Cell(2,1,"Tanggal Cicil",1,0,"C");
$pdf->Cell(3,1,"Total Bayar",1,0,"C");
$pdf->Cell(4,1,"Uang Pembayaran Awal",1,0,"C");
$pdf->Cell(3,1,"Uang Angsuran",1,0,"C");
$pdf->Cell(3,1,"Yang Harus Dibayar",1,0,"C");
$pdf->Cell(2,1,"Status",1,0,"C");

$pdf->Ln();

include 'koneksi.php';
$id=$_GET['id'];
$no=1;
$sql=mysqli_query($link, "SELECT * FROM history_piutang WHERE no_transaksi='$id' ");
    while ($row=mysqli_fetch_array($sql)) {
        $faktur=$row['no_transaksi'];
        $id_pelanggan=$row['id_pelanggan'];
        $nama_pelanggan=$row['nama_pelanggan'];
        $tanggal_cicil=$row['tanggal_cicil'];
        $total_bayar=$row['total_bayar'];
        $uang_pembayaran=$row['uang_pembayaran'];
        $uang_angsuran=$row['uang_angsuran'];
        $harus_dibayar=$row['harus_dibayar'];
        $status=$row['status'];
        $pdf->Cell(1,1,$no++,1,0,"C");
        $pdf->Cell(2,1,$faktur,1,0,"C");
        $pdf->Cell(2,1,$id_pelanggan,1,0,"C");
        $pdf->Cell(3,1,$nama_pelanggan,1,0,"C");
        $pdf->Cell(2,1,$tanggal_cicil,1,0,"C");
        $pdf->Cell(3,1,number_format($total_bayar,0,',','.'),1,0,"C");
        $pdf->Cell(4,1,number_format($uang_pembayaran,0,',','.'),1,0,"C");
        $pdf->Cell(3,1,number_format($uang_angsuran,0,',','.'),1,0,"C");
        $pdf->Cell(3,1,number_format($harus_dibayar,0,',','.'),1,0,"C");
        $pdf->Cell(2,1,$status,1,0,"C");
        $pdf->Ln();
    }

include "koneksi.php";
$qtmp=mysqli_query($link, "SELECT SUM(uang_angsuran) FROM history_piutang WHERE no_transaksi='$id' GROUP BY no_transaksi "); 
$res=mysqli_fetch_array($qtmp);
$uang_angsuran1=$res['SUM(uang_angsuran)'];

$pdf->Cell(17,1,"Total Keseluruhan Uang Angsuran",1,0,"C");
$pdf->Cell(8,1,number_format($uang_angsuran1,0,',','.'),1,0,"C");
$pdf->Ln();

$pdf->SetX(1); 
$pdf->MultiCell(19.5,0.5,' * Barang yang sudah dibeli tidak dapat dikembalikan',0,'L');
$pdf->Ln();

$pdf->Output('rekam-jejak-cicilpiutang','I');
?>