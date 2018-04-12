-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2018 pada 20.23
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absen`
--

CREATE TABLE `tbl_absen` (
  `nim` varchar(20) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `materi` varchar(20) NOT NULL,
  `kehadiran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_absen`
--

INSERT INTO `tbl_absen` (`nim`, `nama_lengkap`, `materi`, `kehadiran`) VALUES
('A64160073', 'Mabuchi Kou', 'Minat dan Bakat', 'Tidak hadir'),
('B64160003', 'Anindia Widia', 'Minat dan Bakat', 'Tidak Hadir'),
('G64160003', 'Aar Riana', 'Minat dan Bakat', 'Hadir'),
('G6416001', 'Cakka Nuraga', 'Minat dan Bakat', 'Tidak Hadir'),
('H34160075', 'Azahra', 'Perencanaan karir', 'Tidak Hadir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
