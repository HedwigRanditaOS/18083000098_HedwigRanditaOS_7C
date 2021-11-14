-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 03:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admincantik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_user` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jk` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `fakultas` varchar(11) NOT NULL,
  `programstudi` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelepon` varchar(17) NOT NULL,
  `status` varchar(11) NOT NULL,
  `jumlah` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_user`, `namalengkap`, `tempatlahir`, `tanggallahir`, `jk`, `agama`, `nim`, `fakultas`, `programstudi`, `email`, `alamat`, `notelepon`, `status`, `jumlah`) VALUES
(2, 'Gilang Dirga', 'Medan', '1992-09-10', 'Laki laki', 'Katolik', '18083000098', 'Fakultas Te', 'S1 Teknik', 'anyway@gmail.com', 'Buring 12 Malang', '089343434343', 'Aktif', '120'),
(3, 'Sandra Dewi Cantik', 'Malang', '1999-10-19', 'Laki-laki', 'Budha', '18083000078', 'Fakultas Ek', 'S1 Sistem I', 'sandra@gmail.com', 'menteng', '08913452348979', 'Aktif', '200');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id user` int(11) NOT NULL,
  `nama` varchar(25) CHARACTER SET latin1 NOT NULL,
  `email` varchar(35) CHARACTER SET latin1 NOT NULL,
  `password` varchar(35) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id user`, `nama`, `email`, `password`) VALUES
(4, 'admin', 'admin@rocketmail.com', '1234'),
(5, 'user', 'user123@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
