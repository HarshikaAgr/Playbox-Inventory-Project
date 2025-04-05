-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 05, 2025 at 03:34 AM
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
-- Table structure for table `PlayboxProducts`
--

CREATE TABLE IF NOT EXISTS `PlayboxProducts` (
  `PlayboxProductID` int(11) NOT NULL,
  `PlayboxProductCode` varchar(10) NOT NULL,
  `PlayboxProductName` varchar(255) NOT NULL,
  `PlayboxDescription` text NOT NULL,
  `PlayboxModel` varchar(25) NOT NULL,
  `PlayboxCategoryID` int(11) NOT NULL,
  `PlayboxWholesalePrice` decimal(10,2) NOT NULL,
  `PlayboxListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PlayboxProducts`
--

INSERT INTO `PlayboxProducts` (`PlayboxProductID`, `PlayboxProductCode`, `PlayboxProductName`, `PlayboxDescription`, `PlayboxModel`, `PlayboxCategoryID`, `PlayboxWholesalePrice`, `PlayboxListPrice`, `DateCreated`) VALUES
(101, 'MONOC', 'Monopoly Classic Board Game', 'Monopoly is a classic board game where players buy, sell, and trade properties. It is a fun, competitive game for friends and family.', 'Monopoly Classic', 100, 10.00, 19.99, '2025-04-03 18:08:50'),
(102, 'CATAN', 'Catan - Trade Build Settle', 'Catan is a strategic game of resource management and settlement building. Players compete to build settlements and cities on the island of Catan.', 'Catan Classic', 100, 25.00, 49.99, '2025-04-03 18:08:50'),
(103, 'SCRAB', 'Scrabble Classic Game', 'Scrabble is a word game where players create words from letter tiles. It is an educational game that is also fun for the entire family.', 'Scrabble Classic', 100, 9.50, 19.99, '2025-04-03 18:08:50'),
(104, 'CATANX', 'Catan Extension', 'Elevate your CATAN gameplay by accommodating up to 6 players for epic battles on the bountiful island. Introduce eleven unique territory tiles to make room for new civilizations and expand your CATAN universe.', 'Monopoly Extension', 100, 49.99, 59.99, '2025-04-05 03:17:56'),
(201, 'NQD', 'NQD Remote Control Formula 1 Racing Car', 'The NQD F1 Racing Car features a sleek design and high-speed racing capabilities. It is perfect for enthusiasts of remote control racing cars.', 'NQD Formula 1', 200, 35.00, 69.99, '2025-04-03 18:08:54'),
(202, 'TERRA', 'TerraFury RC Car (F1 Style)', 'The TerraFury RC car combines high-speed performance with off-road durability. It mimics the sleek design of an F1 car for thrilling races.', 'F1 TerraFury', 200, 45.00, 89.99, '2025-04-03 18:08:54'),
(203, 'RAZOR', 'Razor Ground Force Drifter Electric F1 Go-Kart', 'The Razor Ground Force Drifter is an electric go-kart designed for drifting. It combines F1 aesthetics and performance for fun and exciting rides.', 'Razor Drifter', 200, 200.00, 399.99, '2025-04-03 18:08:54'),
(301, 'BARBIE', 'Barbie Dreamhouse Dollhouse', 'The Barbie Dreamhouse has three floors with seven rooms and accessories. It encourages imaginative storytelling with Barbie and friends.', 'Dreamhouse', 300, 85.00, 179.99, '2025-04-03 18:10:10'),
(302, 'PINKMAN', 'KidKraft Wooden Pink Mansion Dollhouse', 'The KidKraft Pink Mansion Dollhouse features 3 floors with elegant furniture. It is ideal for fostering creative play and storytelling.', 'Pink Mansion', 300, 115.00, 229.99, '2025-04-03 18:10:10'),
(303, 'MELVIC', 'Melissa & Doug Wooden Victorian Dollhouse', 'The Melissa & Doug Victorian Wooden Dollhouse is crafted from wood and includes 11 pieces of furniture. It is perfect for hours of imaginative play.', 'Victorian Dollhouse', 300, 95.00, 159.99, '2025-04-03 18:10:10'),
(401, 'LEGOWAR', 'LEGO Star Wars Millennium Falcon', 'This LEGO Star Wars Millennium Falcon set lets you build the iconic ship. It is perfect for fans and collectors alike.', 'Millennium Falcon', 400, 150.00, 199.99, '2025-04-03 18:10:47'),
(402, 'LEGOCOAST', 'LEGO Creator Expert Roller Coaster', 'Build a fully functional roller coaster with this LEGO set. It includes a lift and track for realistic fun.', 'Roller Coaster', 400, 280.00, 379.99, '2025-04-03 18:10:47'),
(403, 'LEGOFRIEN', 'LEGO Friends Central Perk Set', 'Recreate Central Perk café from Friends with this LEGO set. It features mini-figures and a detailed café interior.', 'Central Perk', 400, 55.00, 89.99, '2025-04-03 18:10:47'),
(501, 'RUBIK', 'Rubik’s Cube', 'This 3x3 Rubik’s Cube is a classic puzzle. It has smooth rotation and vibrant colors, perfect for puzzle lovers.', 'Speed 3x3 Cube', 500, 6.00, 12.99, '2025-04-03 18:10:49'),
(502, 'RAVENS', 'Ravensburger 1000-Piece Puzzle', 'This Ravensburger 1000-piece puzzle features beautiful imagery. It Is a challenging puzzle for all skill levels.', '1000-Piece Puzzle', 500, 10.00, 19.99, '2025-04-03 18:10:49'),
(503, '3DPUZ', '3D Puzzle - Eiffel Tower', 'Build a detailed 3D replica of the Eiffel Tower with this challenging puzzle. It is perfect for collectors and puzzle fans.', 'Eiffel Tower 3D', 500, 15.00, 25.99, '2025-04-03 18:10:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PlayboxProducts`
--
ALTER TABLE `PlayboxProducts`
 ADD PRIMARY KEY (`PlayboxProductID`), ADD UNIQUE KEY `PlayboxProductCode` (`PlayboxProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
