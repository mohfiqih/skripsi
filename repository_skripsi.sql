-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 12:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repository_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `tanggal_berkas` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id`, `judul`, `tanggal_berkas`) VALUES
(7, 'bg.png', '2022-06-08 01:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_soal`
--

CREATE TABLE `daftar_soal` (
  `id_soal` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `type_soal` enum('Skala Likert','Teks Singkat') NOT NULL,
  `sangat_setuju` int(11) NOT NULL DEFAULT 5,
  `setuju` int(11) NOT NULL DEFAULT 4,
  `cukup` int(11) NOT NULL DEFAULT 3,
  `tidak_setuju` int(11) NOT NULL DEFAULT 2,
  `sangat_tidak_setuju` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_soal`
--

INSERT INTO `daftar_soal` (`id_soal`, `paket_id`, `soal`, `type_soal`, `sangat_setuju`, `setuju`, `cukup`, `tidak_setuju`, `sangat_tidak_setuju`) VALUES
(120, 31, 'Syncnau memudahkan', 'Skala Likert', 5, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` int(11) NOT NULL,
  `id_identitas` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `prodi` enum('TI','TKOM','AK','FARM','SPMI','TIK') NOT NULL,
  `sebagai` enum('Super Admin','Pengevaluasi','Dosen','Mahasiswa') NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `id_paket_jawaban` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `klasifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `id_identitas`, `nama_lengkap`, `prodi`, `sebagai`, `gender`, `id_paket_jawaban`, `jawaban`, `klasifikasi`) VALUES
(43, '220603173621', 'Moh. Fiqih Erinsyah', 'TI', 'Super Admin', 'L', 31, 'Syncnau memuaskan, memudahkan untuk belajar', '[\'Baik\']'),
(44, '230331004608', 'Bidang SPMI', '', 'Pengevaluasi', 'L', 31, 'Bagus bangetttt', '[\'Baik\']');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` int(11) NOT NULL,
  `id_identitas` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `prodi` enum('TI','TKOM','AK','FARM','SPMI','TIK') NOT NULL,
  `sebagai` enum('Super Admin','Pengevaluasi','Dosen','Mahasiswa') NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `id_paket_jawaban` int(11) NOT NULL,
  `id_soal_kuesioner` int(11) NOT NULL,
  `type_soal` enum('Skala Likert','Teks Singkat') NOT NULL,
  `jawaban` text NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `id_identitas`, `nama_lengkap`, `prodi`, `sebagai`, `gender`, `id_paket_jawaban`, `id_soal_kuesioner`, `type_soal`, `jawaban`, `datecreated`) VALUES
(114, '220603173621', 'Moh. Fiqih Erinsyah', 'TI', 'Super Admin', 'L', 31, 120, 'Skala Likert', '3', '2023-03-30 22:35:54'),
(115, '230331004608', 'Bidang SPMI', '', 'Pengevaluasi', 'L', 31, 120, 'Skala Likert', '1', '2023-03-30 22:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `manajerial`
--

CREATE TABLE `manajerial` (
  `id_m` int(11) NOT NULL,
  `nama_apl` enum('Oase','Syncnau') NOT NULL,
  `versi_apl` varchar(256) NOT NULL,
  `tgl_publish` varchar(200) NOT NULL,
  `penyedia_apl` enum('TIK','Vendor') NOT NULL,
  `link_berkas` text NOT NULL,
  `judul` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manajerial`
--

INSERT INTO `manajerial` (`id_m`, `nama_apl`, `versi_apl`, `tgl_publish`, `penyedia_apl`, `link_berkas`, `judul`) VALUES
(50, 'Oase', '1', '03/05/2023', 'TIK', '', 'Simolang_V_1_0_Video_2_2.mp4'),
(53, 'Syncnau', '1.2', '10/09/2023', 'TIK', 'https://www.youtube.com/', 'garskin_moh_fiqih_erinsyah_lenovo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paket_soal`
--

CREATE TABLE `paket_soal` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(256) NOT NULL,
  `aplikasi` enum('Syncnau','Oase') NOT NULL,
  `versi_apl_paket` varchar(256) NOT NULL,
  `tgl_kuesioner` varchar(50) NOT NULL,
  `responden` varchar(50) NOT NULL,
  `jumlah_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_soal`
--

INSERT INTO `paket_soal` (`id_paket`, `nama_paket`, `aplikasi`, `versi_apl_paket`, `tgl_kuesioner`, `responden`, `jumlah_soal`) VALUES
(31, 'Sync', 'Syncnau', '2', '1', 'Mahasiswa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `user_nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8_unicode_ci NOT NULL,
  `user_namalengkap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_foto` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` enum('Super Admin','Pengevaluasi','Dosen','Mahasiswa') COLLATE utf8_unicode_ci NOT NULL,
  `user_prodi` enum('TI','TKOM','AK','FARM','TIK','SPMI') COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `user_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_edited` datetime DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_password`, `user_namalengkap`, `user_foto`, `user_level`, `user_prodi`, `user_gender`, `user_created`, `user_edited`, `user_status`) VALUES
('220603173621', 'Sp.fiqih', '$2y$10$4RtMQOx1OyH4x73rVX4agOZHLjgGGnT8.Mm850lQK9X10KYgEgyOS', 'Moh. Fiqih Erinsyah', 'ff98dbb841d7b1c437557afce13104d4.jpg', 'Super Admin', 'TIK', 'L', '2022-06-03 22:36:21', NULL, '1'),
('230318024647', 'Ds.dosen', '$2y$10$3gTHIipHwMsHdGYBJdpbu./oCJAQAIME5ytPAMmIMdFqygwu7Hp3C', 'Dosen', '', 'Dosen', 'TI', 'L', '2023-03-18 08:46:47', NULL, '1'),
('230319073905', 'Mhs.22092002', '$2y$10$kT7xblMCJ20cr91YZyvYC.SA6T02XprdjJeLlwLrTPA0za8C1oMY2', 'Moh. Fiqih Erinsyah', '', 'Mahasiswa', 'TKOM', 'L', '2023-03-19 13:39:05', NULL, '1'),
('230331004608', 'Spmi.fiqih', '$2y$10$dtNH6BTYt1zlzHSkbP7eAeo7j9hsM9vTFutaNAoLZG/sOzn2y/4WC', 'Bidang SPMI', '', 'Pengevaluasi', 'SPMI', 'L', '2023-03-31 05:46:08', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_soal`
--
ALTER TABLE `daftar_soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD UNIQUE KEY `soal` (`soal`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket` (`id_paket_jawaban`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket` (`id_paket_jawaban`),
  ADD KEY `soal` (`id_soal_kuesioner`);

--
-- Indexes for table `manajerial`
--
ALTER TABLE `manajerial`
  ADD PRIMARY KEY (`id_m`);

--
-- Indexes for table `paket_soal`
--
ALTER TABLE `paket_soal`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_nama` (`user_nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daftar_soal`
--
ALTER TABLE `daftar_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `manajerial`
--
ALTER TABLE `manajerial`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `paket_soal`
--
ALTER TABLE `paket_soal`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD CONSTRAINT `id_paket` FOREIGN KEY (`id_paket_jawaban`) REFERENCES `paket_soal` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD CONSTRAINT `paket` FOREIGN KEY (`id_paket_jawaban`) REFERENCES `paket_soal` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soal` FOREIGN KEY (`id_soal_kuesioner`) REFERENCES `daftar_soal` (`id_soal`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
