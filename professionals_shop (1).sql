-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 12:14 PM
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
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `first_name`, `last_name`, `password`) VALUES
(12340001, 'George', 'Ng\'ang\'a', '12340001'),
(12340002, 'Purity', 'Jelimo', '12340002'),
(12340003, 'Magnus', 'Wangari', '12340003'),
(12340004, 'Dennis', 'Macharia', '12340004');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(8) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `photo` blob NOT NULL,
  `id_number` int(8) NOT NULL,
  `portfolio` varchar(256) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `license` varchar(256) NOT NULL,
  `skill` text NOT NULL,
  `phone_number` int(10) NOT NULL,
  `category` text NOT NULL,
  `rate` int(1) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `employer_id` int(8) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `photo` blob NOT NULL,
  `id_number` int(8) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `location` varchar(256) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
