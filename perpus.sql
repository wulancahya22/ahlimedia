-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2020 pada 10.50
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

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
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `keterangan`) VALUES
(1, 'admin'),
(2, 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_buku`
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
-- Dumping data untuk tabel `daftar_buku`
--

INSERT INTO `daftar_buku` (`id`, `nama_file`, `dokumen`, `judul_buku`, `kategori_buku`, `pengarang_buku`, `penerbit_buku`, `jumlah_halaman`) VALUES
(1, 'file_1591449933.jpg', 'biologi.pdf', 'BIOLOGI KELAS XI', 'IPA', 'tereliye', 'bintang masa', 130),
(6, 'sc_ips.jpg', 'publikasi.pdf', 'IPS SUPER COMPLETE', 'IPS', 'SUKIRYO KITO', 'GELAP TAPI TERANG', 1),
(7, 'unnamed.jpg', 'Pertemuan 7.pdf', 'MATEMATIKA IPA KELAS XII', 'IPA', 'MULSITO WARKITO', 'POKOK NERBITNO', 153),
(15, 'bahasa jepang.png', 'sjr.pdf', 'BAHASA JEPANG KELAS X', 'BAHASA', 'SITI MURIDA', 'LEBAR TAPI SEMPIT', 134),
(17, 'file_1592008450.jpg', 'file_1591469791.pdf', 'AGAMA ISLAM KELAS X', 'UMUM', 'WARSITO NUGROHO', 'NUR IMAN', 123),
(18, 'file_1592008651.jpg', 'file_1591469977.pdf', 'BIOLOGI IPA KELAS XII', 'IPA', 'NANDITO LEMINHO', 'WIUWIU', 145);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_user`
--

CREATE TABLE `daftar_user` (
  `user_id` int(10) NOT NULL,
  `Nama_lengkap` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_user`
--

INSERT INTO `daftar_user` (`user_id`, `Nama_lengkap`, `Username`, `Password`, `id_akses`) VALUES
(1, 'nizelia', 'seliak', '123', 1),
(6, 'nizelia', 'seliakuloo', '12345', 1),
(8, 'viqih zamzami', 'ih', '123', 2),
(9, 'as', 'as', 'as', 1),
(10, 'as', 'a', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `id_kategori`, `kategori`) VALUES
(1, '1', 'IPA'),
(2, '2', 'IPS'),
(3, '3', 'BAHASA INDONESIA'),
(4, '4', 'LAINNYA'),
(5, '5', 'Romance'),
(7, '6', 'UMUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `kategori_buku` varchar(50) NOT NULL,
  `pengarang_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `judul_buku`, `kategori_buku`, `pengarang_buku`, `penerbit_buku`) VALUES
(7, 'MATEMATIKA IPA KELAS XII', 'IPA', 'MULSITO WARKITO', 'POKOK NERBITNO'),
(16, 'RIA', 'IPS', 'RIA', 'RIA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_akses` (`id_akses`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `daftar_user`
--
ALTER TABLE `daftar_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD CONSTRAINT `daftar_user_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `akses` (`id_akses`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
