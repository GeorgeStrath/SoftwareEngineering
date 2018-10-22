-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 08:11 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software engineering`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(8) NOT NULL,
  `admin_photo` varchar(1000) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_photo`, `first_name`, `last_name`, `password`) VALUES
(12340001, 'Mwaniki.jpg', 'George ', ' Ng\'ang\'a', '12340001'),
(12340002, 'Purity.jpg', 'Purity ', 'Jelimo', '12340002'),
(12340003, 'Magnus.jpg', 'Magnus ', 'Wangari', '12340003'),
(12340004, 'Macho.jpg', 'Dennis ', 'Macharia', '12340004');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comenter` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `commented` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(8) NOT NULL,
  `full_names` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `photo` varchar(125) NOT NULL,
  `id_number` int(8) NOT NULL,
  `portfolio` varchar(100) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `license` varchar(100) NOT NULL,
  `skill` text NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `category` text NOT NULL,
  `rate` int(1) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `full_names`, `date_of_birth`, `photo`, `id_number`, `portfolio`, `email_address`, `password`, `location`, `license`, `skill`, `phone_number`, `category`, `rate`, `comment`) VALUES
(50000004, 'Toney Salim', '1996-07-03', 'noimage.jpg', 1234567, 'sadsa', 'salimton@mail.com', '202cb962', 'dsa', 'DSAD', 'SADSA', 'ASDASD', 'SADSAD', 4, ''),
(50000005, 'gman', '2018-10-17', 'Magnus.jpg', 123, 'sfdfdsf', 'gman@mail.com', '202cb962', 'dsfdsfds', 'sdfdsfds', 'dsfdsfdsf', 'dsfdsfsdf', 'dsfdsfdsfds', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `employer_id` int(8) NOT NULL,
  `full_names` text NOT NULL,
  `photo` varchar(125) NOT NULL,
  `id_number` int(8) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `phone_number` varchar(18) NOT NULL,
  `location` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `rating` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`employer_id`, `full_names`, `photo`, `id_number`, `email_address`, `password`, `phone_number`, `location`, `category`, `rating`) VALUES
(60000001, 'Employer One', 'Purity.jpg', 34034730, 'employerone@d.com', '60000001', '+254717440090', 'Bahamas', 'Employer', 2),
(60000002, 'George', 'noimage.jpg', 123, 'gmang@mail.com', '202cb962', '123', 'langata', 'Organisation', 0),
(60000003, 'n', 'noimage.jpg', 123, 'n@mail', '202cb962', '123', 'l', 'Individual', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rater` int(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `rated` int(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `full_names` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `dateregistered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_names`, `password`, `email`, `role`, `dateregistered`) VALUES
(16, 'Admin', '202cb962ac59075b964b07152d234b70', 'admin@mail.com', 'admin', '2018-10-20 05:36:48'),
(20, 'George', '202cb962ac59075b964b07152d234b70', 'gman@mail.com', 'employee', '2018-10-20 15:30:51'),
(21, 'George', '202cb962ac59075b964b07152d234b70', 'gmang@mail.com', 'employer', '2018-10-20 15:31:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`employer_id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rateid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50000006;

--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `employer_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60000004;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rateid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
