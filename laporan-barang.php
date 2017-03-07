<?php  
require "fpdf181/fpdf.php";

class PDF extends FPDF
{
// Page header
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$pdf= new FPDF('L','mm',array(297,210)); ;
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80);
$pdf->Cell(30,10,'LAPORAN BARANG YANG MASUK',0,0,'C');
$pdf->Ln();
$pdf->SetFont('times','B',8);
$pdf->Cell(15,7,"id_barang",1,0,"C");
$pdf->Cell(35,7,"nama_barang",1,0,"C");
$pdf->Cell(20,7,"kategori",1,0,"C");
$pdf->Cell(20,7,"jumlah_barang",1,0,"C");
$pdf->Cell(10,7,"satuan",1,0,"C");
$pdf->Cell(74,7,"spesifikasi",1,0,"C");
$pdf->Cell(20,7,"harga_beli",1,0,"C");
$pdf->Cell(20,7,"harga_jual",1,0,"C");
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
        $pdf->Cell(15,7,$id,1,0,"C");
        $pdf->Cell(35,7,$barang,1,0,"C");
        $pdf->Cell(20,7,$kategori,1,0,"C");
        $pdf->Cell(20,7,$jumlah,1,0,"C");
        $pdf->Cell(10,7,$satuan,1,0,"C");
        $pdf->Cell(74,7,$spesifikasi,1,0,"C");
        $pdf->Cell(20,7,$beli,1,0,"C");
        $pdf->Cell(20,7,$jual,1,0,"C");
        $pdf->Ln();
    }
    $pdf->Output('data-barang','I');
?>