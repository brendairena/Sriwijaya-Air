-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 05:06 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sj`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `title`, `first_name`, `last_name`, `address`, `phone`, `email`) VALUES
(2, 'MR', 'Rere Gilang', 'Nuri Auladi', 'Cikoneng', '082290360127', 'rere@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(100) NOT NULL,
  `nama_hotel` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jenis_kamar` varchar(100) DEFAULT 'Suite Room'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `harga`, `lokasi`, `jenis_kamar`) VALUES
(2, 'The Luxury Hotel', '1.875.500', 'Buah Batu, Bandung', 'Premier Room'),
(3, 'HEHE', 'HEHE', 'HEHE', 'Suite Room'),
(4, 'HAHA', '1000000', 'BANDUNG', 'Suite Room');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_flight`
--

CREATE TABLE `pemesanan_flight` (
  `id_pemesanan_flight` int(100) NOT NULL,
  `id_akun` int(100) NOT NULL,
  `id_penerbangan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_hotel`
--

CREATE TABLE `pemesanan_hotel` (
  `id_pemesanan_hotel` int(100) NOT NULL,
  `id_akun` int(100) NOT NULL,
  `id_hotel` int(100) NOT NULL,
  `cek in` varchar(100) NOT NULL,
  `cek out` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id_penerbangan` int(100) NOT NULL,
  `no_penerbangan` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `STA` varchar(100) NOT NULL,
  `STD` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id_penerbangan`, `no_penerbangan`, `asal`, `durasi`, `STA`, `STD`, `tanggal`, `tujuan`) VALUES
(2, 'SJ590', 'CGK', '02:00', '05:00', '08:20', '18-05-2019', 'UPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `pemesanan_flight`
--
ALTER TABLE `pemesanan_flight`
  ADD PRIMARY KEY (`id_pemesanan_flight`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_penerbangan` (`id_penerbangan`);

--
-- Indexes for table `pemesanan_hotel`
--
ALTER TABLE `pemesanan_hotel`
  ADD PRIMARY KEY (`id_pemesanan_hotel`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id_penerbangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemesanan_flight`
--
ALTER TABLE `pemesanan_flight`
  MODIFY `id_pemesanan_flight` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan_hotel`
--
ALTER TABLE `pemesanan_hotel`
  MODIFY `id_pemesanan_hotel` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `id_penerbangan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan_flight`
--
ALTER TABLE `pemesanan_flight`
  ADD CONSTRAINT `pemesanan_flight_ibfk_1` FOREIGN KEY (`id_pemesanan_flight`) REFERENCES `penerbangan` (`id_penerbangan`),
  ADD CONSTRAINT `pemesanan_flight_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `pemesanan_hotel`
--
ALTER TABLE `pemesanan_hotel`
  ADD CONSTRAINT `pemesanan_hotel_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `pemesanan_hotel_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
