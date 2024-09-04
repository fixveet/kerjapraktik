-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 25, 2024 at 06:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp-main`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `nama_gedung` varchar(255) NOT NULL,
  `foto_pemimpin` varchar(100) NOT NULL,
  `nama_pemimpin` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `layanan` text NOT NULL,
  `jam_operasional` varchar(255) DEFAULT NULL,
  `luas_area` float DEFAULT NULL,
  `jumlah_desa` int(11) DEFAULT NULL,
  `penduduk_laki` int(11) DEFAULT NULL,
  `penduduk_pr` int(11) NOT NULL,
  `utara` varchar(50) DEFAULT NULL,
  `selatan` varchar(50) NOT NULL,
  `barat` varchar(50) NOT NULL,
  `timur` varchar(50) NOT NULL,
  `PAUD` int(11) DEFAULT NULL,
  `TK` int(11) NOT NULL,
  `SD` int(11) NOT NULL,
  `SMP` int(11) NOT NULL,
  `SMA` int(11) NOT NULL,
  `SMK` int(11) NOT NULL,
  `jumlah_rumah_sakit` varchar(100) DEFAULT NULL,
  `jumlah_puskesmas` varchar(255) DEFAULT NULL,
  `pasar_tradisional` int(11) DEFAULT NULL,
  `pasar_modern` int(11) NOT NULL,
  `longitude` text DEFAULT NULL,
  `latitude` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kecamatan`, `nama_gedung`, `foto_pemimpin`, `nama_pemimpin`, `alamat`, `layanan`, `jam_operasional`, `luas_area`, `jumlah_desa`, `penduduk_laki`, `penduduk_pr`, `utara`, `selatan`, `barat`, `timur`, `PAUD`, `TK`, `SD`, `SMP`, `SMA`, `SMK`, `jumlah_rumah_sakit`, `jumlah_puskesmas`, `pasar_tradisional`, `pasar_modern`, `longitude`, `latitude`) VALUES
(1, 'Sungai Raya', 'Kantor Camat Sungai Raya', 'image 1.png', 'Drs. M. Ikhsan Sukendra,M.Si', 'Jl. Adi Sucipto No.Km.12, RW.7, Sungai Raya, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat.', '<ol>\r\n	<li>Surat Keterangan Domisili Usaha</li>\r\n	<li>Surat Dispensasi Nikah,Surat Keterangan Ahli Waris</li>\r\n	<li>Rekomendasi Akta Kematian</li>\r\n	<li>Rekomendasi Pendirian Mesjid</li>\r\n	<li>Paud</li>\r\n	<li>Pondok Pesantren dan Wakaf</li>\r\n	<li>Rekomendasi Akta Kelahiran</li>\r\n	<li>Pengesahan Permohonan / Pembuatan KK</li>\r\n	<li>Perubahan Elemen Data Kartu Keluarga</li>\r\n	<li>Rekam KTP dan Pencetakan E-KTP</li>\r\n	<li>Legalisir Pendaftaran Masuk TNI dan Polri</li>\r\n	<li>Surat Pindah Antar Desa/Kecamatan</li>\r\n	<li>Surat Izin Keramaian / Pertunjukan Legalisir Pensiun</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Senin : 08.00 &ndash; 15.00</li>\r\n	<li>Selasa, Rabu, Kamis, Jumat : 08.00 &ndash; 15.30</li>\r\n	<li>Sabtu dan Minggu : Tutup</li>\r\n</ol>\r\n', 1124, 22, 122262, 117804, 'Kota Pontianak dan Kec. Sungai Ambawang', 'Kec. Kubu dan Kec. Terentang', 'Kec. Sungai Kakap', 'Kab Sanggau', 106, 106, 96, 45, 18, 11, '2', '4', 10, 63, '-0.10607526390155783', '109.4102517746173'),
(13, 'Kuala Mandor B', 'Kantor Camat Kuala Mandor B', 'material-symbols_image-outline.png', '-', 'Kuala Mandor B, Kec. Kuala Mandor-B, Kabupaten Kubu Raya, Kalimantan Barat 78393, Indonesia', '<ol>\r\n	<li>Surat Keterangan Domisili Usaha</li>\r\n	<li>Surat Dispensasi Nikah,Surat Keterangan Ahli Waris</li>\r\n	<li>Rekomendasi Akta Kematian</li>\r\n	<li>Rekomendasi Pendirian Mesjid</li>\r\n	<li>Paud</li>\r\n	<li>Pondok Pesantren dan Wakaf</li>\r\n	<li>Rekomendasi Akta Kelahiran</li>\r\n	<li>Pengesahan Permohonan / Pembuatan KK</li>\r\n	<li>Perubahan Elemen Data Kartu Keluarga</li>\r\n	<li>Rekam KTP dan Pencetakan E-KTP</li>\r\n	<li>Legalisir Pendaftaran Masuk TNI dan Polri</li>\r\n	<li>Surat Pindah Antar Desa/Kecamatan</li>\r\n	<li>Surat Izin Keramaian / Pertunjukan Legalisir Pensiun</li>\r\n</ol>\r\n', 'Senin - Jumat : 09.00 – 13.00; Sabtu dan Minggu: Tutup', 449, 6, 14047, 13206, 'Kab. Landak', 'Kec. Sungai Ambawang', 'Kab. Mempawah', 'Kab. Landak dan Kec. Sungai Ambawang', 19, 19, 28, 17, 7, 4, '1', '2', 3, 0, '-0.10607526390155783', '109.4102517746173'),
(14, 'Sungai Ambawang', 'Kantor Kecamatan Sungai Ambawang', 'material-symbols_image-outline.png', '-', 'Jl. Trans Kalimantan, Sul Ambawang Kuala, Kec. Sungai Ambawang, Kabupaten Kubu Raya, Kalimantan Barat 78393, Indonesia', 'Surat Keterangan Domisili Usaha,Surat Dispensasi Nikah,Surat Keterangan Ahli Waris,Rekomendasi Akta Kematian,Rekomendasi Pendirian Mesjid. Paud, Pondok Pesantren dan Wakaf,Rekomendasi Akta Kelahiran,Pengesahan Permohonan / Pembuatan KK,Perubahan Elemen Data Kartu Keluarga,Rekam KTP dan Pencetakan E-KTP,Legalisir Pendaftaran Masuk TNI dan Polri,Surat Pindah Antar Desa/Kecamatan,Surat Izin Keramaian / Pertunjukan Legalisir Pensiun', 'Senin - Jumat 09.00 – 13.00; Sabtu dan Minggu: Tutup', 1055, 15, 44799, 42579, 'Kec. Kuala Mandor B dan Kab.Landak', 'Kec. Sungai Raya', 'Kota Pontianak dan Kec. Sungai Raya', 'Kab. Sanggau', 44, 44, 56, 27, 13, 9, '', '', 13, 3, '-0.10607526390155783', '109.4102517746173'),
(15, 'Terentang', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, '-0.10607526390155783', '109.4102517746173'),
(16, 'Batu Ampar', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, '-0.10607526390155783', '109.4102517746173'),
(17, 'Kubu', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, '-0.10607526390155783', '109.4102517746173'),
(18, 'Rasau Jaya', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, '-0.10607526390155783', '109.4102517746173'),
(19, 'Teluk Pakedai', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, '-0.10607526390155783', '109.4102517746173'),
(20, 'Sungai Kakap', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, '-0.10607526390155783', '109.4102517746173');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
