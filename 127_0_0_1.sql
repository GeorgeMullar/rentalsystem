-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 01:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalsystem`
--
CREATE DATABASE IF NOT EXISTS `rentalsystem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rentalsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `active_users`
--

CREATE TABLE `active_users` (
  `username` varchar(20) NOT NULL,
  `entry_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `username` varchar(20) NOT NULL,
  `balance` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`username`, `balance`) VALUES
('george', 999961),
('Yashwanth', 49992);

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`username`, `password`) VALUES
('admin', '26097e705e1933803bdfc229a473dd54'),
('Yashwanth', 'e3e0355f9903a77baed31f95b21c5139');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rfid` bigint(20) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `mail_id` varchar(30) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `name`, `rfid`, `active`, `mail_id`, `phone`, `address`, `city`, `state`, `pincode`) VALUES
('George', 'George', 789, 1, 'jampanageorge@gmail.com', 999999999, 'nothing', 'noting', 'noting', 506004),
('Yashwanth', 'Yashwanth', 8080, 1, 'thatiyash@gmail.com', 999999999, 'nothing', 'noting', 'noting', 506004);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `username` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `opening_bal` bigint(20) DEFAULT NULL,
  `closing_bal` bigint(20) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `entry_time` datetime NOT NULL,
  `exit_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`username`, `id`, `opening_bal`, `closing_bal`, `type`, `entry_time`, `exit_time`) VALUES
('George', 1, 1000000, 999696, 'Debit', '2022-07-10 13:04:02', '2022-07-10 13:09:06'),
('George', 2, 1000000, 999451, 'Debit', '2022-07-10 13:04:02', '2022-07-10 13:13:11'),
('George', 3, 1000000, 999448, 'Debit', '2022-07-10 13:04:02', '2022-07-10 13:13:14'),
('George', 4, 1000000, 999313, 'Debit', '2022-07-10 13:04:02', '2022-07-10 13:15:29'),
('George', 5, 1000000, 999998, 'Debit', '2022-07-10 13:15:49', '2022-07-10 13:15:51'),
('George', 6, 1000000, 999998, 'Debit', '2022-07-10 13:15:53', '2022-07-10 13:15:55'),
('George', 7, 1000000, 999999, 'Debit', '2022-07-10 13:15:56', '2022-07-10 13:15:57'),
('George', 8, 1000000, 999999, 'Debit', '2022-07-10 13:17:23', '2022-07-10 13:17:24'),
('George', 9, 999999, 999998, 'Debit', '2022-07-10 13:17:26', '2022-07-10 13:17:27'),
('George', 10, 999998, 999996, 'Debit', '2022-07-10 13:17:33', '2022-07-10 13:17:35'),
('George', 11, 999996, 999995, 'Debit', '2022-07-10 13:17:38', '2022-07-10 13:17:39'),
('George', 12, 999995, 999988, 'Debit', '2022-07-10 13:18:00', '2022-07-10 13:18:07'),
('George', 13, 999988, 999986, 'Debit', '2022-07-10 13:18:47', '2022-07-10 13:18:49'),
('George', 14, 999986, 999978, 'Debit', '2022-07-10 13:19:06', '2022-07-10 13:19:14'),
('George', 15, 999978, 999973, 'Debit', '2022-07-10 13:24:12', '2022-07-10 13:24:17'),
('George', 16, 999973, 999969, 'Debit', '2022-07-10 13:24:20', '2022-07-10 13:24:24'),
('George', 17, 999969, 999955, 'Debit', '2022-07-10 13:24:26', '2022-07-10 13:24:40'),
('George', 18, 999955, 999953, 'Debit', '2022-07-10 13:25:22', '2022-07-10 13:25:24'),
('George', 19, 999953, 999951, 'Debit', '2022-07-10 13:26:30', '2022-07-10 13:26:32'),
('George', 20, 999951, 999952, 'Credit', '2022-07-10 14:23:04', NULL),
('George', 21, 999951, 999952, 'Credit', '2022-07-10 14:23:12', NULL),
('George', 23, 999951, 999955, 'Credit', '2022-07-10 14:42:41', NULL),
('George', 24, 999951, 999956, 'Credit', '2022-07-10 14:44:05', NULL),
('George', 25, 999951, 999955, 'Credit', '2022-07-10 14:45:03', NULL),
('George', 26, 999955, 999961, 'Credit', '2022-07-10 14:45:15', NULL),
('Yashwanth', 27, 50000, 49995, 'Debit', '2022-07-10 20:12:40', '2022-07-10 20:12:45'),
('Yashwanth', 28, 49995, 49993, 'Debit', '2022-07-10 20:14:14', '2022-07-10 20:14:16'),
('Yashwanth', 29, 49993, 49992, 'Debit', '2022-07-10 20:23:53', '2022-07-10 20:23:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_users`
--
ALTER TABLE `active_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `active_users`
--
ALTER TABLE `active_users`
  ADD CONSTRAINT `active_users_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customers` (`username`);

--
-- Constraints for table `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `balance_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customers` (`username`);

--
-- Constraints for table `credentials`
--
ALTER TABLE `credentials`
  ADD CONSTRAINT `credentials_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customers` (`username`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customers` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
