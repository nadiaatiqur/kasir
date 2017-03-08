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
$pdf->Cell(1.5,1,"id_barang",1,0,"C");
$pdf->Cell(3.5,1,"nama_barang",1,0,"C");
$pdf->Cell(2,1,"kategori",1,0,"C");
$pdf->Cell(2,1,"jumlah_barang",1,0,"C");
$pdf->Cell(1,1,"satuan",1,0,"C");
$pdf->Cell(7.4,1,"spesifikasi",1,0,"C");
$pdf->Cell(2,1,"harga_beli",1,0,"C");
$pdf->Cell(2,1,"harga_jual",1,0,"C");

$pdf->Ln();

    include "koneksi.php";
    $result=mysqli_query($link, "SELECT * FROM barang");
    while ($row=mysqli_fetch_array($result)) {
        $id=$row['id_barang'];
        $barang=$row['nama_barang'];
        $kategori=$row['kategori'];
        $jumlah=$row['jumlah_barang'];
        $satuan=$row['satuan'];
        $spesifikasi=$row['spesifikasi'];
        $beli=$row['harga_beli'];
        $jual=$row['harga_jual'];
        $pdf->Cell(1.5,1,$id,1,0,"C");
        $pdf->Cell(3.5,1,$barang,1,0,"C");
        $pdf->Cell(2,1,$kategori,1,0,"C");
        $pdf->Cell(2,1,$jumlah,1,0,"C");
        $pdf->Cell(1,1,$satuan,1,0,"C");
        $pdf->Cell(7.4,1,$spesifikasi,1,0,"C");
        $pdf->Cell(2,1,$beli,1,0,"C");
        $pdf->Cell(2,1,$jual,1,0,"C");
        $pdf->Ln();
    }
    $pdf->Output('data-barang','I');
?>