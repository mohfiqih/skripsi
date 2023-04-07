-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 10:23 AM
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
  `sangat_setuju` int(11) NOT NULL DEFAULT 4,
  `setuju` int(11) NOT NULL DEFAULT 3,
  `tidak_setuju` int(11) NOT NULL DEFAULT 2,
  `sangat_tidak_setuju` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_soal`
--

INSERT INTO `daftar_soal` (`id_soal`, `paket_id`, `soal`, `type_soal`, `sangat_setuju`, `setuju`, `tidak_setuju`, `sangat_tidak_setuju`) VALUES
(145, 31, 'Bagus syncnau', 'Skala Likert', 4, 3, 2, 1),
(146, 31, 'Tampilan syncnau menarik', 'Skala Likert', 4, 3, 2, 1),
(147, 33, 'Oase baguss', 'Skala Likert', 4, 3, 2, 1),
(148, 31, 'Syncnau bagus', 'Skala Likert', 4, 3, 2, 1);

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
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `id_identitas`, `nama_lengkap`, `prodi`, `sebagai`, `gender`, `id_paket_jawaban`, `jawaban`, `label`) VALUES
(52, '220603173621', 'Moh. Fiqih Erinsyah', 'TIK', 'Super Admin', 'L', 31, 'Syncnau memuaskan bagus bangetttt', 'Baik'),
(53, '220603173621', 'Moh. Fiqih Erinsyah', 'TIK', 'Super Admin', 'L', 33, 'jelek syncnau membosankan', 'Kurang'),
(54, '230407050455', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 'Syncnau memudahkan pembelajaran', 'Baik'),
(55, '230407050455', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 'Bagusss', 'Baik'),
(56, '230407050455', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 'Bagusss bgtt', 'Baik');

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
(129, '220603173621', 'Moh. Fiqih Erinsyah', 'TIK', 'Super Admin', 'L', 31, 145, 'Skala Likert', '4', '2023-04-06 02:01:18'),
(130, '220603173621', 'Moh. Fiqih Erinsyah', 'TIK', 'Super Admin', 'L', 31, 146, 'Skala Likert', '4', '2023-04-06 02:01:18'),
(131, '220603173621', 'Moh. Fiqih Erinsyah', 'TIK', 'Super Admin', 'L', 33, 147, 'Skala Likert', '1', '2023-04-06 02:08:48'),
(136, '230407050455', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 145, 'Skala Likert', '4', '2023-04-07 06:42:16'),
(137, '230407050455', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 146, 'Skala Likert', '4', '2023-04-07 06:42:16'),
(138, '230407050455', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 145, 'Skala Likert', '4', '2023-04-07 06:49:10'),
(139, '230407050455', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 146, 'Skala Likert', '4', '2023-04-07 06:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `manajerial`
--

CREATE TABLE `manajerial` (
  `id_m` int(11) NOT NULL,
  `nama_apl` enum('Oase','Syncnau') NOT NULL,
  `versi_apl` varchar(256) NOT NULL,
  `tgl_publish` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `penyedia_apl` enum('TIK','Vendor') NOT NULL,
  `link_berkas` text NOT NULL,
  `judul` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manajerial`
--

INSERT INTO `manajerial` (`id_m`, `nama_apl`, `versi_apl`, `tgl_publish`, `penyedia_apl`, `link_berkas`, `judul`) VALUES
(56, 'Oase', '1', '2023-04-04 23:54:00', 'TIK', 'canva.com', '22092002_dns_21.pdf'),
(64, 'Syncnau', '1', '2023-04-06 08:01:00', 'TIK', 'aaaa', '1590-4131-1-SM1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `paket_soal`
--

CREATE TABLE `paket_soal` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(256) NOT NULL,
  `aplikasi` enum('Syncnau','Oase') NOT NULL,
  `versi_apl_paket` varchar(256) NOT NULL,
  `tgl_kuesioner` datetime NOT NULL,
  `responden` varchar(50) NOT NULL,
  `jumlah_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_soal`
--

INSERT INTO `paket_soal` (`id_paket`, `nama_paket`, `aplikasi`, `versi_apl_paket`, `tgl_kuesioner`, `responden`, `jumlah_soal`) VALUES
(31, 'Sync', 'Syncnau', '1', '2023-04-04 23:52:00', 'Mahasiswa', 1),
(33, 'Oase', 'Oase', '1', '2023-04-04 23:52:00', 'Dosen,Mahasiswa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8_unicode_ci NOT NULL,
  `user_namalengkap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_foto` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` enum('Super Admin','Pengevaluasi','Dosen','Mahasiswa','Sisfo','TIK') COLLATE utf8_unicode_ci NOT NULL,
  `user_prodi` enum('TI','ASP','TKOM','AK','FARM','PER','BID','MSN','DKV','PRWT','ELKTR','TIK','SPMI','ADM_TI','ADM_TKOM','ADM_AK') COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `user_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_edited` datetime DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `hash_key` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash_expiry` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username_id`, `user_password`, `user_namalengkap`, `user_foto`, `user_level`, `user_prodi`, `user_gender`, `user_created`, `user_edited`, `user_status`, `hash_key`, `hash_expiry`) VALUES
('230318024647', 'dosen@gmail.com', '14151617', '$2y$10$sDwUfZfVPkbGNl0Bcv4kye3/v9r.QCEIrTtnEKygCNa2Tq4OJzfSu', 'Dosen', '2aa88be5ccb5c84ac6b5ab1bbde81052.png', 'Dosen', 'TI', 'L', '2023-03-18 08:46:47', NULL, '1', NULL, NULL),
('230319073905', 'mahasiswa@gmail.com', '22092002', '$2y$10$g8pX940xQQRJFqM3R3BLUOTqPvuiTB5NuO/HKlm0ZDyP2Pzfox4iC', 'Moh. Fiqih Erinsyah', '', 'Mahasiswa', 'TKOM', 'L', '2023-03-19 13:39:05', NULL, '1', NULL, NULL),
('230331004608', 'spmi@gmail.com', '12345', '$2y$10$x2Swf1joaaYluaDfIL388eI.qvG3yoUtaZza6KNHR61f4JEJifBQ.', 'Bidang SPMI', 'fff30ea3a331e347448ff27b600d1e3a.png', 'Pengevaluasi', 'SPMI', 'L', '2023-03-31 05:46:08', NULL, '1', NULL, NULL),
('230407050455', 'mohfiqiherinsyah@gmail.com', '112233', '$2y$10$sPPDoZVwzvFD9MUQkEF4aO5FhBi6HbBLh23h2jP9MDgyQS.NZnBNG', 'Moh. Fiqih', 'c1a8e0083c87b227b7fad4f5cbd413d9.png', 'Super Admin', 'TIK', 'L', '2023-04-07 10:04:55', NULL, '1', NULL, NULL);

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
  ADD KEY `user_nama` (`email`);

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
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `manajerial`
--
ALTER TABLE `manajerial`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `paket_soal`
--
ALTER TABLE `paket_soal`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
