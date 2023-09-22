-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 08:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marksheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheets`
--

CREATE TABLE `marksheets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `session_id` int(11) NOT NULL,
  `bangla` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `ict` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marksheets`
--

INSERT INTO `marksheets` (`id`, `name`, `roll`, `session_id`, `bangla`, `english`, `math`, `physics`, `chemistry`, `ict`, `status`, `created_at`) VALUES
(1, 'Monish Roy', '407401', 1, 50, 0, 80, 67, 85, 75, 1, '2023-09-18 05:50:59'),
(4, 'Ronobir Roy', '407402', 3, 50, 60, 0, 67, 85, 85, 1, '2023-09-22 05:32:37'),
(5, 'Apurbo Sorker', '290089', 1, 33, 33, 60, 67, 75, 85, 1, '2023-09-22 05:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `name`, `status`, `created_at`) VALUES
(1, '2019-20', 1, '2023-09-22 04:53:48'),
(2, '2020-21', 1, '2023-09-22 05:18:50'),
(3, '2021-22', 1, '2023-09-22 05:18:50'),
(4, '2022-23', 1, '2023-09-22 06:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheets`
--
ALTER TABLE `marksheets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`session_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marksheets`
--
ALTER TABLE `marksheets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marksheets`
--
ALTER TABLE `marksheets`
  ADD CONSTRAINT `test` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
