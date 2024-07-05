-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enviro`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `entryno` bigint(255) NOT NULL,
  `idno` int(255) NOT NULL,
  `sampleno` int(255) DEFAULT NULL,
  `sampleuse` tinyint(1) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `gastype` varchar(255) NOT NULL,
  `cemsmg` double DEFAULT NULL,
  `cemsO2` double DEFAULT NULL,
  `cemsH2O` double DEFAULT NULL,
  `srmmg` double DEFAULT NULL,
  `srmO2` double DEFAULT NULL,
  `srmH2O` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`entryno`, `idno`, `sampleno`, `sampleuse`, `start`, `end`, `gastype`, `cemsmg`, `cemsO2`, `cemsH2O`, `srmmg`, `srmO2`, `srmH2O`) VALUES
(1, 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 0, NULL, NULL, 0.02, NULL, NULL),
(2, 1, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 0, NULL, NULL, 0.02, NULL, NULL),
(3, 1, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 0, NULL, NULL, 0.24, NULL, NULL),
(4, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 46.6, NULL, NULL, 46.51, NULL, NULL),
(5, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 93.2, NULL, NULL, 93.22, NULL, NULL),
(6, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 139.8, NULL, NULL, 139.69, NULL, NULL),
(7, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 186.4, NULL, NULL, 186.41, NULL, NULL),
(8, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 233, NULL, NULL, 233.11, NULL, NULL),
(9, 1, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 181.67, 6.02, 11.76, 181.9, 6.39, 11.79),
(10, 1, 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 192.79, 5.51, 12.42, 193.04, 5.88, 12.45),
(11, 1, 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 186.98, 4.66, 12.93, 184.32, 5.04, 12.96),
(12, 1, 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 203.73, 4.97, 12.43, 203.96, 5.34, 12.46),
(13, 1, 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 208.66, 4.78, 12.89, 208.89, 5.15, 12.91),
(14, 1, 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 213.85, 4.64, 12.71, 214.08, 5, 12.73),
(15, 1, 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 223.96, 5.09, 11.94, 224.2, 5.21, 12.09),
(16, 1, 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 277.76, 5.4, 11.95, 278, 5.52, 12.1),
(17, 1, 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 269.23, 5.21, 12.28, 269.47, 5.33, 12.43),
(18, 1, 13, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 263.59, 4.67, 12.63, 263.83, 4.79, 12.78),
(19, 1, 14, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 252.95, 4.54, 12.51, 253.19, 4.66, 12.66),
(20, 1, 15, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 250.26, 4.58, 12.91, 250.5, 4.7, 13.06),
(21, 1, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 207.35, 5.06, 11.95, 207.61, 5.21, 12.14),
(22, 1, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 209.19, 5.13, 12.32, 209.45, 5.28, 12.51),
(23, 1, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 215.68, 4.77, 12.37, 215.94, 4.92, 12.56),
(24, 1, 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 212.57, 5, 12.64, 212.85, 5.15, 12.83),
(25, 1, 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 226.57, 4.72, 12.35, 226.83, 4.87, 12.54),
(26, 1, 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 175.77, 7.27, 10.47, 176.03, 7.42, 10.66),
(27, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 1, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 1, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 1, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 1, 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 1, 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 1, 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 1, 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 1, 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 1, 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 1, 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 1, 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 1, 13, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 1, 14, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 1, 15, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 1, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 1, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 1, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 1, 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 1, 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 1, 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `idno` int(11) NOT NULL,
  `identry` date NOT NULL,
  `pollutant` varchar(256) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `idstations`
--

CREATE TABLE `idstations` (
  `idno` int(11) NOT NULL,
  `idname` varchar(256) NOT NULL,
  `idcreated` date NOT NULL,
  `idpassword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `idstations`
--

INSERT INTO `idstations` (`idno`, `idname`, `idcreated`, `idpassword`) VALUES
(1, 'Stack 1', '2020-03-12', 'stacking123'),
(2, 'Chimney 1', '2021-08-02', 'chimneyman'),
(3, 'Stack 2', '2022-02-02', 'stacking123'),
(4, 'Stack 3', '2022-07-15', 'stacking123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`entryno`),
  ADD KEY `entries_FK_1` (`idno`);

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `idstations`
--
ALTER TABLE `idstations`
  ADD PRIMARY KEY (`idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `entryno` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entries`
--
ALTER TABLE `entries`
  ADD CONSTRAINT `entries_FK_1` FOREIGN KEY (`idno`) REFERENCES `idstations` (`idno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
