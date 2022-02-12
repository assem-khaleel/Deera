-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `branch` int(11) NOT NULL,
  `Owner_first_name` varchar(255) DEFAULT NULL,
  `Owner_last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `available_payment` varchar(25) DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `address_en` varchar(255) DEFAULT NULL,
  `address_ar` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `min_amount` varchar(255) DEFAULT NULL,
  `expected_deliver_time` varchar(20) NOT NULL,
  `working_hour_from` varchar(20) DEFAULT NULL,
  `working_hour_to` varchar(20) DEFAULT NULL,
  `deliver_time_from` varchar(20) DEFAULT NULL,
  `deliver_time_to` varchar(20) DEFAULT NULL,
  `deliver_charge` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `show_menu` int(11) DEFAULT NULL,
  `order_accept_days` int(11) DEFAULT NULL,
  `offline_order` int(11) DEFAULT NULL,
  `summary_en` varchar(255) DEFAULT NULL,
  `summary_ar` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `commission_type` int(11) DEFAULT NULL,
  `discount_type` int(11) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  `follow_us` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `long` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `schedule_commission` double NOT NULL,
  `service_charge` double NOT NULL,
  `deliver_type` int(11) NOT NULL,
  `pickup_interval` double NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name_en`, `name_ar`, `branch`, `Owner_first_name`, `Owner_last_name`, `email`, `available_payment`, `telephone`, `address_en`, `address_ar`, `description_en`, `description_ar`, `status`, `min_amount`, `expected_deliver_time`, `working_hour_from`, `working_hour_to`, `deliver_time_from`, `deliver_time_to`, `deliver_charge`, `rating`, `show_menu`, `order_accept_days`, `offline_order`, `summary_en`, `summary_ar`, `url`, `img`, `commission_type`, `discount_type`, `discount`, `area_id`, `follow_us`, `notification`, `long`, `lat`, `schedule_commission`, `service_charge`, `deliver_type`, `pickup_interval`, `instagram`, `created_at`, `updated_at`) VALUES
