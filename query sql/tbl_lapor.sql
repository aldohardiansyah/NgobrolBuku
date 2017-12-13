-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 06:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngobrolbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lapor`
--

CREATE TABLE `tbl_lapor` (
  `lapor_ID` mediumint(8) NOT NULL,
  `pelapor` varchar(30) NOT NULL,
  `kategori_lapor` varchar(8) NOT NULL,
  `data_ID` mediumint(8) NOT NULL,
  `jenis_pelanggaran` text NOT NULL,
  `isi_laporan` longtext NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lapor`
--

INSERT INTO `tbl_lapor` (`lapor_ID`, `pelapor`, `kategori_lapor`, `data_ID`, `jenis_pelanggaran`, `isi_laporan`, `created_on`) VALUES
(10, 'AldoHardiansyah', 'Review', 6, 'Penghinaan', 'Bagus', '2017-07-05 11:50:10'),
(13, 'jenniferhanna', 'Review', 8, 'Seksual', '', '2017-07-12 23:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  ADD PRIMARY KEY (`lapor_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  MODIFY `lapor_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
