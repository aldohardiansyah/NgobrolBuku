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
-- Table structure for table `tbl_penulis`
--

CREATE TABLE `tbl_penulis` (
  `penulis_ID` mediumint(8) NOT NULL,
  `penulis_kode` varchar(10) NOT NULL,
  `penulis_nama` varchar(30) NOT NULL,
  `penulis_gambar` text NOT NULL,
  `penulis_biografi` longtext NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penulis`
--

INSERT INTO `tbl_penulis` (`penulis_ID`, `penulis_kode`, `penulis_nama`, `penulis_gambar`, `penulis_biografi`, `created_on`) VALUES
(1, 's_chairil', 'Chairil Anwar', 'p_chairil', 'Chairil Anwar (lahir di Medan, Sumatera Utara, 26 Juli 1922 – meninggal di Jakarta, 28 April 1949 pada umur 26 tahun), dijuluki sebagai "Si Binatang Jalang" (dari karyanya yang berjudul Aku), adalah penyair terkemuka Indonesia. Ia diperkirakan telah menulis 96 karya, termasuk 70 puisi. Bersama Asrul Sani dan Rivai Apin, ia dinobatkan oleh H.B. Jassin sebagai pelopor Angkatan ''45 sekaligus puisi modern Indonesia.\r\n\r\nChairil lahir dan dibesarkan di Medan, sebelum pindah ke Batavia (sekarang Jakarta) dengan ibunya pada tahun 1940, di mana ia mulai menggeluti dunia sastra. Setelah mempublikasikan puisi pertamanya pada tahun 1942, Chairil terus menulis. Pusinya menyangkut berbagai tema, mulai dari pemberontakan, kematian, individualisme, dan eksistensialisme, hingga tak jarang multi-interpretasi.', '0000-00-00'),
(2, 's_pram', 'Pramoedya Ananta Toer', 'p_pram', 'Pramoedya Ananta Toer (lahir di Blora, Jawa Tengah, 6 Februari 1925 – meninggal di Jakarta, 30 April 2006 pada umur 81 tahun), secara luas dianggap sebagai salah satu pengarang yang produktif dalam sejarah sastra Indonesia. Pramoedya telah menghasilkan lebih dari 50 karya dan diterjemahkan ke dalam lebih dari 41 bahasa asing.', '0000-00-00'),
(3, 's_rendra', 'W.S. Rendra', 'p_rendra', '<p>W.S. Rendra yang memiliki nama asli Willibrordus Surendra Broto Rendra (lahir di Solo, Hindia Belanda, 7 November 1935 &ndash; meninggal di Depok, Jawa Barat, 6 Agustus 2009 pada umur 73 tahun) adalah sastrawan berkebangsaan Indonesia. Sejak muda, dia menulis puisi, skenario drama, cerpen, dan esai sastra di berbagai media mass. Pernah mengenyam pendidikan di Universitas Gajah Mada, dan dari perguruan tinggi itu pulalah dia menerima gelar Doktor Honoris Causa. Penyair yang kerap dijuluki sebagai &quot;Burung Merak&quot;, ini, tahun 1967 mendirikan Bengkel Teater di Yogyakarta. Melalui Bengkel Teater itu, Rendra melahirkan banyak seniman antara lain Sitok Srengenge, Radhar Panca Dahana, Adi Kurdi, dan lain-lain. Ketika kelompok teaternya kocar-kacir karena tekanan politik, ia memindahkan Bengkel Teater di Depok, Oktober 1985.</p>', '2017-06-21'),
(4, 's_gusmus', 'Gus Mus', 'p_gusmus', '<p>KH. Ahmad Mustofa Bisri atau lebih sering dipanggil dengan Gus Mus (lahir di Rembang, Jawa Tengah, 10 Agustus 1944; umur 72 tahun) adalah pengasuh Pondok Pesantren Raudlatuh Tholibin, Leteh, Rembang dan menjadi Rais Syuriah PBNU. Ia adalah salah seorang pendeklarasi Partai Kebangkitan Bangsa dan sekaligus perancang logo PKB yang digunakan hingga kini. Ia juga seorang penyair dan penulis kolom yang sangat dikenal di kalangan sastrawan. Disamping budayawan, dia juga dikenal sebagai penyair.</p>', '2017-06-21'),
(5, 's_hamka', 'Buya Hamka', 'p_hamka', '<p>Prof. DR. H. Abdul Malik Karim Amrullah, pemilik nama pena Hamka (lahir di Nagari Sungai Batang, Tanjung Raya, Kabupaten Agam, Sumatera Barat, 17 Februari 1908 &ndash; meninggal di Jakarta, 24 Juli 1981 pada umur 73 tahun) adalah seorang ulama dan sastrawan Indonesia. Ia melewatkan waktunya sebagai wartawan, penulis, dan pengajar. Ia terjun dalam politik melalui Masyumi sampai partai tersebut dibubarkan, menjabat Ketua Majelis Ulama Indonesia (MUI) pertama, dan aktif dalam Muhammadiyah sampai akhir hayatnya. Universitas al-Azhar dan Universitas Nasional Malaysia menganugerahkannya gelar doktor kehormatan, sementara Universitas Moestopo, Jakarta mengukuhkan Hamka sebagai guru besar. Namanya disematkan untuk Universitas Hamka milik Muhammadiyah dan masuk dalam daftar Pahlawan Nasional Indonesia.</p>', '2017-06-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_penulis`
--
ALTER TABLE `tbl_penulis`
  ADD PRIMARY KEY (`penulis_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_penulis`
--
ALTER TABLE `tbl_penulis`
  MODIFY `penulis_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
