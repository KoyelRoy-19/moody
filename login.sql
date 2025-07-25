-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2025 at 03:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `score` int(11) NOT NULL,
  `level` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verification_code` int(11) NOT NULL,
  `verified_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `category`, `score`, `level`, `fullname`, `email`, `password`, `created_at`, `verification_code`, `verified_at`) VALUES
(1, 0, '', 0, '', 'Koyel', 'rjkoyel18@gmail.com', '$2y$10$K17Xhb84n9Lz7cTi.vHwSerJ1rBXIMs4NmvdYeUDvnIY8FHMDZjB6', '2025-07-24 01:20:24', 0, ''),
(2, 0, '', 0, '', 'Koyel Roy', 'roykoyel0412@gmail.com', '$2y$10$u4f6wAyWLD//gvGsaxBHMu/9PFKUbgVS.JSvcGIf4Gm.fwGGAxHRi', '2025-07-24 01:56:00', 0, ''),
(3, 0, '', 0, '', 'Koyel Roy', 'roykoyel042@gmail.com', '$2y$10$wAGfndBcq3yOl/NukMGkXuxUiR/9C9YNBsaiqT5MCP24LddbpB1CG', '2025-07-24 02:03:21', 0, ''),
(4, 0, '', 0, '', 'Koyel Roy', 'roykoyel0428@gmail.com', '$2y$10$2FUqJa.DTWS5Bvruksyr5eZ0/e9YUo/ngNsbfSulOzMxPsyRjBrW.', '2025-07-24 02:05:06', 0, ''),
(5, 0, '', 0, '', 'Koyel', 'roykoyel0422@gmail.com', '$2y$10$yVtWSNSAqFy07qsdRoKsG.4ulpk/yOSKAkkb/tbX9tSHpx2dIqCtW', '2025-07-24 02:09:58', 0, ''),
(6, 0, '', 0, '', 'Koyel Roy', 'roykoyel0423@gmail.com', '$2y$10$YhWGOMrN55Yl5RTGggO/0upvz5.JnSWICPkQlabP.FFbaatK6KL4i', '2025-07-24 06:49:05', 0, ''),
(11, 1, 'Anxiety', 17, 'Mild', '', '', '', '2025-07-24 11:18:07', 0, ''),
(12, 1, 'Depression', 26, 'Moderate', '', '', '', '2025-07-24 11:22:51', 0, ''),
(13, 1, 'Depression', 26, 'Moderate', '', '', '', '2025-07-24 11:24:46', 0, ''),
(14, 1, 'Depression', 21, 'Moderate', '', '', '', '2025-07-24 11:25:44', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
