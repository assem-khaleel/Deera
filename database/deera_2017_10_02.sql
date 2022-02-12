-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 09:22 AM
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
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'tPf97iNBjpypHyyhFSHE0TmgdzdcYEIw', 1, '2016-03-13 15:05:12', '2016-03-13 15:05:12', '2016-03-13 15:05:12'),
(2, 2, '4O7HxmHdDXLLhEL21DoxY8tVs9TLZ4hX', 1, '2016-03-13 15:05:12', '2016-03-13 15:05:12', '2016-03-13 15:05:12'),
(23, 3, 'chdb2kUrImQgiliEt5MX8tTyvMiGBLBe', 1, NULL, '2016-04-03 07:55:47', '2016-04-03 08:16:07'),
(25, 6, '57dzZka4R03hD9jDuHuNOVX5VylRkf74', 1, NULL, '2016-04-03 08:16:49', '2016-04-03 08:16:49'),
(26, 4, 'K89rkP0DWLxLRi3rJKS0XhRRNVX2JIwE', 1, NULL, '2016-04-03 12:41:10', '2016-04-03 12:41:10'),
(30, 10, 'ksg4G06PGLF3NnfEVW5JJpGfm0fUZLqn', 1, NULL, '2016-04-26 13:53:03', '2016-04-26 13:55:34'),
(31, 11, 'ZYHjAxNlKVz0e6G8KZTOXctzn9Xb6gSt', 1, NULL, '2016-04-27 12:49:08', '2016-04-27 12:49:08'),
(32, 12, 'djXW7VAbp6KE8pqLKYjqlmc6rJwmMUTC', 1, NULL, '2016-04-27 12:55:37', '2016-04-27 12:56:07'),
(33, 13, 'JL7avcoawOAvQ5Mr0V5lCPxSaMP17Mpl', 1, '2016-05-01 13:01:21', '2016-05-01 13:01:21', '2016-05-01 13:01:21'),
(35, 15, 'InxZVzKaU3ISzvLlpGJGHPMqcn4YCfr8', 1, '2016-05-01 13:04:34', '2016-05-01 13:04:34', '2016-05-01 13:04:34'),
(37, 16, 'Xo7d8vAk19k83eA2oUO76CTvQ7OtpqQh', 1, '2016-05-01 13:05:12', '2016-05-01 13:05:12', '2016-05-01 13:05:12'),
(39, 17, 'dBtdr8fpNtuGxJcEbPuNoiBXelOOD0cu', 1, '2016-05-01 13:11:23', '2016-05-01 13:11:23', '2016-05-01 13:11:23'),
(41, 18, 'gu5JQSd9ly0QPKu9MF2nCScxcO5uwGqw', 1, '2016-05-01 13:12:22', '2016-05-01 13:12:22', '2016-05-01 13:12:22'),
(43, 19, 'e8s2ZTZWQlJ7m3x86Dg3S8SWQlhmyFXs', 1, '2016-05-01 13:14:07', '2016-05-01 13:14:07', '2016-05-01 13:14:07'),
(45, 20, 'r4zLDah67AznM1zkVRhob3gNYb8XWwGj', 1, '2016-05-01 13:17:20', '2016-05-01 13:17:20', '2016-05-01 13:17:20'),
(47, 21, 'jZeoeqMEnecZbMhH0g9EcoMzZI2w12Nx', 1, '2016-05-01 13:22:34', '2016-05-01 13:22:34', '2016-05-01 13:22:34'),
(48, 22, 'Yd0eGosRjJYuJ9lHy4ctna7MAK39BSKP', 1, '2016-05-01 13:28:23', '2016-05-01 13:28:23', '2016-05-01 13:28:23'),
(49, 23, 'X7qlgmI7cob0pdXqr2f1o3qFj3zEFjOr', 1, '2016-05-01 13:28:54', '2016-05-01 13:28:54', '2016-05-01 13:28:54'),
(50, 24, 'U5FhTJHWeqZamLA4qIvinrRY0sL9mPHj', 1, '2016-05-01 13:29:13', '2016-05-01 13:29:13', '2016-05-01 13:29:13'),
(51, 25, 'uRUR8Q3XvmqnRqvmJm69qFbBhAPdEBCP', 1, '2016-05-01 13:33:39', '2016-05-01 13:33:39', '2016-05-01 13:33:39'),
(52, 26, 'cN1jWNfLjxDQWz9rLMkYwEtEFYp3LLeW', 1, '2016-05-01 13:35:54', '2016-05-01 13:35:54', '2016-05-01 13:35:54'),
(53, 27, 'xgwqIvjLxKELsidSPg0uM2sNa3zw4lvw', 1, '2016-05-01 13:46:24', '2016-05-01 13:46:24', '2016-05-01 13:46:24'),
(54, 28, 'fzq00Yn0KhGlDPWjiv7HMdm4hmVjANkV', 1, '2016-05-01 13:46:55', '2016-05-01 13:46:55', '2016-05-01 13:46:55'),
(55, 29, 'iYF6ubSG8fyz5NniBLInUg1lF7KHXf60', 1, '2016-05-01 13:48:29', '2016-05-01 13:48:29', '2016-05-01 13:48:29'),
(56, 30, 'l3PtmrpdwumRMeQRgaHBFF3S4YWRzJw2', 1, '2016-05-01 13:49:41', '2016-05-01 13:49:41', '2016-05-01 13:49:41'),
(57, 31, 'iXcg1CGDz0xpI79gVLBL7Wzox7a2JTqD', 1, '2016-05-01 13:49:57', '2016-05-01 13:49:57', '2016-05-01 13:49:57'),
(58, 33, 'DDTR4RWYbZbyofng0arphVdxtLiuCYAX', 1, '2016-05-01 13:50:38', '2016-05-01 13:50:38', '2016-05-01 13:50:38'),
(59, 34, 'CJyqUWfRqnw8m5IvjnkHH9X184x0f23m', 1, '2016-05-01 13:50:47', '2016-05-01 13:50:47', '2016-05-01 13:50:47'),
(60, 35, 'U3JoFYSltvlcPjSxoICUDq8539XvrDZr', 1, '2016-05-01 13:53:10', '2016-05-01 13:53:10', '2016-05-01 13:53:10'),
(61, 36, '8y3UDBBZ9XM1mKNfDqxYnM3yWzzfqToF', 1, '2016-05-01 13:53:16', '2016-05-01 13:53:16', '2016-05-01 13:53:16'),
(62, 37, '2uwyRggW8K149vkNmv85o4k48XpgiR7N', 1, '2016-05-01 13:53:24', '2016-05-01 13:53:24', '2016-05-01 13:53:25'),
(63, 38, '8OF6m4azklbXjFj3urnIuQQn6DOLbiBq', 1, '2016-05-01 14:02:28', '2016-05-01 14:02:28', '2016-05-01 14:02:28'),
(64, 39, 'EZEv82huie3moSmcqqMIax6iln5eJ8BH', 1, '2016-05-01 14:07:24', '2016-05-01 14:07:24', '2016-05-01 14:07:24'),
(65, 40, 'TvbzBY6gqenH5UEgbWrXEG1Axk2urAIy', 1, '2016-05-01 14:10:48', '2016-05-01 14:10:48', '2016-05-01 14:10:48'),
(66, 41, 'RtXiCeIVz09ytzStqY023by18zB6BOhb', 1, '2016-05-01 14:14:07', '2016-05-01 14:14:07', '2016-05-01 14:14:07'),
(67, 43, 'eTA27Hi37t5mWSl3Ka3e3a31NcPe5Rl3', 1, '2016-05-01 14:14:43', '2016-05-01 14:14:43', '2016-05-01 14:14:43'),
(68, 44, '77WN0Sh66exXZ4E54rPcRYPrr0KpG1OA', 1, '2016-05-01 14:17:26', '2016-05-01 14:17:26', '2016-05-01 14:17:26'),
(70, 45, 'uTRb0VX8JahSgMvxWUu7fzkWoBH7Lycs', 1, NULL, '2016-05-09 13:23:05', '2016-05-09 13:27:00'),
(71, 45, 'wrs1fyC19FkKjrpvbgCJtC0ctjiUsxO4', 1, NULL, '2016-05-09 13:23:43', '2016-05-09 13:27:00'),
(72, 45, 'JiUXEkVNrWDJtlpjNAwQz21gbdIEQwb6', 1, NULL, '2016-05-09 13:24:05', '2016-05-09 13:27:00'),
(73, 45, 'gWuhzk8QyEB0X8GEYf9NGbR6esvHHMjQ', 1, NULL, '2016-05-09 13:24:10', '2016-05-09 13:27:00'),
(74, 45, 'Xv1uHKiw6b6Y6X1WBTPf73OQGubT7PU1', 1, NULL, '2016-05-09 13:26:08', '2016-05-09 13:27:00'),
(75, 45, '0P46UgZnXMMjBfVGbfxuBxyUEEMaN5I2', 1, NULL, '2016-05-09 13:27:00', '2016-05-09 13:27:00'),
(76, 5, 'x3heK3iakXcXlZF4Xk989NazxUZlB7Qr', 1, NULL, '2016-05-09 13:30:32', '2016-05-10 08:02:59'),
(80, 5, 'jpnafXF4sQiWF3Yo8G8tG43WilQnoRSs', 1, NULL, '2016-05-10 07:40:20', '2016-05-10 08:02:59'),
(81, 5, 'PH8aZpg0qdOCl6zepqnCVYJQrSxRMKHH', 1, NULL, '2016-05-10 07:40:56', '2016-05-10 08:02:59'),
(82, 5, 'POcB9yg27dHcXxpcGRp7pGShvamZ0QC4', 1, NULL, '2016-05-10 07:42:06', '2016-05-10 08:02:59'),
(83, 5, 'EQQQWRy6cCMj1y5SyZnGq2nO8HqkRCkg', 1, NULL, '2016-05-10 07:42:13', '2016-05-10 08:02:59'),
(84, 5, 'sRlYuLe6tKqteVqizO1jgyXh7YePOXr3', 1, NULL, '2016-05-10 07:42:43', '2016-05-10 08:02:59'),
(85, 5, 'uguqiwaqkHArF11sjiNBfJwVYGPnHX0A', 1, NULL, '2016-05-10 07:42:50', '2016-05-10 08:02:59'),
(86, 5, '4dawz9kr7raOCRSGsF7YdFANR91OvJJS', 1, NULL, '2016-05-10 07:51:52', '2016-05-10 08:02:59'),
(87, 5, '5sxywo700I4oqTaAd3iKw0E2qEjFryiV', 1, NULL, '2016-05-10 08:02:59', '2016-05-10 08:02:59'),
(98, 56, 'XfYSBKjmBD7Ec4OFWYowrTsVrl1pfTcx', 1, '2016-05-10 11:17:02', '2016-05-10 11:16:41', '2016-05-10 11:17:02'),
(99, 57, 'uUm4a9wADTtMtNisGzMgVQZ0V6nLL70h', 1, '2016-05-10 11:21:37', '2016-05-10 11:21:28', '2016-05-10 11:21:37'),
(100, 58, '6ZjLlnSSJF73I4LLIQLMjYNNqSFyVMJD', 1, '2016-05-10 11:24:31', '2016-05-10 11:24:26', '2016-05-10 11:24:31'),
(101, 59, 'x9mugFlJyzVLjhBDMKfkGXw1w1a70ZoA', 1, '2016-05-10 11:40:07', '2016-05-10 11:39:27', '2016-05-10 11:40:07'),
(102, 60, 'ScFgUNVZynEA7BGbAd7WkwDpmjV86P1r', 1, '2016-05-10 12:00:58', '2016-05-10 11:59:33', '2016-05-10 12:00:58'),
(103, 60, 'bOhFo8rWZ0i15ZKZzC4dDl7J6q6JrTXh', 1, '2016-05-10 12:02:03', '2016-05-10 12:01:42', '2016-05-10 12:02:03'),
(104, 60, '1EM3JYVSW4vytTf6qKeCbRXUeXAvn6bl', 1, '2016-05-10 12:12:18', '2016-05-10 12:02:48', '2016-05-10 12:12:18'),
(116, 60, 'eOHrp2koznt9hn7ge6NNU2BgKcvTu4m3', 1, '2016-05-10 12:14:22', '2016-05-10 12:14:10', '2016-05-10 12:14:22'),
(118, 62, '34pbdVIYpKmxvRTMljIDwKVFwWqLM8mt', 1, '2016-05-10 12:17:35', '2016-05-10 12:17:20', '2016-05-10 12:17:35'),
(120, 64, 'fyw73k63hp6oYd0vABNFAn0lrvJ35w9M', 1, NULL, '2016-05-24 08:38:45', '2016-05-24 08:44:09'),
(125, 69, 'TUsfohei0PSGpv7MmPD4WES9BX120Kqq', 1, '2016-05-29 11:37:44', '2016-05-29 11:33:21', '2016-05-29 11:37:44'),
(128, 72, '6M6iQ2QfDwEMWhPtc0QR4w4Fz1yyf82d', 1, '2016-06-12 12:37:46', '2016-06-12 12:37:46', '2016-06-12 12:37:46'),
(129, 73, 'U5vlzNBZdYVeLw6gIiE8tkNkeqL8tU3w', 1, '2016-06-12 12:46:27', '2016-06-12 12:46:27', '2016-06-12 12:46:27'),
(130, 74, 'iHXJ6mn79U2onVb7dmWdle8m2Zgehbnh', 1, '2016-06-12 12:53:44', '2016-06-12 12:53:44', '2016-06-12 12:53:44'),
(131, 75, 'bc7fvcDm2DoDFfe22sp8VmOSNndjVA2F', 1, '2016-06-13 08:59:23', '2016-06-13 08:59:23', '2016-06-13 08:59:23'),
(132, 76, 'j71eRD7aCsLqC8WSDEzPZU7em7NQeUld', 1, '2016-07-04 12:40:10', '2016-07-04 12:40:10', '2016-07-04 12:40:10'),
(133, 77, 'dFq3fmww1UUSd2mpGsqlgb1Psv6VgrXg', 1, '2016-07-04 12:57:23', '2016-07-04 12:57:23', '2016-07-04 12:57:23'),
(134, 76, '5uYLkdC5YVEsVWlTfvLP2HgKEQm3g3fP', 1, '2016-12-27 12:38:50', '2016-12-27 12:38:50', '2016-12-27 12:38:50'),
(135, 71, 'dBQWDYKSVBRAQT0wo0VkDKFiud244Paz', 1, NULL, '2017-01-03 10:40:18', '2017-01-03 10:40:18'),
(136, 70, 'Q6rTcjEEk3q56MtdZVhiYG1FfTN0giBb', 1, NULL, '2017-01-03 10:45:30', '2017-01-03 10:45:30'),
(137, 68, 'wtcbpSv7h1zA36jrIkOuenJF5mRhxeL0', 1, NULL, '2017-01-03 11:12:01', '2017-01-03 11:12:01'),
(138, 77, 'WJsOOtOGwC8jDmrrhMkV8M7S1ih2hjEX', 1, '2017-03-22 03:59:04', '2017-03-22 03:59:04', '2017-03-22 03:59:04'),
(139, 78, '0Uz4S5jyRmRWYukKZsw3Yw5jblsp1cgn', 1, '2017-03-22 21:43:26', '2017-03-22 21:43:26', '2017-03-22 21:43:26'),
(140, 79, '5Xr87r2OzNQIoiQrMwUOM5MkAsQSk1yi', 1, '2017-03-22 21:54:59', '2017-03-22 21:54:59', '2017-03-22 21:54:59'),
(141, 80, 'RYxgasRve41DM8s6mhOS3PPCXnRgRTy2', 1, '2017-03-22 21:55:47', '2017-03-22 21:55:47', '2017-03-22 21:55:47'),
(142, 81, 'SjBZa3jgXtrysKb3gSQbdkxD9wbmxmtW', 1, '2017-03-22 21:58:12', '2017-03-22 21:58:12', '2017-03-22 21:58:12'),
(143, 82, 'nucioEkxUEoXR6OclmMyOhGgFclU3M5L', 1, '2017-05-20 12:18:06', '2017-05-20 12:18:06', '2017-05-20 12:18:06'),
(144, 89, 'CFlWDVoLtA3t6IhXwVUs4qqk3yR8Mt29', 1, '2017-05-22 09:22:12', '2017-05-22 09:22:12', '2017-05-22 09:22:12'),
(145, 90, 'QOP3ICrzIWfqX1UklmheshfwnnPOxJH7', 1, '2017-05-23 04:55:32', '2017-05-23 04:55:32', '2017-05-23 04:55:32'),
(146, 91, '2vUHtW1GViGgVIpmrq93s4niCagOG0lZ', 1, '2017-05-23 04:57:03', '2017-05-23 04:57:03', '2017-05-23 04:57:03'),
(147, 92, 'd1O7Y0YZlIuM9zC9O7bZrEaPoJ4qcTAZ', 1, '2017-05-23 04:58:10', '2017-05-23 04:58:10', '2017-05-23 04:58:10'),
(148, 93, 'loKY7uWSOQwtM1yuAHAU9byWreAbyZ1y', 1, '2017-05-26 13:40:50', '2017-05-26 13:40:50', '2017-05-26 13:40:50'),
(149, 94, 'anLMmvo5WHME6rP54BjsevFN4iZuhNnN', 1, '2017-06-03 15:19:33', '2017-06-03 15:19:33', '2017-06-03 15:19:33'),
(150, 95, '24paPJ7Tk4M7wnnGwadv6r7njlGOM8ro', 1, '2017-06-03 17:41:35', '2017-06-03 17:41:35', '2017-06-03 17:41:35'),
(151, 96, 'qex2G3hIG6SfEyDIcX0bqeuNhAktACdl', 1, '2017-06-06 06:39:22', '2017-06-06 06:39:22', '2017-06-06 06:39:22'),
(153, 97, 'TY7rOfvkqB1XC9sLlOiMLtSo4mdJOTVj', 1, '2017-06-07 09:39:51', '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(154, 98, '5XfshfSLacxUOuECANEKXGWYsUmW9qjm', 1, '2017-06-07 10:04:00', '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(155, 99, 'RjZ9ElDLhh8wMdklRXwROhu0FxJmh3Ad', 1, '2017-06-07 10:05:27', '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(156, 100, '9JLz6N3Bo2TgsaYEEeVAWK6XxDqJTlKi', 1, '2017-06-08 06:34:31', '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(157, 101, 'LBzlZtY45pUKycqZfRnV1eKPN7upMPyq', 1, '2017-06-11 06:41:14', '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(158, 102, '7ZqXfnHgbw2CWqeo8IYJlRQAAvbgjECA', 1, '2017-06-11 07:58:45', '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(159, 103, 'okDLtD72yiCRRdWONtRzwdPhoD1q8ORl', 1, '2017-06-11 10:41:58', '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(160, 104, '6Krnaad3iZp7WKjB99hGBmXs0pOd0azp', 1, '2017-06-15 06:45:35', '2017-06-15 06:45:35', '2017-06-15 06:45:35'),
(161, 105, 't7SfjCSIEG8aUNHXDSiw6AS1a7skH5A6', 1, '2017-06-15 20:49:29', '2017-06-15 20:49:29', '2017-06-15 20:49:29'),
(162, 106, '4fVkvJFsS2Qei6f6dagH91TafJu00Myh', 1, '2017-06-19 18:51:22', '2017-06-19 18:51:22', '2017-06-19 18:51:22'),
(163, 107, 'W9JYh66nDv9nzhdAbkhEhGIf1YJ3zYyO', 1, '2017-06-19 18:54:44', '2017-06-19 18:54:44', '2017-06-19 18:54:44'),
(164, 108, 'Hcay8dAjV4jIs4BKaMtmMBwUdZkg7ZMS', 1, '2017-06-21 08:50:28', '2017-06-21 08:50:28', '2017-06-21 08:50:28'),
(165, 109, '16bvRdaq0JStMOlJV7g32TwdMEgTpc9E', 1, '2017-07-02 10:36:37', '2017-07-02 10:36:37', '2017-07-02 10:36:37'),
(166, 110, 'BdQM7fYhqFSzR36h7AdUhvxrRVUwDBFd', 1, '2017-07-02 12:43:19', '2017-07-02 12:43:19', '2017-07-02 12:43:19'),
(167, 111, '7HPHwuO3eKDUqAYHzw1avQafcBa8oNeU', 1, '2017-07-02 12:47:37', '2017-07-02 12:47:37', '2017-07-02 12:47:37'),
(168, 115, 'c1pQPFJgQ82wQCPIS1cNJvFRIZj1TYhk', 1, '2017-07-02 13:30:01', '2017-07-02 13:30:01', '2017-07-02 13:30:01'),
(169, 116, 'on72QT3NZcAwKlJ7MLvp8ileQlvR86tc', 1, '2017-07-02 13:33:13', '2017-07-02 13:33:13', '2017-07-02 13:33:13'),
(170, 117, 'L8hpxZjzeKuWXDhhOAmcVR5KVGz6fQES', 1, '2017-07-02 13:37:16', '2017-07-02 13:37:16', '2017-07-02 13:37:16'),
(171, 118, 'NgtnWcq5gkHnRQh22Hd2ulUrvAWMDdq7', 1, '2017-07-03 02:11:10', '2017-07-03 02:11:10', '2017-07-03 02:11:10'),
(172, 119, 'SXnzl2ypkpgf404KPsUp54Q2IlMufoEe', 1, '2017-07-03 02:17:53', '2017-07-03 02:17:53', '2017-07-03 02:17:53'),
(173, 120, '1vMeXHJQX7ABUIUDTVcSv9VRieXqDzEC', 1, '2017-07-03 02:19:42', '2017-07-03 02:19:42', '2017-07-03 02:19:42'),
(174, 121, 'nwmrRIYTEuEftrI5XyYZ9YS5d6cHm4pz', 1, '2017-07-19 04:27:06', '2017-07-19 04:27:06', '2017-07-19 04:27:06'),
(175, 122, 'BKSVflYoQIUZ9uSqX4AExkd2NgeyYvD6', 1, '2017-07-19 04:28:38', '2017-07-19 04:28:38', '2017-07-19 04:28:38'),
(176, 123, 'INQYnn6nYqQZQ1Dei4XVfonzMu3r4LIA', 1, '2017-07-19 04:29:29', '2017-07-19 04:29:29', '2017-07-19 04:29:29'),
(177, 124, 'U4Qx1idXBszDQ5kldPXzDoC1riD5cpaf', 1, '2017-07-19 10:15:48', '2017-07-19 10:15:48', '2017-07-19 10:15:48'),
(178, 125, 'qbT813DWAEF5cOVQcbOucG7A475cduFN', 1, '2017-07-20 04:05:14', '2017-07-20 04:05:14', '2017-07-20 04:05:14'),
(179, 126, 'kBFEZ1jl0HBvQL5gKyNRgIvDmSA2zzgh', 1, '2017-07-20 10:23:03', '2017-07-20 10:23:03', '2017-07-20 10:23:03'),
(180, 127, 'gU7zWZE8LIhguvw0X6y76kiN0tetfddY', 1, '2017-07-23 06:47:44', '2017-07-23 06:47:44', '2017-07-23 06:47:44'),
(181, 128, 'dVfsUopBvX7nUmcydMk0dIZZXVXJWOZG', 1, '2017-07-23 06:54:12', '2017-07-23 06:54:12', '2017-07-23 06:54:12'),
(182, 129, '1JGqvIVqvQUpiq8aWM6cIPdMlmtoUt2m', 1, '2017-07-23 07:00:43', '2017-07-23 07:00:43', '2017-07-23 07:00:43'),
(183, 130, '1YLQBgYGRoo1zUQcFzqpjtCacT8IdpfD', 1, '2017-07-23 07:01:22', '2017-07-23 07:01:22', '2017-07-23 07:01:22'),
(184, 131, 'zmKrRtQ6Fy0vHXVnwF9U7R3m40XKq2e6', 1, '2017-07-23 07:33:10', '2017-07-23 07:33:10', '2017-07-23 07:33:10'),
(185, 132, 'boulNEjtYXAbmhPFiTmQZeyxspRmUvEI', 1, '2017-07-24 03:33:36', '2017-07-24 03:33:36', '2017-07-24 03:33:36'),
(186, 133, 'ozjfKd8UrYjm2mBCt5r1pZEGXIEwfrV5', 1, '2017-07-24 04:41:59', '2017-07-24 04:41:59', '2017-07-24 04:41:59'),
(187, 134, 'ObzgqbAfF9xeRg9MsVmKvmuNau4B8Gd2', 1, '2017-07-24 04:57:44', '2017-07-24 04:57:44', '2017-07-24 04:57:44'),
(188, 135, 'jfoDqU5XLKt8InrtDST3dsjbiPmkRsU9', 1, '2017-07-24 05:00:45', '2017-07-24 05:00:45', '2017-07-24 05:00:45'),
(189, 136, 'pf9DzWgq4lznpVvotgEAhFP6CzSUKos1', 1, '2017-07-25 02:59:47', '2017-07-25 02:59:47', '2017-07-25 02:59:47'),
(190, 137, '4FXIJVfFZ46p7jUwhO6GmONA8RYApjCW', 1, '2017-07-25 03:08:20', '2017-07-25 03:08:20', '2017-07-25 03:08:20'),
(191, 138, 'RBINXBGZnvkrmgfFXoWwSbEecgAn8qH6', 1, '2017-07-25 05:33:51', '2017-07-25 05:33:51', '2017-07-25 05:33:51'),
(192, 139, 'PZ1QxOyuHe8R5eY8XQqol3yWt1GRPfM7', 1, '2017-07-25 05:43:39', '2017-07-25 05:43:39', '2017-07-25 05:43:39'),
(193, 140, 'Jg4tN1iSIvjMY2Gm1Fk4XwZgNBjnGkAD', 1, '2017-07-25 08:43:08', '2017-07-25 08:43:08', '2017-07-25 08:43:08'),
(194, 141, 'PzWeEJMFm5wGRhJB7wuAuI0L5wUOtphi', 1, '2017-07-25 09:16:36', '2017-07-25 09:16:36', '2017-07-25 09:16:36'),
(195, 142, 'ubX9EX8wpgXKXd2mtYJcg8lXSFfm4lMN', 1, '2017-07-25 14:46:23', '2017-07-25 14:46:23', '2017-07-25 14:46:23'),
(196, 143, 'v1gooR2nADO6Uydgtn4oZ12BqTd7JCq9', 1, '2017-07-26 07:25:14', '2017-07-26 07:25:14', '2017-07-26 07:25:14'),
(197, 144, 'AdlsQ1QWi4J4l5pe88xamKFS402zXeXk', 1, '2017-07-26 07:29:10', '2017-07-26 07:29:10', '2017-07-26 07:29:10'),
(198, 145, 'iFC8iQ4O0pW480IoxJT9D17Es1kcXEUM', 1, '2017-07-28 03:12:23', '2017-07-28 03:12:23', '2017-07-28 03:12:23'),
(199, 146, '85vMQDa282PH1ps7WX0Ym47bR4JzSujG', 1, '2017-07-28 03:20:11', '2017-07-28 03:20:11', '2017-07-28 03:20:11'),
(200, 147, 'alRmAkwEaxd58tyq0mKGHHBMHlF44BqF', 1, '2017-07-28 10:18:12', '2017-07-28 10:18:12', '2017-07-28 10:18:12'),
(201, 148, 'DSyfb7iwT600Dg6vXbCL9NymGZhWDMTZ', 1, '2017-07-28 15:55:25', '2017-07-28 15:55:25', '2017-07-28 15:55:25'),
(202, 149, 'HjuL5zd5hJN5qGoHKSvz3rCyTxuLPfu9', 1, '2017-07-28 16:03:42', '2017-07-28 16:03:42', '2017-07-28 16:03:42'),
(203, 150, 'b9zSVQ7nUGUEoaZ0pDitvSyqEuGEoTBq', 1, '2017-07-28 16:21:53', '2017-07-28 16:21:53', '2017-07-28 16:21:53'),
(204, 151, 'fxtz8S4zQJkzPzUABSnMrRQQ2P2N4DE3', 1, '2017-07-28 17:01:34', '2017-07-28 17:01:34', '2017-07-28 17:01:34'),
(205, 152, '44QHP9CEjJafquvo1oDMXP7yLXp8TSYM', 1, '2017-07-28 17:03:01', '2017-07-28 17:03:01', '2017-07-28 17:03:01'),
(206, 153, 'k6szc4oGUgPXLZH8lRTQKyqK2bjK5GZj', 1, '2017-07-28 17:22:55', '2017-07-28 17:22:55', '2017-07-28 17:22:55'),
(207, 154, 'Y32kRc1zbYCh4AxbEpI5Tmv6MBH4yJpg', 1, '2017-07-29 04:00:55', '2017-07-29 04:00:55', '2017-07-29 04:00:55'),
(208, 155, 'aAkfYsOowDyEpEi8T5qIKDowsiJI75hs', 1, '2017-07-29 04:21:54', '2017-07-29 04:21:54', '2017-07-29 04:21:54'),
(209, 156, 'dgZXL07tmuYe0StIBWYDAbZQZG6HCk4V', 1, '2017-07-29 10:32:47', '2017-07-29 10:32:47', '2017-07-29 10:32:47'),
(210, 157, 'HQ0ltZJ5IHdOCM90qW0Pkq253UsGzKPr', 1, '2017-07-29 10:34:28', '2017-07-29 10:34:28', '2017-07-29 10:34:28'),
(211, 158, 'xSHr5MkuMVLSGD7dVCR3HgegqYXn5MRI', 1, '2017-07-29 10:35:14', '2017-07-29 10:35:14', '2017-07-29 10:35:14'),
(212, 159, 'BonCmm2hj09gNjll7dY3crAVRhBf7pYy', 1, '2017-07-29 10:36:20', '2017-07-29 10:36:20', '2017-07-29 10:36:20'),
(213, 160, 'ffSiOirjCl3ZHzUhHIs7Vs15h7KxUTyk', 1, '2017-07-29 11:29:26', '2017-07-29 11:29:26', '2017-07-29 11:29:26'),
(214, 161, 'qMsS5hzKRJOeq4HryzyDc3VMzDAznVBp', 1, '2017-08-02 03:02:23', '2017-08-02 03:02:23', '2017-08-02 03:02:23'),
(215, 162, 'TDrhYuqbbyYzg1OfwNEm3CqIuY7b7CkU', 1, '2017-08-06 10:46:39', '2017-08-06 10:46:39', '2017-08-06 10:46:39'),
(216, 163, 'wuDexVHn0uT4NUGzh9wtUe8605s59fQO', 1, '2017-08-07 02:30:29', '2017-08-07 02:30:29', '2017-08-07 02:30:29'),
(217, 164, 'B1wtniWcnUbI5khbiwQ2SLwwQsy6qmEH', 1, '2017-08-07 05:47:30', '2017-08-07 05:47:30', '2017-08-07 05:47:30'),
(218, 165, 'yLHZ6UW1eSULLE2FJfxSpa0sTc57jg77', 1, '2017-08-14 02:40:18', '2017-08-14 02:40:18', '2017-08-14 02:40:18'),
(219, 166, 'pLwveTDHDQFF9CzwH65bMB15yuvDjR33', 1, '2017-08-22 08:23:47', '2017-08-22 08:23:47', '2017-08-22 08:23:47'),
(220, 167, 'XNggTWhZiz4Ank04cIjTLnOcICj2X0GJ', 1, '2017-08-22 08:24:00', '2017-08-22 08:24:00', '2017-08-22 08:24:00'),
(221, 168, 'WR6o2MPk3dhopnYERySgH2UDnQsm7J32', 1, '2017-09-10 04:05:55', '2017-09-10 04:05:55', '2017-09-10 04:05:55'),
(222, 169, 'OJ8nprzGaRwTiEMYun2MF2Q9sqHLG0wr', 1, '2017-09-10 04:44:04', '2017-09-10 04:44:04', '2017-09-10 04:44:04'),
(223, 170, 'HujKexA6w2B86ymUNzFa169Hy06eW93b', 1, '2017-09-10 04:51:26', '2017-09-10 04:51:26', '2017-09-10 04:51:26'),
(224, 171, 'aqSEuR1gWWoREKlM5Hyx6h0Rwkbp69DO', 1, '2017-09-10 04:52:18', '2017-09-10 04:52:18', '2017-09-10 04:52:18'),
(225, 172, 't8viGte4ZM5HcVpHnA61mjJKYLqbgNsl', 1, '2017-09-10 04:55:37', '2017-09-10 04:55:37', '2017-09-10 04:55:37'),
(226, 173, 'PauwSMQXDcfL6chjkl2GEQz4hVCqPHH1', 1, '2017-09-10 08:19:07', '2017-09-10 08:19:07', '2017-09-10 08:19:07'),
(227, 174, 'Rvqxf0gKj5QXrArLwnN0hxEkPb5E0CRr', 1, '2017-09-10 08:51:01', '2017-09-10 08:51:01', '2017-09-10 08:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `paci_number` varchar(20) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `judda` varchar(255) DEFAULT NULL,
  `avenue` varchar(255) DEFAULT NULL,
  `building` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `apartment_number` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `long` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `directions` varchar(255) DEFAULT NULL,
  `default` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `users_id`, `area_id`, `name`, `type`, `first_name`, `last_name`, `paci_number`, `block`, `street`, `judda`, `avenue`, `building`, `floor`, `apartment_number`, `mobile`, `phone`, `long`, `lat`, `directions`, `default`, `notification`, `created_at`, `updated_at`) VALUES
(2, 0, 3, 'city address', 0, 'asdf', 'ksjdf', 'asdf', 'lkjsdf', 'lkjdsf', NULL, 'kjldsf', 'lk', 'lkj', 'lkj', 'sdkfj', 'jksdf', '35.91526794', '31.91265266', '', NULL, NULL, '2017-05-22 10:50:54', '2017-05-22 10:50:54'),
(3, 0, 3, 'ksdjf', 0, 'admin', 'adin', 'sdklfj', 'kjsdf', 'klsjdf', NULL, 'kjdfs', 'jklsdf', 'lkjsdf', 'lkjkjsdf', '234324', '234234', '35.92556762', '31.91381837', 'kjfsdf', NULL, NULL, '2017-05-22 11:15:58', '2017-05-22 11:15:58'),
(4, 89, 3, 'yousif', 0, 'aslkdfj', 'skldfj', 'skdflj', 'slkjdf', 'kljsdf', NULL, 'kjlsdf', 'kljdsf', 'kljsdf', 'lkjsdf', '23443', '234', '35.93380737', '31.92897136', 'slkdfj', NULL, NULL, '2017-05-22 12:22:12', '2017-05-22 12:22:12'),
(5, 92, 3, 'vacation address ', 0, 'rrrrrr', 'rrrrrr', 'rrrrrr', 'rrrrrr', 'rrrrrr', NULL, 'rrrrrr', 'rrrrrr', 'rrrrrr', 'rrrrrr', '34534345', '3534534', '35.94136047', '31.94179116', 'sddddddddddddd', NULL, NULL, '2017-05-23 07:58:10', '2017-05-23 07:58:10'),
(6, 82, 5, 'home address', 0, NULL, NULL, '', '23', 'sdf', NULL, 'sdf', 'sdfg', 'sdfg', 'sfg', '96', '5465', '35.94410705', '31.96393025', 'sdfg', NULL, NULL, '2017-05-23 19:48:24', '2017-07-10 08:56:48'),
(7, 82, 5, 'third address', 0, NULL, NULL, NULL, '23', 'sdf', NULL, 'sdf', 'sdfg', 'sdfg', 'sfg', '98686', '543', '35.95646667', '31.94645247', 'sdfg', NULL, NULL, '2017-05-23 19:49:11', '2017-07-10 08:56:32'),
(8, 93, 3, 'last address', 0, 'sdf', 'sdf', 'sdf', 'sfd', 'sdf', NULL, 'safd', 'asfd', 'sg', 'sadf', '234', '24234', '35.94960022', '31.96626037', 'sdf', NULL, NULL, '2017-05-26 16:40:50', '2017-05-26 16:40:50'),
(9, 82, 3, 'address2', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.91732788', '31.95227876', 'hgjh', NULL, NULL, '2017-05-26 17:41:43', '2017-05-26 17:41:43'),
(10, 82, 3, 'sdfgs', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.90153503', '31.96334771', 'hgjh', NULL, NULL, '2017-05-26 20:45:42', '2017-05-26 20:45:42'),
(11, 82, 3, 'address 1', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.88642883', '31.95402658', 'hgjh', NULL, NULL, '2017-05-26 21:26:23', '2017-05-26 21:26:23'),
(12, 82, 3, 'demo 1', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.89741516', '31.93305058', 'hgjh', NULL, NULL, '2017-05-26 21:27:00', '2017-05-26 21:27:00'),
(13, 82, 3, 'address now', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.90192557', '31.9590672', 'hgjh', NULL, NULL, '2017-05-26 21:27:25', '2017-05-26 21:27:25'),
(14, 82, 3, 'new address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.90261221', '31.96256254', 'hgjh', NULL, NULL, '2017-05-26 21:28:08', '2017-06-03 17:33:31'),
(15, 95, 3, 'demo', 0, NULL, NULL, 'dsf', 'dsf', 'hkjh', NULL, 'hk', 'jhj', 'hjh', 'hkjh', '976', '8768768', '35.90947867', '31.95498913', 'dsf', NULL, NULL, '2017-06-03 21:06:16', '2017-06-03 21:06:16'),
(16, 95, 3, 'demo', 0, NULL, NULL, 'dsf', 'dsf', 'hkjh', NULL, 'hk', 'jhj', 'hjh', 'hkjh', '976', '8768768', '35.91085196', '31.96197999', 'dsf', NULL, NULL, '2017-06-03 21:06:46', '2017-06-03 21:06:46'),
(17, 82, 3, 'salim address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.91840506', '31.98178455', 'hgjh', NULL, NULL, '2017-06-07 13:43:22', '2017-06-07 13:43:22'),
(18, 82, 3, 'shamiya address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.90055228', '31.97945482', 'hgjh', NULL, NULL, '2017-06-07 20:10:22', '2017-06-07 20:10:22'),
(19, 82, 7, 'shamiya address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.89437247', '31.98586143', 'hgjh', NULL, NULL, '2017-06-07 20:10:56', '2017-06-07 20:10:56'),
(20, 82, 6, 'khaldiya address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.88063956', '31.98586143', 'hgjh', NULL, NULL, '2017-06-07 20:33:52', '2017-06-07 20:33:52'),
(23, 82, 4, 'kuwait city address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.86141348', '31.97013533', 'hgjh', NULL, NULL, '2017-06-07 20:59:35', '2017-06-07 20:59:35'),
(26, 82, 5, 'kaifan address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.83669424', '31.95557172', 'hgjh', NULL, NULL, '2017-06-07 21:15:22', '2017-06-07 21:15:22'),
(27, 82, 3, 'shuwaikh address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-06-07 21:22:22', '2017-06-07 21:22:22'),
(28, 91, 5, 'كيفان أدرس ', 0, 'sd', 'vdsfv', '2424', 'المجمع', 'الشارع', 'sdc', 'الجادة', 'البناء', 'الطابق', '43', '28472394', '28492834', '47.97720868786621', '29.27966221534416', 'إضافي', 0, 0, '2017-06-15 09:50:57', '2017-06-15 22:43:26'),
(29, 108, 3, 'address 1', NULL, NULL, NULL, 'kjn', 'iojoi', 'joi', NULL, 'joij', 'oij', 'jkjh', 'iuhi', 'asdfkj', '9697', '47.977294921875', '29.257648503615542', 'kn', NULL, NULL, '2017-06-21 11:59:38', '2017-06-21 11:59:38'),
(30, 82, 4, 'new addresss', NULL, NULL, NULL, '24234', 'skdfj', 'lkj', NULL, 'jlkj', 'lkjl', 'kjlk', 'jlkj', '22443', '3453434', '35.86615210000002', '31.9589647', 'lk', NULL, NULL, '2017-06-22 11:24:16', '2017-06-22 11:24:16'),
(31, 82, 5, 'asdfdfs', NULL, NULL, NULL, '', 'kjsdf', 'lkjsdfj', NULL, 'kljsdf', 'kljslkdf', 'jlksdf', 'qlkjldfg', 'dfsadf', '3434', '35.86615210000002', '31.9589647', 'lkdfg', NULL, NULL, '2017-06-22 11:28:40', '2017-06-22 11:28:40'),
(32, 82, 4, 'iojoj', NULL, NULL, NULL, '2343', 'lkj', 'lkjlk', NULL, 'jlk', 'jlk', 'jlkj', 'lkjlk', '24234', '324234', '35.86615210000002', '31.9589647', 'lkjlk', NULL, NULL, '2017-06-22 11:31:48', '2017-06-22 11:31:48'),
(33, 82, 4, 'myaddress at kuwait', NULL, NULL, NULL, '234', 'klsdf', 'lkj', NULL, 'lkjlk', 'jlkj', 'lkj', 'ljlkj', '243234', '', '35.86615210000002', '31.9589647', '', NULL, NULL, '2017-06-22 11:32:42', '2017-06-22 11:32:42'),
(34, 82, 4, 'khaldiya address', NULL, NULL, NULL, '234', 'lkj', 'lkjlkj', NULL, 'lkjlk', 'lkj', 'jlkj', 'lkj', '243', '42342', '35.86615210000002', '31.9589647', 'lkjlk', NULL, NULL, '2017-06-22 11:40:59', '2017-06-22 11:40:59'),
(35, 82, 3, 'jiowf', NULL, NULL, NULL, '234', 'sldkf', 'klldkfg', NULL, 'slkdf', 'lkjfdg', 'slkdfj', 'lkdgj', '4234', '345', '35.86615210000002', '31.9589647', 'lkdfg', NULL, NULL, '2017-06-22 11:49:14', '2017-06-22 11:49:14'),
(36, 82, 4, 'josifg', NULL, NULL, NULL, '25443', 'lkjl', 'kjlk', NULL, 'jlkj', 'lkj', 'lkj', 'lkjlkj', 'lkjlk', '345', '35.86615210000002', '31.9589647', 'ljlk', NULL, NULL, '2017-06-22 11:50:10', '2017-06-22 11:50:10'),
(37, 82, 4, 'jh', NULL, NULL, NULL, '245', 'kljdg', 'jlkdfjg', NULL, 'lkjdfklj', 'kljlk', 'kljlk', 'lkjlk', '252', '345', '35.86615210000002', '31.9589647', 'lfkgdf', NULL, NULL, '2017-06-22 12:00:28', '2017-06-22 12:00:28'),
(38, 82, 4, 'jloi', NULL, NULL, NULL, '987', 'jhoi', 'ihi', NULL, 'hiuh', 'iuh', 'iuhi', 'hiuh', '987', '9879', '35.86615210000002', '31.9589647', 'hjhi', NULL, NULL, '2017-06-22 12:07:25', '2017-06-22 12:07:25'),
(39, 109, 3, NULL, NULL, 'sdkfj', 'joisjdof', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '234235', NULL, NULL, NULL, NULL, NULL, '2017-07-02 13:36:37', '2017-07-02 13:36:37'),
(40, 128, 3, 'erfge', 0, NULL, NULL, NULL, 'ert', 'kjoi', NULL, 'joi', 'joij', 'oij', 'iojoi', '34634', '345', '35.86615210000002', '31.9589647', 'ojijo', NULL, NULL, '2017-07-23 09:56:06', '2017-07-23 09:56:06'),
(41, 132, 3, 'sdfg', 0, NULL, NULL, NULL, 'dfg', 'lkj', NULL, 'lkj', 'lkjlk', 'lkj', 'lkj', '0845345', '345345', '35.86615210000002', '31.9589647', 'lkjl\n', NULL, NULL, '2017-07-24 06:34:34', '2017-07-24 06:34:34'),
(42, 133, 5, 'jhg', 0, NULL, NULL, NULL, 'jkb', 'gfcyhf', NULL, 'hjvjh', 'hgvhg', 'lkj', 'jhvj', '8657', '7647', '35.86615210000002', '31.9589647', 'kjh', NULL, NULL, '2017-07-24 07:55:01', '2017-07-24 07:55:01'),
(43, 134, 3, 'kjh', 0, NULL, NULL, NULL, 'kj', 'kjhkj', NULL, 'hkjhkj', 'hkjhk', 'jhkj', 'hkjh', '245', '786876', '35.86615210000002', '31.9589647', 'kjh\n', NULL, NULL, '2017-07-24 07:58:54', '2017-07-24 07:58:54'),
(44, 135, 3, 'kjhkj', 0, NULL, NULL, NULL, 'hvh', 'gfcg', NULL, 'gfcg', 'gfc', 'hgf', 'gf', '8768', '654564', '35.86615210000002', '31.9589647', 'jhbj', NULL, NULL, '2017-07-24 08:01:38', '2017-07-24 08:01:38'),
(45, 136, 3, 'ojoi', 0, NULL, NULL, NULL, 'oijoi', 'joijo', NULL, 'ijoij', 'oijoij', 'oijoi', 'joijo', '345', '425', '', '', 'oijo', NULL, NULL, '2017-07-25 06:00:36', '2017-07-25 06:00:36'),
(46, 137, 3, 'jlkn', 0, NULL, NULL, NULL, 'jknkj', 'jknkj', NULL, 'nkjn', 'kjn', 'kjnkj', 'njk', '54645', '969', '', '', 'nkjjknkj', NULL, NULL, '2017-07-25 06:09:49', '2017-07-25 06:09:49'),
(47, 139, 3, 'dshf', 0, NULL, NULL, NULL, 'kjk', 'jhk', NULL, 'jhkj', 'hkjh', 'kjh', 'kjhkjh', '78979', '987987', '35.8963680267334', '31.955694255458408', 'kjhk', NULL, NULL, '2017-07-25 08:44:52', '2017-07-25 08:44:52'),
(48, 140, 3, 'sdkfjl', 0, NULL, NULL, NULL, 'sdfk', 'lkjl', NULL, 'jlj', 'ljlkj', 'lkkj', 'lkjl', '97679', '9769', '35.8469295501709', '31.95638607801807', 'sdf', NULL, NULL, '2017-07-25 11:43:57', '2017-07-25 11:43:57'),
(49, 155, 3, 'lkml', 0, NULL, NULL, NULL, 'lkmlk', 'mlk', NULL, 'mlkm', 'lkm', 'lm', 'lkmlkm', '9879', '987987', '35.92837159999999', '31.9453666', 'klmlk', NULL, NULL, '2017-07-29 13:20:35', '2017-07-29 13:20:35'),
(50, 161, 3, 'sdfds', 0, NULL, NULL, NULL, 'ljhjlh', 'kjhkj', NULL, 'hkjh', 'kjh', 'kjh', 'kjhkjh', '243234', '234234', '', '', 'lkjl', NULL, NULL, '2017-08-02 06:03:16', '2017-08-02 06:03:16'),
(51, 162, 3, 'klj', 0, NULL, NULL, NULL, 'lkj', 'lkjlk', NULL, 'jl', 'kjl', 'kj', 'lkj', '9797', '9879', '35.86615210000002', '31.9589647', 'Abd Ar Rahim Al Hajj Muhammad, Amman, Jordanlkj', NULL, NULL, '2017-08-06 13:47:19', '2017-08-06 13:47:19'),
(52, 163, 3, 'kl', 0, NULL, NULL, NULL, 'o', 'oijoi', NULL, 'oijoi', 'joij', 'oijoij', 'oijoij', '9798', '798798', '35.86615210000002', '31.9589647', 'Abd Ar Rahim Al Hajj Muhammad, Amman, Jordan', NULL, NULL, '2017-08-07 08:00:21', '2017-08-07 08:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `governorate_id` int(11) NOT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name_en`, `name_ar`, `governorate_id`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(3, 'Shuwaikh', 'الشويكة', 3, 'Shuwaikh area', 'منطقة الشويكة', '2017-05-19 13:39:11', '2017-06-07 16:18:14'),
(4, 'Kuwait City', 'مدينة الكويت', 4, 'Kuwait City area', 'مدينة الكويت', '2017-05-19 13:40:00', '2017-06-07 16:21:23'),
(5, 'Kaifan', 'كيفان', 4, 'Kaifan area', 'منطقة كيفان', '2017-05-19 13:41:17', '2017-06-07 16:19:52'),
(6, 'Khaldiya', 'الخالدية', 3, 'Khaldiya area', 'منطقة الخالدية', '2017-06-07 16:22:21', '2017-06-07 16:22:21'),
(7, 'Shamiya', 'شامية', 3, 'Shamiya area', 'منطقة الشامية', '2017-06-07 16:35:15', '2017-06-07 16:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `audit_track`
--

CREATE TABLE `audit_track` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `action` varchar(255) DEFAULT NULL,
  `users_name` varchar(100) DEFAULT NULL,
  `users_role` varchar(100) DEFAULT NULL,
  `description` text,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audit_track`
--

INSERT INTO `audit_track` (`id`, `users_id`, `action`, `users_name`, `users_role`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'addAddress', 'dddd', 'dddd', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"users_id\":\"13\",\"area_id\":\"3\",\"name\":\"sd\",\"type\":\"0\",\"first_name\":\"oijo\",\"last_name\":\"ijoi\",\"pacl_number\":\"joijoi\",\"block\":\"joij\",\"street\":\"oijoi\",\"judda\":\"joi\",\"avenue\":\"jo\",\"building\":\"ijo\",\"floor\":\"ijoi\",\"apartment_number\":\"joi\",\"mobile\":\"jo\",\"phone\":\"ijoi\",\"long\":\"joijo\",\"lat\":\"ijo\",\"directions\":\"ijoj\",\"default\":\"0\",\"notification\":\"0\"}', '2017-06-15 22:28:39', '2017-06-15 22:28:39'),
(2, 82, 'Delete Address', 'taylor successor', 'Admin . Client . ', '{\"id\":29,\"users_id\":13,\"area_id\":3,\"name\":\"sd\",\"type\":0,\"first_name\":\"oijo\",\"last_name\":\"ijoi\",\"paci_number\":null,\"block\":\"joij\",\"street\":\"oijoi\",\"judda\":\"joi\",\"avenue\":\"jo\",\"building\":\"ijo\",\"floor\":\"ijoi\",\"apartment_number\":\"joi\",\"mobile\":\"jo\",\"phone\":\"ijoi\",\"long\":\"joijo\",\"lat\":\"ijo\",\"directions\":\"ijoj\",\"default\":0,\"notification\":0,\"created_at\":\"2017-06-15 22:28:39\",\"updated_at\":\"2017-06-15 22:28:39\"}', '2017-06-15 22:41:15', '2017-06-15 22:41:15'),
(3, 82, 'Update Address', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"users_id\":\"91\",\"area_id\":\"5\",\"name\":\"\\u0643\\u064a\\u0641\\u0627\\u0646 \\u0623\\u062f\\u0631\\u0633 \",\"type\":\"0\",\"first_name\":\"sd\",\"last_name\":\"vdsfv\",\"pacl_number\":\"\",\"block\":\"\\u0627\\u0644\\u0645\\u062c\\u0645\\u0639\",\"street\":\"\\u0627\\u0644\\u0634\\u0627\\u0631\\u0639\",\"judda\":\"sdc\",\"avenue\":\"\\u0627\\u0644\\u062c\\u0627\\u062f\\u0629\",\"building\":\"\\u0627\\u0644\\u0628\\u0646\\u0627\\u0621\",\"floor\":\"\\u0627\\u0644\\u0637\\u0627\\u0628\\u0642\",\"apartment_number\":\"43\",\"mobile\":\"28472394\",\"phone\":\"28492834\",\"long\":\"47.97720868786621\",\"lat\":\"29.27966221534416\",\"directions\":\"\\u0625\\u0636\\u0627\\u0641\\u064a\",\"default\":\"0\",\"notification\":\"0\"}', '2017-06-15 22:43:26', '2017-06-15 22:43:26'),
(4, 82, 'Add Area', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"area\",\"name_ar\":\"area\",\"governorate_id\":\"3\",\"description_en\":\"hjb\",\"description_ar\":\"hgvy\"}', '2017-06-15 23:12:34', '2017-06-15 23:12:34'),
(5, 82, 'Update area', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"area\",\"name_ar\":\"arean\",\"governorate_id\":\"3\",\"description_en\":\"hjb\",\"description_ar\":\"hgvy\"}', '2017-06-15 23:12:50', '2017-06-15 23:12:50'),
(6, 82, 'Delete Area', 'taylor successor', 'Admin . Client . ', '{\"id\":8,\"name_en\":\"area\",\"name_ar\":\"arean\",\"governorate_id\":3,\"description_en\":\"hjb\",\"description_ar\":\"hgvy\",\"created_at\":\"2017-06-15 23:12:34\",\"updated_at\":\"2017-06-15 23:12:50\"}', '2017-06-15 23:12:59', '2017-06-15 23:12:59'),
(7, 82, 'Add Shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"ohiuo\",\"available_payment\":\"jh\",\"status\":\"0\",\"min_amount\":\"hi\",\"working_hour_from\":\"uh\",\"working_hour_to\":\"ih\",\"deliver_time_from\":\"ih\",\"deliver_time_to\":\"iu\",\"deliver_charge\":\"hiu\",\"rating\":\"h\",\"show_menu\":\"iuh\",\"order_accept_days\":\"iu\",\"offline_order\":\"0\",\"url\":\"uh\",\"img\":\"iuh\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"uh\",\"area_id\":\"3\",\"follow_us\":\"0\",\"notification\":\"0\",\"name_ar\":\"jhi\",\"address_ar\":\"\",\"description_ar\":\"\",\"summary_ar\":\"\",\"Owner_first_name\":\"oijo\",\"Owner_last_name\":\"hoh\",\"email\":\"ih\",\"telephone\":\"ih\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-06-15 23:14:56', '2017-06-15 23:14:56'),
(8, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"ohiuo\",\"available_payment\":\"jhj\",\"status\":\"0\",\"min_amount\":\"hi\",\"working_hour_from\":\"uh\",\"working_hour_to\":\"ih\",\"deliver_time_from\":\"ih\",\"deliver_time_to\":\"iu\",\"deliver_charge\":\"hiu\",\"rating\":\"0\",\"show_menu\":\"0\",\"order_accept_days\":\"0\",\"offline_order\":\"0\",\"url\":\"uh\",\"img\":\"iuh\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"uh\",\"area_id\":\"3\",\"follow_us\":\"0\",\"notification\":\"0\",\"name_ar\":\"jhi\",\"address_ar\":\"\",\"description_ar\":\"\",\"summary_ar\":\"\",\"Owner_first_name\":\"oijo\",\"Owner_last_name\":\"hoh\",\"email\":\"ih\",\"telephone\":\"ih\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-06-15 23:15:08', '2017-06-15 23:15:08'),
(9, 82, 'delete shop', 'taylor successor', 'Admin . Client . ', '{\"id\":11,\"name_en\":\"ohiuo\",\"name_ar\":\"jhi\",\"Owner_first_name\":\"oijo\",\"Owner_last_name\":\"hoh\",\"email\":\"ih\",\"available_payment\":\"jhj\",\"telephone\":\"ih\",\"address_en\":\"\",\"address_ar\":\"\",\"description_en\":\"\",\"description_ar\":\"\",\"status\":0,\"min_amount\":\"hi\",\"working_hour_from\":\"uh\",\"working_hour_to\":\"ih\",\"deliver_time_from\":\"ih\",\"deliver_time_to\":\"iu\",\"deliver_charge\":\"hiu\",\"rating\":0,\"show_menu\":0,\"order_accept_days\":0,\"offline_order\":0,\"summary_en\":\"\",\"summary_ar\":\"\",\"url\":\"uh\",\"img\":\"iuh\",\"commission_type\":0,\"discount_type\":0,\"discount\":\"uh\",\"area_id\":3,\"follow_us\":0,\"notification\":0,\"long\":\"\",\"lat\":\"\",\"created_at\":\"2017-06-15 23:14:56\",\"updated_at\":\"2017-06-15 23:15:08\"}', '2017-06-15 23:15:18', '2017-06-15 23:15:18'),
(10, 82, 'Add area to shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"shop_id\":\"3\",\"cuisine_id\":\"1\"}', '2017-06-15 23:16:21', '2017-06-15 23:16:21'),
(11, 82, 'Update shop cuisine', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"shop_id\":\"3\",\"cuisine_id\":\"1\"}', '2017-06-15 23:16:33', '2017-06-15 23:16:33'),
(12, 82, 'delete shop cuisine', 'taylor successor', 'Admin . Client . ', '{\"id\":8,\"shop_id\":3,\"cuisine_id\":1}', '2017-06-15 23:16:42', '2017-06-15 23:16:42'),
(13, 82, 'Add Coffee', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"rec\",\"name_ar\":\"gd\",\"shop_id\":\"3\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"u\",\"price\":\"gu\",\"quantity\":\"gu\",\"img\":\"\\/files\\/18952_9633res4.jpg\",\"discount\":\"u\",\"available_from\":\"2017-06-15\",\"available_to\":\"2017-06-16\",\"description_en\":\"jhgu\\r\\n\",\"description_ar\":\"uygu\",\"status\":\"0\"}', '2017-06-15 23:17:24', '2017-06-15 23:17:24'),
(14, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"rec\",\"name_ar\":\"gdjh\",\"shop_id\":\"3\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"gu\",\"quantity\":\"0\",\"img\":\"\\/files\\/18952_9633res4.jpg\",\"discount\":\"u\",\"available_from\":\"2017-06-15\",\"available_to\":\"2017-06-16\",\"description_en\":\"jhgu\\r\\n\",\"description_ar\":\"uygu\",\"status\":\"0\"}', '2017-06-15 23:17:35', '2017-06-15 23:17:35'),
(15, 82, 'Delete Coffee', 'taylor successor', 'Admin . Client . ', '{\"id\":12,\"name_en\":\"rec\",\"name_ar\":\"gdjh\",\"shop_id\":3,\"cuisine_id\":1,\"menu_section_id\":1,\"category_id\":3,\"delivery_menu_id\":1,\"parent_id\":0,\"price\":\"gu\",\"quantity\":0,\"img\":\"\\/files\\/18952_9633res4.jpg\",\"discount\":\"u\",\"available_from\":\"2017-06-15\",\"available_to\":\"2017-06-16\",\"description_en\":\"jhgu\\r\\n\",\"description_ar\":\"uygu\",\"status\":0,\"rating\":0,\"created_at\":\"2017-06-15 23:17:24\",\"updated_at\":\"2017-06-15 23:17:35\"}', '2017-06-15 23:17:44', '2017-06-15 23:17:44'),
(16, 82, 'Add Order', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"users_id\":\"13\",\"shop_id\":\"3\",\"area_id\":\"3\",\"address_id\":\"1\",\"deliver_time\":\"23:26\",\"deliver_date\":\"2017-06-15\",\"deliver_charge\":\"\",\"deera_charge\":\"\",\"extra_charge\":\"\",\"sub_total\":\"\",\"total\":\"\",\"rate\":\"\",\"point\":\"\",\"status\":\"0\",\"notification\":\"0\",\"note\":\"\"}', '2017-06-15 23:26:07', '2017-06-15 23:26:07'),
(17, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"users_id\":\"13\",\"shop_id\":\"3\",\"area_id\":\"3\",\"address_id\":\"1\",\"deliver_time\":\"23:26\",\"deliver_date\":\"2017-06-15\",\"deliver_charge\":\"\",\"deera_charge\":\"0\",\"extra_charge\":\"0\",\"sub_total\":\"0\",\"total\":\"0\",\"rate\":\"0\",\"point\":\"0\",\"status\":\"0\",\"notification\":\"0\",\"note\":\"\"}', '2017-06-15 23:26:30', '2017-06-15 23:26:30'),
(18, 82, 'Delete Order', 'taylor successor', 'Admin . Client . ', '{\"id\":31,\"users_id\":13,\"shop_id\":3,\"area_id\":3,\"from_id\":null,\"address_id\":1,\"order_time\":null,\"deliver_time\":\"23:26\",\"expected_time\":\"\",\"deliver_date\":\"2017-06-15\",\"note\":\"\",\"deliver_charge\":\"\",\"deera_charge\":0,\"extra_charge\":0,\"sub_total\":0,\"total\":0,\"rate\":0,\"point\":0,\"notification\":0,\"status\":0,\"created_at\":\"2017-06-15 23:26:07\",\"updated_at\":\"2017-06-15 23:26:30\"}', '2017-06-15 23:26:42', '2017-06-15 23:26:42'),
(19, 82, 'Add Cart', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"users_id\":\"13\",\"shop_id\":\"3\",\"coffee_id\":\"3\",\"order_id\":\"1\",\"deliver_charge\":\"1\",\"quantity\":\"1\",\"unit_price\":\"1\",\"total_price\":\"1\",\"special_request\":\"x\\r\\n\"}', '2017-06-15 23:27:22', '2017-06-15 23:27:22'),
(20, 82, 'Update Cart', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"users_id\":\"13\",\"shop_id\":\"3\",\"coffee_id\":\"3\",\"order_id\":\"1\",\"deliver_charge\":\"1\",\"quantity\":\"1\",\"unit_price\":\"1\",\"total_price\":\"1\",\"special_request\":\"xzd3\\r\\n\"}', '2017-06-15 23:27:39', '2017-06-15 23:27:39'),
(21, 82, 'Delete Cart', 'taylor successor', 'Admin . Client . ', '{\"id\":33,\"users_id\":13,\"shop_id\":3,\"coffee_id\":3,\"order_id\":1,\"deliver_charge\":\"1\",\"quantity\":1,\"unit_price\":\"1\",\"total_price\":\"1\",\"special_request\":\"xzd3\\r\\n\",\"created_at\":\"2017-06-15 23:27:22\",\"updated_at\":\"2017-06-15 23:27:39\"}', '2017-06-15 23:27:49', '2017-06-15 23:27:49'),
(22, 82, 'Add Payment', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"users_id\":\"13\",\"order_id\":\"1\",\"amount\":\"1\",\"status\":\"0\",\"type\":\"0\",\"notification\":\"0\"}', '2017-06-15 23:28:50', '2017-06-15 23:28:50'),
(23, 82, 'delete payment', 'taylor successor', 'Admin . Client . ', '{\"id\":12,\"order_id\":1,\"users_id\":13,\"amount\":\"1\",\"status\":0,\"type\":0,\"notification\":0,\"created_at\":\"2017-06-15 23:28:50\",\"updated_at\":\"2017-06-15 23:28:50\"}', '2017-06-15 23:29:03', '2017-06-15 23:29:03'),
(24, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"title_en\":\"kl\",\"title_ar\":\"jlkj\",\"alias\":\"lkjlk\",\"content_en\":\"jlkj\",\"content_ar\":\"lkj\"}', '2017-06-15 23:29:44', '2017-06-15 23:29:44'),
(25, 82, 'Delete CMS', 'taylor successor', 'Admin . Client . ', '{\"id\":5,\"title_en\":\"kl\",\"title_ar\":\"jlkj\",\"alias\":\"lkjlk\",\"content_en\":\"jlkj\",\"content_ar\":\"lkj\",\"created_at\":\"2017-06-15 23:29:44\",\"updated_at\":\"2017-06-15 23:29:44\"}', '2017-06-15 23:29:51', '2017-06-15 23:29:51'),
(26, 82, 'Add Shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"e;djf\",\"long\":\"35.93949794769287\",\"lat\":\"31.93956238929864\",\"available_payment\":\"kl\",\"status\":\"0\",\"min_amount\":\"ij\",\"working_hour_from\":\"oijoi\",\"working_hour_to\":\"ho\",\"deliver_time_from\":\"ho\",\"deliver_time_to\":\"h\",\"deliver_charge\":\"ou\",\"rating\":\"ho\",\"show_menu\":\"h\",\"order_accept_days\":\"oh\",\"offline_order\":\"0\",\"url\":\"iho\",\"img\":\"ih\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"ho\",\"area_id\":\"3\",\"follow_us\":\"0\",\"notification\":\"0\",\"name_ar\":\"sdfsdf\",\"address_ar\":\"\",\"description_ar\":\"\",\"summary_ar\":\"\",\"Owner_first_name\":\"j\",\"Owner_last_name\":\"hoih\",\"email\":\"oih\",\"telephone\":\"oh\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-06-15 23:35:53', '2017-06-15 23:35:53'),
(27, 82, 'Add Shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"kjoj\",\"long\":\"36.06566905975342\",\"lat\":\"32.06591949246112\",\"available_payment\":\"jh\",\"status\":\"0\",\"min_amount\":\"kjh\",\"working_hour_from\":\"kjh\",\"working_hour_to\":\"kj\",\"deliver_time_from\":\"hk\",\"deliver_time_to\":\"jh\",\"deliver_charge\":\"kjhkj\",\"rating\":\"hk\",\"show_menu\":\"jh\",\"order_accept_days\":\"kjh\",\"offline_order\":\"0\",\"url\":\"hk\",\"img\":\"jh\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"kj\",\"area_id\":\"3\",\"follow_us\":\"0\",\"notification\":\"0\",\"name_ar\":\"kjhh\",\"address_ar\":\"\",\"description_ar\":\"\",\"summary_ar\":\"\",\"Owner_first_name\":\"lkjlkj\",\"Owner_last_name\":\"lkj\",\"email\":\"lkj\",\"telephone\":\"lk\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-06-15 23:37:57', '2017-06-15 23:37:57'),
(28, 82, 'Add Shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"kjkjkj\",\"long\":\"36.11081600189209\",\"lat\":\"32.083738118953725\",\"available_payment\":\"lkjl\",\"status\":\"0\",\"min_amount\":\"jl\",\"working_hour_from\":\"kj\",\"working_hour_to\":\"lkj\",\"deliver_time_from\":\"lkj\",\"deliver_time_to\":\"lk\",\"deliver_charge\":\"jlk\",\"rating\":\"j\",\"show_menu\":\"lkj\",\"order_accept_days\":\"lkj\",\"offline_order\":\"0\",\"url\":\"jlk\",\"img\":\"jlk\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"lkj\",\"area_id\":\"3\",\"follow_us\":\"0\",\"notification\":\"0\",\"name_ar\":\"lknjlkjl\",\"address_ar\":\"kjlkj\",\"description_ar\":\"lkj\",\"summary_ar\":\"lkj\",\"Owner_first_name\":\"kmlk\",\"Owner_last_name\":\"lkmlk\",\"email\":\"mlkm\",\"telephone\":\"lkm\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-06-15 23:39:56', '2017-06-15 23:39:56'),
(29, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl\",\"name_en\":\"kjoj\",\"long\":\"36.139397621154785\",\"lat\":\"32.08908302965641\",\"available_payment\":\"jh\",\"status\":\"0\",\"min_amount\":\"kjh\",\"working_hour_from\":\"kjh\",\"working_hour_to\":\"kj\",\"deliver_time_from\":\"hk\",\"deliver_time_to\":\"jh\",\"deliver_charge\":\"kjhkj\",\"rating\":\"0\",\"show_menu\":\"0\",\"order_accept_days\":\"0\",\"offline_order\":\"0\",\"url\":\"hk\",\"img\":\"jh\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"kj\",\"area_id\":\"3\",\"follow_us\":\"0\",\"notification\":\"0\",\"name_ar\":\"kjhh\",\"address_ar\":\"\",\"description_ar\":\"\",\"summary_ar\":\"\",\"Owner_first_name\":\"lkjlkj\",\"Owner_last_name\":\"lkj\",\"email\":\"lkj\",\"telephone\":\"lk\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-06-15 23:41:42', '2017-06-15 23:41:42'),
(30, 82, 'Update Cart', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"NConVKclZdr3ZQ2GFl7TF6WbVGyExtGLWxzAueKm\",\"users_id\":\"104\",\"shop_id\":\"7\",\"coffee_id\":\"10\",\"size\":\"2\",\"order_id\":\"30\",\"deliver_charge\":\"1\",\"quantity\":\"6\",\"unit_price\":\"4\",\"total_price\":\"0\",\"special_request\":\"1\"}', '2017-06-17 11:13:57', '2017-06-17 11:13:57'),
(31, 82, 'Update CMS', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"yolLwphESz0nOxxHHgmhayR9PAQ7L64XGMLWCwhg\",\"title_en\":\"about\",\"title_ar\":\"about\",\"alias\":\"about\",\"content_en\":\"\\t\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>About us<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t\\t<div class=\\\"abut_wrap\\\">\\r\\n\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t<aside class=\\\"col-md-8\\\">\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/p>\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. <\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<\\/aside>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<div class=\\\"col-md-4\\\">\\r\\n\\t\\t\\t\\t<div class=\\\"add_wrap\\\">\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"images\\/add-inn3.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"images\\/add-inn2.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"images\\/add-inn1.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t<\\/div>\\r\\n\\t\\t\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\\r\\n\",\"content_ar\":\"\\t\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>About us<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t\\t<div class=\\\"abut_wrap\\\">\\r\\n\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t<aside class=\\\"col-md-8\\\">\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/p>\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. <\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<\\/aside>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<div class=\\\"col-md-4\\\">\\r\\n\\t\\t\\t\\t<div class=\\\"add_wrap\\\">\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"images\\/add-inn3.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"images\\/add-inn2.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"images\\/add-inn1.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t<\\/div>\\r\\n\\t\\t\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\\r\\n\"}', '2017-06-20 20:09:42', '2017-06-20 20:09:42'),
(32, 82, 'Update CMS', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"yolLwphESz0nOxxHHgmhayR9PAQ7L64XGMLWCwhg\",\"title_en\":\"about\",\"title_ar\":\"about\",\"alias\":\"about\",\"content_en\":\"\\t\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>About us<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t\\t<div class=\\\"abut_wrap\\\">\\r\\n\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t<aside class=\\\"col-md-8\\\">\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/p>\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. <\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<\\/aside>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<div class=\\\"col-md-4\\\">\\r\\n\\t\\t\\t\\t<div class=\\\"add_wrap\\\">\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"\\/assets\\/website\\/images\\/add-inn3.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"\\/assets\\/website\\/images\\/add-inn2.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"\\/assets\\/website\\/images\\/add-inn1.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t<\\/div>\\r\\n\\t\\t\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\\r\\n\",\"content_ar\":\"\\t\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>About us<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t\\t<div class=\\\"abut_wrap\\\">\\r\\n\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t<aside class=\\\"col-md-8\\\">\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/p>\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. <\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<\\/aside>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<div class=\\\"col-md-4\\\">\\r\\n\\t\\t\\t\\t<div class=\\\"add_wrap\\\">\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"\\/assets\\/website\\/images\\/add-inn3.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"\\/assets\\/website\\/images\\/add-inn2.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"add_box\\\"><img src=\\\"\\/assets\\/website\\/images\\/add-inn1.jpg\\\" alt=\\\"add\\\"><\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t<\\/div>\\r\\n\\t\\t\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\\r\\n\"}', '2017-06-20 20:11:32', '2017-06-20 20:11:32'),
(33, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"yolLwphESz0nOxxHHgmhayR9PAQ7L64XGMLWCwhg\",\"title_en\":\"faq\",\"title_ar\":\"faq\",\"alias\":\"faq\",\"content_en\":\"\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>Frequently Asked Questions (FAQ)<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t<div class=\\\"accordian_example full-width\\\">\\r\\n\\t\\t<div class=\\\"panel-group\\\" id=\\\"accordion\\\" role=\\\"tablist\\\" aria-multiselectable=\\\"true\\\">\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseOne\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseOne\\\">\\r\\n\\t\\t\\t\\t  What is Cofe District?\\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseOne\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a class=\\\"collapsed\\\" role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseTwo\\\" aria-expanded=\\\"false\\\" aria-controls=\\\"collapseTwo\\\">\\r\\n\\t\\t\\t\\t How to create an account? \\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseTwo\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<ul>\\r\\n\\t\\t\\t\\t\\t<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <\\/li>\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one.<\\/li>\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t<li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.<\\/li>\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/li>\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College<\\/li>\\r\\n\\t\\t\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<\\/ul>\\r\\n\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  \\r\\n\\t\\t<\\/div>\\r\\n\\t\\t<\\/div><!-- \\/.accordian_example -->\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\\r\\n\",\"content_ar\":\"\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>Frequently Asked Questions (FAQ)<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t<div class=\\\"accordian_example full-width\\\">\\r\\n\\t\\t<div class=\\\"panel-group\\\" id=\\\"accordion\\\" role=\\\"tablist\\\" aria-multiselectable=\\\"true\\\">\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseOne\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseOne\\\">\\r\\n\\t\\t\\t\\t  What is Cofe District?\\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseOne\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a class=\\\"collapsed\\\" role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseTwo\\\" aria-expanded=\\\"false\\\" aria-controls=\\\"collapseTwo\\\">\\r\\n\\t\\t\\t\\t How to create an account? \\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseTwo\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<ul>\\r\\n\\t\\t\\t\\t\\t<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <\\/li>\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one.<\\/li>\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t<li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.<\\/li>\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/li>\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College<\\/li>\\r\\n\\t\\t\\r\\n\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<\\/ul>\\r\\n\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  \\r\\n\\t\\t<\\/div>\\r\\n\\t\\t<\\/div><!-- \\/.accordian_example -->\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\\r\\n\"}', '2017-06-20 21:10:10', '2017-06-20 21:10:10');
INSERT INTO `audit_track` (`id`, `users_id`, `action`, `users_name`, `users_role`, `description`, `created_at`, `updated_at`) VALUES
(34, 82, 'Update CMS', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"yolLwphESz0nOxxHHgmhayR9PAQ7L64XGMLWCwhg\",\"title_en\":\"PRIVACY  POLICY \",\"title_ar\":\"PRIVACY POLICY\",\"alias\":\"privacy\",\"content_en\":\"\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>Privacy Policy<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t<div class=\\\"accordian_example full-width\\\">\\r\\n\\t\\t<div class=\\\"panel-group\\\" id=\\\"accordion\\\" role=\\\"tablist\\\" aria-multiselectable=\\\"true\\\">\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseOne\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseOne\\\">\\r\\n\\t\\t\\t\\t  Profile\\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseOne\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a class=\\\"collapsed\\\" role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseTwo\\\" aria-expanded=\\\"false\\\" aria-controls=\\\"collapseTwo\\\">\\r\\n\\t\\t\\t\\t Security\\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseTwo\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>\\\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\\"<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\"de Finibus Bonorum et Malorum\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \\\"Lorem ipsum dolor sit amet..\\\", comes from a line in section 1.10.32.\\r\\n\\r\\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  \\r\\n\\t\\t<\\/div>\\r\\n\\t\\t<\\/div><!-- \\/.accordian_example -->\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\",\"content_ar\":\"\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>Privacy Policy<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t<div class=\\\"accordian_example full-width\\\">\\r\\n\\t\\t<div class=\\\"panel-group\\\" id=\\\"accordion\\\" role=\\\"tablist\\\" aria-multiselectable=\\\"true\\\">\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseOne\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseOne\\\">\\r\\n\\t\\t\\t\\t  Profile\\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseOne\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a class=\\\"collapsed\\\" role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseTwo\\\" aria-expanded=\\\"false\\\" aria-controls=\\\"collapseTwo\\\">\\r\\n\\t\\t\\t\\t Security\\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseTwo\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>\\\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\\"<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\"de Finibus Bonorum et Malorum\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \\\"Lorem ipsum dolor sit amet..\\\", comes from a line in section 1.10.32.\\r\\n\\r\\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/p>\\r\\n\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  \\r\\n\\t\\t<\\/div>\\r\\n\\t\\t<\\/div><!-- \\/.accordian_example -->\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\"}', '2017-06-20 21:12:30', '2017-06-20 21:12:30'),
(35, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"yolLwphESz0nOxxHHgmhayR9PAQ7L64XGMLWCwhg\",\"title_en\":\"terms\",\"title_ar\":\"terms\",\"alias\":\"terms\",\"content_en\":\"\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>Terms & Conditions<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t<div class=\\\"accordian_example full-width\\\">\\r\\n\\t\\t<div class=\\\"panel-group\\\" id=\\\"accordion\\\" role=\\\"tablist\\\" aria-multiselectable=\\\"true\\\">\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseOne\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseOne\\\">\\r\\n\\t\\t\\t\\t  Cancellation\\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseOne\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\"de Finibus Bonorum et Malorum\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \\\"Lorem ipsum dolor sit amet..\\\", comes from a line in section 1.10.32.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a class=\\\"collapsed\\\" role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseTwo\\\" aria-expanded=\\\"false\\\" aria-controls=\\\"collapseTwo\\\">\\r\\n\\t\\t\\t\\t  Order \\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseTwo\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  \\r\\n\\t\\t<\\/div>\\r\\n\\t\\t<\\/div><!-- \\/.accordian_example -->\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\\r\\n\\r\\n\\t\",\"content_ar\":\"\\r\\n\\t<!--inner area-->\\r\\n\\t<section class=\\\"inner-wrapper\\\">\\r\\n\\t\\r\\n\\t<div class=\\\"caption-sec\\\">\\r\\n\\t<h1>Terms & Conditions<\\/h1>\\t\\t\\r\\n\\t<\\/div>\\r\\n\\t\\r\\n\\t<div class=\\\"inner-content\\\">\\r\\n\\t<div class=\\\"accordian_example full-width\\\">\\r\\n\\t\\t<div class=\\\"panel-group\\\" id=\\\"accordion\\\" role=\\\"tablist\\\" aria-multiselectable=\\\"true\\\">\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseOne\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseOne\\\">\\r\\n\\t\\t\\t\\t  Cancellation\\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseOne\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingOne\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\"de Finibus Bonorum et Malorum\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \\\"Lorem ipsum dolor sit amet..\\\", comes from a line in section 1.10.32.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  <div class=\\\"panel panel-default\\\">\\r\\n\\t\\t\\t<div class=\\\"panel-heading\\\" role=\\\"tab\\\" id=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <h4 class=\\\"panel-title\\\">\\r\\n\\t\\t\\t\\t<a class=\\\"collapsed\\\" role=\\\"button\\\" data-toggle=\\\"collapse\\\" data-parent=\\\"#accordion\\\" href=\\\"#collapseTwo\\\" aria-expanded=\\\"false\\\" aria-controls=\\\"collapseTwo\\\">\\r\\n\\t\\t\\t\\t  Order \\r\\n\\t\\t\\t\\t<\\/a>\\r\\n\\t\\t\\t  <\\/h4>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t<div id=\\\"collapseTwo\\\" class=\\\"panel-collapse collapse\\\" role=\\\"tabpanel\\\" aria-labelledby=\\\"headingTwo\\\">\\r\\n\\t\\t\\t  <div class=\\\"panel-body\\\">\\r\\n\\t\\t\\t\\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \\\"de Finibus Bonorum et Malorum\\\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<\\/p>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t  <\\/div>\\r\\n\\t\\t\\t<\\/div>\\r\\n\\t\\t  <\\/div>\\r\\n\\t\\t  \\r\\n\\t\\t<\\/div>\\r\\n\\t\\t<\\/div><!-- \\/.accordian_example -->\\r\\n\\t<\\/div>\\r\\n\\r\\n\\r\\n\\t<\\/section>\\r\\n\\t<!--inner area-->\\r\\n\\r\\n\\t\"}', '2017-06-20 21:13:37', '2017-06-20 21:13:37'),
(36, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"afEPefmOLnppao0K0RZWaw6Uwogq4YFMXCRmxvXV\",\"name_en\":\"Falafil\",\"name_ar\":\"\\u0641\\u0644\\u0627\\u0641\\u0644\",\"shop_id\":\"7\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"\",\"quantity\":\"69\",\"img\":\"\\/files\\/3856_31241coffeees3.jpg\",\"discount\":\"1\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"falafil\",\"description_ar\":\"\\u0641\\u0644\\u0627\\u0641\\u0644\",\"status\":\"0\"}', '2017-06-21 18:03:16', '2017-06-21 18:03:16'),
(37, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"price\":\"\"}', '2017-06-21 18:05:57', '2017-06-21 18:05:57'),
(38, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"price\":\"88\"}', '2017-06-21 18:07:23', '2017-06-21 18:07:23'),
(39, 82, 'Add Coffee', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"test\",\"name_ar\":\"test\",\"shop_id\":\"3\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"44\",\"quantity\":\"1000\",\"img\":\"\\/files\\/13082_24139coffees6.jpg\",\"discount\":\"1\",\"available_from\":\"2017-06-29\",\"available_to\":\"2017-06-29\",\"description_en\":\"sdf\",\"description_ar\":\"sdf\",\"status\":\"0\"}', '2017-06-29 11:10:42', '2017-06-29 11:10:42'),
(40, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/31768_22129banner1.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"2\"}', '2017-06-30 19:58:57', '2017-06-30 19:58:57'),
(41, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/31768_22129banner1.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"1\"}', '2017-06-30 20:05:22', '2017-06-30 20:05:22'),
(42, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/31768_22129banner1.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"0\"}', '2017-06-30 20:05:37', '2017-06-30 20:05:37'),
(43, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17270_23927banner-bg.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"0\"}', '2017-06-30 20:35:44', '2017-06-30 20:35:44'),
(44, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/banner-bg2.jpg\",\"order\":\"2\",\"status\":\"0\",\"type\":\"0\"}', '2017-06-30 20:37:00', '2017-06-30 20:37:00'),
(45, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/banner-bg2.jpg\",\"order\":\"2\",\"status\":\"0\",\"type\":\"0\"}', '2017-06-30 20:37:50', '2017-06-30 20:37:50'),
(46, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/banner-bg3.jpg\",\"order\":\"3\",\"status\":\"0\",\"type\":\"0\"}', '2017-06-30 20:38:22', '2017-06-30 20:38:22'),
(47, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"order\":\"4\",\"status\":\"1\",\"type\":\"1\",\"available_from\":\"2017-06-30\",\"available_to\":\"2019-06-30\"}', '2017-06-30 23:03:57', '2017-06-30 23:03:57'),
(48, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"order\":\"4\",\"status\":\"1\",\"type\":\"1\",\"available_from\":\"2017-06-30\",\"available_to\":\"2019-06-17\"}', '2017-06-30 23:04:22', '2017-06-30 23:04:22'),
(49, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"order\":\"4\",\"status\":\"1\",\"type\":\"1\",\"available_from\":\"2017-06-30\",\"available_to\":\"2019-06-17\"}', '2017-06-30 23:04:33', '2017-06-30 23:04:33'),
(50, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17270_23927banner-bg.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"0\",\"available_from\":\"2017-06-25\",\"available_to\":\"2017-07-31\"}', '2017-06-30 23:07:53', '2017-06-30 23:07:53'),
(51, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17270_23927banner-bg.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"0\",\"available_from\":\"2017-06-25\",\"available_to\":\"2020-07-31\"}', '2017-06-30 23:08:33', '2017-06-30 23:08:33'),
(52, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/banner-bg2.jpg\",\"order\":\"2\",\"status\":\"0\",\"type\":\"0\",\"available_from\":\"2017-06-26\",\"available_to\":\"2020-08-02\"}', '2017-06-30 23:08:55', '2017-06-30 23:08:55'),
(53, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/banner-bg3.jpg\",\"order\":\"3\",\"status\":\"0\",\"type\":\"0\",\"available_from\":\"2017-06-27\",\"available_to\":\"2020-07-31\"}', '2017-06-30 23:09:48', '2017-06-30 23:09:48'),
(54, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"order\":\"4\",\"status\":\"1\",\"type\":\"1\",\"available_from\":\"2017-06-30\",\"available_to\":\"2020-06-17\"}', '2017-06-30 23:10:16', '2017-06-30 23:10:16'),
(55, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"order\":\"4\",\"status\":\"0\",\"type\":\"1\",\"available_from\":\"2017-06-30\",\"available_to\":\"2020-06-17\"}', '2017-06-30 23:28:20', '2017-06-30 23:28:20'),
(56, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/2image.jpg\",\"order\":\"5\",\"status\":\"0\",\"type\":\"0\",\"available_from\":\"2017-06-30\",\"available_to\":\"2019-06-30\"}', '2017-06-30 23:58:22', '2017-06-30 23:58:22'),
(57, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/add-3.jpg\",\"order\":\"6\",\"status\":\"0\",\"type\":\"0\",\"available_from\":\"2017-06-30\",\"available_to\":\"2019-06-30\"}', '2017-06-30 23:58:47', '2017-06-30 23:58:47'),
(58, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/2image.jpg\",\"order\":\"5\",\"status\":\"0\",\"type\":\"1\",\"available_from\":\"2017-06-30\",\"available_to\":\"2019-06-30\"}', '2017-06-30 23:59:08', '2017-06-30 23:59:08'),
(59, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/add-3.jpg\",\"order\":\"6\",\"status\":\"0\",\"type\":\"1\",\"available_from\":\"2017-06-30\",\"available_to\":\"2019-06-30\"}', '2017-06-30 23:59:21', '2017-06-30 23:59:21'),
(60, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"Starbucks\",\"long\":\"35.8969645\",\"lat\":\"31.938096\",\"available_payment\":\"knet,visa, cash \",\"status\":\"1\",\"min_amount\":\"13\",\"working_hour_from\":\"05:25\",\"working_hour_to\":\"17:52\",\"deliver_time_from\":\"08:00\",\"deliver_time_to\":\"17:52\",\"deliver_charge\":\"1\",\"rating\":\"3\",\"show_menu\":\"1\",\"order_accept_days\":\"2\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/19620_18957res3.jpg\",\"commission_type\":\"0\",\"discount_type\":\"1\",\"discount\":\"1\",\"area_id\":\"4\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"\\u0628\\u0631\\u0642\\u0631\",\"address_ar\":\"\",\"description_ar\":\"\",\"summary_ar\":\"\",\"Owner_first_name\":\"jon\",\"Owner_last_name\":\"land\",\"email\":\"jon@pros.com\",\"telephone\":\"0096182783468\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-07-01 22:28:14', '2017-07-01 22:28:14'),
(61, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"Kozy Salon Urbain\",\"long\":\"35.9754138\",\"lat\":\"31.9897962\",\"available_payment\":\"knet,visa, cash \",\"status\":\"1\",\"min_amount\":\"21.32\",\"working_hour_from\":\"08:00:00\",\"working_hour_to\":\"16:00:00\",\"deliver_time_from\":\"09:00:00\",\"deliver_time_to\":\"15:00:00\",\"deliver_charge\":\"2.5\",\"rating\":\"4\",\"show_menu\":\"1\",\"order_accept_days\":\"7\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/18952_9633res4.jpg\",\"commission_type\":\"1\",\"discount_type\":\"1\",\"discount\":\"10\",\"area_id\":\"3\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"\\u0645\\u0627\\u0643\",\"address_ar\":\"\\u0639\\u0646\\u0648\\u0627\\u0646 1\",\"description_ar\":\"\\u0634\\u0631\\u062d \\u0627\\u0644\\u0645\\u0637\\u0639\\u0645 1\",\"summary_ar\":\"\\u0645\\u062e\\u062a\\u0635\\u0631 \\u0627\\u0644\\u0645\\u0637\\u0639\\u0645 1\",\"Owner_first_name\":\"taylor\",\"Owner_last_name\":\"successor\",\"email\":\"taylorsuccessor@gmail.com\",\"telephone\":\"0785181656\",\"address_en\":\"address shop 1\",\"description_en\":\"description shop 1\",\"summary_en\":\"summary shop 1\"}', '2017-07-01 22:30:13', '2017-07-01 22:30:13'),
(62, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"Cafe Francoeur\",\"long\":\"35.8988528\",\"lat\":\"31.9462535\",\"available_payment\":\"\",\"status\":\"1\",\"min_amount\":\"30\",\"working_hour_from\":\"10:50\",\"working_hour_to\":\"18:07\",\"deliver_time_from\":\"10:50\",\"deliver_time_to\":\"18:07\",\"deliver_charge\":\"1\",\"rating\":\"0\",\"show_menu\":\"1\",\"order_accept_days\":\"2\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/506_13227res2.jpg\",\"commission_type\":\"0\",\"discount_type\":\"1\",\"discount\":\"20\",\"area_id\":\"7\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"KFC\",\"address_ar\":\"\",\"description_ar\":\"\",\"summary_ar\":\"\",\"Owner_first_name\":\"kfc\",\"Owner_last_name\":\"kfc\",\"email\":\"kfc@kfc.com\",\"telephone\":\"0785181656\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-07-01 22:31:27', '2017-07-01 22:31:27'),
(63, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"Carette\\u202c\",\"long\":\"35.9089808\",\"lat\":\"31.9823706\",\"available_payment\":\"knet,visa, cash \",\"status\":\"1\",\"min_amount\":\"10\",\"working_hour_from\":\"08:00\",\"working_hour_to\":\"23:55\",\"deliver_time_from\":\"08:43\",\"deliver_time_to\":\"16:43\",\"deliver_charge\":\"1\",\"rating\":\"0\",\"show_menu\":\"1\",\"order_accept_days\":\"3\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/1078_28471Pizza_Hut_logo.svg.png\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"1\",\"area_id\":\"3\",\"follow_us\":\"0\",\"notification\":\"0\",\"name_ar\":\"\\u0628\\u064a\\u062a\\u0632\\u0627\",\"address_ar\":\"\\u0639\\u0646\\u0648\\u0627\\u0646 \\u0628\\u064a\\u062a\\u0632\\u0627\",\"description_ar\":\"\\u0628\\u064a\\u062a\\u0632\\u0627\",\"summary_ar\":\"\\u0628\\u064a\\u062a\\u0632\\u0627\",\"Owner_first_name\":\"owner name\",\"Owner_last_name\":\"yosif\",\"email\":\"yosit@pizza.com\",\"telephone\":\"0785181656\",\"address_en\":\"\",\"description_en\":\"\",\"summary_en\":\"\"}', '2017-07-01 22:32:55', '2017-07-01 22:32:55'),
(64, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"decafe \",\"name_ar\":\"\\u0642\\u0647\\u0648\\u0629\",\"shop_id\":\"6\",\"cuisine_id\":\"4\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"3.45\",\"quantity\":\"89\",\"img\":\"\\/files\\/16836_26797banner3.jpg\",\"discount\":\"100\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"big mak\",\"description_ar\":\"\\u0628\\u064a\\u062c \\u0645\\u0627\\u0643\",\"status\":\"0\"}', '2017-07-01 22:35:42', '2017-07-01 22:35:42'),
(65, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"Cafe Francoeur\",\"name_ar\":\"\\u0642\\u0647\\u0648\\u0629\",\"shop_id\":\"7\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"88\",\"quantity\":\"69\",\"img\":\"\\/files\\/3856_31241coffeees3.jpg\",\"discount\":\"1\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"falafil\",\"description_ar\":\"\\u0641\\u0644\\u0627\\u0641\\u0644\",\"status\":\"0\"}', '2017-07-01 22:37:11', '2017-07-01 22:37:11'),
(66, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"coffee2\",\"name_ar\":\"\\u0642\\u0647\\u0648\\u06293\",\"shop_id\":\"6\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"5\",\"quantity\":\"199\",\"img\":\"\\/files\\/16836_26797banner3.jpg\",\"discount\":\"1\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"Burger max\",\"description_ar\":\"Burger max\",\"status\":\"0\"}', '2017-07-01 22:38:13', '2017-07-01 22:38:13'),
(67, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"decafe\",\"name_ar\":\"\\u0627\\u0643\\u0633\\u062a\\u0631\\u064a\\u0645 \",\"shop_id\":\"8\",\"cuisine_id\":\"2\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"375\",\"quantity\":\"198\",\"img\":\"\\/files\\/27734_1239banner2.jpg\",\"discount\":\"1\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"max xtrem mel\",\"description_ar\":\"\\u0645\\u0627\\u0643\\u0633 \\u0627\\u0643\\u0633\\u062a\\u0631\\u064a\\u0645 \\u0645\\u064a\\u0644\",\"status\":\"0\"}', '2017-07-01 22:38:51', '2017-07-01 22:38:51'),
(68, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"big \",\"name_ar\":\"\\u0628\\u064a\\u062c \\u062a\\u0627\\u064a\\u0633\\u062a\\u064a \",\"shop_id\":\"6\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"2.550\",\"quantity\":\"77\",\"img\":\"\\/files\\/11714_18387img_order1.jpg\",\"discount\":\"10\",\"available_from\":\"2017-06-07\",\"available_to\":\"2017-06-07\",\"description_en\":\"big taisty\",\"description_ar\":\"\\u0628\\u064a\\u062c \\u062a\\u0627\\u064a\\u0633\\u062a\\u064a \",\"status\":\"0\"}', '2017-07-01 22:39:38', '2017-07-01 22:39:38'),
(69, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"roial\",\"name_ar\":\"\\u0631\\u0648\\u064a\\u0627\\u0644\",\"shop_id\":\"6\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"2.555\",\"quantity\":\"1\",\"img\":\"\\/files\\/13082_24139coffeees6.jpg\",\"discount\":\"150\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"mak roial\",\"description_ar\":\"\\u0645\\u0627\\u0643 \\u0631\\u0648\\u064a\\u0627\\u0644\",\"status\":\"0\"}', '2017-07-01 22:41:14', '2017-07-01 22:41:14'),
(70, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"decafe\",\"name_ar\":\"\\u0627\\u0643\\u0633\\u062a\\u0631\\u064a\\u0645 \",\"shop_id\":\"8\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"375\",\"quantity\":\"198\",\"img\":\"\\/files\\/2image.jpg\",\"discount\":\"1\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"max xtrem mel\",\"description_ar\":\"\\u0645\\u0627\\u0643\\u0633 \\u0627\\u0643\\u0633\\u062a\\u0631\\u064a\\u0645 \\u0645\\u064a\\u0644\",\"status\":\"0\"}', '2017-07-01 22:47:24', '2017-07-01 22:47:24'),
(71, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"roial\",\"name_ar\":\"\\u0631\\u0648\\u064a\\u0627\\u0644\",\"shop_id\":\"6\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"2.555\",\"quantity\":\"1\",\"img\":\"\\/files\\/add-3.jpg\",\"discount\":\"150\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"mak roial\",\"description_ar\":\"\\u0645\\u0627\\u0643 \\u0631\\u0648\\u064a\\u0627\\u0644\",\"status\":\"0\"}', '2017-07-01 22:47:45', '2017-07-01 22:47:45'),
(72, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"cofff\",\"name_ar\":\"\\u0642\\u0647\\u0648\\u06293\",\"shop_id\":\"3\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"325\",\"quantity\":\"1\",\"img\":\"\\/files\\/add-1.jpg\",\"discount\":\"300\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"strbs\",\"description_ar\":\"\\u0648\\u062c\\u0628\\u0629 \\u0627\\u0644\\u0627\\u0631\\u0632 \\u0628\\u062f\\u062c\\u0627\\u062c \\u0627\\u0644\\u0643\\u0631\\u0633\\u0628\\u064a \\u0633\\u062a\\u0631\\u0628\\u0633\",\"status\":\"0\"}', '2017-07-01 22:48:25', '2017-07-01 22:48:25'),
(73, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"coffee 1\",\"name_ar\":\"\\u0627\\u0644\\u0637\\u0628\\u0642 1\",\"shop_id\":\"4\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"13\",\"quantity\":\"0\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"discount\":\"\",\"available_from\":\"2016-06-06\",\"available_to\":\"2019-06-18\",\"description_en\":\"coffee 1 description\",\"description_ar\":\"\\u0634\\u0631\\u062d \\u0627\\u0644\\u0637\\u0628\\u0642 1\",\"status\":\"0\"}', '2017-07-01 22:48:46', '2017-07-01 22:48:46'),
(74, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"Cafe Francoeur\",\"name_ar\":\"\\u0642\\u0647\\u0648\\u0629\",\"shop_id\":\"7\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"88\",\"quantity\":\"69\",\"img\":\"\\/files\\/big1.jpg\",\"discount\":\"1\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"falafil\",\"description_ar\":\"\\u0641\\u0644\\u0627\\u0641\\u0644\",\"status\":\"0\"}', '2017-07-01 22:49:06', '2017-07-01 22:49:06'),
(75, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"supper  sobrem \",\"name_ar\":\"\\u0633\\u0648\\u064a\\u0631 \\u0633\\u0648\\u0628\\u0631\\u064a\\u0645 \\u0643\\u0628\\u064a\\u0631 \",\"shop_id\":\"5\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"3,650\",\"quantity\":\"74\",\"img\":\"\\/files\\/18952_9633res4.jpg\",\"discount\":\"100\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"sober sobrem \",\"description_ar\":\"\\u0633\\u0648\\u064a\\u0631 \\u0633\\u0648\\u0628\\u0631\\u064a\\u0645 \\u0643\\u0628\\u064a\\u0631 \",\"status\":\"0\"}', '2017-07-01 22:49:26', '2017-07-01 22:49:26'),
(76, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"landy\",\"long\":\"35.9391932\",\"lat\":\"31.9466904\",\"available_payment\":\"\",\"status\":\"1\",\"min_amount\":\"30\",\"working_hour_from\":\"12:00\",\"working_hour_to\":\"19:35\",\"deliver_time_from\":\"00:00\",\"deliver_time_to\":\"18:30\",\"deliver_charge\":\"1\",\"rating\":\"0\",\"show_menu\":\"0\",\"order_accept_days\":\"900\",\"offline_order\":\"0\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"klj\",\"area_id\":\"6\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"sfdj\",\"address_ar\":\"lj\",\"description_ar\":\"lk\",\"summary_ar\":\"lkj\",\"Owner_first_name\":\"landy\",\"Owner_last_name\":\"landy\",\"email\":\"landy@gmail.com\",\"telephone\":\"0785181656\",\"address_en\":\"lkj\",\"description_en\":\"lj\",\"summary_en\":\"kj\"}', '2017-07-02 08:34:38', '2017-07-02 08:34:38'),
(77, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"landy\",\"long\":\"35.9391932\",\"lat\":\"31.9466904\",\"available_payment\":\"\",\"status\":\"1\",\"min_amount\":\"30\",\"working_hour_from\":\"12:00\",\"working_hour_to\":\"19:35\",\"deliver_time_from\":\"00:00\",\"deliver_time_to\":\"18:30\",\"deliver_charge\":\"1\",\"rating\":\"0\",\"show_menu\":\"0\",\"order_accept_days\":\"900\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"klj\",\"area_id\":\"6\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"sfdj\",\"address_ar\":\"lj\",\"description_ar\":\"lk\",\"summary_ar\":\"lkj\",\"Owner_first_name\":\"landy\",\"Owner_last_name\":\"landy\",\"email\":\"landy@gmail.com\",\"telephone\":\"0785181656\",\"address_en\":\"lkj\",\"description_en\":\"lj\",\"summary_en\":\"kj\"}', '2017-07-02 08:35:43', '2017-07-02 08:35:43'),
(78, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"cofff\",\"name_ar\":\"\\u0642\\u0647\\u0648\\u06293\",\"shop_id\":\"3\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"12\",\"quantity\":\"1\",\"img\":\"\\/files\\/add-1.jpg\",\"discount\":\"300\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"strbs\",\"description_ar\":\"\\u0648\\u062c\\u0628\\u0629 \\u0627\\u0644\\u0627\\u0631\\u0632 \\u0628\\u062f\\u062c\\u0627\\u062c \\u0627\\u0644\\u0643\\u0631\\u0633\\u0628\\u064a \\u0633\\u062a\\u0631\\u0628\\u0633\",\"status\":\"0\"}', '2017-07-02 09:29:56', '2017-07-02 09:29:56');
INSERT INTO `audit_track` (`id`, `users_id`, `action`, `users_name`, `users_role`, `description`, `created_at`, `updated_at`) VALUES
(79, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"Cafe Francoeur\",\"name_ar\":\"\\u0642\\u0647\\u0648\\u0629\",\"shop_id\":\"7\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"10\",\"quantity\":\"69\",\"img\":\"\\/files\\/big1.jpg\",\"discount\":\"1\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"falafil\",\"description_ar\":\"\\u0641\\u0644\\u0627\\u0641\\u0644\",\"status\":\"0\"}', '2017-07-02 09:30:18', '2017-07-02 09:30:18'),
(80, 82, 'Add user to shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"users_id\":\"118\",\"shop_id\":\"3\",\"status\":\"0\",\"type\":\"0\"}', '2017-07-03 05:13:40', '2017-07-03 05:13:40'),
(81, 82, 'Add user to shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"users_id\":\"119\",\"shop_id\":\"3\",\"status\":\"0\",\"type\":\"3\"}', '2017-07-03 05:18:31', '2017-07-03 05:18:31'),
(82, 82, 'Add user to shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"users_id\":\"119\",\"shop_id\":\"3\",\"status\":\"0\",\"type\":\"0\"}', '2017-07-03 05:20:45', '2017-07-03 05:20:45'),
(83, 82, 'update shop user', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"users_id\":\"119\",\"shop_id\":\"3\",\"status\":\"0\",\"type\":\"3\"}', '2017-07-03 05:20:58', '2017-07-03 05:20:58'),
(84, 82, 'delete shop user', 'taylor successor', 'Admin . Client . ', '{\"id\":5,\"users_id\":119,\"shop_id\":3,\"status\":0,\"type\":3,\"created_at\":\"2017-07-03 05:20:45\",\"updated_at\":\"2017-07-03 05:20:58\"}', '2017-07-03 05:21:27', '2017-07-03 05:21:27'),
(85, 82, 'Add user to shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"users_id\":\"120\",\"shop_id\":\"3\",\"status\":\"0\",\"type\":\"4\"}', '2017-07-03 05:21:49', '2017-07-03 05:21:49'),
(86, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"landy\",\"long\":\"35.9391932\",\"lat\":\"31.9466904\",\"available_payment\":\"\",\"status\":\"1\",\"min_amount\":\"30\",\"expected_deliver_time\":\"\",\"working_hour_from\":\"12:00\",\"working_hour_to\":\"19:35\",\"deliver_time_from\":\"00:00\",\"deliver_time_to\":\"18:30\",\"deliver_charge\":\"1\",\"deliver_type\":\"\",\"schedule_commission\":\"0\",\"service_charge\":\"0\",\"pickup_interval\":\"40\",\"rating\":\"0\",\"show_menu\":\"0\",\"order_accept_days\":\"900\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"klj\",\"area_id\":\"6\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"sfdj\",\"address_ar\":\"lj\",\"description_ar\":\"lk\",\"summary_ar\":\"lkj\",\"Owner_first_name\":\"landy\",\"Owner_last_name\":\"landy\",\"email\":\"landy@gmail.com\",\"telephone\":\"0785181656\",\"address_en\":\"lkj\",\"description_en\":\"lj\",\"summary_en\":\"kj\"}', '2017-07-06 10:37:04', '2017-07-06 10:37:04'),
(87, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17270_23927banner-bg.jpg\",\"order\":\"7\",\"status\":\"0\",\"type\":\"1\",\"url\":\"http:\\/\\/www.facebook.com\",\"default\":\"1\",\"available_from\":\"2017-07-01\",\"available_to\":\"2019-07-16\"}', '2017-07-16 19:54:45', '2017-07-16 19:54:45'),
(88, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17270_23927banner-bg.jpg\",\"order\":\"7\",\"status\":\"0\",\"type\":\"1\",\"url\":\"http:\\/\\/www.facebook.com\",\"available_from\":\"2017-07-01\",\"available_to\":\"2019-07-16\"}', '2017-07-16 19:56:02', '2017-07-16 19:56:02'),
(89, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17270_23927banner-bg.jpg\",\"order\":\"7\",\"status\":\"0\",\"type\":\"1\",\"url\":\"http:\\/\\/www.facebook.com\",\"available_from\":\"2017-07-01\",\"available_to\":\"2019-07-16\"}', '2017-07-16 19:56:55', '2017-07-16 19:56:55'),
(90, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17270_23927banner-bg.jpg\",\"order\":\"7\",\"status\":\"0\",\"type\":\"1\",\"url\":\"http:\\/\\/www.facebook.com\",\"available_from\":\"2017-07-01\",\"available_to\":\"2019-07-16\",\"default\":0}', '2017-07-16 19:59:44', '2017-07-16 19:59:44'),
(91, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"img\":\"\\/files\\/17270_23927banner-bg.jpg\",\"order\":\"7\",\"status\":\"0\",\"type\":\"1\",\"url\":\"http:\\/\\/www.facebook.com\",\"default\":1,\"available_from\":\"2017-07-01\",\"available_to\":\"2019-07-16\"}', '2017-07-16 19:59:57', '2017-07-16 19:59:57'),
(92, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"landy\",\"branch\":\"5\",\"long\":\"35.9391932\",\"lat\":\"31.9466904\",\"available_payment\":\"\",\"status\":\"1\",\"min_amount\":\"30\",\"expected_deliver_time\":\"\",\"working_hour_from\":\"12:00\",\"working_hour_to\":\"19:35\",\"deliver_time_from\":\"00:00\",\"deliver_time_to\":\"18:30\",\"deliver_charge\":\"1\",\"deliver_type\":\"\",\"schedule_commission\":\"0\",\"service_charge\":\"0\",\"pickup_interval\":\"40\",\"rating\":\"3\",\"show_menu\":\"0\",\"order_accept_days\":\"900\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"klj\",\"area_id\":\"6\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"sfdj\",\"address_ar\":\"lj\",\"description_ar\":\"lk\",\"summary_ar\":\"lkj\",\"Owner_first_name\":\"landy\",\"Owner_last_name\":\"landy\",\"email\":\"landy@gmail.com\",\"telephone\":\"0785181656\",\"address_en\":\"lkj\",\"description_en\":\"lj\",\"summary_en\":\"kj\"}', '2017-07-18 05:43:46', '2017-07-18 05:43:46'),
(93, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"landy\",\"branch\":\"6\",\"long\":\"35.9391932\",\"lat\":\"31.9466904\",\"available_payment\":\"\",\"status\":\"1\",\"min_amount\":\"30\",\"expected_deliver_time\":\"\",\"working_hour_from\":\"12:00\",\"working_hour_to\":\"19:35\",\"deliver_time_from\":\"00:00\",\"deliver_time_to\":\"18:30\",\"deliver_charge\":\"1\",\"deliver_type\":\"\",\"schedule_commission\":\"0\",\"service_charge\":\"0\",\"pickup_interval\":\"40\",\"rating\":\"3\",\"show_menu\":\"0\",\"order_accept_days\":\"900\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"klj\",\"area_id\":\"6\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"sfdj\",\"address_ar\":\"lj\",\"description_ar\":\"lk\",\"summary_ar\":\"lkj\",\"Owner_first_name\":\"landy\",\"Owner_last_name\":\"landy\",\"email\":\"landy@gmail.com\",\"telephone\":\"0785181656\",\"address_en\":\"lkj\",\"description_en\":\"lj\",\"summary_en\":\"kj\"}', '2017-07-18 06:27:22', '2017-07-18 06:27:22'),
(94, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"dqSwlQOhO1JyAO3UvWUcYOR0luLVcd5zI5pTYRbs\",\"name_en\":\"landy\",\"branch\":\"6\",\"long\":\"35.9391932\",\"lat\":\"31.9466904\",\"available_payment\":\"\",\"status\":\"1\",\"min_amount\":\"30\",\"expected_deliver_time\":\"20\",\"working_hour_from\":\"12:00\",\"working_hour_to\":\"19:35\",\"deliver_time_from\":\"00:00\",\"deliver_time_to\":\"23:30\",\"deliver_charge\":\"1\",\"deliver_type\":\"\",\"schedule_commission\":\"0\",\"service_charge\":\"0\",\"pickup_interval\":\"40\",\"rating\":\"3\",\"show_menu\":\"0\",\"order_accept_days\":\"900\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"klj\",\"area_id\":\"6\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"sfdj\",\"address_ar\":\"lj\",\"description_ar\":\"lk\",\"summary_ar\":\"lkj\",\"Owner_first_name\":\"landy\",\"Owner_last_name\":\"landy\",\"email\":\"landy@gmail.com\",\"telephone\":\"0785181656\",\"address_en\":\"lkj\",\"description_en\":\"lj\",\"summary_en\":\"kj\"}', '2017-07-24 07:12:20', '2017-07-24 07:12:20'),
(95, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{\"order_id\":\"347\",\"users_id\":\"82\",\"current_lat\":\"31.9799521\",\"current_long\":\"35.8746053\",\"status\":0,\"notification\":0}', '2017-07-25 08:38:47', '2017-07-25 08:38:47'),
(96, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{\"order_id\":\"341\",\"users_id\":\"82\",\"current_lat\":\"31.9799521\",\"current_long\":\"35.8746053\",\"status\":0,\"notification\":0}', '2017-07-25 08:38:47', '2017-07-25 08:38:47'),
(97, 139, 'Add Order to driver', 'guest guest', 'Client . guest . ', '{\"order_id\":\"355\",\"users_id\":\"82\",\"current_lat\":\"31.9799521\",\"current_long\":\"35.8746053\",\"status\":0,\"notification\":0}', '2017-07-25 08:45:42', '2017-07-25 08:45:42'),
(98, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{\"order_id\":\"358\",\"users_id\":\"82\",\"current_lat\":\"31.9799521\",\"current_long\":\"35.8746053\",\"status\":0,\"notification\":0}', '2017-07-25 11:50:33', '2017-07-25 11:50:33'),
(99, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{\"order_id\":\"357\",\"users_id\":\"82\",\"current_lat\":\"31.9799521\",\"current_long\":\"35.8746053\",\"status\":0,\"notification\":0}', '2017-07-25 11:50:33', '2017-07-25 11:50:33'),
(100, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{\"order_id\":\"356\",\"users_id\":\"82\",\"current_lat\":\"31.9799521\",\"current_long\":\"35.8746053\",\"status\":0,\"notification\":0}', '2017-07-25 11:50:34', '2017-07-25 11:50:34'),
(101, 82, 'Update Shop', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"dqSwlQOhO1JyAO3UvWUcYOR0luLVcd5zI5pTYRbs\",\"name_en\":\"landy\",\"branch\":\"6\",\"long\":\"35.9391932\",\"lat\":\"31.9466904\",\"available_payment\":\"\",\"status\":\"1\",\"min_amount\":\"30\",\"expected_deliver_time\":\"20\",\"working_hour_from\":\"12:00\",\"working_hour_to\":\"19:35\",\"deliver_time_from\":\"00:00\",\"deliver_time_to\":\"23:30\",\"deliver_charge\":\"1\",\"deliver_type\":\"\",\"schedule_commission\":\"0\",\"service_charge\":\"0\",\"pickup_interval\":\"40\",\"rating\":\"3\",\"show_menu\":\"0\",\"order_accept_days\":\"900\",\"offline_order\":\"1\",\"url\":\"www.cafcoffee.com\",\"img\":\"\\/files\\/17350_24455res1.jpg\",\"commission_type\":\"0\",\"discount_type\":\"0\",\"discount\":\"klj\",\"area_id\":\"6\",\"follow_us\":\"0\",\"notification\":\"1\",\"name_ar\":\"sfdj\",\"address_ar\":\"lj\",\"description_ar\":\"lk\",\"summary_ar\":\"lkj\",\"Owner_first_name\":\"landy\",\"Owner_last_name\":\"landy\",\"email\":\"landy@gmail.com\",\"telephone\":\"0785181656\",\"address_en\":\"lkj\",\"description_en\":\"lj\",\"summary_en\":\"kj\"}', '2017-07-25 12:14:03', '2017-07-25 12:14:03'),
(102, 82, 'Add user to shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"dqSwlQOhO1JyAO3UvWUcYOR0luLVcd5zI5pTYRbs\",\"users_id\":\"141\",\"shop_id\":\"3\",\"status\":\"0\",\"type\":\"0\"}', '2017-07-25 12:17:06', '2017-07-25 12:17:06'),
(103, 82, 'Add user to shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"dqSwlQOhO1JyAO3UvWUcYOR0luLVcd5zI5pTYRbs\",\"users_id\":\"141\",\"shop_id\":\"6\",\"status\":\"0\",\"type\":\"0\"}', '2017-07-25 12:17:32', '2017-07-25 12:17:32'),
(104, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"img\":\"\\/files\\/1402_12587add-3.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"3\",\"url\":\"\",\"available_from\":\"2017-08-06\",\"available_to\":\"2019-08-06\"}', '2017-08-06 07:05:26', '2017-08-06 07:05:26'),
(105, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"img\":\"\\/files\\/add-2.jpg\",\"order\":\"2\",\"status\":\"0\",\"type\":\"3\",\"url\":\"\",\"available_from\":\"2017-08-06\",\"available_to\":\"2019-08-06\"}', '2017-08-06 07:07:34', '2017-08-06 07:07:34'),
(106, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"img\":\"\\/files\\/add-1.jpg\",\"order\":\"3\",\"status\":\"0\",\"type\":\"3\",\"url\":\"\",\"available_from\":\"2017-08-06\",\"available_to\":\"2019-08-06\"}', '2017-08-06 07:08:16', '2017-08-06 07:08:16'),
(107, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"img\":\"\\/files\\/category1.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"4\",\"url\":\"\",\"available_from\":\"2017-08-06\",\"available_to\":\"2019-08-06\"}', '2017-08-06 07:50:54', '2017-08-06 07:50:54'),
(108, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"img\":\"\\/files\\/banner-bg2.jpg\",\"order\":\"2\",\"status\":\"0\",\"type\":\"4\",\"url\":\"\",\"available_from\":\"2017-08-06\",\"available_to\":\"2019-08-06\"}', '2017-08-06 07:51:56', '2017-08-06 07:51:56'),
(109, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"img\":\"\\/files\\/category.jpg\",\"order\":\"3\",\"status\":\"0\",\"type\":\"4\",\"url\":\"\",\"available_from\":\"2017-08-06\",\"available_to\":\"2019-08-06\"}', '2017-08-06 07:52:26', '2017-08-06 07:52:26'),
(110, 82, 'Add user to shop', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"users_id\":\"13\",\"shop_id\":\"3\",\"status\":\"0\",\"type\":\"4\",\"license\":\"\",\"civil_id\":\"\",\"role\":\"\"}', '2017-08-06 09:27:33', '2017-08-06 09:27:33'),
(111, 82, 'update shop user', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"users_id\":\"13\",\"shop_id\":\"3\",\"status\":\"0\",\"type\":\"4\",\"license\":\"iuhui\",\"civil_id\":\"jjh\",\"role\":\"\"}', '2017-08-06 09:30:07', '2017-08-06 09:30:07'),
(112, 82, 'Update CMS', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"title_en\":\"thank\",\"title_ar\":\"\\u0634\\u0643\\u0631\\u0627 \",\"alias\":\"thank\",\"content_en\":\"<div style=\\\"display:block;text-align:center;clear:both;padding:200px 0px;\\\"><h1>Thank You ......<a href=\'\\/\'>Cofe<\\/a> <\\/h1><\\/div>\",\"content_ar\":\"<div style=\\\"display:block;text-align:center;clear:both;padding:200px 0px;\\\"><h1>\\u0634\\u0643\\u0631\\u0627 \\u0644\\u0643 ......<a href=\'\\/\'>\\u0643\\u0641\\u064a<\\/a> <\\/h1><\\/div>\"}', '2017-08-08 20:15:55', '2017-08-08 20:15:55'),
(113, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"title_en\":\"Payment Thank\",\"title_ar\":\"\\u0634\\u0643\\u0631\\u0627\",\"alias\":\"payment-thank\",\"content_en\":\"<p>&nbsp;<\\/p>\\r\\n\\r\\n<h1>Thank You ......<a href=\\\"\\/my-order\\\">My Orders<\\/a><\\/h1>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\",\"content_ar\":\"<p>&nbsp;<\\/p>\\r\\n\\r\\n<h1>Thank You ......<a href=\\\"\\/my-order\\\">My Orders<\\/a><\\/h1>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\"}', '2017-08-08 20:17:31', '2017-08-08 20:17:31'),
(114, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"pRPpz9iG1DMLMlofXCtG7mAlxwuCJ38V0Q6c4LB2\",\"title_en\":\"Payment Error\",\"title_ar\":\"Payment Error\",\"alias\":\"payment-error\",\"content_en\":\"<h1 style=\\\"font-style: italic; text-align:center;\\\">Payment Error<\\/h1>\\r\\n\",\"content_ar\":\"<h1 style=\\\"font-style: italic; text-align:center;\\\">Payment Error<\\/h1>\"}', '2017-08-08 20:20:15', '2017-08-08 20:20:15'),
(115, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{\"_token\":\"X5GWcJx2VKkqp07WmwUPcm7SyPEzDMvmjG4COUGJ\",\"img\":\"\\/files\\/27734_1239banner2.jpg\",\"order\":\"1\",\"status\":\"0\",\"type\":\"5\",\"url\":\"\",\"default\":\"1\",\"available_from\":\"2017-09-09\",\"available_to\":\"2019-09-10\"}', '2017-09-10 09:29:29', '2017-09-10 09:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `available_from` varchar(20) NOT NULL,
  `available_to` varchar(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  `default` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`, `order`, `status`, `type`, `available_from`, `available_to`, `url`, `default`, `created_at`, `updated_at`) VALUES
(1, '/files/17270_23927banner-bg.jpg', 1, 0, 0, '2017-06-25', '2020-07-31', '', 0, '2017-06-06 14:36:56', '2017-06-30 23:08:33'),
(2, '/files/banner-bg2.jpg', 2, 0, 0, '2017-06-26', '2020-08-02', '', 0, '2017-06-06 14:39:08', '2017-06-30 23:08:55'),
(3, '/files/banner-bg3.jpg', 3, 0, 0, '2017-06-27', '2020-07-31', '', 0, '2017-06-06 14:51:28', '2017-06-30 23:09:48'),
(4, '/files/17350_24455res1.jpg', 4, 0, 1, '2017-06-30', '2020-06-17', '', 0, '2017-06-30 23:03:57', '2017-06-30 23:28:20'),
(5, '/files/2image.jpg', 5, 0, 1, '2017-06-30', '2019-06-30', '', 0, '2017-06-30 23:58:22', '2017-06-30 23:59:08'),
(6, '/files/add-3.jpg', 6, 0, 1, '2017-06-30', '2019-06-30', '', 0, '2017-06-30 23:58:47', '2017-06-30 23:59:21'),
(7, '/files/17270_23927banner-bg.jpg', 7, 0, 1, '2017-07-01', '2019-07-16', 'http://www.facebook.com', 1, '2017-07-16 19:54:45', '2017-07-16 19:59:57'),
(8, '/files/1402_12587add-3.jpg', 1, 0, 3, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:05:26', '2017-08-06 07:05:26'),
(9, '/files/add-2.jpg', 2, 0, 3, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:07:34', '2017-08-06 07:07:34'),
(10, '/files/add-1.jpg', 3, 0, 3, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:08:16', '2017-08-06 07:08:16'),
(11, '/files/category1.jpg', 1, 0, 4, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:50:54', '2017-08-06 07:50:54'),
(12, '/files/banner-bg2.jpg', 2, 0, 4, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:51:56', '2017-08-06 07:51:56'),
(13, '/files/category.jpg', 3, 0, 4, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:52:26', '2017-08-06 07:52:26'),
(14, '/files/27734_1239banner2.jpg', 1, 0, 5, '2017-09-09', '2019-09-10', '', 1, '2017-09-10 09:29:29', '2017-09-10 09:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `users_id`, `title`, `img`, `description`, `created_at`, `updated_at`) VALUES
(1, 13, 'blog title', '/files/add-2.jpg', 'blog description', '2017-06-20 11:38:24', '2017-06-20 11:38:24'),
(2, 82, 'my title', '/files/blog/10723_12256big1.jpg', 'my description', '2017-07-01 10:51:12', '2017-07-01 10:51:12'),
(3, 82, 'best offer', '/files/blog/21145_31070big2.jpg', 'this post to tell you about best offer ever', '2017-07-01 11:09:44', '2017-07-01 11:09:44'),
(4, 82, 'kh', '/files/blog/16088_16945506_13227res2.jpg', 'kjk', '2017-07-02 09:18:00', '2017-07-02 09:18:00'),
(5, 13, 'blog title', '/files/add-3.jpg', 'blog description', '2017-07-18 08:13:27', '2017-07-18 08:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

CREATE TABLE `blogger` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`id`, `name`, `phone`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'name', '078757', 'sdf@sdf.sdf', 0, '2017-07-12 08:29:47', '2017-07-12 08:29:47'),
(2, 'name', '078757', 'sdf@sdf.sdf', 0, '2017-07-12 08:31:43', '2017-07-12 08:31:43'),
(3, 'name', '078757', 'sdf@sdf.sdf', 0, '2017-07-12 08:31:48', '2017-07-12 08:31:48'),
(4, 'fsdf', '0788967897', 'sdfl@sdf.sdfs', 0, '2017-07-12 08:32:31', '2017-07-12 08:32:31'),
(5, 'fsdf', '0788967897', 'sdfl@sdf.sdfs', 0, '2017-07-12 08:35:52', '2017-07-12 08:35:52'),
(6, 'fsdf', '0788967897', 'sdfl@sdf.sdfs', 0, '2017-07-12 08:36:00', '2017-07-12 08:36:00'),
(7, 'fsdf', '0788967897', 'sdfl@sdf.sdfs', 0, '2017-07-12 08:36:38', '2017-07-12 08:36:38'),
(8, 'kjjknk', '98796', 'kjh@hg.ugu', 0, '2017-07-12 08:44:53', '2017-07-12 08:44:53'),
(9, 'sdf', '345435', 'dsf@ldkfgjd.dfg', 0, '2017-07-12 10:29:32', '2017-07-12 10:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `first_name`, `last_name`, `email`, `phone`, `position`, `file`, `created_at`, `updated_at`) VALUES
(1, 'dsf', 'kjlkj', 'ljlkj', 'jlkj', 'kljlk', 'deera_ProgressReport_2017_06_18.docx', '2017-06-20 13:14:44', '2017-06-20 13:14:44'),
(2, 'dsf', 'kjlkj', 'ljlkj', 'jlkj', 'kljlk', 'deera_ProgressReport_2017_06_18.docx', '2017-06-20 13:15:17', '2017-06-20 13:15:17'),
(3, 'sdf', 'kjh', 'hkjh', 'kjh', 'hkj', 'elebda3.net-6222.pdf', '2017-06-20 13:17:26', '2017-06-20 13:17:26'),
(4, 'jhuh', 'iuhiu', 'hiu', 'hiu', 'hiu', 'C:\\xampp\\tmp\\php7F75.tmp', '2017-06-20 13:39:29', '2017-06-20 13:39:29'),
(5, 'jhh', 'iuhiu', 'hiuhiu', 'hiuhiu', 'uhiuh', 'C:\\xampp\\tmp\\phpCC54.tmp', '2017-06-20 13:42:00', '2017-06-20 13:42:00'),
(6, 'jhi', 'hiuhi', 'uhiuhiu', 'hiuhiu', 'hhiuhi', 'C:\\xampp\\tmp\\phpD360.tmp', '2017-06-20 13:44:13', '2017-06-20 13:44:13'),
(7, 'sdf', 'kj', 'jo', 'joi', 'joijo', 'C:\\xampp\\tmp\\php5256.tmp', '2017-06-20 13:48:02', '2017-06-20 13:48:02'),
(8, 'sdf', 'jkn', 'jknk', 'kjnk', 'kjnk', 'files/cv/18851_13472deera_ProgressReport_2017_06_18.docx', '2017-06-20 13:50:42', '2017-06-20 13:50:42'),
(9, 'jhuio', 'hiuh', 'iuh', 'iuhiu', 'hiih', 'Array', '2017-06-20 14:22:30', '2017-06-20 14:22:30'),
(10, 'sdf', 'jlkjl', 'kjlkj', 'lkj', 'ljljl', 'Array', '2017-06-20 14:23:04', '2017-06-20 14:23:04'),
(11, 'kk', 'kbhb', 'jhbjh', 'bjhb', 'jhb', 'files/cv/2505_6350balloon.docx', '2017-06-20 14:25:54', '2017-06-20 14:25:54'),
(12, 'sdkj', 'hi', 'uhiu', 'hi', 'uh', '/files/cv/1007_12028deera_ProgressReport_2017_06_18.docx', '2017-06-20 14:26:51', '2017-06-20 14:26:51'),
(13, 'kdf', 'kljl', 'lskjdf@lkj.sd', '9697', 'sdf', '/files/cv/31109_29658balloon.docx', '2017-06-20 14:28:49', '2017-06-20 14:28:49'),
(14, 'jknij', 'ooidf', 'sodfj2LKSDFG@SDF.SDF', '98697', 'lksdfj', '/files/cv/17183_13932Requirement Specifications (1).docx', '2017-07-18 06:05:28', '2017-07-18 06:05:28'),
(15, 'sdfk', 'kjsdf', 'lksdfj@sdlkf.sdf', '3423', 'sdf', '/files/cv/17461_24778ProgressReport_2017_05_11.docx', '2017-07-18 06:07:38', '2017-07-18 06:07:38'),
(16, 'sdf', 'lksdjf', 'skdlfj@dsf.sdf', '3245234', 'fskdlf', '/files/cv/29243_19800israa.docx', '2017-07-18 06:08:50', '2017-07-18 06:08:50'),
(17, 'sdf', 'oi', 'joij@oij.df', '24523', 'sdfk', '/files/cv/28337_16278ProgressReport_2017_05_07 to 2017_05_08.docx', '2017-07-18 06:10:38', '2017-07-18 06:10:38'),
(18, 'sdf', 'lkj', 'llkjl@lkj.sdf', '345345', 'sldkfj', '/files/cv/30487_26372report_26_04_2017.docx', '2017-07-18 06:11:31', '2017-07-18 06:11:31'),
(19, 'sdfk', 'lkjsdflkj', 'lkjsdf2LKJDSF@sdf.sdf', '8976', 'lksdjf', '/files/cv/17645_16162israa.docx', '2017-07-18 06:12:29', '2017-07-18 06:12:29'),
(20, 'osfd', 'oijds', 'soidf@oisdf.sdf', '098798', 'skldf', '/files/cv/28083_28528balloon.docx', '2017-07-18 06:14:54', '2017-07-18 06:14:54'),
(21, 'sdf', 'klsdfj', 'sdf@kjsdf.sdf', '234234', 'sdf', '/files/cv/17129_11118balloon.docx', '2017-07-18 06:17:02', '2017-07-18 06:17:02'),
(22, 'sdf', 'lksdfj', 'sdklfj@lksjdf.sdf', '234523', 'sdklf', '/files/cv/12815_4764balloon.docx', '2017-07-18 06:17:51', '2017-07-18 06:17:51'),
(23, 'sdf', 'lksjdf', 'klsdfj@lkjdfg.sdf', '245234', 'dfgklj', '/files/cv/9381_4218balloon.docx', '2017-07-18 06:19:44', '2017-07-18 06:19:44'),
(24, 'sdf', 'lkjsdf', 'sdfk@ksjdf.sdf', '9869', 'sldkfj', '/files/cv/24619_15496balloon.docx', '2017-07-18 06:20:31', '2017-07-18 06:20:31'),
(25, 'oijo', 'oijsd', 'sdfsd@dfog.sdf', '43534634', 'dofg', '/files/cv/14653_9522Balloony Land - SRS V1.2.docx', '2017-07-19 07:37:11', '2017-07-19 07:37:11'),
(26, 'nknjh', 'ESFD', 'taylorsuccessor@gmail.com', '785181656', 'KJNNNNNNNNNNN', '/files/cv/6971_16984blingpayment.pdf', '2017-09-10 08:53:47', '2017-09-10 08:53:47'),
(27, 'JKNJIH', 'IUH', 'UHSDF@IUHSDFs.sdf', '899889', 'oijsdf', '/files/cv/16305_15510blingpayment.pdf', '2017-09-10 08:56:13', '2017-09-10 08:56:13'),
(28, 'hiuiuh', 'iuhi', 'taylorsuccessor@gmail.com', '785181656', 'sdf', '/files/cv/12311_11268blingpayment.pdf', '2017-09-10 09:11:40', '2017-09-10 09:11:40'),
(29, 'hiuiuh', 'iuhi', 'taylorsuccessor@gmail.com', '785181656', 'sdf', '/files/cv/9709_3106blingpayment.pdf', '2017-09-10 09:11:58', '2017-09-10 09:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `coffee_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `deliver_charge` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `special_request` varchar(255) DEFAULT NULL,
  `size_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `users_id`, `shop_id`, `coffee_id`, `order_id`, `deliver_charge`, `quantity`, `unit_price`, `total_price`, `special_request`, `size_id`, `created_at`, `updated_at`) VALUES
(515, 82, 4, 3, 320, NULL, 3, '88', NULL, '', 0, '2017-07-23 15:37:09', '2017-07-23 15:37:09'),
(516, 82, 6, 11, 321, NULL, 3, '88', NULL, '', 0, '2017-07-23 16:13:48', '2017-07-23 16:58:10'),
(517, 132, 3, 5, 322, NULL, 1, '20', NULL, '', 5, '2017-07-24 06:33:36', '2017-07-24 06:33:36'),
(518, 132, 3, 5, 323, NULL, 1, '20', NULL, '', 5, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(519, 132, 3, 5, 324, NULL, 1, '20', NULL, '', 5, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(520, 132, 3, 5, 325, NULL, 1, '20', NULL, '', 5, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(521, 132, 3, 5, 326, NULL, 1, '20', NULL, '', 5, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(522, 132, 3, 5, 327, NULL, 1, '20', NULL, '', 5, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(523, 133, 3, 12, 328, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:41:59', '2017-07-24 07:41:59'),
(524, 133, 3, 12, 329, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(525, 133, 3, 12, 330, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(526, 133, 3, 12, 331, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(527, 133, 3, 12, 332, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(528, 133, 3, 12, 333, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(529, 133, 3, 12, 334, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(530, 133, 3, 12, 335, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(531, 133, 3, 12, 336, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(532, 133, 3, 12, 337, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(533, 133, 3, 12, 338, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(534, 134, 3, 12, 339, NULL, 1, '44', NULL, '', 0, '2017-07-24 07:57:44', '2017-07-24 07:57:44'),
(535, 135, 3, 5, 340, NULL, 1, '20', NULL, '', 5, '2017-07-24 08:00:46', '2017-07-24 08:00:46'),
(536, 82, 6, 11, 341, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(537, 82, 6, 11, 342, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(538, 82, 6, 11, 343, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(539, 82, 6, 11, 344, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(540, 82, 6, 11, 345, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(541, 82, 6, 11, 346, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(542, 82, 4, 3, 347, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(543, 82, 4, 3, 348, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(544, 82, 4, 3, 349, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(545, 82, 4, 3, 350, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(546, 82, 4, 3, 351, NULL, 3, '88', NULL, '', 0, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(547, 136, 7, 10, 352, NULL, 1, '5', NULL, '', 9, '2017-07-25 05:59:47', '2017-07-25 05:59:47'),
(548, 137, 3, 5, 353, NULL, 1, '20', NULL, '', 5, '2017-07-25 06:08:20', '2017-07-25 06:08:20'),
(549, 138, 3, 5, 354, NULL, 1, '20', NULL, '', 5, '2017-07-25 08:33:51', '2017-07-25 08:33:51'),
(550, 139, 4, 3, 355, NULL, 1, '13', NULL, '', 0, '2017-07-25 08:43:39', '2017-07-25 08:43:39'),
(551, 139, 3, 5, 356, NULL, 1, '12', NULL, '', 6, '2017-07-25 08:58:13', '2017-07-25 08:58:13'),
(552, 139, 3, 5, 357, NULL, 1, '20', NULL, '', 5, '2017-07-25 09:25:23', '2017-07-25 09:25:23'),
(553, 140, 3, 5, 358, NULL, 1, '20', NULL, '', 5, '2017-07-25 11:43:08', '2017-07-25 11:43:08'),
(554, 142, 3, 5, 359, NULL, 1, '20', NULL, '', 5, '2017-07-25 17:46:23', '2017-07-25 17:46:23'),
(555, 143, 3, 12, 360, NULL, 1, '44', NULL, '', 0, '2017-07-26 10:25:14', '2017-07-26 10:25:14'),
(556, 144, 3, 5, 361, NULL, 1, '20', NULL, '', 5, '2017-07-26 10:29:10', '2017-07-26 10:29:10'),
(557, 144, 3, 12, 362, NULL, 1, '44', NULL, '', 0, '2017-07-26 10:40:18', '2017-07-26 10:40:18'),
(558, 145, 3, 12, 363, NULL, 1, '44', NULL, '', 0, '2017-07-28 06:12:23', '2017-07-28 06:12:23'),
(559, 146, 4, 3, 364, NULL, 1, '13', NULL, '', 0, '2017-07-28 06:20:11', '2017-07-28 06:20:11'),
(560, 146, 4, 3, 365, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(561, 146, 4, 3, 366, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(562, 146, 4, 3, 367, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(563, 146, 4, 3, 368, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(564, 146, 4, 3, 369, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(565, 146, 4, 3, 370, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(566, 146, 4, 3, 371, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(567, 146, 4, 3, 372, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(568, 146, 4, 3, 373, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(569, 146, 4, 3, 374, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(570, 146, 4, 3, 375, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(571, 146, 4, 3, 376, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(572, 146, 4, 3, 377, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(573, 146, 4, 3, 378, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(574, 146, 4, 3, 379, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(575, 146, 4, 3, 380, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(576, 146, 4, 3, 381, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(577, 146, 4, 3, 382, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(578, 146, 4, 3, 383, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(579, 146, 4, 3, 384, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(580, 146, 4, 3, 385, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(581, 146, 4, 3, 386, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(582, 146, 4, 3, 387, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(583, 146, 4, 3, 388, NULL, 1, '13', NULL, '', 0, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(584, 82, 3, 5, 389, NULL, 1, '20', NULL, '', 5, '2017-07-28 13:17:08', '2017-07-28 13:17:08'),
(585, 82, 3, 12, 389, NULL, 2, '44', NULL, '', 0, '2017-07-28 13:17:26', '2017-08-06 12:40:05'),
(586, 147, 3, 12, 390, NULL, 1, '44', NULL, '', 0, '2017-07-28 13:18:12', '2017-07-28 13:18:12'),
(587, 148, 4, 3, 391, NULL, 1, '13', NULL, '', 0, '2017-07-28 18:55:25', '2017-07-28 18:55:25'),
(588, 149, 3, 5, 392, NULL, 1, '20', NULL, '', 5, '2017-07-28 19:03:42', '2017-07-28 19:03:42'),
(589, 150, 3, 12, 393, NULL, 1, '44', NULL, '', 0, '2017-07-28 19:21:53', '2017-07-28 19:21:53'),
(590, 151, 4, 3, 394, NULL, 1, '13', NULL, '', 0, '2017-07-28 20:01:34', '2017-07-28 20:01:34'),
(591, 152, 4, 3, 395, NULL, 3, '13', NULL, '', 0, '2017-07-28 20:03:01', '2017-08-01 13:11:40'),
(592, 153, 3, 12, 396, NULL, 1, '44', NULL, '', 0, '2017-07-28 20:22:55', '2017-07-28 20:22:55'),
(593, 154, 4, 3, 397, NULL, 1, '13', NULL, '', 0, '2017-07-29 07:00:56', '2017-07-29 07:00:56'),
(594, 155, 7, 10, 398, NULL, 1, '', NULL, '', 7, '2017-07-29 07:21:54', '2017-07-29 07:21:54'),
(595, 156, 3, 5, 399, NULL, 1, '20', NULL, '', 5, '2017-07-29 13:32:47', '2017-07-29 13:32:47'),
(596, 159, 3, 12, 399, NULL, 45, '44', NULL, '', 0, '2017-07-29 14:08:29', '2017-07-29 14:26:39'),
(597, 159, 3, 5, 399, NULL, 3, '20', NULL, '', 5, '2017-07-29 14:19:14', '2017-07-29 14:26:10'),
(599, 160, 3, 12, 401, NULL, 10, '44', NULL, '', 0, '2017-07-29 14:31:20', '2017-07-29 14:46:29'),
(600, 154, 4, 3, 402, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(601, 154, 4, 3, 403, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(602, 154, 4, 3, 404, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(603, 154, 4, 3, 405, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(604, 154, 4, 3, 406, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(605, 154, 4, 3, 407, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(606, 154, 4, 3, 408, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(607, 154, 4, 3, 409, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(608, 154, 4, 3, 410, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(609, 154, 4, 3, 411, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(610, 154, 4, 3, 412, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(611, 154, 4, 3, 413, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(612, 154, 4, 3, 414, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(613, 154, 4, 3, 415, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(614, 154, 4, 3, 416, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(615, 154, 4, 3, 417, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(616, 154, 4, 3, 418, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(617, 154, 4, 3, 419, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(618, 154, 4, 3, 420, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(619, 154, 4, 3, 421, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(620, 154, 4, 3, 422, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(621, 154, 4, 3, 423, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(622, 154, 4, 3, 424, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(623, 154, 4, 3, 425, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(624, 154, 4, 3, 426, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(625, 154, 4, 3, 427, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(626, 154, 4, 3, 428, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(627, 154, 4, 3, 429, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(628, 154, 4, 3, 430, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(629, 154, 4, 3, 431, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(630, 154, 4, 3, 432, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(631, 154, 4, 3, 433, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(632, 154, 4, 3, 434, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(633, 154, 4, 3, 435, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(634, 154, 4, 3, 436, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(635, 154, 4, 3, 437, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(636, 154, 4, 3, 438, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(637, 154, 4, 3, 439, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(638, 154, 4, 3, 440, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(639, 154, 4, 3, 441, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(640, 154, 4, 3, 442, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(641, 154, 4, 3, 443, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(642, 154, 4, 3, 444, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(643, 154, 4, 3, 445, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(644, 154, 4, 3, 446, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(645, 154, 4, 3, 447, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(646, 154, 4, 3, 448, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(647, 154, 4, 3, 449, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(648, 154, 4, 3, 450, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:23:19', '2017-07-31 09:23:19'),
(649, 154, 4, 3, 451, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:23:19', '2017-07-31 09:23:19'),
(650, 154, 4, 3, 452, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:23:19', '2017-07-31 09:23:19'),
(651, 154, 4, 3, 453, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:23:19', '2017-07-31 09:23:19'),
(652, 154, 4, 3, 454, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:23:20', '2017-07-31 09:23:20'),
(653, 154, 4, 3, 455, NULL, 1, '13', NULL, '', 0, '2017-07-31 09:23:20', '2017-07-31 09:23:20'),
(654, 161, 3, 5, 456, NULL, 1, '20', NULL, '', 5, '2017-08-02 06:02:23', '2017-08-02 06:02:23'),
(655, 162, 4, 3, 457, NULL, 1, '13', NULL, '', 0, '2017-08-06 13:46:39', '2017-08-06 13:46:39'),
(656, 163, 3, 5, 458, NULL, 1, '20', NULL, '', 5, '2017-08-07 05:30:29', '2017-08-07 05:30:29'),
(657, 163, 4, 3, 459, NULL, 3, '13', NULL, '', 0, '2017-08-07 07:56:47', '2017-08-07 07:56:47'),
(658, 163, 7, 10, 460, NULL, 1, '', NULL, '', 7, '2017-08-07 07:59:27', '2017-08-07 07:59:27'),
(659, 164, 4, 3, 461, NULL, 1, '13', NULL, '', 0, '2017-08-07 08:47:30', '2017-08-07 08:47:30'),
(660, 164, 3, 5, 462, NULL, 1, '20', NULL, '', 5, '2017-08-07 13:41:05', '2017-08-07 13:41:05'),
(661, 82, 3, 5, 463, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(662, 82, 3, 12, 463, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(663, 82, 3, 5, 464, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(664, 82, 3, 12, 464, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(665, 82, 3, 5, 465, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(666, 82, 3, 12, 465, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(667, 82, 3, 5, 466, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(668, 82, 3, 12, 466, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(669, 82, 3, 5, 467, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(670, 82, 3, 12, 467, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(671, 82, 3, 5, 468, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(672, 82, 3, 12, 468, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(673, 82, 3, 5, 469, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(674, 82, 3, 12, 469, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(675, 82, 3, 5, 470, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(676, 82, 3, 12, 470, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(677, 82, 3, 5, 471, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(678, 82, 3, 12, 471, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(679, 82, 3, 5, 472, NULL, 1, '20', NULL, '', 5, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(680, 82, 3, 12, 472, NULL, 2, '44', NULL, '', 0, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(681, 82, 3, 5, 473, NULL, 1, '20', NULL, '', 5, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(682, 82, 3, 12, 473, NULL, 2, '44', NULL, '', 0, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(683, 82, 3, 5, 474, NULL, 1, '20', NULL, '', 5, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(684, 82, 3, 12, 474, NULL, 2, '44', NULL, '', 0, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(685, 82, 3, 5, 475, NULL, 1, '20', NULL, '', 5, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(686, 82, 3, 12, 475, NULL, 2, '44', NULL, '', 0, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(687, 82, 3, 5, 476, NULL, 1, '20', NULL, '', 5, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(688, 82, 3, 12, 476, NULL, 2, '44', NULL, '', 0, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(689, 82, 3, 5, 477, NULL, 1, '20', NULL, '', 5, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(690, 82, 3, 12, 477, NULL, 2, '44', NULL, '', 0, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(691, 152, 4, 3, 478, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(692, 152, 4, 3, 479, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(693, 152, 4, 3, 480, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(694, 152, 4, 3, 481, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(695, 152, 4, 3, 482, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(696, 152, 4, 3, 483, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(697, 152, 4, 3, 484, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(698, 152, 4, 3, 485, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(699, 152, 4, 3, 486, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(700, 152, 4, 3, 487, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(701, 152, 4, 3, 488, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(702, 152, 4, 3, 489, NULL, 3, '13', NULL, '', 0, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(703, 152, 4, 3, 490, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(704, 152, 4, 3, 491, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(705, 152, 4, 3, 492, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(706, 152, 4, 3, 493, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(707, 152, 4, 3, 494, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(708, 152, 4, 3, 495, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(709, 152, 4, 3, 496, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(710, 152, 4, 3, 497, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(711, 152, 4, 3, 498, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(712, 152, 4, 3, 499, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(713, 152, 4, 3, 500, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(714, 152, 4, 3, 501, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(715, 152, 4, 3, 502, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(716, 152, 4, 3, 503, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(717, 152, 4, 3, 504, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(718, 152, 4, 3, 505, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(719, 152, 4, 3, 506, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(720, 152, 4, 3, 507, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(721, 152, 4, 3, 508, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(722, 152, 4, 3, 509, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(723, 152, 4, 3, 510, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(724, 152, 4, 3, 511, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(725, 152, 4, 3, 512, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(726, 152, 4, 3, 513, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(727, 152, 4, 3, 514, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(728, 152, 4, 3, 515, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(729, 152, 4, 3, 516, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(730, 152, 4, 3, 517, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(731, 152, 4, 3, 518, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(732, 152, 4, 3, 519, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(733, 152, 4, 3, 520, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(734, 152, 4, 3, 521, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(735, 152, 4, 3, 522, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(736, 152, 4, 3, 523, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(737, 152, 4, 3, 524, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(738, 152, 4, 3, 525, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(739, 152, 4, 3, 526, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(740, 152, 4, 3, 527, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(741, 152, 4, 3, 528, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(742, 152, 4, 3, 529, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(743, 152, 4, 3, 530, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(744, 152, 4, 3, 531, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(745, 152, 4, 3, 532, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(746, 152, 4, 3, 533, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(747, 152, 4, 3, 534, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(748, 152, 4, 3, 535, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(749, 152, 4, 3, 536, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(750, 152, 4, 3, 537, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(751, 152, 4, 3, 538, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(752, 152, 4, 3, 539, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(753, 152, 4, 3, 540, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(754, 152, 4, 3, 541, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(755, 152, 4, 3, 542, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(756, 152, 4, 3, 543, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(757, 152, 4, 3, 544, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(758, 152, 4, 3, 545, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(759, 152, 4, 3, 546, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(760, 152, 4, 3, 547, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(761, 152, 4, 3, 548, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(762, 152, 4, 3, 549, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(763, 152, 4, 3, 550, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(764, 152, 4, 3, 551, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(765, 152, 4, 3, 552, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(766, 152, 4, 3, 553, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(767, 152, 4, 3, 554, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(768, 152, 4, 3, 555, NULL, 3, '13', NULL, '', 0, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(769, 152, 4, 3, 556, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(770, 152, 4, 3, 557, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(771, 152, 4, 3, 558, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(772, 152, 4, 3, 559, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(773, 152, 4, 3, 560, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(774, 152, 4, 3, 561, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(775, 152, 4, 3, 562, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(776, 152, 4, 3, 563, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(777, 152, 4, 3, 564, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(778, 152, 4, 3, 565, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(779, 152, 4, 3, 566, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(780, 152, 4, 3, 567, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(781, 152, 4, 3, 568, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(782, 152, 4, 3, 569, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(783, 152, 4, 3, 570, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(784, 152, 4, 3, 571, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(785, 152, 4, 3, 572, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(786, 152, 4, 3, 573, NULL, 3, '13', NULL, '', 0, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(787, 152, 4, 3, 574, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(788, 152, 4, 3, 575, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(789, 152, 4, 3, 576, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(790, 152, 4, 3, 577, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(791, 152, 4, 3, 578, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(792, 152, 4, 3, 579, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(793, 152, 4, 3, 580, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(794, 152, 4, 3, 581, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(795, 152, 4, 3, 582, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(796, 152, 4, 3, 583, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(797, 152, 4, 3, 584, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(798, 152, 4, 3, 585, NULL, 3, '13', NULL, '', 0, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(799, 152, 4, 3, 586, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(800, 152, 4, 3, 587, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(801, 152, 4, 3, 588, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(802, 152, 4, 3, 589, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(803, 152, 4, 3, 590, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(804, 152, 4, 3, 591, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(805, 152, 4, 3, 592, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(806, 152, 4, 3, 593, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(807, 152, 4, 3, 594, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(808, 152, 4, 3, 595, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(809, 152, 4, 3, 596, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(810, 152, 4, 3, 597, NULL, 3, '13', NULL, '', 0, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(811, 152, 4, 3, 598, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(812, 152, 4, 3, 599, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(813, 152, 4, 3, 600, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(814, 152, 4, 3, 601, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(815, 152, 4, 3, 602, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(816, 152, 4, 3, 603, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(817, 152, 4, 3, 604, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(818, 152, 4, 3, 605, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(819, 152, 4, 3, 606, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(820, 152, 4, 3, 607, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(821, 152, 4, 3, 608, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(822, 152, 4, 3, 609, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(823, 152, 4, 3, 610, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(824, 152, 4, 3, 611, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(825, 152, 4, 3, 612, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(826, 152, 4, 3, 613, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(827, 152, 4, 3, 614, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(828, 152, 4, 3, 615, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(829, 152, 4, 3, 616, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(830, 152, 4, 3, 617, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(831, 152, 4, 3, 618, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(832, 152, 4, 3, 619, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(833, 152, 4, 3, 620, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(834, 152, 4, 3, 621, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(835, 152, 4, 3, 622, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(836, 152, 4, 3, 623, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(837, 152, 4, 3, 624, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(838, 152, 4, 3, 625, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(839, 152, 4, 3, 626, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(840, 152, 4, 3, 627, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(841, 152, 4, 3, 628, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(842, 152, 4, 3, 629, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(843, 152, 4, 3, 630, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(844, 152, 4, 3, 631, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(845, 152, 4, 3, 632, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(846, 152, 4, 3, 633, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(847, 152, 4, 3, 634, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(848, 152, 4, 3, 635, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(849, 152, 4, 3, 636, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(850, 152, 4, 3, 637, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(851, 152, 4, 3, 638, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(852, 152, 4, 3, 639, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(853, 152, 4, 3, 640, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(854, 152, 4, 3, 641, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(855, 152, 4, 3, 642, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(856, 152, 4, 3, 643, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(857, 152, 4, 3, 644, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(858, 152, 4, 3, 645, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(859, 152, 4, 3, 646, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(860, 152, 4, 3, 647, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(861, 152, 4, 3, 648, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(862, 152, 4, 3, 649, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(863, 152, 4, 3, 650, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(864, 152, 4, 3, 651, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(865, 152, 4, 3, 652, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(866, 152, 4, 3, 653, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(867, 152, 4, 3, 654, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(868, 152, 4, 3, 655, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(869, 152, 4, 3, 656, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(870, 152, 4, 3, 657, NULL, 3, '13', NULL, '', 0, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(871, 152, 4, 3, 658, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(872, 152, 4, 3, 659, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(873, 152, 4, 3, 660, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(874, 152, 4, 3, 661, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(875, 152, 4, 3, 662, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(876, 152, 4, 3, 663, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(877, 152, 4, 3, 664, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(878, 152, 4, 3, 665, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(879, 152, 4, 3, 666, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(880, 152, 4, 3, 667, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(881, 152, 4, 3, 668, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(882, 152, 4, 3, 669, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(883, 152, 4, 3, 670, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(884, 152, 4, 3, 671, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(885, 152, 4, 3, 672, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(886, 152, 4, 3, 673, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(887, 152, 4, 3, 674, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(888, 152, 4, 3, 675, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(889, 152, 4, 3, 676, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(890, 152, 4, 3, 677, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(891, 152, 4, 3, 678, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(892, 152, 4, 3, 679, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(893, 152, 4, 3, 680, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(894, 152, 4, 3, 681, NULL, 3, '13', NULL, '', 0, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(895, 152, 4, 3, 682, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:01:47', '2017-08-09 08:01:47'),
(896, 152, 4, 3, 683, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:01:47', '2017-08-09 08:01:47'),
(897, 152, 4, 3, 684, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:01:47', '2017-08-09 08:01:47'),
(898, 152, 4, 3, 685, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:01:48', '2017-08-09 08:01:48'),
(899, 152, 4, 3, 686, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:01:48', '2017-08-09 08:01:48'),
(900, 152, 4, 3, 687, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:01:48', '2017-08-09 08:01:48'),
(901, 152, 4, 3, 688, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(902, 152, 4, 3, 689, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(903, 152, 4, 3, 690, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(904, 152, 4, 3, 691, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(905, 152, 4, 3, 692, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(906, 152, 4, 3, 693, NULL, 3, '13', NULL, '', 0, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(908, 165, 4, 3, 695, NULL, 3, '13', NULL, '', 0, '2017-08-14 05:40:18', '2017-08-14 05:40:18'),
(911, 82, 4, 3, 698, NULL, 1, '13', NULL, '', 0, '2017-08-21 11:24:43', '2017-08-21 11:24:43'),
(912, 82, 3, 5, 699, NULL, 1, '20', NULL, '', 5, '2017-08-28 20:20:17', '2017-08-28 20:20:17'),
(913, 168, 3, 5, 700, NULL, 1, '20', NULL, '', 5, '2017-09-10 07:05:55', '2017-09-10 07:05:55'),
(914, 173, 3, 5, 701, NULL, 1, '20', NULL, '', 5, '2017-09-10 11:19:07', '2017-09-10 11:19:07'),
(915, 174, 4, 3, 702, NULL, 1, '13', NULL, '', 0, '2017-09-10 11:51:01', '2017-09-10 11:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product_option`
--

CREATE TABLE `cart_product_option` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `min_quantity` int(11) DEFAULT NULL,
  `max_quantity` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name_en`, `name_ar`, `min_quantity`, `max_quantity`, `shop_id`, `created_at`, `updated_at`) VALUES
(3, 'category', 'gff', 65, 56, 4, '2017-05-19 14:42:34', '2017-05-19 14:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `shop_id` int(11) NOT NULL,
  `people_number` varchar(255) DEFAULT NULL,
  `book_date` varchar(20) DEFAULT NULL,
  `book_time` varchar(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `request` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `name`, `email`, `phone`, `shop_id`, `people_number`, `book_date`, `book_time`, `location`, `request`, `status`, `created_at`, `updated_at`) VALUES
(2, 'jhi', 'dkflj@dasd.asd', '9797', 1, 'sldj', '2017-06-15', '02:00', '1', 'sdfsd', 0, '2017-06-29 13:03:02', '2017-06-29 10:03:02'),
(3, 'sdf', 'oijoi@lkjlsd.sdf', '97698', 4, 'joijo', '2017-06-15', '13:00', '2', 'joij', 2, '2017-06-29 13:03:20', '2017-06-29 10:03:20'),
(4, 'asdf', 'sdf@kljf.sdf', '234587', 0, '9', '2017-06-20', '08:30', 'sdf', 'sfda\r\n', 3, '2017-06-29 10:10:39', '2017-06-29 10:10:39'),
(5, 'sdf', 'oisdjf@ksdljf.sdfv', '98697', 1, 'alksjd', '2017-07-05', '14:00', 'sdf', 'my request\r\n', 0, '2017-07-12 08:53:26', '2017-07-12 08:53:26'),
(6, 'sdflkj', 'lksdjf@sdklfj.sdf', '9867686', 2, '24', '2017-07-01', '14:05', 'klsdjf', 'sdfsdf', 0, '2017-07-12 08:55:05', '2017-07-12 08:55:05'),
(7, 'sdf', 'fsdf@klsjdf.sdfsdf', '976878', 3, '324', '2017-07-21', '15:05', '7', 'asdf', 0, '2017-07-16 05:23:36', '2017-07-16 05:23:36'),
(8, 'sdf', 'lksjdfl@lskdf.sdf', '234235', 3, '2234234', '2017-07-21', '13:35', '5', 'sdf', 0, '2017-07-23 05:18:14', '2017-07-23 05:18:14'),
(9, 'jiohjiou', 'hiuhiuh@IUhiu.sdf', '425435', 0, '45', '2017-08-13', '07:30', '4', 'sfgjsfg', 0, '2017-08-07 05:28:13', '2017-08-07 05:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `content_en` longtext,
  `content_ar` longtext,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title_en`, `title_ar`, `alias`, `content_en`, `content_ar`, `created_at`, `updated_at`) VALUES
(1, 'about', 'about', 'about', '	\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>About us</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n		<div class=\"abut_wrap\">\r\n			<div class=\"row\">\r\n			<aside class=\"col-md-8\">\r\n			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n			\r\n			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n			\r\n			<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>	\r\n			\r\n			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n			\r\n			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>\r\n			\r\n			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n			\r\n			\r\n			\r\n			\r\n			</aside>\r\n			\r\n			<div class=\"col-md-4\">\r\n				<div class=\"add_wrap\">\r\n					<div class=\"add_box\"><img src=\"/assets/website/images/add-inn3.jpg\" alt=\"add\"></div>\r\n					<div class=\"add_box\"><img src=\"/assets/website/images/add-inn2.jpg\" alt=\"add\"></div>\r\n					<div class=\"add_box\"><img src=\"/assets/website/images/add-inn1.jpg\" alt=\"add\"></div>\r\n				</div>\r\n			</div>\r\n			\r\n			\r\n			\r\n			\r\n			</div>\r\n		</div>\r\n		\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n', '	\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>About us</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n		<div class=\"abut_wrap\">\r\n			<div class=\"row\">\r\n			<aside class=\"col-md-8\">\r\n			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n			\r\n			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n			\r\n			<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>	\r\n			\r\n			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n			\r\n			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>\r\n			\r\n			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>\r\n			\r\n			\r\n			\r\n			\r\n			</aside>\r\n			\r\n			<div class=\"col-md-4\">\r\n				<div class=\"add_wrap\">\r\n					<div class=\"add_box\"><img src=\"/assets/website/images/add-inn3.jpg\" alt=\"add\"></div>\r\n					<div class=\"add_box\"><img src=\"/assets/website/images/add-inn2.jpg\" alt=\"add\"></div>\r\n					<div class=\"add_box\"><img src=\"/assets/website/images/add-inn1.jpg\" alt=\"add\"></div>\r\n				</div>\r\n			</div>\r\n			\r\n			\r\n			\r\n			\r\n			</div>\r\n		</div>\r\n		\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n', '2017-05-31 14:28:55', '2017-06-20 20:11:32'),
(2, 'PRIVACY  POLICY ', 'PRIVACY POLICY', 'privacy', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Privacy Policy</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  Profile\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				 Security\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				\r\n				<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n			\r\n				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Privacy Policy</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  Profile\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				 Security\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				\r\n				<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n			\r\n				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->', '2017-05-31 14:56:29', '2017-06-20 21:12:30'),
(3, 'site <br><span>map</span>', 'site <br><span>map</span>', 'sitemap', '\r\n<section class=\"inner_content_area\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n	<div class=\"col-sm-9\">\r\n		<div class=\"row\">\r\n			<ul class=\"sitemap\">\r\n				<li><a class=\"home\" href=\"#\"> Home</a></li>\r\n\r\n				<li><a href=\"/shop\">All Shops</a></li>\r\n				<li><a href=\"#\">New Shops</a></li>\r\n				<li><a href=\"#\">Most Selling Coffeees</a></li>\r\n				<li><a href=\"#\">Promotions</a></li>\r\n				<li><a href=\"#\">Members Area</a></li>\r\n				<li><a href=\"#\">All Locations</a></li>\r\n				<li><a href=\"#\">All Cuisines</a></li>\r\n				<li><a href=\"#\">Consultation</a></li>\r\n				<li><a href=\"#\">Add Shop</a></li>\r\n				<li><a href=\"#\">Feedback</a></li>\r\n				<li><a href=\"#\">Terms</a></li>\r\n				<li><a href=\"#\">FAQ</a></li>\r\n				<li><a href=\"#\">Privacy</a></li>\r\n				<li><a href=\"#\">Social responsibility</a></li>\r\n				<li><a href=\"#\">Sitemap</a></li>\r\n			</ul>\r\n		</div>\r\n    </div>\r\n        \r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n', '\r\n<section class=\"inner_content_area\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n	<div class=\"col-sm-9\">\r\n		<div class=\"row\">\r\n			<ul class=\"sitemap\">\r\n				<li><a class=\"home\" href=\"#\"> Home</a></li>\r\n\r\n				<li><a href=\"#\">All Shops</a></li>\r\n				<li><a href=\"#\">New Shops</a></li>\r\n				<li><a href=\"#\">Most Selling Coffeees</a></li>\r\n				<li><a href=\"#\">Promotions</a></li>\r\n				<li><a href=\"#\">Members Area</a></li>\r\n				<li><a href=\"#\">All Locations</a></li>\r\n				<li><a href=\"#\">All Cuisines</a></li>\r\n				<li><a href=\"#\">Consultation</a></li>\r\n				<li><a href=\"#\">Add Shop</a></li>\r\n				<li><a href=\"#\">Feedback</a></li>\r\n				<li><a href=\"#\">Terms</a></li>\r\n				<li><a href=\"#\">FAQ</a></li>\r\n				<li><a href=\"#\">Privacy</a></li>\r\n				<li><a href=\"#\">Social responsibility</a></li>\r\n				<li><a href=\"#\">Sitemap</a></li>\r\n			</ul>\r\n		</div>\r\n    </div>\r\n        \r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n', '2017-05-31 15:01:37', '2017-05-31 15:01:37'),
(4, 'thank', 'شكرا ', 'thank', '<div style=\"display:block;text-align:center;clear:both;padding:200px 0px;\"><h1>Thank You ......<a href=\'/\'>Cofe</a> </h1></div>', '<div style=\"display:block;text-align:center;clear:both;padding:200px 0px;\"><h1>شكرا لك ......<a href=\'/\'>كفي</a> </h1></div>', '2017-06-14 00:12:09', '2017-08-08 20:15:55'),
(5, 'faq', 'faq', 'faq', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Frequently Asked Questions (FAQ)</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  What is Cofe District?\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				 How to create an account? \r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>\r\n				\r\n				\r\n				<ul>\r\n					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one.</li>\r\n					\r\n					<li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</li>\r\n					\r\n					<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College</li>\r\n		\r\n					\r\n				</ul>\r\n\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Frequently Asked Questions (FAQ)</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  What is Cofe District?\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				 How to create an account? \r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>\r\n				\r\n				\r\n				<ul>\r\n					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one.</li>\r\n					\r\n					<li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</li>\r\n					\r\n					<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College</li>\r\n		\r\n					\r\n				</ul>\r\n\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n', '2017-06-20 21:10:10', '2017-06-20 21:10:10'),
(6, 'terms', 'terms', 'terms', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Terms & Conditions</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  Cancellation\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				  Order \r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n\r\n	', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Terms & Conditions</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  Cancellation\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				  Order \r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n\r\n	', '2017-06-20 21:13:37', '2017-06-20 21:13:37'),
(7, 'Payment Thank', 'شكرا', 'payment-thank', '<p>&nbsp;</p>\r\n\r\n<h1>Thank You ......<a href=\"/my-order\">My Orders</a></h1>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<h1>Thank You ......<a href=\"/my-order\">My Orders</a></h1>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-08-08 20:17:31', '2017-08-08 20:17:31'),
(8, 'Payment Error', 'Payment Error', 'payment-error', '<h1 style=\"font-style: italic; text-align:center;\">Payment Error</h1>\r\n', '<h1 style=\"font-style: italic; text-align:center;\">Payment Error</h1>', '2017-08-08 20:20:15', '2017-08-08 20:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `shop_id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  `menu_section_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `delivery_menu_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `available_from` varchar(20) DEFAULT NULL,
  `available_to` varchar(20) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `name_en`, `name_ar`, `shop_id`, `cuisine_id`, `menu_section_id`, `category_id`, `delivery_menu_id`, `parent_id`, `price`, `quantity`, `img`, `discount`, `available_from`, `available_to`, `description_en`, `description_ar`, `status`, `rating`, `created_at`, `updated_at`) VALUES
(3, 'coffee 1', 'الطبق 1', 4, 1, 1, 3, 1, 0, '13', 0, '/files/17350_24455res1.jpg', '', '2016-06-06', '2019-06-18', 'coffee 1 description', 'شرح الطبق 1', 0, 3, '2017-05-20 14:06:58', '2017-07-01 22:48:46'),
(4, 'decafe', 'اكستريم ', 8, 1, 1, 3, 1, 0, '375', 198, '/files/2image.jpg', '1', '2016-06-07', '2018-06-07', 'max xtrem mel', 'ماكس اكستريم ميل', 0, 2, '2017-06-07 18:37:54', '2017-07-01 22:47:24'),
(5, 'cofff', 'قهوة3', 3, 1, 1, 3, 1, 0, '12', 1, '/files/add-1.jpg', '300', '2016-06-07', '2018-06-07', 'strbs', 'وجبة الارز بدجاج الكرسبي ستربس', 0, 0, '2017-06-07 18:50:24', '2017-07-02 09:29:56'),
(6, 'supper  sobrem ', 'سوير سوبريم كبير ', 5, 1, 1, 3, 1, 0, '3,650', 74, '/files/18952_9633res4.jpg', '100', '2016-06-07', '2018-06-07', 'sober sobrem ', 'سوير سوبريم كبير ', 0, 0, '2017-06-07 19:00:58', '2017-07-01 22:49:26'),
(7, 'big ', 'بيج تايستي ', 6, 1, 1, 3, 1, 0, '2.550', 77, '/files/11714_18387img_order1.jpg', '10', '2017-06-07', '2017-06-07', 'big taisty', 'بيج تايستي ', 0, 3, '2017-06-07 19:07:39', '2017-07-01 22:39:38'),
(8, 'decafe ', 'قهوة', 6, 4, 1, 3, 1, 0, '3.45', 89, '/files/16836_26797banner3.jpg', '100', '2016-06-07', '2018-06-07', 'big mak', 'بيج ماك', 0, 5, '2017-06-07 19:11:23', '2017-07-01 22:35:42'),
(9, 'roial', 'رويال', 6, 1, 1, 3, 1, 0, '2.555', 1, '/files/add-3.jpg', '150', '2016-06-07', '2018-06-07', 'mak roial', 'ماك رويال', 0, 0, '2017-06-07 19:14:46', '2017-07-01 22:47:45'),
(10, 'Cafe Francoeur', 'قهوة', 7, 1, 1, 3, 1, 0, '10', 69, '/files/big1.jpg', '1', '2016-06-07', '2018-06-07', 'falafil', 'فلافل', 0, 0, '2017-06-07 21:14:21', '2017-07-02 09:30:18'),
(11, 'coffee2', 'قهوة3', 6, 1, 1, 3, 1, 0, '5', 199, '/files/16836_26797banner3.jpg', '1', '2016-06-07', '2018-06-07', 'Burger max', 'Burger max', 0, 5, '2017-06-07 21:27:55', '2017-07-01 22:38:13'),
(12, 'test', 'test', 3, 1, 1, 3, 1, 0, '44', 1000, '/files/13082_24139coffees6.jpg', '1', '2017-06-29', '2017-06-29', 'sdf', 'sdf', 0, 0, '2017-06-29 11:10:42', '2017-06-29 11:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `coffee_rate`
--

CREATE TABLE `coffee_rate` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `coffee_id` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coffee_rate`
--

INSERT INTO `coffee_rate` (`id`, `users_id`, `coffee_id`, `rate`, `description`, `status`, `notification`, `created_at`, `updated_at`) VALUES
(2, 82, 3, 3, 'sdfsdf', 0, 1, '1', '2017-06-14 22:37:30'),
(3, 82, 8, 5, 'dvsd', 0, 0, '2017-06-14 22:37:04', '2017-06-14 22:44:13'),
(4, 82, 11, 5, 'sdsssssssssssss', 0, 1, '2017-06-14 22:37:43', '2017-06-14 22:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `columns_info`
--

CREATE TABLE `columns_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `columns_info` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `columns_info`
--

INSERT INTO `columns_info` (`id`, `users_id`, `columns_info`, `created_at`, `updated_at`) VALUES
(3, '1', '{\"/admin/reports/closed-orders\":{\"0\":{\"Order#\":1,\"Login\":1,\"Live/Demo\":1,\"Symbol\":1,\"Type\":1,\"Lots\":0,\"Open Time\":0,\"Open Price\":0,\"SL\":1,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1}},\"/admin/reports/open-orders\":{\"0\":{\"Order#\":1,\"Login\":1,\"Live/Demo\":1,\"Symbol\":0,\"Type\":0,\"Lots\":1,\"Open Time\":0,\"Open Price\":0,\"SL\":0,\"TP\":1,\"Commission\":0,\"Swaps\":0,\"Price\":1,\"Profit\":1}},\"/admin/reports/account-statement\":{\"0\":{\"Order#\":0,\"Login\":0,\"Live/Demo\":0,\"Symbol\":0,\"Type\":0,\"Lots\":0,\"Open Time\":1,\"Open Price\":0,\"SL\":0,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1},\"1\":{\"Order#\":0,\"Login\":1,\"Live/Demo\":0,\"Symbol\":0,\"Type\":1,\"Lots\":1,\"Open Time\":1,\"Open Price\":1,\"SL\":1,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1},\"2\":{\"Order#\":1,\"Login\":0,\"Live/Demo\":0,\"Symbol\":0,\"Type\":1,\"Lots\":1,\"Open Time\":1,\"Open Price\":1,\"SL\":1,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1},\"3\":{\"Order#\":1,\"Login\":1,\"Live/Demo\":1,\"Symbol\":1,\"Type\":1,\"Lots\":0,\"Open Time\":0,\"Open Price\":1,\"SL\":1,\"TP\":1,\"Commission\":1,\"Swaps\":1,\"Price\":1,\"Profit\":1},\"4\":{\"Order#\":1,\"Login\":1,\"Live/Demo\":1,\"Symbol\":0,\"Type\":0,\"Lots\":0,\"Open Time\":1,\"Open Price\":0,\"SL\":0,\"TP\":0,\"Commission\":0,\"Swaps\":0,\"Price\":0,\"Profit\":1}},\"/admin/accounts/accounts-list\":{\"0\":{\"Id\":1,\"Last Name\":0,\"Email \":1,\"Last Login\":1,\"\":1}},\"/admin/mt4Configrations/groups-list\":{\"0\":{\"Name\":1,\"Company\":1,\"MC/SO\":1}},\"/admin/reports/daily-report\":{\"0\":{\"Login\":1,\"Live/Demo\":1,\"Time\":1,\"Group\":1,\"Bank\":0,\"Prev balance\":0,\"Balance\":0,\"Deposit\":0,\"Credit\":0,\"Profit Closed\":1,\"Profit\":1,\"Equity\":1,\"Margin\":1,\"Margin Free\":1}},\"/admin/settings/admins-list\":{\"0\":{\"Id\":1,\"First Name\":1,\"Last Name\":1,\"Email \":1,\"\":1}}}', '2017-01-18 10:43:53', '2017-02-06 09:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `users_id`, `first_name`, `last_name`, `email`, `phone`, `comments`, `created_at`, `updated_at`) VALUES
(1, 0, '', '', 'kijhiho@gfg.jh', '7676', 'gf', '2017-06-02 16:25:18', '2017-06-02 16:25:18'),
(2, 0, '', '', 'kijhiho@gfg.jh', '7676', 'gf', '2017-06-02 16:26:32', '2017-06-02 16:26:32'),
(3, 0, '', '', 'skdf@Oho.df', '7657', 'iuhiu', '2017-06-02 16:27:15', '2017-06-02 16:27:15'),
(4, 0, '', '', 'dfsd@kjd.sdf', '234234', 'sdf', '2017-06-02 16:27:54', '2017-06-02 16:27:54'),
(5, 0, 'klajds', 'klsjdf', 'jksldf@klsjdf.sdf', '8797', 'lskdjf\r\n', '2017-07-10 12:14:37', '2017-07-10 12:14:37'),
(6, 0, 'sdf', 'fsdfsdg', 'sdf@lkdfg.sdf', '345345', 'sdf\r\n', '2017-07-19 10:46:21', '2017-07-19 10:46:21'),
(7, 0, 'sdf', 'ldfskgj', 'dfg@lkdfg.sdf', '436345', 'dlfgjdfg', '2017-07-19 10:48:18', '2017-07-19 10:48:18'),
(8, 0, 'skodfj', 'oijoifwsdf', 'sdf@odfg.sdf', '435345', 'sfoidgj', '2017-08-07 08:28:49', '2017-08-07 08:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE `cuisine` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`id`, `name_en`, `name_ar`, `status`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'kuwaiti', 'كويتي', 0, 'description kuwaiti ', 'شرح المطبخ الكويتي', '2017-05-19 13:42:52', '2017-06-07 16:37:00'),
(2, 'chinese', 'صيني', 0, 'description chinese', 'شرح المطبخ الصيني', '2017-05-19 13:43:48', '2017-06-07 16:38:03'),
(3, 'lebanese', 'لبناني', 0, 'description of lebanese cuisine', 'المطعم اللبناني', '2017-06-07 16:39:37', '2017-06-07 16:39:37'),
(4, 'continental', 'غربي', 0, 'continental description', 'continental ', '2017-06-07 16:41:11', '2017-06-07 16:41:11'),
(5, 'indian', 'هندي', 0, 'indian', 'هندي', '2017-06-07 16:41:55', '2017-06-07 16:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_menu`
--

CREATE TABLE `delivery_menu` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `shop_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_menu`
--

INSERT INTO `delivery_menu` (`id`, `name_en`, `name_ar`, `shop_id`, `status`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'deliver menu 1', 'قائمة التوصيل 1', 4, 1, 'deliver menu description 1', 'شرح قائمة التوصيل 1', '2017-05-19 14:45:06', '2017-05-19 14:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `email_group`
--

CREATE TABLE `email_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_group`
--

INSERT INTO `email_group` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'desdf', '2017-03-21 11:14:09', '2017-03-21 11:14:09'),
(2, 'drivers', '2017-06-08 10:53:35', '2017-06-08 10:53:35'),
(3, 'all', '2017-06-21 13:04:38', '2017-06-21 13:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `email_group_users`
--

CREATE TABLE `email_group_users` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_group_users`
--

INSERT INTO `email_group_users` (`id`, `group_id`, `users_id`, `type`) VALUES
(97, 1, 3, NULL),
(98, 1, 7, NULL),
(99, 1, 13, NULL),
(100, 2, 15, NULL),
(101, 2, 17, NULL),
(102, 2, 18, NULL),
(103, 2, 19, NULL),
(104, 2, 20, NULL),
(105, 2, 21, NULL),
(106, 2, 22, NULL),
(107, 2, 23, NULL),
(108, 3, 13, NULL),
(109, 3, 15, NULL),
(110, 3, 16, NULL),
(111, 3, 17, NULL),
(112, 3, 18, NULL),
(113, 3, 19, NULL),
(114, 3, 20, NULL),
(115, 3, 21, NULL),
(116, 3, 22, NULL),
(117, 3, 23, NULL),
(118, 3, 24, NULL),
(119, 3, 25, NULL),
(120, 3, 26, NULL),
(121, 3, 27, NULL),
(122, 3, 28, NULL),
(123, 3, 29, NULL),
(124, 3, 30, NULL),
(125, 3, 31, NULL),
(126, 3, 33, NULL),
(127, 3, 34, NULL),
(128, 3, 35, NULL),
(129, 3, 36, NULL),
(130, 3, 37, NULL),
(131, 3, 38, NULL),
(132, 3, 39, NULL),
(133, 3, 40, NULL),
(134, 3, 41, NULL),
(135, 3, 43, NULL),
(136, 3, 44, NULL),
(137, 3, 64, NULL),
(138, 3, 66, NULL),
(139, 3, 67, NULL),
(140, 3, 68, NULL),
(141, 3, 70, NULL),
(142, 3, 71, NULL),
(143, 3, 72, NULL),
(144, 3, 73, NULL),
(145, 3, 74, NULL),
(146, 3, 77, NULL),
(147, 3, 78, NULL),
(148, 3, 79, NULL),
(149, 3, 80, NULL),
(150, 3, 81, NULL),
(151, 3, 82, NULL),
(152, 3, 83, NULL),
(153, 3, 85, NULL),
(154, 3, 86, NULL),
(155, 3, 87, NULL),
(156, 3, 88, NULL),
(157, 3, 89, NULL),
(158, 3, 90, NULL),
(159, 3, 91, NULL),
(160, 3, 92, NULL),
(161, 3, 93, NULL),
(162, 3, 94, NULL),
(163, 3, 95, NULL),
(164, 3, 96, NULL),
(165, 3, 97, NULL),
(166, 3, 98, NULL),
(167, 3, 99, NULL),
(168, 3, 100, NULL),
(169, 3, 101, NULL),
(170, 3, 102, NULL),
(171, 3, 103, NULL),
(172, 3, 104, NULL),
(173, 3, 105, NULL),
(174, 3, 106, NULL),
(175, 3, 107, NULL),
(176, 3, 108, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_mass_queue`
--

CREATE TABLE `email_mass_queue` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `last_users_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `email_group_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_mass_template`
--

CREATE TABLE `email_mass_template` (
  `id` int(11) NOT NULL,
  `email_group_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_mass_template`
--

INSERT INTO `email_mass_template` (`id`, `email_group_id`, `name`, `subject`, `body`, `language`, `created_at`, `updated_at`) VALUES
(1, 1, 'hhhhhhhhhhh', 'hhhhhhhhh', '', 'en', '2017-03-21 12:18:42', '2017-03-21 12:22:46'),
(2, 1, 'sdfg', 'sdfg', '<p>gdgsdf</p>\r\n', 'en', '2017-03-23 08:32:02', '2017-03-23 08:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `to_field` varchar(255) DEFAULT NULL,
  `to_email` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `name`, `subject`, `body`, `type`, `to_field`, `to_email`, `language`, `status`, `created_at`, `updated_at`) VALUES
(2, 'signUp', 'sssssss', '<p><img alt=\"\" src=\"http://localhost:8000/files/15697_31158business-user-group-icon-44614.png\" style=\"height:256px; width:256px\" />sssssss</p>\r\n', 0, 'sssssssssss', 'ssssss', 'en', 0, '2017-03-21 11:50:22', '2017-03-23 08:42:43'),
(3, 'signUp', 'sdfg', 'sdfgggggggg', 2, 'gdf', 'gsdfg', 'en', 0, '2017-03-21 12:05:04', '2017-03-21 12:05:04'),
(4, 'signUp', 'gmmmmmmm', 'mmmmmmmmmmmmm', 0, 'mmmmmm', 'm', 'en', 1, '2017-03-21 12:05:34', '2017-03-21 12:05:34'),
(5, 'forgetPassword', 'forgetPassword', 'reminder_id : 25<br>reminder_user_id : 82<br>reminder_code : g8MwzIY7Tg58tl8zR5pO5J4E58WGtVvv<br>reminder_completed : <br>reminder_completed_at : <br>reminder_created_at : 2017-06-06 22:49:23<br>reminder_updated_at : 2017-06-06 22:49:23<br>accountInfo_id ', 0, 'accountInfo_email', 'manager@fintolog.com', 'en', 0, '2017-06-06 22:49:23', '2017-06-06 22:49:23'),
(6, 'forgetPassword', 'client forget password', '<p>this is forget password for client</p>\r\n', 1, 'accountInfo_email', 'admin@fintolog.com', 'en', 0, '2017-06-15 23:57:40', '2017-06-15 23:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, ' What is Cofe District?', '	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>\r\n				', '2017-06-30 15:31:01', '2017-06-30 15:31:01'),
(2, ' How to create an account? ', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>\r\n				\r\n				\r\n				<ul>\r\n					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one.</li>\r\n					\r\n					<li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</li>\r\n					\r\n					<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College</li>\r\n		\r\n					\r\n				</ul>\r\n', '2017-06-30 16:12:20', '2017-06-30 16:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `gift_card`
--

CREATE TABLE `gift_card` (
  `id` int(11) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `discount_type` int(11) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gift_card`
--

INSERT INTO `gift_card` (`id`, `title_en`, `title_ar`, `price`, `img`, `description_en`, `description_ar`, `discount_type`, `discount`, `created_at`, `updated_at`) VALUES
(1, '  Gift Card', ' Gift Card', '10', '/files/big1.jpg', 'Discount 10% on Total Bill', 'Discount 10% on Total Bill', 0, '10', '2017-07-01 20:00:43', '2017-06-20 21:41:32'),
(2, 'percentage', 'نسبي', '12', '/files/18952_9633res4.jpg', 'percentage gift card', 'نسبي', 1, '13', '2017-07-10 08:20:11', '2017-07-10 08:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `gift_card_order`
--

CREATE TABLE `gift_card_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `gift_card_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gift_card_users`
--

CREATE TABLE `gift_card_users` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `gift_card_id` int(11) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `balance` double NOT NULL,
  `hash` varchar(500) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `payment_type` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gift_card_users`
--

INSERT INTO `gift_card_users` (`id`, `sender_id`, `users_id`, `gift_card_id`, `price`, `balance`, `hash`, `status`, `payment_type`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 0, 82, 1, '10', 10, '00163fbf1d55770f5c8bd6bb266194bb33f0942c26e8cc845b72c457b9fdfbf6', 2, 1, 0, '2017-07-31 19:40:07', '2017-07-31 16:40:07'),
(2, 0, 82, 1, '10', 10, 'bf27695359d53d01a35f20c36726e1051fe62f63c3f4b1885451a40714f47e25', 2, 1, 0, '2017-07-19 21:04:12', '2017-07-19 18:04:12'),
(3, 0, 82, 1, '10', 10, '4cb9228d5bdcbc9936b26db17039fd3b338834403d6176fcb6d5d151785a4f84', 1, 1, 0, '2017-07-01 19:39:13', '2017-07-01 16:39:13'),
(4, 0, 82, 1, '10', 10, 'd11447ea45af1a13b467d8cb5a862976e349b0965069ab6ba89816b35724f042', 1, 1, 0, '2017-07-01 19:40:07', '2017-07-01 16:40:07'),
(9, 82, 82, 1, '10', 10, '03c7bce36a0d23eb0c89121e0bc481fa0e019040cd3cbb1fadecc6dbbb844f2e', 2, 1, 0, '2017-07-01 16:39:13', '2017-07-01 16:39:13'),
(10, 82, 15, 1, '10', 10, '150c6440d12db36bda181e47bcf923d16f9d669de7f197282b33a988f4c61519', 2, 1, 0, '2017-07-01 16:40:07', '2017-07-01 16:40:07'),
(11, 0, 82, 1, '10', 10, '583bcf753e9b9701273d5342d6e43afee6395e5b618dd3b9363eae639b1f17fe', 2, 1, 0, '2017-07-02 12:03:59', '2017-07-02 09:03:59'),
(13, 0, 82, 1, '10', 10, 'ed3906266dd8e521499d18c60666a2b8dbd0b2bd7f0c525c2422ac94e684c3e4', 1, 1, 0, '2017-07-02 12:03:48', '2017-07-02 09:03:48'),
(14, 82, 13, 1, '10', 10, '51342f103a8071f007e5f471b9e62d417665d6e013487b5e39dc98a0d9d8efd5', 0, 1, 0, '2017-07-02 09:03:48', '2017-07-02 09:03:48'),
(15, 0, 160, 2, '12', 13, '06a89a388b587bff4352796b0b8616951ba8a01974fdec6a09ffc0acbcf702b2', 1, 1, 0, '2017-07-29 20:22:39', '2017-07-29 17:22:39'),
(16, 160, 82, 2, '12', 13, 'c15a3ce876f487ff5cfce16416e4a4cbdbbf2031e765dc377174277dc5c50463', 2, 1, 0, '2017-07-29 17:22:39', '2017-07-29 17:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `governorate`
--

CREATE TABLE `governorate` (
  `id` int(11) NOT NULL,
  `name_en` varchar(50) DEFAULT NULL,
  `name_ar` varchar(50) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `governorate`
--

INSERT INTO `governorate` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(3, 'governorate 1', 'المحافظة 1', '2017-05-19 12:59:05', '2017-05-19 12:59:05'),
(4, 'GOVERNORATE 2', 'محافظة 2', '2017-05-19 13:01:24', '2017-05-19 13:01:24'),
(5, 'GOVERNORATE 3', 'محافظة 3', '2017-05-19 13:01:48', '2017-05-19 13:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `knet`
--

CREATE TABLE `knet` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL DEFAULT '0',
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

INSERT INTO `knet` (`id`, `payment_id`, `users_id`, `order_id`, `amount`, `PaymentID`, `Result`, `PostDate`, `TranID`, `Auth`, `Ref`, `TrackID`, `UDF1`, `UDF2`, `UDF3`, `UDF4`, `UDF5`, `created_at`, `updated_at`) VALUES
(2, 0, 0, 0, '', '3073595081172210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-09 19:51:18', '2017-08-09 19:51:18'),
(3, 0, 0, 0, '', '3073595081172210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-09 19:57:13', '2017-08-09 19:57:13'),
(4, 0, 82, 699, '20', '8433168202372400', NULL, NULL, NULL, NULL, NULL, '699', 'taylor', NULL, NULL, NULL, '', '2017-08-28 20:20:58', '2017-08-28 20:20:58'),
(5, 0, 173, 701, '20', '3632645351472530', NULL, NULL, NULL, NULL, NULL, '701', 'guest', NULL, NULL, NULL, '', '2017-09-10 11:35:29', '2017-09-10 11:35:29'),
(6, 0, 82, 698, '9', '1737408340072550', NULL, NULL, NULL, NULL, NULL, '698', 'taylor', NULL, NULL, NULL, '', '2017-09-11 21:34:16', '2017-09-11 21:34:16'),
(7, 0, 82, 698, '8', '5035453380072550', NULL, NULL, NULL, NULL, NULL, '698', 'taylor', NULL, NULL, NULL, '', '2017-09-11 21:38:39', '2017-09-11 21:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title_en`, `title_ar`, `img`, `link`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'demo data', 'demo data', '/files/2image.jpg', 'demo data', 'demo data', 'demo data', '2017-06-20 11:23:07', '2017-06-20 11:23:07'),
(2, 'fdgsf', 'dfdfg', '/files/18952_9633res4.jpg,/files/27734_1239banner2.jpg,/files/31768_22129banner1.jpg,/files/18952_9633res4.jpg,/files/27734_1239banner2.jpg,/files/31768_22129banner1.jpg,/files/27734_1239banner2.jpg,/files/add-inn1.jpg,/files/big1.jpg', 'dfgdfg', 'dfgdfgdfg', 'dfgfdg', '2017-07-12 20:09:16', '2017-07-12 17:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `menu_section`
--

CREATE TABLE `menu_section` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `shop_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_section`
--

INSERT INTO `menu_section` (`id`, `name_en`, `name_ar`, `shop_id`, `status`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'menu section 1', 'قسم القاشمة 1', 4, 0, 'description menu section 1', 'شرح القائمة 1', '2017-05-20 14:06:42', '2017-05-20 14:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `coffee_id` int(11) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `coffee_id`, `title_en`, `title_ar`, `img`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 3, 'offer1 ', 'offer 1', '/files/16836_26797banner3.jpg', 'offer', 'offer', '2017-06-20 10:49:42', '2017-06-20 10:49:42'),
(2, 8, 'offer2', 'offer2', '/files/18952_9633res4.jpg', 'offer2', 'offer2', '2017-07-01 00:32:17', '2017-06-30 21:32:17'),
(3, 4, 'offer2', 'offer2', '/files/26342_5159coffees1.jpg', 'offer2', 'offer2', '2017-07-01 00:28:54', '2017-06-30 21:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `operation_hour`
--

CREATE TABLE `operation_hour` (
  `id` int(11) NOT NULL,
  `shop_area_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `day` varchar(20) DEFAULT NULL,
  `shift1_from` varchar(20) DEFAULT NULL,
  `shift1_to` varchar(20) DEFAULT NULL,
  `shift2_from` varchar(20) DEFAULT NULL,
  `shift2_to` varchar(20) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `operation_hour`
--

INSERT INTO `operation_hour` (`id`, `shop_area_id`, `shop_id`, `day`, `shift1_from`, `shift1_to`, `shift2_from`, `shift2_to`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '0', '08:00:00', '12:00:00', '12:00:00', '20:00:00', '2017-05-26 22:22:44', '2017-05-26 22:22:44'),
(2, 2, 3, '4', '08:00:00', '12:00:00', '12:00:00', '20:', '2017-05-29 11:14:44', '2017-05-29 11:14:44'),
(3, 2, 4, '1', '08:00:00', '12:00:00', '12:00:00', '20:00:00', '2017-05-29 11:16:33', '2017-05-29 11:16:33'),
(4, 1, 3, '0', '08:00:00', '13:00:00', '13:00:00', '23:00:00', '2017-06-02 11:32:13', '2017-06-02 11:32:13'),
(5, 7, 6, '0', '08:00:00', '13:00:00', '13:00:00', '23:00:00', '2017-06-22 19:53:25', '2017-06-22 19:53:25'),
(6, 7, 6, '4', '08:00:00', '13:00:00', '13:00:00', '23:00:00', '2017-06-22 19:54:09', '2017-06-22 19:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `success_order_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `order_time` varchar(20) DEFAULT NULL,
  `deliver_time` varchar(20) DEFAULT NULL,
  `pickup_period` varchar(20) NOT NULL,
  `expected_time` varchar(10) NOT NULL,
  `deliver_date` varchar(20) DEFAULT NULL,
  `note` text,
  `deliver_charge` varchar(255) DEFAULT NULL,
  `deera_charge` double NOT NULL,
  `extra_charge` double NOT NULL,
  `sub_total` double NOT NULL,
  `total` double NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `notification` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `deliver_type` int(11) NOT NULL,
  `branch` int(11) DEFAULT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `success_order_id`, `users_id`, `shop_id`, `area_id`, `from_id`, `address_id`, `order_time`, `deliver_time`, `pickup_period`, `expected_time`, `deliver_date`, `note`, `deliver_charge`, `deera_charge`, `extra_charge`, `sub_total`, `total`, `rate`, `point`, `parent_id`, `notification`, `status`, `deliver_type`, `branch`, `created_at`, `updated_at`) VALUES
(320, 0, 82, 4, 3, NULL, 38, NULL, '08:45', '', '', '2017-07-24', NULL, '0', 12, 0, 1584, 1425.6, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-23 15:37:09', '2017-07-24 20:12:00'),
(321, 0, 82, 6, 3, NULL, 38, NULL, '09:00', '', '', '2017-07-24', NULL, '0', 7, 0, 1848, 1829.52, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-23 16:13:48', '2017-07-24 20:05:12'),
(322, 0, 132, 3, 3, NULL, 41, NULL, '10:00', '', '', NULL, NULL, '0', 6, 0, 120, -1680, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 06:33:36', '2017-07-24 06:35:15'),
(323, 0, 132, 3, 3, NULL, 41, NULL, '12:40', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(324, 0, 132, 3, 3, NULL, 41, NULL, '12:00', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(325, 0, 132, 3, 3, NULL, 41, NULL, '10:40', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(326, 0, 132, 3, 3, NULL, 41, NULL, '16:40', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(327, 0, 132, 3, 3, NULL, 41, NULL, '16:40', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(328, 0, 133, 3, 3, NULL, 42, NULL, '', '', '', NULL, NULL, '0', 6, 0, 264, 258, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:41:59', '2017-07-24 07:57:00'),
(329, 0, 133, 3, 3, NULL, 0, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(330, 0, 133, 3, 3, NULL, 0, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(331, 0, 133, 3, 3, NULL, 0, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(332, 0, 133, 3, 3, NULL, 0, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(333, 0, 133, 3, 3, NULL, 0, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:42:13', '2017-07-24 07:42:13'),
(334, 0, 133, 3, 3, NULL, 42, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(335, 0, 133, 3, 3, NULL, 42, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(336, 0, 133, 3, 3, NULL, 42, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(337, 0, 133, 3, 3, NULL, 42, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(338, 0, 133, 3, 3, NULL, 42, NULL, '', '', '', NULL, NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 07:57:00', '2017-07-24 07:57:00'),
(339, 0, 134, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-24 07:57:44', '2017-07-24 07:57:44'),
(340, 0, 135, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-24 08:00:46', '2017-07-24 08:00:46'),
(341, 0, 82, 6, 3, NULL, 38, NULL, '08:15', '', '08:47:00', '2017-07-25', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 3, 0, NULL, '2017-07-24 20:05:12', '2017-07-25 08:38:47'),
(342, 0, 82, 6, 3, NULL, 38, NULL, '09:00', '', '', '2017-07-26', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(343, 0, 82, 6, 3, NULL, 38, NULL, '09:00', '', '', '2017-07-27', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(344, 0, 82, 6, 3, NULL, 38, NULL, '12:00', '', '', '2017-07-28', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(345, 0, 82, 6, 3, NULL, 38, NULL, '08:15', '', '', '2017-07-29', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(346, 0, 82, 6, 3, NULL, 38, NULL, '08:45', '', '', '2017-07-30', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(347, 0, 82, 4, 3, NULL, 38, NULL, '08:45', '', '08:47:00', '2017-07-25', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 3, 0, NULL, '2017-07-24 20:12:00', '2017-07-25 08:38:47'),
(348, 0, 82, 4, 3, NULL, 38, NULL, '08:30', '', '', '2017-07-26', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(349, 0, 82, 4, 3, NULL, 38, NULL, '09:30', '', '', '2017-07-27', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(350, 0, 82, 4, 3, NULL, 38, NULL, '08:30', '', '', '2017-07-28', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(351, 0, 82, 4, 3, NULL, 38, NULL, '08:30', '', '', '2017-07-29', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(352, 0, 136, 7, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-25 05:59:47', '2017-07-25 05:59:47'),
(353, 0, 137, 3, 3, NULL, 46, NULL, '06:30', '', '', '2017-07-25', NULL, NULL, 1, 0, 20, -280, NULL, NULL, 0, 0, 1, 0, NULL, '2017-07-25 06:08:20', '2017-07-25 06:30:11'),
(354, 0, 138, 3, 3, NULL, 0, NULL, '08:34', '', '', '2017-07-25', NULL, NULL, 1, 0, 20, -280, NULL, NULL, 0, 0, 1, 0, 0, '2017-07-25 08:33:51', '2017-07-25 08:34:55'),
(355, 0, 139, 4, 4, NULL, 47, NULL, '08:45', '', '08:58:00', '2017-07-25', NULL, NULL, 2, 0, 13, 11.7, NULL, NULL, 0, 1, 3, 0, NULL, '2017-07-25 08:43:39', '2017-07-25 10:20:48'),
(356, 0, 139, 3, 3, NULL, 47, NULL, '16:00', '', '12:09:00', '2017-07-25', NULL, NULL, 1, 0, 12, -288, NULL, NULL, 0, 1, 3, 0, 6, '2017-07-25 08:58:13', '2017-07-26 08:15:46'),
(357, 0, 139, 3, 3, NULL, 47, NULL, '20:40', '', '12:09:00', '2017-07-25', NULL, NULL, 1, 0, 20, -280, NULL, NULL, 0, 0, 3, 0, 0, '2017-07-25 09:25:23', '2017-07-25 11:50:34'),
(358, 0, 140, 3, 3, NULL, 48, NULL, '11:44', '', '12:00:00', '2017-07-25', NULL, NULL, 1, 0, 20, -280, NULL, NULL, 0, 0, 3, 0, NULL, '2017-07-25 11:43:08', '2017-07-25 11:50:33'),
(359, 0, 142, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-25 17:46:23', '2017-07-25 17:46:23'),
(360, 0, 143, 3, 3, NULL, 0, NULL, '16:40', '', '', '2017-07-26', NULL, NULL, 1, 0, 44, 43, NULL, NULL, 0, 0, 1, 0, 6, '2017-07-26 10:25:14', '2017-07-26 10:25:37'),
(361, 0, 144, 3, 3, NULL, 0, NULL, '21:20', '', '', '2017-07-26', NULL, NULL, 1, 0, 20, -280, NULL, NULL, 0, 0, 1, 0, 3, '2017-07-26 10:29:10', '2017-07-26 10:38:15'),
(362, 0, 144, 3, 3, NULL, 0, NULL, '08:40', '', '', '2017-07-26', NULL, NULL, 1, 0, 44, 43, NULL, NULL, 0, 0, 1, 2, 6, '2017-07-26 10:40:18', '2017-07-26 10:40:42'),
(363, 0, 145, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-28 06:12:23', '2017-07-28 06:12:23'),
(364, 0, 146, 4, 4, NULL, 0, NULL, '08:46', '', '', '2017-07-28', NULL, NULL, 2, 0, 13, 11.7, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 06:20:11', '2017-07-28 08:46:58'),
(365, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-29', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(366, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-30', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(367, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-31', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(368, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-01', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(369, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(370, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:34:24', '2017-07-28 08:34:24'),
(371, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-29', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(372, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-30', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(373, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-31', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(374, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-01', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(375, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(376, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:44:23', '2017-07-28 08:44:23'),
(377, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-29', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(378, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-30', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(379, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-31', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(380, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-01', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(381, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(382, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:21', '2017-07-28 08:46:21'),
(383, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-29', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(384, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-30', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(385, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-07-31', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(386, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-01', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(387, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(388, 0, 146, 4, 4, NULL, 0, NULL, '', '', '', '2017-08-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 08:46:44', '2017-07-28 08:46:44'),
(389, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-08', NULL, '6', 0, 0, 648, -1158, NULL, NULL, 0, 0, 1, 1, NULL, '2017-07-28 13:17:08', '2017-08-08 10:14:19'),
(390, 0, 147, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-28 13:18:12', '2017-07-28 13:18:12'),
(391, 0, 148, 4, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-28 18:55:25', '2017-07-28 18:55:25'),
(392, 0, 149, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-28 19:03:42', '2017-07-28 19:03:42'),
(393, 0, 150, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-28 19:21:53', '2017-07-28 19:21:53'),
(394, 0, 151, 4, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-28 20:01:34', '2017-07-28 20:01:34'),
(395, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '17.5', 0, 0, 273, 263.2, NULL, NULL, 0, 0, 1, 1, NULL, '2017-07-28 20:03:01', '2017-08-09 05:28:00'),
(396, 0, 82, 3, 4, NULL, 38, NULL, '13:21', '', '', '2017-07-29', NULL, '1', 0, 0, 44, 44, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-28 20:22:55', '2017-07-29 13:21:57'),
(397, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-31', NULL, '0', 14, 0, 91, 81.9, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-29 07:00:56', '2017-07-31 09:21:37'),
(398, 0, 155, 7, 5, NULL, 49, NULL, '13:20', '', '', '2017-07-29', NULL, '1', 0, 0, 0, 1, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-29 07:21:54', '2017-07-29 13:20:40'),
(399, 0, 159, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-29 13:32:47', '2017-07-29 13:36:21'),
(401, 0, 160, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-07-29 14:31:20', '2017-07-29 14:31:20'),
(402, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(403, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(404, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(405, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-05', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(406, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-06', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(407, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-07', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:05:56', '2017-07-31 09:05:56'),
(408, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-07', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(409, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-08', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(410, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(411, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(412, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(413, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:12:03', '2017-07-31 09:12:03'),
(414, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-01', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(415, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(416, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(417, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(418, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-05', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(419, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-06', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:39', '2017-07-31 09:13:39'),
(420, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-05', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(421, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-06', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(422, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-07', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(423, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-08', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(424, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(425, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:13:54', '2017-07-31 09:13:54'),
(426, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(427, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(428, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(429, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-05', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(430, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-06', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(431, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-07', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:17:59', '2017-07-31 09:17:59'),
(432, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-08', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(433, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(434, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(435, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(436, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(437, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-07-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:20:18', '2017-07-31 09:20:18'),
(438, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-01', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(439, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(440, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(441, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(442, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-05', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(443, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-06', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:21:37', '2017-07-31 09:21:37'),
(444, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-01', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(445, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(446, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(447, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(448, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-05', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(449, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-06', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:22:37', '2017-07-31 09:22:37'),
(450, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-01', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:23:19', '2017-07-31 09:23:19'),
(451, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-02', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:23:19', '2017-07-31 09:23:19'),
(452, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:23:19', '2017-07-31 09:23:19'),
(453, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:23:19', '2017-07-31 09:23:19'),
(454, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-05', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:23:20', '2017-07-31 09:23:20'),
(455, 0, 82, 4, 4, NULL, 38, NULL, '', '', '', '2017-08-06', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-07-31 09:23:20', '2017-07-31 09:23:20'),
(456, 0, 161, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-08-02 06:02:23', '2017-08-02 06:02:23'),
(457, 0, 162, 4, 4, NULL, 51, NULL, '16:36', '', '', '2017-08-06', NULL, NULL, 2, 0, 13, 11.7, NULL, NULL, 0, 0, 1, 2, NULL, '2017-08-06 13:46:39', '2017-08-06 16:36:06'),
(458, 0, 163, 3, 3, NULL, 0, NULL, '19:51', '', '', '2017-08-07', NULL, NULL, 1, 0, 20, -280, NULL, NULL, 0, 0, 1, 2, 3, '2017-08-07 05:30:29', '2017-08-07 05:31:33'),
(459, 0, 163, 4, 5, NULL, 52, NULL, '08:45', '', '', '2017-08-07', NULL, '2.5', 0, 0, 39, 37.6, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-07 07:56:47', '2017-08-07 08:45:29'),
(460, 0, 163, 7, 5, NULL, 52, NULL, '08:03', '', '', '2017-08-07', NULL, '1', 0, 0, 0, 1, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-07 07:59:27', '2017-08-07 08:03:28'),
(461, 0, 164, 4, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-08-07 08:47:30', '2017-08-07 08:47:30'),
(462, 0, 164, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-08-07 13:41:05', '2017-08-07 13:41:05'),
(463, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(464, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(465, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(466, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(467, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(468, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(469, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 2, NULL, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(470, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(471, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(472, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 10:15:19', '2017-08-08 10:15:19'),
(473, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 1, 1, 1, NULL, '2017-08-08 11:53:46', '2017-08-08 13:18:36'),
(474, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(475, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(476, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(477, 0, 82, 3, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 11:53:46', '2017-08-08 11:53:46'),
(478, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(479, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(480, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(481, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(482, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(483, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:50:09', '2017-08-08 17:50:09'),
(484, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(485, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(486, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(487, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(488, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(489, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 17:54:18', '2017-08-08 17:54:18'),
(490, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(491, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(492, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(493, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(494, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(495, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:08:40', '2017-08-08 18:08:40'),
(496, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(497, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(498, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(499, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(500, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(501, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:09:07', '2017-08-08 18:09:07'),
(502, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(503, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(504, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(505, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(506, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(507, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:10', '2017-08-08 18:11:10'),
(508, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(509, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(510, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(511, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(512, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(513, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:15', '2017-08-08 18:11:15'),
(514, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(515, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(516, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(517, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(518, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(519, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:11:20', '2017-08-08 18:11:20'),
(520, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(521, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(522, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(523, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(524, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(525, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:16:42', '2017-08-08 18:16:42'),
(526, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(527, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(528, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(529, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(530, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(531, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:17:52', '2017-08-08 18:17:52'),
(532, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(533, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(534, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(535, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(536, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(537, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:19:06', '2017-08-08 18:19:06'),
(538, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(539, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(540, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(541, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(542, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(543, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:29:33', '2017-08-08 18:29:33'),
(544, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(545, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(546, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(547, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(548, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(549, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:30:26', '2017-08-08 18:30:26'),
(550, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(551, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(552, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(553, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(554, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(555, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 18:37:09', '2017-08-08 18:37:09'),
(556, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(557, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(558, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(559, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(560, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(561, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:20:14', '2017-08-08 19:20:14'),
(562, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(563, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(564, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(565, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(566, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(567, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:07', '2017-08-08 19:59:07'),
(568, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(569, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(570, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(571, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(572, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(573, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 19:59:55', '2017-08-08 19:59:55'),
(574, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(575, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(576, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(577, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(578, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(579, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:00:11', '2017-08-08 20:00:11'),
(580, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-09', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(581, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(582, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(583, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(584, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(585, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-08 20:05:59', '2017-08-08 20:05:59'),
(586, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(587, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(588, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(589, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(590, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(591, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:28:00', '2017-08-09 05:28:00'),
(592, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(593, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(594, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(595, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(596, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(597, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 05:33:27', '2017-08-09 05:33:27'),
(598, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(599, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(600, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(601, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(602, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(603, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:18:07', '2017-08-09 06:18:07'),
(604, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(605, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(606, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(607, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(608, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(609, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:24', '2017-08-09 06:19:24'),
(610, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(611, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(612, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(613, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(614, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(615, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:19:44', '2017-08-09 06:19:44'),
(616, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(617, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(618, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(619, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(620, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(621, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:20:48', '2017-08-09 06:20:48'),
(622, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(623, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(624, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(625, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(626, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(627, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:25:36', '2017-08-09 06:25:36'),
(628, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(629, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(630, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:27:14', '2017-08-09 06:27:14');
INSERT INTO `order` (`id`, `success_order_id`, `users_id`, `shop_id`, `area_id`, `from_id`, `address_id`, `order_time`, `deliver_time`, `pickup_period`, `expected_time`, `deliver_date`, `note`, `deliver_charge`, `deera_charge`, `extra_charge`, `sub_total`, `total`, `rate`, `point`, `parent_id`, `notification`, `status`, `deliver_type`, `branch`, `created_at`, `updated_at`) VALUES
(631, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(632, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(633, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:27:14', '2017-08-09 06:27:14'),
(634, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(635, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(636, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(637, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(638, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(639, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:29:32', '2017-08-09 06:29:32'),
(640, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(641, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(642, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(643, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(644, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(645, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:32:44', '2017-08-09 06:32:44'),
(646, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(647, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(648, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(649, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(650, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(651, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:35:35', '2017-08-09 06:35:35'),
(652, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(653, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(654, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(655, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(656, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(657, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 06:36:30', '2017-08-09 06:36:30'),
(658, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(659, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(660, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(661, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(662, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(663, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:49:08', '2017-08-09 07:49:08'),
(664, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(665, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(666, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(667, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(668, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(669, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:50:04', '2017-08-09 07:50:04'),
(670, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(671, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(672, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(673, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(674, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(675, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:18', '2017-08-09 07:52:18'),
(676, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(677, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(678, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(679, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(680, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(681, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 07:52:49', '2017-08-09 07:52:49'),
(682, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:01:47', '2017-08-09 08:01:47'),
(683, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:01:47', '2017-08-09 08:01:47'),
(684, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:01:47', '2017-08-09 08:01:47'),
(685, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:01:48', '2017-08-09 08:01:48'),
(686, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:01:48', '2017-08-09 08:01:48'),
(687, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:01:48', '2017-08-09 08:01:48'),
(688, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-10', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(689, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-11', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(690, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-12', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(691, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-13', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(692, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-14', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(693, 0, 82, 4, 6, NULL, 38, NULL, '', '', '', '2017-08-15', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, 1, NULL, '2017-08-09 08:07:54', '2017-08-09 08:07:54'),
(695, 0, 165, 4, 4, NULL, 0, NULL, '20', '', '', '2017-08-14', NULL, '0', 2, 0, 39, 35.1, NULL, NULL, 0, 0, 1, 2, 0, '2017-08-14 05:40:18', '2017-08-14 06:19:06'),
(698, 0, 82, 4, 4, NULL, 38, NULL, '21:58:38', '', '', '2017-09-11', NULL, '0', 2, 0, 13, 11.7, NULL, NULL, 0, 0, 0, 2, 0, '2017-08-21 11:24:43', '2017-09-11 21:38:38'),
(699, 0, 82, 3, 3, NULL, 38, NULL, '21:00:54', '', '', '2017-08-28', NULL, '0', 1, 0, 20, -280, NULL, NULL, 0, 0, 1, 2, 0, '2017-08-28 20:20:17', '2017-08-28 20:20:55'),
(700, 0, 168, 3, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-09-10 07:05:55', '2017-09-10 07:05:55'),
(701, 0, 173, 3, 3, NULL, 0, NULL, '11:55:26', '', '', '2017-09-10', NULL, '0', 1, 0, 20, -280, NULL, NULL, 0, 0, 0, 2, 0, '2017-09-10 11:19:07', '2017-09-10 11:35:26'),
(702, 0, 174, 4, 0, NULL, 0, NULL, NULL, '', '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, 0, NULL, '2017-09-10 11:51:01', '2017-09-10 11:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_driver`
--

CREATE TABLE `order_driver` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `current_long` varchar(255) DEFAULT NULL,
  `current_lat` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_driver`
--

INSERT INTO `order_driver` (`id`, `users_id`, `order_id`, `current_long`, `current_lat`, `status`, `note`, `notification`, `created_at`, `updated_at`) VALUES
(1, 82, 347, '35.8746053', '31.9799521', 0, NULL, 1, '2017-07-25 08:38:47', '2017-07-25 10:17:52'),
(2, 82, 341, '35.8746053', '31.9799521', 0, NULL, 0, '2017-07-25 08:38:47', '2017-07-25 08:38:47'),
(3, 82, 355, '35.8746053', '31.9799521', 0, NULL, 1, '2017-07-25 08:45:42', '2017-07-25 10:17:47'),
(4, 82, 358, '35.8746053', '31.9799521', 0, NULL, 0, '2017-07-25 11:50:33', '2017-07-25 11:50:33'),
(5, 82, 357, '35.8746053', '31.9799521', 0, NULL, 0, '2017-07-25 11:50:33', '2017-07-25 11:50:33'),
(6, 82, 356, '35.8746053', '31.9799521', 0, NULL, 1, '2017-07-25 11:50:34', '2017-07-25 12:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `module_id` varchar(50) NOT NULL DEFAULT '0',
  `voucher_id` int(11) NOT NULL,
  `voucher_amount` double NOT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `users_id`, `amount`, `status`, `type`, `module_id`, `voucher_id`, `voucher_amount`, `notification`, `created_at`, `updated_at`) VALUES
(24, 322, 132, '-280', 0, 0, '', 0, 0, 0, '2017-07-24 06:35:15', '2017-07-24 06:35:15'),
(25, 328, 133, '43', 0, 0, '', 0, 0, 0, '2017-07-24 07:42:13', '2017-07-24 07:57:00'),
(26, 340, 135, '-280', 0, 0, '', 0, 0, 0, '2017-07-24 08:01:42', '2017-07-24 08:01:42'),
(27, 321, 82, '261.36', 0, 0, '', 0, 0, 0, '2017-07-24 20:05:12', '2017-07-24 20:05:12'),
(28, 320, 82, '237.6', 0, 1, '', 0, 0, 0, '2017-07-24 20:12:00', '2017-07-24 20:12:00'),
(29, 352, 136, '5.95', 0, 1, '', 0, 0, 0, '2017-07-25 06:00:43', '2017-07-25 06:00:43'),
(30, 353, 137, '-280', 0, 0, '', 0, 0, 0, '2017-07-25 06:10:02', '2017-07-25 06:30:11'),
(31, 354, 138, '-280', 0, 0, '', 0, 0, 0, '2017-07-25 08:34:55', '2017-07-25 08:34:55'),
(32, 355, 139, '11.7', 0, 0, '', 0, 0, 0, '2017-07-25 08:45:00', '2017-07-25 08:45:00'),
(33, 356, 139, '-288', 0, 0, '', 0, 0, 0, '2017-07-25 09:12:50', '2017-07-25 09:12:50'),
(34, 357, 139, '-280', 0, 0, '', 0, 0, 0, '2017-07-25 11:29:37', '2017-07-25 11:29:37'),
(35, 358, 140, '-280', 0, 0, '', 0, 0, 1, '2017-07-25 11:44:05', '2017-07-26 06:51:06'),
(36, 360, 143, '43', 0, 0, '', 0, 0, 0, '2017-07-26 10:25:37', '2017-07-26 10:25:41'),
(37, 361, 144, '-280', 0, 0, '', 0, 0, 0, '2017-07-26 10:38:15', '2017-07-26 10:38:15'),
(38, 362, 144, '43', 0, 0, '', 0, 0, 0, '2017-07-26 10:40:42', '2017-07-26 10:40:42'),
(39, 364, 146, '11.7', 0, 0, '', 0, 0, 0, '2017-07-28 08:34:24', '2017-07-28 08:46:58'),
(40, 398, 155, '1', 0, 0, '', 0, 0, 0, '2017-07-29 13:20:40', '2017-07-29 13:20:40'),
(41, 396, 82, '44', 0, 0, '', 0, 0, 0, '2017-07-29 13:21:57', '2017-07-29 13:21:57'),
(42, 397, 82, '11.7', 0, 0, '', 0, 0, 0, '2017-07-31 09:05:56', '2017-07-31 09:23:20'),
(43, 457, 162, '11.7', 0, 1, '', 0, 0, 0, '2017-08-06 16:36:06', '2017-08-06 16:36:06'),
(44, 458, 163, '-280', 0, 0, '', 0, 0, 0, '2017-08-07 05:31:33', '2017-08-07 05:31:33'),
(45, 460, 163, '1', 0, 0, '', 0, 0, 0, '2017-08-07 08:00:39', '2017-08-07 08:03:28'),
(46, 459, 163, '37.6', 0, 0, '', 0, 0, 0, '2017-08-07 08:45:29', '2017-08-07 08:45:29'),
(47, 389, 82, '-193', 0, 1, '', 0, 0, 0, '2017-08-08 10:14:19', '2017-08-08 10:14:19'),
(48, 395, 82, '37.6', 2, 1, '3073595081172210', 0, 0, 0, '2017-08-08 17:50:09', '2017-08-09 18:13:08'),
(49, 695, 165, '39', 0, 1, '4422887220972260', 0, 0, 0, '2017-08-14 06:19:06', '2017-08-14 06:22:32'),
(50, 699, 82, '20', 0, 1, '8433168202372400', 0, 0, 0, '2017-08-28 20:20:55', '2017-08-28 20:20:58'),
(51, 701, 173, '20', 0, 1, '3632645351472530', 0, 0, 0, '2017-09-10 11:35:26', '2017-09-10 11:35:29'),
(52, 698, 82, '13', 0, 1, '5035453380072550', 2, 5, 0, '2017-09-11 21:34:14', '2017-09-11 21:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `payment_way`
--

CREATE TABLE `payment_way` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `payment_way_id` int(11) DEFAULT NULL,
  `setting` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_way`
--

INSERT INTO `payment_way` (`id`, `shop_id`, `payment_way_id`, `setting`, `created_at`, `updated_at`) VALUES
(1, 3, 0, 'Array', '2017-06-30 16:48:29', '2017-06-30 16:48:29'),
(2, 3, 0, 'Array', '2017-06-30 16:49:22', '2017-06-30 16:49:22'),
(3, 3, 0, 'Array', '2017-06-30 16:54:19', '2017-06-30 16:54:19'),
(4, 3, 0, 'Array', '2017-06-30 17:03:10', '2017-06-30 17:03:10'),
(5, 3, 1, '{\"key\":\"iuhi\"}', '2017-06-30 17:08:15', '2017-06-30 19:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(13, 6, 'aGBPzjGUrSTzGrFWqIqfBUYvdBcu3IKz', '2016-03-14 11:11:24', '2016-03-14 11:11:24'),
(21, 2, '0bsTPqQffZJUYINtFELUiTwRbd6n99Mb', '2016-03-15 11:08:45', '2016-03-15 11:08:45'),
(198, 6, 'DhP1XiaQ6ravLOhlCDmOsXc2KodsqOug', '2016-03-31 22:08:21', '2016-03-31 22:08:21'),
(200, 2, 'G0CvO9N8A1dfs2aSRmwKs8EqPjKVLPx4', '2016-04-01 17:25:40', '2016-04-01 17:25:40'),
(201, 2, 'tfNy8ZvSi4ZNXlG9UKnTS9YERHqpnwVq', '2016-04-01 18:27:34', '2016-04-01 18:27:34'),
(202, 2, 'eD04LoOYTd8rd1oJORQVFG9vI8WUh1UX', '2016-04-01 22:17:05', '2016-04-01 22:17:05'),
(213, 2, 'vlHgdDzy8cECi0MAmTf7HittgKJ2qZO2', '2016-04-04 06:38:58', '2016-04-04 06:38:58'),
(216, 2, 'mqLb4PaaBxQSoGutmIc9nwDjB5mLSgxm', '2016-04-05 07:37:01', '2016-04-05 07:37:01'),
(239, 2, 'DcDlJRWbi4dQbWNjQuflfOCWKlkwHbB1', '2016-04-08 17:57:23', '2016-04-08 17:57:23'),
(240, 2, 'tJmo4912LPXUxYVNJRe9U9e4ntS79BHG', '2016-04-08 20:29:42', '2016-04-08 20:29:42'),
(241, 2, 'REr5LXnnuyyImKiw8cmf0uTQsJovugvP', '2016-04-09 07:19:41', '2016-04-09 07:19:41'),
(246, 2, '9FxqSqdsQeDVlAa3g9puhX8zAnasUfF8', '2016-04-10 19:52:57', '2016-04-10 19:52:57'),
(268, 2, 'vz2qSKpx6kkUvSB6P7XcOUdOMyXAJG8p', '2016-04-13 18:39:37', '2016-04-13 18:39:37'),
(296, 4, 'ZtQJVPkNkMUlFDI7V3XQlfFikhA9qOji', '2016-04-19 14:45:34', '2016-04-19 14:45:34'),
(322, 4, '84sqz4XOyQVlc5RycNBPoi0ZBds01mVR', '2016-04-26 14:46:33', '2016-04-26 14:46:33'),
(330, 4, 'GxcieRdtZ9W0ZuC9phigoiX1PClhBrLS', '2016-04-27 12:02:04', '2016-04-27 12:02:04'),
(336, 4, 'l3Ch8sMgucWsV4FOe42faoipM9OCGjPK', '2016-04-30 15:49:09', '2016-04-30 15:49:09'),
(350, 20, 'WBGDzIYYWyneYLWEBgIRXcTp3JhQHMAT', '2016-05-01 13:18:01', '2016-05-01 13:18:01'),
(352, 18, 'HgMkihmdqosW8HXQUNLRbx0W5pbZa1cZ', '2016-05-01 13:22:35', '2016-05-01 13:22:35'),
(353, 21, 'e1Ijuw5yeXSfZApXWtSwkCOSpmEjByhe', '2016-05-01 13:23:05', '2016-05-01 13:23:05'),
(356, 26, 'FAeE7eqvmepKMEKbxM6YnI3rM3ITQ8RX', '2016-05-01 13:36:36', '2016-05-01 13:36:36'),
(357, 28, 'ODN81CXLx4QR1vczvFdhqzIz6Hku44Yy', '2016-05-01 13:47:29', '2016-05-01 13:47:29'),
(358, 12, 'kW11CamqTa3noWxxN02KRF8BW80PaiUK', '2016-05-01 13:59:26', '2016-05-01 13:59:26'),
(359, 39, '2fLMrqC2aDnVQCQ2oUv2ayglVuuQsyid', '2016-05-01 14:08:17', '2016-05-01 14:08:17'),
(360, 40, 'fhFjD5so2K3rxjRub2g3qmmZlWu0K44k', '2016-05-01 14:11:17', '2016-05-01 14:11:17'),
(362, 4, 'mPrmFHW16wggdaPFYcUMXBIHgiGEsvhI', '2016-05-01 14:34:04', '2016-05-01 14:34:04'),
(378, 12, 'YToBg3sS8R3Xxp6kufW0CqcHHf7Lpc9n', '2016-05-09 07:23:07', '2016-05-09 07:23:07'),
(385, 12, 'ksrIus9ZbV6i6URyGSgVZKCsrj3c29sq', '2016-05-10 06:53:35', '2016-05-10 06:53:35'),
(391, 11, '1g4msvKw3JfxJtMCV7nDejsdHfXPHoXS', '2016-05-10 11:14:05', '2016-05-10 11:14:05'),
(392, 56, 'dLPFAvR1FSGfo65vJQAyuRIVukn3VAiL', '2016-05-10 11:17:12', '2016-05-10 11:17:12'),
(393, 57, 'Be7kBATXAOzaTEdc1tJ2KSrBsEs9FWDJ', '2016-05-10 11:21:48', '2016-05-10 11:21:48'),
(395, 59, 'sFFhsIOII0r7zuDZEos0O2rhJO0MWkYo', '2016-05-10 11:40:16', '2016-05-10 11:40:16'),
(396, 59, 'Fv7ySwol0SnvdXqjYIb5bw324M5URpLz', '2016-05-10 11:46:05', '2016-05-10 11:46:05'),
(401, 59, 'FQC8mpXw0SCa1SX1xjPHYFFxvKE3uTVL', '2016-05-10 11:57:58', '2016-05-10 11:57:58'),
(402, 60, 'X2Z91KsVmdqRFvEkjhsZdM699mk4eR9h', '2016-05-10 12:11:07', '2016-05-10 12:11:07'),
(403, 60, 'meYifxiLMmMZ8OyCg9vXD4iMKMO66MQK', '2016-05-10 12:14:42', '2016-05-10 12:14:42'),
(405, 62, '3p1Z95LClarupWPkwjEJalIUAIb78Q4S', '2016-05-10 12:18:08', '2016-05-10 12:18:08'),
(462, 64, 'vttSfarMntiWYxNhMUqDzKXrx01glNA1', '2016-05-29 06:47:05', '2016-05-29 06:47:05'),
(470, 69, 'TagiBTWWF4NiiNvPoQtyZKG47YYyTyDb', '2016-05-29 11:38:10', '2016-05-29 11:38:10'),
(487, 4, 'AE7f2jTsLd8l4UJjAhzOu1TpAqjCHt9n', '2016-06-01 09:32:49', '2016-06-01 09:32:49'),
(507, 4, 'UdfuXc5X2TKbLDHtSuaX2ZNOUfLvnUPH', '2016-06-09 13:30:01', '2016-06-09 13:30:01'),
(759, 5, 'LsEf94NVFuMZ5w7hVh29tJFDbk0hEdtP', '2017-01-04 11:13:23', '2017-01-04 11:13:23'),
(760, 5, 'CMh19Tb6fzo0HR5aLGaz7JEyjN61zaoP', '2017-01-04 11:35:03', '2017-01-04 11:35:03'),
(762, 5, 'i6Vq9llTFN6ynkQGg5OswceRB9WbvjNU', '2017-01-04 11:46:51', '2017-01-04 11:46:51'),
(764, 5, 'zz8ARNLcEHDRFm6S6iMSTMePVLQrv0KN', '2017-01-04 12:36:58', '2017-01-04 12:36:58'),
(765, 5, '9MXAGm6vA1J4og4cndTAJqHXFgvlakvw', '2017-01-04 12:45:20', '2017-01-04 12:45:20'),
(768, 5, 'MXJJnSLUAEokkbTnyHWa0Wt3cpWJv3Xv', '2017-01-04 12:52:44', '2017-01-04 12:52:44'),
(770, 5, 'h65Fb2HIxmKm71g9uLU8ILuWxKhViu8u', '2017-01-04 13:16:34', '2017-01-04 13:16:34'),
(772, 5, 'orF9EdXntpOtHR3uI4enUrCFN8OO3efQ', '2017-02-08 21:25:08', '2017-02-08 21:25:08'),
(942, 89, 'llTk8YHKyjUBfS6yJATMGgjOqbePZp15', '2017-05-23 02:46:15', '2017-05-23 02:46:15'),
(1003, 94, 'svqsK6B6PDJGmNKMLGMMmpUtZC6yaiYO', '2017-06-03 15:19:33', '2017-06-03 15:19:33'),
(1005, 95, 'MfVuc8wdyRB9MbGXiYRXNtZShkndQTLk', '2017-06-03 17:41:35', '2017-06-03 17:41:35'),
(1041, 96, 'ZouvnfqIkwVlfaIZX4hxNjK6l3pzewgQ', '2017-06-06 06:39:22', '2017-06-06 06:39:22'),
(1057, 99, 'kzkbi8RuuzdflfApKVg8HYo99G6CkUjp', '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(1072, 100, 'Q2OCYiM9h98JbXGywQh2i9gEUgnYp5SP', '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(1090, 101, 'KgNGZv88oOHNY5lvLD1FKXpqhtfIImml', '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(1092, 102, 'Der5DP1caZAlOYHiqIM00ZDnA3cHwyvE', '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(1094, 103, 'MwO3lcIweJmTDRAkNGdy4rU5t4gYhufT', '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(1112, 104, 'g3OpvHz7V43aNp1yM4w5jlJ5tR1Wn21Q', '2017-06-15 06:45:36', '2017-06-15 06:45:36'),
(1128, 108, 'KIZpQpHfjyYhe9O95xyOiC3Mrzc1uZZl', '2017-06-21 08:50:28', '2017-06-21 08:50:28'),
(1138, 111, 'HGp2BudNziEOyE5EXamJD7C3b2Trgdvh', '2017-07-02 12:47:37', '2017-07-02 12:47:37'),
(1142, 115, '6EWLRI87iXWaqNhuLEP93ZDvoyCLTLe6', '2017-07-02 13:30:01', '2017-07-02 13:30:01'),
(1144, 116, 'mmGa5oyUwMLHrRkgZeHLvyXBNyBr9UO1', '2017-07-02 13:33:13', '2017-07-02 13:33:13'),
(1169, 121, 'pQjSSVTE9AYjOxaaQeTxZ6fwDYoZkcHE', '2017-07-19 04:27:06', '2017-07-19 04:27:06'),
(1170, 122, 'ZOa52dBzwXZeQCESk3P1CfT8dHU8JaUs', '2017-07-19 04:28:38', '2017-07-19 04:28:38'),
(1182, 126, 'gpLqWoDozlkL7H0Xk3KrSO7dxbZZhwUt', '2017-07-20 10:23:03', '2017-07-20 10:23:03'),
(1190, 131, 'Gmb3CKGB5RRDqUKVBsb9tWdKsPq7CgYu', '2017-07-23 07:33:10', '2017-07-23 07:33:10'),
(1197, 135, 'bCAdH51lbOXk9RJHmCdQK44O8BRn3OVo', '2017-07-24 05:00:45', '2017-07-24 05:00:45'),
(1200, 137, 'b75XGzLVvYXuYO5BgsTZmmzIQWI4KWYx', '2017-07-25 03:08:20', '2017-07-25 03:08:20'),
(1203, 138, 'QWG77PMQRyBgxeDz2li8Kd1HuzN0VHyb', '2017-07-25 05:33:51', '2017-07-25 05:33:51'),
(1207, 140, 'PwKqIrPT4QCdbnwU2UuGffhCfgZOFfCH', '2017-07-25 08:43:08', '2017-07-25 08:43:08'),
(1208, 15, 'PZRLzS5UR1tq3px0ZyogDzazwdBqWNzQ', '2017-07-25 08:44:41', '2017-07-25 08:44:41'),
(1219, 141, 'OS8DK5XBxz2BTnG221Lr7CPXBFSXg0L5', '2017-07-25 09:50:39', '2017-07-25 09:50:39'),
(1221, 142, 'V6n1Pit3lpY6NOS7QMIbWiR48TQXWgwe', '2017-07-25 14:46:23', '2017-07-25 14:46:23'),
(1228, 147, 'swJEHV1qMvKTaUxWEcMvnizXZqZod7RN', '2017-07-28 10:18:12', '2017-07-28 10:18:12'),
(1230, 148, 'QiBT8YCR4ZjbXb80wUMMvpO5QYAyDShY', '2017-07-28 15:55:25', '2017-07-28 15:55:25'),
(1232, 149, 'VBbFT7oVZ8nTFY0zloPtw38QmOqxIlGF', '2017-07-28 16:03:42', '2017-07-28 16:03:42'),
(1234, 150, 'tOmAF41qte6Fx4UhzkYfqBmUDnczg2sT', '2017-07-28 16:21:53', '2017-07-28 16:21:53'),
(1236, 151, 'ojlOmiSgagMG64OKjHPpkTPHdTpDoip4', '2017-07-28 17:01:34', '2017-07-28 17:01:34'),
(1238, 152, 'z6prPqrssS64vrAsDLSf6kC2BsQckUMb', '2017-07-28 17:03:01', '2017-07-28 17:03:01'),
(1248, 153, 'ahqiDGSE7QeGYvyrALXVOs3nA0OWcahU', '2017-07-28 17:22:55', '2017-07-28 17:22:55'),
(1250, 154, 'g6MooAeTXPrMBPyXSWS3AST5s30W9GSk', '2017-07-29 04:00:56', '2017-07-29 04:00:56'),
(1254, 156, 'YKBlWSRfEonZM8bkXX6YBk2MsBtCKCPr', '2017-07-29 10:32:47', '2017-07-29 10:32:47'),
(1255, 157, 'MDSiJS1nQwOOUCzqAStW7B9qmZz1pKAC', '2017-07-29 10:34:28', '2017-07-29 10:34:28'),
(1256, 158, 'wAiJTRD3T4rx4j8ekstjHfGNcJfQPNd0', '2017-07-29 10:35:14', '2017-07-29 10:35:14'),
(1258, 160, 'PYssFL4Yv6aVP3N7cZSG1zO0quAozAMf', '2017-07-29 11:29:26', '2017-07-29 11:29:26'),
(1262, 161, 'QYQBw4PYPUp6Poas2lG9QCMBZNr8F1Bz', '2017-08-02 03:02:23', '2017-08-02 03:02:23'),
(1264, 13, 'NVJSHfjmlaEVEsJ04thoESf4crE280gl', '2017-08-02 05:26:38', '2017-08-02 05:26:38'),
(1265, 13, 'QANQsA5beP2JmrxuGtc5QO4FE6O557gg', '2017-08-02 15:42:41', '2017-08-02 15:42:41'),
(1266, 13, 'kCp3QyfCkzOgxWIZhdkFT4IjpP9vSInt', '2017-08-02 15:43:05', '2017-08-02 15:43:05'),
(1267, 13, 'DkQK43AxQ2aTRqQ8XgrfhjMgtTQ4QhoL', '2017-08-02 15:48:10', '2017-08-02 15:48:10'),
(1268, 13, 'AZypOsR2uheVcv5e4Le9OgjEAJG1vPrO', '2017-08-02 15:53:04', '2017-08-02 15:53:04'),
(1269, 13, 'dIyNLEulHxJ2c30qulpVVGqDA2Yori3O', '2017-08-02 15:53:13', '2017-08-02 15:53:13'),
(1270, 13, 'U3F7Lzz4Pagsln6ugAvL1lQchnEVnW8j', '2017-08-02 15:53:23', '2017-08-02 15:53:23'),
(1271, 13, '1cEo63qAdvFb1MEvYxkLeynK8kWu2B7l', '2017-08-02 15:53:38', '2017-08-02 15:53:38'),
(1272, 13, 'RkUojflNt09xNHhqOiMGimPx8BPyuwK2', '2017-08-02 16:04:29', '2017-08-02 16:04:29'),
(1273, 13, 'fkWHL3WSMLhxcubZqNPYju9WXrjVewxd', '2017-08-03 10:07:27', '2017-08-03 10:07:27'),
(1274, 13, 'O9M46bOxghCKmrNooxdmsYyIg2rBZV2t', '2017-08-03 10:15:06', '2017-08-03 10:15:06'),
(1277, 162, 'DRLeEFotg41Kf1Ui1goKZlFAsm8l8x4r', '2017-08-06 10:46:39', '2017-08-06 10:46:39'),
(1281, 164, 'WSvhZxc1Q2q910PqGkhegcdA2S44ZacZ', '2017-08-07 05:47:30', '2017-08-07 05:47:30'),
(1285, 165, 'Hha19FokYnkVztg57gQBX7wIAo6pHBzC', '2017-08-14 02:40:18', '2017-08-14 02:40:18'),
(1287, 166, 'MxbZ34qI6q1vQ3nd5bwLDZ0AmUHB3uq0', '2017-08-22 08:23:47', '2017-08-22 08:23:47'),
(1288, 167, 'khjB1hW0BlssssH5SNJ98w4XVP61pbrH', '2017-08-22 08:24:00', '2017-08-22 08:24:00'),
(1298, 169, 'sqoVwgLKqT6pby48pduJa46PHezxT4Dp', '2017-09-10 05:22:31', '2017-09-10 05:22:31'),
(1301, 174, 'xURfd4fvv2gQRJu3hfylmkioQ7pdUVZG', '2017-09-10 08:51:01', '2017-09-10 08:51:01'),
(1302, 82, '1kVZ8QmPxdDPy1SkOYMPbDGwZ8kHB5BL', '2017-09-11 04:03:24', '2017-09-11 04:03:24'),
(1303, 82, 'PJIV0fBFeD74J49uZqnwHxCDEk6LgSVg', '2017-09-27 03:54:00', '2017-09-27 03:54:00'),
(1304, 82, 'uvYQFRcu9KDPmBnkVG8ooeygKCcSK0N0', '2017-10-01 03:00:46', '2017-10-01 03:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_option`
--

CREATE TABLE `product_option` (
  `id` int(11) NOT NULL,
  `coffee_id` int(11) NOT NULL,
  `option` int(11) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_option`
--

INSERT INTO `product_option` (`id`, `coffee_id`, `option`, `name_en`, `name_ar`, `price`, `created_at`, `updated_at`) VALUES
(1, 8, 0, 'dsfad', 'jio', 'jij', '2017-06-17 10:39:48', '2017-06-17 10:39:48'),
(2, 8, 0, ',mlskdmck', 'l', '34', '2017-06-17 10:40:06', '2017-06-17 10:40:06'),
(4, 7, 0, 'klsdmc', 'kmlkm', '9', '2017-06-17 10:41:39', '2017-06-21 18:01:45'),
(5, 5, 0, 'size 1', 'الحجم 1', '20', '2017-06-17 14:13:23', '2017-06-17 14:13:23'),
(6, 5, 0, 'size 2', 'الحجم 2', '12', '2017-06-17 14:14:12', '2017-06-17 14:14:12'),
(7, 10, 0, 'first size', 'first size', '', '2017-06-21 18:03:54', '2017-06-21 18:03:54'),
(8, 10, 0, 'first size', 'first size', '', '2017-06-21 18:05:24', '2017-06-21 18:05:24'),
(9, 10, 0, 'first size', 'first size', '5', '2017-06-21 18:05:57', '2017-06-21 18:06:59'),
(10, 10, 0, 'size s', 'sizex', '88', '2017-06-21 18:07:23', '2017-06-21 18:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(11, 3, 'Tf82pzBVSKQCocIl4wLAJHOYnjQmCyqc', 1, '2016-04-24 07:07:13', '2016-04-24 07:06:19', '2016-04-24 07:07:13'),
(12, 3, 'bg8a6p52d0Y1fLdvaWjPXrTWBDIss6Tm', 1, '2016-12-27 13:31:16', '2016-12-27 12:22:15', '2016-12-27 13:31:16'),
(25, 82, 'g8MwzIY7Tg58tl8zR5pO5J4E58WGtVvv', 1, '2017-06-06 20:31:57', '2017-06-06 19:49:23', '2017-06-06 20:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `deny_permissions` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `deny_permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '|*.*.*.*', '|', '2016-03-28 13:25:48', '2017-03-23 02:56:17'),
(3, 'client', 'Client', '|', '', '2017-03-22 21:52:50', '2017-03-22 21:52:50'),
(4, 'public', 'public', '|*.*.*.*', '', '2017-03-22 22:15:21', '2017-03-22 22:15:21'),
(9, 'driver', 'driver', '|dashboard.*.*.*|admin.delivery_menu.*.*|admin.order_driver.*.*|admin.order.*.*|*.driver.*.*|*.delivery_menu.*.*', '|*.*.otherData.*|*.*.allData.*|*.order.create.*', '2017-06-04 14:18:53', '2017-07-25 08:57:14'),
(10, 'dispatcher', 'dispatcher', '|*.address.*.*|*.order_driver.*.*|*.service_company_order.*.*|*.service_company.index.*|dashboard.*.*.*|*.*.groupData.*|*.order.*.*|*.cart.*.*|*.*.deliverMap.*|*.*.map.*|*.*.allmap.*|*.service_company_order_service.*.*', '|*.*.userData.*', '2017-06-05 10:47:26', '2017-06-15 21:54:54'),
(11, 'deeradriver', 'deeradriver', '|*.address.*.*|*.order.*.*|*.order_driver.*.*|*.*.allData.*|dashboard.*.*.*|*.*.map.*|*.*.allmap.*|*.*.deliverMap.*|*.service_company_order_service.*.*', '|*.*.userData.*', '2017-06-05 15:16:18', '2017-06-15 21:56:27'),
(12, 'shop-manager', 'shop manager', '|*.shop.*.*|*.*.groupData.*|*.shop_area.*.*|*.shop_users.*.*|*.order_driver.*.*|*.cart.*.*|*.order.*.*|*.payment.*.*|*.coffee_rate.*.*|*.coffee.*.*|*.menu_section.*.*|dashboard.*.*.*|*.shop_cuisine.*.*', '|*.*.allData.*', '2017-06-05 15:23:02', '2017-06-05 15:23:02'),
(13, 'call-center', 'call center', '|dashboard.*.*.*|*.coffee_rate.*.*|*.shop_rate.*.*|*.contact_us.*.*|*.order.*.*|*.order_driver.*.*|*.*.groupData.*', '|*.*.create.*|*.*.allData.*', '2017-06-05 18:34:30', '2017-06-05 18:35:52'),
(14, 'cms', 'cms', '|*.cms.*.*|*.contact_us.*.*|*.banner.*.*|dashboard.*.*.*', '|', '2017-06-05 18:40:47', '2017-06-05 18:40:47'),
(15, 'guest', 'guest', '|', '|', '2017-06-07 09:39:24', '2017-06-07 09:39:24'),
(16, 'block', 'block', '|', '|*.*.*.*', '2017-06-15 21:50:05', '2017-06-15 21:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(4, 3, NULL, NULL),
(13, 9, NULL, NULL),
(15, 10, NULL, NULL),
(16, 12, NULL, NULL),
(19, 1, NULL, NULL),
(79, 1, NULL, NULL),
(80, 1, NULL, NULL),
(80, 3, NULL, NULL),
(81, 3, NULL, NULL),
(82, 1, NULL, NULL),
(82, 3, NULL, NULL),
(97, 3, '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(97, 15, '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(98, 3, '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(98, 15, '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(99, 3, '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(99, 15, '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(100, 3, '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(100, 15, '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(101, 3, '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(101, 15, '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(102, 3, '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(102, 15, '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(103, 3, '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(103, 15, '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(104, 3, '2017-06-15 06:45:35', '2017-06-15 06:45:35'),
(104, 15, '2017-06-15 06:45:36', '2017-06-15 06:45:36'),
(105, 4, NULL, NULL),
(108, 3, '2017-06-21 08:50:28', '2017-06-21 08:50:28'),
(108, 15, '2017-06-21 08:50:28', '2017-06-21 08:50:28'),
(110, 3, '2017-07-02 12:43:19', '2017-07-02 12:43:19'),
(111, 3, '2017-07-02 12:47:37', '2017-07-02 12:47:37'),
(115, 3, '2017-07-02 13:30:01', '2017-07-02 13:30:01'),
(116, 3, '2017-07-02 13:33:13', '2017-07-02 13:33:13'),
(117, 3, '2017-07-02 13:37:16', '2017-07-02 13:37:16'),
(118, 12, NULL, NULL),
(119, 10, NULL, NULL),
(120, 9, NULL, NULL),
(121, 3, '2017-07-19 04:27:06', '2017-07-19 04:27:06'),
(121, 15, '2017-07-19 04:27:06', '2017-07-19 04:27:06'),
(122, 3, '2017-07-19 04:28:38', '2017-07-19 04:28:38'),
(122, 15, '2017-07-19 04:28:38', '2017-07-19 04:28:38'),
(123, 3, '2017-07-19 04:29:29', '2017-07-19 04:29:29'),
(123, 15, '2017-07-19 04:29:29', '2017-07-19 04:29:29'),
(124, 3, '2017-07-19 10:15:48', '2017-07-19 10:15:48'),
(124, 15, '2017-07-19 10:15:48', '2017-07-19 10:15:48'),
(125, 3, '2017-07-20 04:05:14', '2017-07-20 04:05:14'),
(125, 15, '2017-07-20 04:05:14', '2017-07-20 04:05:14'),
(126, 3, '2017-07-20 10:23:03', '2017-07-20 10:23:03'),
(126, 15, '2017-07-20 10:23:03', '2017-07-20 10:23:03'),
(127, 3, '2017-07-23 06:47:44', '2017-07-23 06:47:44'),
(127, 15, '2017-07-23 06:47:44', '2017-07-23 06:47:44'),
(128, 3, '2017-07-23 06:54:12', '2017-07-23 06:54:12'),
(128, 15, '2017-07-23 06:54:12', '2017-07-23 06:54:12'),
(129, 3, '2017-07-23 07:00:43', '2017-07-23 07:00:43'),
(129, 15, '2017-07-23 07:00:43', '2017-07-23 07:00:43'),
(130, 3, '2017-07-23 07:01:22', '2017-07-23 07:01:22'),
(130, 15, '2017-07-23 07:01:22', '2017-07-23 07:01:22'),
(131, 3, '2017-07-23 07:33:10', '2017-07-23 07:33:10'),
(131, 15, '2017-07-23 07:33:10', '2017-07-23 07:33:10'),
(132, 3, '2017-07-24 03:33:36', '2017-07-24 03:33:36'),
(132, 15, '2017-07-24 03:33:36', '2017-07-24 03:33:36'),
(133, 3, '2017-07-24 04:41:59', '2017-07-24 04:41:59'),
(133, 15, '2017-07-24 04:41:59', '2017-07-24 04:41:59'),
(134, 3, '2017-07-24 04:57:44', '2017-07-24 04:57:44'),
(134, 15, '2017-07-24 04:57:44', '2017-07-24 04:57:44'),
(135, 3, '2017-07-24 05:00:45', '2017-07-24 05:00:45'),
(135, 15, '2017-07-24 05:00:45', '2017-07-24 05:00:45'),
(136, 3, '2017-07-25 02:59:47', '2017-07-25 02:59:47'),
(136, 15, '2017-07-25 02:59:47', '2017-07-25 02:59:47'),
(137, 3, '2017-07-25 03:08:20', '2017-07-25 03:08:20'),
(137, 15, '2017-07-25 03:08:20', '2017-07-25 03:08:20'),
(138, 3, '2017-07-25 05:33:51', '2017-07-25 05:33:51'),
(138, 15, '2017-07-25 05:33:51', '2017-07-25 05:33:51'),
(139, 3, '2017-07-25 05:43:39', '2017-07-25 05:43:39'),
(139, 15, '2017-07-25 05:43:39', '2017-07-25 05:43:39'),
(140, 3, '2017-07-25 08:43:08', '2017-07-25 08:43:08'),
(140, 15, '2017-07-25 08:43:08', '2017-07-25 08:43:08'),
(141, 12, NULL, NULL),
(142, 3, '2017-07-25 14:46:23', '2017-07-25 14:46:23'),
(142, 15, '2017-07-25 14:46:23', '2017-07-25 14:46:23'),
(143, 3, '2017-07-26 07:25:14', '2017-07-26 07:25:14'),
(143, 15, '2017-07-26 07:25:14', '2017-07-26 07:25:14'),
(144, 3, '2017-07-26 07:29:10', '2017-07-26 07:29:10'),
(144, 15, '2017-07-26 07:29:10', '2017-07-26 07:29:10'),
(145, 3, '2017-07-28 03:12:23', '2017-07-28 03:12:23'),
(145, 15, '2017-07-28 03:12:23', '2017-07-28 03:12:23'),
(146, 3, '2017-07-28 03:20:11', '2017-07-28 03:20:11'),
(146, 15, '2017-07-28 03:20:11', '2017-07-28 03:20:11'),
(147, 3, '2017-07-28 10:18:12', '2017-07-28 10:18:12'),
(147, 15, '2017-07-28 10:18:12', '2017-07-28 10:18:12'),
(148, 3, '2017-07-28 15:55:25', '2017-07-28 15:55:25'),
(148, 15, '2017-07-28 15:55:25', '2017-07-28 15:55:25'),
(149, 3, '2017-07-28 16:03:42', '2017-07-28 16:03:42'),
(149, 15, '2017-07-28 16:03:42', '2017-07-28 16:03:42'),
(150, 3, '2017-07-28 16:21:53', '2017-07-28 16:21:53'),
(150, 15, '2017-07-28 16:21:53', '2017-07-28 16:21:53'),
(151, 3, '2017-07-28 17:01:34', '2017-07-28 17:01:34'),
(151, 15, '2017-07-28 17:01:34', '2017-07-28 17:01:34'),
(152, 3, '2017-07-28 17:03:01', '2017-07-28 17:03:01'),
(152, 15, '2017-07-28 17:03:01', '2017-07-28 17:03:01'),
(153, 3, '2017-07-28 17:22:55', '2017-07-28 17:22:55'),
(153, 15, '2017-07-28 17:22:55', '2017-07-28 17:22:55'),
(154, 3, '2017-07-29 04:00:55', '2017-07-29 04:00:55'),
(154, 15, '2017-07-29 04:00:56', '2017-07-29 04:00:56'),
(155, 3, '2017-07-29 04:21:54', '2017-07-29 04:21:54'),
(155, 15, '2017-07-29 04:21:54', '2017-07-29 04:21:54'),
(156, 3, '2017-07-29 10:32:47', '2017-07-29 10:32:47'),
(156, 15, '2017-07-29 10:32:47', '2017-07-29 10:32:47'),
(157, 3, '2017-07-29 10:34:28', '2017-07-29 10:34:28'),
(158, 3, '2017-07-29 10:35:14', '2017-07-29 10:35:14'),
(159, 3, '2017-07-29 10:36:20', '2017-07-29 10:36:20'),
(160, 3, '2017-07-29 11:29:26', '2017-07-29 11:29:26'),
(160, 15, '2017-07-29 11:29:26', '2017-07-29 11:29:26'),
(161, 3, '2017-08-02 03:02:23', '2017-08-02 03:02:23'),
(161, 15, '2017-08-02 03:02:23', '2017-08-02 03:02:23'),
(162, 3, '2017-08-06 10:46:39', '2017-08-06 10:46:39'),
(162, 15, '2017-08-06 10:46:39', '2017-08-06 10:46:39'),
(163, 3, '2017-08-07 02:30:29', '2017-08-07 02:30:29'),
(163, 15, '2017-08-07 02:30:29', '2017-08-07 02:30:29'),
(164, 3, '2017-08-07 05:47:30', '2017-08-07 05:47:30'),
(164, 15, '2017-08-07 05:47:30', '2017-08-07 05:47:30'),
(165, 3, '2017-08-14 02:40:18', '2017-08-14 02:40:18'),
(165, 15, '2017-08-14 02:40:18', '2017-08-14 02:40:18'),
(166, 3, '2017-08-22 08:23:47', '2017-08-22 08:23:47'),
(166, 15, '2017-08-22 08:23:47', '2017-08-22 08:23:47'),
(167, 3, '2017-08-22 08:24:00', '2017-08-22 08:24:00'),
(167, 15, '2017-08-22 08:24:00', '2017-08-22 08:24:00'),
(168, 3, '2017-09-10 04:05:55', '2017-09-10 04:05:55'),
(168, 15, '2017-09-10 04:05:55', '2017-09-10 04:05:55'),
(169, 3, '2017-09-10 04:44:04', '2017-09-10 04:44:04'),
(170, 3, '2017-09-10 04:51:26', '2017-09-10 04:51:26'),
(171, 3, '2017-09-10 04:52:18', '2017-09-10 04:52:18'),
(172, 3, '2017-09-10 04:55:37', '2017-09-10 04:55:37'),
(173, 3, '2017-09-10 08:19:07', '2017-09-10 08:19:07'),
(173, 15, '2017-09-10 08:19:07', '2017-09-10 08:19:07'),
(174, 3, '2017-09-10 08:51:01', '2017-09-10 08:51:01'),
(174, 15, '2017-09-10 08:51:01', '2017-09-10 08:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name_en`, `name_ar`) VALUES
(1, 'first service', 'الخدمة الأولى'),
(2, 'oil change', 'تغيير زيت');

-- --------------------------------------------------------

--
-- Table structure for table `service_boy`
--

CREATE TABLE `service_boy` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `service_company_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_boy`
--

INSERT INTO `service_boy` (`id`, `users_id`, `manager_id`, `service_company_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 34, 13, 2, 0, '2017-06-02 15:30:42', '2017-06-02 15:30:42'),
(2, 13, 13, 1, 0, '2017-06-02 15:51:25', '2017-06-02 15:51:25'),
(3, 66, 13, 1, 0, '2017-06-12 20:49:03', '2017-06-12 20:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `service_company`
--

CREATE TABLE `service_company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_company`
--

INSERT INTO `service_company` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'service company 1', '2017-06-02 15:24:39', '2017-06-02 15:24:39'),
(2, 'service company 2', '2017-06-02 15:24:57', '2017-06-02 15:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `service_company_order`
--

CREATE TABLE `service_company_order` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `service_company_id` int(11) NOT NULL,
  `service_boy_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_company_order`
--

INSERT INTO `service_company_order` (`id`, `users_id`, `service_company_id`, `service_boy_id`, `description`, `status`, `notification`, `created_at`, `updated_at`) VALUES
(1, 13, 2, 1, 'jojo', 0, 1, '2017-06-02 15:40:06', '2017-07-20 16:09:26'),
(2, 13, 1, 1, 'kkhk', 0, 1, '2017-06-02 15:40:25', '2017-06-12 20:20:16'),
(3, 66, 1, 82, 'jkb', 0, 1, '2017-06-02 15:40:54', '2017-06-12 19:55:14'),
(4, 82, 1, 1, 'hhjhk', 0, 1, '2017-06-02 15:41:19', '2017-06-04 13:07:23'),
(5, 20, 1, 8, 'fgjfgjfg', 4, 1, '2017-06-08 10:33:19', '2017-06-11 14:13:58'),
(6, 13, 1, 1, '', 0, 1, '2017-06-12 13:07:36', '2017-06-12 13:07:44'),
(7, 20, 2, 7, 'sssssssssssss', 0, 1, '2017-06-12 13:35:41', '2017-06-12 19:54:32'),
(8, 20, 2, 82, 'sssssssssssss', 0, 1, '2017-06-12 13:37:29', '2017-06-12 13:37:38'),
(9, 0, 1, 1, '', 0, 1, '2017-06-12 17:33:07', '2017-06-12 19:49:41'),
(10, 82, 2, 1, 'fsf', 0, 1, '2017-06-12 19:50:18', '2017-06-12 19:54:11'),
(11, 0, 1, 0, 'ddddddddd', 0, 1, '2017-06-12 20:09:23', '2017-06-12 20:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `service_company_order_service`
--

CREATE TABLE `service_company_order_service` (
  `id` int(11) NOT NULL,
  `service_company_order_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_company_order_service`
--

INSERT INTO `service_company_order_service` (`id`, `service_company_order_id`, `service_id`) VALUES
(1, 8, 1),
(2, 8, 2),
(3, 9, 1),
(4, 9, 2),
(5, 10, 1),
(6, 10, 2),
(10, 11, 1);

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
(3, 'landy', 'sfdj', 6, 'landy', 'landy', 'landy@gmail.com', '', '0785181656', 'lkj', 'lj', 'lj', 'lk', 1, '30', '20', '12:00', '19:35', '00:00', '23:30', '1', 3, 0, 900, 1, 'kj', 'lkj', 'www.cafcoffee.com', '/files/17350_24455res1.jpg', 0, 0, 'klj', 6, 0, 1, '35.9391932', '31.9466904', 0, 0, 0, 40, '', '2017-05-18 07:31:26', '2017-07-25 12:14:03'),
(4, 'Kozy Salon Urbain', 'ماك', 0, 'taylor', 'successor', 'taylorsuccessor@gmail.com', 'knet,visa, cash ', '0785181656', 'address shop 1', 'عنوان 1', 'description shop 1', 'شرح المطعم 1', 1, '21.32', '', '08:00:00', '16:00:00', '09:00:00', '15:00:00', '2.5', 4, 1, 7, 1, 'summary shop 1', 'مختصر المطعم 1', 'www.cafcoffee.com', '/files/18952_9633res4.jpg', 1, 1, '10', 3, 0, 1, '35.9754138', '31.9897962', 0, 0, 0, 0, '', '2017-05-19 14:26:54', '2017-07-01 22:30:13'),
(5, 'Carette‬', 'بيتزا', 0, 'owner name', 'yosif', 'yosit@pizza.com', 'knet,visa, cash ', '0785181656', '', 'عنوان بيتزا', '', 'بيتزا', 1, '10', '', '08:00', '23:55', '08:43', '16:43', '1', 0, 1, 3, 1, '', 'بيتزا', 'www.cafcoffee.com', '/files/1078_28471Pizza_Hut_logo.svg.png', 0, 0, '1', 3, 0, 1, '35.9089808', '31.9823706', 0, 0, 0, 0, '', '2017-06-07 17:52:09', '2017-07-16 10:26:47'),
(6, 'Starbucks', 'برقر', 0, 'jon', 'land', 'jon@pros.com', 'knet,visa, cash ', '0096182783468', '', '', '', '', 1, '13', '', '05:25', '17:52', '08:00', '17:52', '1', 3, 1, 2, 1, '', '', 'www.cafcoffee.com', '/files/19620_18957res3.jpg', 0, 1, '1', 4, 0, 1, '35.8969645', '31.938096', 0, 0, 0, 0, '', '2017-06-07 17:57:06', '2017-07-01 22:28:14'),
(7, 'Johnny Rockets', 'Rockets', 0, 'kali', 'jonson', 'kali@produ.com', '', '0785181656', '', '', '', '', 1, '12', '', '17:57', '17:57', '00:00', '22:50', '1', 0, 1, 4, 0, '', '', 'www.cafcoffee.com', '/files/11714_18387img_order1.jpg', 1, 1, '1', 5, 0, 1, '35.9074359', '31.9056047', 0, 0, 0, 0, '', '2017-06-07 18:04:54', '2017-06-07 21:16:58'),
(8, 'Cafe Francoeur', 'KFC', 0, 'kfc', 'kfc', 'kfc@kfc.com', '', '0785181656', '', '', '', '', 1, '30', '', '10:50', '18:07', '10:50', '18:07', '1', 0, 1, 2, 1, '', '', 'www.cafcoffee.com', '/files/506_13227res2.jpg', 0, 1, '20', 7, 0, 1, '35.8988528', '31.9462535', 0, 0, 0, 0, '', '2017-06-07 18:11:01', '2017-07-01 22:31:27'),
(9, 'hkj', NULL, 0, 'j', 'hj', 'kjh', NULL, 'jhkj', 'hk', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.cafcoffee.com', NULL, NULL, NULL, NULL, 0, NULL, 1, '', '', 0, 0, 0, 0, '', '2017-06-14 00:49:44', '2017-06-15 23:46:31'),
(10, 'deera', 'deera', 0, 'deera', 'deera', 'info@deera.com', 'deera', '346346', '', '', '', '', 0, '1', '', '13:34', '13:34', '13:34', '13:34', '1', 5, 0, 0, 0, '', '', 'www.cafcoffee.com', '/files/12050_14051logo.png', 0, 0, '0', 3, 0, 0, '', '', 0, 0, 0, 0, '', '2017-06-15 13:36:37', '2017-06-15 13:36:37'),
(12, 'e;djf', 'sdfsdf', 0, 'j', 'hoih', 'oih', 'kl', 'oh', '', '', '', '', 0, 'ij', '', 'oijoi', 'ho', 'ho', 'h', 'ou', 0, 0, 0, 0, '', '', 'www.cafcoffee.com', 'ih', 0, 0, 'ho', 3, 0, 1, '', '', 0, 0, 0, 0, '', '2017-06-15 23:35:53', '2017-07-23 13:01:43'),
(13, 'kjoj', 'kjhh', 0, 'lkjlkj', 'lkj', 'lkj', 'jh', 'lk', '', '', '', '', 0, 'kjh', '', 'kjh', 'kj', 'hk', 'jh', 'kjhkj', 0, 0, 0, 0, '', '', 'www.cafcoffee.com', 'jh', 0, 0, 'kj', 3, 0, 1, '36.139397621154785', '32.08908302965641', 0, 0, 0, 0, '', '2017-06-15 23:37:57', '2017-06-15 23:42:04'),
(14, 'kjkjkj', 'lknjlkjl', 0, 'kmlk', 'lkmlk', 'mlkm', 'lkjl', 'lkm', '', 'kjlkj', '', 'lkj', 0, 'jl', '', 'kj', 'lkj', 'lkj', 'lk', 'jlk', 0, 0, 0, 0, '', 'lkj', 'www.cafcoffee.com', 'jlk', 0, 0, 'lkj', 3, 0, 1, '36.11081600189209', '32.083738118953725', 0, 0, 0, 0, '', '2017-06-15 23:39:57', '2017-07-03 19:46:33'),
(15, 'oijioer', NULL, 0, NULL, NULL, 'sdfg@lkdfg.dfg', NULL, '23545', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dflkg', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ljfdg', '2017-07-19 09:53:21', '2017-07-19 09:53:21'),
(16, 'oijioer', NULL, 0, NULL, NULL, 'sdfg@lkdfg.dfg', NULL, '23545', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dflkg', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ljfdg', '2017-07-19 09:54:09', '2017-07-19 09:54:09'),
(17, 'oijioer', NULL, 0, NULL, NULL, 'sdfg@lkdfg.dfg', NULL, '23545', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dflkg', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'ljfdg', '2017-07-19 09:59:10', '2017-07-19 09:59:10'),
(18, 'kjnjk', NULL, 0, NULL, NULL, 'gfd@gfd.rd', NULL, '654654', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gfc', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'gfc', '2017-07-19 09:59:44', '2017-07-19 09:59:44'),
(19, 'kjnjk', NULL, 0, NULL, NULL, 'gfd@gfd.rd', NULL, '654654', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gfc', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'gfc', '2017-07-19 10:00:11', '2017-07-19 10:00:11'),
(20, 'kjnjk', NULL, 0, NULL, NULL, 'gfd@gfd.rd', NULL, '654654', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gfc', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'gfc', '2017-07-19 10:00:15', '2017-07-19 10:00:15'),
(21, 'kjnjk', NULL, 0, NULL, NULL, 'gfd@gfd.rd', NULL, '654654', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gfc', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'gfc', '2017-07-19 10:00:19', '2017-07-19 10:00:19'),
(22, 'kjnjk', NULL, 0, NULL, NULL, 'gfd@gfd.rd', NULL, '654654', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gfckjh', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'gfc', '2017-07-19 10:00:23', '2017-07-19 10:00:23'),
(23, 'sdf', NULL, 0, NULL, NULL, 'tasd@dfgsd.sdf', NULL, '49356', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdf', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'afsdf', '2017-07-19 10:04:53', '2017-07-19 10:04:53'),
(24, 'lkadsf', NULL, 0, NULL, NULL, 'dflkg@ldkfg.dfg', NULL, '345', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sslkdjf', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'dsgl', '2017-07-19 10:06:45', '2017-07-19 10:06:45'),
(25, 'sdf', NULL, 0, NULL, NULL, 'sdf@sdfg.sdf', NULL, '34524', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lksdfg', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'dflg', '2017-07-19 10:11:29', '2017-07-19 10:11:29'),
(26, 'wer`lk', NULL, 0, NULL, NULL, 'lkm@dfgsds.sdfd', NULL, '2435234', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfs', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'sdfgfg', '2017-07-19 20:54:55', '2017-07-19 20:54:55'),
(27, 'kjosdf', NULL, 0, NULL, NULL, 'DGDF@DFG.DFG', NULL, '43534', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfg', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'dfgoi', '2017-07-20 08:47:41', '2017-07-20 08:47:41'),
(28, 'oijio', NULL, 0, NULL, NULL, 'kjh@kjh.fsd', NULL, '54345', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jh', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', 0, 0, 0, 0, 'kjh', '2017-08-07 08:27:37', '2017-08-07 08:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `shop_area`
--

CREATE TABLE `shop_area` (
  `id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `delivery_charges` varchar(255) DEFAULT NULL,
  `deera_charge` varchar(255) DEFAULT NULL,
  `min_amount` varchar(255) DEFAULT NULL,
  `expected_deliver_time` varchar(20) NOT NULL,
  `deliver_time_from` varchar(20) DEFAULT NULL,
  `deliver_time_to` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `governorate_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_area`
--

INSERT INTO `shop_area` (`id`, `area_id`, `shop_id`, `delivery_charges`, `deera_charge`, `min_amount`, `expected_deliver_time`, `deliver_time_from`, `deliver_time_to`, `status`, `governorate_id`, `created_at`, `updated_at`) VALUES
(1, 4, 4, '12', '2', '13', '', '08:00:00', '16:00:00', 0, 3, '2017-05-26 22:20:50', '2017-05-26 22:20:50'),
(2, 3, 4, '3', '2', '100', '', '09:00', '14:00', 0, 3, '2017-05-29 10:54:29', '2017-05-29 11:10:37'),
(3, 3, 4, '4', '6', '90', '', '08:00:00', '16:00:00', 0, 3, '2017-05-30 08:41:58', '2017-05-30 08:41:58'),
(4, 3, 4, '1', '2', '12', '', '00:00', '18:00:00', 0, 3, '2017-06-02 11:17:16', '2017-06-02 11:17:16'),
(5, 3, 3, 'g', 'dg', 'f', '', '08:00', '18:00:00', 0, 3, '2017-06-15 23:19:10', '2017-06-15 23:19:10'),
(6, 3, 3, '1', '1', '1', '', '08:00', '18:00:00', 0, 3, '2017-06-22 19:50:34', '2017-06-22 19:50:34'),
(7, 3, 6, '1', '1', '1', '', '08:00', '18:00:00', 0, 3, '2017-06-22 19:51:38', '2017-06-22 19:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `shop_cuisine`
--

CREATE TABLE `shop_cuisine` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_cuisine`
--

INSERT INTO `shop_cuisine` (`id`, `shop_id`, `cuisine_id`) VALUES
(1, 4, 2),
(2, 4, 1),
(3, 3, 2),
(4, 5, 2),
(5, 5, 3),
(6, 6, 4),
(7, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `shop_rate`
--

CREATE TABLE `shop_rate` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_rate`
--

INSERT INTO `shop_rate` (`id`, `users_id`, `shop_id`, `rate`, `description`, `status`, `notification`, `created_at`, `updated_at`) VALUES
(1, 31, 9, 3, 'description this is description', 1, 1, '2017-06-02 07:47:24', '2017-06-03 00:45:20'),
(2, 91, 4, 2, 'skdf asldkfjasdkfj', 1, 1, '2017-06-14 16:36:32', '2017-06-14 17:53:52'),
(3, 82, 4, 5, 'vsfdv', 0, 1, '2017-06-14 17:54:47', '2017-06-14 22:41:02'),
(4, 82, 6, 3, 'lksjdf', 0, 1, '2017-06-14 22:38:14', '2017-07-03 19:46:01'),
(5, 82, 3, 3, '', 0, 0, '2017-07-10 13:12:34', '2017-07-12 12:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `shop_users`
--

CREATE TABLE `shop_users` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `license` varchar(100) NOT NULL,
  `civil_id` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `is_cofe` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_users`
--

INSERT INTO `shop_users` (`id`, `users_id`, `shop_id`, `status`, `type`, `license`, `civil_id`, `role`, `is_cofe`, `created_at`, `updated_at`) VALUES
(1, 82, 10, 0, 4, '', '', '', 0, '2017-05-19 14:40:20', '2017-06-15 14:01:17'),
(2, 13, 4, 0, 1, '', '', '', 0, '2017-06-02 08:43:57', '2017-06-02 08:43:57'),
(3, 118, 3, 0, 0, '', '', '', 0, '2017-07-03 05:13:40', '2017-07-03 05:13:40'),
(4, 119, 3, 0, 3, '', '', '', 0, '2017-07-03 05:18:31', '2017-07-03 05:18:31'),
(6, 120, 3, 0, 4, '', '', '', 0, '2017-07-03 05:21:49', '2017-07-03 05:21:49'),
(7, 141, 3, 0, 0, '', '', '', 0, '2017-07-25 12:17:06', '2017-07-25 12:17:06'),
(8, 141, 6, 0, 0, '', '', '', 0, '2017-07-25 12:17:32', '2017-07-25 12:17:32'),
(9, 13, 3, 0, 4, 'iuhui', 'jjh', '', 0, '2017-08-06 09:27:33', '2017-08-06 09:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `uid` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `oauth1_token_identifier` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth1_token_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth2_access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth2_refresh_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth2_expires` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `user_id`, `uid`, `provider`, `oauth1_token_identifier`, `oauth1_token_secret`, `oauth2_access_token`, `oauth2_refresh_token`, `oauth2_expires`, `created_at`, `updated_at`) VALUES
(1, 82, '104567598488922195517', 'google', NULL, NULL, 'ya29.GlthBOkiU0n6vxju6Yh7tYq63rR6C6ecCoBBiLvnG47e3N4Og0WT9csE2BSXjoxAQ27f8m3XKSOxWsHPv4QxRLXHEsW0yFDAWK-P_2iMf92sqUZmHyCsrS-3_wIB', NULL, '2017-06-06 20:20:19', '2017-06-06 19:03:42', '2017-06-06 19:20:21'),
(2, 82, 'zTEUdqQbCS', 'linkedin', NULL, NULL, 'AQWwCGOLQnAychcJ4MReXD9i0sE8xL_URVMRs9Ys9YoriCmPRfjAR5FI74cqvMZ-yK2z7d65W_rTatI2q3XlOGro7QAdEW_ORwDBwH52ltuztt8Y4XGo7aNgs4gj8hxm9MSkHKWOt1Q2YsSBd8wSC9e1JMOQUv1AuOj2Q0B6dHbQFQKCOLQ', NULL, '2017-08-07 07:57:37', '2017-06-06 19:16:24', '2017-06-08 07:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2017-07-28 15:01:31', '2017-07-28 15:01:31'),
(2, NULL, 'ip', '::1', '2017-07-28 15:01:31', '2017-07-28 15:01:31'),
(3, NULL, 'global', NULL, '2017-07-28 15:01:34', '2017-07-28 15:01:34'),
(4, NULL, 'ip', '::1', '2017-07-28 15:01:34', '2017-07-28 15:01:34'),
(5, NULL, 'global', NULL, '2017-07-28 15:01:35', '2017-07-28 15:01:35'),
(6, NULL, 'ip', '::1', '2017-07-28 15:01:35', '2017-07-28 15:01:35'),
(7, NULL, 'global', NULL, '2017-07-28 15:10:10', '2017-07-28 15:10:10'),
(8, NULL, 'ip', '::1', '2017-07-28 15:10:10', '2017-07-28 15:10:10'),
(9, NULL, 'global', NULL, '2017-07-28 16:03:58', '2017-07-28 16:03:58'),
(10, NULL, 'ip', '::1', '2017-07-28 16:03:58', '2017-07-28 16:03:58'),
(11, NULL, 'global', NULL, '2017-07-28 16:20:15', '2017-07-28 16:20:15'),
(12, NULL, 'ip', '::1', '2017-07-28 16:20:15', '2017-07-28 16:20:15'),
(13, NULL, 'global', NULL, '2017-07-28 16:22:07', '2017-07-28 16:22:07'),
(14, NULL, 'ip', '::1', '2017-07-28 16:22:07', '2017-07-28 16:22:07'),
(15, NULL, 'global', NULL, '2017-07-28 16:22:41', '2017-07-28 16:22:41'),
(16, NULL, 'ip', '::1', '2017-07-28 16:22:41', '2017-07-28 16:22:41'),
(17, NULL, 'global', NULL, '2017-07-28 16:23:17', '2017-07-28 16:23:17'),
(18, NULL, 'ip', '::1', '2017-07-28 16:23:17', '2017-07-28 16:23:17'),
(19, NULL, 'global', NULL, '2017-07-28 16:24:25', '2017-07-28 16:24:25'),
(20, NULL, 'ip', '::1', '2017-07-28 16:24:25', '2017-07-28 16:24:25'),
(21, NULL, 'global', NULL, '2017-07-28 16:43:15', '2017-07-28 16:43:15'),
(22, NULL, 'ip', '::1', '2017-07-28 16:43:15', '2017-07-28 16:43:15'),
(23, NULL, 'global', NULL, '2017-07-28 16:43:20', '2017-07-28 16:43:20'),
(24, NULL, 'ip', '::1', '2017-07-28 16:43:20', '2017-07-28 16:43:20'),
(25, NULL, 'global', NULL, '2017-07-28 16:43:34', '2017-07-28 16:43:34'),
(26, NULL, 'ip', '::1', '2017-07-28 16:43:34', '2017-07-28 16:43:34'),
(27, NULL, 'global', NULL, '2017-07-28 16:49:03', '2017-07-28 16:49:03'),
(28, NULL, 'ip', '::1', '2017-07-28 16:49:03', '2017-07-28 16:49:03'),
(29, NULL, 'global', NULL, '2017-07-28 17:03:19', '2017-07-28 17:03:19'),
(30, NULL, 'ip', '::1', '2017-07-28 17:03:19', '2017-07-28 17:03:19'),
(31, NULL, 'global', NULL, '2017-07-28 17:17:19', '2017-07-28 17:17:19'),
(32, NULL, 'ip', '::1', '2017-07-28 17:17:19', '2017-07-28 17:17:19'),
(33, NULL, 'global', NULL, '2017-09-10 05:22:13', '2017-09-10 05:22:13'),
(34, NULL, 'ip', '::1', '2017-09-10 05:22:13', '2017-09-10 05:22:13'),
(35, 169, 'user', NULL, '2017-09-10 05:22:13', '2017-09-10 05:22:13'),
(36, NULL, 'global', NULL, '2017-09-10 05:22:20', '2017-09-10 05:22:20'),
(37, NULL, 'ip', '::1', '2017-09-10 05:22:20', '2017-09-10 05:22:20'),
(38, 169, 'user', NULL, '2017-09-10 05:22:20', '2017-09-10 05:22:20'),
(39, NULL, 'global', NULL, '2017-09-10 05:22:23', '2017-09-10 05:22:23'),
(40, NULL, 'ip', '::1', '2017-09-10 05:22:23', '2017-09-10 05:22:23'),
(41, 169, 'user', NULL, '2017-09-10 05:22:23', '2017-09-10 05:22:23'),
(42, NULL, 'global', NULL, '2017-09-10 05:22:25', '2017-09-10 05:22:25'),
(43, NULL, 'ip', '::1', '2017-09-10 05:22:25', '2017-09-10 05:22:25'),
(44, 169, 'user', NULL, '2017-09-10 05:22:25', '2017-09-10 05:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guest_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `android_device_id` text COLLATE utf8_unicode_ci NOT NULL,
  `ios_device_id` text COLLATE utf8_unicode_ci NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `area_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `session_id` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `blogger` int(11) NOT NULL,
  `birth_day` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `guest_email`, `password`, `permissions`, `android_device_id`, `ios_device_id`, `last_login`, `first_name`, `last_name`, `avatar`, `mobile`, `phone`, `gender`, `area_id`, `occupation`, `type`, `session_id`, `lat`, `long`, `blogger`, `birth_day`, `created_at`, `updated_at`) VALUES
(13, 'driver@deera.com', '', '$2y$10$QMDdN.pWvXD81YyB0Aafm.MUTMebeH1i/LK4nVb2bv3E8AoqGirDS', NULL, '', '', '2017-08-03 10:15:06', 'first name', 'last name', NULL, '0785181656', '', 0, '', '0', 0, '', 31.95557172, 35.83669424, 2, '0000-00-00', '2016-05-01 13:01:21', '2017-08-03 10:15:06'),
(15, 'dispatcher@deera.com', '', '$2y$10$.YBEnmlyQ30lycw..YHOcuyZsFvvrFxEN7NiUW/Vm49LboErg1znC', NULL, '', '', '2017-07-25 08:44:41', NULL, ': admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:04:34', '2017-07-25 08:44:41'),
(16, 'shop@deera.com', '', '$2y$10$qVF5MuFwYsMZ4.73HaFk5.uCpKYkddFqIRRMg8dd7qLiNvLpOBvLe', NULL, '', '', '2017-06-08 06:26:31', 'shop', 'kfc', NULL, '', '', 0, '', '0', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:05:12', '2017-06-08 06:26:31'),
(17, 'admin@admin7.com', '', '$2y$10$6YDAKpvtDaQy.QcH1wdV3uOZueFCAAFqn8JeiZowDVL8hqwHW/eGK', NULL, '', '', NULL, ': admin firstName', ': admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:11:23', '2016-05-01 13:11:23'),
(18, 'admintest@admin.com', '', '$2y$10$F8E6o6rlUgxh9xd49aDI..DnnsGKZ..10uFxqSYJ109ck8H0.UyWS', NULL, '', '', '2016-05-01 13:22:35', 'adminTest', 'Test', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:12:22', '2016-05-01 13:22:35'),
(19, 'admin@admi.com', '', '$2y$10$bCnkSmJrDVQtYkCU2Rh30.21yqyw/M9WQ2J2CkIoSe/Yls6zddmSK', NULL, '', '', '2017-06-07 08:42:50', 'A first', 'b Second', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:14:07', '2017-06-07 08:42:50'),
(20, 'admin@admin9.com', '', '$2y$10$33PXn.qz2Ktm48z7xgziK.8scy0wu5IMZli0/QODg1k.ntaU0PzCi', NULL, '', '', '2016-05-01 13:18:01', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:17:20', '2016-05-01 13:18:01'),
(21, 'admin@admina.com', '', '$2y$10$Y3Ht/J9B5VozrTqmerM8veTjIiF0GEcegPHuRyB5c7l3RGnmyi1KG', NULL, '', '', '2016-05-01 13:23:05', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:22:34', '2016-05-01 13:23:05'),
(22, 'admin@adminb.com', '', '$2y$10$WNjXQg8y8abXr4lZItJxCueIR3qHJquO3MVExTM98zz9QTqXOsFKy', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:28:23', '2016-05-01 13:28:23'),
(23, 'admin@adminc.com', '', '$2y$10$KD4oByWVRd4VkcJhTHhBGOeBmDaRAE/DiyqF/XydG/BvOtQ.NlmM6', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:28:54', '2016-05-01 13:28:54'),
(24, 'admin@admind.com', '', '$2y$10$fCblwhGnZfN54Vukn4hPS.g5LpCzzg8hA.c8XNHokf7id2bqTyGlu', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:29:13', '2016-05-01 13:29:13'),
(25, 'ddd@ddd.ddd', '', '$2y$10$orGG6KvMrH4TO1agzzSmvupHecZgciUHbO2r6.gzrQeLZQaBEpdGK', NULL, '', '', '2016-05-01 13:33:53', 'asdf', 'sf', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:33:39', '2016-05-01 13:33:53'),
(26, 'admin@admine.com', '', '$2y$10$M.KIZXmo.0Ox/BwwkXnjteR8ck0uWIf0dewsRj01njcvnThiWx9s2', NULL, '', '', '2016-05-01 13:36:36', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:35:54', '2016-05-01 13:36:36'),
(27, 'admin@adminv.com', '', '$2y$10$/tp9OFQq2vbsf.63/JFY5eKKDSKkmlfIiFks7TNPaTD6eL52mvs.y', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:46:24', '2016-05-01 13:46:24'),
(28, 'admin@adminz.com', '', '$2y$10$z6RFdmsA.kdgpMujELpBouYMLl2/XiciDrdX1O4DkzylfMT/Zybje', NULL, '', '', '2016-05-01 13:47:29', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:46:55', '2016-05-01 13:47:29'),
(29, 'admin@adminx.com', '', '$2y$10$ozdl9T7dMl.W/G64tU1cNuFJk30xj7VfZtri26QQl/s1q.W16Gsy2', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:48:29', '2016-05-01 13:48:29'),
(30, 'admin@admink.com', '', '$2y$10$fPBKMa4PpH7cyb9Keby.EOU8B8Oe0hmXpwmGQLFR5EOvo1MUda57C', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:49:41', '2016-05-01 13:49:41'),
(31, 'admin@admint.com', '', '$2y$10$MUZSx0j9aOmMMVplFosSE.8lVQjIdGL2m6WEt.zuuy8HFq844TV.K', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:49:57', '2016-05-01 13:49:57'),
(33, 'admin@admintt.com', '', '$2y$10$TgyW12bN1zRrTLCVhOEN5.1pVKdCuMP2INgwGZ0wAF2uuiAGf4/DW', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:50:38', '2016-05-01 13:50:38'),
(34, 'admin@admintx.com', '', '$2y$10$SqwIYTitU.eUORVnneZnAO/uLXnveMMUvSKQvXH2PmLuoUNkWEu1S', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:50:47', '2016-05-01 13:50:47'),
(35, 'admin@adminthx.com', '', '$2y$10$KbTUhocfRRpr.TkQaBPEwu/NX0j/VLBltUyW.2QrhTCoCQ/SVkCjm', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:53:10', '2016-05-01 13:53:10'),
(36, 'admin@admjinthx.com', '', '$2y$10$EpscExd4AFgDqFo44FitLu7Qen.ViLsopDvs93CFqC./ccAAk4rTS', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:53:16', '2016-05-01 13:53:16'),
(37, 'admin@ajdmjinthx.com', '', '$2y$10$Hi.7Wj0bgELIKRrtUR8afeVRDvpXsKOJHSIYu3oir3YS9TE6SQwGW', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 13:53:24', '2016-05-01 13:53:24'),
(38, 'admin@ajdmjintfhx.com', '', '$2y$10$tpU.G8mawQvrLAEvPsEm/u3uXKfpsu0h3tVXvsv2UWLT9Vri7wC1.', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 14:02:28', '2016-05-01 14:02:28'),
(39, 'admin1@admin.com', '', '$2y$10$LWCNmqpRdS6PQA6Kq3VuOu7WIqKsSmQk6rgIGz.ICeTb8qvElTbmy', NULL, '', '', '2016-05-01 14:08:17', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 14:07:24', '2016-05-01 14:08:17'),
(40, 'admin3@admin.com', '', '$2y$10$Jrnm/CmeA9oT6MGbEvRk4OIwjsZ8XnIo2/aBYyJaVLamo.3.RY/42', NULL, '', '', '2016-05-01 14:11:17', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 14:10:48', '2016-05-01 14:11:17'),
(41, 'admin4@admin.com', '', '$2y$10$2HeUvzgoooi9tvSeEn3aRegPVXC4EnX4KYf0Ic8IDe/8WXSCjVZGu', NULL, '', '', NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 14:14:07', '2016-05-01 14:14:07'),
(43, 'admin5@admin.com', '', '$2y$10$dTp2sKdyofdp4N.eS3scx.HRnSt6.cCkIdWysOAuDhKp5kI6SF2Ae', NULL, '', '', '2016-05-01 14:15:54', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 14:14:43', '2016-05-01 14:15:54'),
(44, 'admin6@admin.com', '', '$2y$10$zdBqpmXqpujNPalq6.W5meP0zIRuf/XYT1BkmuICJQHho1UO4BGPW', NULL, '', '', NULL, 'first', 'last', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-01 14:17:26', '2016-12-26 10:00:02'),
(64, 'abdalfattah.hammad@yahoo.com', '', '$2y$10$R6gGLALtsBIs7BWSkVzche5XURZ9k671XFbQ22g1Mrsmp.NW1YyGi', '', '', '', '2016-05-29 06:47:05', 'abdalfattah', 'hammad', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-24 08:38:45', '2016-05-29 06:47:05'),
(66, 'taylorsuccessor1@gmail.com', '', '$2y$10$FGuj819KqAmJNMIxi5qWne/qyvT8SpUhlrgGDJXkKjkYf597RgMby', '{\"user.denyLiveAccount\":true}', '', '', NULL, 'taylor', 'successor', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-25 13:05:11', '2016-05-25 13:05:16'),
(67, 'dfsa@ragf.com', '', '$2y$10$gMS96cK40k52LuVk7BDj2.lCjmrR.htpHH2jvZSw8Vsj/SEieeIoi', '{\"user.denyLiveAccount\":true}', '', '', NULL, 'weq', 'ewqrew', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-29 11:28:02', '2016-05-29 11:28:06'),
(68, 'sdaflh@dfs.com', '', '$2y$10$cE9o/HVrD0xKwQ435xf.o.FruuEBvkhtK9zzzO4wY.zAkiRRjeARG', '{\"user.denyLiveAccount\":true}', '', '', NULL, 'dfs', 'asfd', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-05-29 11:29:44', '2016-05-29 11:29:49'),
(70, 'taylorsuccessor2@gmail.com', '', '$2y$10$WOOk/daK6a37/0Z0vQStX.HmvuSJRF7jDQm3LBRPuLzKEECApIwTi', '{\"user.denyLiveAccount\":true}', '', '', NULL, 'sdf', 'sdfsdf', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-06-12 10:40:00', '2016-06-12 10:40:05'),
(71, 'taylorsuccessor3@gmail.com', '', '$2y$10$vEuPJ4u3ZzRIDaNwVTg.MObXT64Wjk840AF96e.EPbnY4nGR9H7Wq', '{\"user.denyLiveAccount\":true}', '', '', NULL, 'sdfs', 'dfgdfg', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-06-12 10:42:49', '2016-06-12 10:42:54'),
(72, 'taylorsuccessor4@gmail.com', '', '$2y$10$vyw6J2fgdFtchWsjQdV2EuhnEDmyfpX9p0Fb0SqH1LqgP6S0Uxxqu', '{\"user.denyLiveAccount\":true}', '', '', '2016-06-12 12:37:46', 'Test', '', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-06-12 12:37:46', '2016-06-12 12:37:52'),
(73, 'taylorsuccessor5@gmail.com', '', '$2y$10$aQ69hOigVigdEDLPIaJXO.KaXSkjVorqJv4hRNe1n.0cRhpF8hkT6', '{\"user.denyLiveAccount\":true}', '', '', '2016-06-12 12:46:28', 'Test', '', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-06-12 12:46:27', '2016-06-12 12:46:33'),
(74, 'taylorsuccessor6@gmail.com', '', '$2y$10$DOKqv/T4Hn6p6VCB496W8usXxtsdARnjMe/B6HsLCxcNWFmGvz9aq', '{\"user.denyLiveAccount\":true}', '', '', '2016-06-12 12:53:44', 'Test', '', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2016-06-12 12:53:44', '2016-06-12 12:53:49'),
(77, 'hbhuy', '', '$2y$10$SgJ2cJm/NXnCU0B.4/Ya3emRjKeBI77eHP7osCXYQfHdWNxvx7/kO', NULL, '', '', NULL, 'gfy', 'tyf', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-03-22 03:59:03', '2017-03-22 03:59:03'),
(78, 'vv', '', '$2y$10$g.bIACByPTjl.3GNq5TEm.XEdealK44IeAR8JSjcX4DZbXIshD7sm', NULL, '', '', NULL, 'vvvv', 'vvv', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-03-22 21:43:26', '2017-03-22 21:43:26'),
(79, 'test admin', '', '$2y$10$W4wwHxfeWRTX0N35zqpiru0tBjHGI6zLBsfaSmhGK3VWKoc3ieQ82', NULL, '', '', NULL, 'ffff', 'fffffff', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-03-22 21:54:59', '2017-03-22 21:54:59'),
(80, 'dfgsdfg', '', '$2y$10$vLQ5jLvll4mU0CA.6PNZM.qZzchaZ7BXdS03coY/SFEI2KlmqbUY.', NULL, '', '', NULL, 'dfgsdfg', 'gsdfg', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-03-22 21:55:47', '2017-03-22 21:55:47'),
(81, 'bbbbbbbbbb', '', '$2y$10$bBU./jpORO7jyZYlsNjeKubcu38Pv9PyDlYmQaHWaiL67Qvb5p7Fi', NULL, '', '', NULL, NULL, 'cvbcvb', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-03-22 21:58:12', '2017-03-22 21:58:12'),
(82, 'taylorsuccessor@gmail.com', '', '$2y$10$VI2Z6cx5.vXh7VkuSpFvq.9EJEb1nxKLhVOnrg4GpNJHMjZsuLvpO', '{\"_token\":\"X5GWcJx2VKkqp07WmwUPcm7SyPEzDMvmjG4COUGJ\",\"email\":\"taylorsuccessor@gmail.com\",\"password\":\"admin\"}', '', '', '2017-10-01 03:00:46', 'taylor', 'successor', NULL, '11111111111', '222222222', 1, '', '1', 0, '', 31.9799521, 35.8746053, 1, '0000-00-00', '2017-05-20 12:18:06', '2017-10-01 03:00:46'),
(83, 'asfd@sdf.sdf', '', 'admin', NULL, '', '', NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'asfd@sddsf.sdf', '', 'admin', NULL, '', '', NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'asfd@sddddsf.sdf', '', 'admin', NULL, '', '', NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'asfad@sddddsf.sdf', '', 'admin', NULL, '', '', NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'asdf@sdf.sdf', '', 'admin', NULL, '', '', NULL, 'admin', 'adin', NULL, '234324', '234234', 0, '', '1', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'slkdfj@sdf.sdf', '', '$2y$10$sh.w238mR9.TxyQoQittrucX71gbfEhkdkCQRtLg2X6bBs8k1jPbK', NULL, '', '', '2017-05-23 02:46:15', 'aslkdfj', 'skldfj', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-05-22 09:22:12', '2017-05-23 02:46:15'),
(90, 'rrrrrrrrr@rrrrrrr.rrrr', '', '$2y$10$/048LG5QGvzXeBziesRQVOPGhJ6RjxAK4Ub461IQI0bRLbxPB2Kpy', NULL, '', '', NULL, 'rrrrrr', 'rrrrrr', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-05-23 04:55:32', '2017-05-23 04:55:32'),
(91, 'rrrrrrrrrrrr@rrrrrrr.rrrr', '', 'admin', NULL, '', '', NULL, 'rrrrrr', 'rrrrrr', NULL, '34534345', '3534534', 0, '', '0', 0, '', 0, 0, 0, '0000-00-00', '2017-05-23 04:57:03', '2017-05-23 04:57:03'),
(92, 'rrrrrrrrr@rr.rrr', '', 'admin', NULL, '', '', NULL, 'rrrrrr', 'rrrrrr', NULL, '34534345', '3534534', 0, '', '0', 0, '', 0, 0, 0, '0000-00-00', '2017-05-23 04:58:10', '2017-05-23 04:58:10'),
(93, 'sdf@ddd.vdf', '', 'admin', NULL, '', '', NULL, 'sdf', 'sdf', NULL, '234', '24234', 0, '', '1', 0, '', 0, 0, 0, '0000-00-00', '2017-05-26 13:40:50', '2017-05-26 13:40:50'),
(94, 'gest_32126656_80530962@deera.com', '', '$2y$10$BqQVbnq.f.PTEV/Dw6h1UeQup3bsC6brkuXaSjCXY0B56Wd7uoL6G', NULL, '', '', '2017-06-03 15:19:33', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-03 15:19:33', '2017-06-03 15:19:33'),
(95, 'gest_16718495_21294603@deera.com', '', '$2y$10$6jHZpO5EgT/fMNx4Jxt5VOd/6FoBw2T3dALpLD89zes6bCl6yaLiG', NULL, '', '', '2017-06-03 17:41:35', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-03 17:41:35', '2017-06-03 17:41:35'),
(96, 'gest_83994293_69461111@deera.com', '', '$2y$10$q73d0BT8HrGuYv5QslFSuOoteAaRCeOK5jwdxGNi9IuORXKZD.98W', NULL, '', '', '2017-06-06 06:39:22', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-06 06:39:22', '2017-06-06 06:39:22'),
(97, 'guest_94801956_72110436@deera.com', '', '$2y$10$Tuh13OEUbg/X/juxuxD0BOl.SMIsvgSjsKjqKJObIDB/4evFBGs22', NULL, '', '', '2017-06-07 09:39:51', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(98, 'guest_94292822_40028902@deera.com', '', '$2y$10$/uWVVDqC9XxR9XxyM6YtG.ZdUV9EOV/QLMtcxys4T/KYK97.f7J1K', NULL, '', '', '2017-06-07 10:04:00', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(99, 'guest_69479403_62324090@deera.com', '', '$2y$10$Uub6FsOWsFqnvnLVmRl0t.slKv1flNmn4QTnwyyS174n9BVLJoDFS', NULL, '', '', '2017-06-07 10:05:27', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(100, 'guest_3947466_60632058@deera.com', '', '$2y$10$Y.Z5q6li7YHFT/U35kyfQ.RpnGiZgR3mle3B.0L.xwT8xH1Br/jHS', NULL, '', '', '2017-06-08 06:34:31', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(101, 'guest_55241945_30794371@deera.com', '', '$2y$10$.iN05pc9JxO8WnLOa8QAHuesRFE2yJQKkJCD1dbzhisRqgPsZkUjG', NULL, '', '', '2017-06-11 06:41:14', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(102, 'guest_80064510_92225799@deera.com', '', '$2y$10$4IMzi.XDk5waw.khf5SHRu/KbV/jWFZKS.XsN82nNYz3p1AV1pKsO', NULL, '', '', '2017-06-11 07:58:45', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(103, 'guest_81921172_5828517@deera.com', '', '$2y$10$M7F6Qnv44cKckQ0BV.3FMeCSVI3IgrbkzZ/U5yIszlu4IeXioMfga', NULL, '', '', '2017-06-11 10:41:58', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(104, 'guest_64000878_59882076@deera.com', '', '$2y$10$PL6xj51AWAGPaq2NTYTqvOAWFdmZc5iVf5owpqn0M7KF92H5z8Lvm', NULL, '', '', '2017-06-15 06:45:36', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-15 06:45:35', '2017-06-15 06:45:36'),
(105, 'klmkdc', '', '$2y$10$BmLvJuUY2dEqxEey4xfWyuQplEpxvPP8mLFpli4bJITylcfatNK0W', NULL, '', '', NULL, 'lkjo', 'ijoij', NULL, '', '', 0, '', '0', 0, '', 34.08906131584994, 38.14453125, 0, '0000-00-00', '2017-06-15 20:49:29', '2017-06-15 20:49:29'),
(106, 'thnth@dfg.jui', '', 'admin', NULL, '', '', NULL, 'dfgsh', 'rgfg', NULL, '', '4564567', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-19 18:51:22', '2017-06-19 18:51:22'),
(107, 'ihi@iuh.df', '', 'admin', NULL, '', '', NULL, 'dfgedfjh', 'jih', NULL, '', '2453453', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-19 18:54:44', '2017-06-19 18:54:44'),
(108, 'guest_76256677_65845345@deera.com', '', '$2y$10$.75altF0/UBKVfXUD34lVOkouFt5hPlk5RhJOdM9eWyojpfK3gIOi', NULL, '', '', '2017-06-21 08:50:28', NULL, NULL, NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-06-21 08:50:28', '2017-06-21 08:50:28'),
(109, 'jsoidf@oijsdf.sdfo', '', 'admin', NULL, '', '', NULL, 'sdkfj', 'joisjdof', NULL, '', '234235', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-02 10:36:37', '2017-07-02 10:36:37'),
(110, 'kjls@kljs.fsd', '', 'admin', NULL, '', '', '2017-07-02 12:43:19', 'sdfj', 'kljlkj', NULL, '', '234234', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-02 12:43:18', '2017-07-02 12:43:19'),
(111, 'kxcfvjls@kljs.fsdsd', '', 'admin', NULL, '', '', '2017-07-02 12:47:37', 'sdfj', 'kljlkj', NULL, '', '234234', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-02 12:47:37', '2017-07-02 12:47:37'),
(112, 'oiojo@oj.sdf', '', 'admin', NULL, '', '', NULL, 'skldf', 'jlkj', NULL, '', '23424', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'odsfiojo@oj.sdf', '', 'admina', NULL, '', '', NULL, 'skldf', 'jlkj', NULL, '', '23424', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'odcco@oj.sdf', '', 'admin', NULL, '', '', NULL, 'skldf', 'jlkj', NULL, '', '23424', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'odhsfiojo@oj.sdf', '', '$2y$10$yyF5okbm54MrMLd2RVjt.uateRZMH5VLpw0QMcwnY1aO3Y5sURy/.', NULL, '', '', '2017-07-02 13:30:01', 'skldf', 'jlkj', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-02 13:30:01', '2017-07-02 13:30:01'),
(116, 'drt@rdtr.yg', '', '$2y$10$b7a2rtL/JGF.5hL7PkrVOe9EvbVfFttJcmPSnd7Ze.X7QHNZXk18u', NULL, '', '', '2017-07-02 13:33:13', 'ugfyt', 'gfctr', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-02 13:33:13', '2017-07-02 13:33:13'),
(117, 'jijoi@oijio.sd', '', '$2y$10$clZ9QoJvG8i610xYGokgQuZUHv7lpZdgEjMJViQzdhBRBgCqVRS3y', NULL, '', '', '2017-07-02 13:37:16', 'ojio', 'oijoi', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-02 13:37:16', '2017-07-02 13:37:16'),
(118, 'manager@shop.com', '', '$2y$10$qk.QYrEzWAx8ptv0Yzj9AO7NXSGRbHFuDTAwGAHBhBjSfzaCKzs8O', NULL, '', '', '2017-07-03 02:13:53', 'manager', 'shop', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-03 02:11:10', '2017-07-03 02:13:53'),
(119, 'dispatcher@shop.com', '', '$2y$10$X2zzxOhR8ZlbDt1Yjsp1CeqFH6bvKk2Uir2douB3IGdDyKouyremS', NULL, '', '', '2017-08-02 05:26:20', 'dispatcher', 'shop', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-03 02:17:53', '2017-08-02 05:26:20'),
(120, 'driver@shop.com', '', '$2y$10$xYvz8y8f/8DALtYdi/HY9utf3hu0Mk3bYH6lhItugbdxV.jLcrty6', NULL, '', '', '2017-07-03 02:24:18', 'driver', 'shop', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-03 02:19:42', '2017-07-03 02:24:18'),
(121, 'guest_97750054_20389137@deera.com', '', '$2y$10$vinnaemkIqO.cBdbvilpf.Ab8SMLg7hQD6el1jyl/su/IwjNkbte.', NULL, '', '', '2017-07-19 04:27:06', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-19 04:27:06', '2017-07-19 04:27:06'),
(122, 'guest_60324139_68083095@deera.com', '', '$2y$10$8gb24KFM90O9mVLpSuQmiubWt/mX4MNk4d/bWPKhZj5oZriXd0.Qm', NULL, '', '', '2017-07-19 04:28:38', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-19 04:28:38', '2017-07-19 04:28:38'),
(123, 'guest_14117949_57827248@deera.com', '', '$2y$10$Ff/O4jQOf534aIbchL9SSu84amB.6ZbkxAow4wt5I.v5uif.Gq3Ya', NULL, '', '', '2017-07-19 04:29:29', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-19 04:29:29', '2017-07-19 04:29:29'),
(124, 'guest_31739470_99204287@deera.com', '', '$2y$10$iaoybjF3J7glq9BmDClBX.n1WLqpoFvw0FiXX5omPb8s02QHMx0Ue', NULL, '', '', '2017-07-19 10:15:48', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-19 10:15:48', '2017-07-19 10:15:48'),
(125, 'guest_20611693_63223458@deera.com', '', '$2y$10$ck9PoBY9pgDZ67TTbyPEGutPIvOARbLJtP94MNK3tOtsQii1SN75K', NULL, '', '', '2017-07-20 04:05:14', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-20 04:05:14', '2017-07-20 04:05:14'),
(126, 'guest_65467306_30849248@deera.com', '', '$2y$10$MM3IYq3qtugBc1tkZywnCOWwKd0x..e4ID.B.oDyJihWfd1GRWcRW', NULL, '', '', '2017-07-20 10:23:03', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-20 10:23:03', '2017-07-20 10:23:03'),
(127, 'guest_65555718_7706520@deera.com', '', '$2y$10$8VW8jn6SwNOgjYoWMQdBF.ObEH76sbxaCuVxaEP57ofDjS/ZtG5du', NULL, '', '', '2017-07-23 06:47:44', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-23 06:47:44', '2017-07-23 06:47:44'),
(128, 'guest_346944_654863@deera.com', '', '$2y$10$6J4Z64SPMyBc3HDQGZ1qJui2iwnHsErmeiHRjrAhD/2cAS82mlS7.', NULL, '', '', '2017-07-23 06:54:12', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-23 06:54:12', '2017-07-23 06:54:12'),
(129, 'guest_75558523_35013781@deera.com', '', '$2y$10$mN3y95dnjP7kcW4CDauqs.z9WJlNCknWclBIvf/kq1LtvDAequmUe', NULL, '', '', '2017-07-23 07:00:43', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-23 07:00:43', '2017-07-23 07:00:43'),
(130, 'guest_69293432_24882930@deera.com', '', '$2y$10$jvTY4WYPAPVQnEGR.LXRFeHpU9duhlUwi16vnSYb1knJMjhOyfeXe', NULL, '', '', '2017-07-23 07:01:22', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-23 07:01:22', '2017-07-23 07:01:22'),
(131, 'guest_17474574_16294725@deera.com', '', '$2y$10$ntQsNJ3HKFFJ3tDhY3s8W.oI7VI/qX5K/AhE78DR5Wo/TQH6VmlNa', NULL, '', '', '2017-07-23 07:33:10', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-23 07:33:10', '2017-07-23 07:33:10'),
(132, 'guest_91295944_11508257@deera.com', '', '$2y$10$ZUc9oo9Z3o/NPoQHPWH/veCZcYt.heEyHD2TrNEVeWuEydxQvVON.', NULL, '', '', '2017-07-24 03:33:36', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-24 03:33:36', '2017-07-24 03:33:36'),
(133, 'guest_32937612_78390771@deera.com', '', '$2y$10$Io/U5RGk5cbarMNfEHxed.hqSKAudBRR1OFSclg4e6oanT5hNyINS', NULL, '', '', '2017-07-24 04:41:59', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-24 04:41:59', '2017-07-24 04:41:59'),
(134, 'guest_91792883_98454306@deera.com', '', '$2y$10$4VGILPh/OmKvZdoUwXO/LeyWf2Qr3Zz.jxu/JLf5A6.RxRag.bu8S', NULL, '', '', '2017-07-24 04:57:44', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-24 04:57:44', '2017-07-24 04:57:44'),
(135, 'guest_91808126_4898662@deera.com', '', '$2y$10$PgXPyoYlva76w9WvoaBpOuZeRj1uCuVV64N2twfyMpnbBgCJIoJ9G', NULL, '', '', '2017-07-24 05:00:45', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-24 05:00:45', '2017-07-24 05:00:45'),
(136, 'guest_92506280_35730227@deera.com', '', '$2y$10$Mx9O1EtXxm16X0sRScO.LeFk1iurQ1Da5s/mdpZE3izIlJawck5IK', NULL, '', '', '2017-07-25 02:59:47', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-25 02:59:47', '2017-07-25 02:59:47'),
(137, 'guest_97862857_87317382@deera.com', '', '$2y$10$sUgX6z3HeIEZ03safY3pR.Lr4al67hpC0Uj8jKsHkGCRSk6mJkxq.', NULL, '', '', '2017-07-25 03:08:20', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-25 03:08:20', '2017-07-25 03:08:20'),
(138, 'guest_47864077_57025439@deera.com', '', '$2y$10$m7epJoDzshbu.gGto1PyG.cKDiXyiYdXc7gBhfTG72XZtSci97L9C', NULL, '', '', '2017-07-25 05:33:51', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-25 05:33:51', '2017-07-25 05:33:51'),
(139, 'guest_89323431_69668423@deera.com', '', '$2y$10$ecG8y04F/tLAfs0If3c8yOjTL0EfEgwYvsDGo/RaSWtGVpNCv21fu', NULL, '', '', '2017-07-25 05:43:39', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-25 05:43:39', '2017-07-25 05:43:39'),
(140, 'guest_78509670_44501354@deera.com', '', '$2y$10$wf29TdYYkpBXNub2yMfvvuT9.46J4H56D5uWkqX41KfT08UuxtoEa', NULL, '', '', '2017-07-25 08:43:08', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-25 08:43:08', '2017-07-25 08:43:08'),
(141, 'landy@landy.com', '', '$2y$10$i/l6I/7vcuDjh48vlHF5zOyKESULNZCwQmSav.5KAgdifD9A3Vpb.', NULL, '', '', '2017-07-25 09:50:39', 'landy', 'landy', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-25 09:16:36', '2017-07-25 09:50:39'),
(142, 'guest_1020708_41315456@deera.com', '', '$2y$10$JWj/mtfrbAUkJ7LZ.sO1aeuGfK70DYE3qKEupZF2U0eig7j1LVYbW', NULL, '', '', '2017-07-25 14:46:23', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-25 14:46:23', '2017-07-25 14:46:23'),
(143, 'guest_85884490_56961416@deera.com', '', '$2y$10$ZwfWhFtxbMUHoJJm7bQi5OWCCY6NWIZvsBEEqV4bYqWjFzONBmGRO', NULL, '', '', '2017-07-26 07:25:14', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-26 07:25:14', '2017-07-26 07:25:14'),
(144, 'guest_36434478_55266335@deera.com', '', '$2y$10$CnxOrd63hv8FD1HfbFpD1OpAy2kOmA1vK8Vi0jDhYHO3gUcKEAwcu', NULL, '', '', '2017-07-26 07:29:10', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-26 07:29:10', '2017-07-26 07:29:10'),
(145, 'guest_8215654_38852102@deera.com', '', '$2y$10$Dzp/HjvXyWRfbUVAWEo64u/vR/4Y46sRumyEQfAEdQHtsRhU/bt7m', NULL, '', '', '2017-07-28 03:12:23', 'guest', 'guest', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-28 03:12:23', '2017-07-28 03:12:23'),
(146, 'guest_51034731_77951757@deera.com', '', '$2y$10$/fWQITrvxM3jyjGnTR2aF.jM5t8FjjvNUtuHd0RI9Q2ep79EEDQIe', NULL, '', '', '2017-07-28 03:20:11', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-28 03:20:11', '2017-07-28 03:20:11'),
(147, 'guest_85085729_4237093@deera.com', '', '$2y$10$WICj41k/j5Wut8ppUHQPze28L5CzjyL0JfvaYyXHHzLTA.B6LIzSa', NULL, '', '', '2017-07-28 10:18:12', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-28 10:18:12', '2017-07-28 10:18:12'),
(148, 'guest_87070437_91012414@deera.com', '', '$2y$10$EtEV1QTA28yWiUlPkg9bguS3Nth3Gi5byH0RJ/rpgQS7fa2lFilA2', NULL, '', '', '2017-07-28 15:55:25', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-28 15:55:25', '2017-07-28 15:55:25'),
(149, 'guest_44199532_10361943@deera.com', '', '$2y$10$b6PEWK09hqTtM/vsVLrSteiGqlj.jfEnLs18HsIlGqP3yIEjWg6ny', NULL, '', '', '2017-07-28 16:03:42', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-28 16:03:42', '2017-07-28 16:03:42'),
(150, 'guest_82058364_62927734@deera.com', '', '$2y$10$9iQFy.PpoMbkRtW13M8xJuEgV7Z6mC0/nR4nBWJIl5DFX/wPy1qiC', NULL, '', '', '2017-07-28 16:21:53', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-28 16:21:53', '2017-07-28 16:21:53'),
(151, 'guest_54309041_82079705@deera.com', '', '$2y$10$uIxaPnubBpOgllKNob3J9OJ5tum8m55JMl6bzD6D11/6aCvpQrd0a', NULL, '', '', '2017-07-28 17:01:34', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-28 17:01:34', '2017-07-28 17:01:34'),
(152, 'guest_9337578_86216799@deera.com', '', '$2y$10$nvsYMH8YkeIVwSumhwfdu.uM3RIBg/6VpFz8V7vI260Vr.A8z.VTu', NULL, '', '', '2017-07-28 17:03:01', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-28 17:03:01', '2017-07-28 17:03:01'),
(153, 'guest_19572084_70098290@deera.com', '', '$2y$10$e7fGISzXeU7Ifkgy7BpI4OBjhepXxsMPYvyYCIoQ0FCbWpO677fD6', NULL, '', '', '2017-07-28 17:22:55', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-28 17:22:55', '2017-07-28 17:22:55'),
(154, 'guest_75695715_92112997@deera.com', '', '$2y$10$hgdEf5ujNU4zLWGBS7fEgukacz6H0xjMAfy1BeWPMt7xy9VsRj1kG', NULL, '', '', '2017-07-29 04:00:56', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-29 04:00:55', '2017-07-29 04:00:56'),
(155, 'dddd@dddd.ddddd', '', '$2y$10$iyxoFHI9EZZMMuisuTAw/.TOLMxx8D6rIALnEu8nuAwuLgApzz2t6', NULL, '', '', '2017-07-29 04:21:54', 'ddddd', 'guest', NULL, '', '2222222', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-29 04:21:54', '2017-07-29 04:21:54'),
(156, 'guest_87799078_34632692@deera.com', '', '$2y$10$1Y2w5.nKEV28na1EMnaeKe.NOVIIqxtbRe8ug6vTd11v6ohOpXIUe', NULL, '', '', '2017-07-29 10:32:47', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-29 10:32:47', '2017-07-29 10:32:47'),
(157, 'rrr@rrr.rrr', '', '$2y$10$d/3oOPrPeW.Xatow9hBfouGhn8YvITIrAMG8kKaUec7DYwZpla.5G', NULL, '', '', '2017-07-29 10:34:28', 'mmmmmmm', 'sdfklj', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-29 10:34:28', '2017-07-29 10:34:28'),
(158, 'rrrs@rrr.rrr', '', '$2y$10$6yKrEsrXqCt05BT.7qTXc.xVsj9Jfwl0q0n4bHDnkXjsR92cGbykG', NULL, '', '', '2017-07-29 10:35:14', 'mmmmmmm', 'sdfklj', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-29 10:35:14', '2017-07-29 10:35:14'),
(159, 'rrrr@rrr.rrr', '', '$2y$10$hVJLnrStXeOdF8BIGzEAa.gax1wQH85QPV23EHPBBqLY8kcK76xAW', NULL, '', '', '2017-07-29 10:36:20', 'mmmmmmm', 'sdfklj', NULL, '', '', 0, '', '', 0, '', 0, 0, 0, '0000-00-00', '2017-07-29 10:36:20', '2017-07-29 10:36:20'),
(160, 'guest_10108901_87561279@deera.com', '', '$2y$10$5f.KnQurRbzIDwMTmQ4tp.3yFnBmzIas15DHmjkQp8/a0Wy.0SEM.', NULL, '', '', '2017-07-29 11:29:26', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-07-29 11:29:26', '2017-07-29 11:29:26'),
(161, 'sfdgf@kldsfjg.sdfsdf', '', '$2y$10$dw2OUJJBVGDarEFfnDX.NOAhUHPeE32Wx2l6da9hhxcOo0iK7YjaK', NULL, '', '', '2017-08-02 03:02:23', 'ggg', 'guest', NULL, '', '24524234', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-08-02 03:02:23', '2017-08-02 03:02:23'),
(162, 'guest_39812444_42595913@cofe.com', '', '$2y$10$vdKfLxLaDIrGCjdj30S1CulbwDIAk2LSyGCaRZNhSUMTqXOsyI.vm', NULL, '', '', '2017-08-06 10:46:39', 'sdfjio', 'guest', NULL, '', 'joij', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-08-06 10:46:39', '2017-08-06 10:46:39'),
(163, 'guest_1462770_25501818@cofe.com', '', '$2y$10$XZ7hnCm5ZReRHKmb9JOur.WP5X2OTU4/ynssSx7NmIfYeaq6NameW', NULL, '', '', '2017-08-07 02:30:29', 'sdf', 'guest', NULL, '', 'ijoj', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-08-07 02:30:29', '2017-08-07 02:30:29'),
(164, 'guest_56726665_69314773@cofe.com', '', '$2y$10$086nICnkEYffnNOnVXncNuyYlVF7kRgSxp4KM7ZS25e71vrxMdr0e', NULL, '', '', '2017-08-07 05:47:30', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-08-07 05:47:30', '2017-08-07 05:47:30'),
(165, 'wfwf@sdfsdf.sdfs', '', '$2y$10$XrK.creE6sA5VcR4xuwByOz5K9uZAsIBxx5GQsrO3uzTcR/k43Cfq', NULL, '', '', '2017-08-14 02:40:18', 'sdfsdf', 'guest', NULL, '', '234234', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-08-14 02:40:18', '2017-08-14 02:40:18'),
(166, 'guest_86158874_71259847@cofe.com', '', '$2y$10$6EEzXib0jfBjyHJxZDqfyeNWrlG2IoyDBGeE0D0GccdGwfAs/RN2K', NULL, '', '', '2017-08-22 08:23:47', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-08-22 08:23:47', '2017-08-22 08:23:47'),
(167, 'guest_33416259_97783590@cofe.com', '', '$2y$10$1TeexG/AHfpbQT9gFpPswOb1hMgQhLa74AlHeMmAsZhIPmAA9OL16', NULL, '', '', '2017-08-22 08:24:00', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-08-22 08:24:00', '2017-08-22 08:24:00'),
(168, 'guest_96564108_86238140@cofe.com', '', '$2y$10$s/gaBZ6rGR0GYP91NyT5XOSqDk4Cdv0w5sLv87zJ1jdOEc5FocNey', NULL, '', '', '2017-09-10 04:05:55', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-09-10 04:05:55', '2017-09-10 04:05:55'),
(169, 'ffffff@ffffff.ffffff', '', '$2y$10$wTg600YUz8ZCD87AEVfFHekrBv7/q0jGbo78xYWsdYbn.K7n5oEdK', '{\"_token\":\"X5GWcJx2VKkqp07WmwUPcm7SyPEzDMvmjG4COUGJ\",\"email\":\"ffffff@ffffff.ffffff\",\"password\":\"tttttt\",\"deviceId\":\"\"}', '', '', '2017-09-10 05:22:31', 'ffffff', 'fffff', NULL, '', '2423423', 0, '3', '', 0, '', 0, 0, 0, '1985-01-12', '2017-09-10 04:44:04', '2017-09-10 05:22:31'),
(170, 'skdf@lksdf.sdf', '', '$2y$10$k6FE79/zWWU9Yw.n6j4gdeAk7SbmsraTbkA0UNi5eUKyvw8W0gdpG', NULL, '', '', '2017-09-10 04:51:26', 'sldkjf', 'sdflj', NULL, '', '23423423', 0, '3', '', 0, '', 0, 0, 0, '1985-01-01', '2017-09-10 04:51:26', '2017-09-10 04:51:26'),
(171, 'oijdsf@oij.sfdf', '', '$2y$10$tqb2tte5vVhh6eRmzkQ1N.9uLsMZAIJCOjFmfRFINYxrD7dDbF0fu', NULL, '', '', '2017-09-10 04:52:18', 'asdf', 'ojsoidf', NULL, '', '9798798', 0, '3', '', 0, '', 0, 0, 0, '1980-04-05', '2017-09-10 04:52:18', '2017-09-10 04:52:18'),
(172, 'ssss@sdsd.sdsd', '', '$2y$10$rJbdLGgMvpzm415ZHQXRauVJRDPtDQJ4VvvGLUxLz4WXcOLTTCpvi', NULL, '', '', '2017-09-10 04:55:37', 'adfdskjf', 'lkjsdf', NULL, '', '234234', 0, '3', '', 0, '', 0, 0, 0, '1980-01-10', '2017-09-10 04:55:37', '2017-09-10 04:55:37'),
(173, 'mmmm@kkk.kkkk', '', '$2y$10$PAzY/ldWkxybasDReB8y6eyUf/26wy5.IjKQqnlpUwQ3aBLz3ZRFC', NULL, '', '', '2017-09-10 08:19:07', 'sdf', 'guest', NULL, '', '345435', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-09-10 08:19:07', '2017-09-10 08:19:07'),
(174, 'guest_71997634_71451916@cofe.com', '', '$2y$10$g2lpfEZVKxoalJCHmLVEvubKVbdP2bG7XHd72mBaQ9wdIi0Ipq5bS', NULL, '', '', '2017-09-10 08:51:01', 'guest', 'guest', NULL, '', '', 0, '', '', 1, '', 0, 0, 0, '0000-00-00', '2017-09-10 08:51:01', '2017-09-10 08:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `amount` double NOT NULL,
  `current_amount` double NOT NULL,
  `total_number` int(11) NOT NULL,
  `used_number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `code`, `type`, `amount`, `current_amount`, `total_number`, `used_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'code', 0, 34, 900, 0, 0, 1, '2017-08-06 18:31:22', '2017-08-06 18:31:22'),
(2, 'sdkvme23', 1, 5, 0, 0, 0, 1, '2017-08-06 18:31:58', '2017-09-11 21:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `voucher_users`
--

CREATE TABLE `voucher_users` (
  `id` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `governorate_id` (`governorate_id`);

--
-- Indexes for table `audit_track`
--
ALTER TABLE `audit_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `coffee_id` (`coffee_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `cart_product_option`
--
ALTER TABLE `cart_product_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `cuisine_id` (`cuisine_id`),
  ADD KEY `menu_section_id` (`menu_section_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `delivery_menu_id` (`delivery_menu_id`);

--
-- Indexes for table `coffee_rate`
--
ALTER TABLE `coffee_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coffee_id` (`coffee_id`);

--
-- Indexes for table `columns_info`
--
ALTER TABLE `columns_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_menu`
--
ALTER TABLE `delivery_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `email_group`
--
ALTER TABLE `email_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_group_users`
--
ALTER TABLE `email_group_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_group_id` (`email_group_id`);

--
-- Indexes for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_group_id` (`email_group_id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_card_order`
--
ALTER TABLE `gift_card_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `gift_card_id` (`gift_card_id`);

--
-- Indexes for table `gift_card_users`
--
ALTER TABLE `gift_card_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gift_card_id` (`gift_card_id`);

--
-- Indexes for table `governorate`
--
ALTER TABLE `governorate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knet`
--
ALTER TABLE `knet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_section`
--
ALTER TABLE `menu_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coffee_id` (`coffee_id`);

--
-- Indexes for table `operation_hour`
--
ALTER TABLE `operation_hour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_area_id` (`shop_area_id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_driver`
--
ALTER TABLE `order_driver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment_way`
--
ALTER TABLE `payment_way`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `product_option`
--
ALTER TABLE `product_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coffee_id` (`coffee_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_boy`
--
ALTER TABLE `service_boy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_company_id` (`service_company_id`);

--
-- Indexes for table `service_company`
--
ALTER TABLE `service_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_company_order`
--
ALTER TABLE `service_company_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_company_id` (`service_company_id`),
  ADD KEY `order_id` (`service_boy_id`);

--
-- Indexes for table `service_company_order_service`
--
ALTER TABLE `service_company_order_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_company_order_id` (`service_company_order_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `shop_area`
--
ALTER TABLE `shop_area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `governorate_id` (`governorate_id`);

--
-- Indexes for table `shop_cuisine`
--
ALTER TABLE `shop_cuisine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `cuisine_id` (`cuisine_id`);

--
-- Indexes for table `shop_rate`
--
ALTER TABLE `shop_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `shop_users`
--
ALTER TABLE `shop_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_provider_user_id_unique` (`provider`,`user_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher_users`
--
ALTER TABLE `voucher_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voucher_id` (`voucher_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `audit_track`
--
ALTER TABLE `audit_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=916;
--
-- AUTO_INCREMENT for table `cart_product_option`
--
ALTER TABLE `cart_product_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `coffee_rate`
--
ALTER TABLE `coffee_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `columns_info`
--
ALTER TABLE `columns_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `delivery_menu`
--
ALTER TABLE `delivery_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `email_group`
--
ALTER TABLE `email_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `email_group_users`
--
ALTER TABLE `email_group_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gift_card`
--
ALTER TABLE `gift_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gift_card_order`
--
ALTER TABLE `gift_card_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gift_card_users`
--
ALTER TABLE `gift_card_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `governorate`
--
ALTER TABLE `governorate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `knet`
--
ALTER TABLE `knet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu_section`
--
ALTER TABLE `menu_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `operation_hour`
--
ALTER TABLE `operation_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;
--
-- AUTO_INCREMENT for table `order_driver`
--
ALTER TABLE `order_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `payment_way`
--
ALTER TABLE `payment_way`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1305;
--
-- AUTO_INCREMENT for table `product_option`
--
ALTER TABLE `product_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_boy`
--
ALTER TABLE `service_boy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service_company`
--
ALTER TABLE `service_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_company_order`
--
ALTER TABLE `service_company_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `service_company_order_service`
--
ALTER TABLE `service_company_order_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `shop_area`
--
ALTER TABLE `shop_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `shop_cuisine`
--
ALTER TABLE `shop_cuisine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `shop_rate`
--
ALTER TABLE `shop_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shop_users`
--
ALTER TABLE `shop_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `voucher_users`
--
ALTER TABLE `voucher_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`governorate_id`) REFERENCES `governorate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`coffee_id`) REFERENCES `coffee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coffee`
--
ALTER TABLE `coffee`
  ADD CONSTRAINT `coffee_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coffee_ibfk_2` FOREIGN KEY (`cuisine_id`) REFERENCES `cuisine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coffee_ibfk_3` FOREIGN KEY (`menu_section_id`) REFERENCES `menu_section` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coffee_ibfk_4` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coffee_ibfk_5` FOREIGN KEY (`delivery_menu_id`) REFERENCES `delivery_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coffee_rate`
--
ALTER TABLE `coffee_rate`
  ADD CONSTRAINT `coffee_rate_ibfk_1` FOREIGN KEY (`coffee_id`) REFERENCES `coffee` (`id`);

--
-- Constraints for table `delivery_menu`
--
ALTER TABLE `delivery_menu`
  ADD CONSTRAINT `delivery_menu_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_group_users`
--
ALTER TABLE `email_group_users`
  ADD CONSTRAINT `email_group_users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
  ADD CONSTRAINT `email_mass_queue_ibfk_1` FOREIGN KEY (`email_group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
  ADD CONSTRAINT `email_mass_template_ibfk_1` FOREIGN KEY (`email_group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gift_card_order`
--
ALTER TABLE `gift_card_order`
  ADD CONSTRAINT `gift_card_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gift_card_order_ibfk_2` FOREIGN KEY (`gift_card_id`) REFERENCES `gift_card` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gift_card_users`
--
ALTER TABLE `gift_card_users`
  ADD CONSTRAINT `gift_card_users_ibfk_1` FOREIGN KEY (`gift_card_id`) REFERENCES `gift_card` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_section`
--
ALTER TABLE `menu_section`
  ADD CONSTRAINT `menu_section_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`coffee_id`) REFERENCES `coffee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operation_hour`
--
ALTER TABLE `operation_hour`
  ADD CONSTRAINT `operation_hour_ibfk_1` FOREIGN KEY (`shop_area_id`) REFERENCES `shop_area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `operation_hour_ibfk_2` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_driver`
--
ALTER TABLE `order_driver`
  ADD CONSTRAINT `order_driver_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_way`
--
ALTER TABLE `payment_way`
  ADD CONSTRAINT `payment_way_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_option`
--
ALTER TABLE `product_option`
  ADD CONSTRAINT `product_option_ibfk_1` FOREIGN KEY (`coffee_id`) REFERENCES `coffee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_boy`
--
ALTER TABLE `service_boy`
  ADD CONSTRAINT `service_boy_ibfk_1` FOREIGN KEY (`service_company_id`) REFERENCES `service_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_company_order_service`
--
ALTER TABLE `service_company_order_service`
  ADD CONSTRAINT `service_company_order_service_ibfk_1` FOREIGN KEY (`service_company_order_id`) REFERENCES `service_company_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_company_order_service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_area`
--
ALTER TABLE `shop_area`
  ADD CONSTRAINT `shop_area_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_area_ibfk_2` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_area_ibfk_3` FOREIGN KEY (`governorate_id`) REFERENCES `governorate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_cuisine`
--
ALTER TABLE `shop_cuisine`
  ADD CONSTRAINT `shop_cuisine_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shop_cuisine_ibfk_2` FOREIGN KEY (`cuisine_id`) REFERENCES `cuisine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_rate`
--
ALTER TABLE `shop_rate`
  ADD CONSTRAINT `shop_rate_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_users`
--
ALTER TABLE `shop_users`
  ADD CONSTRAINT `shop_users_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `voucher_users`
--
ALTER TABLE `voucher_users`
  ADD CONSTRAINT `voucher_users_ibfk_1` FOREIGN KEY (`voucher_id`) REFERENCES `voucher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `voucher_users_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
