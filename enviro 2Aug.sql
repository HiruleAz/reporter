-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 03:31 AM
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
(1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', 0, NULL, NULL, 0.02, NULL, NULL),
(2, 1, 2, 1, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 0, NULL, NULL, 0.02, NULL, NULL),
(3, 1, 3, 1, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 0, NULL, NULL, 0.24, NULL, NULL),
(4, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', 46.6, NULL, NULL, 46.51, NULL, NULL),
(5, 1, NULL, 0, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 93.2, NULL, NULL, 93.22, NULL, NULL),
(6, 1, NULL, 0, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 139.8, NULL, NULL, 139.69, NULL, NULL),
(7, 1, NULL, 0, '2021-12-02 11:00:00', '0000-00-00 00:00:00', 'NOx', 186.4, NULL, NULL, 186.41, NULL, NULL),
(8, 1, NULL, 0, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 233, NULL, NULL, 233.11, NULL, NULL),
(9, 1, 4, 1, '2021-12-02 08:00:00', '2021-12-02 08:29:00', 'NOx', 181.67, 6.02, 11.76, 181.9, 6.39, 11.79),
(10, 1, 5, 1, '2021-12-02 09:30:00', '2021-12-02 09:59:00', 'NOx', 192.79, 5.51, 12.42, 193.04, 5.88, 12.45),
(11, 1, 6, 1, '2021-12-02 11:00:00', '2021-12-02 11:29:00', 'NOx', 186.98, 4.66, 12.93, 184.32, 5.04, 12.96),
(12, 1, 7, 1, '2021-12-02 12:30:00', '2021-12-02 12:59:00', 'NOx', 203.73, 4.97, 12.43, 203.96, 5.34, 12.46),
(13, 1, 8, 1, '2021-12-02 14:00:00', '2021-12-02 14:29:00', 'NOx', 208.66, 4.78, 12.89, 208.89, 5.15, 12.91),
(14, 1, 9, 1, '2021-12-02 15:30:00', '2021-12-02 15:59:00', 'NOx', 213.85, 4.64, 12.71, 214.08, 5, 12.73),
(15, 1, 10, 1, '2021-12-03 08:00:00', '2021-12-03 08:29:00', 'NOx', 223.96, 5.09, 11.94, 224.2, 5.21, 12.09),
(16, 1, 11, 1, '2021-12-03 09:30:00', '2021-12-03 09:59:00', 'NOx', 277.76, 5.4, 11.95, 278, 5.52, 12.1),
(17, 1, 12, 1, '2021-12-03 11:00:00', '2021-12-03 11:29:00', 'NOx', 269.23, 5.21, 12.28, 269.47, 5.33, 12.43),
(18, 1, 13, 1, '2021-12-03 12:30:00', '2021-12-03 12:59:00', 'NOx', 263.59, 4.67, 12.63, 263.83, 4.79, 12.78),
(19, 1, 14, 1, '2021-12-03 14:00:00', '2021-12-03 14:29:00', 'NOx', 252.95, 4.54, 12.51, 253.19, 4.66, 12.66),
(20, 1, 15, 1, '2021-12-03 15:30:00', '2021-12-03 15:59:00', 'NOx', 250.26, 4.58, 12.91, 250.5, 4.7, 13.06),
(21, 1, 16, 1, '2021-12-04 08:00:00', '2021-12-04 08:29:00', 'NOx', 207.35, 5.06, 11.95, 207.61, 5.21, 12.14),
(22, 1, 17, 1, '2021-12-04 09:30:00', '2021-12-04 09:59:00', 'NOx', 209.19, 5.13, 12.32, 209.45, 5.28, 12.51),
(23, 1, 18, 1, '2021-12-04 11:00:00', '2021-12-04 11:29:00', 'NOx', 215.68, 4.77, 12.37, 215.94, 4.92, 12.56),
(24, 1, 19, 1, '2021-12-04 12:30:00', '2021-12-04 12:59:00', 'NOx', 212.57, 5, 12.64, 212.85, 5.15, 12.83),
(25, 1, 20, 1, '2021-12-04 14:00:00', '2021-12-04 14:29:00', 'NOx', 226.57, 4.72, 12.35, 226.83, 4.87, 12.54),
(26, 1, 21, 1, '2021-12-04 15:30:00', '2021-12-04 15:59:00', 'NOx', 175.77, 7.27, 10.47, 176.03, 7.42, 10.66),
(27, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', NULL, NULL, NULL, 0.2, NULL, NULL),
(28, 1, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', NULL, NULL, NULL, 0.14, NULL, NULL),
(29, 1, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', NULL, NULL, NULL, 0.26, NULL, NULL),
(30, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 81.38, NULL, NULL, 80.59, NULL, NULL),
(31, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 162.76, NULL, NULL, 160.89, NULL, NULL),
(32, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 244.14, NULL, NULL, 244.07, NULL, NULL),
(33, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 325.52, NULL, NULL, 324.22, NULL, NULL),
(34, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 406.9, NULL, NULL, 406.59, NULL, NULL),
(35, 1, 4, 1, '2021-12-02 08:00:00', '2021-12-02 08:29:00', 'CO', 20.59, 6.02, 11.76, 20.75, 6.39, 11.79),
(36, 1, 5, 1, '2021-12-02 09:30:00', '2021-12-02 09:59:00', 'CO', 18.63, 5.51, 12.42, 18.79, 5.88, 12.45),
(37, 1, 6, 1, '2021-12-02 11:00:00', '2021-12-02 11:29:00', 'CO', 31.94, 4.66, 12.93, 31.67, 5.04, 12.96),
(38, 1, 7, 1, '2021-12-02 12:30:00', '2021-12-02 12:59:00', 'CO', 10.17, 4.97, 12.43, 10.33, 5.34, 12.46),
(39, 1, 8, 1, '2021-12-02 14:00:00', '2021-12-02 14:29:00', 'CO', 21.91, 4.78, 12.89, 22.1, 5.15, 12.91),
(40, 1, 9, 1, '2021-12-02 15:30:00', '2021-12-02 15:59:00', 'CO', 31.29, 4.64, 12.71, 31.58, 5, 12.74),
(41, 1, 10, 1, '2021-12-03 08:00:00', '2021-12-03 08:29:00', 'CO', 23.53, 5.09, 11.94, 23.77, 5.21, 12.09),
(42, 1, 11, 1, '2021-12-03 09:30:00', '2021-12-03 09:59:00', 'CO', 2.82, 5.4, 11.95, 3.06, 5.52, 12.1),
(43, 1, 12, 1, '2021-12-03 11:00:00', '2021-12-03 11:29:00', 'CO', 5.87, 5.21, 12.28, 5.61, 5.33, 12.43),
(44, 1, 13, 1, '2021-12-03 12:30:00', '2021-12-03 12:59:00', 'CO', 5.68, 4.67, 12.63, 5.92, 4.79, 12.78),
(45, 1, 14, 1, '2021-12-03 14:00:00', '2021-12-03 14:29:00', 'CO', 7.99, 4.54, 12.51, 8.23, 4.66, 12.66),
(46, 1, 15, 1, '2021-12-03 15:30:00', '2021-12-03 15:59:00', 'CO', 5.63, 4.58, 12.91, 5.87, 4.7, 13.06),
(47, 1, 16, 1, '2021-12-04 08:00:00', '2021-12-04 08:29:00', 'CO', 291.3, 5.06, 11.95, 291.39, 5.21, 12.14),
(48, 1, 17, 1, '2021-12-04 09:30:00', '2021-12-04 09:59:00', 'CO', 125.8, 5.13, 12.32, 125.89, 5.28, 12.51),
(49, 1, 18, 1, '2021-12-04 11:00:00', '2021-12-04 11:29:00', 'CO', 126, 4.77, 12.37, 126.09, 4.92, 12.56),
(50, 1, 19, 1, '2021-12-04 12:30:00', '2021-12-04 12:59:00', 'CO', 68.43, 5, 12.64, 68.52, 5.15, 12.83),
(51, 1, 20, 1, '2021-12-04 14:00:00', '2021-12-04 14:29:00', 'CO', 285.62, 4.72, 12.35, 285.71, 4.87, 12.54),
(52, 1, 21, 1, '2021-12-04 15:30:00', '2021-12-04 15:59:00', 'CO', 169.93, 7.27, 10.47, 170.02, 7.42, 10.66),
(53, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 0, NULL, NULL, 0.04, NULL, NULL),
(54, 1, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 0, NULL, NULL, 0.01, NULL, NULL),
(55, 1, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 0, NULL, NULL, 0.05, NULL, NULL),
(56, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 243.39, NULL, NULL, 243.3, NULL, NULL),
(57, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 468.78, NULL, NULL, 486.8, NULL, NULL),
(58, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 730.16, NULL, NULL, 730.08, NULL, NULL),
(59, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 973.55, NULL, NULL, 973.43, NULL, NULL),
(60, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 1216.94, NULL, NULL, 1216.92, NULL, NULL),
(61, 1, 4, 1, '2021-12-02 08:00:00', '2021-12-02 08:29:00', 'SO2', 232.75, 6.02, 11.76, 232.92, 6.39, 11.79),
(62, 1, 5, 1, '2021-12-02 09:30:00', '2021-12-02 09:59:00', 'SO2', 222.35, 5.51, 12.42, 222.509, 5.88, 12.45),
(63, 1, 6, 1, '2021-12-02 11:00:00', '2021-12-02 11:29:00', 'SO2', 247.06, 4.66, 12.93, 242.997, 5.04, 12.96),
(64, 1, 7, 1, '2021-12-02 12:30:00', '2021-12-02 12:59:00', 'SO2', 296.83, 4.97, 12.43, 297, 5.34, 12.46),
(65, 1, 8, 1, '2021-12-02 14:00:00', '2021-12-02 14:29:00', 'SO2', 369.71, 4.78, 12.89, 369.877, 5.15, 12.91),
(66, 1, 9, 1, '2021-12-02 15:30:00', '2021-12-02 15:59:00', 'SO2', 421.05, 4.64, 12.71, 421.22, 5, 12.74),
(67, 1, 10, 1, '2021-12-03 08:00:00', '2021-12-03 08:29:00', 'SO2', 485.01, 5.09, 11.94, 485.22, 5.21, 12.09),
(68, 1, 11, 1, '2021-12-03 09:30:00', '2021-12-03 09:59:00', 'SO2', 371.66, 5.4, 11.95, 371.87, 5.52, 12.1),
(69, 1, 12, 1, '2021-12-03 11:00:00', '2021-12-03 11:29:00', 'SO2', 367.53, 5.21, 12.28, 367.74, 5.33, 12.43),
(70, 1, 13, 1, '2021-12-03 12:30:00', '2021-12-03 12:59:00', 'SO2', 351.99, 4.67, 12.63, 352.2, 4.79, 12.78),
(71, 1, 14, 1, '2021-12-03 14:00:00', '2021-12-03 14:29:00', 'SO2', 326.56, 4.54, 12.51, 326.77, 4.66, 12.66),
(72, 1, 15, 1, '2021-12-03 15:30:00', '2021-12-03 15:59:00', 'SO2', 290.5, 4.58, 12.91, 290.71, 4.7, 13.06),
(73, 1, 16, 1, '2021-12-04 08:00:00', '2021-12-04 08:29:00', 'SO2', 363.39, 5.06, 11.95, 363.67, 5.21, 12.14),
(74, 1, 17, 1, '2021-12-04 09:30:00', '2021-12-04 09:59:00', 'SO2', 364.42, 5.13, 12.32, 364.7, 5.28, 12.51),
(75, 1, 18, 1, '2021-12-04 11:00:00', '2021-12-04 11:29:00', 'SO2', 368.47, 4.77, 12.37, 368.75, 4.92, 12.56),
(76, 1, 19, 1, '2021-12-04 12:30:00', '2021-12-04 12:59:00', 'SO2', 353.74, 5, 12.64, 354.02, 5.15, 12.83),
(77, 1, 20, 1, '2021-12-04 14:00:00', '2021-12-04 14:29:00', 'SO2', 374.56, 4.72, 12.35, 374.84, 4.87, 12.54),
(78, 1, 21, 1, '2021-12-04 15:30:00', '2021-12-04 15:59:00', 'SO2', 300.37, 7.27, 10.45, 300.65, 7.42, 10.66);

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
  MODIFY `entryno` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
