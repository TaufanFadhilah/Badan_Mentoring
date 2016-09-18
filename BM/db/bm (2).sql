-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 18 Sep 2016 pada 18.57
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `bm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelompok`
--

CREATE TABLE IF NOT EXISTS `tbl_kelompok` (
  `nama` varchar(100) NOT NULL,
  `mentor` varchar(15) NOT NULL,
  `menti` varchar(100) NOT NULL,
  PRIMARY KEY (`mentor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelompok`
--

INSERT INTO `tbl_kelompok` (`nama`, `mentor`, `menti`) VALUES
('Kelompok 1', '2', '{"anggota_1":"1","anggota_2":"2","anggota_3":"3"}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `nim` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `fakultas` varchar(3) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`nim`, `nama`, `jk`, `tgl_lahir`, `tahun_masuk`, `prodi`, `fakultas`, `hp`, `foto`, `password`, `status`, `email`) VALUES
(1, 'Taufan', 'Laki-Laki', '2016-09-29', 2012, 'S1 Sistem Informasi', 'FRI', '+6287781884', '1.jpg', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'tfi231097@gmail.com'),
(2, 'Fadhilah', 'Laki-Laki', '2016-09-29', 2012, 'S1 Sistem Informasi', 'FRI', '+62877818843', '2.JPG', '5f4dcc3b5aa765d61d8327deb882cf99', 'Mentor', 'tfi231097@gmail.com'),
(3, 'Iskandar', 'Laki-Laki', '2016-09-29', 2012, 'S1 Sistem Informasi', 'FRI', '+62877818843', '1.JPG', '5f4dcc3b5aa765d61d8327deb882cf99', 'Menti', 'tfi231097@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
