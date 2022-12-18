-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2022 pada 16.33
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel-uhuy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `nama_pemesan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `no_identitas` decimal(50,0) NOT NULL,
  `tipe_kamar` varchar(30) NOT NULL,
  `lama_menginap` int(15) NOT NULL,
  `discount` decimal(20,0) NOT NULL,
  `total_bayar` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`nama_pemesan`, `jenis_kelamin`, `no_identitas`, `tipe_kamar`, `lama_menginap`, `discount`, `total_bayar`) VALUES
('Andri Santosa', 'Laki-laki', '3275091210770004', 'Standar', 3, '10', '1590000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
