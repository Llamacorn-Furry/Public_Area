-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: sdb-56.hosting.stackcp.net
-- Generation Time: Mar 23, 2023 at 04:21 PM
-- Server version: 10.4.28-MariaDB-log
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student23-35303133e517`
--

-- --------------------------------------------------------

--
-- Table structure for table `Class Data`
--

CREATE TABLE `Class Data` (
  `Class Year` enum('Year 0','Year 1','Year 2','Year 3','Year 4','Year 5','Year 6') NOT NULL,
  `Class Capacity` int(255) NOT NULL,
  `Class Name` text DEFAULT NULL,
  `Teacher Name` varchar(1000) DEFAULT NULL,
  `Teacher Address` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Parent Data`
--

CREATE TABLE `Parent Data` (
  `Parent ID` int(255) NOT NULL,
  `Address` longtext NOT NULL,
  `Phone Number` bigint(255) DEFAULT NULL,
  `Parent Name` longtext NOT NULL,
  `AGE` int(255) NOT NULL,
  `Email` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pupil Data`
--

CREATE TABLE `Pupil Data` (
  `Pupil ID` int(255) NOT NULL,
  `Class Year` enum('Year 0','Year 1','Year 2','Year 3','Year 4','Year 5','Year 6') DEFAULT NULL,
  `Age` int(255) NOT NULL,
  `Medical Infomation` longtext DEFAULT NULL,
  `Parent ID A` int(255) NOT NULL,
  `Parent ID B` int(255) DEFAULT NULL,
  `Pupil Name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Teacher Data`
--

CREATE TABLE `Teacher Data` (
  `Teacher Name` varchar(1000) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `AGE` int(255) NOT NULL,
  `Phone Number` bigint(255) NOT NULL,
  `Salary` float(10,2) DEFAULT NULL,
  `Background` longtext DEFAULT NULL,
  `Email` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class Data`
--
ALTER TABLE `Class Data`
  ADD PRIMARY KEY (`Class Year`),
  ADD KEY `Teacher Name` (`Teacher Name`,`Teacher Address`);

--
-- Indexes for table `Parent Data`
--
ALTER TABLE `Parent Data`
  ADD PRIMARY KEY (`Parent ID`);

--
-- Indexes for table `Pupil Data`
--
ALTER TABLE `Pupil Data`
  ADD PRIMARY KEY (`Pupil ID`),
  ADD KEY `Class Year` (`Class Year`),
  ADD KEY `Parent ID A` (`Parent ID A`),
  ADD KEY `Parent ID B` (`Parent ID B`);

--
-- Indexes for table `Teacher Data`
--
ALTER TABLE `Teacher Data`
  ADD PRIMARY KEY (`Teacher Name`,`Address`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Class Data`
--
ALTER TABLE `Class Data`
  ADD CONSTRAINT `Class Data_ibfk_1` FOREIGN KEY (`Teacher Name`,`Teacher Address`) REFERENCES `Teacher Data` (`Teacher Name`, `Address`);

--
-- Constraints for table `Pupil Data`
--
ALTER TABLE `Pupil Data`
  ADD CONSTRAINT `Pupil Data_ibfk_1` FOREIGN KEY (`Class Year`) REFERENCES `Class Data` (`Class Year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pupil Data_ibfk_2` FOREIGN KEY (`Parent ID A`) REFERENCES `Parent Data` (`Parent ID`),
  ADD CONSTRAINT `Pupil Data_ibfk_3` FOREIGN KEY (`Parent ID B`) REFERENCES `Parent Data` (`Parent ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
