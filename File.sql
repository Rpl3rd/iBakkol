-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2016 at 01:37 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ibakkol`
--

-- --------------------------------------------------------

--
-- Table structure for table `bkk`
--

CREATE TABLE IF NOT EXISTS `bkk` (
`id` bigint(15) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nss` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bkk`
--

INSERT INTO `bkk` (`id`, `nama`, `nss`, `address`, `logo`, `contact`, `email`) VALUES
(1, 'BKK SMK Taruna Bhakti', '', 'Jl.Pekapuran Kel.Curug Kec.Cimanggis , Kota Depok', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`id` bigint(15) NOT NULL,
  `npwp` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id` int(5) NOT NULL,
  `bkk` bigint(15) NOT NULL,
  `jurusan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `akredi` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE IF NOT EXISTS `loker` (
`id` bigint(15) NOT NULL,
  `id_company` bigint(15) NOT NULL,
  `job_type` int(5) NOT NULL,
  `job_bagian` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `job_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `published` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loker_bids`
--

CREATE TABLE IF NOT EXISTS `loker_bids` (
`id` bigint(15) NOT NULL,
  `loked_id` bigint(15) NOT NULL,
  `user_id` bigint(15) NOT NULL,
  `status` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '*0 : Pending; *1 : Accept; *2 : Rejected'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` bigint(15) NOT NULL,
  `from` bigint(15) NOT NULL,
  `to` bigint(15) NOT NULL,
  `content` int(11) NOT NULL,
  `status` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '*0 : view; *1: read; *2: nothing;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`id` bigint(15) NOT NULL,
  `content` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '*0 : view; *1: read; *2: nothing;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oBkk`
--

CREATE TABLE IF NOT EXISTS `oBkk` (
`id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_bkk` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oCompany`
--

CREATE TABLE IF NOT EXISTS `oCompany` (
`id` bigint(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_company` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamatan`
--

CREATE TABLE IF NOT EXISTS `tamatan` (
  `id_user` bigint(15) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nisn` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `id_lembaga` bigint(15) NOT NULL,
  `posisi` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '*0 : Pencaker; *1 : Bekerja; *2 : Melanjutkan',
  `tamatan` char(6) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tahun Tamatan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(15) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('0','1','2','3') COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkk`
--
ALTER TABLE `bkk`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nss` (`nss`,`email`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `npwp` (`npwp`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id`), ADD KEY `bkk` (`bkk`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
 ADD PRIMARY KEY (`id`), ADD KEY `id_company` (`id_company`,`job_type`);

--
-- Indexes for table `loker_bids`
--
ALTER TABLE `loker_bids`
 ADD PRIMARY KEY (`id`), ADD KEY `loked_id` (`loked_id`,`user_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`), ADD KEY `from` (`from`,`to`), ADD KEY `to` (`to`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oBkk`
--
ALTER TABLE `oBkk`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`,`email`), ADD KEY `id_bkk` (`id_bkk`);

--
-- Indexes for table `oCompany`
--
ALTER TABLE `oCompany`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`,`email`), ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `tamatan`
--
ALTER TABLE `tamatan`
 ADD UNIQUE KEY `nisn` (`nisn`), ADD KEY `id_lembaga` (`id_lembaga`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bkk`
--
ALTER TABLE `bkk`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loker_bids`
--
ALTER TABLE `loker_bids`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `oBkk`
--
ALTER TABLE `oBkk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `oCompany`
--
ALTER TABLE `oCompany`
MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
