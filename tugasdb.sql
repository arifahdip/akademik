-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2019 at 01:14 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8437727_tugasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `type`) VALUES
(1, '', 'admin', '123', 'admin'),
(5, 'Latansa Nury Izza Afida', '33417016', '12345', 'siswa'),
(6, 'Angga Bayu Pratama', '33417008', '12345', 'siswa'),
(10, 'Arifah Dian Pertiwi', '33417010', 'aaa', 'siswa'),
(11, 'Adika Ganesha', '33417001', '12345', 'siswa'),
(13, 'Rahma', '3341700', '12345', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
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
  `telepon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `foto`, `nim`, `nama`, `kelas`, `tempatlahir`, `tanggallahir`, `jenkel`, `agama`, `jurusan`, `alamat`, `telepon`) VALUES
(5, '7310809620_1564035713813029_220099557_n.jpg', '33417016', 'Latansa Nury Izza Afida', '1', 'Magelang', '09-04-1998', 'Perempuan', 'Islam', 'Teknik Informatika', 'Magelang', '089776554321'),
(6, '69zzzzzzzzzz.png', '33417008', 'Angga Bayu Pratama', '1', 'Semarang', '07-08-2000', 'Laki - Laki', 'Islam', 'Teknik Informatika', 'Semarang', '089765443246'),
(10, '1110723694_352653994913368_1976983105_n.jpg', '33417010', 'Arifah Dian Pertiwi', '2', 'Cilacap', '01-03-2000', 'Perempuan', 'Islam', 'Teknik Informatika', 'Cilacap', '0887664324'),
(11, '473.jpg', '33417001', 'Adika Ganesha', '5', 'Palembang', '10-10-1999', 'Laki - Laki', 'Islam', 'Teknik Informatika', 'Jakarta', '0897765643'),
(13, '453 (2).jpg', '3341700', 'Rahma', '2', 'Pemalang', '04-01-1999', 'Perempuan', 'Islam', 'TE', 'Semarang', '09887');

-- --------------------------------------------------------

--
-- Table structure for table `nilaimhs`
--

CREATE TABLE `nilaimhs` (
  `id` int(11) NOT NULL,
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
  `rerata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilaimhs`
--

INSERT INTO `nilaimhs` (`id`, `nim`, `nama`, `kelas`, `mtk`, `bindo`, `binggris`, `pemrograman`, `jaringan`, `multimedia`, `total`, `rerata`) VALUES
(5, '33417016', 'Latansa Nury Izza Afida', '1', 85, 86, 87, 88, 90, 70, 506, 84),
(6, '33417008', 'Angga Bayu Pratama', '1', 75, 80, 80, 90, 70, 83, 478, 80),
(10, '33417010', 'Arifah Dian Pertiwi', '2', 90, 90, 80, 90, 85, 80, 515, 86),
(11, '33417001', 'Adika Ganesha', '5', 80, 70, 70, 90, 90, 85, 485, 81),
(13, '3341700', 'Rahma', '2', 100, 90, 80, 90, 80, 75, 515, 86);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `nilaimhs`
--
ALTER TABLE `nilaimhs`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nilaimhs`
--
ALTER TABLE `nilaimhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
