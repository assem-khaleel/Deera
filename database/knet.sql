-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2017 at 09:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deera`
--

-- --------------------------------------------------------

--
-- Table structure for table `knet`
--

CREATE TABLE `knet` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `PaymentID` varchar(255) DEFAULT NULL,
  `Result` varchar(255) DEFAULT NULL,
  `PostDate` varchar(255) DEFAULT NULL,
  `TranID` varchar(255) DEFAULT NULL,
  `Auth` varchar(255) DEFAULT NULL,
  `Ref` varchar(255) DEFAULT NULL,
  `TrackID` varchar(255) DEFAULT NULL,
  `UDF1` varchar(255) DEFAULT NULL,
  `UDF2` varchar(255) DEFAULT NULL,
  `UDF3` varchar(255) DEFAULT NULL,
  `UDF4` varchar(255) DEFAULT NULL,
  `UDF5` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `knet`
--

INSERT INTO `knet` (`id`, `payment_id`, `users_id`, `order_id`, `PaymentID`, `Result`, `PostDate`, `TranID`, `Auth`, `Ref`, `TrackID`, `UDF1`, `UDF2`, `UDF3`, `UDF4`, `UDF5`, `created_at`, `updated_at`) VALUES
(2, 0, 0, 0, '3073595081172210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-09 19:51:18', '2017-08-09 19:51:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knet`
--
ALTER TABLE `knet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knet`
--
ALTER TABLE `knet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
