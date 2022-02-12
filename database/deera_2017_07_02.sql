-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 03:16 PM
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
(164, 108, 'Hcay8dAjV4jIs4BKaMtmMBwUdZkg7ZMS', 1, '2017-06-21 08:50:28', '2017-06-21 08:50:28', '2017-06-21 08:50:28');

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
(6, 82, 5, 'home address', 0, NULL, NULL, '', '23', 'sdf', NULL, 'sdf', 'sdfg', 'sdfg', 'sfg', '', '', '35.94410705', '31.96393025', 'sdfg', NULL, NULL, '2017-05-23 19:48:24', '2017-05-26 17:06:10'),
(7, 82, 5, 'third address', NULL, NULL, NULL, NULL, '23', 'sdf', NULL, 'sdf', 'sdfg', 'sdfg', 'sfg', NULL, NULL, '35.95646667', '31.94645247', 'sdfg', NULL, NULL, '2017-05-23 19:49:11', '2017-05-23 19:54:59'),
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
(38, 82, 4, 'jloi', NULL, NULL, NULL, '987', 'jhoi', 'ihi', NULL, 'hiuh', 'iuh', 'iuhi', 'hiuh', '987', '9879', '35.86615210000002', '31.9589647', 'hjhi', NULL, NULL, '2017-06-22 12:07:25', '2017-06-22 12:07:25');

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
(79, 82, 'Update Coffee', 'taylor successor', 'Admin . Client . ', '{\"_method\":\"PATCH\",\"_token\":\"4e1Zr92auNAVP5LKdlqwgvRPvbhFltfOYljEaagE\",\"name_en\":\"Cafe Francoeur\",\"name_ar\":\"\\u0642\\u0647\\u0648\\u0629\",\"shop_id\":\"7\",\"cuisine_id\":\"1\",\"menu_section_id\":\"1\",\"category_id\":\"3\",\"delivery_menu_id\":\"1\",\"parent_id\":\"0\",\"price\":\"10\",\"quantity\":\"69\",\"img\":\"\\/files\\/big1.jpg\",\"discount\":\"1\",\"available_from\":\"2016-06-07\",\"available_to\":\"2018-06-07\",\"description_en\":\"falafil\",\"description_ar\":\"\\u0641\\u0644\\u0627\\u0641\\u0644\",\"status\":\"0\"}', '2017-07-02 09:30:18', '2017-07-02 09:30:18');

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
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`, `order`, `status`, `type`, `available_from`, `available_to`, `created_at`, `updated_at`) VALUES
(1, '/files/17270_23927banner-bg.jpg', 1, 0, 0, '2017-06-25', '2020-07-31', '2017-06-06 14:36:56', '2017-06-30 23:08:33'),
(2, '/files/banner-bg2.jpg', 2, 0, 0, '2017-06-26', '2020-08-02', '2017-06-06 14:39:08', '2017-06-30 23:08:55'),
(3, '/files/banner-bg3.jpg', 3, 0, 0, '2017-06-27', '2020-07-31', '2017-06-06 14:51:28', '2017-06-30 23:09:48'),
(4, '/files/17350_24455res1.jpg', 4, 0, 1, '2017-06-30', '2020-06-17', '2017-06-30 23:03:57', '2017-06-30 23:28:20'),
(5, '/files/2image.jpg', 5, 0, 1, '2017-06-30', '2019-06-30', '2017-06-30 23:58:22', '2017-06-30 23:59:08'),
(6, '/files/add-3.jpg', 6, 0, 1, '2017-06-30', '2019-06-30', '2017-06-30 23:58:47', '2017-06-30 23:59:21');

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
(4, 82, 'kh', '/files/blog/16088_16945506_13227res2.jpg', 'kjk', '2017-07-02 09:18:00', '2017-07-02 09:18:00');

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
(13, 'kdf', 'kljl', 'lskjdf@lkj.sd', '9697', 'sdf', '/files/cv/31109_29658balloon.docx', '2017-06-20 14:28:49', '2017-06-20 14:28:49');

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
(5, 13, 4, 3, 1, '2', 12, '12', '32', 'dfsdg', 2, '2017-06-03 16:13:10', '2017-06-03 16:13:10'),
(6, 94, 4, 3, 7, NULL, 1, '13', NULL, '', 2, '2017-06-03 18:19:54', '2017-06-03 18:19:54'),
(7, 95, 4, 3, 8, NULL, 1, '13', NULL, '', 0, '2017-06-03 20:41:35', '2017-06-03 20:41:35'),
(9, 96, 4, 3, 10, NULL, 1, '13', NULL, '', 2, '2017-06-06 13:57:26', '2017-06-06 13:57:26'),
(10, 97, 4, 3, 11, NULL, 1, '13', NULL, '', 2, '2017-06-07 12:39:51', '2017-06-07 12:39:51'),
(11, 98, 4, 3, 12, NULL, 1, '13', NULL, '', 2, '2017-06-07 13:04:00', '2017-06-07 13:04:00'),
(12, 99, 4, 3, 13, NULL, 1, '13', NULL, '', 2, '2017-06-07 13:05:27', '2017-06-07 13:05:27'),
(14, 82, 8, 4, 15, NULL, 2, '375', NULL, '', 2, '2017-06-07 19:51:25', '2017-06-07 19:51:25'),
(20, 82, 6, 8, 20, NULL, 2, '3.45', NULL, '', 2, '2017-06-07 21:28:41', '2017-06-07 21:32:34'),
(21, 82, 6, 7, 20, NULL, 4, '2.550', NULL, '', 2, '2017-06-07 21:33:24', '2017-06-20 21:29:12'),
(22, 82, 6, 11, 20, NULL, 1, '5', NULL, '', 2, '2017-06-07 21:35:42', '2017-06-07 21:35:42'),
(24, 100, 4, 3, 22, NULL, 1, '13', NULL, '', 2, '2017-06-08 09:34:31', '2017-06-08 09:34:31'),
(26, 101, 8, 4, 24, NULL, 1, '375', NULL, '', 2, '2017-06-11 09:41:14', '2017-06-11 09:41:14'),
(27, 102, 8, 4, 25, NULL, 1, '375', NULL, '', 2, '2017-06-11 10:58:45', '2017-06-11 10:58:45'),
(28, 103, 7, 10, 26, NULL, 1, '4', NULL, '', 2, '2017-06-11 13:41:58', '2017-06-11 13:41:58'),
(30, 82, 8, 4, 28, NULL, 1, '375', NULL, '', 2, '2017-06-13 17:29:07', '2017-06-13 17:29:07'),
(31, 104, 6, 7, 29, NULL, 1, '2.550', NULL, '', 2, '2017-06-15 09:45:36', '2017-06-15 09:45:36'),
(32, 104, 7, 10, 30, '1', 6, '4', '0', '1', 2, '2017-06-15 09:47:31', '2017-06-17 11:13:57'),
(54, 82, 3, 5, 31, NULL, 1, '12', NULL, '', 6, '2017-06-17 22:45:04', '2017-07-02 05:07:46'),
(56, 82, 3, 5, 31, NULL, 1, '20', NULL, '', 5, '2017-06-18 11:03:07', '2017-07-02 05:07:57'),
(57, 108, 3, 5, 32, NULL, 5, '12', NULL, 'request', 6, '2017-06-21 11:50:28', '2017-06-21 11:51:07'),
(58, 108, 3, 5, 32, NULL, 1, '20', NULL, '', 5, '2017-06-21 11:51:17', '2017-06-21 11:51:17'),
(59, 82, 6, 7, 33, NULL, 4, '9', NULL, '', 4, '2017-06-21 18:08:59', '2017-06-23 20:58:12'),
(60, 82, 6, 7, 33, NULL, 4, '9', NULL, '', 4, '2017-06-26 19:47:45', '2017-06-26 19:47:45'),
(67, 82, 6, 7, 47, NULL, 4, '9', NULL, '', 4, '2017-06-28 13:44:10', '2017-06-28 13:44:10'),
(68, 82, 6, 7, 47, NULL, 4, '9', NULL, '', 4, '2017-06-28 13:44:10', '2017-06-28 13:44:10'),
(69, 82, 6, 7, 48, NULL, 1, '9', NULL, '', 4, '2017-06-28 15:08:26', '2017-06-29 05:59:04'),
(70, 82, 6, 7, 48, NULL, 4, '9', NULL, '', 4, '2017-06-28 15:08:26', '2017-06-28 15:08:26'),
(71, 82, 7, 10, 23, NULL, 1, '88', NULL, '', 0, '2017-06-28 15:20:21', '2017-06-28 15:20:21'),
(72, 82, 6, 7, 53, NULL, 4, '9', NULL, '', 4, '2017-06-29 06:11:25', '2017-06-29 06:11:25'),
(73, 82, 6, 7, 53, NULL, 4, '9', NULL, '', 4, '2017-06-29 06:11:25', '2017-06-29 06:11:25'),
(74, 82, 6, 7, 54, NULL, 4, '9', NULL, '', 4, '2017-06-29 06:15:46', '2017-06-29 06:15:46'),
(75, 82, 6, 7, 54, NULL, 4, '9', NULL, '', 4, '2017-06-29 06:15:46', '2017-06-29 06:15:46'),
(76, 82, 6, 7, 55, NULL, 4, '9', NULL, '', 4, '2017-07-01 16:20:04', '2017-07-01 16:20:04'),
(77, 82, 6, 7, 55, NULL, 4, '9', NULL, '', 4, '2017-07-01 16:20:04', '2017-07-01 16:20:04'),
(78, 82, 3, 5, 56, NULL, 12, '12', NULL, '', 6, '2017-07-02 05:08:07', '2017-07-02 12:02:33'),
(79, 82, 3, 5, 56, NULL, 8, '20', NULL, '', 5, '2017-07-02 05:08:07', '2017-07-02 11:43:53'),
(80, 82, 3, 5, 57, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:08:32', '2017-07-02 05:08:32'),
(81, 82, 3, 5, 57, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:08:32', '2017-07-02 05:08:32'),
(82, 82, 3, 5, 58, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:08:53', '2017-07-02 05:08:53'),
(83, 82, 3, 5, 58, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:08:53', '2017-07-02 05:08:53'),
(84, 82, 3, 5, 59, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:09:18', '2017-07-02 05:09:18'),
(85, 82, 3, 5, 59, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:09:18', '2017-07-02 05:09:18'),
(86, 82, 3, 5, 60, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:09:25', '2017-07-02 05:09:25'),
(87, 82, 3, 5, 60, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:09:25', '2017-07-02 05:09:25'),
(88, 82, 3, 5, 61, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:19:13', '2017-07-02 05:19:13'),
(89, 82, 3, 5, 61, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:19:13', '2017-07-02 05:19:13'),
(90, 82, 3, 5, 62, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:21:33', '2017-07-02 05:21:33'),
(91, 82, 3, 5, 62, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:21:33', '2017-07-02 05:21:33'),
(92, 82, 3, 5, 63, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:21:54', '2017-07-02 05:21:54'),
(93, 82, 3, 5, 63, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:21:54', '2017-07-02 05:21:54'),
(94, 82, 3, 5, 64, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:22:06', '2017-07-02 05:22:06'),
(95, 82, 3, 5, 64, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:22:06', '2017-07-02 05:22:06'),
(96, 82, 3, 5, 65, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:22:29', '2017-07-02 05:22:29'),
(97, 82, 3, 5, 65, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:22:29', '2017-07-02 05:22:29'),
(98, 82, 3, 5, 66, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:32:29', '2017-07-02 05:32:29'),
(99, 82, 3, 5, 66, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:32:29', '2017-07-02 05:32:29'),
(100, 82, 3, 5, 67, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:36:13', '2017-07-02 05:36:13'),
(101, 82, 3, 5, 67, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:36:13', '2017-07-02 05:36:13'),
(102, 82, 3, 5, 68, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:36:34', '2017-07-02 05:36:34'),
(103, 82, 3, 5, 68, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:36:34', '2017-07-02 05:36:34'),
(104, 82, 3, 5, 69, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:47:04', '2017-07-02 05:47:04'),
(105, 82, 3, 5, 69, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:47:04', '2017-07-02 05:47:04'),
(106, 82, 3, 5, 70, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:47:20', '2017-07-02 05:47:20'),
(107, 82, 3, 5, 70, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:47:20', '2017-07-02 05:47:20'),
(108, 82, 3, 5, 71, NULL, 1, '12', NULL, '', 6, '2017-07-02 05:47:45', '2017-07-02 05:47:45'),
(109, 82, 3, 5, 71, NULL, 1, '20', NULL, '', 5, '2017-07-02 05:47:45', '2017-07-02 05:47:45'),
(110, 82, 3, 5, 72, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:08:57', '2017-07-02 06:08:57'),
(111, 82, 3, 5, 72, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:08:57', '2017-07-02 06:08:57'),
(112, 82, 3, 5, 73, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:11:08', '2017-07-02 06:11:08'),
(113, 82, 3, 5, 73, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:11:08', '2017-07-02 06:11:08'),
(114, 82, 3, 5, 74, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:11:36', '2017-07-02 06:11:36'),
(115, 82, 3, 5, 74, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:11:36', '2017-07-02 06:11:36'),
(116, 82, 3, 5, 75, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:13:06', '2017-07-02 06:13:06'),
(117, 82, 3, 5, 75, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:13:06', '2017-07-02 06:13:06'),
(118, 82, 3, 5, 76, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:25:27', '2017-07-02 06:25:27'),
(119, 82, 3, 5, 76, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:25:27', '2017-07-02 06:25:27'),
(120, 82, 3, 5, 77, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:44:43', '2017-07-02 06:44:43'),
(121, 82, 3, 5, 77, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:44:43', '2017-07-02 06:44:43'),
(122, 82, 3, 5, 78, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:45:11', '2017-07-02 06:45:11'),
(123, 82, 3, 5, 78, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:45:11', '2017-07-02 06:45:11'),
(124, 82, 3, 5, 79, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:45:47', '2017-07-02 06:45:47'),
(125, 82, 3, 5, 79, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:45:47', '2017-07-02 06:45:47'),
(126, 82, 3, 5, 80, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:47:15', '2017-07-02 06:47:15'),
(127, 82, 3, 5, 80, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:47:15', '2017-07-02 06:47:15'),
(128, 82, 3, 5, 81, NULL, 1, '12', NULL, '', 6, '2017-07-02 06:52:13', '2017-07-02 06:52:13'),
(129, 82, 3, 5, 81, NULL, 1, '20', NULL, '', 5, '2017-07-02 06:52:13', '2017-07-02 06:52:13'),
(130, 82, 3, 5, 82, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:24:38', '2017-07-02 08:24:38'),
(131, 82, 3, 5, 82, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:24:38', '2017-07-02 08:24:38'),
(132, 82, 3, 5, 83, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:25:27', '2017-07-02 08:25:27'),
(133, 82, 3, 5, 83, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:25:27', '2017-07-02 08:25:27'),
(134, 82, 3, 5, 84, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:31:14', '2017-07-02 08:31:14'),
(135, 82, 3, 5, 84, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:31:14', '2017-07-02 08:31:14'),
(136, 82, 3, 5, 85, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:34:45', '2017-07-02 08:34:45'),
(137, 82, 3, 5, 85, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:34:45', '2017-07-02 08:34:45'),
(138, 82, 3, 5, 86, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:34:50', '2017-07-02 08:34:50'),
(139, 82, 3, 5, 86, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:34:50', '2017-07-02 08:34:50'),
(140, 82, 3, 5, 87, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:35:48', '2017-07-02 08:35:48'),
(141, 82, 3, 5, 87, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:35:48', '2017-07-02 08:35:48'),
(142, 82, 3, 5, 88, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:41:55', '2017-07-02 08:41:55'),
(143, 82, 3, 5, 88, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:41:55', '2017-07-02 08:41:55'),
(144, 82, 3, 5, 89, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:52:07', '2017-07-02 08:52:07'),
(145, 82, 3, 5, 89, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:52:07', '2017-07-02 08:52:07'),
(146, 82, 3, 5, 90, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(147, 82, 3, 5, 90, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(148, 82, 3, 5, 91, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(149, 82, 3, 5, 91, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(150, 82, 3, 5, 92, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(151, 82, 3, 5, 92, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(152, 82, 3, 5, 93, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(153, 82, 3, 5, 93, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(154, 82, 3, 5, 94, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(155, 82, 3, 5, 94, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(156, 82, 3, 5, 95, NULL, 1, '12', NULL, '', 6, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(157, 82, 3, 5, 95, NULL, 1, '20', NULL, '', 5, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(158, 82, 3, 5, 96, NULL, 1, '12', NULL, '', 6, '2017-07-02 09:01:17', '2017-07-02 09:01:17'),
(159, 82, 3, 5, 96, NULL, 1, '20', NULL, '', 5, '2017-07-02 09:01:17', '2017-07-02 09:01:17'),
(160, 82, 3, 5, 97, NULL, 6, '12', NULL, '', 6, '2017-07-02 11:29:20', '2017-07-02 11:29:20'),
(161, 82, 3, 5, 97, NULL, 2, '20', NULL, '', 5, '2017-07-02 11:29:20', '2017-07-02 11:29:20'),
(162, 82, 3, 5, 98, NULL, 8, '12', NULL, '', 6, '2017-07-02 11:36:04', '2017-07-02 11:36:04'),
(163, 82, 3, 5, 98, NULL, 6, '20', NULL, '', 5, '2017-07-02 11:36:04', '2017-07-02 11:36:04'),
(164, 82, 3, 5, 99, NULL, 8, '12', NULL, '', 6, '2017-07-02 11:37:39', '2017-07-02 11:37:39'),
(165, 82, 3, 5, 99, NULL, 7, '20', NULL, '', 5, '2017-07-02 11:37:39', '2017-07-02 11:37:39'),
(166, 82, 3, 5, 100, NULL, 8, '12', NULL, '', 6, '2017-07-02 11:43:56', '2017-07-02 11:43:56'),
(167, 82, 3, 5, 100, NULL, 8, '20', NULL, '', 5, '2017-07-02 11:43:56', '2017-07-02 11:43:56'),
(168, 82, 3, 5, 101, NULL, 8, '12', NULL, '', 6, '2017-07-02 11:49:18', '2017-07-02 11:49:18'),
(169, 82, 3, 5, 101, NULL, 8, '20', NULL, '', 5, '2017-07-02 11:49:18', '2017-07-02 11:49:18'),
(170, 82, 3, 5, 102, NULL, 8, '12', NULL, '', 6, '2017-07-02 11:54:12', '2017-07-02 11:54:12'),
(171, 82, 3, 5, 102, NULL, 8, '20', NULL, '', 5, '2017-07-02 11:54:12', '2017-07-02 11:54:12'),
(172, 82, 3, 5, 103, NULL, 1, '12', NULL, '', 6, '2017-07-02 11:56:13', '2017-07-02 11:56:13'),
(173, 82, 3, 5, 103, NULL, 1, '20', NULL, '', 5, '2017-07-02 11:56:13', '2017-07-02 11:56:13'),
(174, 82, 3, 5, 104, NULL, 1, '12', NULL, '', 6, '2017-07-02 12:02:34', '2017-07-02 12:02:34'),
(175, 82, 3, 5, 104, NULL, 1, '20', NULL, '', 5, '2017-07-02 12:02:34', '2017-07-02 12:02:34'),
(176, 82, 6, 8, 33, NULL, 1, 'jij', NULL, '', 1, '2017-07-02 12:11:33', '2017-07-02 12:11:33');

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
(4, 'asdf', 'sdf@kljf.sdf', '234587', 0, '9', '2017-06-20', '08:30', 'sdf', 'sfda\r\n', 3, '2017-06-29 10:10:39', '2017-06-29 10:10:39');

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
(4, 'thank', 'شكرا ', 'thank', '<div style=\"display:block;text-align:center;clear:both;padding:200px 0px;\"><h1>Thank You ......<a href=\'/\'>SAHALAT</a> </h1></div>', '<div style=\"display:block;text-align:center;clear:both;padding:200px 0px;\"><h1>شكرا لك ......<a href=\'/\'>سهلات</a> </h1></div>', '2017-06-14 00:12:09', '2017-06-14 00:18:00'),
(5, 'faq', 'faq', 'faq', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Frequently Asked Questions (FAQ)</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  What is Cofe District?\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				 How to create an account? \r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>\r\n				\r\n				\r\n				<ul>\r\n					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one.</li>\r\n					\r\n					<li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</li>\r\n					\r\n					<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College</li>\r\n		\r\n					\r\n				</ul>\r\n\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Frequently Asked Questions (FAQ)</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  What is Cofe District?\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				 How to create an account? \r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>\r\n				\r\n				\r\n				<ul>\r\n					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one.</li>\r\n					\r\n					<li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</li>\r\n					\r\n					<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</li>\r\n					\r\n					<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College</li>\r\n		\r\n					\r\n				</ul>\r\n\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n', '2017-06-20 21:10:10', '2017-06-20 21:10:10'),
(6, 'terms', 'terms', 'terms', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Terms & Conditions</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  Cancellation\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				  Order \r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n\r\n	', '\r\n	<!--inner area-->\r\n	<section class=\"inner-wrapper\">\r\n	\r\n	<div class=\"caption-sec\">\r\n	<h1>Terms & Conditions</h1>		\r\n	</div>\r\n	\r\n	<div class=\"inner-content\">\r\n	<div class=\"accordian_example full-width\">\r\n		<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">\r\n			  <h4 class=\"panel-title\">\r\n				<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">\r\n				  Cancellation\r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">\r\n			  <div class=\"panel-body\">\r\n				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>\r\n				\r\n				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n				\r\n				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  <div class=\"panel panel-default\">\r\n			<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">\r\n			  <h4 class=\"panel-title\">\r\n				<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">\r\n				  Order \r\n				</a>\r\n			  </h4>\r\n			</div>\r\n			<div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">\r\n			  <div class=\"panel-body\">\r\n				<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.</p>\r\n				\r\n				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n				\r\n				\r\n				\r\n				\r\n				\r\n			  </div>\r\n			</div>\r\n		  </div>\r\n		  \r\n		</div>\r\n		</div><!-- /.accordian_example -->\r\n	</div>\r\n\r\n\r\n	</section>\r\n	<!--inner area-->\r\n\r\n	', '2017-06-20 21:13:37', '2017-06-20 21:13:37');

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
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `users_id`, `email`, `phone`, `comments`, `created_at`, `updated_at`) VALUES
(1, 0, 'kijhiho@gfg.jh', '7676', 'gf', '2017-06-02 16:25:18', '2017-06-02 16:25:18'),
(2, 0, 'kijhiho@gfg.jh', '7676', 'gf', '2017-06-02 16:26:32', '2017-06-02 16:26:32'),
(3, 0, 'skdf@Oho.df', '7657', 'iuhiu', '2017-06-02 16:27:15', '2017-06-02 16:27:15'),
(4, 0, 'dfsd@kjd.sdf', '234234', 'sdf', '2017-06-02 16:27:54', '2017-06-02 16:27:54');

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
(1, '  Gift Card', ' Gift Card', '10', '/files/big1.jpg', 'Discount 10% on Total Bill', 'Discount 10% on Total Bill', 0, '10', '2017-07-01 20:00:43', '2017-06-20 21:41:32');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gift_card_users`
--

