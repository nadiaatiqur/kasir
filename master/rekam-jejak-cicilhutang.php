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

$pdf->SetX(13); 
$pdf->MultiCell(19.5,0.5,'Rekam Jejak Cicil Hutang',0,'L'); 
$pdf->Ln();

$pdf->SetFont('times','B',8);
$pdf->Cell(1,1,"#",1,0,"C");
$pdf->Cell(2,1,"ID Hutang",1,0,"C");
$pdf->Cell(2,1,"No Faktur",1,0,"C");
$pdf->Cell(2,1,"ID Penyuplai",1,0,"C");
$pdf->Cell(3,1,"Nama Penyuplai",1,0,"C");
$pdf->Cell(4,1,"Pembayaran Awal",1,0,"C");
$pdf->Cell(4,1,"Total Bayar",1,0,"C");
$pdf->Cell(4,1,"Uang Angsuran",1,0,"C");
$pdf->Cell(4,1,"Yang Harus Dibayar",1,0,"C");
$pdf->Cell(2,1,"Status",1,0,"C");
$pdf->Ln();

include "koneksi.php";
$id=$_GET['id'];
$no=1;
$sql=mysqli_query($link, "SELECT * FROM history_hutang WHERE faktur='$id' ");
    while ($row=mysqli_fetch_array($sql)) {
        $id_hutang=$row['id_hutang'];
        $faktur=$row['faktur'];
        $id_penyuplai=$row['id_penyuplai'];
        $nama_penyuplai=$row['nama_penyuplai'];
        $uang_pembayaran=$row['uang_pembayaran'];
        $total_bayar=$row['total_bayar'];
        $uang_angsuran=$row['uang_angsuran'];
        $harus_dibayar=$row['harus_dibayar'];
        $status=$row['status'];
        $pdf->Cell(1,1,$no++,1,0,"C");
        $pdf->Cell(2,1,$id_hutang,1,0,"C");
        $pdf->Cell(2,1,$faktur,1,0,"C");
        $pdf->Cell(2,1,$id_penyuplai,1,0,"C");
        $pdf->Cell(3,1,$nama_penyuplai,1,0,"C");
        $pdf->Cell(4,1,number_format($uang_pembayaran,0,',','.'),1,0,"C");
        $pdf->Cell(4,1,number_format($total_bayar,0,',','.'),1,0,"C");
        $pdf->Cell(4,1,number_format($uang_angsuran,0,',','.'),1,0,"C");
        $pdf->Cell(4,1,number_format($harus_dibayar,0,',','.'),1,0,"C");
        $pdf->Cell(2,1,$status,1,0,"C");
        $pdf->Ln();
    }
include "koneksi.php";
$qtmp=mysqli_query($link, "SELECT SUM(uang_angsuran) FROM history_hutang WHERE faktur='$id' GROUP BY faktur "); 
$res=mysqli_fetch_array($qtmp);
$uang_angsuran1=$res['SUM(uang_angsuran)'];
$pdf->Cell(18,1,"Total Keseluruhan Uang Angsuran",1,0,"L");
$pdf->Cell(10,1,number_format($uang_angsuran1,0,',','.'),1,0,"C");
$pdf->Ln();

$pdf->Output('rekam-jejak-cicil-hutang','I');
?>