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
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_ID` mediumint(8) NOT NULL,
  `akun_ID` mediumint(8) NOT NULL,
  `buku_ID` mediumint(8) NOT NULL,
  `isi_review` text NOT NULL,
  `rating` int(1) NOT NULL,
  `created_on` datetime NOT NULL,
  `cekricek` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_ID`, `akun_ID`, `buku_ID`, `isi_review`, `rating`, `created_on`, `cekricek`) VALUES
(1, 1, 1, '<p>Pembaca seolah-olah dibawa ke zaman penjajahan, diajak memahami sosok minke dan pembontakannya terhadap penjajahan</p>', 0, '2017-07-04 09:20:05', 0),
(3, 2, 5, '<p>Cerita nya sangat menarik, bahasa yang digunakan juga mudah dimengerti, selain itu penggambaran karakternya juga sangat jelas, sehingga membuat pembaca mudah memahami ceritanya</p>', 0, '2017-07-04 10:27:27', 0),
(4, 3, 11, '<p>Kumpulan puisi-puisi terbaik dari legenda W.S. Rendra</p>', 0, '2017-07-04 10:30:03', 0),
(5, 3, 4, '<p>Penutup dari tetralogi pula buku, tetralogi pulau buku diutup dengan baik</p>', 0, '2017-07-04 10:30:49', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
