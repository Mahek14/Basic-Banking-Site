-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 02:23 PM
-- Server version: 8.0.23
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email`, `Balance`) VALUES
(1, 'Jennifer Dias', 'jenny@gmail.com', 4999500),
(2, 'Sameer Modi', 'sammeer@gmail.com', 5000000),
(3, 'Tina Bane', 'tina@gmail.com', 5002000),
(4, 'Shreyas Iyer', 'shreyas@gmail.com', 5000000),
(5, 'Afan Khan', 'afan@gmail.com', 5000500),
(6, 'Seema Gupta', 'seema@gmail.com', 4995000),
(7, 'Arya Desai', 'arya@gmail.com', 5005000),
(8, 'Ruhi Gor', 'ruhi@gmail.com', 5000000),
(9, 'Rohan Bhatt', 'rohan@gmail.com', 4998000),
(10, 'Rashmika Madan', 'rashmika@gmail.com', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `No` int NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `Receiver` varchar(255) NOT NULL,
  `Amount_send` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`No`, `Sender`, `Receiver`, `Amount_send`) VALUES
(1, 'Rohan Bhatt', 'Tina Bane', 2000),
(2, 'Seema Gupta', 'Arya Desai', 5000),
(3, 'Jennifer Dias', 'Afan Khan', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `No` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
