-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2022 at 12:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ortn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_m_golongan`
--

DROP TABLE IF EXISTS `tb_m_golongan`;
CREATE TABLE IF NOT EXISTS `tb_m_golongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL DEFAULT 'System',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_m_golongan`
--

INSERT INTO `tb_m_golongan` (`id`, `kode`, `deskripsi`, `created_by`, `created`, `modified_by`, `modified`, `deleted`) VALUES
(1, 'Ia', 'Juru Muda', 'System', '2022-01-30 10:33:29', NULL, NULL, 0),
(2, 'Ib', 'Juru Muda Tingkat I', 'System', '2022-01-30 10:33:49', NULL, NULL, 0),
(3, 'Ic', 'Juru', 'System', '2022-01-30 10:34:10', NULL, NULL, 0),
(4, 'Id', 'Juru Tingkat I', 'System', '2022-01-30 10:34:19', NULL, NULL, 0),
(5, 'IIa', 'Pengatur Muda', 'System', '2022-01-30 10:34:32', NULL, NULL, 0),
(6, 'IIb', 'Pengatur Muda Tingkat I', 'System', '2022-01-30 10:34:45', NULL, NULL, 0),
(7, 'IIc', 'Pengatur', 'System', '2022-01-30 10:34:55', NULL, NULL, 0),
(8, 'IId', 'Pengatur Tingkat I', 'System', '2022-01-30 10:35:07', NULL, NULL, 0),
(9, 'IIIa', 'Penata Muda', 'System', '2022-01-30 10:35:20', NULL, NULL, 0),
(10, 'IIIb', 'Penata Muda Tingkat I', 'System', '2022-01-30 10:35:30', NULL, NULL, 0),
(11, 'IIIc', 'Penata', 'System', '2022-01-30 10:35:42', NULL, NULL, 0),
(12, 'IIId', 'Penata Tingkat I', 'System', '2022-01-30 10:35:59', NULL, NULL, 0),
(13, 'IVa', 'Pembina', 'System', '2022-01-30 10:36:10', NULL, NULL, 0),
(14, 'IVb', 'Pembina Tingkat I', 'System', '2022-01-30 10:36:19', NULL, NULL, 0),
(15, 'IVc', 'Pembina Muda', 'System', '2022-01-30 10:36:27', NULL, NULL, 0),
(16, 'IVd', 'Pembina Madya', 'System', '2022-01-30 10:36:34', NULL, NULL, 0),
(17, 'IVe', 'Pembina Utama', 'System', '2022-01-30 10:36:49', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_m_jabatan`
--

DROP TABLE IF EXISTS `tb_m_jabatan`;
CREATE TABLE IF NOT EXISTS `tb_m_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(100) NOT NULL,
  `created_by` varchar(50) NOT NULL DEFAULT 'System',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT '',
  `modified` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_m_jabatan`
--

