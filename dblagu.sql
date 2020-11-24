-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 03:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dblagu`
--
CREATE DATABASE IF NOT EXISTS `dblagu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dblagu`;

-- --------------------------------------------------------

--
-- Table structure for table `artis`
--

CREATE TABLE IF NOT EXISTS `artis` (
  `kd_artis` varchar(3) NOT NULL,
  `nm_artis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artis`
--

INSERT INTO `artis` (`kd_artis`, `nm_artis`) VALUES
('bj8', 'Eminem'),
('d8b', 'Neffex'),
('nZd', 'Linkin park'),
('oSW', 'Skillet');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `kd_gen` varchar(3) NOT NULL,
  `gen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`kd_gen`, `gen`) VALUES
('5fb', 'Rap Gangsta'),
('f5y', 'Campuran'),
('Lj1', 'Pop elektro'),
('r0W', 'Rock'),
('tBK', 'Dangdut');

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE IF NOT EXISTS `lagu` (
  `kd_lagu` varchar(3) NOT NULL,
  `kd_artis` varchar(3) NOT NULL,
  `kd_gen` varchar(3) NOT NULL,
  `judul_lagu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`kd_lagu`, `kd_artis`, `kd_gen`, `judul_lagu`) VALUES
('01Y', 'oSW', 'r0W', 'Awake and alive'),
('7hK', 'nZd', 'r0W', 'Free inside'),
('abL', 'oSW', 'r0W', 'The resistance'),
('DJp', 'oSW', 'r0W', 'Rise');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(5) NOT NULL,
  `nm_user` varchar(25) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `pass`, `type`) VALUES
('00001', 'Sandi Irvan', '29305444dbc99ed4fe1e2418c5421983', 'A'),
('US002', 'User 2', '827ccb0eea8a706c4c34a16891f84e7b', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artis`
--
ALTER TABLE `artis`
 ADD PRIMARY KEY (`kd_artis`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
 ADD PRIMARY KEY (`kd_gen`);

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
 ADD PRIMARY KEY (`kd_lagu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
