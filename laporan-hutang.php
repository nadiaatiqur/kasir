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

$pdf->SetFont('times','B',8);
$pdf->Cell(1.5,1,"faktur",1,0,"C");
$pdf->Cell(2,1,"id_penyuplai",1,0,"C");
$pdf->Cell(3,1,"nama_penyuplai",1,0,"C");
$pdf->Cell(2,1,"tanggal_beli",1,0,"C");
$pdf->Cell(3,1,"uang_pembayaran",1,0,"C");
$pdf->Cell(4,1,"total_bayar",1,0,"C");
$pdf->Cell(2,1,"status",1,0,"C");

$pdf->Ln();
	include "koneksi.php";
	$sql=mysqli_query($link, "SELECT * FROM pembelian WHERE status='HUTANG' ");
	while ($row=mysqli_fetch_array($sql)) {
		$faktur=$row['faktur'];
        $id_penyuplai=$row['id_penyuplai'];
        $nama_penyuplai=$row['nama_penyuplai'];
        $tanggal_beli=$row['tanggal_beli'];
        $uang_pembayaran=$row['uang_pembayaran'];
        $sub_total=$row['sub_total'];
        $status=$row['status'];
        $pdf->Cell(1.5,1,$faktur,1,0,"C");
		$pdf->Cell(2,1,$id_penyuplai,1,0,"C");
		$pdf->Cell(3,1,$nama_penyuplai,1,0,"C");
		$pdf->Cell(2,1,$tanggal_beli,1,0,"C");
		$pdf->Cell(3,1,$uang_pembayaran,1,0,"C");
		$pdf->Cell(4,1,$total_bayar,1,0,"C");
		$pdf->Cell(2,1,$status,1,0,"C");
		
		$pdf->Ln();
	}  
$pdf->Output('Data-Hutang','I');
?>