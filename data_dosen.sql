-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2019 at 04:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE `ADMIN` (
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ADMIN`
--

INSERT INTO `ADMIN` (`USERNAME`, `PASSWORD`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `DATA_DOSEN`
--

CREATE TABLE `DATA_DOSEN` (
  `ID_DOSEN` int(11) NOT NULL,
  `NAMA_DOSEN` varchar(255) NOT NULL,
  `KODE_DOSEN` varchar(4) NOT NULL,
  `NIDN` varchar(20) NOT NULL,
  `NIP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DATA_DOSEN`
--

INSERT INTO `DATA_DOSEN` (`ID_DOSEN`, `NAMA_DOSEN`, `KODE_DOSEN`, `NIDN`, `NIP`) VALUES
(1, 'Sambas Auditore', '7701', '1514131216171814', '1213141516171819'),
(2, 'Patrick Sambas Cormac', '7702', '1213141213141213', '1213141213141213');

-- --------------------------------------------------------

--
-- Table structure for table `DATA_MK`
--

CREATE TABLE `DATA_MK` (
  `ID_MK` int(11) NOT NULL,
  `ID_DOSEN` int(11) DEFAULT NULL,
  `NAMA_MK` varchar(255) DEFAULT NULL,
  `JURUSAN` varchar(255) DEFAULT NULL,
  `SKS` smallint(6) DEFAULT NULL,
  `SEMESTER` int(2) NOT NULL,
  `KURIKULUM` varchar(5) NOT NULL,
  `KELAS` varchar(5) NOT NULL,
  `HARI` varchar(10) NOT NULL,
  `JAM_MULAI` time NOT NULL,
  `JAM_SELESAI` time NOT NULL,
  `RUANG` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DATA_MK`
--

INSERT INTO `DATA_MK` (`ID_MK`, `ID_DOSEN`, `NAMA_MK`, `JURUSAN`, `SKS`, `SEMESTER`, `KURIKULUM`, `KELAS`, `HARI`, `JAM_MULAI`, `JAM_SELESAI`, `RUANG`) VALUES
(1, 2, 'Struktur Data', 'Teknik Informatika', 2, 3, '2015', 'A', 'Kamis', '07:00:00', '08:40:00', 'R 4.09'),
(2, 1, 'Algoritma dan Pemograman', 'Teknik Informatika', 2, 2, '2015', 'A', 'Rabu', '07:00:00', '08:40:00', 'R 4.10'),
(3, 1, 'Logika Informatika', 'Teknik Informatika', 3, 2, '2015', 'A', 'Senin', '12:40:00', '14:20:00', 'R. 4.01');

-- --------------------------------------------------------

--
-- Table structure for table `DATA_SURAT`
--

CREATE TABLE `DATA_SURAT` (
  `ID_SURAT` int(11) NOT NULL,
  `ID_DOSEN` int(11) NOT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `BUAT_SURAT` date NOT NULL,
  `PERIODE` varchar(255) DEFAULT NULL,
  `AWAL_SEM` date NOT NULL,
  `AKHIR_SEM` date NOT NULL,
  `AKHIR_SAP` date NOT NULL,
  `WADEK_3` varchar(255) NOT NULL,
  `NIP_WADEK_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DATA_SURAT`
--

INSERT INTO `DATA_SURAT` (`ID_SURAT`, `ID_DOSEN`, `TANGGAL_SURAT`, `BUAT_SURAT`, `PERIODE`, `AWAL_SEM`, `AKHIR_SEM`, `AKHIR_SAP`, `WADEK_3`, `NIP_WADEK_3`) VALUES
(1, 1, '2020-03-03', '2020-01-01', '2020/2021', '2020-04-04', '2020-08-08', '2020-04-12', 'Agung S B P', '1177050050050'),
(2, 1, '2020-01-20', '2020-01-01', '2019/2020', '2020-01-27', '2020-07-27', '2020-01-23', 'Agung S B P', '1177050050050'),
(3, 1, '2020-02-02', '2020-02-02', '2020/2021', '2020-02-02', '2020-02-02', '2020-02-02', 'Agung S B P', '1177050050050'),
(4, 1, '2020-02-02', '2020-02-02', '2019/2020', '2020-02-02', '2020-02-02', '2020-02-02', 'Agung S B P', '1177050050050'),
(5, 1, '2020-02-02', '2020-02-02', '2019/2020', '2020-02-02', '2020-02-02', '2020-02-02', 'Agung S B P', '1177050050050'),
(6, 1, '2020-02-02', '2020-02-02', '2019/2020', '2020-02-02', '2020-02-02', '2020-02-02', 'Agung S B P', '1177050050050'),
(7, 2, '2020-02-02', '2020-02-02', '2019/2020', '2020-02-02', '2020-02-02', '2020-02-02', 'Agung S B P', '17917917917');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DATA_DOSEN`
--
ALTER TABLE `DATA_DOSEN`
  ADD PRIMARY KEY (`ID_DOSEN`),
  ADD UNIQUE KEY `DATA_DOSEN_PK` (`ID_DOSEN`);

--
-- Indexes for table `DATA_MK`
--
ALTER TABLE `DATA_MK`
  ADD PRIMARY KEY (`ID_MK`),
  ADD UNIQUE KEY `DATA_MK_PK` (`ID_MK`),
  ADD KEY `MEMILIKI_FK` (`ID_DOSEN`);

--
-- Indexes for table `DATA_SURAT`
--
ALTER TABLE `DATA_SURAT`
  ADD PRIMARY KEY (`ID_SURAT`),
  ADD UNIQUE KEY `DATA_SURAT_PK` (`ID_SURAT`),
  ADD KEY `DATA_DOSEN_FK` (`ID_DOSEN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DATA_DOSEN`
--
ALTER TABLE `DATA_DOSEN`
  MODIFY `ID_DOSEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `DATA_MK`
--
ALTER TABLE `DATA_MK`
  MODIFY `ID_MK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `DATA_SURAT`
--
ALTER TABLE `DATA_SURAT`
  MODIFY `ID_SURAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `DATA_MK`
--
ALTER TABLE `DATA_MK`
  ADD CONSTRAINT `FK_DATA_MK_MEMILIKI_DATA_DOS` FOREIGN KEY (`ID_DOSEN`) REFERENCES `DATA_DOSEN` (`ID_DOSEN`);

--
-- Constraints for table `DATA_SURAT`
--
ALTER TABLE `DATA_SURAT`
  ADD CONSTRAINT `DATA_DOSEN_FK` FOREIGN KEY (`ID_DOSEN`) REFERENCES `DATA_DOSEN` (`ID_DOSEN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
