-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2017 at 03:33 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `track`
--

-- --------------------------------------------------------

--
-- Table structure for table `at_lembaga`
--

CREATE TABLE IF NOT EXISTS `at_lembaga` (
  `kode` char(5) NOT NULL default '',
  `nama` char(100) default NULL,
  PRIMARY KEY  (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `at_lembaga`
--

INSERT INTO `at_lembaga` (`kode`, `nama`) VALUES
('100', 'DETECTION'),
('101', 'YOGYAKARTA 1'),
('102', 'YOGYAKARTA 2'),
('103', 'YOGYAKARTA 3'),
('104', 'YOGYAKARTA 4'),
('105', 'YOGYAKARTA 5'),
('106', 'YOGYAKARTA 6'),
('107', 'YOGYAKARTA 7'),
('108', 'YOGYAKARTA 8'),
('109', 'YOGYAKARTA 9'),
('110', 'YOGYAKARTA 10'),
('111', 'YOGYAKARTA 11'),
('112', 'YOGYAKARTA 12'),
('113', 'YOGYAKARTA 13'),
('114', 'YOGYAKARTA 14'),
('211', 'KLATEN 1'),
('212', 'KLATEN 2'),
('213', 'SURAKARTA 1'),
('214', 'SURAKARTA 2'),
('215', 'MADIUN 1'),
('216', 'MADIUN 2'),
('217', 'SRAGEN'),
('218', 'BOYOLALI'),
('219', 'SALATIGA 1'),
('220', 'SURABAYA 1'),
('221', 'MALANG 1'),
('222', 'SURAKARTA 3'),
('223', 'KEDIRI 1'),
('224', 'BALI 1'),
('226', 'SURABAYA 2'),
('227', 'MALANG 2'),
('228', 'SURABAYA 3'),
('229', 'SALATIGA 2'),
('230', 'WONOGIRI'),
('231', 'KEDIRI 2'),
('232', 'KARANGANYAR'),
('233', 'SURABAYA 4'),
('234', 'BALI 2'),
('235', 'KLATEN 3'),
('236', 'KLATEN 4'),
('237', 'JEMBER 1'),
('238', 'JEMBER 2'),
('239', 'BONDOWOSO'),
('240', 'TULUNGAGUNG'),
('330', 'GOMBONG'),
('331', 'WATES'),
('332', 'PURWOREJO'),
('333', 'KEBUMEN'),
('334', 'PURWOKERTO'),
('335', 'CILACAP'),
('336', 'SOKARAJA'),
('337', 'PURBALINGGA'),
('338', 'BANDUNG 1'),
('339', 'BANDUNG 2'),
('340', 'BANDUNG 3'),
('341', 'BANDUNG 4'),
('342', 'BANDUNG 5'),
('343', 'BANDUNG 6'),
('344', 'BANJARNEGARA'),
('440', 'CIREBON 1'),
('441', 'MAGELANG'),
('442', 'SEMARANG 4'),
('443', 'SEMARANG 1'),
('444', 'SEMARANG 2'),
('445', 'SEMARANG 3a'),
('446', 'KUDUS'),
('447', 'PATI'),
('448', 'KENDAL'),
('449', 'CIREBON 2'),
('450', 'PEKALONGAN 1'),
('451', 'TEGAL 1'),
('452', 'PEKALONGAN 2'),
('453', 'TEGAL 2'),
('454', 'PEMALANG'),
('455', 'BREBES'),
('456', 'SLAWI 1'),
('457', 'KUNINGAN'),
('458', 'TEMANGGUNG'),
('459', 'BATANG'),
('461', 'SEMARANG 5'),
('462', 'SEMARANG 3b'),
('463', 'PEKALONGAN 3'),
('464', 'MAGELANG 2'),
('465', 'SEMARANG 6'),
('466', 'WONOSOBO'),
('099', 'NEUTRON PRIORITY'),
('225', 'SUKOHARJO'),
('241', 'MALANG 3'),
('242', 'PARE'),
('115', 'YOGYAKARTA 16'),
('116', 'YOGYAKARTA 17'),
('117', 'YOGYAKARTA 18'),
('118', 'YOGYAKARTA 19');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIK` varchar(30) NOT NULL,
  `NmKaryawan` varchar(30) NOT NULL,
  `AlmtKaryawan` varchar(50) NOT NULL,
  `TelpKaryawan` varchar(20) NOT NULL,
  `GenderKaryawan` varchar(15) NOT NULL,
  `foto` float NOT NULL,
  PRIMARY KEY  (`NIK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `NmKaryawan`, `AlmtKaryawan`, `TelpKaryawan`, `GenderKaryawan`, `foto`) VALUES
('340314119876201', 'Arifi zulaika 75', 'Wonosari', '09817292010', 'Laki - laki', 0),
('340314119876202', 'Rahmad jadmiko R', 'Semanu', '091817319301', 'Laki - laki	', 0),
('340314119876203', 'Dicki Kurniawan', 'Dlingo', '0923972873871', 'Laki - laki', 0),
('340314119876204', 'Aan Sabani', 'Mulusan', '20192017239128', 'Laki - laki', 0),
('340314119876205', 'Alya Nurmanah', 'Semanu', '098274637622', 'Wanita', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `NIK` varchar(30) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `TypeUser` varchar(8) NOT NULL,
  PRIMARY KEY  (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`NIK`, `UserName`, `Password`, `TypeUser`) VALUES
('340314119876200', 'admin', 'admin', 'Admin'),
('340314119876201', 'operator', 'operator', 'Operator'),
('340314119876202', 'owner', 'owner', 'Owner'),
('340314589303122', 'arifi', 'arifi', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `utama`
--

CREATE TABLE IF NOT EXISTS `utama` (
  `id_cabang` int(11) NOT NULL auto_increment,
  `no_kirim` varchar(30) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `via` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `scanning` varchar(40) NOT NULL,
  `printing` varchar(40) NOT NULL,
  `packing` varchar(40) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY  (`id_cabang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `utama`
--

INSERT INTO `utama` (`id_cabang`, `no_kirim`, `cabang`, `via`, `tgl_masuk`, `scanning`, `printing`, `packing`, `tgl_kirim`, `tgl_terima`, `ket`) VALUES
(65, '2640/30/VII/2017', 'BALI 1', 'Paket', '2017-07-01', 'Sudah', 'Sudah', 'Sudah', '2017-07-05', '0000-00-00', 'Paket Sudah dikim'),
(69, '2642/1/VII/2017', 'CIREBON 1', 'Paket', '2017-07-04', 'Sudah', 'Sudah', 'Sudah', '2017-07-05', '0000-00-00', 'Paket Sudah dikim'),
(68, '2641/33/VII/2017', 'BANDUNG 5', 'Paket', '2017-07-04', 'Sudah', 'Sudah', 'Sudah', '2017-07-05', '0000-00-00', 'Paket Sudah dikim'),
(70, '2643/39/VII/2017', 'MALANG 2', 'Paket', '2017-07-04', 'Sudah', 'Sudah', 'Sudah', '2017-07-05', '0000-00-00', 'Paket Sudah dikim');
