-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 12:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informasi_rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan_hasil_diagnosa_penyakit`
--

CREATE TABLE `aturan_hasil_diagnosa_penyakit` (
  `id_aturan` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `solusi_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `keterangan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan_hasil_diagnosa_penyakit`
--

INSERT INTO `aturan_hasil_diagnosa_penyakit` (`id_aturan`, `gejala_id`, `penyakit_id`, `solusi_id`, `obat_id`, `keterangan_id`) VALUES
(1, 8, 2, 3, 1, 1),
(2, 8, 2, 4, 1, 1),
(3, 8, 2, 5, 1, 1),
(4, 8, 2, 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `beritaanual`
--

CREATE TABLE `beritaanual` (
  `id` int(11) NOT NULL,
  `berita` varchar(128) NOT NULL,
  `kodeberitaanual` varchar(111) NOT NULL,
  `namaterbit` varchar(225) NOT NULL,
  `judulberitaanual` varchar(500) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `alamat_berita` varchar(225) NOT NULL,
  `isi_berita` mediumtext NOT NULL,
  `gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beritaanual`
--

INSERT INTO `beritaanual` (`id`, `berita`, `kodeberitaanual`, `namaterbit`, `judulberitaanual`, `tanggal`, `alamat_berita`, `isi_berita`, `gambar`) VALUES
(1, '', 'A100', 'Mariano', 'Kalau sampai stop atau putus obat maka harus diulangi lagi dengan ditambah dengan injeksi dua bulan suntik minimal satu kali sehari', 1642585888, 'Fatuberlio', 'Dalam rangka hari Tuberkolosis (TB) Sedunia,  Subdit TB  Kemenkes mengadakan lokakarya tentang Tuberkolosis (TB) melalui media sosial, di Jakarta (22/3). Kegiatan ini di ikuti  40 blogger.\r\n\r\nHari Tuberkulosis Sedunia diperingati setiap 24 Maret. Tahun ini tema global yang diangkat adalah Unite To End TB. Sedangkan untuk tema nasional adalah Gerakan Keluarga Menuju Indonesia Bebas Tuberkulosis, melalui gerakan Temukan Obati Sampai Sembuh Tuberkulosis (TOSSTB). Kemenkes berharap, melalui kegiatan ini para Blogger dapat mengedukasi masyarakat mengenai TB melalui media sosial.\r\n\r\nNarasumber acara lokakarya hari ini adalah dr. Asik Surya MPPM Kasubdit TB , Ditjen P2P Kemenkes RI dan dr. Telly Kamelia, SpPD, Divisi Pulmonologi Departemen Ilmu Penyakit Dalam RSCM. Disampaikan Dr. Asik Surya, TB adalah penyakit yang menular melalui udara yang disebabkan oleh bakteri Mycobacterium Tubercolosis yang dapat menyebar dari satu orang ke orang lain melalui melalui batuk, dahak, dan bersin yang dilepaskan ke udara. Penderita TB, saat berbicara dapat mengeluarkan 0-210 partikel, saat batuk mengeluarkan 0-3500 partikel, saat bersin mengeluarkan 4500-1 juta partikel.\r\n“Penyakit ini menular melalui udara. Oleh karenanya, harus ada etika ketika batuk dan berdahak. Ketika batuk dan bersin harus ditutup menggunakan saputangan”, ujarnya.\r\nDr. Asik menambahkan, 1 orang dengan TB aktif, menginfeksi 10-15 orang per tahun. Sementara itu, 1 dari 10 orang yang terinfeksi TB menjadi TB aktif selama hidupnya. TB dapat menyerang siapa saja, terutama usia produktif 15-50 tahun bahkan anak-anak.\r\nMenurut Dr. Telly menyatakan bahwa untuk penanganan penderita TB, diagnosanya membutuhkan waktu 3 bulan. Pengobatannya membutuhkan waktu 6-8 bulan. Tetapi bila penderita TB berhenti meminum obat sebelum waktunya atau putus obat maka pengobatan harus diulangi kembali ditambah dengan multiple drugs dan injeksi setiap hari selama 2 bulan, karena resiko dari pengobatan yang tidak tuntaskan memunculkan masalah TB kebal obat yang disebut Multi Drugs Resisten (MDR).\r\n“Kalau sampai stop atau putus obat maka harus diulangi lagi dengan ditambah dengan injeksi dua bulan suntik minimal satu kali sehari, karena targetnya adalah resistensi obat”, terangnya.\r\n\r\nUntuk meningkatkan kesadaran dan kepedulian masyarakat tentang penyakit TB, di akhir acara, peserta diajak untuk menyebarluaskan  informasi mengenai TB dengan cara mengganti gambar profil pribadi di akun media sosial memposting informasi terkait TB dan memposting foto-foto kegiatan TB dengan tagar #TOSSTB.\r\n\r\nPemerintah berkomitmen kuat pada kesuksesan mengatasi TB. Penanggulangan TB sendiri merupakan target Rencana Pembangunan Jangkah Menengah Nasional (RPJMN) dan Rencana Strategis (Renstra) pemerintah melalui Kemenkes 2015-2019.\r\n\r\nBerita ini disiarkan oleh Biro Komunikasi dan Pelayanan Masyarakat, Kementerian Kesehatan RI. Untuk informasi lebih lanjut dapat menghubungi Halo Kemkes melalui nomor hotline (kode lokal) 1500-567, SMS 081281562620, faksimili (021) 5223002, 52921669, dan alamatemail\r\n', 0),
(2, '', '123333', 'Natalio Cristianto Luan Soares', '“Kalau sampai stop atau putus obat maka harus diulangi lagi dengan ditambah dengan injeksi dua bulan suntik minimal satu kali sehari', 1639670897, 'Fatuberlio', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 0),
(3, '', 'A200', 'Natalio Cristianto Luan Soares', ' Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1642400238, 'Dili Perumnas', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 0),
(24, '', 'M200', ' Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1642397328, 'Fatuberlio', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 0),
(25, '', 'M200', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639302657, 'Kampung Baru', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 0),
(26, '', 'M200', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639642618, 'Kampung Baru', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 0),
(27, '', 'M200', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639644723, 'Kampung Baru', '$this->session->set_flashdata(\'success\', \'Data Berhasil DiSimpan\');', 0),
(28, '', 'M200', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1640440655, 'Kampung Baru', '<p>Dalam rangka hari Tuberkolosis (TB) Sedunia, Subdit TB Kemenkes mengadakan lokakarya tentang Tuberkolosis (TB) melalui media sosial, di Jakarta (22/3). Kegiatan ini di ikuti 40 blogger. Hari Tuberkulosis Sedunia diperingati setiap 24 Maret. Tahun ini tema global yang diangkat adalah Unite To End TB. Sedangkan untuk tema nasional adalah Gerakan Keluarga Menuju Indonesia Bebas Tuberkulosis, melalui gerakan Temukan Obati Sampai Sembuh Tuberkulosis (TOSSTB). Kemenkes berharap, melalui kegiatan ini para Blogger dapat mengedukasi masyarakat mengenai TB melalui media sosial. Narasumber acara lokakarya hari ini adalah dr. Asik Surya MPPM Kasubdit TB , Ditjen P2P Kemenkes RI dan dr. Telly Kamelia, SpPD, Divisi Pulmonologi Departemen Ilmu Penyakit Dalam RSCM. Disampaikan Dr. Asik Surya, TB adalah penyakit yang menular melalui udara yang disebabkan oleh bakteri Mycobacterium Tubercolosis yang dapat menyebar dari satu orang ke orang lain melalui melalui batuk, dahak, dan bersin yang dilepaskan ke udara. Penderita TB, saat berbicara dapat mengeluarkan 0-210 partikel, saat batuk mengeluarkan 0-3500 partikel, saat bersin mengeluarkan 4500-1 juta partikel. &ldquo;Penyakit ini menular melalui udara. Oleh karenanya, harus ada etika ketika batuk dan berdahak. Ketika batuk dan bersin harus ditutup menggunakan saputangan&rdquo;, ujarnya. Dr. Asik menambahkan, 1 orang dengan TB aktif, menginfeksi 10-15 orang per tahun. Sementara itu, 1 dari 10 orang yang terinfeksi TB menjadi TB aktif selama hidupnya. TB dapat menyerang siapa saja, terutama usia produktif 15-50 tahun bahkan anak-anak. Menurut Dr. Telly menyatakan bahwa untuk penanganan penderita TB, diagnosanya membutuhkan waktu 3 bulan.</p>\r\n\r\n<ul>\r\n	<li>Pengobatannya membutuhkan waktu 6-8 bulan. Tetapi bila penderita TB berhenti meminum obat sebelum waktunya atau putus obat maka pengobatan harus diulangi kembali ditambah dengan multiple drugs dan injeksi setiap hari selama 2 bulan, karena resiko dari pengobatan yang tidak tuntaskan memunculkan masalah TB kebal obat yang disebut Multi Drugs Resisten (MDR). &ldquo;Kalau sampai stop atau putus obat maka harus diulangi lagi dengan ditambah dengan injeksi dua</li>\r\n	<li>bulan suntik minimal satu kali sehari, karena targetnya adalah resistensi obat&rdquo;, terangnya. Untuk meningkatkan kesadaran dan kepedulian masyarakat tentang penyakit TB, di akhir acara, peserta diajak untuk menyebarluaskan informasi mengenai TB dengan cara mengganti gambar profil pribadi di akun media sosial memposting informasi terkait TB dan memposting foto-foto kegiatan TB dengan tagar #TOSSTB. Pemerintah berkomitmen kuat pada</li>\r\n	<li>kesuksesan mengatasi TB. Penanggulangan TB sendiri merupakan target Rencana Pembangunan Jangkah Menengah Nasional (RPJMN) dan Rencana Strategis (Renstra) pemerintah melalui Kemenkes 2015-2019. Berita ini disiarkan oleh Biro Komunikasi dan Pelayanan Masyarakat, Kementerian Kesehatan RI. Untuk informasi lebih lanjut dapat menghubungi Halo Kemkes melalui nomor hotline (kode lokal) 1500-567, SMS 081281562620, faksimili (021) 5223002, 52921669, dan alamatemail</li>\r\n</ul>\r\n', 0),
(29, '', 'A400', 'Natalio Cristianto Luan Soares', ' Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1640440814, 'Kampung Baru', '<ul>\r\n	<li>Dalam rangka hari Tuberkolosis (TB) Sedunia, Subdit TB Kemenkes mengadakan lokakarya tentang Tuberkolosis (TB) melalui media sosial, di Jakarta (22/3). Kegiatan ini di ikuti 40 blogger. Hari Tuberkulosis Sedunia diperingati setiap 24 Maret. Tahun ini tema global yang diangkat adalah Unite To End TB. Sedangkan untuk tema nasional adalah Gerakan Keluarga Menuju Indonesia Bebas Tuberkulosis, melalui gerakan Temukan Obati Sampai Sembuh Tuberkulosis (TOSSTB). Kemenkes berharap, melalui kegiatan ini para Blogger dapat mengedukasi masyarakat mengenai TB melalui media sosial. Narasumber acara lokakarya hari ini adalah dr. Asik Surya MPPM Kasubdit TB , Ditjen P2P Kemenkes RI dan dr. Telly Kamelia, SpPD, Divisi Pulmonologi Departemen Ilmu Penyakit Dalam RSCM. Disampaikan Dr. Asik Surya, TB adalah penyakit yang menular melalui udara yang disebabkan oleh bakteri Mycobacterium Tubercolosis yang dapat menyebar dari satu orang ke orang lain melalui melalui batuk, dahak, dan bersin yang dilepaskan ke udara. Penderita TB, saat berbicara dapat mengeluarkan 0-210 partikel, saat batuk mengeluarkan 0-3500 partikel, saat bersin mengeluarkan 4500-1 juta partikel. &ldquo;Penyakit ini menular melalui udara. Oleh karenanya, harus ada etika ketika batuk dan berdahak. Ketika batuk dan bersin harus ditutup menggunakan saputangan&rdquo;, ujarnya. Dr. Asik menambahkan, 1 orang dengan TB aktif, menginfeksi 10-15 orang per tahun. Sementara itu, 1 dari 10 orang yang terinfeksi TB menjadi TB aktif selama hidupnya. TB dapat menyerang siapa saja, terutama usia produktif 15-50 tahun bahkan anak-anak. Menurut Dr. Telly menyatakan bahwa untuk penanganan penderita TB, diagnosanya membutuhkan waktu 3 bulan. Pengobatannya membutuhkan waktu 6-8 bulan. Tetapi bila penderita TB berhenti meminum obat sebelum waktunya atau putus obat maka pengobatan harus diulangi kembali ditambah dengan multiple drugs dan injeksi setiap hari selama 2 bulan, karena resiko dari pengobatan yang</li>\r\n	<li>tidak tuntaskan memunculkan masalah TB kebal obat yang disebut Multi Drugs Resisten (MDR). &ldquo;Kalau sampai stop atau putus obat maka harus diulangi lagi dengan ditambah dengan injeksi dua bulan suntik minimal satu kali sehari, karena targetnya adalah resistensi obat&rdquo;, terangnya. Untuk meningkatkan kesadaran dan kepedulian masyarakat tentang penyakit TB, di akhir acara, peserta diajak untuk menyebarluaskan informasi mengenai TB dengan cara mengganti gambar</li>\r\n	<li>profil pribadi di akun media sosial memposting informasi terkait TB dan memposting foto-foto kegiatan TB dengan tagar #TOSSTB. Pemerintah berkomitmen kuat pada kesuksesan mengatasi TB. Penanggulangan TB sendiri merupakan target Rencana Pembangunan Jangkah Menengah Nasional (RPJMN) dan Rencana Strategis (Renstra) pemerintah melalui Kemenkes 2015-2019. Berita ini disiarkan oleh Biro Komunikasi dan Pelayanan Masyarakat, Kementerian Kesehatan RI. Untuk informasi lebih lanjut dapat menghubungi Halo Kemkes melalui nomor hotline (kode lokal) 1500-567, SMS 081281562620, faksimili (021) 5223002, 52921669, dan alamatemail</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n', 0),
(30, '', 'M400', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1642586662, 'Kampung Baru', '<p>Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis&nbsp;</p>\r\n', 0),
(31, '', '444', 'fggggg', 'Jangan Menyesal Terhadap KegagalanMu Jangan Menyesal Terhadap KegagalanMu', 1649321221, 'eeee', '<p>eeeeeeeeeeeeeeeeee</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `beritamensal`
--

CREATE TABLE `beritamensal` (
  `id` int(11) NOT NULL,
  `berita` varchar(111) NOT NULL,
  `kodeberitamensal` varchar(128) NOT NULL,
  `nama_terbit` varchar(128) NOT NULL,
  `judulberitamensal` varchar(300) NOT NULL,
  `isi_beritamensal` mediumtext NOT NULL,
  `tanggal_berita` int(11) NOT NULL,
  `alamat_berita` varchar(200) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beritamensal`
--

INSERT INTO `beritamensal` (`id`, `berita`, `kodeberitamensal`, `nama_terbit`, `judulberitamensal`, `isi_beritamensal`, `tanggal_berita`, `alamat_berita`, `gambar`) VALUES
(1, 'Berita Mensal', 'M', 'Martina Soares', 'Jangan Menyesal Terhadap KegagalanMu Jangan Menyesal Terhadap KegagalanMu', 'Jangan Menyesal Terhadap KegagalanMu', 1647165650, 'Fatuberlio', ''),
(2, 'Berita Mensal', 'M200', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639156951, 'Kampung Baru', ''),
(3, 'Berita Mensal', 'M300', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639153075, 'Fatuberlio', ''),
(4, 'Berita Mensal', 'M400', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639192485, 'Fatuberlio', ''),
(5, 'Berita Mensal', 'M400', 'Dr. Priana Francisca T. L Soares', 'Banyak Masyarakat Di Manufahi Mengalami Penyakit TBC', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639192510, 'Fatuberlio', ''),
(6, 'Berita Mensal', 'M200', 'Dr. Priana Francisca T. L Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639277152, 'Kampung Baru', ''),
(7, 'Berita Mensal', 'A200', 'Dr. Priana Francisca T. L Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639277174, 'Kampung Baru', ''),
(8, 'Berita Mensal', 'M200', ' Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639277377, 'Kampung Baru', ''),
(9, 'Berita Mensal', 'M200', 'nananana', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'tambahberitamensal', 1639277457, 'Kampung Baru', ''),
(10, 'Berita Mensal', 'M200', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'tambahberitamensal', 1639277496, 'Kampung Baru', ''),
(11, 'Berita Mensal', 'A200', ' Soares', 'Banyak Masyarakat Di Manufahi Mengalami Penyakit TBC', 'tambahberitamensal', 1639277540, 'Kampung Baru', ''),
(12, 'Berita Mensal', 'A400', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1639277615, 'Kampung Baru', ''),
(13, 'Berita Mensal', 'M200', 'Natalio Cristianto Luan Soares', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 'Informasi tentang klinik kampung Baru, Banyak Masyarkat Yang mengalami Penyakit Tubercolosis ', 1642588526, 'Kampung Baru', '');

-- --------------------------------------------------------

--
-- Table structure for table `beritasemenal`
--

CREATE TABLE `beritasemenal` (
  `id` int(11) NOT NULL,
  `berita` varchar(111) NOT NULL,
  `kodeberitasemenal` varchar(111) NOT NULL,
  `judulberitasemenal` varchar(500) NOT NULL,
  `nama_terbit` varchar(128) NOT NULL,
  `isi_beritasemenal` mediumtext NOT NULL,
  `alamat_berita` varchar(500) NOT NULL,
  `tanggal_berita` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beritasetiaphari`
--

CREATE TABLE `beritasetiaphari` (
  `id` int(11) NOT NULL,
  `berita` varchar(111) NOT NULL,
  `kodeberitasetiaphari` varchar(111) NOT NULL,
  `judulberitasetiaphari` varchar(500) NOT NULL,
  `nama_terbit` varchar(500) NOT NULL,
  `isi_beritasetiaphari` mediumtext NOT NULL,
  `alamat` varchar(101) NOT NULL,
  `tanggal_berita` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pdf`
--

CREATE TABLE `data_pdf` (
  `id_pdf` int(11) NOT NULL,
  `nama_dokter` int(11) NOT NULL,
  `nama_pasien` int(11) NOT NULL,
  `hasil_pdf` varchar(1000) NOT NULL,
  `kecamatan` varchar(800) NOT NULL,
  `tanggal_kirim` varchar(800) NOT NULL,
  `jam_kirim` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter_perawat_bidan`
--

CREATE TABLE `dokter_perawat_bidan` (
  `id_dopebi` int(11) NOT NULL,
  `nama_dokter` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(111) NOT NULL,
  `jenis_dokter` varchar(111) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `namakecamatan` varchar(120) NOT NULL,
  `nomor_hp` varchar(200) NOT NULL,
  `alamat` varchar(122) NOT NULL,
  `namarumahsakit` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter_perawat_bidan`
--

INSERT INTO `dokter_perawat_bidan` (`id_dopebi`, `nama_dokter`, `jenis_kelamin`, `jenis_dokter`, `tanggal_lahir`, `umur`, `namakecamatan`, `nomor_hp`, `alamat`, `namarumahsakit`, `foto`) VALUES
(1, 'Igidio Soares', 'Laki-Laki', 'Dokter Umum', '2022-02-08', 23, 'Fatuberlio', '76 89 67 54', 'Fatuberlio', 2, ''),
(2, 'Serafim da Cruz Pereira', 'Laki-Laki', 'Dokter Special Jantung', '2022-06-05', 22, 'Fatuberlio', '78909090', 'Clacuc, Webicas', 1, ''),
(3, 'Marita Sarmento', 'Perempuan', 'Dokter Special Paru', '2022-06-07', 22, 'Fatuberlio', '+670 7845 4567', 'Fatukahi, Kledik', 1, ''),
(4, 'Marita Sarmento', 'Perempuan', 'Dokter Special Paru', '2022-06-08', 12, 'Fatuberlio', '78909090', 'Fatukahi, Kledik', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kodegejala` varchar(28) NOT NULL,
  `nama_gejala` varchar(225) NOT NULL,
  `id_penyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kodegejala`, `nama_gejala`, `id_penyakit`) VALUES
(1, 'G100', 'Batuk Berdahak Lebih Dari 3 Minggu', 1),
(2, 'G200', 'Demam Meriang Lebih Dari 1 Bulan', 1),
(3, 'G300', 'Sesak Nafa', 1),
(4, 'G400', 'Nafsu Makan Berkurang', 1),
(5, 'G500', 'Nafsu Makan Berkurang', 2),
(6, 'G600', 'Batuk Kronis', 2),
(7, 'G700', 'Keringan Pada Malam hari', 2),
(8, 'G800', 'Demam Berkepanjangan 38?', 2),
(9, 'G900', 'Gangguan BAB', 3),
(10, 'G110', 'Diari / mencret Lebih Dari 1 Bulan', 3),
(11, 'G111', 'Terdapat Benjolan Perut Kanan Bawah', 3),
(12, 'G112', 'Nyeri punggung', 3),
(13, 'G113', 'Rasa kaku di punggung', 4),
(14, 'G114', 'Benjolan atau pembengkakan di punggung', 4),
(15, 'G115', 'Demam', 4),
(16, 'G116', 'Hilang nafsu makan', 4),
(17, 'G117', 'Nyeri saat buang air kecil', 5),
(18, 'G118', 'Nyeri pada tulang belakang', 5),
(19, 'G119', 'Air Kensin tidak lancar atau berkurang', 5),
(20, 'G120', 'Volume semen/sperma berkurang', 5),
(21, 'G121', 'Demam yang berlangsung selama beberapa minggu panas dingin', 6),
(22, 'G122', 'Batuk kering yang terkadang berdarah', 6),
(23, 'G123', 'Mudah lelah', 6),
(24, 'G124', 'Napas pendek yang meningkat seiring waktu', 6),
(25, 'G125', 'Nyeri perut', 7),
(26, 'G126', 'Hilang nafsu makan', 7),
(27, 'G127', 'Berat badan turun', 7),
(28, 'G128', 'Konstipasi atau diare', 7);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_diagnosa_penyakit`
--

CREATE TABLE `hasil_diagnosa_penyakit` (
  `id_hasil_diagnosa_penyakit` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `user_level` varchar(128) NOT NULL,
  `nama_penyakit` varchar(128) NOT NULL,
  `isi_solusi` text NOT NULL,
  `nama_obat` varchar(228) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `rumahsakit` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_dokterperawat` int(11) NOT NULL,
  `tanggal_diagnosa` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_diagnosa_penyakit`
--

INSERT INTO `hasil_diagnosa_penyakit` (`id_hasil_diagnosa_penyakit`, `nama_user`, `user_level`, `nama_penyakit`, `isi_solusi`, `nama_obat`, `keterangan`, `id_kabupaten`, `id_kecamatan`, `id_kelurahan`, `rumahsakit`, `id_konsultasi`, `id_dokterperawat`, `tanggal_diagnosa`) VALUES
(33, 'Apriana Francisca Triforca Luan Soares', 'Member', 'Tuberculosis Kelenjar', '1.Cara mencegah TBC bisa dilakukan dengan beberapa cara, seperti menutup mulut saat bersin, tidak membuang dahak atau meludah sembarangan, dan memastikan rumah memiliki sirkulasi udara yang baik ', 'Vitamin A', 'Saya ingin minum obat tubercolosis tersebut dengan terartur', 0, 0, 0, 0, 0, 0, '03June2022');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_obat`
--

CREATE TABLE `jenis_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `id_solusi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_obat`
--

INSERT INTO `jenis_obat` (`id`, `nama_obat`, `id_solusi`) VALUES
(1, 'Vitamin A', 1),
(2, 'Vitamin A', 1),
(3, 'paracetamol', 2);

-- --------------------------------------------------------

--
-- Table structure for table `judulwebsite`
--

CREATE TABLE `judulwebsite` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(120) NOT NULL,
  `judul` varchar(800) NOT NULL,
  `alamatwebsite` varchar(800) NOT NULL,
  `tlpwebsite` varchar(800) NOT NULL,
  `websiterumahsakit` varchar(800) NOT NULL,
  `alamatemail` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judulwebsite`
--

INSERT INTO `judulwebsite` (`id`, `kecamatan`, `judul`, `alamatwebsite`, `tlpwebsite`, `websiterumahsakit`, `alamatemail`) VALUES
(1, 'Fatuberlio', ' Website Rumah Sakit Kecamatan Fatuberlio', 'JL.Wekiar. 12-23 Fatuberlio-85225,Manufahi-Timor Leste ', '(0380)833395- 831194 ', ' http//www.fatuberlio.ac.id', 'fatuberlio.fatuberliorumahsakit@gmail.com'),
(2, 'Aileu Villa', ' Website Rumah Sakit Kecamatan Aileu Villa', 'JL.Wekiar. 12-23 Aileu Villa -85225,Aileu-Timor Leste ', '(0380)833395- 831194 ', ' http//www.aileuvilla.ac.id', 'aileuvilla.aileuvillarumahsakit@gmail.com'),
(3, 'Remexio', 'Website Rumah Sakit Kecamatan Fatuberlio', 'JL.Wekiar. 12-23 Fatuberlio-85225,Manufahi-Timor Leste', 'Telp.(0380)833395- 831194', ' http//www.fatuberlio.ac.id', 'fatuberlio.fatuberliorumahsakit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `kabupaten`) VALUES
(1, 'Aileu'),
(2, 'Ainaro'),
(3, 'Baucau'),
(4, 'Bobonaro'),
(5, 'Covalima'),
(6, 'Dili'),
(7, 'Ermera'),
(8, 'Lautem'),
(9, 'Liquica'),
(10, 'Manatuto'),
(11, 'Manufahi'),
(12, 'Viqueque'),
(13, 'Oecusse');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `kecamatan` varchar(111) NOT NULL,
  `jumlah_laki_laki` int(11) NOT NULL,
  `jumlah_perempuan` int(11) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `Tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `id_kabupaten`, `kecamatan`, `jumlah_laki_laki`, `jumlah_perempuan`, `jumlah_penduduk`, `Tahun`) VALUES
(1, 1, 'Aileu Villa', 400, 800, 1200, 2030),
(2, 1, 'Remexio', 200, 500, 700, 2029),
(3, 1, 'Lequidoe', 25, 25, 50, 2028),
(4, 1, 'Laulara', 100, 100, 200, 2027),
(5, 2, 'Ainaro Villa', 400, 500, 900, 2026),
(6, 2, 'Hatu Buillico', 200, 200, 400, 2025),
(7, 2, 'Maubisse', 300, 400, 700, 0),
(8, 2, 'Hatudo', 0, 0, 0, 0),
(9, 3, 'Baguia', 0, 0, 0, 0),
(10, 3, 'Baucau Villa', 0, 0, 0, 0),
(11, 3, 'Laga', 0, 0, 0, 0),
(12, 3, 'Quelicai', 0, 0, 0, 0),
(13, 3, 'Vemase', 0, 0, 0, 0),
(14, 3, 'Venilale', 0, 0, 0, 0),
(15, 4, 'Atabae', 0, 0, 0, 0),
(16, 4, 'Balibo', 0, 0, 0, 0),
(17, 4, 'Bobonaro Villa', 0, 0, 0, 0),
(18, 4, 'Cailaco', 0, 0, 0, 0),
(19, 4, 'Lolotoe', 0, 0, 0, 0),
(20, 4, 'Maliana', 0, 0, 0, 0),
(21, 5, 'Fatululik', 0, 0, 0, 0),
(22, 5, 'Fatumean', 0, 0, 0, 0),
(23, 5, 'Fohorem', 0, 0, 0, 0),
(24, 5, 'Maucatar', 0, 0, 0, 0),
(25, 5, 'Suai', 0, 0, 0, 0),
(26, 5, 'Tilomar', 0, 0, 0, 0),
(27, 5, 'Zumalai', 0, 0, 0, 0),
(28, 6, 'Vera Cruz', 0, 0, 0, 0),
(29, 6, 'Nain Feto', 0, 0, 0, 0),
(30, 6, 'Metinaro', 0, 0, 0, 0),
(31, 6, 'Atauro', 0, 0, 0, 0),
(32, 6, 'Dom Aleixo', 0, 0, 0, 0),
(33, 6, 'Cristo Rei', 0, 0, 0, 0),
(34, 7, 'Railaco', 0, 0, 0, 0),
(35, 7, 'Ermera Villa', 0, 0, 0, 0),
(36, 7, 'Letefoho', 0, 0, 0, 0),
(37, 7, 'Atsabe', 0, 0, 0, 0),
(38, 7, 'Hatolia', 0, 0, 0, 0),
(39, 8, 'Lospalos', 0, 0, 0, 0),
(40, 8, 'Lautem Villa', 0, 0, 0, 0),
(41, 8, 'Iliomar', 0, 0, 0, 0),
(42, 8, 'Loru', 0, 0, 0, 0),
(43, 8, 'Totuala', 0, 0, 0, 0),
(44, 9, 'Bazartete', 0, 0, 0, 0),
(45, 9, 'Liquica Villa', 0, 0, 0, 0),
(46, 9, 'Maubara', 0, 0, 0, 0),
(47, 10, 'Manututo Villa', 0, 0, 0, 0),
(48, 10, 'Laleia', 0, 0, 0, 0),
(49, 10, 'Laclo', 0, 0, 0, 0),
(50, 10, 'Soibada', 0, 0, 0, 0),
(51, 10, 'Barique/Natarbora', 0, 0, 0, 0),
(52, 10, 'Laclubar', 0, 0, 0, 0),
(53, 11, 'Same', 0, 0, 0, 0),
(54, 11, 'Alas', 0, 0, 0, 0),
(55, 11, 'Fatuberlio', 0, 0, 0, 0),
(56, 11, 'Turiscai', 0, 0, 0, 0),
(57, 12, 'Uatucarbau', 0, 0, 0, 0),
(58, 12, 'Ossu', 0, 0, 0, 0),
(59, 12, 'Watulari', 0, 0, 0, 0),
(60, 12, 'Viqueque Villa', 0, 0, 0, 0),
(61, 12, 'Lacluta', 0, 0, 0, 0),
(62, 13, 'Pante Makassar', 0, 0, 0, 0),
(63, 13, 'Nitibe', 0, 0, 0, 0),
(64, 13, 'Oesilo', 0, 0, 0, 0),
(65, 13, 'Passabe', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `id_kecamatan`, `kelurahan`) VALUES
(1, 33, ' Kamea'),
(2, 1, 'Bandudatu'),
(3, 1, 'Fahiria'),
(4, 1, 'Fatubosa'),
(5, 1, 'Hoholau'),
(6, 1, 'Lahae'),
(7, 1, 'Lausi'),
(8, 1, 'Liurai'),
(9, 1, 'Malere'),
(10, 1, 'Saboria'),
(11, 1, ' Seloi Kraik'),
(12, 3, ' Acubilitoho'),
(13, 3, ' Bereleu'),
(14, 3, '  Fahisoi'),
(15, 3, ' Fautrilau'),
(16, 3, ' Manukasa'),
(17, 3, 'Namleso'),
(18, 2, ' Acumau'),
(19, 2, 'Fadabloko'),
(20, 2, ' Fahisoi'),
(21, 2, ' Faturasa'),
(22, 2, ' Hautuho'),
(23, 2, ' Liurai'),
(24, 2, ' Maumeta'),
(25, 2, 'Tulatakeu'),
(26, 4, 'Fatisi'),
(27, 4, ' Kotolau'),
(28, 4, 'Madabeno'),
(29, 4, 'Talitu'),
(30, 4, ' Tohumeta'),
(31, 5, ' Ainaro'),
(32, 5, ' Cassa'),
(33, 5, ' Manutassi'),
(34, 5, ' Mau-Nunu'),
(35, 5, 'Mau-Ulo'),
(36, 5, 'Soro'),
(37, 5, 'Suro-Craic'),
(38, 6, ' Mulo'),
(39, 6, ' Mauchiga'),
(40, 6, 'Nunu Mogue'),
(41, 8, 'Beikala'),
(42, 8, ' Leolima'),
(43, 7, ' Aituto'),
(44, 7, ' Edi'),
(45, 7, ' Fatubessi'),
(46, 7, 'Horiauic'),
(47, 7, 'Liurai'),
(48, 7, 'Manelobas'),
(49, 7, ' Manetu'),
(50, 7, ' Maubisse'),
(51, 7, ' Maulau'),
(52, 9, ' Afaloicai'),
(53, 9, ' Alaua-Craik'),
(54, 9, ' Alaua-Leten'),
(55, 9, 'Defa-Uassi'),
(56, 9, ' Hae-Coni'),
(57, 9, ' Larisula'),
(58, 9, ' Lavateri'),
(59, 9, ' Osso-Huna'),
(60, 9, ' Samalari'),
(61, 9, ' Uacala'),
(62, 10, ' Bahú'),
(63, 10, ' Bucoli'),
(64, 10, ' Buibau'),
(65, 10, ' Buruma'),
(66, 10, ' Caibada Uaimua'),
(67, 10, ' Samalari'),
(68, 10, ' Seiçal'),
(69, 10, ' Tirilolo'),
(70, 10, ' Triloka'),
(71, 10, ' Gariuai'),
(72, 10, ' Gariuai'),
(73, 11, ' Atelari'),
(74, 11, ' Libagua'),
(75, 11, ' Nunira'),
(76, 11, ' Saelari'),
(77, 11, ' Sagadate'),
(78, 11, ' Samalari'),
(79, 11, ' Soba'),
(80, 11, ' Tequinaumata'),
(81, 12, ' Abafala'),
(82, 12, ' Abo'),
(83, 12, ' Afaçá'),
(84, 12, ' Baguia'),
(85, 12, ' Bualale'),
(86, 12, ' Guruça'),
(87, 12, ' Lacoliu'),
(88, 12, 'Laisorulai de baixo'),
(89, 12, 'Laisorulai de cima'),
(90, 12, ' Lelalai'),
(91, 12, ' Letemumo'),
(92, 12, ' Macalaco'),
(93, 12, ' Maluro'),
(94, 12, 'Namanei'),
(95, 12, 'Uaitame'),
(96, 13, ' Caicua'),
(97, 13, 'Loilubo'),
(98, 13, 'Ossoala'),
(99, 13, ' Ostico'),
(100, 13, ' Uaigae'),
(101, 13, ' Uatu-Lari'),
(102, 13, ' Vemasse'),
(103, 14, ' Bado-Ho’o'),
(104, 14, ' Bahamori'),
(105, 14, ' Fatulia'),
(106, 14, ' Uailaha'),
(107, 14, ' Uai-Oli'),
(108, 14, 'Uatu-Haco'),
(109, 14, ' Uma-Anaico'),
(110, 14, ' Uma Analu'),
(111, 15, ' Aidabaleten'),
(112, 15, ' Atabai'),
(113, 15, ' Rairobo'),
(114, 15, ' Hataz'),
(115, 16, ' Balibo Kota'),
(116, 16, ' Batugade'),
(117, 16, ' Cová'),
(118, 16, ' Leohitu'),
(119, 16, ' Leolima'),
(120, 16, ' Sanirin'),
(121, 17, ' Ai-Assa'),
(122, 17, ' Atu Aben'),
(123, 17, ' Bobonaro'),
(124, 17, ' Carabau'),
(125, 17, ' Colimau'),
(126, 17, 'Cota Bo’ot'),
(127, 17, ' Ilatlaun'),
(128, 17, ' Leber'),
(129, 17, ' Lour'),
(130, 17, ' Lourba'),
(131, 17, ' Maliubu'),
(132, 17, ' Malilait'),
(133, 17, ' Molop'),
(134, 17, ' Oe-Leu'),
(135, 17, ' Sibuni'),
(136, 17, ' Soi Leco'),
(137, 17, ' Tapo'),
(138, 17, ' Tebabui'),
(139, 18, ' Atudara'),
(140, 18, ' Daudo'),
(141, 18, ' Goulolo'),
(142, 18, ' Guenolai'),
(143, 18, ' Manapa'),
(144, 18, ' Miligo'),
(145, 18, 'Purogoa'),
(146, 18, ' Raiheu'),
(147, 19, ' Deudet'),
(148, 19, ' Gildapil'),
(149, 19, ' Guda'),
(150, 19, ' Lebos'),
(151, 19, ' Lontas'),
(152, 19, ' Lupai'),
(153, 19, ' Opa'),
(154, 20, ' Holsa'),
(155, 20, ' Lahomea'),
(156, 20, ' Odamau'),
(157, 20, ' Rai Fun'),
(158, 20, 'Ritabou'),
(159, 20, ' Saburai'),
(160, 20, ' Tapo Memo'),
(161, 21, ' Fatululik'),
(162, 21, ' Taroman'),
(163, 22, ' Beluluik Leten'),
(164, 22, ' Beluluik Leten'),
(165, 22, ' Beluluik Leten'),
(166, 22, ' Beluluik Leten'),
(167, 22, ' Beluluik Leten'),
(168, 22, ' Fatumean'),
(169, 22, 'Nanu'),
(170, 23, ' Dato Rua'),
(171, 23, ' Dato Tolu'),
(172, 23, ' Fohoren'),
(173, 23, ' Lactos'),
(174, 27, ' Beco II'),
(175, 27, ' Fatuleto'),
(176, 27, ' Lepo'),
(177, 27, ' Lour'),
(178, 27, ' Mape'),
(179, 27, ' Raimera'),
(180, 27, ' Ucecai'),
(181, 27, ' Zulo'),
(182, 66, ' Belecasac'),
(183, 24, ' Belecasac'),
(184, 24, 'Holpilat'),
(185, 24, ' Matai'),
(186, 24, ' Ogues'),
(187, 25, 'Beco I'),
(188, 25, ' Debus'),
(189, 25, ' Labarat'),
(190, 25, ' Kamenasa'),
(191, 25, ' Suai'),
(192, 26, ' Foholulik'),
(193, 26, ' Lalawa'),
(194, 26, ' Maudemu'),
(195, 31, ' Beloi'),
(196, 31, ' Biqueli'),
(197, 31, 'Macadade'),
(198, 31, ' Maquili'),
(199, 31, 'Vila Maumeta'),
(200, 33, ' Balibar'),
(201, 33, ' Becora'),
(202, 33, 'Bidau Santana'),
(203, 33, ' Hera'),
(204, 33, ' Kulu Hun'),
(205, 33, ' Meti Aut'),
(206, 32, ' Bairro Pite'),
(207, 32, ' Comoro'),
(208, 32, ' Fatuhada'),
(209, 32, 'Kampung Alor'),
(210, 30, ' Duyung'),
(211, 30, 'Sabuli'),
(212, 29, ' Akadiru-Hun'),
(213, 29, 'Bemori'),
(214, 29, ' Bidau Lecidere'),
(215, 29, ' Grecinfor'),
(216, 29, ' Lahane Oriental'),
(217, 29, ' Santa Cruz'),
(218, 28, 'Caicoli'),
(219, 28, 'Colmera'),
(220, 28, ' Dare'),
(221, 28, ' Lahane Ocidental'),
(222, 28, ' Mascarenhas'),
(223, 28, 'Motael'),
(224, 28, ' Vila Verde'),
(225, 37, ' Atara'),
(226, 37, ' Baboe Kraik'),
(227, 37, ' Baboe Leten'),
(228, 37, ' Batu Manu'),
(229, 37, ' Laklo'),
(230, 37, ' Lasaun'),
(231, 37, ' Laubonu'),
(232, 15, ' Leimea Leten'),
(233, 37, ' Malabe'),
(234, 37, ' Obulo'),
(235, 37, 'Paramin'),
(236, 37, ' Tiarlelo'),
(237, 35, ' Estado'),
(238, 35, ' Humboe'),
(239, 35, ' Lauala'),
(240, 35, ' Liguimea'),
(241, 35, ' Mertutu'),
(242, 35, ' Poetete'),
(243, 35, ' Ponilala'),
(244, 35, ' Raimerhei'),
(245, 35, 'Riheu'),
(246, 35, ' Talimoro'),
(247, 38, ' Ailelo'),
(248, 38, ' Asulau/Sare'),
(249, 38, 'Fatubolu'),
(250, 38, ' Fatubessi'),
(251, 38, ' Hatulia'),
(252, 38, 'Koliate Leotelu'),
(253, 38, ' Leimea Kraik'),
(254, 38, ' Leimea Sarinbalu'),
(255, 38, ' Lisapat'),
(256, 38, ' Manusea'),
(257, 38, ' Mau ubu'),
(258, 38, ' Samara'),
(259, 38, ' Urahou'),
(260, 36, ' Dukurai'),
(261, 36, 'Eraulo'),
(262, 36, ' Goulolo'),
(263, 36, ' Hatugau'),
(264, 36, ' Katrai Kraik'),
(265, 36, ' Katrai Leten'),
(266, 36, 'Lauana'),
(267, 36, ' Letefoho'),
(268, 34, ' Fatuquero'),
(269, 34, ' Lihu'),
(270, 34, ' Matata'),
(271, 34, ' Deleso'),
(272, 34, 'Railaco Kraik'),
(273, 34, ' Railako Leten'),
(274, 34, ' Samaleten'),
(275, 34, ' Taraso'),
(276, 34, ' Tokoluli'),
(277, 41, ' Iliomar I'),
(278, 26, ' Iliomar II'),
(279, 41, ' Ailebere'),
(280, 41, ' Fuat'),
(281, 41, ' Cainliu'),
(282, 41, 'Tirilolo'),
(283, 40, ' Baduro'),
(284, 40, ' Com'),
(285, 40, ' Daudere'),
(286, 40, ' Daudere'),
(287, 40, ' Eukisi'),
(288, 40, ' Ililai'),
(289, 40, ' Maina I'),
(290, 40, ' Maina II'),
(291, 40, ' Pairara'),
(292, 40, 'Parlamento'),
(293, 40, ' Serelau'),
(294, 39, 'Bauro'),
(295, 39, ' Cacaven'),
(296, 39, ' Fuiloro'),
(297, 39, ' Home'),
(298, 39, ' Leuro'),
(299, 39, ' Loré I'),
(300, 39, ' Loré II'),
(301, 39, ' Muapitine'),
(302, 39, ' Raça'),
(303, 39, ' Souro'),
(304, 42, ' Afabubu'),
(305, 42, ' Baricafa'),
(306, 42, ' Cotamuto'),
(307, 42, ' Lakawa'),
(308, 42, 'Luro'),
(309, 42, 'Wairoke'),
(310, 43, ' Mehara'),
(311, 43, ' Tutuala'),
(312, 44, 'Fahilebo'),
(313, 44, ' Fatumasi'),
(314, 44, ' Lauhata'),
(315, 44, 'Leorema'),
(316, 44, ' Maumeta'),
(317, 44, ' Metagou'),
(318, 44, ' Motaulun'),
(319, 44, 'Tibar'),
(320, 44, ' Ulmera'),
(321, 45, ' Asumano'),
(322, 45, ' Darulete'),
(323, 45, ' Dato'),
(324, 45, ' Hatukesi'),
(325, 45, ' Leotela'),
(326, 45, ' Loidahar'),
(327, 45, ' Lukulai'),
(328, 46, 'Guguleur'),
(329, 46, ' Guico'),
(330, 46, ' Lisadilia'),
(331, 46, ' Maubaralisa'),
(332, 46, ' Vatuboro'),
(333, 46, ' Vatuvou'),
(334, 46, ' Vatuvou'),
(335, 51, ' Aubeon'),
(336, 51, ' Barique'),
(337, 51, ' Fatuwaqui'),
(338, 51, ' Manehat'),
(339, 51, ' Umaboku'),
(340, 49, 'Hohorai'),
(341, 49, ' Laku Mesak'),
(342, 49, ' Umakaduak'),
(343, 49, 'Umanaruk'),
(344, 52, ' Bataram'),
(345, 52, ' Fatumakerek'),
(346, 52, 'Funar'),
(347, 52, ' Manelima'),
(348, 52, ' Orlalan'),
(349, 52, ' Sananain'),
(350, 48, ' Cairui'),
(351, 48, ' Hatularan'),
(352, 48, ' Lifau'),
(353, 47, ' Ailili'),
(354, 47, ' Aiteas'),
(355, 47, ' Cribas'),
(356, 47, ' Iliheu'),
(357, 47, ' Maabat'),
(358, 47, 'Sau'),
(359, 50, ' Fatumakerek'),
(360, 50, ' Leohat'),
(361, 50, ' Manlala'),
(362, 50, ' Maunfahe'),
(363, 50, ' Samoro'),
(364, 54, ' Aituha'),
(365, 54, ' Dotik'),
(366, 54, ' Mahaquidan'),
(367, 54, ' Taitudak'),
(368, 54, 'Uma Berloik'),
(369, 55, ' Bubususu'),
(370, 55, ' Fatukahi'),
(371, 55, ' Kaikasa'),
(372, 55, ' Klakuk'),
(373, 55, ' Fahinehan'),
(374, 53, ' Babulu'),
(375, 53, ' Betano'),
(376, 53, ' Daisua'),
(377, 53, ' Gratu'),
(378, 53, 'Holarua'),
(379, 53, ' Letefoho'),
(380, 53, ' Rotutu'),
(381, 53, ' Tutuluro'),
(382, 56, ' Aitemua'),
(383, 56, ' Beremana'),
(384, 56, 'Fatukalo'),
(385, 56, ' Kaimauk'),
(386, 56, ' Foholau'),
(387, 56, ' Lesuata'),
(388, 56, ' Liurai'),
(389, 56, ' Manumera'),
(390, 56, 'Matorek'),
(391, 56, ' Mindelo'),
(392, 56, ' Orana'),
(393, 63, ' Banafi'),
(394, 63, ' Bebe Ufe'),
(395, 63, ' Lela Ufe'),
(396, 63, 'Suni Ufe'),
(397, 63, 'Usi Taco'),
(398, 64, 'Bobometo'),
(399, 64, ' Usitakeno'),
(400, 64, 'Usitasae'),
(401, 62, ' Bobocasae'),
(402, 62, 'Costa'),
(403, 62, ' Cunha'),
(404, 62, ' Lalisuk'),
(405, 62, ' Lifau'),
(406, 62, ' Naimeco'),
(407, 62, ' Nipane'),
(408, 62, ' Taiboco'),
(409, 65, ' Abani'),
(410, 65, ' Malelat'),
(411, 61, ' Ahic'),
(412, 61, ' Dilor'),
(413, 61, ' Laline'),
(414, 61, 'Uma Tolu'),
(415, 58, ' Builale'),
(416, 58, ' Liaruca'),
(417, 58, ' Loi-Huno'),
(418, 58, ' Nahareca'),
(419, 58, ' Ossorua'),
(420, 58, 'Ossu de Cima'),
(421, 58, ' Uabubo'),
(422, 58, 'Uaguia'),
(423, 58, ' Uaibobo'),
(424, 60, ' Bahalarauain'),
(425, 60, ' Bibileo'),
(426, 60, ' Caraubalu'),
(427, 60, ' Fatu Dere'),
(428, 60, ' Luca'),
(429, 60, ' Maluru'),
(430, 60, 'Uaimori'),
(431, 60, 'Uma Qui’ic'),
(432, 60, ' Uma Uain Craic'),
(433, 60, ' Uma Uain Leten'),
(434, 57, ' Afaloicai'),
(435, 57, ' Bahatata'),
(436, 57, ' Irabin de baixo'),
(437, 57, 'Irabin de cima'),
(438, 57, ' Loi - Ulu'),
(439, 57, ' Uani Uma'),
(440, 59, ' Afaloicai'),
(441, 59, 'Babulo'),
(442, 59, ' Macadique'),
(443, 59, ' Matohoi'),
(444, 59, ' Uaitame'),
(445, 59, ' Vessoru');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id`, `keterangan`, `id_obat`) VALUES
(1, 'Saya ingin minum obat tubercolosis tersebut dengan terartur', 1),
(2, 'Nama', 3),
(3, 'Dssss', 3);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `nama_konsultasi` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `id_dokter`, `nama_konsultasi`) VALUES
(1, 1, 'Penyakit Tubercolosis'),
(2, 2, 'Penyakit Tubercolosis'),
(3, 3, 'Penyakit Tubercolosis'),
(4, 4, 'Penyakit Tubercolosis'),
(5, 5, 'Penyakit Tubercolosis');

-- --------------------------------------------------------

--
-- Table structure for table `pendafaranpasien`
--

CREATE TABLE `pendafaranpasien` (
  `idpend` int(11) NOT NULL,
  `kodepasien` varchar(111) NOT NULL,
  `tgl_diagnosa` varchar(111) NOT NULL,
  `namapasien` varchar(200) NOT NULL,
  `nomor_KTP` varchar(128) DEFAULT NULL,
  `jenis_kelamin` varchar(111) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umurpasien` int(11) NOT NULL,
  `alamatpasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendafaranpasien`
--

INSERT INTO `pendafaranpasien` (`idpend`, `kodepasien`, `tgl_diagnosa`, `namapasien`, `nomor_KTP`, `jenis_kelamin`, `tanggal_lahir`, `umurpasien`, `alamatpasien`) VALUES
(1, 'M100', '52022', 'Igidio Soares', '233334444', 'Laki-Laki', '2022-05-03', 11, 55),
(54, 'M110', '52022', 'Igidio Soares', '233334444', 'Laki-Laki', '2022-05-03', 9, 55),
(55, '23117122', '52022', 'Apriana Francisca Triforca Luan Soares', '2311712345', 'Perempuan', '2022-05-26', 11, 55),
(56, 'M100', '062022', 'Apriana Francisca Triforca Luan Soares', '233334444', 'Laki-Laki', '2022-06-16', 11, 55),
(57, 'M100', '062022', 'Apriana Francisca Triforca Luan Soares', '233334444', 'Laki-Laki', '0000-00-00', 11, 55),
(58, 'M100', '1654258387', 'Apriana Francisca Triforca Luan Soares', '233334444', 'Perempuan', '2022-06-03', 111, 55),
(59, 'M100', '04-June-2022', 'Apriana Francisca Triforca Luan Soares', '233334444', 'Perempuan', '2022-06-04', 22, 55),
(60, 'M100', '04-June-2022', 'Apriana Francisca Triforca Luan Soares', '233334444', 'Perempuan', '2022-06-04', 22, 55);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(111) NOT NULL,
  `nama_penyakit` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode_penyakit`, `nama_penyakit`) VALUES
(1, 'P100', 'Tuberculosis Paru-Paru'),
(2, 'P200', 'Tuberculosis Kelenjar'),
(3, 'P300', 'Tuberculosis Usus'),
(4, 'P400', 'Tuberculosis Tulang Belakang'),
(5, 'P500', 'TBC Urogenital'),
(6, 'P600', 'TBC Milier'),
(7, 'P700', 'TBC Saluran Pencernaan');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_diagnosa`
--

CREATE TABLE `relasi_diagnosa` (
  `id_relasi` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `solusi_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `keterangan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_diagnosa`
--

INSERT INTO `relasi_diagnosa` (`id_relasi`, `gejala_id`, `penyakit_id`, `solusi_id`, `obat_id`, `keterangan_id`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 1, 1, 2, 1, 1),
(3, 2, 1, 1, 1, 1),
(4, 2, 1, 2, 1, 1),
(5, 3, 1, 1, 1, 1),
(6, 3, 1, 2, 1, 1),
(7, 4, 1, 1, 1, 1),
(8, 4, 1, 2, 1, 1),
(9, 5, 2, 3, 1, 1),
(10, 5, 2, 4, 1, 1),
(11, 5, 2, 5, 1, 1),
(12, 5, 2, 6, 1, 1),
(13, 6, 2, 3, 1, 1),
(14, 6, 2, 4, 1, 1),
(15, 6, 2, 5, 1, 1),
(16, 6, 2, 6, 1, 1),
(17, 7, 2, 3, 1, 1),
(18, 7, 2, 4, 1, 1),
(19, 7, 2, 5, 1, 1),
(20, 7, 2, 6, 1, 1),
(21, 8, 2, 3, 1, 1),
(22, 8, 2, 4, 1, 1),
(23, 8, 2, 5, 1, 1),
(24, 8, 2, 6, 1, 1),
(26, 6, 1, 2, 1, 2),
(27, 1, 1, 1, 1, 1),
(28, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id` int(11) NOT NULL,
  `kode_rumahsakit` varchar(111) NOT NULL,
  `nama_rumahsakit` varchar(111) NOT NULL,
  `id_kelurahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumahsakit`
--

INSERT INTO `rumahsakit` (`id`, `kode_rumahsakit`, `nama_rumahsakit`, `id_kelurahan`) VALUES
(1, 'R100', 'Rumah Sakit Fatuberlio', 372),
(2, 'R200', 'Rumah Sakit Fatuberlio', 370);

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `kodesolusi` varchar(20) NOT NULL,
  `isi_solusi` varchar(2000) NOT NULL,
  `id_penyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `kodesolusi`, `isi_solusi`, `id_penyakit`) VALUES
(1, 'S100', '1. Pengobatan TBC membutuhkan waktu yang cukup lama, yaitu minimal enam bulan. Meski demikian, sangatlah penting untuk melakukan pengobatan hingga tuntas agar dapat sembuh total.\r\n2. Cara mencegah TBC bisa dilakukan dengan beberapa cara, seperti menutup mulut saat bersin, tidak membuang dahak atau meludah sembarangan, dan memastikan rumah memiliki sirkulasi udara yang baik', 1),
(2, 'S200', '1. Menjaga daya tahan tubuh agar tidak mudah sakit dengan cara makan makanan yang bergizi, rajin berolahraga, istirahat cukup serta perbanyak konsumsi air putih. 2. Gunakan masker apabila berada di daerah yang penuh asap/debu/polusi udara. 3. Pastikan tempat tinggal maupun tempat kerja .memiliki sistem ventilasi udara yang baik dan cahaya matahari dapat masuk ke dalam ruangan. 4. Bagi Anda yang sudah terdiagnosis TB paru maupun TB ekstraparu seperti TB kelenjar, jangan lupa untuk mengkonsumsi obat TB secara teratur, selalu menggunakan masker dan membuang dahak pada tempatnya agar tidak menularkan pada orang lain, terutama pada anak-anak. ', 2),
(3, 'S300', '1.Cara mencegah TBC bisa dilakukan dengan beberapa cara, seperti menutup mulut saat bersin, tidak membuang dahak atau meludah sembarangan, dan memastikan rumah memiliki sirkulasi udara yang baik ', 3),
(4, 'S400', '1.Cara mencegah TBC bisa dilakukan dengan beberapa cara, seperti menutup mulut saat bersin, tidak membuang dahak atau meludah sembarangan, dan memastikan rumah memiliki sirkulasi udara yang baik\r\n', 3),
(5, 'S500', 'Pastikan tempat tinggal maupun tempat kerja .memiliki sistem ventilasi udara yang baik dan cahaya matahari dapat masuk ke dalam ruangan.\r\n', 2),
(6, 'S600', 'Bagi Anda yang sudah terdiagnosis TB paru maupun TB ekstraparu seperti TB kelenjar, jangan lupa untuk mengkonsumsi obat TB secara teratur, selalu menggunakan masker dan membuang dahak pada tempatnya agar tidak menularkan pada orang lain, terutama pada anak-anak.\r\n', 2),
(7, 'S700', 'Cara mencegah TBC bisa dilakukan dengan beberapa cara, seperti menutup mulut saat bersin, tidak membuang dahak atau meludah sembarangan, dan memastikan rumah memiliki sirkulasi udara yang baik.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_akun` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(122) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `userkecamatan` varchar(120) NOT NULL,
  `foto` varchar(5000) NOT NULL,
  `level` enum('admin','dokter','member','pegawai','sud_admin') NOT NULL,
  `judul` varchar(800) NOT NULL,
  `alamatwebsite` varchar(800) NOT NULL,
  `tlpwebsite` varchar(800) NOT NULL,
  `websiterumahsakit` varchar(800) NOT NULL,
  `alamatemail` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `last_name`, `first_name`, `username`, `email`, `password`, `created_akun`, `jenis_kelamin`, `alamat`, `status`, `userkecamatan`, `foto`, `level`, `judul`, `alamatwebsite`, `tlpwebsite`, `websiterumahsakit`, `alamatemail`) VALUES
(1, 'Natalio Cristianto', 'Luan Soares', 'Natalio Cristianto Luan Soares', 'nataliocristiantoluansoares@gmail.com', '1cfb78977897cdd2490dee44c058c51a5f49100c', 1649323230, 'Laki-Laki', 'Fatuberlio', 'Jangan Menyesal Terhadap Kegagalan Karena Kegagalan Mengajarmu Untuk Mengerti Apa Itu Perjuangan', 'Fatuberlio', 'default.png', 'admin', '', '', '', '', ''),
(2, 'Igidio ', 'Soares', 'Igidio Soares', 'igidiosoares@gmail.com', '2dc621278189a22d0f4f630eed16446e2f4da30b', 1643810142, 'Laki-Laki', 'Fatuberlio', 'Jangan Menyesal Terhadap Kegagalan Karena Kegagalan Mengajarmu Untuk Mengerti Apa Itu Perjuangan', 'Fatuberlio', '', 'dokter', '', '', '', '', ''),
(3, 'Aprina Francisca Triforca', 'Luan soares', 'Apriana Francisca Triforca Luan Soares', 'aprianafranciscatriforcaluansoares@gmail.com', '960f3e0ced7568483d79d42a45eb327851818e45', 1649325051, 'Perempuan', 'Same Kota', 'Semakin Kamu Menyerah Dan Semakin Pula Kami Tidak Akan Mendapatnya', 'Fatuberlio', '', 'member', '', '', '', '', ''),
(19, 'Martha', 'Mako', 'Martha Mako', 'marthamako@gmail.com', '17cb4ccc13352c308eacbf6304b4195967d14fbe', 1647167779, '', '', '', 'Same', 'default.jpg', 'member', '', '', '', '', ''),
(20, 'serafim', 'pereira', 'Serafim da Cruz Pereira', 'serafimdacruzpereira@gmail.com', '1cfb78977897cdd2490dee44c058c51a5f49100c', 1648369131, 'Laki-Laki', 'Fatuberlio', 'Aku Sayang Kamu', 'Fatuberlio', '', 'dokter', '', '', '', '', ''),
(21, 'Henia', 'Luan Soares', 'Henia Luan Soares', 'henialuansoares@gmail.com', '1cfb78977897cdd2490dee44c058c51a5f49100c', 1649086226, '', '', '', 'Fatuberlio', 'default.jpg', 'member', ' Website Rumah Sakit Kecamatan Fatuberlio', 'JL.Wekiar. 12-23 Fatuberlio-85225,Manufahi-Timor Leste ', '(0380)833395- 831194 ', ' http//www.fatuberlio.ac.id', 'fatuberlio.fatuberliorumahsakit@gmail.com'),
(22, 'Henia Luan Soares', 'Henia Luan Soares', 'Henia Luan Soares', 'henialuansoaress@gmail.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 1649334411, '', '', '', 'Fatuberlio', 'default.jpg', 'member', ' Website Rumah Sakit Kecamatan Fatuberlio', 'JL.Wekiar. 12-23 Fatuberlio-85225,Manufahi-Timor Leste ', '(0380)833395- 831194 ', ' http//www.fatuberlio.ac.id', 'fatuberlio.fatuberliorumahsakit@gmail.com'),
(23, 'Sarmento', 'Marita', 'Marita Sarmento', 'maritasarmento@gmail.com', '1cfb78977897cdd2490dee44c058c51a5f49100c', 1654575903, 'Perempuan', 'Fatukasi, Kledik', 'Saya ingin hidup ini penuh dengan rasa kebahagian', 'Fatuberlio', '', 'dokter', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_gejala`
--

CREATE TABLE `user_gejala` (
  `id_user` int(11) NOT NULL,
  `gejala_id` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_gejala`
--

INSERT INTO `user_gejala` (`id_user`, `gejala_id`) VALUES
(3, '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan_hasil_diagnosa_penyakit`
--
ALTER TABLE `aturan_hasil_diagnosa_penyakit`
  ADD PRIMARY KEY (`id_aturan`);

--
-- Indexes for table `beritaanual`
--
ALTER TABLE `beritaanual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritamensal`
--
ALTER TABLE `beritamensal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritasemenal`
--
ALTER TABLE `beritasemenal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritasetiaphari`
--
ALTER TABLE `beritasetiaphari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pdf`
--
ALTER TABLE `data_pdf`
  ADD PRIMARY KEY (`id_pdf`);

--
-- Indexes for table `dokter_perawat_bidan`
--
ALTER TABLE `dokter_perawat_bidan`
  ADD PRIMARY KEY (`id_dopebi`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_diagnosa_penyakit`
--
ALTER TABLE `hasil_diagnosa_penyakit`
  ADD PRIMARY KEY (`id_hasil_diagnosa_penyakit`);

--
-- Indexes for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judulwebsite`
--
ALTER TABLE `judulwebsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendafaranpasien`
--
ALTER TABLE `pendafaranpasien`
  ADD PRIMARY KEY (`idpend`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relasi_diagnosa`
--
ALTER TABLE `relasi_diagnosa`
  ADD PRIMARY KEY (`id_relasi`),
  ADD KEY `gejala_id` (`gejala_id`),
  ADD KEY `penyakit_id` (`penyakit_id`),
  ADD KEY `solusi_id` (`solusi_id`),
  ADD KEY `obat_id` (`obat_id`),
  ADD KEY `keterangan_id` (`keterangan_id`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelurahan` (`id_kelurahan`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan_hasil_diagnosa_penyakit`
--
ALTER TABLE `aturan_hasil_diagnosa_penyakit`
  MODIFY `id_aturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `beritaanual`
--
ALTER TABLE `beritaanual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `beritamensal`
--
ALTER TABLE `beritamensal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `beritasemenal`
--
ALTER TABLE `beritasemenal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `beritasetiaphari`
--
ALTER TABLE `beritasetiaphari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_pdf`
--
ALTER TABLE `data_pdf`
  MODIFY `id_pdf` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokter_perawat_bidan`
--
ALTER TABLE `dokter_perawat_bidan`
  MODIFY `id_dopebi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `hasil_diagnosa_penyakit`
--
ALTER TABLE `hasil_diagnosa_penyakit`
  MODIFY `id_hasil_diagnosa_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `judulwebsite`
--
ALTER TABLE `judulwebsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;
--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pendafaranpasien`
--
ALTER TABLE `pendafaranpasien`
  MODIFY `idpend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `relasi_diagnosa`
--
ALTER TABLE `relasi_diagnosa`
  MODIFY `id_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `relasi_diagnosa`
--
ALTER TABLE `relasi_diagnosa`
  ADD CONSTRAINT `relasi_diagnosa_ibfk_1` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_diagnosa_ibfk_2` FOREIGN KEY (`solusi_id`) REFERENCES `solusi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_diagnosa_ibfk_3` FOREIGN KEY (`obat_id`) REFERENCES `jenis_obat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_diagnosa_ibfk_4` FOREIGN KEY (`keterangan_id`) REFERENCES `keterangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
