-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 04:39 PM
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
('admin', '21232f297a57a5a');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE IF NOT EXISTS `hewan` (
  `id_hewan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_hewan` varchar(20) NOT NULL,
  `jenis_hewan` enum('dog','cat','snake','fish','bird') NOT NULL,
  `usia` int(2) NOT NULL,
  PRIMARY KEY (`id_hewan`),
  KEY `nama_hewan` (`nama_hewan`),
  KEY `jenis_hewan` (`jenis_hewan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `nama_hewan`, `jenis_hewan`, `usia`) VALUES
(1, 'batsy', 'cat', 13),
(2, 'doge', 'dog', 5),
(3, 'moon', 'bird', 5),
(4, 'bolt', 'dog', 7),
(12, 'Nemo', 'fish', 12);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(5) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `nama`, `jk`, `alamat`, `email`, `no_hp`) VALUES
(5, 'febri', '4689c75fd0935ff', 'febriyanto ramadha', 'L', 'kalsel', 'febri@feb.com', 2147483647),
(6, 'kadafi', '*8AA0704DB9B987', 'kadafi', 'L', 'bantar gebang', 'kadafi@msad.com', 2147483647),
(7, 'faisal', 'ac43724f16e9241', 'faisal akbar', 'L', 'jogja', 'faishalike@gmail.com', 2147483647),
(10, 'joko', '5f4dcc3b5aa765d', 'joko anwar', 'L', 'jakarta', 'jokoanwar@gmail.com', 2147483647),
(11, 'rio', 'd5ed38fdbf28bc4', 'rio tondo', 'L', 'klaten', 'kulitmanggis@asia.com', 2147483647),
(12, 'rama', '202cb962ac59075', 'Rama R', 'L', 'jalan nusa indah', 'rama123@gmail.com', 123456789);

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
(1, 'admin', 'admin', 'mimin ganteng', 'programer', 'L', 'cloud server'),
(2, 'faisal', 'faisal', 'faisal', 'perkucingan', 'L', 'Magelang');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT,
  `id_member` int(5) NOT NULL,
  `id_hewan` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_servis` varchar(15) NOT NULL,
  `tipe_servis` int(3) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `pegawai` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `id` (`id_member`),
  KEY `id_hewan` (`id_hewan`),
  KEY `id_2` (`id_member`),
  KEY `id_3` (`id_member`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_member`, `id_hewan`, `tanggal`, `jenis_servis`, `tipe_servis`, `catatan`, `pegawai`) VALUES
(1, 5, 3, '2016-12-06', 'sadsa', 1, 'sadsadsa', NULL),
(2, 12, 12, '2016-12-30', 'treatment', 3, 'Tes', '2'),
(3, 12, 2, '2016-12-30', 'treatment', 3, 'Tes', NULL),
(4, 12, 12, '2016-12-30', 'treatment', 3, 'Tes', '2'),
(5, 12, 1, '2016-12-30', 'treatment', 3, 'Tes', NULL),
(6, 11, 4, '2016-12-31', 'treatment', 2, 'jangan kena sinar matahari', NULL);

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
