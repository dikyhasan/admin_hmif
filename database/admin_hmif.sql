-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2017 at 03:59 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_hmif`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `divisi` text NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'Y',
  `id_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `nama_lengkap`, `divisi`, `jabatan`, `level`, `aktif`, `id_admin`) VALUES
('dikyhasan', 'c4f1d475f4b58521641a2ad40ec62ace', 'dikyhasan155@gmail.com', 'Diky Hasan Al As&#039;Ary', 'PWTI', 'AM', 'administrator', 'Y', 'iru15mv2qq0i9durdmrnpgebq5'),
('hasan', '545857238b7f2d1f0ea57f4a5282abe9', 'diky@localhost', 'hasan', 'PWTI', 'AM', 'admin pengaduan mahasiswa', 'Y', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
