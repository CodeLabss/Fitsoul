-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 01:06 PM
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
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `candidate_id` int(10) NOT NULL,
  `candidate_fname` varchar(25) NOT NULL,
  `candidate_mname` varchar(15) NOT NULL,
  `candidate_lname` varchar(25) NOT NULL,
  `candidate_gender` varchar(10) NOT NULL,
  `candidate_DOB` datetime(6) NOT NULL,
  `candidate_profile` varchar(50) NOT NULL,
  `candidate_joining` varchar(10) NOT NULL,
  `candidate_contact` varchar(15) NOT NULL,
  `candidate_contact2` varchar(15) NOT NULL,
  `candidate_email` varchar(100) NOT NULL,
  `candidate_password` varchar(25) NOT NULL,
  `candidate_address1` varchar(50) NOT NULL,
  `candidate_address2` varchar(50) NOT NULL,
  `candidate_state` varchar(25) NOT NULL,
  `candidate_district` varchar(25) NOT NULL,
  `candidate_pincode` int(10) NOT NULL,
  `candidate_experience_year` int(15) NOT NULL,
  `candidate_experience_months` int(15) NOT NULL,
  `candidate_picture` mediumtext NOT NULL,
  `candidate_CV` mediumtext NOT NULL,
  `candidate_intoduction` mediumtext NOT NULL,
  `candidate_sector` varchar(50) NOT NULL,
  `candidate_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`candidate_id`, `candidate_fname`, `candidate_mname`, `candidate_lname`, `candidate_gender`, `candidate_DOB`, `candidate_profile`, `candidate_joining`, `candidate_contact`, `candidate_contact2`, `candidate_email`, `candidate_password`, `candidate_address1`, `candidate_address2`, `candidate_state`, `candidate_district`, `candidate_pincode`, `candidate_experience_year`, `candidate_experience_months`, `candidate_picture`, `candidate_CV`, `candidate_intoduction`, `candidate_sector`, `candidate_created`) VALUES
(24, 'name', '', 'last', 'Male', '0000-00-00 00:00:00.000000', 'Massager', '', '456', '456', 'email@email.com', '123', '', '', '', '', 0, 0, 0, '', '', '', '', '2024-07-22 14:28:09'),
(25, 'ad', '', 'di', 'Female', '0000-00-00 00:00:00.000000', 'Massager', '', '123', '123', 'ads@gmail.com', '123', '', '', '', '', 0, 0, 0, '', '', '', '', '2024-07-22 14:50:02'),
(26, 'cvc', '', 'vc', 'Male', '0000-00-00 00:00:00.000000', 'Trainer', '', '21213', '31', 'vd@gmail.com', '123', '', '', '', '', 0, 0, 0, '', '', '', '', '2024-07-22 14:51:41'),
(27, 'cdsaf', 'dv', 'sd', '', '0000-00-00 00:00:00.000000', '', '', '123', '212', 'b@gmail.com', '123', '', '', '', '', 0, 0, 0, '', '', '', '', '2024-07-22 15:05:28'),
(28, 'Aray', 'as', 'Ray', 'Male', '0000-00-00 00:00:00.000000', 'Massager', '', '8123456789', '545', 'jssucks7@gmail.com', '123', '', '', '', '', 0, 0, 0, '', '', '', '', '2024-07-22 15:45:36'),
(29, 'dsf', 'dsf', 'v', 'Male', '0000-00-00 00:00:00.000000', 'Massager', '', '21', '1', 'dv@gm.cm', '12', '', '', '', '', 0, 0, 0, '', '', '', '', '2024-07-22 16:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `employer_id` int(10) NOT NULL,
  `buisness_name` varchar(25) NOT NULL,
  `buisness_address` varchar(50) NOT NULL,
  `buisness_address2` varchar(50) NOT NULL,
  `buisness_state` varchar(25) NOT NULL,
  `buisness_district` varchar(25) NOT NULL,
  `g_pincode` int(11) NOT NULL,
  `contact_person_fname` varchar(25) NOT NULL,
  `contact_person_mname` varchar(25) NOT NULL,
  `contact_person_lname` varchar(25) NOT NULL,
  `contact_person_designation` varchar(50) NOT NULL,
  `contact_person_phone` varchar(15) NOT NULL,
  `contact_person_phone2` varchar(15) NOT NULL,
  `contact_person_email` varchar(100) NOT NULL,
  `contact_person_password` varchar(25) NOT NULL,
  `buisness_photo` varchar(500) NOT NULL,
  `buisness_description` varchar(500) NOT NULL,
  `buisness_category` varchar(50) NOT NULL,
  `employer_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`employer_id`, `buisness_name`, `buisness_address`, `buisness_address2`, `buisness_state`, `buisness_district`, `g_pincode`, `contact_person_fname`, `contact_person_mname`, `contact_person_lname`, `contact_person_designation`, `contact_person_phone`, `contact_person_phone2`, `contact_person_email`, `contact_person_password`, `buisness_photo`, `buisness_description`, `buisness_category`, `employer_created`) VALUES
(15, 'dg', 'vvv', '', '', '', 0, '', '', '', 'Receptionist', '11', '', 'as@gm.com', 'aw', '', '', '', '2024-07-18 16:01:03'),
(16, 'sdd', 'fff', '', '', '', 0, '', '', '', 'Massager', '123', '', 'df@gm.cm', '23', '', '', '', '2024-07-18 16:21:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`candidate_id`),
  ADD UNIQUE KEY `employee_email` (`candidate_email`),
  ADD KEY `employee_pincode_fk` (`candidate_pincode`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`employer_id`),
  ADD UNIQUE KEY `employer_email` (`contact_person_email`),
  ADD KEY `g_pincode_fk` (`g_pincode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_details`
--
ALTER TABLE `candidate_details`
  MODIFY `candidate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `employer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
