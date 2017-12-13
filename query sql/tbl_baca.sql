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
-- Table structure for table `tbl_baca`
--

CREATE TABLE `tbl_baca` (
  `baca_id` mediumint(9) NOT NULL,
  `akun_ID` mediumint(8) NOT NULL,
  `buku_ID` mediumint(8) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_baca`
--

INSERT INTO `tbl_baca` (`baca_id`, `akun_ID`, `buku_ID`, `created_on`) VALUES
(1, 1, 1, '2017-07-04 09:20:05'),
(3, 2, 5, '2017-07-04 10:27:27'),
(4, 3, 11, '2017-07-04 10:30:03'),
(5, 3, 4, '2017-07-04 10:30:49'),
(6, 2, 1, '2017-07-05 06:17:12'),
(7, 1, 5, '2017-07-06 06:14:57'),
(8, 3, 2, '2017-07-06 11:44:03'),
(9, 3, 6, '2017-07-06 11:46:15'),
(10, 1, 2, '2017-07-12 17:21:42'),
(11, 1, 10, '2017-07-12 17:21:54'),
(12, 1, 2, '2017-07-12 17:38:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_baca`
--
ALTER TABLE `tbl_baca`
  ADD PRIMARY KEY (`baca_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_baca`
--
ALTER TABLE `tbl_baca`
  MODIFY `baca_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
