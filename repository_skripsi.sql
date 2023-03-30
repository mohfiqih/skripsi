-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 04:06 PM
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
  `prodi` enum('TI','TKOM','AK','FARM') NOT NULL,
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
(41, '230319073905', 'Moh. Fiqih Erinsyah', 'TKOM', 'Mahasiswa', 'L', 31, 'Bagus bangett syncnauu memudahkan user dalam proses belajar', '[\'Baik\']'),
(42, '230319073905', 'Moh. Fiqih Erinsyah', 'TKOM', 'Mahasiswa', 'L', 31, 'syncnau baguss banget', '[\'Baik\']');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` int(11) NOT NULL,
  `id_identitas` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `prodi` enum('TI','TKOM','AK','FARM') NOT NULL,
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
(111, '230319073905', 'Moh. Fiqih Erinsyah', 'TKOM', 'Mahasiswa', 'L', 31, 120, 'Skala Likert', '2', '2023-03-30 14:01:35'),
(112, '230319073905', 'Moh. Fiqih Erinsyah', 'TKOM', 'Mahasiswa', 'L', 31, 120, 'Skala Likert', '5', '2023-03-30 14:04:40');

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
  `user_prodi` enum('TI','TKOM','AK','FARM') COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `user_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_edited` datetime DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_password`, `user_namalengkap`, `user_foto`, `user_level`, `user_prodi`, `user_gender`, `user_created`, `user_edited`, `user_status`) VALUES
('220603173621', 'Sp.fiqih', '$2y$10$V7.HNasteYxkDiQfBVVj2OD3oNDoy05XXiX2RkKLWQXYgiIukJ4Cm', 'Moh. Fiqih Erinsyah', 'ff98dbb841d7b1c437557afce13104d4.jpg', 'Super Admin', 'TI', 'L', '2022-06-03 22:36:21', NULL, '1'),
('230318023841', 'Ev.12.02', '$2y$10$Xs2Sn2OKNUosprM5Q2lpu.ankNoDayJxDXHC8kM.IJqefBU7rMQ/.', 'Evaluator', '', 'Pengevaluasi', 'TKOM', 'L', '2023-03-18 08:38:41', NULL, '1'),
('230318024647', 'Ds.12.09.123', '$2y$10$yb/0UFTF7.OIvoqCYxbc/.P.HWvvoDqT9J4RFrH9pof7nrDCirwiO', 'Dosen', '', 'Dosen', 'TI', 'L', '2023-03-18 08:46:47', NULL, '1'),
('230318024811', 'Sp.123.45', '$2y$10$mR2eUzh10QeFglE8PndW/eraMc4lh66CJNFm/o.cYTEQunVuu4FnO', 'super', '', 'Super Admin', 'TKOM', 'L', '2023-03-18 08:48:11', NULL, '1'),
('230319073905', 'Mhs.22092002', '$2y$10$kT7xblMCJ20cr91YZyvYC.SA6T02XprdjJeLlwLrTPA0za8C1oMY2', 'Moh. Fiqih Erinsyah', '', 'Mahasiswa', 'TKOM', 'L', '2023-03-19 13:39:05', NULL, '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

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
