-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 07:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ah-acecontact`
--

-- --------------------------------------------------------

--
-- Table structure for table `acecontact`
--

CREATE TABLE `acecontact` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acecontact`
--

INSERT INTO `acecontact` (`ID`, `name`, `email`, `comment`) VALUES
(1, 'ami', 'qamarheidar@gmail.com', 'test this'),
(2, 'mememe', 'qamarheidar@gmail.com', 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `aceregistration`
--

CREATE TABLE `aceregistration` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `role` set('Athlete','Volunteer') NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `emname` text NOT NULL,
  `emphone` text NOT NULL,
  `gender` set('Female','Male','Non-binary/Other') NOT NULL,
  `tshirt` set('XS','S','M','L','XL') NOT NULL,
  `satevent` enum('Long Course Triathlon','Olympic Triathlon','10K','Half Marathon') NOT NULL,
  `sunevent` enum('Sprint Triathlon','Try-a-Tri','Splash n Dash') NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aceregistration`
--

INSERT INTO `aceregistration` (`ID`, `name`, `age`, `role`, `phone`, `email`, `emname`, `emphone`, `gender`, `tshirt`, `satevent`, `sunevent`, `comment`) VALUES
(1, 'mytest1', '24', 'Volunteer', '8465814635', 'rte@g.tyr', 'tgt', '8465854351', '', 'M', '', '', 'testing1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acecontact`
--
ALTER TABLE `acecontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aceregistration`
--
ALTER TABLE `aceregistration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acecontact`
--
ALTER TABLE `acecontact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aceregistration`
--
ALTER TABLE `aceregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
