-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 02:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diabetes_patient_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `lifestyle_changes`
--

CREATE TABLE `lifestyle_changes` (
  `ksnum` int(60) NOT NULL,
  `kshnum` int(20) DEFAULT NULL,
  `smoking` text NOT NULL,
  `alcohol_intake` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patient_name` varchar(60) NOT NULL,
  `ksnum` int(60) NOT NULL,
  `kshnum` int(20) DEFAULT NULL,
  `phnum` int(20) DEFAULT NULL,
  `diabetestype` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `dodiagnosis` date NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_name`, `ksnum`, `kshnum`, `phnum`, `diabetestype`, `dob`, `dodiagnosis`, `id`) VALUES
('qwertyu', 122, NULL, NULL, 'Type 1', '1998-09-09', '2018-11-06', 3),
('qwertyu', 120, NULL, NULL, 'Type 1', '1998-09-09', '2018-11-06', 7);

-- --------------------------------------------------------

--
-- Table structure for table `risk_factors`
--

CREATE TABLE `risk_factors` (
  `ksnum` int(60) NOT NULL,
  `kshnum` int(20) DEFAULT NULL,
  `risk_factor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `self_management`
--

CREATE TABLE `self_management` (
  `patient goals` varchar(90) NOT NULL,
  `height` float NOT NULL,
  `weight_target` double NOT NULL,
  `bmi_target` double NOT NULL,
  `weight_mngment` text NOT NULL,
  `nutrition_education` text NOT NULL,
  `dodiscussion` date NOT NULL,
  `ksnum` int(60) NOT NULL,
  `kshnum` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(0, 'the', '$2y$10$fHOiyFA4PEmZwm3xG/A/del3I1G/knXfv4wQOwFuYQ4f8zBu./H8W', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  ADD PRIMARY KEY (`ksnum`),
  ADD UNIQUE KEY `unique` (`ksnum`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`ksnum`);

--
-- Indexes for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD UNIQUE KEY `unique` (`ksnum`);

--
-- Indexes for table `self_management`
--
ALTER TABLE `self_management`
  ADD UNIQUE KEY `unique` (`ksnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  ADD CONSTRAINT `lifestyle_changes_ibfk_1` FOREIGN KEY (`ksnum`) REFERENCES `patient_details` (`ksnum`);

--
-- Constraints for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD CONSTRAINT `risk_factors_ibfk_1` FOREIGN KEY (`ksnum`) REFERENCES `patient_details` (`ksnum`);

--
-- Constraints for table `self_management`
--
ALTER TABLE `self_management`
  ADD CONSTRAINT `self_management_ibfk_1` FOREIGN KEY (`ksnum`) REFERENCES `patient_details` (`ksnum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
