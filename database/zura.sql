-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 01:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zura`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `name`, `username`, `password`) VALUES
(1, 'alice samile', 'alice', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `customerappoitment`
--

CREATE TABLE `customerappoitment` (
  `customerAppoitmentId` int(11) NOT NULL,
  `appoitmentSender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `appoitmentDate` date NOT NULL,
  `appoitmentTime` time NOT NULL,
  `timeSent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerappoitment`
--

INSERT INTO `customerappoitment` (`customerAppoitmentId`, `appoitmentSender`, `email`, `appoitmentDate`, `appoitmentTime`, `timeSent`) VALUES
(1, 'yohana samile', 'samileking9@gmail.com', '2023-06-30', '17:45:00', '0000-00-00'),
(2, 'yohana samile', 'samileking9@gmail.com', '2023-06-16', '19:03:00', '2023-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `customercomment`
--

CREATE TABLE `customercomment` (
  `commentId` int(11) NOT NULL,
  `customerFullName` varchar(100) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `timeSent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customercomment`
--

INSERT INTO `customercomment` (`commentId`, `customerFullName`, `customerEmail`, `subject`, `message`, `timeSent`) VALUES
(1, 'yohana samile', 'samileking9@gmail.com', '', 'petrolium delivery service is available?', '2023-06-03 13:54:50'),
(2, 'yohana samile', 'samileking9@gmail.com', 'petrolium delivery', 'petrolium delivery', '2023-06-03 13:58:07'),
(3, 'yohana samile', 'samileking9@gmail.com', 'petrolium delivery', 'petrolium delivery', '2023-06-03 14:06:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `customerappoitment`
--
ALTER TABLE `customerappoitment`
  ADD PRIMARY KEY (`customerAppoitmentId`);

--
-- Indexes for table `customercomment`
--
ALTER TABLE `customercomment`
  ADD PRIMARY KEY (`commentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerappoitment`
--
ALTER TABLE `customerappoitment`
  MODIFY `customerAppoitmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customercomment`
--
ALTER TABLE `customercomment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
