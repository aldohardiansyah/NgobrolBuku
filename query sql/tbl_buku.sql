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
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `buku_ID` mediumint(8) UNSIGNED NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `penulis_kode` varchar(10) NOT NULL,
  `judul_buku` varchar(40) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `thn_terbit` int(4) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `hal_buku` int(3) NOT NULL,
  `kategori_buku` varchar(10) NOT NULL,
  `ringkasan` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`buku_ID`, `penulis`, `penulis_kode`, `judul_buku`, `penerbit`, `thn_terbit`, `isbn`, `hal_buku`, `kategori_buku`, `ringkasan`, `gambar`, `created_on`) VALUES
(1, 'Pramoedya Ananta Toer', 's_pram', 'Bumi Manusia', 'Lentera Dipantara', 2005, '9789799731234', 535, 'Roman', 'Bumi Manusia adalah buku pertama dari Tetralogi Buru karya Pramoedya Ananta Toer.\r\nBuku ini bercerita tentang perjalanan seorang tokoh bernama Minke. Minke adalah salah satu anak pribumi yang sekolah di HBS. Pada masa itu, yang dapat masuk ke sekolah HBS adalah orang-orang keturunan Eropa. Minke adalah seorang pribumi yang pandai, ia sangat pandai menulis. Tulisannya bisa membuat orang sampai terkagum-kagum dan dimuat di berbagai Koran Belanda pada saat itu. Sebagai seorang pribumi, ia kurang disukai oleh siswa-siswi Eropa lainnya. Minke digambarkan sebagai seorang revolusioner di buku ini. Ia berani melawan ketidakadilan yang terjadi pada bangsanya. Ia juga berani memberontak terhadap kebudayaan Jawa, yang membuatnya selalu di bawah.', 'pram_1', '2017-06-01'),
(2, 'Pramoedya Ananta Toer', 's_pram', 'Anak Semua Bangsa', 'Lentera Dipantara', 2006, '9789799731241', 538, 'Roman', 'Seri kedua dari Tetralogi Pulau Buru ini menceritakan perjuangan batin Minke dimana istrinya yakni Annelis harus dibawa paksa ke Belanda. Tetapi pihak keluarga Nyi Ontosoroh tidak tinggal diam, sehingga dikirimlah seorang teman sekolah Minke yang bernama Panji Darman alias Jan Depperste untuk memantau keadaan Annelis di sana. Komunikasi melalui surat-menyurat. Di sisi lain Minke tak mau tinggal diam melawan keadaan. Dia terus belajar kepada Nyi Ontosoroh tentang banyak hal. Mulai dari menjalankan bisnis, urusan hukum, hingga menjadi inspirasinya untuk menulis.', 'pram_2', '2017-06-01'),
(3, 'Pramoedya Ananta Toer', 's_pram', 'Jejak Langkah', 'Lentera Dipantara', 2007, '9789799731258', 724, 'Roman', 'Jejak Langkah merupakan roman ketiga dari Tetralogi Purau Buru yang ditulis oleh Pramoedya Ananta Toer,pada bagian ketiga ini menceritakan fase pengorganisasian perlawanan yang dilakukan oleh Minke.\r\n\r\nMinke memobilisasi segala daya untuk melawan bercokolnya kekuasaan Hindia yang sudah berabad-abad umurnya. namun Minke tak pilih perlawanan bersenjata. Ia memilih jalan jurnalistik dengan membuat sebanyak-banyaknya bacaan Pribumi. Yang paling terkenal tentu saja Medan Prajaji.\r\n\r\nDengan koran ini, Minke bereru-berseru kepada rakyat Pribumi tiga hal: meningkatkan boikot, berorganisasi, dan menghapuskan kebudayaan feodalistik. Sekaligus lewat langkah jurnalistik, Minke berseru-seru: ''Didiklah rakyat dengan organisasi dan didiklah penguasa dengan perlawanan.', 'pram_3', '2017-06-13'),
(4, 'Pramoedya Ananta Toer', 's_pram', 'Rumah Kaca', 'Lentera Dipantara', 2007, '9789799731265', 646, 'Roman', 'Roman keempat dari Tetralogi Pulau Buru, Rumah Kaca, memperlihatkan usaha kolonial memukul semua kegiatan kaum pergerakan dalam sebuah operasi pengarsipan yang rapi. Arsip adalah mata radar Hindia yang ditaruh di mana-mana untuk merekam apa pun yang digiatkan aktivis pergerakan itu. Pram dengan cerdas mengistilhkan politik arsip itu sebagai kegiatan pe-rumahkaca-an. Novel besar berbahasa Indonesia yang menguras energi pengarangnya untuk menampilkan embrio Indonesia dalam ragangan negeri kolonial. Sebuah karya pascakolonial paling bergengsi.', 'pram_4', '2017-06-02'),
(5, 'Ika Natasa', 's_ikan', 'Critical Eleven', 'Gramedia', 2015, '9786020318929', 334, 'Novel', 'Dalam dunia penerbangan, dikenal istilah critical eleven, sebelas menit paling kritis di dalam pesawat—tiga menit setelah take off dan delapan menit sebelum landing—karena secara statistik delapan puluh persen kecelakaan pesawat terjadi dalam rentang waktu sebelas menit itu. It`s when the aircraft is most vulnerable to any danger.\r\n\r\nIn a way, it`s kinda the same with meeting people. Tiga menit pertama kritis sifatnya karena saat itulah kesan pertama terbentuk, lalu ada delapan menit sebelum berpisah—delapan menit ketika senyum, tindak tanduk, dan ekspresi wajah orang tersebut jelas bercerita apakah itu akan jadi awal sesuatu ataukah justru menjadi perpisahan.\r\n\r\nAle dan Anya pertama kali bertemu dalam penerbangan Jakarta-Sydney. Tiga menit pertama Anya terpikat, tujuh jam berikutnya mereka duduk bersebelahan dan saling mengenal lewat percakapan serta tawa, dan delapan menit sebelum berpisah Ale yakin dia menginginkan Anya.\r\n\r\nKini, lima tahun setelah perkenalan itu, Ale dan Anya dihadapkan pada satu tragedi besar yang membuat mereka mempertanyakan pilihan-pilihan yang mereka ambil, termasuk keputusan pada sebelas menit paling penting dalam pertemuan pertama mereka.\r\n\r\nDiceritakan bergantian dari sudut pandang Ale dan Anya, setiap babnya merupakan kepingan puzzle yang membuat kita jatuh cinta atau benci kepada karakter-karakternya, atau justru keduanya.', 'ikan_1', '2017-06-02'),
(6, 'Ika Natasa', 's_ikan', 'The Architecture of Love', 'Gramedia', 2016, '9786020329260', 304, 'Novel', 'New York mungkin berada di urutan teratas daftar kota yang paling banyak dijadikan setting cerita atau film. Di beberapa film Hollywood, mulai dari Nora Ephron’s You’ve Got Mail hingga Martin Scorsese’s Taxi Driver, New York bahkan bukan sekadar setting namun tampil sebagai “karakter” yang menghidupkan cerita.\r\n\r\nKe kota itulah Raia, seorang penulis, mengejar inspirasi setelah sekian lama tidak mampu menggoreskan satu kalimat pun.\r\n\r\nRaia menjadikan setiap sudut New York “kantor”-nya. Berjalan kaki menyusuri Brooklyn sampai Queens, dia mencari sepenggal cerita di tiap jengkalnya, pada orangorang yang berpapasan dengannya, dalam percakapan yang dia dengar, dalam tatapan yang sedetik-dua detik bertaut dengan kedua matanya. Namun bahkan setelah melakukan itu setiap hari, ditemani daun-daun menguning berguguran hingga butiran salju yang memutihkan kota ini, layar laptop Raia masih saja kosong tanpa cerita.\r\n\r\nSampai akhirnya dia bertemu seseorang yang mengajarinya melihat kota ini dengan cara berbeda. Orang yang juga menyimpan rahasia yang tak pernah dia duga. "People say that Paris is the city of love, but for Raia, New York deserves the title more. It’s impossible not to fall in love with the city like it’s almost impossible not to fall in love in the city."', 'ikan_2', '2017-06-02'),
(7, 'Ika Natasa', 's_ikan', 'Underground', 'Gramedia', 2016, '9786020319469', 552, 'Novel', '', 'ikan_3', '2017-06-04'),
(8, 'Ika Natasa', 's_ikan', 'Antalogi Rasa', 'Gramedia', 2013, '9789792288094', 334, 'Novel', '', 'ikan_4', '2017-06-04'),
(9, 'Ika Natasa', 's_ikan', 'Divortiare', 'Gramedia', 2007, '9789792288087', 288, 'Novel', '', 'ikan_5', '2017-06-05'),
(10, 'Ika Natasa', 's_ikan', 'A Very Yuppy Wedding', 'Gramedia', 2011, '9789792287981', 288, 'Novel', '', 'ikan_6', '2017-06-05'),
(11, 'W.S. Rendra', 's_rendra', 'Potret Pembangunan Dalam Puisi', 'Pustaka Jaya', 1996, '9794191094', 102, 'Antologi', '', 'rendra_1', '2017-06-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`buku_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `buku_ID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
