-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 01:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jlprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `jabatan`) VALUES
(1, 'admin', '123', 'Jody', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(12) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`, `deskripsi`) VALUES
(1, 'Staff Percetakan', 'Mencetak pesanan klien'),
(2, 'Staff Logistik', 'Mengirim hasil percetakan kepada klien'),
(3, 'Staff Gudang', 'Mengecek stok barang di gudang percetakan'),
(4, 'Manajer', 'Mengurus semua hal yang berkaitan dengan manajemen percetakan.');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `namasekolah` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
