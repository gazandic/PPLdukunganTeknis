-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 07:56 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duktek`
--

-- --------------------------------------------------------

--
-- Table structure for table `duktek_barang`
--

CREATE TABLE `duktek_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `status` varchar(15) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jumlah_rusak` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duktek_barang`
--

INSERT INTO `duktek_barang` (`id_barang`, `nama_barang`, `status`, `lokasi`, `jumlah_rusak`) VALUES
(2, 'Macbook air plus', 'dipinjam', 'Labtek V lantai 3', 4),
(3, 'Macbook air plus 5', 'dipinjam', 'Labtek V lantai 1', 3),
(6, 'macbook air', 'ada', 'Labtek VIII lantai 2 Lab wkwk', 2);

-- --------------------------------------------------------

--
-- Table structure for table `duktek_pemesanan`
--

CREATE TABLE `duktek_pemesanan` (
  `id_user` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tanggal_awal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_akhir` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duktek_peminjaman`
--

CREATE TABLE `duktek_peminjaman` (
  `id_user` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tanggal_awal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_akhir` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duktek_peminjaman`
--

INSERT INTO `duktek_peminjaman` (`id_user`, `id_barang`, `status`, `tanggal_awal`, `tanggal_akhir`) VALUES
(1, 3, 'selesai', '2016-02-09 00:00:00', '2016-02-09 06:34:48'),
(21, 6, 'selesai', '2016-02-09 12:08:10', '2016-02-09 12:30:23'),
(22, 3, 'sedang dipinjam', '2016-02-10 00:00:00', '2016-02-11 00:00:00'),
(21, 2, 'sedang dipinjam', '2016-02-09 12:29:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `duktek_user`
--

CREATE TABLE `duktek_user` (
  `id_user` int(10) NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `fakultas` varchar(5) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duktek_user`
--

INSERT INTO `duktek_user` (`id_user`, `no_identitas`, `nama`, `pekerjaan`, `telepon`, `alamat`, `fakultas`, `jurusan`) VALUES
(1, '13513078', 'gazandi', 'mahasiswa', '083838460280', 'Jalan Sekeloa no 150', 'STEI', 'IF'),
(2, '13513054', 'muhtar', 'mahasiswa', '083838460280', 'Jalan Sekeloa no 150', 'STEI', 'IF'),
(3, 'X12123123123', 'PakDosen', 'dosen', '083838460280', 'Jalan Sekeloa no 150', 'STEI', 'IF'),
(4, 'X1212312312X', 'karikari', 'karyawan', '083838460280', 'Jalan Sekeloa no 150', NULL, NULL),
(6, '13513001213', 'hehehe', 'mahasiswa', '000', 'di hatimu', 'kawai', ''),
(21, '1351300000000', 'heri', 'dosen', '083838460280', 'jangangabutya', 'STEI', 'teknik informatika'),
(22, '13513000001333', 'fikri', 'karyawan', '083838460280', 'semangatfik', 'STEI', 'teknik informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duktek_barang`
--
ALTER TABLE `duktek_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `nama_barang` (`nama_barang`);

--
-- Indexes for table `duktek_pemesanan`
--
ALTER TABLE `duktek_pemesanan`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `duktek_peminjaman`
--
ALTER TABLE `duktek_peminjaman`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `duktek_user`
--
ALTER TABLE `duktek_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `no_identitas` (`no_identitas`),
  ADD KEY `no_identitas_2` (`no_identitas`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duktek_barang`
--
ALTER TABLE `duktek_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `duktek_user`
--
ALTER TABLE `duktek_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `duktek_pemesanan`
--
ALTER TABLE `duktek_pemesanan`
  ADD CONSTRAINT `duktek_pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `duktek_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `duktek_pemesanan_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `duktek_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `duktek_peminjaman`
--
ALTER TABLE `duktek_peminjaman`
  ADD CONSTRAINT `duktek_peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `duktek_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `duktek_peminjaman_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `duktek_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
