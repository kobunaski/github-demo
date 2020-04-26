-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2020 at 03:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enterpriseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogging`
--

CREATE TABLE `blogging` (
  `id` int(11) NOT NULL,
  `idSubject` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseName`) VALUES
(1, 'TCS2003'),
(2, 'TCS2002'),
(3, 'TCS2004');

-- --------------------------------------------------------

--
-- Table structure for table `coursedetail`
--

CREATE TABLE `coursedetail` (
  `id` int(11) NOT NULL,
  `idCourse` int(11) NOT NULL,
  `idSubject` int(11) NOT NULL,
  `idTutor` int(11) NOT NULL,
  `idStudent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursedetail`
--

INSERT INTO `coursedetail` (`id`, `idCourse`, `idSubject`, `idTutor`, `idStudent`) VALUES
(1, 2, 2, 5, 6),
(2, 2, 2, 5, 7),
(3, 2, 2, 5, 8),
(4, 3, 3, 5, 2),
(5, 3, 3, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messagebox`
--

CREATE TABLE `messagebox` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `idUser` int(11) NOT NULL,
  `idCourse` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagebox`
--

INSERT INTO `messagebox` (`id`, `content`, `idUser`, `idCourse`, `created_at`, `updated_at`) VALUES
(28, 'Anh huy sap die', 6, 2, '2020-04-05 15:19:28', '2020-04-05 15:19:28'),
(29, 'abc', 6, 3, '2020-04-05 15:42:04', '2020-04-05 15:42:04'),
(30, 'die r ha', 5, 2, '2020-04-05 15:43:11', '2020-04-05 15:43:11'),
(31, 'ok', 5, 3, '2020-04-05 15:43:25', '2020-04-05 15:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `roleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `roleName`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Staff'),
(4, 'Student'),
(5, 'Headmaster');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`) VALUES
(101),
(102),
(103),
(104);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `startTime`, `endTime`) VALUES
(1, '07:10:00', '09:10:00'),
(2, '10:10:00', '12:10:00'),
(3, '13:10:00', '15:10:00'),
(4, '16:10:00', '18:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `scheduleslot`
--

CREATE TABLE `scheduleslot` (
  `id` int(11) NOT NULL,
  `idSlot` int(11) NOT NULL,
  `day` date NOT NULL,
  `idCourse` int(11) NOT NULL,
  `idRoom` int(11) NOT NULL,
  `idSchedule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheduleslot`
--

INSERT INTO `scheduleslot` (`id`, `idSlot`, `day`, `idCourse`, `idRoom`, `idSchedule`) VALUES
(1, 1, '2020-03-22', 1, 104, 1),
(2, 2, '2020-03-22', 1, 104, 2),
(3, 3, '2020-03-23', 1, 104, 3),
(4, 1, '2020-04-23', 2, 104, 1),
(5, 2, '2020-04-23', 2, 104, 2),
(6, 3, '2020-04-23', 2, 104, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `nameSubject` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `nameSubject`, `status`) VALUES
(1, 'Enterprise Web', b'0'),
(2, 'Requirement Management', b'0'),
(3, 'Project', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `uploaddoc`
--

CREATE TABLE `uploaddoc` (
  `id` int(11) NOT NULL,
  `idStudent` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `idSubject` int(11) NOT NULL,
  `idCourse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaddoc`
--

INSERT INTO `uploaddoc` (`id`, `idStudent`, `link`, `comment`, `idSubject`, `idCourse`) VALUES
(1, 6, 'https://www.google.com', 'Good Document', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idRole` int(11) NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `idRole`, `phone`, `gender`, `dateOfBirth`, `address`, `image`, `remember_token`, `facebook`, `created_at`, `updated_at`, `status`) VALUES
(1, 'giang', 'tg.ethanstark@gmail.com', NULL, '$2y$10$r0wtNZBAWkYnP2LubwhOeeEmhOk6A0sYO1Zf2FPGUcm/vvcETFqvu', 1, '0932041717', 'M', '1999-02-20', 'Nguyen Hong Dao', '449895.jpg', 'JR3Elew3kMDjd6QONrbk1fSySXMzYgY5H4p47bF6NWx33EyIjdgnHCek61jF', 'https://www.facebook.com/GiangDev.99', '2020-03-24 15:49:47', '2020-03-25 21:16:55', '0'),
(2, 'Duc Thinh ', 'thinhvu3007@gmail.com', NULL, '$2y$10$r0wtNZBAWkYnP2LubwhOeeEmhOk6A0sYO1Zf2FPGUcm/vvcETFqvu', 4, '0932041818', 'M', '2008-07-30', 'Nguyen Hong Dao', '449895.jpg', 'hGWfjZI2fg1lsWRrYphvSlGOupDOzXZuAtfhylJ2oTHg2TuDbdXgYApC8FYU', 'thinh vu buffalo', '2020-03-25 20:58:13', '2020-03-31 07:55:19', '0'),
(3, 'Dinh Tien Cong', 'congdtgcs16309@fpt.edu.vn', NULL, '$2y$10$uGu7oJ7gQvr6bEOjq0IlL.6jHFwo9Bm7tQLybWHeeBhjTAWXw..t2', 2, '0902920292', 'M', '1997-12-14', '89/12 Nguyễn Hồng Đào', '449895.jpg', 'Fozscs8jixNcSlBhiDo2Ig7BoCSSACWxOID2b9k6a00p0NYUhlgCqlTODEuf', 'https://www.facebook.com/97.EdwardDev/', '2020-03-26 05:56:13', '2020-03-26 06:48:45', '0'),
(4, 'Ha Tuan Kiet', 'kiethtgcs16379@fpt.edu.vn', NULL, '$2y$10$UyppELHju7w3URXZgolxSeU5C.9mmgeKbsjwKnsK84nJnTDZH97Oe', 3, '0907627839', 'M', '1998-06-26', '89/12 đường Nguyễn Hồng Đào', '449895.jpg', 'jM59qSKsyt0lRy9exHd9Rm3WV18UWPVdxkUmm8HwSiEUSZAG3VaoYZSEuIzN', 'https://www.facebook.com/dktc19', '2020-03-26 07:16:13', '2020-03-31 07:52:37', '1'),
(5, 'Bao Dep Trai', 'vnhunter369@gmail.com', NULL, '$2y$10$HKb078CSvnx0r7Z6dvdrOOx00vBRE3hJk4bLvRhsUWlFoIDxVZC8C', 5, '0930284724', 'M', '1990-03-15', 'Ong Buu', '449895.jpg', 'FJ0HWMDQTMAYFdMA5oXWoSm1G0VpzmEZOYhLCCTdZO03N3NsdcM9iwbmo5uT', 'https://www.facebook.com/serco.honan', '2020-03-26 07:23:54', '2020-03-26 20:53:56', '1'),
(6, 'Dang Hoang Khanh', 'khanh371013@gmail.com', NULL, '$2y$10$hp1GcGMCw1WD737v5nXP7OI5uSql1uQLgVZM31YyWUYECVw3UaQa2', 4, '0933928445', 'M', '1998-03-02', 'Nguyen Hong Dao', '449895.jpg', 'wSrxvy7iaEQm7slPMhexEumUxc32HFSuhckV0hZIrrGh8G1Sh8HeijpPTk5J', 'https://www.facebook.com/profile.php?id=100044842189611', '2020-03-27 01:27:33', '2020-03-27 01:27:33', '1'),
(7, 'The Huy', 'thehuy0126@gmail.com', NULL, '$2y$10$M0RT9488b8f9frktHWktmucHrGC.3zkkqDCTjUaVQuLioJCpAwN1W', 4, '0932041818', 'M', '1997-11-14', '89/12 đường Nguyễn Hồng Đào', '449895.jpg', 'VrS2nOA5nheBeeaOX4k95IVAMq9sTGByzqydqxztIHsAWrJDZmvtj4QZz6bL', 'https://www.facebook.com/tran.binh.the.huy', '2020-03-27 01:28:32', '2020-03-27 01:28:32', '1'),
(8, 'Thanh Hieu', 'buithithanhhieu221998@gmail.com', NULL, '$2y$10$Jtns7lDp9DJNmgppoQoRCuMetR2kE15UqtgNCErPZlYNEWteDn8AK', 4, '0902920292', 'F', '1998-02-02', '89/12 Nguyễn Hồng Đào', '449895.jpg', 'iXIyiet4C6751SQOZ0QTm6lqQnZoV8L7jHXNQ9d4dodBEpwkXRqa0hwN90TX', 'https://www.facebook.com/bui.hieu.7311352', '2020-03-27 01:29:17', '2020-03-27 01:29:17', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogging`
--
ALTER TABLE `blogging`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursedetail`
--
ALTER TABLE `coursedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagebox`
--
ALTER TABLE `messagebox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduleslot`
--
ALTER TABLE `scheduleslot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaddoc`
--
ALTER TABLE `uploaddoc`
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
-- AUTO_INCREMENT for table `blogging`
--
ALTER TABLE `blogging`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coursedetail`
--
ALTER TABLE `coursedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messagebox`
--
ALTER TABLE `messagebox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scheduleslot`
--
ALTER TABLE `scheduleslot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uploaddoc`
--
ALTER TABLE `uploaddoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
