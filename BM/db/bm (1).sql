-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 09 Sep 2016 pada 05.36
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `mentor` varchar(15) NOT NULL,
  `menti` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, 'Taufan', 'Laki-Laki', '2016-09-29', 2012, 'S1 Sistem Informasi', 'FRI', '+62877818843', '1.JPG', '02cdc4a45225719cfa13b7fd4a688de0', 'Admin', 'tfi231097@gmail.com'),
(2, 'Fadhilah', 'Laki-Laki', '2016-09-29', 2012, 'S1 Sistem Informasi', 'FRI', '+62877818843', '1.JPG', '02cdc4a45225719cfa13b7fd4a688de0', 'Admin', 'tfi231097@gmail.com'),
(3, 'Taufan Fadhilah Iskandar', 'Laki-Laki', '2016-09-29', 2012, 'S1 Sistem Informasi', 'FRI', '+62877818843', '1.JPG', '02cdc4a45225719cfa13b7fd4a688de0', 'Admin', 'tfi231097@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
