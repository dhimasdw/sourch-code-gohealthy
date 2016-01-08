-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2016 at 03:21 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE IF NOT EXISTS `tabel_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'teguhpri', 'jukol');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jual`
--

CREATE TABLE IF NOT EXISTS `tabel_jual` (
  `nama_konsumen` varchar(100) NOT NULL,
  `total_di_bayar` int(100) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jual`
--

INSERT INTO `tabel_jual` (`nama_konsumen`, `total_di_bayar`, `bayar`, `kembali`) VALUES
('deodeded', 0, 40000, 7000),
('fjfjif', 0, 20000, 5000),
('jkk b', 0, 900000, 633000),
('l;mkn', 0, 20000, 2000),
('mook', 0, 300, 0),
('muncen', 0, 20000, 0),
('sedede', 0, 444, 0),
('wanyad', 0, 20000, 5000),
('wokl', 0, 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jual_data`
--

CREATE TABLE IF NOT EXISTS `tabel_jual_data` (
  `nama_konsumen` varchar(100) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(10) NOT NULL,
  `pilih_obat` varchar(10) NOT NULL,
  `harga_obat_satuan` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `harga_akhir` int(11) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jual_data`
--

INSERT INTO `tabel_jual_data` (`nama_konsumen`, `nama_obat`, `jenis_obat`, `pilih_obat`, `harga_obat_satuan`, `jumlah_beli`, `harga_akhir`, `no`) VALUES
('huhu', 'Bodrexin', 'Tablet', 'kepala', 3000, 2, 6000, 85),
('huhu', 'Tramadol', 'Tablet', 'kepala', 10000, 2, 20000, 86),
('jungkir', 'Beras Kencur', 'Cair', 'badan', 3000, 20, 60000, 87),
('gogok', 'Beras Kencur', 'Cair', 'badan', 3000, 5, 15000, 88),
('gogok', 'Kuku bima', 'Sashet', 'badan', 2000, 4, 8000, 89),
('rrrreesdd', 'Bodrexin', 'Tablet', 'kepala', 3000, 5, 15000, 90),
('kokog', 'Beras Kencur', 'Cair', 'badan', 3000, 5, 15000, 91),
('klnkn', 'Beras Kencur', 'Cair', 'badan', 3000, 70, 210000, 92),
('jkk b', 'Beras Kencur', 'Cair', 'badan', 3000, 89, 267000, 93),
('deodeded', 'Beras Kencur', 'Cair', 'badan', 3000, 11, 33000, 94),
('fjfjif', 'Beras Kencur', 'Cair', 'badan', 3000, 5, 15000, 95),
('knknknk', 'Bodrexin', 'Tablet', 'kepala', 3000, 5, 15000, 96),
('kolpk', 'Beras Kencur', 'Cair', 'badan', 3000, 7, 21000, 97),
('kninini', 'Beras Kencur', 'Cair', 'badan', 3000, 7, 21000, 98),
('nnjnjnj', 'Beras Kencur', 'Cair', 'badan', 3000, 6, 18000, 99),
('knnkn', 'Beras Kencur', 'Cair', 'badan', 3000, 6, 18000, 100),
('lll,l,', 'Beras Kencur', 'Cair', 'badan', 3000, 2, 6000, 101),
('l;mkn', 'Beras Kencur', 'Cair', 'badan', 3000, 6, 18000, 102),
('lldmmdl', 'Beras Kencur', 'Cair', 'badan', 3000, 20, 60000, 103),
('lldmmdl', 'Bodrexin', 'Tablet', 'kepala', 3000, 2, 6000, 104),
('wanyad', 'Beras Kencur', 'Cair', 'badan', 3000, 2, 6000, 105),
('wanyad', 'Beras Kencur', 'Cair', 'badan', 3000, 3, 9000, 106),
('muncen', 'Extra joss', 'Cair', 'badan', 1200, 10, 12000, 107),
('muncen', 'Tramadol', 'Tablet', 'kepala', 10000, 10, 100000, 108),
('mook', 'Beras Kencur', 'Cair', 'badan', 3000, 2, 6000, 109),
('wokl', 'Beras Kencur', 'Cair', 'badan', 3000, 3, 9000, 110),
('sedede', 'Beras Kencur', 'Cair', 'badan', 3000, 3, 9000, 111);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_member`
--

CREATE TABLE IF NOT EXISTS `tabel_member` (
  `id_member` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_rekening` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_member`
--

INSERT INTO `tabel_member` (`id_member`, `email`, `password`, `username`, `no_telp`, `alamat`, `no_rekening`) VALUES
(5, 'kontol', 'titit', 'silit', 0, '', 0),
(6, 'gggg', 'jjj', 'hhh', 8888, '', 0),
(7, 'ggggss', 'jjjsss', 'hhhkos', 888866, '', 0),
(9, 'holaholos@gmail.com', 'juntakddd', 'DONOdddd', 89500533, '', 0),
(11, 'doooo@gmail.com', 'jijik', 'dhon', 383847, '', 0),
(12, 'kuncoro@fmail.com', 'kuncorohim', 'kuncoro', 0, '', 0),
(14, 'cara1@gmail.co.id', 'caracara', 'cara', 2147483647, '', 0),
(15, 'dododo@gmail.com', 'juned', 'teguh', 983928, 'wjswjdbwjbdjwd', 2147483647),
(16, 'niwe', 'ncnw', 'ww', 222222232, 'wnfiw', 2323);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_obat`
--

CREATE TABLE IF NOT EXISTS `tabel_obat` (
  `stok_obat` int(5) NOT NULL,
  `harga_obat` int(10) NOT NULL,
  `id_obat` int(4) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `jenis_obat` enum('Sashet','Tablet','Cair') NOT NULL,
  `pilih_obat` enum('badan','kepala') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_obat`
--

INSERT INTO `tabel_obat` (`stok_obat`, `harga_obat`, `id_obat`, `nama_obat`, `jenis_obat`, `pilih_obat`) VALUES
(490, 10000, 32, 'Tramadol', 'Tablet', 'kepala'),
(458, 1200, 33, 'Extra joss', 'Cair', 'badan'),
(482, 2000, 34, 'Kuku bima', 'Sashet', 'badan'),
(278, 3000, 35, 'Bodrexin', 'Tablet', 'kepala'),
(488, 2000, 36, 'Oskadon', 'Tablet', 'kepala'),
(128, 3000, 37, 'Beras Kencur', 'Cair', 'badan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penyakit`
--

CREATE TABLE IF NOT EXISTS `tabel_penyakit` (
  `id_penyakit` int(3) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `info_penyakit` varchar(500) NOT NULL,
  `pilih_penyakit` enum('badan','kepala') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_penyakit`
--

INSERT INTO `tabel_penyakit` (`id_penyakit`, `nama_penyakit`, `info_penyakit`, `pilih_penyakit`) VALUES
(3, 'kkkk', 'lujyjddd', 'kepala'),
(4, 'mmmm', 'jhhh', 'kepala'),
(9, 'titit', 'kopok', 'kepala'),
(10, 'lop', 'ss', 'badan'),
(11, 'gundul', 'wodjdwbfewufb', 'badan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_jual`
--
ALTER TABLE `tabel_jual`
  ADD PRIMARY KEY (`nama_konsumen`);

--
-- Indexes for table `tabel_jual_data`
--
ALTER TABLE `tabel_jual_data`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tabel_member`
--
ALTER TABLE `tabel_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tabel_obat`
--
ALTER TABLE `tabel_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_jual_data`
--
ALTER TABLE `tabel_jual_data`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `tabel_member`
--
ALTER TABLE `tabel_member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tabel_obat`
--
ALTER TABLE `tabel_obat`
  MODIFY `id_obat` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  MODIFY `id_penyakit` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
