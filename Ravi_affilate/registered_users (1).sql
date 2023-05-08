-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 11:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` text NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `referral_code` varchar(200) NOT NULL,
  `referral_point` int(200) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `full_name`, `username`, `email`, `password`, `mobile`, `city`, `address`, `referral_code`, `referral_point`) VALUES
(0, 'aaa', 'aaa', 'aaa@gmail.com', '$2y$10$RoRWWi8OcbqOXa3gsqScAefJqxMz0v1r9SydzvJetE/WzKynqhTLe', '', '', '', '92BE4690', 0),
(0, 'abc', 'abc', 'abc@gmail.com', '$2y$10$eNTOAlMpVRD8WQE4uWs66eih5Xf/5lHnI5qp.m9sJw6HzIdZNvsWe', '', '', '', 'DBA894F9', 20),
(0, 'anjali', 'UIDN0814987', 'anjali@gmail.com', '$2y$10$i1VMQMqP8zx0TUKqW5YCdOOAtkxdDLxePDGAirRlaO3aqTMP6xPRW', '', '', '', '0315444F', 0),
(0, 'Ravi kumar', '8602173371', 'RY57848@GMAIL.COM', '$2y$10$58UeQYkH7E93wxVQXZ39xOfYQNv/BLyL7kNZLCTuxg9IyTziQNB7.', '', '', '', 'EE6F51F1', 10),
(0, 'tj', 'tj', 'tj@gmail.com', '$2y$10$aG/nMt6cgUdrASqJSgNsVuPAgSC9XFkC2zg8dfMShUPL//QhHUMli', '', '', '', '53357E78', 0),
(0, 'touseef', 'touseef', 'touseef@gmail.com', '$2y$10$phqcewHKDnaxektLaTiYOeVvRgsg2MnFCW/TEVdfbicV2UmPqOCny', '', '', '', '10922A46', 10),
(0, 'webdev', 'webdev', 'webdev@gmail.com', '$2y$10$GsG7wVVcNsEsqIhCj3JCjOxyaXq.MIq73USzmY1p2cC8rqGfgT7he', '', '', '', '84E4B10D', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
