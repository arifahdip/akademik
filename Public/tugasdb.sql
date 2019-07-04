-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 10. Januari 2019 jam 05:16
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugasdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `example`
--

CREATE TABLE IF NOT EXISTS `example` (
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `type`) VALUES
(1, '', 'admin', '123', 'admin'),
(2, 'Adisty Herstyaning Putri', '33417033', '12345', 'siswa'),
(5, 'Arini Astiyani', '33416001', '12345', 'siswa'),
(6, 'Andi Hermawan', '33418006', '12345', 'siswa'),
(10, 'Arifah Dian Pertiwi', '33417010', '12345', 'siswa'),
(11, 'Andre Herwanto', '33417028', '12345', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` text NOT NULL,
  `nim` text NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `tempatlahir` text NOT NULL,
  `tanggallahir` text NOT NULL,
  `jenkel` text NOT NULL,
  `agama` text NOT NULL,
  `jurusan` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `foto`, `nim`, `nama`, `kelas`, `tempatlahir`, `tanggallahir`, `jenkel`, `agama`, `jurusan`, `alamat`, `telepon`) VALUES
(2, '67IMG-20180404-WA0008.jpg', '33417033', 'Adisty Herstyaning Putri', '2', 'Pemalang', '19-04-1999', 'Perempuan', 'Islam', 'Teknik Informatika', 'Pemalang', '08887765432'),
(5, '30IMG-20180404-WA0008.jpg', '33416001', 'Arini Astiyani', '3', 'Magelang', '09-04-1998', 'Perempuan', '', 'Teknik Informatika', 'Magelang', '089776554321'),
(6, '33418006IMG-20180404-WA0008.jpg', '33418006', 'Andi Hermawan', '1', 'Semarang', '07-08-2000', 'Laki - Laki', 'Islam', 'Teknik Informatika', 'Semarang', '089765443246'),
(10, '33417010IMG-20180404-WA0008.jpg', '33417010', 'Arifah Dian Pertiwi', '2', 'Cilacap', '01-03-2000', 'Perempuan', 'Islam', 'Teknik Informatika', 'Cilacap', '0887664324'),
(11, '41IMG-20180404-WA0008.jpg', '33417028', 'Andre Herwanto', '5', 'Palembang', '10-10-1999', 'Laki - Laki', 'Islam', 'Teknik Informatika', 'Jakarta', '0897765643');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaimhs`
--

CREATE TABLE IF NOT EXISTS `nilaimhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` text NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `mtk` int(11) NOT NULL,
  `bindo` int(11) NOT NULL,
  `binggris` int(11) NOT NULL,
  `pemrograman` int(11) NOT NULL,
  `jaringan` int(11) NOT NULL,
  `multimedia` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `rerata` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `nilaimhs`
--

INSERT INTO `nilaimhs` (`id`, `nim`, `nama`, `kelas`, `mtk`, `bindo`, `binggris`, `pemrograman`, `jaringan`, `multimedia`, `total`, `rerata`) VALUES
(2, '3.34.17.0.14', 'Adisty Herstyaning Putri', '2', 70, 80, 90, 80, 90, 90, 500, 83),
(5, '3.34.16.0.01', 'Arini Astiyani', '3', 85, 86, 87, 88, 90, 70, 506, 84),
(6, '3.34.18.06', 'Andi Hermawan', '1', 75, 80, 80, 90, 70, 83, 478, 80),
(10, '33417010', 'Arifah Dian Pertiwi', '2', 90, 80, 80, 80, 80, 70, 480, 80),
(11, '33417028', 'Andre Herwanto', '5', 80, 70, 70, 90, 90, 85, 485, 81);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