INSERT INTO `gift_card_users` (`id`, `sender_id`, `users_id`, `gift_card_id`, `price`, `balance`, `hash`, `status`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 0, 82, 1, '10', 10, '00163fbf1d55770f5c8bd6bb266194bb33f0942c26e8cc845b72c457b9fdfbf6', 0, 1, '2017-07-01 19:59:19', '2017-07-01 16:58:28'),
(2, 0, 82, 1, '10', 10, 'bf27695359d53d01a35f20c36726e1051fe62f63c3f4b1885451a40714f47e25', 0, 1, '2017-07-01 19:59:22', '2017-07-01 16:58:55'),
(3, 0, 82, 1, '10', 10, '4cb9228d5bdcbc9936b26db17039fd3b338834403d6176fcb6d5d151785a4f84', 1, 1, '2017-07-01 19:39:13', '2017-07-01 16:39:13'),
(4, 0, 82, 1, '10', 10, 'd11447ea45af1a13b467d8cb5a862976e349b0965069ab6ba89816b35724f042', 1, 1, '2017-07-01 19:40:07', '2017-07-01 16:40:07'),
(9, 82, 82, 1, '10', 10, '03c7bce36a0d23eb0c89121e0bc481fa0e019040cd3cbb1fadecc6dbbb844f2e', 2, 1, '2017-07-01 16:39:13', '2017-07-01 16:39:13'),
(10, 82, 15, 1, '10', 10, '150c6440d12db36bda181e47bcf923d16f9d669de7f197282b33a988f4c61519', 2, 1, '2017-07-01 16:40:07', '2017-07-01 16:40:07'),
(11, 0, 82, 1, '10', 10, '583bcf753e9b9701273d5342d6e43afee6395e5b618dd3b9363eae639b1f17fe', 2, 1, '2017-07-02 12:03:59', '2017-07-02 09:03:59'),
(12, 0, 82, 1, '10', 10, '72090619a4336b62862e09b908787edcf1dac42e5f20bc60a1676667fb306db7', 0, 1, '2017-07-02 09:03:19', '2017-07-02 09:03:19'),
(13, 0, 82, 1, '10', 10, 'ed3906266dd8e521499d18c60666a2b8dbd0b2bd7f0c525c2422ac94e684c3e4', 1, 1, '2017-07-02 12:03:48', '2017-07-02 09:03:48'),
(14, 82, 13, 1, '10', 10, '51342f103a8071f007e5f471b9e62d417665d6e013487b5e39dc98a0d9d8efd5', 0, 1, '2017-07-02 09:03:48', '2017-07-02 09:03:48');

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
(1, 'demo data', 'demo data', '/files/2image.jpg', 'demo data', 'demo data', 'demo data', '2017-06-20 11:23:07', '2017-06-20 11:23:07');

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
  `users_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `order_time` varchar(20) DEFAULT NULL,
  `deliver_time` varchar(20) DEFAULT NULL,
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
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `users_id`, `shop_id`, `area_id`, `from_id`, `address_id`, `order_time`, `deliver_time`, `expected_time`, `deliver_date`, `note`, `deliver_charge`, `deera_charge`, `extra_charge`, `sub_total`, `total`, `rate`, `point`, `parent_id`, `notification`, `status`, `created_at`, `updated_at`) VALUES
(1, 13, 4, 4, 1, 1, '1', '1', '', '1', 'sdfsd', '2', 0, 0, 0, 0, 2, 2, 0, 1, 4, '2017-05-19 19:42:56', '2017-06-03 16:11:30'),
(6, 13, 3, 5, NULL, 1, NULL, '16:09', '', '2017-06-03', 'sdf', '2', 2, 1, 33, 50, 2, 1, 0, 1, 3, '2017-06-03 16:10:19', '2017-06-07 18:29:37'),
(7, 94, 4, 0, NULL, 1, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-03 18:19:53', '2017-06-03 18:19:53'),
(8, 95, 4, 3, NULL, 1, NULL, '00:15', '', '2017-06-04', '', '2', 2, 0, 13, 16, NULL, NULL, 0, 1, 1, '2017-06-03 20:41:35', '2017-06-04 13:11:55'),
(9, 13, 4, 3, NULL, 0, NULL, '17:55', '', '2017-06-04', '', '2', 0, 0, 0, 0, 0, 0, 0, 1, 0, '2017-06-04 17:55:56', '2017-06-05 17:39:39'),
(10, 96, 4, 3, NULL, 1, NULL, '18:30', '', '', '', '2', 1, 0, 0, 0, 0, 0, 0, 0, 0, '2017-06-06 09:39:22', '2017-06-09 19:47:22'),
(11, 97, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 1, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-07 12:39:51', '2017-06-07 12:39:51'),
(12, 98, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-07 13:04:00', '2017-06-07 13:04:00'),
(13, 99, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-07 13:05:27', '2017-06-07 13:05:27'),
(15, 82, 8, 7, NULL, 19, NULL, '20:00', '16:37:00', '2017-06-08', '', '2', 1, 0, 750, 744.5, 0, 0, 0, 1, 3, '2017-06-07 19:51:25', '2017-06-10 18:24:44'),
(17, 82, 6, 4, NULL, 23, NULL, '08:15', '16:23:00', '2017-06-08', '', '2', 44, 0, 31.05, 2, 0, 0, 0, 0, 1, '2017-06-07 20:53:51', '2017-06-10 16:21:41'),
(18, 82, 7, 5, NULL, 26, NULL, '18:40', '16:31:00', '2017-06-08', '', '2', 1, 0, 20, 21.8, 0, 0, 0, 1, 2, '2017-06-07 21:14:37', '2017-06-10 22:43:56'),
(19, 82, 5, 3, NULL, 27, NULL, '21:40', '16:42:00', '2017-06-08', '', '2', 1, 0, 18, -580, 0, 0, 0, 1, 1, '2017-06-07 21:20:56', '2017-06-12 11:01:25'),
(20, 82, 6, 4, NULL, 23, NULL, '08:15', '16:23:00', '2017-06-08', '', '2', 1, 0, 14.45, 9.24, 0, 0, 0, 1, 1, '2017-06-07 21:28:29', '2017-06-10 16:21:34'),
(22, 100, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-08 09:34:31', '2017-06-08 09:34:31'),
(23, 82, 7, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-10 22:44:25', '2017-06-10 22:44:25'),
(24, 101, 8, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-11 09:41:14', '2017-06-11 09:41:14'),
(25, 102, 8, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-11 10:58:45', '2017-06-11 10:58:45'),
(26, 103, 7, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-11 13:41:58', '2017-06-11 13:41:58'),
(27, 82, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-13 08:16:03', '2017-06-13 08:16:03'),
(28, 82, 8, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-13 17:29:07', '2017-06-13 17:29:07'),
(29, 104, 6, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-15 09:45:36', '2017-06-15 09:45:36'),
(30, 104, 7, 5, NULL, 28, NULL, '10:06', '23:09:00', '2017-06-15', '', '2', 1, 0, 24, 24.76, NULL, NULL, 0, 1, 3, '2017-06-15 09:47:31', '2017-06-15 09:58:16'),
(31, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-02', NULL, '0', 7, 0, 224, -3976, NULL, NULL, 0, 0, 1, '2017-06-17 16:25:06', '2017-07-02 08:52:08'),
(32, 108, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-21 11:50:28', '2017-06-21 11:50:28'),
(33, 82, 6, 0, NULL, 0, NULL, NULL, '', NULL, 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-21 18:08:59', '2017-06-21 18:08:59'),
(43, 82, 6, 0, NULL, 0, NULL, '09:08', '', '2017-06-28', 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-26 19:47:23', '2017-06-26 19:47:23'),
(44, 82, 6, 0, NULL, 0, NULL, '09:08', '', '2017-06-28', 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-26 19:47:45', '2017-06-26 19:47:45'),
(45, 82, 6, 0, NULL, 0, NULL, '09:08', '', '2017-06-28', 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-26 19:47:58', '2017-06-26 19:47:58'),
(46, 82, 6, 0, NULL, 0, NULL, '09:08', '', '2017-06-28', 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-26 19:49:17', '2017-06-26 19:49:17'),
(47, 82, 6, 0, NULL, 0, NULL, NULL, '', NULL, 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-28 13:44:10', '2017-06-28 13:44:10'),
(48, 82, 6, 0, NULL, 0, NULL, NULL, '', NULL, 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-28 15:08:26', '2017-06-28 15:08:26'),
(49, 82, 7, 5, NULL, 26, NULL, '18:40', '16:31:00', '2017-06-08', '', '2', 1, 0, 20, 21.8, 0, 0, 0, 1, 2, '2017-06-28 15:20:22', '2017-06-28 15:20:22'),
(50, 82, 7, 5, NULL, 26, NULL, '18:40', '16:31:00', '2017-06-08', '', '2', 1, 0, 20, 21.8, 0, 0, 0, 1, 2, '2017-06-28 15:21:48', '2017-06-28 15:21:48'),
(51, 82, 7, 5, NULL, 26, NULL, '18:40', '16:31:00', '2017-06-08', '', '2', 1, 0, 20, 21.8, 0, 0, 0, 1, 2, '2017-06-28 15:21:56', '2017-06-28 15:21:56'),
(52, 82, 7, 5, NULL, 26, NULL, '18:40', '16:31:00', '2017-06-08', '', '2', 1, 0, 20, 21.8, 0, 0, 0, 1, 2, '2017-06-28 15:22:06', '2017-06-28 15:22:06'),
(53, 82, 6, 0, NULL, 0, NULL, NULL, '', NULL, 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, 1, 0, '2017-06-29 06:11:25', '2017-06-29 06:20:16'),
(54, 82, 6, 0, NULL, 0, NULL, NULL, '', NULL, 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-06-29 06:15:46', '2017-06-29 06:15:46'),
(55, 82, 6, 0, NULL, 0, NULL, NULL, '', NULL, 'fcervedfr', NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-01 16:20:04', '2017-07-01 16:20:04'),
(56, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:08:07', '2017-07-02 05:08:07'),
(57, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:08:32', '2017-07-02 05:08:32'),
(58, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:08:53', '2017-07-02 05:08:53'),
(59, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:09:18', '2017-07-02 05:09:18'),
(60, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:09:25', '2017-07-02 05:09:25'),
(61, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:19:13', '2017-07-02 05:19:13'),
(62, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:21:33', '2017-07-02 05:21:33'),
(63, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:21:54', '2017-07-02 05:21:54'),
(64, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:22:06', '2017-07-02 05:22:06'),
(65, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:22:29', '2017-07-02 05:22:29'),
(66, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:32:29', '2017-07-02 05:32:29'),
(67, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:36:13', '2017-07-02 05:36:13'),
(68, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:36:34', '2017-07-02 05:36:34'),
(69, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:47:04', '2017-07-02 05:47:04'),
(70, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:47:20', '2017-07-02 05:47:20'),
(71, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 05:47:45', '2017-07-02 05:47:45'),
(72, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:08:57', '2017-07-02 06:08:57'),
(73, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:11:08', '2017-07-02 06:11:08'),
(74, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:11:36', '2017-07-02 06:11:36'),
(75, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:13:06', '2017-07-02 06:13:06'),
(76, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:25:27', '2017-07-02 06:25:27'),
(77, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:44:43', '2017-07-02 06:44:43'),
(78, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:45:10', '2017-07-02 06:45:10'),
(79, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:45:47', '2017-07-02 06:45:47'),
(80, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:47:15', '2017-07-02 06:47:15'),
(81, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 06:52:13', '2017-07-02 06:52:13'),
(82, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 08:24:38', '2017-07-02 08:24:38'),
(83, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 08:25:27', '2017-07-02 08:25:27'),
(84, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 08:31:14', '2017-07-02 08:31:14'),
(85, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 08:34:45', '2017-07-02 08:34:45'),
(86, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 08:34:50', '2017-07-02 08:34:50'),
(87, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 08:35:48', '2017-07-02 08:35:48'),
(88, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 08:41:55', '2017-07-02 08:41:55'),
(89, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 08:52:07', '2017-07-02 08:52:07'),
(90, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-03', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 3, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(91, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 2, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(92, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-05', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(93, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-06', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(94, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-07', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(95, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-08', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 1, '2017-07-02 08:52:08', '2017-07-02 08:52:08'),
(96, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 2, '2017-07-02 09:01:17', '2017-07-02 09:01:17'),
(97, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 11:29:20', '2017-07-02 11:29:20'),
(98, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 11:36:04', '2017-07-02 11:36:04'),
(99, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 11:37:39', '2017-07-02 11:37:39'),
(100, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 11:43:56', '2017-07-02 11:43:56'),
(101, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 11:49:18', '2017-07-02 11:49:18'),
(102, 82, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, 0, '2017-07-02 11:54:12', '2017-07-02 11:54:12'),
(103, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 2, '2017-07-02 11:56:13', '2017-07-02 11:56:13'),
(104, 82, 3, 3, NULL, 27, NULL, '08:00', '', '2017-07-04', NULL, '0', 0, 0, 0, 0, NULL, NULL, 0, 0, 2, '2017-07-02 12:02:34', '2017-07-02 12:02:34');

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
(11, 82, 8, '35.8894614', '32.0054921', 0, NULL, 1, '2017-06-07 22:34:56', '2017-06-08 11:05:16'),
(15, 82, 1, '35.8746053', '31.9799521', 0, NULL, 0, '2017-06-10 12:36:40', '2017-06-10 12:36:40'),
(22, 82, 15, '35.8746053', '31.9799521', 0, NULL, 0, '2017-06-10 16:13:03', '2017-06-10 16:13:03'),
(24, 82, 20, '35.8746053', '31.9799521', 0, NULL, 0, '2017-06-10 16:17:18', '2017-06-10 16:17:18'),
(25, 82, 17, '35.8746053', '31.9799521', 0, NULL, 0, '2017-06-10 16:19:21', '2017-06-10 16:19:21'),
(26, 82, 19, '35.8746053', '31.9799521', 0, NULL, 1, '2017-06-10 16:19:37', '2017-06-12 19:53:46'),
(28, 82, 18, '35.8746053', '31.9799521', 0, NULL, 1, '2017-06-10 16:19:37', '2017-06-21 11:18:26'),
(29, 82, 30, '35.8746053', '31.9799521', 1, '', 1, '2017-06-15 09:58:16', '2017-06-15 10:00:05'),
(30, 82, 90, '35.8746053', '31.9799521', 1, '', 1, '2017-06-15 09:58:16', '2017-06-15 10:00:05'),
(31, 82, 91, '35.8746053', '31.9799521', 1, '', 1, '2017-06-15 09:58:16', '2017-06-15 10:00:05');

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
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `users_id`, `amount`, `status`, `type`, `notification`, `created_at`, `updated_at`) VALUES
(4, 8, 95, '16', 0, 0, 0, '2017-06-03 20:41:54', '2017-06-03 20:41:54'),
(6, 15, 82, '744.5', 2, 0, 1, '2017-06-07 20:13:01', '2017-07-01 21:09:57'),
(7, 17, 82, '2', 2, 0, 0, '2017-06-07 21:08:56', '2017-06-07 21:08:56'),
(8, 19, 82, '-580', 0, 0, 0, '2017-06-07 21:24:37', '2017-06-07 21:24:37'),
(9, 20, 82, '9.24', 0, 0, 0, '2017-06-07 21:36:24', '2017-06-07 21:36:24'),
(10, 18, 82, '21.8', 1, 0, 0, '2017-06-08 09:52:40', '2017-06-12 00:59:34'),
(11, 30, 104, '24.76', 0, 0, 0, '2017-06-15 09:51:38', '2017-06-15 09:51:38'),
(12, 31, 82, '-568', 0, NULL, 0, '2017-07-02 08:52:08', '2017-07-02 08:52:08');

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
(1075, 13, 'th0pq6RGYDs4FuexVtlSHOdnbLZKTTSn', '2017-06-08 07:14:59', '2017-06-08 07:14:59'),
(1076, 13, 'Dl9zrj0yMBzETGnCPbVNrpp3rvvdhXRc', '2017-06-08 07:16:12', '2017-06-08 07:16:12'),
(1090, 101, 'KgNGZv88oOHNY5lvLD1FKXpqhtfIImml', '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(1092, 102, 'Der5DP1caZAlOYHiqIM00ZDnA3cHwyvE', '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(1094, 103, 'MwO3lcIweJmTDRAkNGdy4rU5t4gYhufT', '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(1112, 104, 'g3OpvHz7V43aNp1yM4w5jlJ5tR1Wn21Q', '2017-06-15 06:45:36', '2017-06-15 06:45:36'),
(1128, 108, 'KIZpQpHfjyYhe9O95xyOiC3Mrzc1uZZl', '2017-06-21 08:50:28', '2017-06-21 08:50:28'),
(1136, 82, 'mNboPZBViu3oXxcWpqIZ9HTW8A2Ce3C0', '2017-07-02 09:33:43', '2017-07-02 09:33:43');

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
(9, 'driver', 'driver', '|dashboard.*.*.*|admin.delivery_menu.*.*|admin.order_driver.*.*|admin.order.*.*', '|*.*.otherData.*|*.*.allData.*|*.order.create.*', '2017-06-04 14:18:53', '2017-06-04 20:11:25'),
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
(108, 15, '2017-06-21 08:50:28', '2017-06-21 08:50:28');

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
(1, 13, 2, 1, 'jojo', 0, 0, '2017-06-02 15:40:06', '2017-06-02 15:40:06'),
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
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name_en`, `name_ar`, `Owner_first_name`, `Owner_last_name`, `email`, `available_payment`, `telephone`, `address_en`, `address_ar`, `description_en`, `description_ar`, `status`, `min_amount`, `working_hour_from`, `working_hour_to`, `deliver_time_from`, `deliver_time_to`, `deliver_charge`, `rating`, `show_menu`, `order_accept_days`, `offline_order`, `summary_en`, `summary_ar`, `url`, `img`, `commission_type`, `discount_type`, `discount`, `area_id`, `follow_us`, `notification`, `long`, `lat`, `created_at`, `updated_at`) VALUES
(3, 'landy', 'sfdj', 'landy', 'landy', 'landy@gmail.com', '', '0785181656', 'lkj', 'lj', 'lj', 'lk', 1, '30', '12:00', '19:35', '00:00', '18:30', '1', 0, 0, 900, 1, 'kj', 'lkj', 'www.cafcoffee.com', '/files/17350_24455res1.jpg', 0, 0, 'klj', 6, 0, 1, '35.9391932', '31.9466904', '2017-05-18 07:31:26', '2017-07-02 08:35:43'),
(4, 'Kozy Salon Urbain', 'ماك', 'taylor', 'successor', 'taylorsuccessor@gmail.com', 'knet,visa, cash ', '0785181656', 'address shop 1', 'عنوان 1', 'description shop 1', 'شرح المطعم 1', 1, '21.32', '08:00:00', '16:00:00', '09:00:00', '15:00:00', '2.5', 4, 1, 7, 1, 'summary shop 1', 'مختصر المطعم 1', 'www.cafcoffee.com', '/files/18952_9633res4.jpg', 1, 1, '10', 3, 0, 1, '35.9754138', '31.9897962', '2017-05-19 14:26:54', '2017-07-01 22:30:13'),
(5, 'Carette‬', 'بيتزا', 'owner name', 'yosif', 'yosit@pizza.com', 'knet,visa, cash ', '0785181656', '', 'عنوان بيتزا', '', 'بيتزا', 1, '10', '08:00', '23:55', '08:43', '16:43', '1', 0, 1, 3, 1, '', 'بيتزا', 'www.cafcoffee.com', '/files/1078_28471Pizza_Hut_logo.svg.png', 0, 0, '1', 3, 0, 0, '35.9089808', '31.9823706', '2017-06-07 17:52:09', '2017-07-01 22:32:56'),
(6, 'Starbucks', 'برقر', 'jon', 'land', 'jon@pros.com', 'knet,visa, cash ', '0096182783468', '', '', '', '', 1, '13', '05:25', '17:52', '08:00', '17:52', '1', 3, 1, 2, 1, '', '', 'www.cafcoffee.com', '/files/19620_18957res3.jpg', 0, 1, '1', 4, 0, 1, '35.8969645', '31.938096', '2017-06-07 17:57:06', '2017-07-01 22:28:14'),
(7, 'Johnny Rockets', 'Rockets', 'kali', 'jonson', 'kali@produ.com', '', '0785181656', '', '', '', '', 1, '12', '17:57', '17:57', '00:00', '22:50', '1', 0, 1, 4, 0, '', '', 'www.cafcoffee.com', '/files/11714_18387img_order1.jpg', 1, 1, '1', 5, 0, 1, '35.9074359', '31.9056047', '2017-06-07 18:04:54', '2017-06-07 21:16:58'),
(8, 'Cafe Francoeur', 'KFC', 'kfc', 'kfc', 'kfc@kfc.com', '', '0785181656', '', '', '', '', 1, '30', '10:50', '18:07', '10:50', '18:07', '1', 0, 1, 2, 1, '', '', 'www.cafcoffee.com', '/files/506_13227res2.jpg', 0, 1, '20', 7, 0, 1, '35.8988528', '31.9462535', '2017-06-07 18:11:01', '2017-07-01 22:31:27'),
(9, 'hkj', NULL, 'j', 'hj', 'kjh', NULL, 'jhkj', 'hk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.cafcoffee.com', NULL, NULL, NULL, NULL, 0, NULL, 1, '', '', '2017-06-14 00:49:44', '2017-06-15 23:46:31'),
(10, 'deera', 'deera', 'deera', 'deera', 'info@deera.com', 'deera', '346346', '', '', '', '', 0, '1', '13:34', '13:34', '13:34', '13:34', '1', 5, 0, 0, 0, '', '', 'www.cafcoffee.com', '/files/12050_14051logo.png', 0, 0, '0', 3, 0, 0, '', '', '2017-06-15 13:36:37', '2017-06-15 13:36:37'),
(12, 'e;djf', 'sdfsdf', 'j', 'hoih', 'oih', 'kl', 'oh', '', '', '', '', 0, 'ij', 'oijoi', 'ho', 'ho', 'h', 'ou', 0, 0, 0, 0, '', '', 'www.cafcoffee.com', 'ih', 0, 0, 'ho', 3, 0, 0, '', '', '2017-06-15 23:35:53', '2017-06-15 23:35:53'),
(13, 'kjoj', 'kjhh', 'lkjlkj', 'lkj', 'lkj', 'jh', 'lk', '', '', '', '', 0, 'kjh', 'kjh', 'kj', 'hk', 'jh', 'kjhkj', 0, 0, 0, 0, '', '', 'www.cafcoffee.com', 'jh', 0, 0, 'kj', 3, 0, 1, '36.139397621154785', '32.08908302965641', '2017-06-15 23:37:57', '2017-06-15 23:42:04'),
(14, 'kjkjkj', 'lknjlkjl', 'kmlk', 'lkmlk', 'mlkm', 'lkjl', 'lkm', '', 'kjlkj', '', 'lkj', 0, 'jl', 'kj', 'lkj', 'lkj', 'lk', 'jlk', 0, 0, 0, 0, '', 'lkj', 'www.cafcoffee.com', 'jlk', 0, 0, 'lkj', 3, 0, 0, '36.11081600189209', '32.083738118953725', '2017-06-15 23:39:57', '2017-06-15 23:39:57');

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

