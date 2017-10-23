-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Okt 2017 pada 16.23
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `userig`
--

CREATE TABLE `userig` (
  `full_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `userig`
--

INSERT INTO `userig` (`full_name`, `username`, `email`, `no_telp`, `pass`) VALUES
('wahyu', 'wahyuakmal78', 'wahyuakmal78@gmail.com', '081321123456', ''),
('wahyu', 'wahyuakmal78', 'wahyuakmal78@gmail.com', '081321123456', ''),
('wahyu', 'wahyuakmal78', 'wahyuakmal78@gmail.com', '081321123456', '123445'),
('user satu', 'user34', 'wahyuakmal78@gmail.com', '081321123456', '422341');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
