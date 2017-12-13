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
-- Table structure for table `tbl_diskusi`
--

CREATE TABLE `tbl_diskusi` (
  `diskusi_ID` mediumint(8) NOT NULL,
  `akun_ID` mediumint(8) NOT NULL,
  `created_on` date NOT NULL,
  `diskusi_isi` longtext NOT NULL,
  `diskusi_judul` varchar(30) NOT NULL,
  `diskusi_kategori` varchar(20) NOT NULL,
  `diskusi_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diskusi`
--

INSERT INTO `tbl_diskusi` (`diskusi_ID`, `akun_ID`, `created_on`, `diskusi_isi`, `diskusi_judul`, `diskusi_kategori`, `diskusi_gambar`) VALUES
(1, 1, '2017-07-08', 'Oasis adalah band rock influental asal Inggris yang dibentuk di Manchester pada tahun 1991. Pada awalnya menggunakan nama The Rain, grup ini dibentuk oleh Liam Gallagher (vokal), Paul Arthurs (gitar), Paul McGuigan (bass), dan Tony McCarroll (drum dan perkusi), hingga kemudian ikut bergabung pula kakak Liam, Noel Gallagher (gitar dan vokal). Setelah mengganti nama menjadi Oasis, para anggotanya menandatangani kontrak dengan label rekaman indie Creation Records dan setelah itu merilis album perdana mereka Definitely Maybe pada tahun 1994. Tahun berikutnya, Oasis merilis (What''s the Story) Morning Glory? bersama drummer baru Alan White di tengah persaingan dengan band britpop lain, Blur. Gallagher bersaudara juga secara berkala menjadi topik dalam tabloid dan berita atas gaya hidup liar dan perselisihan mereka. Pada tahun 1997, Oasis merilis album ketiga mereka, Be Here Now. Walaupun album memiliki angka penjualan tercepat dalam sejarah Inggris, popularitas album ketiga mereka menurun dengan sangat cepat. Oasis kemudian kehilangan anggota Paul McGuigan dan Paul Arthurs ketika mereka dalam proses rekaman dan akan merilis Standing on the Shoulder of Giants pada tahun 2000. Dua posisi kosong tersebut kemudian digantikan oleh Gem Archer dan Andy Bell. Oasis berhasil menemukan kesuksesan dan popularitas kembali melalui album Don''t Believe the Truth pada tahun 2005.[1] Pada Agustus 2009, Noel Gallagher mengumumkan pengunduran dirinya dari Oasis pasca perkelahian belakang panggung dengan Liam.[2][3][4] Anggota tersisa dari Oasis, dipimpin oleh Liam Gallagher, memutuskan untuk melanjutkan pekerjaan mereka bersama di bawah nama Beady Eye,[5] sementara Noel membentuk proyek solo Noel Gallagher''s High Flying Birds.', 'The Greatest One: Oasis', 'Cari Barang', 'upl_oasis.jpg'),
(3, 1, '2017-07-13', '<p><strong>Blur</strong> adalah sebuah grup musik rock asal Inggris yang didirikan di Colchester pada tahun 1989 dengan nama Seymour di Goldsmiths College dari mantan personel suatu band yang bernama Circus. Anggota awal dari band ini adalah Damon Albarn sebagai vokalis/keyboardis, Graham Coxon sebagai pemain gitar dan <em>back</em>-vokal, dan Dave Rowntree sebagai pemain drum. Alex James kemudian bergabung sebagai pemain bass. Blur dianggap sebagai ikon dari aliran musik Britpop dan termasuk salah satu band yang sukses baik dari sudut pandang kritikus maupun komersil.</p><p>Pada tahun 2002, Graham Coxon meninggalkan Blur di saat mereka merekam album Think Tank. Blur kemudian menyelesaikan album tersebut pada 2003. Mereka juga melaksanakan tour dengan menyewa mantan gitaris The Verve, Simon Tong. Sejak akhir tour mereka pada tahun 2003, Blur menjadi tidak aktif karena anggotanya lebih berkonsentrasi pada proyek solo mereka masing-masing.</p>', 'Blur', 'Cari Barang', 'upl_blur.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  ADD PRIMARY KEY (`diskusi_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  MODIFY `diskusi_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
