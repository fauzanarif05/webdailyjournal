-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2025 at 09:22 PM
-- Server version: 8.0.40-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'UDINUS H6', 'Tempat yang sangat nyaman untuk mengerjakan tugas.', 'UDINUS_H6.jpg', '2024-12-07 22:29:49', 'admin'),
(2, 'Perpustakaan UDINUS', 'Saya sering ke tempat ini untuk bekerja kelompok dan sekedar melepas penat.', 'perpus.jpg', '2024-12-07 22:29:49', 'admin'),
(3, 'Burjo Evan 1', 'Tempat yang biasanya saya dan teman-teman saya makan siang bersama sambil bersenda gurau.', 'burjo.jpg', '2024-12-07 22:29:49', 'admin'),
(11, 'tes', 'tes', '20250105201126.png', '2025-01-05 20:11:26', 'admin'),
(12, 'Ruang Kelas', 'Kelas nyaman untuk belajar sehari hari', '20250107213309.png', '2025-01-07 21:33:09', 'alucard'),
(13, 'Rektor udinus', 'Rektor Universitas Dian Nuswantoro (Udinus) Prof. Dr. Ir Edi Noersasongko, M.Kom memberikan wejangan kepada atlet peraih medali SEA Games 2023. ', '20250107213459.png', '2025-01-07 21:34:59', 'alucard'),
(14, 'UDINUS', 'Universitas Dian Nuswantoro adalah universitas swasta yang didirikan oleh Yayasan Dian Nuswantoro Semarang. ', '20250107213609.png', '2025-01-07 21:36:09', 'alucard');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `tanggal`, `username`) VALUES
(1, 'gambar1.jpg', '2025-01-05 20:32:58', 'admin'),
(2, 'gambar2.jpg', '2025-01-05 20:32:58', 'admin'),
(3, 'gambar3.jpg', '2025-01-05 20:32:58', 'admin'),
(4, '20250107203919.jpg', '2025-01-07 20:39:19', 'admin'),
(5, '20250105231835.jpg', '2025-01-05 23:18:35', 'admin'),
(6, '20250105231852.jpg', '2025-01-05 23:18:52', 'admin'),
(8, '20250105232017.jpg', '2025-01-05 23:20:17', 'admin'),
(10, '20250105235439.jpg', '2025-01-05 23:54:39', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'fotoku.jpg'),
(14, 'danny', '21232f297a57a5a743894a0e4a801fc3', ''),
(15, 'ilham', '57cf5ad49695e3adc1a29cf47a43bc06', '20250107212204.png'),
(16, 'kurniadi', 'cb07389eba9746fcd4c606874d37a643', '20250107212236.png'),
(17, 'kurniawan', '36721a040fd53a7d36b4757a3b30f11e', '20250107212342.png'),
(18, 'sumbul', '2ef3fdfc5353db569f5fcfc2bde5b835', ''),
(19, 'karen', '5a4629189a54ce51bd2018227e923bbc', '20250107212553.png'),
(20, 'alucard', 'a99d8f694fcea34ea91e1dd608d5292a', '20250107212842.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
