-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 10:28 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejodoh`
--

-- --------------------------------------------------------

--
-- Table structure for table `core_factor`
--

CREATE TABLE `core_factor` (
  `id` int(11) NOT NULL,
  `attitude` tinyint(1) DEFAULT '0',
  `penampilan` tinyint(1) DEFAULT '0',
  `keaktifan` tinyint(1) DEFAULT '0',
  `ekonomi` tinyint(1) DEFAULT '0',
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gebetan`
--

CREATE TABLE `gebetan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `attitude` tinyint(4) NOT NULL,
  `penampilan` tinyint(4) NOT NULL,
  `keaktifan` tinyint(4) NOT NULL,
  `ekonomi` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `attitude` tinyint(4) NOT NULL,
  `penampilan` tinyint(4) NOT NULL,
  `keaktifan` tinyint(4) NOT NULL,
  `ekonomi` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_akhir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core_factor`
--
ALTER TABLE `core_factor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gebetan`
--
ALTER TABLE `gebetan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core_factor`
--
ALTER TABLE `core_factor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gebetan`
--
ALTER TABLE `gebetan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
