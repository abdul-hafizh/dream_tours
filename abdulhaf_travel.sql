-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Jul 2020 pada 10.14
-- Versi server: 5.6.45
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdulhaf_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `id` int(11) NOT NULL,
  `nama_jamaah` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `telp_jamaah` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`id`, `nama_jamaah`, `gender`, `telp_jamaah`, `password`, `token`, `updated_at`, `created_at`) VALUES
(1, 'hafizh', 'L', '001322112123', '$2y$10$EH1Ejmhc25Z/.MawYVfCve5LGEGEntAXxhaJWLI3TNVB2YsmG1.3q', 'QsAB0FdZZvKso779Gra2624q0dU5scYVfmsIkP1LF2l40E7CklKJHmxVMTSJl5JsUmnVDV6HAXS9qUhu', '2020-07-04 02:41:42', '2020-07-03 08:40:57'),
(2, 'abdul', 'L', '001322112299', '$2y$10$gt3dIX6mypXry//FkDhG1uhnjxIgpcAgMcNjdK4R/o5TV/ZV2RiZq', NULL, '2020-07-03 09:00:34', '2020-07-03 09:00:34'),
(4, 'test1', 'P', '081322112299', '$2y$10$MViqmfDufwj8tgFNSHx54uqqJADciD0QOoKU7W1LXVEI6uy/nb26S', NULL, '2020-07-03 11:21:02', '2020-07-03 11:21:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
