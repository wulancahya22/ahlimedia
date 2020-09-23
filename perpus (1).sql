-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 06:02 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `keterangan`) VALUES
(1, 'admin'),
(2, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_file` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_buku` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1:IPA, 2:IPS, 3:BAHASA, 4:BUKU UJIAN, 5:LAINNYA',
  `pengarang_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_halaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_buku`
--

INSERT INTO `daftar_buku` (`id`, `nama_file`, `dokumen`, `judul_buku`, `kategori_buku`, `pengarang_buku`, `penerbit_buku`, `jumlah_halaman`) VALUES
(1, 'file_1591449933.png', 'file_1591449933.png', 'tereliye', 'IPA', 'tereliye', 'bintang masa', 130),
(6, 'CRUD.png', '', 'Ayo', 'IPS', 'SI', 'SI', 1),
(7, 'file_1591288705.png', '', 'j', 'j', 'j', 'j', 7),
(8, 'file_1591288782.png', '', 'j', 'j', 'j', 'j', 7),
(9, 'file_1591289035.png', '', 'j', 'j', 'j', 'j', 1),
(10, 'file_1591289185.png', '', 'h', 'h', 'h', 'h', 2),
(11, 'file_1591289375.png', '', 'j', 'j', 'k', 'jj', 2),
(12, 'file_1591289644.png', '', 'h', 'h', 'h', 'h', 3),
(13, 'file_1591290105.png', '', '78', 'iPA', 'IY', 'Y', 3),
(14, 'file_1591449794.png', '', 'h', 'j', 'h', 'h', 1),
(15, 'file_1591450350.png', '', 'AKu', 'AKu', 'AKu', 'AKu', 1),
(16, 'file_1591761337.png', '', 'RIA', 'IPS', 'RIA', 'RIA', 12);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_user`
--

CREATE TABLE `daftar_user` (
  `user_id` int(10) NOT NULL,
  `Nama_lengkap` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_user`
--

INSERT INTO `daftar_user` (`user_id`, `Nama_lengkap`, `Username`, `Password`, `id_akses`) VALUES
(1, 'nizelia', 'seliak', '123', 1),
(6, 'nizelia', 'seliakuloo', '12345', 1),
(8, 'viqih zamzami', 'ih', '123', 2),
(9, 'as', 'as', 'as', 1),
(10, 'as', 'a', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `id_kategori`, `kategori`) VALUES
(1, '1', 'IPA'),
(2, '2', 'IPS'),
(3, '3', 'BAHASA INDONESIA'),
(4, '4', 'LAINNYA'),
(5, '5', 'Romance'),
(7, '6', 'cuk');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `kategori_buku` varchar(50) NOT NULL,
  `pengarang_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `judul_buku`, `kategori_buku`, `pengarang_buku`, `penerbit_buku`) VALUES
(7, 'j', 'j', 'j', 'j'),
(16, 'RIA', 'IPS', 'RIA', 'RIA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_akses` (`id_akses`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `daftar_user`
--
ALTER TABLE `daftar_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
