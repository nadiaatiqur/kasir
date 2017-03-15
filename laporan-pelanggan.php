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
$pdf->MultiCell(19.5,0.5,'website : www.MasCitra.com username : MasCitra12@gmail.com',0,'L'); 
$pdf->Line(1,3.1,30,3.1); 
$pdf->SetLineWidth(0.1); 
$pdf->Line(1,3.2,30,3.2); 
$pdf->SetLineWidth(0);

$pdf->Ln();

$pdf->SetFont('times','B',8);
$pdf->Cell(1.5,1,"id_user",1,0,"C");
$pdf->Cell(4,1,"nama_pengguna",1,0,"C");
$pdf->Cell(5.5,1,"alamat",1,0,"C");
$pdf->Cell(2.8,1,"telepon",1,0,"C");
$pdf->Cell(3,1,"level",1,0,"C");
$pdf->Cell(4,1,"username",1,0,"C");
$pdf->Cell(2,1,"password",1,0,"C");

$pdf->Ln();

    include "koneksi.php";
   $result=mysqli_query($link, "SELECT id_user, nama_pengguna, alamat, telpon, level, username, password FROM user WHERE level='pelanggan' ");
   while ($row=mysqli_fetch_array($result)) {
        $id=$row['id_user'];
        $pengguna=$row['nama_pengguna'];
        $alamat=$row['alamat'];
        $telpon=$row['telpon'];
        $level=$row['level'];
        $username=$row['username'];
        $password=$row['password'];
        $pdf->Cell(1.5,1,$id,1,0,"C");
        $pdf->Cell(4,1,$pengguna,1,0,"C");
        $pdf->Cell(5.5,1,$alamat,1,0,"C");
        $pdf->Cell(2.8,1,$telpon,1,0,"C");
        $pdf->Cell(3,1,$level,1,0,"C");
        $pdf->Cell(4,1,$username,1,0,"C");
        $pdf->Cell(2,1,$password,1,0,"C");
        $pdf->Ln();
    }
    $pdf->Output('data-pelanggan','I');
?>