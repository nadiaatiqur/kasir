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
$pdf->Cell(1.5,1,"id_jual",1,0,"C");
$pdf->Cell(2,1,"no_transaksi",1,0,"C");
$pdf->Cell(2,1,"id_barang",1,0,"C");
$pdf->Cell(4,1,"nama_barang",1,0,"C");
$pdf->Cell(3,1,"kategori",1,0,"C");
$pdf->Cell(5,1,"jumlah_jual",1,0,"C");
$pdf->Cell(2,1,"tanggal_jual",1,0,"C");
$pdf->Cell(2,1,"discount",1,0,"C");
$pdf->Cell(2,1,"harga_jual",1,0,"C");

$pdf->Ln();

    	include "koneksi.php";
    	$result1=mysqli_query($link, "SELECT * FROM transaksi_jual_detail");
    	while ($row=mysqli_fetch_array($result1)) {
	    	$id_jual=$row['id_jual'];
	    	$no_transaksi=$row['no_transaksi'];
	    	$id_barang=$row['id_barang'];
	    	$nama_barang=$row['nama_barang'];
	    	$kategori=$row['kategori'];
	    	$jumlah_jual=$row['jumlah_jual'];
	    	$tanggal_jual=$row['tanggal_jual'];
	    	$disc=$row['disc'];
	    	$harga_jual=$row['harga_jual'];
	    	$pdf->Cell(1.5,1,$id_jual,1,0,"C");
			$pdf->Cell(2,1,$no_transaksi,1,0,"C");
			$pdf->Cell(2,1,$id_barang,1,0,"C");
			$pdf->Cell(4,1,$nama_barang,1,0,"C");
			$pdf->Cell(3,1,$kategori,1,0,"C");
			$pdf->Cell(5,1,$jumlah_jual,1,0,"C");
			$pdf->Cell(2,1,$tanggal_jual,1,0,"C");
			$pdf->Cell(2,1,$disc,1,0,"C");
			$pdf->Cell(2,1,$harga_jual,1,0,"C");
			$pdf->Ln();
    	}
    	$pdf->Output('data-tabel-penjualan-barang','I');
?>