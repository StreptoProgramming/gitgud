-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 06:17 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbabsenasalam`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `idabsensi` int(255) NOT NULL,
  `tanggal` date NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`idabsensi`, `tanggal`, `namasiswa`, `kelas`, `status`) VALUES
(1, '2019-07-19', 'dsaasasd', 'ddwdswws', 'wdw');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('baim', '123');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `namakelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`namakelas`) VALUES
('7A');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `idlog` int(255) NOT NULL,
  `namasiswa` varchar(100) DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `uid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`idlog`, `namasiswa`, `kelas`, `tanggal`, `waktu`, `uid`) VALUES
(1, 'sawal', '7A', '2019-07-10', '11:00:00', '12 34 34 32');

-- --------------------------------------------------------

--
-- Table structure for table `piket`
--

CREATE TABLE `piket` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekap`
--

CREATE TABLE `rekap` (
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `sakit` int(255) DEFAULT NULL,
  `izin` int(255) DEFAULT NULL,
  `alpha` int(255) DEFAULT NULL,
  `hadir` int(255) DEFAULT NULL,
  `terlambat` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `idrule` int(255) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktumulaimasuk` time DEFAULT NULL,
  `waktumulaikeluar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`idrule`, `keterangan`, `tanggal`, `waktumulaimasuk`, `waktumulaikeluar`) VALUES
(1, 'hari raya', '2019-07-27', '12:39:00', '13:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nomorinduksiswa` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `uid` varchar(100) DEFAULT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nomorinduksiswa`, `password`, `namasiswa`, `uid`, `kelas`) VALUES
('232', 'sdaad', 'sawal', '12 34 34 32', '7A'),
('dh37r3457y37', 'jbfbrfhbh', 'hafis karim', '', '7A');

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE `wali` (
  `nomorindukwali` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namawali` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`nomorindukwali`, `password`, `namawali`, `kelas`) VALUES
('3536546', 'refgvfd', 'zaky', '7A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`idabsensi`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idlog`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`idrule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `idabsensi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `idrule` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
