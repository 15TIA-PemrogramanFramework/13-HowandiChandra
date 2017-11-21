-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 10:25 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibuanakdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `idanak` int(11) NOT NULL,
  `idibu` int(11) NOT NULL,
  `namaanak` varchar(255) NOT NULL,
  `berat_lahir` int(11) NOT NULL,
  `tinggi_lahir` int(11) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `gdarahanak` varchar(255) NOT NULL,
  `anakke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`idanak`, `idibu`, `namaanak`, `berat_lahir`, `tinggi_lahir`, `jk`, `gdarahanak`, `anakke`) VALUES
(1, 1, 'Kenzie Orlando NewHanson', 4, 52, 'LAKI - LAKI', 'AB', 1),
(2, 2, 'Angel', 4, 49, 'Wanita', 'O', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE `ibu` (
  `idibu` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namaibu` varchar(255) NOT NULL,
  `tanggallahiribu` date NOT NULL,
  `tempatlahiribu` varchar(255) NOT NULL,
  `gdarahibu` varchar(255) NOT NULL,
  `notelepon` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ibu`
--

INSERT INTO `ibu` (`idibu`, `username`, `password`, `namaibu`, `tanggallahiribu`, `tempatlahiribu`, `gdarahibu`, `notelepon`, `alamat`) VALUES
(1, 'lisa', 'lisa1234', 'Lisa Sofiana', '1989-01-05', 'Pekanbaru', 'AB', '081277861589', 'Jalan Pembangunan 1 No 11'),
(2, 'ria', 'ria1234', 'Ria Susanti', '1985-03-14', 'Dumai', 'O', '081268638956', 'Jalan Gurami 1 No 57 Rumbai');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `idimunisasi` int(11) NOT NULL,
  `idanak` int(11) NOT NULL,
  `tglimunisasi` date NOT NULL,
  `tempat_imunisasi` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`idimunisasi`, `idanak`, `tglimunisasi`, `tempat_imunisasi`, `jenis`) VALUES
(1, 1, '2016-09-28', 'Rumah Sakit Andini', 'Hepatitis B'),
(2, 2, '2018-11-11', 'Rumah Sakit Andini', 'PVC');

-- --------------------------------------------------------

--
-- Table structure for table `perkembangan`
--

CREATE TABLE `perkembangan` (
  `idperkembangan` int(11) NOT NULL,
  `idanak` int(11) NOT NULL,
  `tglperkembangan` date NOT NULL,
  `gerakan_kasar` varchar(255) NOT NULL,
  `gerakan_halus` varchar(255) NOT NULL,
  `komunikasi` varchar(255) NOT NULL,
  `kemandirian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perkembangan`
--

INSERT INTO `perkembangan` (`idperkembangan`, `idanak`, `tglperkembangan`, `gerakan_kasar`, `gerakan_halus`, `komunikasi`, `kemandirian`) VALUES
(1, 1, '2016-10-08', 'Tangan kaki gerak aktif', 'Kepala menoleh ', 'Bereaksi bunyi lonceng', 'Menatap wajah ibu'),
(2, 2, '2018-11-02', 'Angkat kepala', 'Menoleh kesamping', 'Bersuara', 'Tersenyum spontan');

-- --------------------------------------------------------

--
-- Table structure for table `persalinan`
--

CREATE TABLE `persalinan` (
  `idpersalinan` int(11) NOT NULL,
  `idanak` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat_lahir` varchar(255) NOT NULL,
  `waktu_lahir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persalinan`
--

INSERT INTO `persalinan` (`idpersalinan`, `idanak`, `tanggal_lahir`, `tempat_lahir`, `alamat_lahir`, `waktu_lahir`) VALUES
(1, 1, '2016-09-28', 'Rumah Sakit Andini', 'Jalan Tuanku Tambusai No. 55 Pekanbaru', '07.37'),
(2, 2, '2018-10-08', 'Rumah sakit awal bros', 'Jalan Sudirman Pekanbaru', '07.00');

-- --------------------------------------------------------

--
-- Table structure for table `pertumbuhan`
--

CREATE TABLE `pertumbuhan` (
  `idpertumbuhan` int(11) NOT NULL,
  `idanak` int(11) NOT NULL,
  `tgltumbuh` date NOT NULL,
  `tinggitumbuh` int(11) NOT NULL,
  `berattumbuh` int(11) NOT NULL,
  `lingkarkepalatumbuh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pertumbuhan`
--

INSERT INTO `pertumbuhan` (`idpertumbuhan`, `idanak`, `tgltumbuh`, `tinggitumbuh`, `berattumbuh`, `lingkarkepalatumbuh`) VALUES
(1, 1, '2016-10-08', 55, 4, 49),
(2, 2, '2018-11-02', 60, 6, 51);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`idanak`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`idibu`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`idimunisasi`);

--
-- Indexes for table `perkembangan`
--
ALTER TABLE `perkembangan`
  ADD PRIMARY KEY (`idperkembangan`);

--
-- Indexes for table `persalinan`
--
ALTER TABLE `persalinan`
  ADD PRIMARY KEY (`idpersalinan`);

--
-- Indexes for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  ADD PRIMARY KEY (`idpertumbuhan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `idanak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ibu`
--
ALTER TABLE `ibu`
  MODIFY `idibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `idimunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perkembangan`
--
ALTER TABLE `perkembangan`
  MODIFY `idperkembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `persalinan`
--
ALTER TABLE `persalinan`
  MODIFY `idpersalinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  MODIFY `idpertumbuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
