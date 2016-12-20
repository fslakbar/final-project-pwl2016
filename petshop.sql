-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 12:09 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE IF NOT EXISTS `hewan` (
  `id_hewan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_hewan` varchar(20) NOT NULL,
  `jml_hewan` int(3) NOT NULL,
  `jenis_hewan` varchar(20) NOT NULL,
  `usia` int(2) NOT NULL,
  PRIMARY KEY (`id_hewan`),
  KEY `nama_hewan` (`nama_hewan`),
  KEY `jenis_hewan` (`jenis_hewan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `nama_hewan`, `jml_hewan`, `jenis_hewan`, `usia`) VALUES
(1, 'batsy', 1, 'anjing', 13),
(2, 'doge', 1, 'kuciang', 5);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` int(15) NOT NULL,
  PRIMARY KEY (`id_member`),
  UNIQUE KEY `username` (`username`),
  KEY `nama` (`nama`),
  KEY `no_hp` (`no_hp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `nama`, `jk`, `alamat`, `email`, `no_hp`) VALUES
(5, 'febri', 'febri', 'febriyanto', 'L', 'kalsel', 'febri@feb.com', 2147483647),
(7, 'faisal', 'rahasia', 'faisal akbar', 'L', 'jogja', 'faishalike@gmail.com', 2147483647),
(9, 'akbar', 'rahasia', 'm. akbar', 'L', 'jogja', 'faishalike@gmail.com', 2147483647),
(10, 'joko', 'password', 'joko anwar', 'L', 'jakarta', 'jokoanwar@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keahlian` varchar(25) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `nama`, `keahlian`, `jk`, `alamat`) VALUES
(1, 'admin', 'rahasia', 'mimin ganteng', 'programer', 'L', NULL),
(2, 'faisal', 'faisal', 'faisal', 'perkucingan', 'L', 'Magelang');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT,
  `id_member` int(5) NOT NULL,
  `id_hewan` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_hewan` varchar(10) NOT NULL,
  `nama_hewan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_servis` varchar(15) NOT NULL,
  `tipe_servis` int(3) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `action` enum('terima','tolak') DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `id` (`id_member`),
  KEY `id_hewan` (`id_hewan`),
  KEY `jenis_hewan` (`jenis_hewan`),
  KEY `nama_hewan` (`nama_hewan`),
  KEY `nama` (`nama`),
  KEY `no_hp` (`no_hp`),
  KEY `id_2` (`id_member`),
  KEY `id_3` (`id_member`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_member`, `id_hewan`, `nama`, `jenis_hewan`, `nama_hewan`, `tanggal`, `jenis_servis`, `tipe_servis`, `catatan`, `no_hp`, `action`) VALUES
(1, 5, 1, 'faisalaaaa', 'anjing', 'doge', '2016-12-06', 'sadsa', 1, 'sadsadsa', 2147483647, 'terima');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_10` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_9` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
