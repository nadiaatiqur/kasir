<?php  
include "koneksi.php";
//memanggil file excel_reader
require "excel_reader.php";
 
//jika tombol import ditekan
if(isset($_POST['submit'])){
 
    $target = basename($_FILES['filebarang']['name']) ;
    move_uploaded_file($_FILES['filebarang']['tmp_name'], $target);
 
// tambahkan baris berikut untuk mencegah error is not readable
    chmod($_FILES['filebarang']['name'],0777);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filebarang']['name'],false);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $id= $data->val($i, 1);
	  $barang= $data->val($i, 2);
	  $kategori= $data->val($i, 3);
	  $jumlah= $data->val($i, 4);
	  $satuan= $data->val($i, 5);
	  $spesifikasi= $data->vla($i, 6);
	  $beli= $data->val($i, 7);
	  $jual= $data->val($i, 8);
//      setelah data dibaca, masukkan ke tabel pegawai sql
      $hasil = mysqli_query($link, "INSERT INTO barang (id_barang, nama_barang, kategori, jumlah_barang, satuan, spesifikasi, harga_beli, harga_jual) VALUES ('$id', '$barang', '$kategori', 'jumlah', '$satuan', '$spesifikasi', '$beli', '$jual')");
    }
    
    if(!$hasil){
//          jika import gagal
          die(mysqli_error($link));
      }else{
//          jika impor berhasil
          echo "Data berhasil diimpor.";
    }
    
//    hapus file xls yang udah dibaca
    unlink($_FILES['filebarang']['name']);
}
mysqli_close($link);
?>