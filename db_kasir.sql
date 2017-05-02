-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2017 at 09:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(175) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `harga_beli` int(255) NOT NULL,
  `harga_jual` int(255) NOT NULL,
  `nama_penyuplai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `kategori`, `jumlah_barang`, `satuan`, `spesifikasi`, `harga_beli`, `harga_jual`, `nama_penyuplai`) VALUES
(7, 'Asus Predator L32PQ2', 'Laptop', 113, 'unit', 'Ram 16Gb, Rom 32Gb, Prossesor intel core 7, NVDA 4Gb', 11000000, 13000000, ''),
(8, 'SmartFren Andromax B ', 'smartphone', 120, 'unit', '5" Inci, RAM 1,5Gb, prossesor snapdragon', 659000, 800000, ''),
(9, 'SmartFren Andromax I3s', 'smartphone', 94, 'unit', 'ram 1Gb, rom 8Gb, screen gorilas glas IV, HDS', 1200000, 1300000, ''),
(10, 'Huawei Honor 121AF9', 'smartphone', 85, 'unit', '............................', 2000000, 3000000, ''),
(12, 'HeadPhone Early I823-Q', 'alat elektronik', 80, 'unit', 'Bass, HDTS i, Clean Voice,', 500000, 1000000, 'SuperNova Inducstion');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(11) NOT NULL,
  `faktur` varchar(10) NOT NULL,
  `id_penyuplai` int(11) NOT NULL,
  `nama_penyuplai` varchar(40) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `uang_pembayaran` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `faktur`, `id_penyuplai`, `nama_penyuplai`, `tanggal_beli`, `uang_pembayaran`) VALUES
(21, '301', 8, 'Sinar Mas', '2017-03-14', 16000000),
(22, '967', 4, 'Sinar Mas', '2017-03-14', 32000000),
(23, '9785', 8, 'Sinar Mas', '2017-03-15', 180000000);

-- --------------------------------------------------------

--
-- Table structure for table `penyuplai`
--

CREATE TABLE `penyuplai` (
  `id_penyuplai` int(11) NOT NULL,
  `nama_penyuplai` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(50) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rekening` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyuplai`
--

INSERT INTO `penyuplai` (`id_penyuplai`, `nama_penyuplai`, `alamat`, `telpon`, `kontak`, `email`, `rekening`) VALUES
(6, 'Asus Foundation, Inc', 'Jl. Anggrek Buawana No.78 Jakarta Timur', '-', '098234987465', 'Asus@example.com', ''),
(8, 'SinarMas', 'Jl. Pasuruan Selatan No.123', '0331-486723', '087757391238', 'smartfren@example.com', ''),
(10, 'Huawei Foundation.inc', 'Taiwan, hongkong', '0551-987392', '-', 'huawei@example.com', ''),
(11, 'SuperNova Inducstion', 'Jl. NusantaraTama No.12 Bangka Belitung', '0332-132983', '123876125984', 'SuperNova@example.com', '1021-1289991');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_beli`
--

CREATE TABLE `transaksi_beli` (
  `id_beli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_beli_detail`
--

CREATE TABLE `transaksi_beli_detail` (
  `id_beli` int(11) NOT NULL,
  `faktur` varchar(6) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_beli_detail`
--

INSERT INTO `transaksi_beli_detail` (`id_beli`, `faktur`, `id_barang`, `nama_barang`, `tanggal_beli`, `harga_beli`, `jumlah_beli`, `total`) VALUES
(8, '0012', 7, 'Asus Predator L32PQ2', '2017-03-14', 11000000, 5, 55000000),
(9, '0012', 8, 'SmartFren Andromax B ', '2017-03-14', 659000, 5, 3295000),
(10, '301', 9, 'SmartFren Andromax I3s', '2017-03-14', 1200000, 5, 6000000),
(11, '301', 10, 'Huawei Honor 121AF9', '2017-03-14', 2000000, 5, 10000000),
(12, '967', 9, 'SmartFren Andromax I3s', '2017-03-14', 1200000, 10, 12000000),
(13, '967', 10, 'Huawei Honor 121AF9', '2017-03-14', 2000000, 10, 20000000),
(14, '9823', 7, 'Asus Predator L32PQ2', '2017-03-14', 11000000, 5, 55000000),
(15, '9785', 7, 'Asus Predator L32PQ2', '2017-03-14', 11000000, 15, 165000000),
(16, '9785', 8, 'SmartFren Andromax B', '2017-03-14', 659000, 15, 9885000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_pengguna` varchar(175) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `username` varchar(175) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_pengguna`, `alamat`, `telpon`, `level`, `username`, `password`) VALUES
(1, 'yofandi riki winata', 'bandung', '087757391238', 'admin', 'yofandi', 'yofandi'),
(2, 'Glaudis Arta Dwiwinata', 'jakarta', '085287299141', 'petugas', 'afssasafS', 'ASDFSAF'),
(5, 'Kornelius Valentino Nagata', 'banyuwangi', '08812349876', 'pelanggan', 'kornelius', 'kornelius'),
(6, 'Luluk Wijayanti', '085999236071', '085999236071', 'Pelanggan', 'luluk', 'wijayanti'),
(8, 'Kornelius Valentino Nagata', 'bandung', '08812349876', 'Pelanggan', 'kornelius', 'kornelius');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `penyuplai`
--
ALTER TABLE `penyuplai`
  ADD PRIMARY KEY (`id_penyuplai`);

--
-- Indexes for table `transaksi_beli`
--
ALTER TABLE `transaksi_beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `transaksi_beli_detail`
--
ALTER TABLE `transaksi_beli_detail`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `penyuplai`
--
ALTER TABLE `penyuplai`
  MODIFY `id_penyuplai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transaksi_beli`
--
ALTER TABLE `transaksi_beli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi_beli_detail`
--
ALTER TABLE `transaksi_beli_detail`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
