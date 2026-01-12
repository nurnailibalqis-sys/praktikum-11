-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2026 pada 17.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum11`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_besi`
--

CREATE TABLE `produk_besi` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `target_penggunaan` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk_besi`
--

INSERT INTO `produk_besi` (`id`, `nama_produk`, `kategori`, `target_penggunaan`, `harga`, `stok`) VALUES
(1, 'Pedok Besi Standar', 'Pedok', 'Bengkel & Gudang', 750000, 10),
(2, 'Pedok Custom', 'Pedok', 'Industri', 1200000, 5),
(3, 'Kursi Besi Sekolah', 'Kursi', 'Sekolah', 350000, 40),
(4, 'Kursi Besi Hotel', 'Kursi', 'Hotel', 650000, 25),
(5, 'Meja Besi Kantor', 'Meja', 'Perkantoran', 900000, 15),
(6, 'Meja Besi Sekolah', 'Meja', 'Sekolah', 700000, 20),
(7, 'Rak Besi Arsip', 'Rak', 'Kantor', 800000, 12),
(8, 'Kanopi Besi', 'Kanopi', 'Rumah & Toko', 2500000, 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk_besi`
--
ALTER TABLE `produk_besi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk_besi`
--
ALTER TABLE `produk_besi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
