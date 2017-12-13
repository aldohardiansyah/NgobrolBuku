-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 07:11 PM
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
(1, 'AldoHardiansyah', 'Aldo', 'Hardiansyah', 'L', 'Admin', '42a4adfa7970ec6420d626ac4c735e4d', 'aldohardiansyah@gmail.com', 'Jakarta', '085888114229', '1996-05-02', '13:31:45', '2017-07-14', 1, '2017-07-03'),
(2, 'AnindithaR', 'Aninditha', 'Rahma', '', 'User', '0e744aae07c914e21626ce950297059e', 'Anindithar@gmail.com', 'Bandung', '', '1996-10-10', '17:17:26', '2017-07-14', 1, '2017-07-03'),
(3, 'JenniferHanna', 'Jennifer', 'Hanna', 'P', 'User', '25f9e794323b453885f5181f1b624d0b', 'JenniferHannaS@gmail.com', 'Jakarta', '', '1996-01-26', '22:59:39', '2017-07-12', 1, '2017-07-04');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komen_ID` mediumint(8) NOT NULL,
  `diskusi_ID` mediumint(8) NOT NULL,
  `akun_ID` mediumint(8) NOT NULL,
  `isi_komentar` longtext NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komen_ID`, `diskusi_ID`, `akun_ID`, `isi_komentar`, `created_on`) VALUES
(1, 1, 1, 'Ini nih anu oasis mantap eui', '2017-07-10 00:00:00'),
(2, 1, 2, 'Ini ceritanya Komentar Anin', '2017-07-02 00:00:00');

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
(13, 'jenniferhanna', 'Review', 8, 'Seksual', '', '2017-07-12 23:04:00'),
(14, 'AnindithaR', 'Review', 5, 'Seksual', 'Salah nih bos', '2017-07-14 13:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `level_id` mediumint(8) NOT NULL,
  `akun_ID` mediumint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`level_id`, `akun_ID`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 3),
(5, 3),
(6, 2),
(7, 1),
(8, 3),
(9, 3),
(10, 1),
(11, 1),
(12, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `saran_ID` mediumint(8) NOT NULL,
  `akun_ID` mediumint(8) NOT NULL,
  `saran_isi` text NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`akun_ID`);

--
-- Indexes for table `tbl_baca`
--
ALTER TABLE `tbl_baca`
  ADD PRIMARY KEY (`baca_id`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`buku_ID`);

--
-- Indexes for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  ADD PRIMARY KEY (`diskusi_ID`);

--
-- Indexes for table `tbl_ibaca`
--
ALTER TABLE `tbl_ibaca`
  ADD PRIMARY KEY (`ibaca_ID`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komen_ID`);

--
-- Indexes for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  ADD PRIMARY KEY (`lapor_ID`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `tbl_penulis`
--
ALTER TABLE `tbl_penulis`
  ADD PRIMARY KEY (`penulis_ID`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `akun_ID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_baca`
--
ALTER TABLE `tbl_baca`
  MODIFY `baca_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `buku_ID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  MODIFY `diskusi_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_ibaca`
--
ALTER TABLE `tbl_ibaca`
  MODIFY `ibaca_ID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komen_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  MODIFY `lapor_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `level_id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_penulis`
--
ALTER TABLE `tbl_penulis`
  MODIFY `penulis_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_ID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
