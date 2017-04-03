<?php  
require "fpdf181/fpdf.php";

$pdf= new FPDF('L','cm',array(25,32));
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
$pdf->Cell(2,1,"id_penyuplai",1,0,"C");
$pdf->Cell(4,1,"nama_penyuplai",1,0,"C");
$pdf->Cell(5.5,1,"alamat",1,0,"C");
$pdf->Cell(2.8,1,"telepon",1,0,"C");
$pdf->Cell(3,1,"kontak",1,0,"C");
$pdf->Cell(4,1,"email",1,0,"C");
$pdf->Cell(2,1,"rekening",1,0,"C");

$pdf->Ln();

    include "koneksi.php";
    $result=mysqli_query($link, "SELECT * FROM penyuplai");
    while ($row=mysqli_fetch_array($result)) {
        $id=$row['id_penyuplai'];
        $penyuplai=$row['nama_penyuplai'];
        $alamat=$row['alamat'];
        $telpon=$row['telpon'];
        $kontak=$row['kontak'];
        $email=$row['email'];
        $rekening=$row['rekening'];
        $pdf->Cell(2,1,$id,1,0,"C");
        $pdf->Cell(4,1,$penyuplai,1,0,"C");
        $pdf->Cell(5.5,1,$alamat,1,0,"C");
        $pdf->Cell(2.8,1,$telpon,1,0,"C");
        $pdf->Cell(3,1,$kontak,1,0,"C");
        $pdf->Cell(4,1,$email,1,0,"C");
        $pdf->Cell(2,1,$rekening,1,0,"C");
        $pdf->Ln();
    }
    $pdf->Output('data-supliyer','I');
?>