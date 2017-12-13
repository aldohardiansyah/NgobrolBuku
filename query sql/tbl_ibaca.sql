-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 06:21 PM
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
-- Table structure for table `tbl_ibaca`
--

CREATE TABLE `tbl_ibaca` (
  `ibaca_ID` mediumint(9) NOT NULL,
  `akun_ID` mediumint(8) NOT NULL,
  `buku_ID` mediumint(8) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ibaca`
--

INSERT INTO `tbl_ibaca` (`ibaca_ID`, `akun_ID`, `buku_ID`, `created_on`) VALUES
(1, 1, 1, '2017-07-04 09:20:53'),
(2, 1, 2, '2017-07-04 09:20:55'),
(3, 1, 3, '2017-07-04 09:20:57'),
(4, 2, 3, '2017-07-04 10:27:45'),
(5, 2, 2, '2017-07-04 10:27:49'),
(6, 3, 9, '2017-07-04 10:31:40'),
(7, 3, 6, '2017-07-06 11:44:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ibaca`
--
ALTER TABLE `tbl_ibaca`
  ADD PRIMARY KEY (`ibaca_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ibaca`
--
ALTER TABLE `tbl_ibaca`
  MODIFY `ibaca_ID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
