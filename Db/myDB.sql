-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2022 at 12:14 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `createaccount_form`
--

CREATE TABLE `createaccount_form` (
  `id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `surename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int NOT NULL,
  `gender` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int NOT NULL,
  `c_password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `createaccount_form`
--

INSERT INTO `createaccount_form` (`id`, `fname`, `lname`, `surename`, `email`, `mobile`, `gender`, `username`, `password`, `c_password`) VALUES
(1, 'raja', 'vel', 'rajavel', 'rajavel.a@navabrindit.com', 987654321, 'male', 'rajavel94', 123, 123),
(2, 'raja', 'ram', 'rajavel', 'rajavel.a@navabrindit.com', 987654321, 'male', 'rajavel94', 234, 234),
(3, 'John', 'raja', 'johnraja', 'vel@hmml.com', 7896, 'male', 'john94', 34, 34);

-- --------------------------------------------------------

--
-- Table structure for table `crud_form`
--

CREATE TABLE `crud_form` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crud_form`
--

INSERT INTO `crud_form` (`id`, `name`, `phone`) VALUES
(29, 'rajavel', 333),
(30, 'rajavel', 333);

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `id` int NOT NULL,
  `fldusername` varchar(20) NOT NULL,
  `fldpassword` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`id`, `fldusername`, `fldpassword`) VALUES
(1, 'RAJAVEL', 123),
(2, 'vel', 234),
(5, 'manoji', 123),
(6, 'manoji', 123),
(9, 'manoji', 123),
(11, 'navabrind_kmu', 9786),
(12, 'navabrind_kmu', 9786),
(13, 'navabrind_kmu', 9786),
(14, 'navabrind_kmu', 9786),
(15, 'navabrind_chennai', 9786678),
(16, 'hi', 123),
(17, 'new ', 678),
(18, 'employee', 12345),
(19, 'employee', 12345),
(20, 'employee2', 12345),
(21, 'employee3', 12345),
(22, 'employee4', 12345),
(23, 'employee3', 12345),
(24, 'rajavel', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createaccount_form`
--
ALTER TABLE `createaccount_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_form`
--
ALTER TABLE `crud_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createaccount_form`
--
ALTER TABLE `createaccount_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crud_form`
--
ALTER TABLE `crud_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `register_form`
--
ALTER TABLE `register_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
