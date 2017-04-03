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
$pdf->Cell(2,1,"id_pelanggan",1,0,"C");
$pdf->Cell(3,1,"nama_pelanggan",1,0,"C");
$pdf->Cell(3,1,"tanggal_jual",1,0,"C");
$pdf->Cell(3,1,"total_bayar",1,0,"C");
$pdf->Cell(3,1,"jumlah_bayar",1,0,"C");
$pdf->Cell(3,1,"potongan",1,0,"C");
$pdf->Cell(2,1,"status",1,0,"C");

$pdf->Ln();
	
	include "koneksi.php";
	$result=mysqli_query($link, "SELECT * FROM penjualan");
	while ($row=mysqli_fetch_array($result)) {
		$id_jual=$row['id_jual'];
        $no_transaksi=$row['no_transaksi'];
        $id_pelanggan=$row['id_pelanggan'];
        $nama_pelanggan=$row['nama_pelanggan'];
        $tanggal_jual=$row['tanggal_jual'];
        $total_bayar=$row['total_bayar'];
        $jumlah_bayar=$row['jumlah_bayar'];
        $potongan=$row['potongan'];
        $status=$row['status'];
        $pdf->Cell(1.5,1,$id_jual,1,0,"C");
		$pdf->Cell(2,1,$no_transaksi,1,0,"C");
		$pdf->Cell(2,1,$id_pelanggan,1,0,"C");
		$pdf->Cell(3,1,$nama_pelanggan,1,0,"C");
		$pdf->Cell(3,1,$tanggal_jual,1,0,"C");
		$pdf->Cell(3,1,$total_bayar,1,0,"C");
		$pdf->Cell(3,1,$jumlah_bayar,1,0,"C");
		$pdf->Cell(3,1,$potongan,1,0,"C");
		$pdf->Cell(2,1,$status,1,0,"C");

		$pdf->Ln();
	}

$pdf->Output('data-transaksi-penjualan-barang','I');
?>