-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 02:15 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soundspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `studioId` int(20) NOT NULL,
  `studioName` varchar(40) NOT NULL,
  `studioAddress` varchar(40) NOT NULL,
  `studioPCode` varchar(20) NOT NULL,
  `studioTelNo` int(10) NOT NULL,
  `staffId` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studioId`, `studioName`, `studioAddress`, `studioPCode`, `studioTelNo`, `staffId`) VALUES
(1, 'Studio 3000DF', '45, Galle road, Colombo 3', 'KC03K', 114569873, NULL),
(2, 'Studio U', '15/4, Dharmapala mawatha, Colombo07', 'DC07CS', 11478536, NULL),
(41, 'Cloud nine studios', '12, Havelock city, Narahenpita, colombo5', 'NC05C', 114693548, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`studioId`),
  ADD UNIQUE KEY `studioName` (`studioName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
