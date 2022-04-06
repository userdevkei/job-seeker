-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 04:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` date NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_applied` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_no` int(11) DEFAULT NULL,
  `contract` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `located` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `t_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `gender`, `location`, `age`, `availability`, `experience`, `contact`, `job_applied`, `created_at`, `updated_at`, `id_no`, `contract`, `located`, `hours`, `duties`, `salary`, `user_id`, `t_status`) VALUES
(7, 'Onesmus Mutie Kitili', 'Male', 'Nairobi', '24', '2021-09-22', '1 month', '+254729434393', 'Gardener', '2021-11-13 19:04:01', '2021-11-13 19:04:01', 23456788, '6 months', 'Westlands', '8am- 5pm', 'cleaning and taking care of my orchard', '700/day', 2, 1),
(8, 'Okello oduor', 'Male', 'Nairobi', '30', '2021-09-21', '1 month', '+254729434393', 'Cleaner', '2021-11-13 19:03:43', '2021-11-13 19:03:43', 23456788, '1 week', 'Nairobi CBD', '8am- 5pm', 'cleaning of the city to ensure that it is at per with the standards', '1500/day', 2, 1),
(9, 'Catherine kate', 'Female', 'Nairobi', '25', '2021-09-14', '3 year', '+254729434393', 'nanny', '2021-11-13 19:03:52', '2021-11-13 19:03:52', 23456788, '1 year', 'Nairobi', '3am-10pm', 'Taking care of kids, taking them to school, helping with homework, cooking and feeding them', '18000/month', 2, 1),
(11, 'mary John', 'Female', 'bureti', '37', '2021-09-08', '3 year', '+254729434393', 'House help', '2021-11-14 09:11:09', '2021-11-14 09:11:09', 23456788, '6 months', 'Kericho town', '6am-5pm', 'help me in nursing my new born baby', '18000/month', 4, 1),
(16, 'Obadiah Ouma Ochieng\'', 'Male', 'Kisumu', '35', '2021-11-18', '1 year', '+254729434393', 'Herdsman', '2021-11-14 09:13:07', '2021-11-14 09:13:07', 11111111, '6 months', 'bureti', '8am- 5pm', 'Build fast, responsive sites with Bootstrap\r\nQuickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.Build fast, responsive sites with Bootstrap\r\nQuickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.', '8000/month', 4, 0),
(17, 'Onesmus Mutie Kitili', 'Male', 'Kisumu', '24', '2021-11-24', '3years', '+254723456789', 'Sweeper', '2021-11-14 09:27:35', '2021-11-14 09:27:35', 23456788, '1 week', 'Kitui', '8am- 5pm', 'clean my new compound', '500/day', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancies` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_hours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_deadline` date NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duties` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `age` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_status` int(11) NOT NULL DEFAULT 0,
  `expiry` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_name`, `vacancies`, `gender`, `contract`, `location`, `work_hours`, `app_deadline`, `salary`, `duties`, `user_id`, `created_at`, `updated_at`, `by`, `deleted_at`, `status`, `age`, `u_status`, `expiry`) VALUES
(20, 'nanny', '5', 'Female', '1 year', 'Nairobi', '3am-10pm', '2022-02-11', '18000/month', 'Taking care of kids, taking them to school, helping with homework, cooking and feeding them', '2', '2021-09-05 13:21:51', '2022-02-23 05:49:19', 'onesmus kitili', NULL, 0, '26-35', 1, 0),
(21, 'Builder', '5', 'Male', '1 month', 'Juja', '8am- 5pm', '2022-03-10', '700/day', 'helping mansions with building a bugarlow house', '2', '2021-09-05 13:24:28', '2022-02-11 01:22:26', 'onesmus kitili', NULL, 0, '35-50', 1, 1),
(22, 'Cleaner', '50', 'Male/Female', '1 week', 'Nairobi CBD', '8am- 5pm', '2022-03-10', '1500/day', 'cleaning of the city to ensure that it is at per with the standards', '2', '2021-09-05 13:26:19', '2022-02-11 01:21:27', 'onesmus kitili', NULL, 0, '18-35', 1, 1),
(23, 'House girl', '50', 'Female', '6 months', 'Karen', '3am-10pm', '2022-02-22', '8000/month', 'help with the household chores', '2', '2021-09-05 13:27:49', '2022-02-23 05:49:19', 'onesmus kitili', NULL, 0, '26-35', 1, 0),
(24, 'Gardener', '3', 'Male/Female', '6 months', 'Westlands', '8am- 5pm', '2022-02-18', '700/day', 'cleaning and taking care of my orchard', '2', '2021-09-05 13:29:44', '2022-02-23 05:49:19', 'onesmus kitili', NULL, 0, '26-35', 1, 0),
(25, 'Teapickers', '45', 'Male/Female', '1 week', 'Kericho', '8am- 5pm', '2022-03-17', '700/day', 'Picking tea from the fields, packing it on lorries for transport', '4', '2021-09-05 13:48:59', '2022-02-11 01:25:17', 'Chella kip', NULL, 0, '18-45', 1, 1),
(26, 'Terrace maker', '5', 'Male', '1 week', 'bureti', '8am- 5pm', '2022-02-25', '1800/day', 'making terraces to control erosion', '4', '2021-09-05 13:50:31', '2022-02-27 00:30:08', 'Chella kip', NULL, 0, '35-50', 1, 0),
(27, 'House help', '1', 'Female', '6 months', 'Kericho town', '6am-5pm', '2022-02-18', '18000/month', 'help me in nursing my new born baby', '4', '2021-09-05 13:51:33', '2022-02-23 05:49:19', 'Chella kip', NULL, 1, '35-50', 1, 0),
(28, 'Coffee picker', '100', 'Male/Female', '1 week', 'bureti', '6am-5pm', '2022-02-11', '700/day', 'picking coffee from the firm', '4', '2021-09-05 13:52:36', '2022-02-23 05:49:19', 'Chella kip', NULL, 0, '18-45', 1, 0),
(29, 'Herdsman', '1', 'Male', '6 months', 'bureti', '8am- 5pm', '2022-02-12', '8000/month', 'Build fast, responsive sites with Bootstrap\r\nQuickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.Build fast, responsive sites with Bootstrap\r\nQuickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.', '4', '2021-09-05 13:53:35', '2022-02-23 05:49:19', 'Chella kip', NULL, 0, '24-40', 1, 0),
(31, 'shamba boy', '1', 'Male', '6 months', 'kabodo', '8am- 5pm', '2022-01-29', '15000/month', 'frequent weeding and spaying of crops in my firm', '5', '2021-09-05 13:56:49', '2022-02-11 01:18:46', 'Omondi otieno', NULL, 0, '26-35', 1, 0),
(32, 'Gardener', '2', 'Male', '3 months', 'homa bay', '8am- 5pm', '2022-01-29', '700/day', 'Help keep an eye on my orchard', '5', '2021-09-05 13:59:35', '2022-02-11 01:18:46', 'Omondi otieno', NULL, 1, '26-35', 1, 0),
(33, 'farmer', '1', 'Male', '1 week', 'kisumu', '6am-12noon', '2022-01-28', '1500/day', 'spraying my crops and cattle for pests and diseases', '5', '2021-09-05 14:01:17', '2022-02-11 01:18:46', 'Omondi otieno', NULL, 0, '35-50', 1, 0),
(34, 'Cultivator', '10', 'Male/Female', '1 week', 'homabay', '6am-12noon', '2022-01-14', '700/day', 'weeding for my shamba', '5', '2021-09-05 14:02:14', '2022-02-11 01:18:46', 'Omondi otieno', NULL, 0, '26-35', 1, 0),
(35, 'Fencer', '3', 'Male', '1 week', 'makueni', '8am- 5pm', '2021-09-14', '700/day', 'Teaching front-end web design and development using HTML, CSS and JS.\r\nTeaching back-end web development using PHP scripting and MySQL databases.\r\nFundamentals of computers and computer applications.\r\nOverseeing students’ practicals.', '7', '2021-09-11 10:54:19', '2021-11-13 18:09:55', 'Mutua Sam', NULL, 2, '26-35', 1, 0),
(36, 'Sweeper', '2', 'Male/Female', '1 week', 'Kitui', '8am- 5pm', '2022-02-24', '500/day', 'clean my new compound', '2', '2021-09-24 12:03:12', '2022-02-27 00:30:08', 'onesmus kitili', NULL, 0, '26-35', 1, 0),
(37, 'Gardener', '5', 'Male/Female', '1 week', 'Kitui', '6am-5pm', '2021-11-17', '700/day', 'xyz', '8', '2021-11-08 11:41:05', '2021-11-23 09:00:17', 'kennedy musau', NULL, 0, '24-40', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `managewebs`
--

CREATE TABLE `managewebs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `subject`, `status`) VALUES
(23, 'user one', 'eldhhacker4@bedul.net', 'Background colors\r\nUse our background utility classes to quickly change the appearance of a badge. Please note that when using Bootstrap’s default .bg-light, you’ll likely need a text color utility like .text-dark for proper styling. This is because background utilities do not set anything but background-color.', '2021-11-13 15:30:13', '2021-11-14 11:01:40', 'Password reset', 1),
(24, 'user two', 'kkamel3902@dyoeii.com', 'Background colors\r\nUse our background utility classes to quickly change the appearance of a badge. Please note that when using Bootstrap’s default .bg-light, you’ll likely need a text color utility like .text-dark for proper styling. This is because background utilities do not set anything but background-color.', '2021-11-13 15:31:04', '2021-11-14 11:20:39', 'Cant reset my password', 1),
(25, 'User three', 'kkamel3902@dyoeii.com', 'BREAKING NEWS 🚨\r\n\r\nJoel and Avram Glazer has just announced that they are selling Manchester United to the highest bidder due to the breathtaking protest that happend outside Old Trafford yesterday.BREAKING NEWS 🚨\r\n\r\nJoel and Avram Glazer has just announced that they are selling Manchester United to the highest bidder due to the breathtaking protest that happend outside Old Trafford yesterday.BREAKING NEWS 🚨\r\n\r\nJoel and Avram Glazer has just announced that they are selling Manchester United to the highest bidder due to the breathtaking protest that happend outside Old Trafford yesterday.', '2021-11-14 09:47:14', '2021-11-29 04:38:48', 'Cant apply for jobs', 1),
(26, 'Onesmus Mutie Kitili', 'onessykei20@gmail.com', 'A college student moonlighting as a chauffeur picks up two mysterious women for a night of party-hopping across LA. But when he uncovers their bloodthirsty intentions - and their dangerous, shadowy underworld - he must fight to stay alive.\r\n\r\nDirector: Adam Randall\r\n\r\nCast: Jorge Lendeborg Jr., Debby Ryan, Lucy Fry, RaÃºl Castillo, Alfie Allen, Marlene Forte, Ash Santos, Nandy Martin, Jaren Mitchell, Robert Larriviere, CG Lewis, Dane Rhodes, Devyn A. Tyler, Hunter Burke, Kevin Reid, Michael Bekemeier, Lee Coc, Bryan BattA college student moonlighting as a chauffeur picks up two mysterious women for a night of party-hopping across LA. But when he uncovers their bloodthirsty intentions - and their dangerous, shadowy underworld - he must fight to stay alive.\r\n\r\nDirector: Adam Randall\r\n\r\nCast: Jorge Lendeborg Jr., Debby Ryan, Lucy Fry, RaÃºl Castillo, Alfie Allen, Marlene Forte, Ash Santos, Nandy Martin, Jaren Mitchell, Robert Larriviere, CG Lewis, Dane Rhodes, Devyn A. Tyler, Hunter Burke, Kevin Reid, Michael Bekemeier, Lee Coc, Bryan Batt', '2021-11-14 11:13:50', '2021-11-29 04:38:51', 'Unable to create an employer account', 1),
(27, 'Onesmus Mutie Kitili', 'onessykei20@gmail.com', '+13214138128', '2022-01-04 23:21:28', '2022-01-04 23:21:52', 'Unable to create an employer account', 1),
(28, 'Onesmus Mutie Kitili', 'onessykei20@gmail.com', '77676767677677676776776776', '2022-01-04 23:59:16', '2022-01-04 23:59:16', 'Unable to create an employer account', 0),
(29, 'Onesmus Mutie Kitili', 'onessykei20@gmail.com', 'yttyytytyyt', '2022-01-04 23:59:45', '2022-01-04 23:59:45', 'Unable to create an employer account', 0),
(30, 'Onesmus Mutie Kitili', 'onessykei@gmail.com', 'uuuuhthhtbbbbhhthht', '2022-01-05 00:00:01', '2022-01-05 00:00:01', 'cant reset my password', 0),
(31, 'Onesmus Mutie Kitili', 'onessykei20@gmail.com', 'Okay so product two is in there see what he does took a look he\'s walking away again see if he goes that he\'s going back and he seems to be investigating clearly with product two yes he is now eating his food with product two and he seems to be liking it seems to be okay with it this was kind of his reaction over the past few days like he would I would put the product to it and he would you know sort of investigate it and run away and then come back and then eat it but you know he seems to have no issues with it whatsoever I mean, this is kind of like similar to how he usually the speedy usually but seems to be working out. So I\'m just gonna continue to film him so as I put about an eighth of a teaspoon measurement in there, and that\'s it, he ate a part of it, but let\'s see. We\'re gonna go film food and we can see that it\'s gone. Yeah, there\'s no more of that product to anymore. The bit minute', '2022-01-05 00:00:14', '2022-01-05 00:00:14', 'cant reset my password', 0),
(32, 'onesmus kitili', 'onessykei20@gmail.com', 'Okay so product two is in there see what he does took a look he\'s walking away again see if he goes that he\'s going back and he seems to be investigating clearly with product two yes he is now eating his food with product two and he seems to be liking it seems to be okay with it this was kind of his reaction over the past few days like he would I would put the product to it and he would you know sort of investigate it and run away and then come back and then eat it but you know he seems to have no issues with it whatsoever I mean, this is kind of like similar to how he usually the speedy usually but seems to be working out. So I\'m just gonna continue to film him so as I put about an eighth of a teaspoon measurement in there, and that\'s it, he ate a part of it, but let\'s see. We\'re gonna go film food and we can see that it\'s gone. Yeah, there\'s no more of that product to anymore. The bit minute', '2022-01-05 00:00:28', '2022-01-05 00:00:28', 'Cant apply for jobs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_21_092136_add_idnumber_to_users', 1),
(4, '2019_06_21_094904_add_level_to_users', 1),
(5, '2019_06_21_102751_create_jobs_table', 1),
(6, '2019_06_22_121611_create_applications_table', 1),
(7, '2019_06_27_112830_create_messages_table', 1),
(8, '2019_07_14_180249_create_managewebs_table', 1),
(9, '2019_07_25_091846_create_shortlists_table', 1),
(10, '2019_07_28_103841_add_by_to_jobs', 1),
(11, '2019_08_30_111234_add_deleted_at_to_jobs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jobfinder@mail.co.ke', '$2y$10$O31r7JmMPyNSehw1nWCsauUJh8iogma8yHd038JosNMeIvgYttrd2', '2021-11-14 12:07:49'),
('onessykei20@gmail.com', '$2y$10$pLNFX1CVIThF9j5v.Ugei.3v9L7YBePLunZrscL/r5IiTHWkhDfvS', '2021-11-14 12:12:02'),
('onessykei60@gmail.com', '$2y$10$zmxos3h5IvFYB0AHAPo/lO0eyrOXjmUx5UjY2WKQuIjUhnjMyPVNu', '2021-11-14 12:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `shortlists`
--

CREATE TABLE `shortlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` date NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_applied` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_no` int(11) NOT NULL,
  `located` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `t_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shortlists`
--

INSERT INTO `shortlists` (`id`, `name`, `gender`, `location`, `age`, `availability`, `experience`, `contact`, `job_applied`, `status`, `created_at`, `updated_at`, `id_no`, `located`, `contract`, `hours`, `duties`, `salary`, `user_id`, `t_status`) VALUES
(10, 'Okello oduor', 'Male', 'Kisumu', '24', '2021-09-17', '3 year', '+254729434393', 'Cultivator', 0, '2022-01-04 22:29:26', '2022-01-09 09:56:11', 23456788, 'homabay', '1 week', '6am-12noon', 'weeding for my shamba', '700/day', 5, 1),
(12, 'Onesmus Mutie Kitili', 'Male', 'Makueni', '23', '2021-09-15', '3 year', '+254729434393', 'Fencer', 0, '2021-09-11 10:56:58', '2021-09-24 12:17:11', 23456789, 'makueni', '1 week', '8am- 5pm', 'Teaching front-end web design and development using HTML, CSS and JS.\r\nTeaching back-end web development using PHP scripting and MySQL databases.\r\nFundamentals of computers and computer applications.\r\nOverseeing students’ practicals.', '700/day', 7, 0),
(13, 'kennedy mutava', 'Male', 'Mombasa town', '25', '2021-11-08', '3years', '+254780330330', 'Gardener', 0, '2022-01-04 22:33:56', '2022-01-04 22:33:56', 31125089, 'homa bay', '3 months', '8am- 5pm', 'Help keep an eye on my orchard', '700/day', 5, 0),
(14, 'Onesmus Mutie Kitili', 'Male', 'Nakuru', '24', '2021-11-09', '3 year', '+254729434393', 'Gardener', 0, '2021-11-08 11:47:14', '2021-11-08 11:47:19', 23456788, 'Kitui', '1 week', '6am-5pm', 'xyz', '700/day', 8, 0),
(15, 'Onesmus Mutie Kitili', 'Male', 'bureti', '24', '2021-11-15', '3years', '+254780330330', 'Sweeper', 0, '2021-11-13 19:03:41', '2021-11-13 19:15:22', 23456788, 'Kitui', '1 week', '8am- 5pm', 'clean my new compound', '500/day', 2, 0),
(19, 'User 4', 'Male', 'Nakuru', '34', '2022-01-05', '3years', '+254729434393', 'Cultivators', 0, '2022-01-05 00:08:58', '2022-01-05 00:09:12', 23456788, 'Nakuru', '1 month', '8am- 5pm', 'disapprove', '700/day', 3, 1),
(20, 'User 4', 'Female', 'Nakuru', '33', '2022-01-06', '3years', '+254729434393', 'Cultivators', 0, '2022-01-04 22:37:08', '2022-01-04 23:17:43', 23456788, 'Nakuru', '1 month', '8am- 5pm', 'disapprove', '700/day', 3, 1),
(21, 'User 15', 'Male', 'Nakuru', '33', '2022-01-13', '1 year', '+254772365548', 'Cultivators', 0, '2022-01-04 22:46:36', '2022-01-05 00:11:03', 23456788, 'Nakuru', '1 month', '8am- 5pm', 'disapprove', '700/day', 3, 1),
(22, 'Gee Nzisa', 'Female', 'kibwezi', '30', '2022-01-10', '30 year', '+254717994194', 'farmer', 0, '2022-01-09 09:53:37', '2022-01-09 09:53:48', 23456788, 'kisumu', '1 week', '6am-12noon', 'spraying my crops and cattle for pests and diseases', '1500/day', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `contact`, `idnumber`, `residence`, `level`, `status`) VALUES
(1, 'System Admin', 'jobfinder@mail.co.ke', NULL, '$2y$10$Tf973BOkeNVuncRKCz0JieX4PttMOzeohkiIbhb415RlDqm8cTpqO', NULL, '2021-09-01 21:52:51', '2021-09-05 09:16:55', '254729434393', '32146754', 'mombasa', 'Admin', 1),
(2, 'onesmus kitili', 'onessykei40@gmail.com', NULL, '$2y$10$9n19c0XrKJlws0eI6balrOKzsIS5ingYMv2aFv1dL0t/gw4ilPdsG', NULL, '2021-09-02 19:21:38', '2021-09-24 11:57:49', '254743434393', '13245372', 'nai', 'Employer', 1),
(3, 'User Kei', 'onessykei20@gmail.com', NULL, '$2y$10$bTt57WIJattLURAeOFQ74uQP83.fPxVnQFpUNR6GAgI5zX2tJ0tOa', NULL, '2021-09-03 10:12:37', '2021-09-24 12:10:34', '254765432123', '23456789', 'nakuru', 'Employer', 1),
(4, 'Chella kip', 'onessykei60@gmail.com', NULL, '$2y$10$Slpvwuezq9FAOKcIm.kg2uPk1q0PF8QjM88tF289YtikvApP1BFE2', NULL, '2021-09-03 10:22:10', '2021-09-24 12:10:58', '254723456789', '8642148', 'Kericho', 'Employer', 1),
(5, 'Omondi otieno', 'onessykei10@gmail.com', NULL, '$2y$10$eTe0/ceB9NmZ8tyX5rdEjuTb4tiJRXLnMyRiI7jnIQRTEOd2tkAH6', NULL, '2021-09-05 12:51:50', '2021-09-24 12:10:52', '254729434394', '13579083', 'Kisumu', 'Employer', 1),
(7, 'Mutua Sam', 'sam@gmail.com', NULL, '$2y$10$0ORNKDZSE.yq63WPLbj5M.VobNX0lsLkGdQInskG4SGdrbJVl.4W2', NULL, '2021-09-11 10:53:08', '2021-09-24 12:10:40', '254729434393', '4356790', 'makueni', 'Employer', 1),
(9, 'Onesmus Mutie Kitili', 'onessykei21@gmail.com', NULL, '$2y$10$8DnpVhFKYKHohWLdithFFeoQPU5Bui3Tdrr7OtdRIo7HQqBmpC.3a', NULL, '2021-11-08 11:53:41', '2021-11-08 12:08:10', '254729434393', '32146754', 'kitui', 'Employer', 1),
(10, 'onesmus kitili', 'onessykei22@gmail.com', NULL, '$2y$10$gSjn8HIFjHzkIDhO77wfuutZu3NQyVmk09RCWyAMcdBMBYzErb5Pe', NULL, '2021-11-08 12:04:43', '2021-11-08 12:04:43', '254729434393', '32146754', 'kitui', 'Employer', 0),
(11, 'Onesmus Mutie Kitili', 'onessykei25@gmail.com', NULL, '$2y$10$V9h6PQbmBY23cTgUTQTusukHrUxLAQvevAvDCFfC2MHdkbhzbVZvK', NULL, '2021-11-08 12:06:52', '2022-01-04 23:32:38', '254729434393', '32146754', 'kitui', 'Employer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managewebs`
--
ALTER TABLE `managewebs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `shortlists`
--
ALTER TABLE `shortlists`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `managewebs`
--
ALTER TABLE `managewebs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shortlists`
--
ALTER TABLE `shortlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
