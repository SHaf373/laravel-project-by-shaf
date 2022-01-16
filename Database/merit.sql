-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 12:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin321');

-- --------------------------------------------------------

--
-- Table structure for table `merit`
--

CREATE TABLE `merit` (
  `ID` int(13) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `FSc_Marks` int(4) NOT NULL,
  `Total_Marks` int(4) NOT NULL,
  `Test_Marks` int(3) NOT NULL,
  `Interview_Marks` int(2) NOT NULL,
  `Aggregate` int(3) NOT NULL,
  `Program` enum('BSSE','BCS','BDS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merit`
--

INSERT INTO `merit` (`ID`, `First_Name`, `Last_Name`, `FSc_Marks`, `Total_Marks`, `Test_Marks`, `Interview_Marks`, `Aggregate`, `Program`) VALUES
(21, 'abbas', 'khan', 1000, 1100, 40, 7, 68, 'BSSE');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Gender` enum('m','f','o') NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FSc_Mark` int(4) NOT NULL,
  `Total_Marks` int(4) NOT NULL,
  `Test_Marks` int(3) NOT NULL,
  `Interview_Marks` int(2) NOT NULL,
  `Aggregate` int(3) NOT NULL,
  `Program` enum('BSSE','BCS','BSDS') NOT NULL,
  `Number` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `First_Name`, `Last_Name`, `Gender`, `Email`, `Password`, `FSc_Mark`, `Total_Marks`, `Test_Marks`, `Interview_Marks`, `Aggregate`, `Program`, `Number`) VALUES
(21, 'abbas', 'khan', '', 'ak@gmail.com', 'ak321', 1000, 0, 0, 0, 0, 'BSSE', 3333333),
(23, 'shaf', 'khattak', 'm', 'Shafkhattak@gmail.com', 'pk321', 976, 0, 0, 0, 0, '', 3333333),
(24, 'shaf', 'Khattak', 'm', 'shafkhattak@gmail.com', 'pk321', 976, 0, 0, 0, 0, 'BSSE', 3376773888),
(25, 'abbas', 'khan', '', 'ak@gmail.com', 'ak321', 1000, 0, 0, 0, 0, '', 31377777),
(26, 'imran', 'khan', 'm', 'imran@gmail.com', 'imran321', 888, 0, 0, 0, 0, '', 3136605420),
(27, 'zeeshan', 'khan', 'm', 'zeeshan@gmail.com', 'pk321', 999, 0, 0, 0, 0, 'BSSE', 3333333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