INSERT INTO `tb_m_jabatan` (`id`, `deskripsi`, `created_by`, `created`, `modified_by`, `modified`, `deleted`) VALUES
(1, 'Analis Anggaran', 'System', '2022-01-30 11:01:42', '', NULL, 0),
(2, 'Analis Keuangan Pusat dan Daerah', 'System', '2022-01-30 11:01:52', '', NULL, 0),
(3, 'Pelelang', 'System', '2022-01-30 11:02:10', '', NULL, 0),
(4, 'Pemeriksa Bea dan Cukai', 'System', '2022-01-30 11:02:17', '', NULL, 0),
(5, 'Pemeriksa Pajak', 'System', '2022-01-30 11:02:23', '', NULL, 0),
(6, 'Asisten Penilai Pajak', 'System', '2022-01-30 11:02:31', '', NULL, 0),
(7, 'Penilai Pajak', 'System', '2022-01-30 11:02:45', '', NULL, 0),
(8, 'Penilai Pemerintah', 'System', '2022-01-30 11:02:56', '', NULL, 0),
(9, 'Penyuluh Pajak', 'System', '2022-01-30 11:03:02', '', NULL, 0),
(10, 'Asisten Penyuluh Pajak', 'System', '2022-01-30 11:03:13', '', NULL, 0),
(11, 'Pranata Keuangan APBN', 'System', '2022-01-30 11:03:26', '', NULL, 0),
(12, 'Analis Pengelolaan Keuangan APBN', 'System', '2022-01-30 11:03:37', '', NULL, 0),
(13, 'Analis Perbendaharaan Negara', 'System', '2022-01-30 11:03:49', '', NULL, 0),
(14, 'Pembina Teknis Perbendaharaan Negara', 'System', '2022-01-30 11:04:01', '', NULL, 0),
(15, 'Analis Pembiayaan dan Resiko Keuangan', 'System', '2022-01-30 11:04:13', '', NULL, 0),
(16, 'Penata Laksana Barang', 'System', '2022-01-30 11:04:21', '', NULL, 0),
(17, 'Pembina Profesi Keuangan', 'System', '2022-01-30 11:04:32', '', NULL, 0),
(18, 'Asisten Pembina Profesi Keuangan', 'System', '2022-01-30 11:04:38', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_m_pegawai`
--

DROP TABLE IF EXISTS `tb_m_pegawai`;
CREATE TABLE IF NOT EXISTS `tb_m_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL DEFAULT 'System',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`nip`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_m_pegawai`
--

INSERT INTO `tb_m_pegawai` (`id`, `nip`, `nama`, `golongan`, `npwp`, `norek`, `jabatan`, `created_by`, `created`, `modified_by`, `modified`, `deleted`) VALUES
(1, '123', 'John Cena', '1', '123', '123', 1, 'System', '2022-01-15 14:09:32', NULL, NULL, 0),
(2, '121', 'Curtis Ward', '2', '123', '123', 2, 'System', '2022-01-15 14:10:07', NULL, NULL, 0),
(3, '122', 'Craig Mabbit', '3', '123', '123', 3, 'System', '2022-01-15 14:10:23', NULL, NULL, 0),
(4, '124', 'Danny Worsnop', '4', '123', '123', 3, 'System', '2022-01-15 14:10:46', NULL, NULL, 0),
(5, '125', 'Sergio Gnabry', '5', '123', '123', 5, 'System', '2022-01-15 14:11:10', NULL, NULL, 0),
(6, '126', 'Thomas Muller', '6', '123', '123', 7, 'System', '2022-01-15 14:11:27', NULL, NULL, 0),
(7, '127', 'Eden Hazard', '7', '123', '123', 6, 'System', '2022-01-15 14:11:39', NULL, NULL, 0),
(8, '128', 'Timo Werner', '5', '123', '123', 4, 'System', '2022-01-15 14:11:56', NULL, NULL, 0),
(9, '129', 'Hakim Ziyech', '4', '123', '123', 3, 'System', '2022-01-15 14:12:09', NULL, NULL, 0),
(10, '130', 'Morgan Freeman', '5', '123', '123', 2, 'System', '2022-01-15 14:12:20', NULL, NULL, 0),
(11, '131', 'Jonas Bjerre', '7', '123', '123', 2, 'System', '2022-01-15 14:12:45', NULL, NULL, 0),
(12, '132', 'Jonsi Birgisson', '9', '123', '123', 1, 'System', '2022-01-15 14:13:25', NULL, NULL, 0),
(13, '133', 'Billie Joe Armstrong', '2', '123', '123', 3, 'System', '2022-01-15 14:14:00', NULL, NULL, 0),
(14, '134', 'Anissa Rodriguez', '1', '123', '123', 4, 'System', '2022-01-15 14:14:53', NULL, NULL, 0),
(15, '135', 'Alexia Rodriguez', '3', '123', '123', 7, 'System', '2022-01-15 14:15:23', NULL, NULL, 0),
(16, '136', 'Albert Wesker', '10', '123', '123', 8, 'System', '2022-01-15 14:15:46', NULL, NULL, 0),
(17, '137', 'Ada Wong', '1', '123', '123', 9, 'System', '2022-01-15 14:16:01', NULL, NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
