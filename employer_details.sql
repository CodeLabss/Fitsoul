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
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `employer_id` int(10) NOT NULL,
  `employer_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `g_name` varchar(25) NOT NULL,
  `g_address` varchar(25) NOT NULL,
  `g_state` varchar(25) NOT NULL,
  `g_district` varchar(25) NOT NULL,
  `g_pincode` int(11) NOT NULL,
  `employer_post` varchar(25) NOT NULL,
  `employer_contact` int(15) NOT NULL,
  `employer_email` varchar(25) NOT NULL,
  `employer_password` varchar(25) NOT NULL,
  `employer_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`employer_id`, `employer_created`, `g_name`, `g_address`, `g_state`, `g_district`, `g_pincode`, `employer_post`, `employer_contact`, `employer_email`, `employer_password`, `employer_name`) VALUES
(2, '2024-07-17 15:21:48', 'jj', '', '', '', 0, '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`employer_id`),
  ADD KEY `g_pincode_fk` (`g_pincode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `employer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
