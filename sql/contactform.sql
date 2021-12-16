-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 01:10 PM
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
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `strt` varchar(200) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `firstname`, `lastname`, `phone`, `email`, `province`, `city`, `brgy`, `strt`, `message`) VALUES
(17, ' Marvin', 'Tejol', '03254645243241', 'sdgdgfsfsfs', 'Davao Del Sur', 'Mati', 'Mati', 'sdfsfsfsf', 'fsdfdsfsa'),
(18, 'tyet', 'dfasdf', '23425342452', 'icc@gmail.com', 'Davao Del Norte', 'Mati', 'Mati', 'kjhjkljh', 'ljhkljkljkl'),
(19, ' ghdfghdf', 'dfsgfsd', '03254645243241', 'asad@hsfnas', 'Davao Del Norte', 'Mati', 'Panakan', 'BARYO SA MGA GUAPO', 'AMPINGAN'),
(21, 'BAGO rako', 'AKO na', '324523452', 'asad@hsfnas.com', '1', 'Davao City', '1', 'BARYO SA MGA GUAPO', 'ok kaay0'),
(22, 'Gianna', 'Tejol', '654456747', 'asad@hsfnas', '3', '4', '3', 'High lang among balay', 'Lugar sa mga guapo');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `region`, `province`, `city`, `brgy`) VALUES
(1, 'Region 11', 'Davao del Sur', 'Davao City', 'Panakan'),
(2, 'REGION VI (Western Visayas)', 'BOHOL', 'Valencia', 'aryo Valencia'),
(3, 'REGION I (Ilocos Region)', 'PANGASINAN', 'Aguilar', 'Baryo Aguilar'),
(4, 'NCR - National Capital Region', 'Metro Manila', 'Quiapo', 'Baryo Uwak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
