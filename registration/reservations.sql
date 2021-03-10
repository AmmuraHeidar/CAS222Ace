-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 10:29 PM
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
-- Database: `ammurahe_acecontact`
--

-- --------------------------------------------------------

--
-- Table structure for table `aceregistration`
--

CREATE TABLE `aceregistration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `role` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `emname` date NOT NULL,
  `emphone` text NOT NULL,
  `gender` text NOT NULL,
  `tshirt` text NOT NULL,
  `satevent` date NOT NULL,
  `sunevent` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for table `aceregistration`
--

INSERT INTO `aceregistration` (`id`, `name`, `age`, `role`, `phone`, `email`, `emname`, `emphone`, `gender`, `tshirt`, `satevent`, `sunevent`, `comment`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aceregistration`
--
ALTER TABLE `aceregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aceregistration`
--
ALTER TABLE `aceregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
