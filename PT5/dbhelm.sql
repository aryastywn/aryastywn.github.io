-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2023 pada 17.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhelm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbhelm`
--

CREATE TABLE `tbhelm` (
  `id_pesanan` int(5) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat_pemesan` text NOT NULL,
  `nama_helm` varchar(20) NOT NULL,
  `ukuran_helm` varchar(20) NOT NULL,
  `jumlah_helm` int(2) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `metode_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbhelm`
--

INSERT INTO `tbhelm` (`id_pesanan`, `nama_pemesan`, `no_hp`, `alamat_pemesan`, `nama_helm`, `ukuran_helm`, `jumlah_helm`, `tanggal_pemesanan`, `metode_pembayaran`) VALUES
(1, 'jamal', '083153586529', 'Jl. Suryanata Bukit Pinang Blok L No.15', 'KYT', 'XL', 3, '2023-10-19', 'Paylater');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbhelm`
--
ALTER TABLE `tbhelm`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbhelm`
--
ALTER TABLE `tbhelm`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
