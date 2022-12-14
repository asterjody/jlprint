-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 11:30 PM
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
-- Database: `grafindo`
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
(1, 'admin', '123', 'Lievaldo', 'Direktur');

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

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'Kotak Tissue', 'adminjs@gmail.com', 'aaaaaaaaaaa', 'aaaaaaaaaa'),
(2, 'Kotak Tissue', 'jody@gmail.com', 'aaa', 'aaaaaaaaa'),
(3, 'Kotak Tissue', 'jody@gmail.com', 'aaa', 'aaaaaaaaa'),
(4, 'Kotak Tissue', 'jody@gmail.com', 'aaa', 'aaaaaaaaa'),
(5, 'Kotak Tissue', 'jody@gmail.com', 'aaa', 'aaaaaaaaa'),
(6, 'Jody', 'adminjs@gmail.com', 'aaaaaaaaaa', 'aaaaaaaaaaa');

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

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jabatan`, `tanggalmasuk`, `tempat`, `tanggal`, `jk`, `alamat`, `agama`, `status`, `nohp`, `email`) VALUES
(1, 'Lievaldo', 'Staff Logistik', '2017-08-08', 'Jakartaa', '2022-12-13', 'Laki-Laki', 'Tangerang', 'Katolik', 'Menikah', '1111', 'as@gmail.com'),
(2, 'Aldo Graff', 'Staff Keuangan', '2022-12-22', 'Bali', '2022-12-21', 'Laki-Laki', 'Jakarta Barat', 'Hindu', 'Belum Menikah', '11111121', 'as@gmail.com'),
(3, 'Lama', 'Manager', '2015-07-15', 'Tangerang', '2022-12-09', 'Laki-Laki', 'eeeeeee', 'Islam', 'Belum Menikah', '1111112', 'as@gmail.com');

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
(1, 'Staff Percetakan', 'Mengurus Percetakan'),
(2, 'Manager Percetakan', 'Mengurus Percetakan'),
(5, 'Mekanik Printer', 'Mengerjakaan Print'),
(6, 'Asisten Pribadi', 'Mengerjakaan Printer'),
(7, 'Sales & Marketing', 'Menjual Jasa'),
(8, 'Akuntan', 'Menghitung Transaksi');

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
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id`, `nama`, `tempat`, `tanggal`, `jk`, `alamat`, `agama`, `status`, `nohp`, `email`, `pendidikan`, `namasekolah`, `pekerjaan`, `cv`) VALUES
(1, 'Liva', 'New York', '2000-07-04', 'Laki-Laki', 'Jakarta Barat', 'Katolik', 'Menikah', '08120909', 'liv@gmail.com', '2', 'SMPN 198', 'Manager Percetakan', 'Nilai.pdf'),
(2, 'Jody', 'Bali', '2022-12-07', 'Laki-Laki', 'Tangerang', 'Buddha', 'Belum Menikah', '11111121', 'asterjody@gmail.com', '4', 'Universitas Indonesia', 'Kasir Percetakan', 'MESG0021530 (1).pdf'),
(3, 'Akrilik 10m x 10m', 'Batam', '2022-12-30', 'Perempuan', 'eeeeeeea', 'Buddha', 'Belum Menikah', '11111121', 'vale@gmail.com', '1', 'SDN 109', 'Staff Percetakan', 'MESG0021530 (1).pdf'),
(4, 'Kotak Tissue', 'Jakartaa', '2022-12-15', 'Laki-Laki', 'Tangerang', 'Kristen', 'Belum Menikah', '111111', 'vale@gmail.com', '3', 'SMA 70', 'Manager Percetakan', 'MESG0021530 (1).pdf'),
(5, 'Jody', 'Bali', '2022-12-14', 'Laki-Laki', 'Tangerang', 'Katolik', 'Belum Menikah', '1111', 'sandyrubiks@ymail.com', '1', 'Universitas Multimedia Nusantara', 'Asisten Pribadi', 'MESG0021530 (1).pdf'),
(6, 'SD', 'SD', '2022-12-28', 'Perempuan', 'SD', 'Hindu', 'Belum Menikah', '11111121', 'sandyrubiks@ymail.com', '1', 'SDK 109', 'Staff Percetakan', 'MESG0021530 (1).pdf'),
(7, 'Lievaldo', 'California', '2022-12-23', 'Laki-Laki', 'Allo', 'Kristen', 'Belum Menikah', '111111', 'adminjs@gmail.com', '3', 'SMAN 70', 'Mekanik', 'NEWS0003510.pdf');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
