-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2021 pada 05.42
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supplier`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pw_kriteria`
--

CREATE TABLE `pw_kriteria` (
  `id` int(2) NOT NULL,
  `pw1` varchar(5) NOT NULL,
  `pw2` varchar(5) NOT NULL,
  `pw3` varchar(5) NOT NULL,
  `pw4` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pw_kriteria`
--

INSERT INTO `pw_kriteria` (`id`, `pw1`, `pw2`, `pw3`, `pw4`) VALUES
(1, '0.37', '0.34', '0.19', '0.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_data` varchar(7) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_data`, `nama_alternatif`) VALUES
('alt-01', 'Cokro'),
('alt-02', 'Sumber Hidup'),
('alt-03', 'Baja Jaya'),
('alt-04', 'Sinar Industri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` varchar(7) NOT NULL,
  `kd_kriteria` int(7) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`) VALUES
('krt-001', 201, 'Harga'),
('krt-002', 202, 'Kualitas'),
('krt-003', 203, 'Lokasi'),
('krt-004', 204, 'Fleksibilitas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perb_alternatif`
--

CREATE TABLE `tb_perb_alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `nb_db` int(5) NOT NULL,
  `alternatif1` varchar(30) NOT NULL,
  `alternatif2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perb_alternatif`
--

INSERT INTO `tb_perb_alternatif` (`id_alternatif`, `nm_banding`, `nb_db`, `alternatif1`, `alternatif2`) VALUES
('A01 ', '1. Sama penting dengan', 1, 'Cokro', 'Cokro'),
('A02 ', '1. Sama penting dengan', 1, 'Sumber Hidup', 'Sumber Hidup'),
('A03 ', '1. Sama penting dengan', 1, 'Baja Jaya', 'Baja Jaya'),
('A04 ', '1. Sama penting dengan', 1, 'Sinar Industri', 'Sinar Industri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perb_kriteria`
--

CREATE TABLE `tb_perb_kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nilai_banding` int(5) NOT NULL,
  `kriteria1` varchar(30) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `kriteria2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perb_kriteria`
--

INSERT INTO `tb_perb_kriteria` (`id_kriteria`, `nilai_banding`, `kriteria1`, `nm_banding`, `kriteria2`) VALUES
('B01 ', 1, 'Harga', '1. Sama penting dengan', 'Harga'),
('B02 ', 1, 'Kualitas', '1. Sama penting dengan', 'Kualitas'),
('B03 ', 1, 'Lokasi', '1. Sama penting dengan', 'Lokasi'),
('B04 ', 1, 'Fleksibilitas', '1. Sama penting dengan', 'Fleksibilitas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pw_kriteria`
--
ALTER TABLE `pw_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_perb_alternatif`
--
ALTER TABLE `tb_perb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `tb_perb_kriteria`
--
ALTER TABLE `tb_perb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pw_kriteria`
--
ALTER TABLE `pw_kriteria`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
