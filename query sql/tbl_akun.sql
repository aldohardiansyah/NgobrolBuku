-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 07:02 AM
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
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `akun_ID` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(75) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `jenis_kel` varchar(1) NOT NULL,
  `role_user` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `birthdate` date NOT NULL,
  `last_login_time` time DEFAULT NULL,
  `last_login_date` date NOT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`akun_ID`, `username`, `firstname`, `lastname`, `jenis_kel`, `role_user`, `password`, `email`, `address`, `telephone`, `birthdate`, `last_login_time`, `last_login_date`, `active`, `created_on`) VALUES
(1, 'AldoHardiansyah', 'Aldo', 'Hardiansyah', 'L', 'Admin', '23021996', 'aldohardiansyah@gmail.com', 'Jakarta', '085888114229', '1996-05-02', '11:32:40', '2017-07-03', 0, '0000-00-00'),
(2, 'JenniferHanna', 'Jennifer', 'Hanna', 'P', 'User', '123456789', 'JenniferHanna@Gmail.com', 'Malang', '085719226775', '1998-01-26', '05:13:41', '2017-07-03', 0, '0000-00-00'),
(5, 'PetraGR', 'Petra', 'Gilang Ramadhan', 'L', 'User', 'AprilliaRosita', 'Bloodseeker@gmail.com', 'Bandung', '', '1996-06-16', '22:25:11', '2017-06-24', 0, '2017-06-20'),
(7, 'AnindithaR', 'Aninditha', 'Rahma', 'P', 'User', 'AninAldo', 'Anindithar@gmail.com', 'Depok', '', '1999-01-05', '11:34:34', '2017-07-03', 1, '2017-06-27'),
(8, 'Ameliyuw', 'Amelia', 'Yuwono', 'P', 'User', '$2y$10$xzYTQ7z3DquJjgIis/oE7eaGNQwHmzKoZahM6Z0rcB3Fx6UvW4Rim', 'Ameliyuw@gmail.com', 'Surabaya', '', '1980-01-06', NULL, '0000-00-00', NULL, '2017-07-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`akun_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `akun_ID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
