<?php  
require "fpdf181/fpdf.php";

$pdf= new FPDF('L','cm',array(30,30));
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
$pdf->Line(1,3.1,37,3.1); 
$pdf->SetLineWidth(0.1); 
$pdf->Line(1,3.2,37,3.2); 
$pdf->SetLineWidth(0);

$pdf->Ln();

$pdf->SetX(13); 
$pdf->MultiCell(19.5,0.5,'Kwitansi Pembelian',0,'L'); 
$pdf->Ln();

$pdf->SetX(1); 
$pdf->MultiCell(19.5,0.5,'Data Pembelian Barang',0,'L'); 
$pdf->Ln();

include "koneksi.php";

$id_bla=$_GET['id_pembelian'];
$result=mysqli_query($link, "SELECT * FROM pembelian WHERE faktur='$id_bla' ");
$row=mysqli_fetch_assoc($result);
$faktur=$row['faktur'];
$id_penyuplai=$row['id_penyuplai'];
$nama_penyuplai=$row['nama_penyuplai'];
$tanggal_beli=$row['tanggal_beli'];
$uang_pembayaran=$row['uang_pembayaran'];
$sub_total=$row['sub_total'];
$status=$row['status'];
$kembalian=$row['uang_pembayaran']-$row['sub_total'];

$pdf->Cell(4,1,'NO FAKTUR',0,'L'); 
$pdf->Cell(4,1,$faktur,0,'L'); 
$pdf->Ln();
 
$pdf->Cell(4,1,'ID PENYUPLAI',0,'L');  
$pdf->Cell(4,1,$id_penyuplai,0,'L'); 
$pdf->Ln();

$pdf->Cell(4,1,'NAMA PENYUPLAI',0,'L');  
$pdf->Cell(4,1,$nama_penyuplai,0,'L'); 
$pdf->Ln();
 
$pdf->Cell(4,1,'TANGGAL BELI',0,'L');  
$pdf->Cell(4,1,$tanggal_beli,0,'L'); 
$pdf->Ln();
 
$pdf->Cell(4,1,'YANG DIBAYAR',0,'L'); 
$pdf->Cell(4,1,$uang_pembayaran,0,'L'); 
$pdf->Ln();

$pdf->Cell(4,1,'TOTAL BAYAR',0,'L'); 
$pdf->Cell(4,1,$sub_total,0,'L'); 
$pdf->Ln();
 
$pdf->Cell(4,1,'KEMBALIAN',0,'L'); 
$pdf->Cell(4,1,$kembalian,0,'L'); 
$pdf->Ln();
 
$pdf->Cell(4,1,'STATUS',0,'L'); 
$pdf->Cell(4,1,$status,0,'L'); 
$pdf->Ln();

$pdf->Ln();

$pdf->SetX(1); 
$pdf->MultiCell(19.5,0.5,'Tabel Pembelian Barang',0,'L'); 
$pdf->Ln();

$pdf->SetFont('times','B',8);
$pdf->Cell(1,1,"#",1,0,"C");
$pdf->Cell(2,1,"ID BARANG",1,0,"C");
$pdf->Cell(3,1,"NAMA BARANG",1,0,"C");
$pdf->Cell(3,1,"HARGA BELI",1,0,"C");
$pdf->Cell(4,1,"JUMLAH BELI",1,0,"C");
$pdf->Cell(7.4,1,"TOTAL",1,0,"C");
$pdf->Ln();

include "koneksi.php";

$id_bla=$_GET['id_pembelian'];
$no=1;
$total_bayar=0;
$res=mysqli_query($link, "SELECT a.*,b.uang_pembayaran FROM transaksi_beli_detail as a LEFT JOIN pembelian as b ON a.faktur=b.faktur WHERE a.faktur='$id_bla' ");
    while ($sql=mysqli_fetch_array($res)) {
        $id_barang=$sql['id_barang'];
        $nama_barang=$sql['nama_barang'];
        $harga_beli=$sql['harga_beli'];
        $jumlah_beli=$sql['jumlah_beli'];
        $total=$sql['total'];

        $total_bayar+=$sql['total'];
        $bayar=$sql['uang_pembayaran'];
        $kembalian=$bayar-$total_bayar;
        $pdf->Cell(1,1,$no++,1,0,"C");
        $pdf->Cell(2,1,$id_barang,1,0,"C");
        $pdf->Cell(3,1,$nama_barang,1,0,"C");
        $pdf->Cell(3,1,number_format($harga_beli,0,',','.'),1,0,"C");
        $pdf->Cell(4,1,$jumlah_beli,1,0,"C");
        $pdf->Cell(7.4,1,number_format($total,0,',','.'),1,0,"C");
        $pdf->Ln();
    }

$pdf->Cell(13,1,"TOTAL BAYAR",1,0,"L");
$pdf->Cell(7.4,1,number_format($total_bayar,0,',','.'),1,0,"C");
$pdf->Ln();

$pdf->Cell(13,1,"YANG DIBAYAR",1,0,"L");
$pdf->Cell(7.4,1,number_format($bayar,0,',','.'),1,0,"C");
$pdf->Ln();

$pdf->Cell(13,1,"KEMBALIAN",1,0,"L");
$pdf->Cell(7.4,1,number_format($kembalian,0,',','.'),1,0,"C");
$pdf->Ln();

$pdf->SetX(1); 
$pdf->MultiCell(19.5,0.5,'* Barang yang sudah dibeli tidak dapat dikembalikan',0,'L'); 
$pdf->SetX(1); 
$pdf->MultiCell(19.5,0.5,'* Barang-barang yang diservice, apabila tidak diambil dalam jangka 3 bulan, resiko kehilangan bukan menjadi tanggung jawab kami',0,'L');
$pdf->Ln(); 

$pdf->Output('Kwitansi-Pembelian','I');
?>