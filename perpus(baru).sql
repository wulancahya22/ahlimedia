-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2020 pada 23.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

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
  `id_akses` varchar(4) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `keterangan`) VALUES
('1', 'admin'),
('2', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_file` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1:IPA, 2:IPS, 3:BAHASA, 4:BUKU UJIAN, 5:LAINNYA',
  `pengarang_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_halaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daftar_buku`
--

INSERT INTO `daftar_buku` (`id`, `nama_file`, `dokumen`, `judul_buku`, `kategori_buku`, `pengarang_buku`, `penerbit_buku`, `jumlah_halaman`) VALUES
(6, 'file_1591272639.jpg', '', 'Ayo', 'IPS', 'SI', 'SI', 1),
(13, 'file_1591290105.png', '', '78', 'iPA', 'IY', 'Y', 3),
(20, 'file_1591469121.png', '', 'q', 'q', 'q', 'q', 0),
(33, 'file_1591472738.jpg', 'file_1591472738.jpg', 'y', 'y', 'y', 'y', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_user`
--

CREATE TABLE `daftar_user` (
  `user_id` int(10) NOT NULL,
  `id_akses` varchar(4) NOT NULL COMMENT '1:admin, 2:siswa',
  `Nama_lengkap` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_user`
--

INSERT INTO `daftar_user` (`user_id`, `id_akses`, `Nama_lengkap`, `Username`, `Password`) VALUES
(1, '1', 'nizelia', 'seliak', '123'),
(6, '1', 'nizelia', 'seliakuloo', '12345'),
(8, '2', 'viqih zamzami', 'ih', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'IPA'),
(2, 'IPS'),
(3, 'BAHASA INDONESIA'),
(4, 'LAINNYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_01_01_035648_create_buku_table', 1);

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
(6, 'Ayo', 'IPS', 'SI', 'SI'),
(13, '78', 'iPA', 'IY', 'Y'),
(33, 'y', 'y', 'y', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `nomor_kartu` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari_tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampai_tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pengembalian` int(11) NOT NULL,
  `id` int(9) NOT NULL,
  `kode_buku` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`nomor_kartu`, `dari_tanggal`, `sampai_tanggal`, `status_pengembalian`, `id`, `kode_buku`) VALUES
('test22', '05-01-2018', '15-01-2018', 1, 1, 'test1'),
('dfsdf', '05-01-2018', '19-01-2018', 1, 2, '324'),
('12', '06-01-2018', '18-01-2018', 1, 3, '12'),
('sadsa', '07-01-2018', '16-01-2018', 0, 4, 'sadsad');

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
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `daftar_user`
--
ALTER TABLE `daftar_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD CONSTRAINT `daftar_user_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `akses` (`id_akses`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
