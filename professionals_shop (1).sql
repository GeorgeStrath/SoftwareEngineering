-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 05:24 PM
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
-- Database: `professionals_shop`
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
  `password` varchar(8) NOT NULL,
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
(50000001, 'Test One', '1999-01-01', 'Magnus.jpg', 12000000, 'guess who I am', 'test.one@gmail.com', '12340003', 'Kiambu', 'Sina Priss', 'Farmer', '+254788229272', 'Employee', 1, 'Poor woman from Kiambu doesn\'t know anything!');

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
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`employer_id`, `full_names`, `photo`, `id_number`, `email_address`, `password`, `phone_number`, `location`, `category`) VALUES
(60000001, 'Employer One', 'Purity.jpg', 34034730, 'employerone@d.com', '60000001', '+254717440090', 'Bahamas', 'Employer');

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
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`employer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50000002;

--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `employer_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60000002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
