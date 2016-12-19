-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2016 at 02:01 AM
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
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_hewan` int(5) NOT NULL,
  `no_hp` int(15) NOT NULL,
  PRIMARY KEY (`id_member`),
  UNIQUE KEY `username` (`username`),
  KEY `id_hewan` (`id_hewan`),
  KEY `nama` (`nama`),
  KEY `no_hp` (`no_hp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `nama`, `jk`, `alamat`, `email`, `id_hewan`, `no_hp`) VALUES
(5, 'faishalike', 'febri', 'faisalaaaa', 'L', 'jogjaa', 'febri@feb.com', 1, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keahlian` varchar(25) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_pegawai`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `nama`, `keahlian`, `jk`, `status`, `alamat`, `foto`) VALUES
(1, 'admin', 'rahasia', 'mimin ganteng', 'programer', 'l', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_member` int(5) NOT NULL,
  `id_pegawai` int(4) NOT NULL,
  `id_hewan` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_hewan` varchar(10) NOT NULL,
  `nama_hewan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_servis` varchar(15) NOT NULL,
  `tipe_servis` int(3) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `no_hp` int(15) NOT NULL,
  KEY `id` (`id_member`),
  KEY `id_pegawai` (`id_pegawai`),
  KEY `id_hewan` (`id_hewan`),
  KEY `jenis_hewan` (`jenis_hewan`),
  KEY `nama_hewan` (`nama_hewan`),
  KEY `nama` (`nama`),
  KEY `no_hp` (`no_hp`),
  KEY `id_2` (`id_member`),
  KEY `id_3` (`id_member`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_5` FOREIGN KEY (`jenis_hewan`) REFERENCES `hewan` (`jenis_hewan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_6` FOREIGN KEY (`nama_hewan`) REFERENCES `hewan` (`nama_hewan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_7` FOREIGN KEY (`nama`) REFERENCES `member` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_8` FOREIGN KEY (`no_hp`) REFERENCES `member` (`no_hp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_9` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
