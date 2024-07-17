-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 12:31 PM
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
-- Database: `details_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(10) NOT NULL,
  `employee_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `employee_fname` varchar(25) NOT NULL,
  `employee_lname` varchar(25) NOT NULL,
  `employee_gender` varchar(25) NOT NULL,
  `employee_profile` varchar(50) NOT NULL,
  `employee_joining` varchar(25) NOT NULL,
  `employee_contact` int(15) NOT NULL,
  `employee_email` varchar(25) NOT NULL,
  `employee_password` varchar(25) NOT NULL,
  `employee_address` varchar(25) NOT NULL,
  `employee_state` varchar(25) NOT NULL,
  `employee_district` varchar(25) NOT NULL,
  `employee_pincode` int(10) NOT NULL,
  `employee_experience` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `employee_created`, `employee_fname`, `employee_lname`, `employee_gender`, `employee_profile`, `employee_joining`, `employee_contact`, `employee_email`, `employee_password`, `employee_address`, `employee_state`, `employee_district`, `employee_pincode`, `employee_experience`) VALUES
(6, '2024-07-17 15:22:44', 'mmm', '', '', '', '', 0, '', '', '', '', '', 0, 0),
(7, '2024-07-17 15:39:32', 'tobi', 'fdf', 'Male', 'Trainer', 'yes', 0, '', '', 'aaasd', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `employee_pincode_fk` (`employee_pincode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
