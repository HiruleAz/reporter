-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 11:14 AM
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
  `scems` double DEFAULT NULL,
  `srmmg` double DEFAULT NULL,
  `srmO2` double DEFAULT NULL,
  `srmH2O` double DEFAULT NULL,
  `ssrm` double DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`entryno`, `idno`, `sampleno`, `sampleuse`, `start`, `end`, `gastype`, `cemsmg`, `cemsO2`, `cemsH2O`, `scems`, `srmmg`, `srmO2`, `srmH2O`, `ssrm`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', 0, NULL, NULL, 0, 0.02, NULL, NULL, 0.02, NULL, NULL),
(2, 1, 2, 1, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 0, NULL, NULL, 0, 0.02, NULL, NULL, 0.02, NULL, NULL),
(3, 1, 3, 1, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 0, NULL, NULL, 0, 0.24, NULL, NULL, 0.04, NULL, NULL),
(4, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', 46.6, NULL, NULL, NULL, 46.51, NULL, NULL, NULL, NULL, NULL),
(5, 1, NULL, 0, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 93.2, NULL, NULL, NULL, 93.22, NULL, NULL, NULL, NULL, NULL),
(6, 1, NULL, 0, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 139.8, NULL, NULL, NULL, 139.69, NULL, NULL, NULL, NULL, NULL),
(7, 1, NULL, 0, '2021-12-02 11:00:00', '0000-00-00 00:00:00', 'NOx', 186.4, NULL, NULL, NULL, 186.41, NULL, NULL, NULL, NULL, NULL),
(8, 1, NULL, 0, '2021-12-02 08:00:00', '0000-00-00 00:00:00', 'NOx', 233, NULL, NULL, NULL, 233.11, NULL, NULL, NULL, NULL, NULL),
(9, 1, 4, 1, '2021-12-02 08:00:00', '2021-12-02 08:29:00', 'NOx', 181.67, 6.02, 11.76, 233.59, 181.9, 6.39, 11.79, 240.01, NULL, NULL),
(10, 1, 5, 1, '2021-12-02 09:30:00', '2021-12-02 09:59:00', 'NOx', 192.79, 5.51, 12.42, 243.36, 193.04, 5.88, 12.45, 249.77, NULL, NULL),
(11, 1, 6, 1, '2021-12-02 11:00:00', '2021-12-02 11:29:00', 'NOx', 186.98, 4.66, 12.93, 226.34, 184.82, 5.04, 12.96, 229.16, NULL, NULL),
(12, 1, 7, 1, '2021-12-02 12:30:00', '2021-12-02 12:59:00', 'NOx', 203.73, 4.97, 12.43, 248.42, 203.96, 5.34, 12.46, 254.79, NULL, NULL),
(13, 1, 8, 1, '2021-12-02 14:00:00', '2021-12-02 14:29:00', 'NOx', 208.66, 4.78, 12.89, 254.22, 208.89, 5.15, 12.91, 260.55, NULL, NULL),
(14, 1, 9, 1, '2021-12-02 15:30:00', '2021-12-02 15:59:00', 'NOx', 213.85, 4.64, 12.71, 257.08, 214.08, 5, 12.73, 263.44, NULL, NULL),
(15, 1, 10, 1, '2021-12-03 08:00:00', '2021-12-03 08:29:00', 'NOx', 223.96, 5.09, 11.94, 272.13, 224.2, 5.21, 12.09, 275.45, NULL, NULL),
(16, 1, 11, 1, '2021-12-03 09:30:00', '2021-12-03 09:59:00', 'NOx', 277.76, 5.4, 11.95, 344.45, 278, 5.52, 12.1, 348.63, NULL, NULL),
(17, 1, 12, 1, '2021-12-03 11:00:00', '2021-12-03 11:29:00', 'NOx', 269.23, 5.21, 12.28, 332.33, 269.47, 5.33, 12.43, 336.34, NULL, NULL),
(18, 1, 13, 1, '2021-12-03 12:30:00', '2021-12-03 12:59:00', 'NOx', 263.59, 4.67, 12.63, 316.97, 263.83, 4.79, 12.78, 320.73, NULL, NULL),
(19, 1, 14, 1, '2021-12-03 14:00:00', '2021-12-03 14:29:00', 'NOx', 252.95, 4.54, 12.51, 301.04, 253.19, 4.66, 12.66, 304.59, NULL, NULL),
(20, 1, 15, 1, '2021-12-03 15:30:00', '2021-12-03 15:59:00', 'NOx', 250.26, 4.58, 12.91, 301.21, 250.5, 4.7, 13.06, 304.78, NULL, NULL),
(21, 1, 16, 1, '2021-12-04 08:00:00', '2021-12-04 08:29:00', 'NOx', 207.35, 5.06, 11.95, 251.5, 207.61, 5.21, 12.14, 255.33, NULL, NULL),
(22, 1, 17, 1, '2021-12-04 09:30:00', '2021-12-04 09:59:00', 'NOx', 209.19, 5.13, 12.32, 257.09, 209.45, 5.28, 12.51, 261.01, NULL, NULL),
(23, 1, 18, 1, '2021-12-04 11:00:00', '2021-12-04 11:29:00', 'NOx', 215.68, 4.77, 12.37, 259.44, 215.94, 4.92, 12.56, 263.33, NULL, NULL),
(24, 1, 19, 1, '2021-12-04 12:30:00', '2021-12-04 12:59:00', 'NOx', 212.57, 5, 12.64, 260.96, 212.85, 5.15, 12.83, 264.94, NULL, NULL),
(25, 1, 20, 1, '2021-12-04 14:00:00', '2021-12-04 14:29:00', 'NOx', 226.57, 4.72, 12.35, 271.65, 226.83, 4.87, 12.54, 275.7, NULL, NULL),
(26, 1, 21, 1, '2021-12-04 15:30:00', '2021-12-04 15:59:00', 'NOx', 175.77, 7.27, 10.47, 239.68, 176.03, 7.42, 10.66, 243.74, NULL, NULL),
(27, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 0, NULL, NULL, 0, 0.2, NULL, NULL, 0.2, NULL, NULL),
(28, 1, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 0, NULL, NULL, 0, 0.14, NULL, NULL, 0.14, NULL, NULL),
(29, 1, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 0, NULL, NULL, 0, 0.26, NULL, NULL, 0.26, NULL, NULL),
(30, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 81.38, NULL, NULL, NULL, 80.59, NULL, NULL, NULL, NULL, NULL),
(31, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 162.76, NULL, NULL, NULL, 160.89, NULL, NULL, NULL, NULL, NULL),
(32, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 244.14, NULL, NULL, NULL, 244.07, NULL, NULL, NULL, NULL, NULL),
(33, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 325.52, NULL, NULL, NULL, 324.22, NULL, NULL, NULL, NULL, NULL),
(34, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', 406.9, NULL, NULL, NULL, 406.59, NULL, NULL, NULL, NULL, NULL),
(35, 1, 4, 1, '2021-12-02 08:00:00', '2021-12-02 08:29:00', 'CO', 20.59, 6.02, 11.76, 26.48, 20.75, 6.39, 11.79, 27.38, NULL, NULL),
(36, 1, 5, 1, '2021-12-02 09:30:00', '2021-12-02 09:59:00', 'CO', 18.63, 5.51, 12.42, 23.52, 18.79, 5.88, 12.45, 24.31, NULL, NULL),
(37, 1, 6, 1, '2021-12-02 11:00:00', '2021-12-02 11:29:00', 'CO', 31.94, 4.66, 12.93, 38.67, 31.67, 5.04, 12.96, 39.27, NULL, NULL),
(38, 1, 7, 1, '2021-12-02 12:30:00', '2021-12-02 12:59:00', 'CO', 10.17, 4.97, 12.43, 12.4, 10.33, 5.34, 12.46, 12.9, NULL, NULL),
(39, 1, 8, 1, '2021-12-02 14:00:00', '2021-12-02 14:29:00', 'CO', 21.91, 4.78, 12.89, 26.69, 22.1, 5.15, 12.91, 27.57, NULL, NULL),
(40, 1, 9, 1, '2021-12-02 15:30:00', '2021-12-02 15:59:00', 'CO', 31.29, 4.64, 12.71, 37.61, 31.58, 5, 12.74, 38.86, NULL, NULL),
(41, 1, 10, 1, '2021-12-03 08:00:00', '2021-12-03 08:29:00', 'CO', 23.53, 5.09, 11.94, 28.59, 23.77, 5.21, 12.09, 29.21, NULL, NULL),
(42, 1, 11, 1, '2021-12-03 09:30:00', '2021-12-03 09:59:00', 'CO', 2.82, 5.4, 11.95, 3.49, 3.06, 5.52, 12.1, 3.83, NULL, NULL),
(43, 1, 12, 1, '2021-12-03 11:00:00', '2021-12-03 11:29:00', 'CO', 5.37, 5.21, 12.28, 6.63, 5.61, 5.33, 12.43, 7.01, NULL, NULL),
(44, 1, 13, 1, '2021-12-03 12:30:00', '2021-12-03 12:59:00', 'CO', 5.68, 4.67, 12.63, 6.83, 5.92, 4.79, 12.78, 7.19, NULL, NULL),
(45, 1, 14, 1, '2021-12-03 14:00:00', '2021-12-03 14:29:00', 'CO', 7.99, 4.54, 12.51, 9.51, 8.23, 4.66, 12.66, 9.9, NULL, NULL),
(46, 1, 15, 1, '2021-12-03 15:30:00', '2021-12-03 15:59:00', 'CO', 5.63, 4.58, 12.91, 6.78, 5.87, 4.7, 13.06, 7.15, NULL, NULL),
(47, 1, 16, 1, '2021-12-04 08:00:00', '2021-12-04 08:29:00', 'CO', 291.3, 5.06, 11.95, 353.34, 291.39, 5.21, 12.14, 358.37, NULL, NULL),
(48, 1, 17, 1, '2021-12-04 09:30:00', '2021-12-04 09:59:00', 'CO', 125.8, 5.13, 12.32, 154.61, 125.89, 5.28, 12.51, 156.89, NULL, NULL),
(49, 1, 18, 1, '2021-12-04 11:00:00', '2021-12-04 11:29:00', 'CO', 126, 4.77, 12.37, 151.56, 126.09, 4.92, 12.56, 153.76, NULL, NULL),
(50, 1, 19, 1, '2021-12-04 12:30:00', '2021-12-04 12:59:00', 'CO', 68.43, 5, 12.64, 84.01, 68.52, 5.15, 12.83, 85.3, NULL, NULL),
(51, 1, 20, 1, '2021-12-04 14:00:00', '2021-12-04 14:29:00', 'CO', 285.62, 4.72, 12.35, 342.44, 285.71, 4.87, 12.54, 347.25, NULL, NULL),
(52, 1, 21, 1, '2021-12-04 15:30:00', '2021-12-04 15:59:00', 'CO', 169.93, 7.27, 10.47, 231.72, 170.02, 7.42, 10.66, 235.42, NULL, NULL),
(53, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 0, NULL, NULL, 0, 0.04, NULL, NULL, 0.04, NULL, NULL),
(54, 1, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 0, NULL, NULL, 0, 0.01, NULL, NULL, 0.01, NULL, NULL),
(55, 1, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 0, NULL, NULL, 0, 0.05, NULL, NULL, 0.05, NULL, NULL),
(56, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 243.39, NULL, NULL, NULL, 243.3, NULL, NULL, NULL, NULL, NULL),
(57, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 486.78, NULL, NULL, NULL, 486.8, NULL, NULL, NULL, NULL, NULL),
(58, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 730.16, NULL, NULL, NULL, 730.08, NULL, NULL, NULL, NULL, NULL),
(59, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 973.55, NULL, NULL, NULL, 973.43, NULL, NULL, NULL, NULL, NULL),
(60, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SO2', 1216.94, NULL, NULL, NULL, 1216.92, NULL, NULL, NULL, NULL, NULL),
(61, 1, 4, 1, '2021-12-02 08:00:00', '2021-12-02 08:29:00', 'SO2', 232.75, 6.02, 11.76, 299.28, 232.92, 6.39, 11.79, 307.34, NULL, NULL),
(62, 1, 5, 1, '2021-12-02 09:30:00', '2021-12-02 09:59:00', 'SO2', 222.35, 5.51, 12.42, 280.68, 222.509, 5.88, 12.45, 287.9, NULL, NULL),
(63, 1, 6, 1, '2021-12-02 11:00:00', '2021-12-02 11:29:00', 'SO2', 247.06, 4.66, 12.93, 299.08, 242.997, 5.04, 12.96, 301.3, NULL, NULL),
(64, 1, 7, 1, '2021-12-02 12:30:00', '2021-12-02 12:59:00', 'SO2', 296.83, 4.97, 12.43, 361.94, 297, 5.34, 12.46, 371.01, NULL, NULL),
(65, 1, 8, 1, '2021-12-02 14:00:00', '2021-12-02 14:29:00', 'SO2', 369.71, 4.78, 12.89, 450.43, 369.877, 5.15, 12.91, 461.35, NULL, NULL),
(66, 1, 9, 1, '2021-12-02 15:30:00', '2021-12-02 15:59:00', 'SO2', 421.05, 4.64, 12.71, 506.16, 421.22, 5, 12.74, 518.34, NULL, NULL),
(67, 1, 10, 1, '2021-12-03 08:00:00', '2021-12-03 08:29:00', 'SO2', 485.01, 5.09, 11.94, 589.33, 485.22, 5.21, 12.09, 596.12, NULL, NULL),
(68, 1, 11, 1, '2021-12-03 09:30:00', '2021-12-03 09:59:00', 'SO2', 371.66, 5.4, 11.95, 460.89, 371.87, 5.52, 12.1, 466.34, NULL, NULL),
(69, 1, 12, 1, '2021-12-03 11:00:00', '2021-12-03 11:29:00', 'SO2', 367.53, 5.21, 12.28, 453.68, 367.74, 5.33, 12.43, 459, NULL, NULL),
(70, 1, 13, 1, '2021-12-03 12:30:00', '2021-12-03 12:59:00', 'SO2', 351.99, 4.67, 12.63, 423.28, 352.2, 4.79, 12.78, 428.16, NULL, NULL),
(71, 1, 14, 1, '2021-12-03 14:00:00', '2021-12-03 14:29:00', 'SO2', 326.56, 4.54, 12.51, 388.64, 326.77, 4.66, 12.66, 393.11, NULL, NULL),
(72, 1, 15, 1, '2021-12-03 15:30:00', '2021-12-03 15:59:00', 'SO2', 290.5, 4.58, 12.91, 349.64, 290.71, 4.7, 13.06, 353.7, NULL, NULL),
(73, 1, 16, 1, '2021-12-04 08:00:00', '2021-12-04 08:29:00', 'SO2', 363.39, 5.06, 11.95, 440.78, 363.67, 5.21, 12.14, 447.26, NULL, NULL),
(74, 1, 17, 1, '2021-12-04 09:30:00', '2021-12-04 09:59:00', 'SO2', 364.42, 5.13, 12.32, 447.88, 364.7, 5.28, 12.51, 454.49, NULL, NULL),
(75, 1, 18, 1, '2021-12-04 11:00:00', '2021-12-04 11:29:00', 'SO2', 368.47, 4.77, 12.37, 443.22, 368.75, 4.92, 12.56, 449.67, NULL, NULL),
(76, 1, 19, 1, '2021-12-04 12:30:00', '2021-12-04 12:59:00', 'SO2', 353.74, 5, 12.64, 434.28, 354.02, 5.15, 12.83, 440.68, NULL, NULL),
(77, 1, 20, 1, '2021-12-04 14:00:00', '2021-12-04 14:29:00', 'SO2', 374.56, 4.72, 12.35, 449.07, 374.84, 4.87, 12.54, 455.58, NULL, NULL),
(78, 1, 21, 1, '2021-12-04 15:30:00', '2021-12-04 15:59:00', 'SO2', 300.37, 7.27, 10.45, 409.58, 300.65, 7.42, 10.66, 416.28, NULL, NULL),
(79, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'NOx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 2, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `idno` int(11) NOT NULL,
  `idname` varchar(256) NOT NULL,
  `idcreated` date NOT NULL,
  `idpassword` varchar(256) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`idno`, `idname`, `idcreated`, `idpassword`, `created_at`, `updated_at`) VALUES
(1, 'Stack 1', '2020-03-12', 'stacking123', NULL, NULL),
(2, 'Chimney 1', '2021-08-02', 'chimneyman', NULL, NULL),
(4, 'Stack 3', '2022-07-15', 'stacking123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `entryno` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entries`
--
ALTER TABLE `entries`
  ADD CONSTRAINT `entries_FK_1` FOREIGN KEY (`idno`) REFERENCES `stations` (`idno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
