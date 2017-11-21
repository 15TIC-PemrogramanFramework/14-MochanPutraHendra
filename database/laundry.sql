-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 09:43 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama`, `password`) VALUES
(3, 'jokowi', 'dodo', 'jokowidodo'),
(4, 'viki', 'vikishu', 'kucing'),
(5, 'namnung', 'ade', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tanggal_bergabung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `nama_customer`, `password`, `tanggal_bergabung`) VALUES
(3, 'jekson', 'fernando', 'erik', '2017-11-18'),
(5, 'ribhi', 'otong', 'surotong', '2017-11-11'),
(6, 'ajis', 'andre', 'gagap', '2017-11-08'),
(7, 'jupri', 'juprianto', 'anto', '2017-11-03'),
(8, 'okic', 'garam', 'ciko', '2017-11-16'),
(9, 'arif', 'listrik', 'tiang', '2017-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(30) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `keterangan_paket` varchar(30) NOT NULL,
  `harga_paket` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `keterangan_paket`, `harga_paket`) VALUES
(2, 'cuci bedcover', '3', 20000),
(3, 'Cuci + Setrika', '3', 6000),
(4, 'Setrika', '3', 4000),
(5, 'Cuci', '3', 3500),
(7, 'Cuci Ekspress', '3', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(30) NOT NULL,
  `id_customer` int(30) NOT NULL,
  `id_paket` int(30) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `biaya` int(30) NOT NULL,
  `berat` int(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `id_paket`, `tanggal_transaksi`, `tanggal_selesai`, `biaya`, `berat`, `keterangan`) VALUES
(7, 8, 5, '2017-11-09', '2017-11-12', 7000, 2, 'Keterangan'),
(8, 6, 4, '2017-11-21', '2017-11-24', 35000, 10, 'Diantar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_paket` (`id_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_paket` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