INSERT INTO `shop_area` (`id`, `area_id`, `shop_id`, `delivery_charges`, `deera_charge`, `min_amount`, `deliver_time_from`, `deliver_time_to`, `status`, `governorate_id`, `created_at`, `updated_at`) VALUES
(1, 4, 4, '12', '2', '13', '08:00:00', '16:00:00', 0, 3, '2017-05-26 22:20:50', '2017-05-26 22:20:50'),
(2, 3, 4, '3', '2', '100', '09:00', '14:00', 0, 3, '2017-05-29 10:54:29', '2017-05-29 11:10:37'),
(3, 3, 4, '4', '6', '90', '08:00:00', '16:00:00', 0, 3, '2017-05-30 08:41:58', '2017-05-30 08:41:58'),
(4, 3, 4, '1', '2', '12', '00:00', '18:00:00', 0, 3, '2017-06-02 11:17:16', '2017-06-02 11:17:16'),
(5, 3, 3, 'g', 'dg', 'f', '08:00', '18:00:00', 0, 3, '2017-06-15 23:19:10', '2017-06-15 23:19:10'),
(6, 3, 3, '1', '1', '1', '08:00', '18:00:00', 0, 3, '2017-06-22 19:50:34', '2017-06-22 19:50:34'),
(7, 3, 6, '1', '1', '1', '08:00', '18:00:00', 0, 3, '2017-06-22 19:51:38', '2017-06-22 19:51:38');

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
(4, 82, 6, 3, 'lksjdf', 0, 0, '2017-06-14 22:38:14', '2017-06-14 22:38:18');

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
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_users`
--

INSERT INTO `shop_users` (`id`, `users_id`, `shop_id`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 82, 10, 0, 4, '2017-05-19 14:40:20', '2017-06-15 14:01:17'),
(2, 13, 4, 0, 1, '2017-06-02 08:43:57', '2017-06-02 08:43:57');

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
(1, NULL, 'global', NULL, '2017-05-21 10:55:01', '2017-05-21 10:55:01'),
(2, NULL, 'ip', '192.168.100.11', '2017-05-21 10:55:01', '2017-05-21 10:55:01'),
(3, NULL, 'global', NULL, '2017-05-23 05:48:01', '2017-05-23 05:48:01'),
(4, NULL, 'ip', '192.168.100.11', '2017-05-23 05:48:01', '2017-05-23 05:48:01'),
(5, 92, 'user', NULL, '2017-05-23 05:48:01', '2017-05-23 05:48:01'),
(6, NULL, 'global', NULL, '2017-06-06 20:33:33', '2017-06-06 20:33:33'),
(7, NULL, 'ip', '::1', '2017-06-06 20:33:33', '2017-06-06 20:33:33'),
(8, 82, 'user', NULL, '2017-06-06 20:33:33', '2017-06-06 20:33:33'),
(9, NULL, 'global', NULL, '2017-06-06 20:44:27', '2017-06-06 20:44:27'),
(10, NULL, 'ip', '::1', '2017-06-06 20:44:27', '2017-06-06 20:44:27'),
(11, 82, 'user', NULL, '2017-06-06 20:44:27', '2017-06-06 20:44:27'),
(12, NULL, 'global', NULL, '2017-06-06 20:44:35', '2017-06-06 20:44:35'),
(13, NULL, 'ip', '::1', '2017-06-06 20:44:35', '2017-06-06 20:44:35'),
(14, 82, 'user', NULL, '2017-06-06 20:44:35', '2017-06-06 20:44:35'),
(15, NULL, 'global', NULL, '2017-06-06 20:44:44', '2017-06-06 20:44:44'),
(16, NULL, 'ip', '::1', '2017-06-06 20:44:44', '2017-06-06 20:44:44'),
(17, 82, 'user', NULL, '2017-06-06 20:44:44', '2017-06-06 20:44:44'),
(18, NULL, 'global', NULL, '2017-06-06 20:45:59', '2017-06-06 20:45:59'),
(19, NULL, 'ip', '::1', '2017-06-06 20:45:59', '2017-06-06 20:45:59'),
(20, 82, 'user', NULL, '2017-06-06 20:45:59', '2017-06-06 20:45:59'),
(21, NULL, 'global', NULL, '2017-06-07 14:42:53', '2017-06-07 14:42:53'),
(22, NULL, 'ip', '::1', '2017-06-07 14:42:53', '2017-06-07 14:42:53'),
(23, NULL, 'global', NULL, '2017-06-15 21:47:10', '2017-06-15 21:47:10'),
(24, NULL, 'ip', '::1', '2017-06-15 21:47:10', '2017-06-15 21:47:10'),
(25, NULL, 'global', NULL, '2017-06-15 21:48:48', '2017-06-15 21:48:48'),
(26, NULL, 'ip', '::1', '2017-06-15 21:48:48', '2017-06-15 21:48:48'),
(27, NULL, 'global', NULL, '2017-06-15 21:48:54', '2017-06-15 21:48:54'),
(28, NULL, 'ip', '::1', '2017-06-15 21:48:54', '2017-06-15 21:48:54'),
(29, NULL, 'global', NULL, '2017-06-19 06:36:46', '2017-06-19 06:36:46'),
(30, NULL, 'ip', '::1', '2017-06-19 06:36:46', '2017-06-19 06:36:46'),
(31, NULL, 'global', NULL, '2017-06-19 06:36:57', '2017-06-19 06:36:57'),
(32, NULL, 'ip', '::1', '2017-06-19 06:36:57', '2017-06-19 06:36:57'),
(33, NULL, 'global', NULL, '2017-06-20 06:31:24', '2017-06-20 06:31:24'),
(34, NULL, 'ip', '::1', '2017-06-20 06:31:24', '2017-06-20 06:31:24'),
(35, 82, 'user', NULL, '2017-06-20 06:31:24', '2017-06-20 06:31:24'),
(36, NULL, 'global', NULL, '2017-06-20 06:31:34', '2017-06-20 06:31:34'),
(37, NULL, 'ip', '::1', '2017-06-20 06:31:34', '2017-06-20 06:31:34'),
(38, 82, 'user', NULL, '2017-06-20 06:31:34', '2017-06-20 06:31:34'),
(39, NULL, 'global', NULL, '2017-06-20 06:34:10', '2017-06-20 06:34:10'),
(40, NULL, 'ip', '::1', '2017-06-20 06:34:10', '2017-06-20 06:34:10'),
(41, 82, 'user', NULL, '2017-06-20 06:34:10', '2017-06-20 06:34:10'),
(42, NULL, 'global', NULL, '2017-06-20 06:34:24', '2017-06-20 06:34:24'),
(43, NULL, 'ip', '::1', '2017-06-20 06:34:24', '2017-06-20 06:34:24'),
(44, 82, 'user', NULL, '2017-06-20 06:34:24', '2017-06-20 06:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `session_id` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `blogger` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `avatar`, `mobile`, `phone`, `gender`, `occupation`, `type`, `session_id`, `lat`, `long`, `blogger`, `created_at`, `updated_at`) VALUES
(13, 'driver@deera.com', '$2y$10$QMDdN.pWvXD81YyB0Aafm.MUTMebeH1i/LK4nVb2bv3E8AoqGirDS', NULL, '2017-06-08 07:16:12', 'first name', 'last name', NULL, '', '', 0, '0', 0, '', 31.95557172, 35.83669424, 2, '2016-05-01 13:01:21', '2017-06-08 07:16:12'),
(15, 'dispatcher@deera.com', '$2y$10$.YBEnmlyQ30lycw..YHOcuyZsFvvrFxEN7NiUW/Vm49LboErg1znC', NULL, '2017-06-08 06:57:15', NULL, ': admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:04:34', '2017-06-08 06:57:15'),
(16, 'shop@deera.com', '$2y$10$qVF5MuFwYsMZ4.73HaFk5.uCpKYkddFqIRRMg8dd7qLiNvLpOBvLe', NULL, '2017-06-08 06:26:31', 'shop', 'kfc', NULL, '', '', 0, '0', 0, '', 0, 0, 0, '2016-05-01 13:05:12', '2017-06-08 06:26:31'),
(17, 'admin@admin7.com', '$2y$10$6YDAKpvtDaQy.QcH1wdV3uOZueFCAAFqn8JeiZowDVL8hqwHW/eGK', NULL, NULL, ': admin firstName', ': admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:11:23', '2016-05-01 13:11:23'),
(18, 'admintest@admin.com', '$2y$10$F8E6o6rlUgxh9xd49aDI..DnnsGKZ..10uFxqSYJ109ck8H0.UyWS', NULL, '2016-05-01 13:22:35', 'adminTest', 'Test', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:12:22', '2016-05-01 13:22:35'),
(19, 'admin@admi.com', '$2y$10$bCnkSmJrDVQtYkCU2Rh30.21yqyw/M9WQ2J2CkIoSe/Yls6zddmSK', NULL, '2017-06-07 08:42:50', 'A first', 'b Second', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:14:07', '2017-06-07 08:42:50'),
(20, 'admin@admin9.com', '$2y$10$33PXn.qz2Ktm48z7xgziK.8scy0wu5IMZli0/QODg1k.ntaU0PzCi', NULL, '2016-05-01 13:18:01', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:17:20', '2016-05-01 13:18:01'),
(21, 'admin@admina.com', '$2y$10$Y3Ht/J9B5VozrTqmerM8veTjIiF0GEcegPHuRyB5c7l3RGnmyi1KG', NULL, '2016-05-01 13:23:05', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:22:34', '2016-05-01 13:23:05'),
(22, 'admin@adminb.com', '$2y$10$WNjXQg8y8abXr4lZItJxCueIR3qHJquO3MVExTM98zz9QTqXOsFKy', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:28:23', '2016-05-01 13:28:23'),
(23, 'admin@adminc.com', '$2y$10$KD4oByWVRd4VkcJhTHhBGOeBmDaRAE/DiyqF/XydG/BvOtQ.NlmM6', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:28:54', '2016-05-01 13:28:54'),
(24, 'admin@admind.com', '$2y$10$fCblwhGnZfN54Vukn4hPS.g5LpCzzg8hA.c8XNHokf7id2bqTyGlu', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:29:13', '2016-05-01 13:29:13'),
(25, 'ddd@ddd.ddd', '$2y$10$orGG6KvMrH4TO1agzzSmvupHecZgciUHbO2r6.gzrQeLZQaBEpdGK', NULL, '2016-05-01 13:33:53', 'asdf', 'sf', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:33:39', '2016-05-01 13:33:53'),
(26, 'admin@admine.com', '$2y$10$M.KIZXmo.0Ox/BwwkXnjteR8ck0uWIf0dewsRj01njcvnThiWx9s2', NULL, '2016-05-01 13:36:36', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:35:54', '2016-05-01 13:36:36'),
(27, 'admin@adminv.com', '$2y$10$/tp9OFQq2vbsf.63/JFY5eKKDSKkmlfIiFks7TNPaTD6eL52mvs.y', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:46:24', '2016-05-01 13:46:24'),
(28, 'admin@adminz.com', '$2y$10$z6RFdmsA.kdgpMujELpBouYMLl2/XiciDrdX1O4DkzylfMT/Zybje', NULL, '2016-05-01 13:47:29', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:46:55', '2016-05-01 13:47:29'),
(29, 'admin@adminx.com', '$2y$10$ozdl9T7dMl.W/G64tU1cNuFJk30xj7VfZtri26QQl/s1q.W16Gsy2', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:48:29', '2016-05-01 13:48:29'),
(30, 'admin@admink.com', '$2y$10$fPBKMa4PpH7cyb9Keby.EOU8B8Oe0hmXpwmGQLFR5EOvo1MUda57C', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:49:41', '2016-05-01 13:49:41'),
(31, 'admin@admint.com', '$2y$10$MUZSx0j9aOmMMVplFosSE.8lVQjIdGL2m6WEt.zuuy8HFq844TV.K', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:49:57', '2016-05-01 13:49:57'),
(33, 'admin@admintt.com', '$2y$10$TgyW12bN1zRrTLCVhOEN5.1pVKdCuMP2INgwGZ0wAF2uuiAGf4/DW', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:50:38', '2016-05-01 13:50:38'),
(34, 'admin@admintx.com', '$2y$10$SqwIYTitU.eUORVnneZnAO/uLXnveMMUvSKQvXH2PmLuoUNkWEu1S', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:50:47', '2016-05-01 13:50:47'),
(35, 'admin@adminthx.com', '$2y$10$KbTUhocfRRpr.TkQaBPEwu/NX0j/VLBltUyW.2QrhTCoCQ/SVkCjm', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:53:10', '2016-05-01 13:53:10'),
(36, 'admin@admjinthx.com', '$2y$10$EpscExd4AFgDqFo44FitLu7Qen.ViLsopDvs93CFqC./ccAAk4rTS', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:53:16', '2016-05-01 13:53:16'),
(37, 'admin@ajdmjinthx.com', '$2y$10$Hi.7Wj0bgELIKRrtUR8afeVRDvpXsKOJHSIYu3oir3YS9TE6SQwGW', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 13:53:24', '2016-05-01 13:53:24'),
(38, 'admin@ajdmjintfhx.com', '$2y$10$tpU.G8mawQvrLAEvPsEm/u3uXKfpsu0h3tVXvsv2UWLT9Vri7wC1.', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 14:02:28', '2016-05-01 14:02:28'),
(39, 'admin1@admin.com', '$2y$10$LWCNmqpRdS6PQA6Kq3VuOu7WIqKsSmQk6rgIGz.ICeTb8qvElTbmy', NULL, '2016-05-01 14:08:17', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 14:07:24', '2016-05-01 14:08:17'),
(40, 'admin3@admin.com', '$2y$10$Jrnm/CmeA9oT6MGbEvRk4OIwjsZ8XnIo2/aBYyJaVLamo.3.RY/42', NULL, '2016-05-01 14:11:17', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 14:10:48', '2016-05-01 14:11:17'),
(41, 'admin4@admin.com', '$2y$10$2HeUvzgoooi9tvSeEn3aRegPVXC4EnX4KYf0Ic8IDe/8WXSCjVZGu', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 14:14:07', '2016-05-01 14:14:07'),
(43, 'admin5@admin.com', '$2y$10$dTp2sKdyofdp4N.eS3scx.HRnSt6.cCkIdWysOAuDhKp5kI6SF2Ae', NULL, '2016-05-01 14:15:54', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 14:14:43', '2016-05-01 14:15:54'),
(44, 'admin6@admin.com', '$2y$10$zdBqpmXqpujNPalq6.W5meP0zIRuf/XYT1BkmuICJQHho1UO4BGPW', NULL, NULL, 'first', 'last', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-01 14:17:26', '2016-12-26 10:00:02'),
(64, 'abdalfattah.hammad@yahoo.com', '$2y$10$R6gGLALtsBIs7BWSkVzche5XURZ9k671XFbQ22g1Mrsmp.NW1YyGi', '', '2016-05-29 06:47:05', 'abdalfattah', 'hammad', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-24 08:38:45', '2016-05-29 06:47:05'),
(66, 'taylorsuccessor1@gmail.com', '$2y$10$FGuj819KqAmJNMIxi5qWne/qyvT8SpUhlrgGDJXkKjkYf597RgMby', '{\"user.denyLiveAccount\":true}', NULL, 'taylor', 'successor', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-25 13:05:11', '2016-05-25 13:05:16'),
(67, 'dfsa@ragf.com', '$2y$10$gMS96cK40k52LuVk7BDj2.lCjmrR.htpHH2jvZSw8Vsj/SEieeIoi', '{\"user.denyLiveAccount\":true}', NULL, 'weq', 'ewqrew', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-29 11:28:02', '2016-05-29 11:28:06'),
(68, 'sdaflh@dfs.com', '$2y$10$cE9o/HVrD0xKwQ435xf.o.FruuEBvkhtK9zzzO4wY.zAkiRRjeARG', '{\"user.denyLiveAccount\":true}', NULL, 'dfs', 'asfd', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-05-29 11:29:44', '2016-05-29 11:29:49'),
(70, 'taylorsuccessor2@gmail.com', '$2y$10$WOOk/daK6a37/0Z0vQStX.HmvuSJRF7jDQm3LBRPuLzKEECApIwTi', '{\"user.denyLiveAccount\":true}', NULL, 'sdf', 'sdfsdf', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-06-12 10:40:00', '2016-06-12 10:40:05'),
(71, 'taylorsuccessor3@gmail.com', '$2y$10$vEuPJ4u3ZzRIDaNwVTg.MObXT64Wjk840AF96e.EPbnY4nGR9H7Wq', '{\"user.denyLiveAccount\":true}', NULL, 'sdfs', 'dfgdfg', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-06-12 10:42:49', '2016-06-12 10:42:54'),
(72, 'taylorsuccessor4@gmail.com', '$2y$10$vyw6J2fgdFtchWsjQdV2EuhnEDmyfpX9p0Fb0SqH1LqgP6S0Uxxqu', '{\"user.denyLiveAccount\":true}', '2016-06-12 12:37:46', 'Test', '', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-06-12 12:37:46', '2016-06-12 12:37:52'),
(73, 'taylorsuccessor5@gmail.com', '$2y$10$aQ69hOigVigdEDLPIaJXO.KaXSkjVorqJv4hRNe1n.0cRhpF8hkT6', '{\"user.denyLiveAccount\":true}', '2016-06-12 12:46:28', 'Test', '', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-06-12 12:46:27', '2016-06-12 12:46:33'),
(74, 'taylorsuccessor6@gmail.com', '$2y$10$DOKqv/T4Hn6p6VCB496W8usXxtsdARnjMe/B6HsLCxcNWFmGvz9aq', '{\"user.denyLiveAccount\":true}', '2016-06-12 12:53:44', 'Test', '', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2016-06-12 12:53:44', '2016-06-12 12:53:49'),
(77, 'hbhuy', '$2y$10$SgJ2cJm/NXnCU0B.4/Ya3emRjKeBI77eHP7osCXYQfHdWNxvx7/kO', NULL, NULL, 'gfy', 'tyf', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-03-22 03:59:03', '2017-03-22 03:59:03'),
(78, 'vv', '$2y$10$g.bIACByPTjl.3GNq5TEm.XEdealK44IeAR8JSjcX4DZbXIshD7sm', NULL, NULL, 'vvvv', 'vvv', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-03-22 21:43:26', '2017-03-22 21:43:26'),
(79, 'test admin', '$2y$10$W4wwHxfeWRTX0N35zqpiru0tBjHGI6zLBsfaSmhGK3VWKoc3ieQ82', NULL, NULL, 'ffff', 'fffffff', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-03-22 21:54:59', '2017-03-22 21:54:59'),
(80, 'dfgsdfg', '$2y$10$vLQ5jLvll4mU0CA.6PNZM.qZzchaZ7BXdS03coY/SFEI2KlmqbUY.', NULL, NULL, 'dfgsdfg', 'gsdfg', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-03-22 21:55:47', '2017-03-22 21:55:47'),
(81, 'bbbbbbbbbb', '$2y$10$bBU./jpORO7jyZYlsNjeKubcu38Pv9PyDlYmQaHWaiL67Qvb5p7Fi', NULL, NULL, NULL, 'cvbcvb', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-03-22 21:58:12', '2017-03-22 21:58:12'),
(82, 'taylorsuccessor@gmail.com', '$2y$10$VI2Z6cx5.vXh7VkuSpFvq.9EJEb1nxKLhVOnrg4GpNJHMjZsuLvpO', NULL, '2017-07-02 09:33:43', 'taylor', 'successor', NULL, '11111111111', '222222222', 1, '1', 0, '', 31.9799521, 35.8746053, 1, '2017-05-20 12:18:06', '2017-07-02 09:33:43'),
(83, 'asfd@sdf.sdf', 'admin', NULL, NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', 0, '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'asfd@sddsf.sdf', 'admin', NULL, NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', 0, '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'asfd@sddddsf.sdf', 'admin', NULL, NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', 0, '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'asfad@sddddsf.sdf', 'admin', NULL, NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', 0, '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'asdf@sdf.sdf', 'admin', NULL, NULL, 'admin', 'adin', NULL, '234324', '234234', 0, '1', 0, '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'slkdfj@sdf.sdf', '$2y$10$sh.w238mR9.TxyQoQittrucX71gbfEhkdkCQRtLg2X6bBs8k1jPbK', NULL, '2017-05-23 02:46:15', 'aslkdfj', 'skldfj', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-05-22 09:22:12', '2017-05-23 02:46:15'),
(90, 'rrrrrrrrr@rrrrrrr.rrrr', '$2y$10$/048LG5QGvzXeBziesRQVOPGhJ6RjxAK4Ub461IQI0bRLbxPB2Kpy', NULL, NULL, 'rrrrrr', 'rrrrrr', NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-05-23 04:55:32', '2017-05-23 04:55:32'),
(91, 'rrrrrrrrrrrr@rrrrrrr.rrrr', 'admin', NULL, NULL, 'rrrrrr', 'rrrrrr', NULL, '34534345', '3534534', 0, '0', 0, '', 0, 0, 0, '2017-05-23 04:57:03', '2017-05-23 04:57:03'),
(92, 'rrrrrrrrr@rr.rrr', 'admin', NULL, NULL, 'rrrrrr', 'rrrrrr', NULL, '34534345', '3534534', 0, '0', 0, '', 0, 0, 0, '2017-05-23 04:58:10', '2017-05-23 04:58:10'),
(93, 'sdf@ddd.vdf', 'admin', NULL, NULL, 'sdf', 'sdf', NULL, '234', '24234', 0, '1', 0, '', 0, 0, 0, '2017-05-26 13:40:50', '2017-05-26 13:40:50'),
(94, 'gest_32126656_80530962@deera.com', '$2y$10$BqQVbnq.f.PTEV/Dw6h1UeQup3bsC6brkuXaSjCXY0B56Wd7uoL6G', NULL, '2017-06-03 15:19:33', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-03 15:19:33', '2017-06-03 15:19:33'),
(95, 'gest_16718495_21294603@deera.com', '$2y$10$6jHZpO5EgT/fMNx4Jxt5VOd/6FoBw2T3dALpLD89zes6bCl6yaLiG', NULL, '2017-06-03 17:41:35', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-03 17:41:35', '2017-06-03 17:41:35'),
(96, 'gest_83994293_69461111@deera.com', '$2y$10$q73d0BT8HrGuYv5QslFSuOoteAaRCeOK5jwdxGNi9IuORXKZD.98W', NULL, '2017-06-06 06:39:22', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-06 06:39:22', '2017-06-06 06:39:22'),
(97, 'guest_94801956_72110436@deera.com', '$2y$10$Tuh13OEUbg/X/juxuxD0BOl.SMIsvgSjsKjqKJObIDB/4evFBGs22', NULL, '2017-06-07 09:39:51', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(98, 'guest_94292822_40028902@deera.com', '$2y$10$/uWVVDqC9XxR9XxyM6YtG.ZdUV9EOV/QLMtcxys4T/KYK97.f7J1K', NULL, '2017-06-07 10:04:00', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(99, 'guest_69479403_62324090@deera.com', '$2y$10$Uub6FsOWsFqnvnLVmRl0t.slKv1flNmn4QTnwyyS174n9BVLJoDFS', NULL, '2017-06-07 10:05:27', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(100, 'guest_3947466_60632058@deera.com', '$2y$10$Y.Z5q6li7YHFT/U35kyfQ.RpnGiZgR3mle3B.0L.xwT8xH1Br/jHS', NULL, '2017-06-08 06:34:31', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(101, 'guest_55241945_30794371@deera.com', '$2y$10$.iN05pc9JxO8WnLOa8QAHuesRFE2yJQKkJCD1dbzhisRqgPsZkUjG', NULL, '2017-06-11 06:41:14', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(102, 'guest_80064510_92225799@deera.com', '$2y$10$4IMzi.XDk5waw.khf5SHRu/KbV/jWFZKS.XsN82nNYz3p1AV1pKsO', NULL, '2017-06-11 07:58:45', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(103, 'guest_81921172_5828517@deera.com', '$2y$10$M7F6Qnv44cKckQ0BV.3FMeCSVI3IgrbkzZ/U5yIszlu4IeXioMfga', NULL, '2017-06-11 10:41:58', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(104, 'guest_64000878_59882076@deera.com', '$2y$10$PL6xj51AWAGPaq2NTYTqvOAWFdmZc5iVf5owpqn0M7KF92H5z8Lvm', NULL, '2017-06-15 06:45:36', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-15 06:45:35', '2017-06-15 06:45:36'),
(105, 'klmkdc', '$2y$10$BmLvJuUY2dEqxEey4xfWyuQplEpxvPP8mLFpli4bJITylcfatNK0W', NULL, NULL, 'lkjo', 'ijoij', NULL, '', '', 0, '0', 0, '', 34.08906131584994, 38.14453125, 0, '2017-06-15 20:49:29', '2017-06-15 20:49:29'),
(106, 'thnth@dfg.jui', 'admin', NULL, NULL, 'dfgsh', 'rgfg', NULL, '', '4564567', 0, '', 0, '', 0, 0, 0, '2017-06-19 18:51:22', '2017-06-19 18:51:22'),
(107, 'ihi@iuh.df', 'admin', NULL, NULL, 'dfgedfjh', 'jih', NULL, '', '2453453', 0, '', 0, '', 0, 0, 0, '2017-06-19 18:54:44', '2017-06-19 18:54:44'),
(108, 'guest_76256677_65845345@deera.com', '$2y$10$.75altF0/UBKVfXUD34lVOkouFt5hPlk5RhJOdM9eWyojpfK3gIOi', NULL, '2017-06-21 08:50:28', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, 0, '2017-06-21 08:50:28', '2017-06-21 08:50:28');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `audit_track`
--
ALTER TABLE `audit_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gift_card_order`
--
ALTER TABLE `gift_card_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gift_card_users`
--
ALTER TABLE `gift_card_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `governorate`
--
ALTER TABLE `governorate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `order_driver`
--
ALTER TABLE `order_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `payment_way`
--
ALTER TABLE `payment_way`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1137;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shop_users`
--
ALTER TABLE `shop_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
