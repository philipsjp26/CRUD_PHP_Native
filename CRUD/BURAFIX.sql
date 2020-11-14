-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 01:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bura_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `kota_asal` varchar(45) NOT NULL,
  `tanggal_lahir` varchar(45) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `alamat_ortu` varchar(130) NOT NULL,
  `kodepos` int(50) NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `nim`, `nama_lengkap`, `kota_asal`, `tanggal_lahir`, `nama_ortu`, `alamat_ortu`, `kodepos`, `nomor_telepon`, `status`) VALUES
(8, '612006102', 'Hajad', 'toraja', '2020-11-30', 'olaas', 'adwa', 1234124, '089651877748', 'WREDA'),
(9, '124124', 'asdawasd', 'toraja ', '2020-11-17', '2020-11-17', 'feli', 0, '1231', '089651877720');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