(29, 'CAF Cafe', 'CAF Coffee', 0, 'Meshari', 'AlOud', 'mo@cafecaf.com ', 'KNET', '0', '', '', '', '', 1, '1.000', '', '07:00', '23:59', '07:00', '23:00', '0.500', 4, 1, 365, 0, '', '', 'www.cafecaf.com ', '/files/1969021600_1262488547logo (1).png', 1, 0, '', 4, 0, 1, '47.97740520000002', '29.375859', 0, 0.25, 2, 0, '', '2017-08-26 09:41:27', '2017-10-13 06:43:47'),
(30, 'Toby\'s Estate', 'Toby\'s Estate', 0, 'Mona', 'AlShaikh', 'Mona@robustakw.com', 'KNET', '96666601', '', '', '', '', 1, '1.000', '', '00:00', '23:59', '07:00', '23:00', '0', 5, 1, 365, 0, '', '', 'www.robustakw.com', '/files/672782871_383764905Tobys.jpg', 0, 0, '', 4, 0, 1, '35.86615210000002', '31.9589647', 0, 0.25, 2, 0, '', '2017-08-26 09:58:30', '2017-10-13 06:43:11'),
(31, 'Caribou Coffee', 'Caribou Coffee', 0, 'Hamad', 'AlSayer', 'sallyt@cariboucoffee-me.com ', 'KNET', '90035355', '', '', '', '', 0, '1.000', '', '07:00', '00:00', '07:00', '00:00', '0.500', 5, 1, 365, 0, '', '', 'www.cariboucoffee-me.com ', '/files/1926605472_1237380245Caribou.jpg', 0, 0, '', 4, 0, 1, '', '', 0, 0.25, 2, 0, '', '2017-08-26 10:04:30', '2017-10-08 11:48:06'),
(32, 'Richards Coffee Bar', 'Richards Coffee Bar', 0, 'Jarrah', 'AlBuloushi', 'jarrah@richardscoffeebar.com', 'KNET', '0', '', '', '', '', 1, '1.000', '', '01:00', '23:55', '01:00', '23:59', '0', 5, 1, 365, 0, '', '', '-', '/files/965649016_1561672360Richard.jpg', 0, 0, '', 4, 0, 1, '35.92837159999999', '31.9453666', 0, 0.25, 0, 0, '', '2017-08-26 10:07:37', '2017-11-27 20:46:34'),
(33, 'His Majesty The Coffee', 'His Majesty The Coffee', 0, 'Ahmad', 'AlJarki', '0', 'KNET', '96622211', '', '', '', '', 1, '1.000', '', '07:00', '22:00', '07:00', '15:00', '0', 3, 1, 365, 0, '', '', '0', '/files/233456681_1648973023HisMajesty.jpg', 0, 0, '', 4, 0, 1, '47.961298370529676', '29.333843231705476', 0, 0.25, 2, 0, '', '2017-08-26 10:13:42', '2017-10-13 06:45:12'),
(34, 'Jumo Coffee', 'Jumo Coffee', 0, 'Jumana', 'AlOthman', 'jumana@jumocoffee.com ', 'KNET', '99999052', '', '', '', '', 1, '1.000', '', '01:00', '23:55', '01:00', '23:55', '0', 5, 1, 365, 0, '', '', 'www.jumocoffee.com', '/files/1931101172_860414271Jumo.jpg', 0, 0, '', 4, 0, 1, '47.97740520000002', '29.375859', 0, 0.25, 2, 0, '', '2017-08-26 10:17:28', '2017-11-27 20:49:35'),
(50, 'Hamra Tower', 'Hamra Tower', 32, 'Jason', 'dsouza', 'jason@jason.com', 'kent', '54645464', '', '', '', '', 1, '1.000', '', '10:41', '10:41', '10:41', '10:41', '0.200', 0, 1, 365, 0, '', '', 'www.jason.com', '/files/965649016_1561672360Richard.jpg', 0, 0, '', 3, 0, 1, '47.98360760000003', '29.3784418', 0, 0.475, 2, 0, '', '2017-09-17 10:44:17', '2017-09-21 07:17:56'),
(52, 'Test coffee shop', NULL, 0, NULL, NULL, 'test@test.com', NULL, '12121212', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.gdgfd.com', NULL, NULL, NULL, NULL, 0, NULL, 1, '', '', 0, 0, 0, 0, 'ewrt', '2017-09-17 13:23:45', '2017-09-17 13:53:16'),
(53, 'Starbucks', NULL, 0, NULL, NULL, 'Ferhat@mawaqaa.com', NULL, '50000099', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dgcg', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'Gggh', '2017-09-19 11:05:17', '2017-09-19 11:05:17'),
(60, 'Cofe Express', NULL, 0, 'Ferhat Raj', NULL, 'ferhat@mawaqaa.com', NULL, '10010010', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.koipl.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'kopl', '2017-09-21 07:07:43', '2017-09-21 07:07:43'),
(61, 'Sunday cofe shop', NULL, 0, 'Mohammed', NULL, 'M.eid@mawaqaa.com', NULL, '55616416', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Www.test.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'Tttttt', '2017-09-23 12:20:55', '2017-09-23 12:20:55'),
(64, 'ousta', NULL, 0, 'test', NULL, 'eloustah@gmail.com', NULL, '1231231231232', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, 1, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 10:48:58', '2017-10-10 07:29:31'),
(65, 'ousta', NULL, 0, 'test', NULL, 'eloustah@gmail.com', NULL, '66666', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'qqweqwe.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:42:01', '2017-09-25 14:42:01'),
(66, 'ousta', NULL, 0, 'test', NULL, 'eloustah@gmail.com', NULL, '12321', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:43:13', '2017-09-25 14:43:13'),
(68, 'ousta', NULL, 0, 'test', NULL, 'taylorsuccessor@gmail.com', NULL, '123213', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:44:15', '2017-09-25 14:44:15'),
(69, 'ousta', NULL, 0, 'test', NULL, 'eloustah@gmail.com', NULL, '12312', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:45:38', '2017-09-25 14:45:38'),
(70, 'ousta', NULL, 0, 'test', NULL, 'eloustah@gmail.com', NULL, '2132131', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:49:12', '2017-09-25 14:49:12'),
(71, 'ousta', NULL, 0, 'test', NULL, 'eloustah@gmail.com', NULL, '123', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:51:56', '2017-09-25 14:51:56'),
(72, 'ousta', NULL, 0, 'test', NULL, 'eloustah@gmail.com', NULL, '123', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:53:04', '2017-09-25 14:53:04'),
(73, 'ousta', NULL, 0, 'aaa', NULL, 'taylorsuccessor@gmail.com', NULL, '123', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:54:19', '2017-09-25 14:54:19'),
(74, 'ousta', NULL, 0, 'test', NULL, 'eloustah@gmail.com', NULL, '123', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ousta', '2017-09-25 14:55:21', '2017-09-25 14:55:21'),
(85, 'Moonlight Coffee Shop', NULL, 0, 'Peter Michael', NULL, 'ferhat@mawaqaa.com', NULL, '10010010', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.moonlight.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, '@moonlight', '2017-09-26 05:59:05', '2017-09-26 05:59:05'),
(86, 'Sunlight', NULL, 0, 'Sun', NULL, 'Time@gsyshhs.com', NULL, '44444444', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Www.gshshs.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'Hsyss', '2017-09-26 06:02:17', '2017-09-26 06:02:17'),
(106, 'La terrasse', NULL, 0, 'Mohammad alblihis ', NULL, 'Malblihes@gmail.com', NULL, '9999278', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Laterrassekw ', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'Laterrassekw', '2017-10-08 10:13:14', '2017-10-08 10:13:14'),
(107, 'Society', NULL, 0, 'Jasem ', NULL, 'Jjalghanim@gmail.com', NULL, '99418666', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.donthaveawebsite.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, '@society.kw', '2017-10-08 16:53:19', '2017-10-08 16:53:19'),
(108, 'Aspro.Pro', NULL, 0, 'Mahmoud Koujan', NULL, 'mahmoudkoujan@gmail.com', NULL, '50078855', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.Aspro.Pro.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'Aspro.pro', '2017-10-10 06:44:19', '2017-10-10 06:44:19'),
(109, 'Aspro.Pro', NULL, 0, 'Mahmoud Koujan', NULL, 'mahmoudkoujan@gmail.com', NULL, '50078855', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.Aspro.Pro.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'Aspro.pro', '2017-10-10 06:44:29', '2017-10-10 06:44:29'),
(110, 'Aspro.Pro', NULL, 0, 'Mahmoud Koujan', NULL, 'mahmoudkoujan@gmail.com', NULL, '50078855', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.Aspro.Pro.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'Aspro.pro', '2017-10-10 06:44:41', '2017-10-10 06:44:41'),
(111, 'test sub 1', 'test sub 1', 64, 'omar', 'omar', 'omar', 'kent', 'omar', '', '-', '', '-', 0, '1', '20 min', '07:27', '07:27', '07:27', '07:27', '0.500', 0, 1, 365, 0, '', '', 'www.cofedistrict.com', '/files/1917513305_6247678681.jpg', 0, 0, '', 4, 0, 1, '', '', 0, 0.25, 0, 0, '', '2017-10-10 07:29:31', '2017-10-11 10:47:34'),
(112, 'Selection coffee ', NULL, 0, 'Abdulmohsen altuwaijri ', NULL, 'A_altuwaijrii@hotmail.com', NULL, '96700001', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://instagram.com/selection_coffee', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'Selection_coffee', '2017-10-10 17:09:24', '2017-10-10 17:09:24'),
(113, 'Caribou - Tamkeen', 'Caribou - Tamkeen', 0, 'Al Sayer', 'Franchising', 'sally@alsayerfranchising.com', 'kent', '-', '', '-', '', '-', 0, '0', '', '07:00', '21:00', '14:00', '14:00', '0', 0, 1, 365, 0, '', '-', 'www.caribou-me.com', '/files/128214452_1739801024caribou-logo.png', 0, 0, '', 4, 0, 1, '', '', 0, 0.25, 2, 0, '', '2017-10-11 14:04:37', '2017-10-12 07:07:39'),
(114, 'CAF - Tamkeen', 'CAF - Tamkeen', 0, 'Meshari', '-', '-', 'kent', '-', '', '', '', '', 0, '0', '', '07:00', '23:59', '14:09', '14:09', '0', 0, 1, 365, 0, '', '', 'www.cafcafe.com', '/files/1469090696_1233817718Caf.jpg', 0, 0, '', 4, 0, 0, '', '', 0, 0.25, 2, 0, '', '2017-10-11 14:11:44', '2017-10-11 20:20:14'),
(115, 'PAUSE FACTORY ', NULL, 0, 'Daniel', NULL, 'Daniel@pausefactory.com', NULL, '50190340', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pause factory.com', NULL, NULL, NULL, NULL, 0, NULL, 1, '', '', 0, 0, 0, 0, 'Pause.coffee', '2017-10-11 14:14:51', '2017-10-11 14:26:50'),
(117, 'Cozy Coffee House', NULL, 0, 'Mohamed ', NULL, 'cozycoffeehouse@gmail.com', NULL, '22923222', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cozy@cozycoffeehouse.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'cozycoffeehouse', '2017-10-12 12:03:45', '2017-10-12 12:03:45'),
(118, 'Cozy Coffee House', NULL, 0, 'Mohamed ', NULL, 'cozycoffeehouse@gmail.com', NULL, '22923222', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cozy@cozycoffeehouse', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'cozycoffeehouse', '2017-10-12 12:03:56', '2017-10-12 12:03:56'),
(119, 'Cozy Coffee House', NULL, 0, 'Mohamed ', NULL, 'cozycoffeehouse@gmail.com', NULL, '22923222', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cozycoffeehouse@gmail.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'cozycoffeehouse', '2017-10-12 12:04:20', '2017-10-12 12:04:20'),
(120, 'Cozy Coffee House', NULL, 0, 'Mohamed ', NULL, 'cozycoffeehouse@gmail.com', NULL, '22923222', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cozycoffeehouse@gmail.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'cozycoffeehouse', '2017-10-12 12:04:44', '2017-10-12 12:04:44'),
(121, 'Cozy Coffee House', NULL, 0, 'Mohamed ', NULL, 'Kazimmohammed95@gmail.com', NULL, '22923222', NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cozycoffeehouse@ymail.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'cozycoffeehouse', '2017-10-12 12:05:53', '2017-10-12 12:05:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_id` (`area_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
