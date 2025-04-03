-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 03, 2025 at 10:44 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ha542`
--

-- --------------------------------------------------------

--
-- Table structure for table `PlayboxCategories`
--

CREATE TABLE IF NOT EXISTS `PlayboxCategories` (
  `PlayboxCategoryID` int(11) NOT NULL,
  `PlayboxCategoryCode` varchar(10) NOT NULL,
  `PlayboxCategoryName` varchar(255) NOT NULL,
  `PlayboxShelfNumber` int(3) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PlayboxCategories`
--

INSERT INTO `PlayboxCategories` (`PlayboxCategoryID`, `PlayboxCategoryCode`, `PlayboxCategoryName`, `PlayboxShelfNumber`, `DateCreated`) VALUES
(100, 'BDG', 'Board Games', 1, '2025-04-03 17:54:46'),
(200, 'RCC', 'Remote Control Car', 2, '2025-03-30 01:27:48'),
(300, 'DOLL', 'Dollhouse', 3, '2025-03-30 01:27:51'),
(400, 'LEGO', 'Lego Set', 4, '2025-03-30 01:27:55'),
(500, 'PUZZ', 'Puzzle', 5, '2025-03-30 01:27:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PlayboxCategories`
--
ALTER TABLE `PlayboxCategories`
 ADD PRIMARY KEY (`PlayboxCategoryID`), ADD UNIQUE KEY `PlayboxCategoryCode` (`PlayboxCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
