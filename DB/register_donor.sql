-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220521.3d3010916e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 05:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_donor`
--

CREATE TABLE `register_donor` (
  `did` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `have_u_ever_donated_blood` varchar(255) NOT NULL,
  `how_many_times` varchar(255) NOT NULL,
  `last_date` date NOT NULL,
  `have_u_ever_had_difficulties` varchar(255) NOT NULL,
  `difficulties` varchar(255) NOT NULL,
  `doctor_advices` varchar(255) NOT NULL,
  `diseases` varchar(255) NOT NULL,
  `medications` varchar(255) NOT NULL,
  `surgeries` varchar(255) NOT NULL,
  `pregnant_abortion` varchar(255) NOT NULL,
  `hepatities` varchar(255) NOT NULL,
  `typoid` varchar(255) NOT NULL,
  `injections` varchar(255) NOT NULL,
  `new-piercings` varchar(255) NOT NULL,
  `imprisoned` varchar(255) NOT NULL,
  `partner_gone_aboard` varchar(3) NOT NULL,
  `donated_blood_to_partner` varchar(3) NOT NULL,
  `malaria` varchar(3) NOT NULL,
  `dengue` varchar(3) NOT NULL,
  `chickenpox` varchar(3) NOT NULL,
  `tooth_extractions` varchar(3) NOT NULL,
  `antibiotics` varchar(3) NOT NULL,
  `others` varchar(20) NOT NULL,
  `partner_belongs_to_others` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_donor`
--
ALTER TABLE `register_donor`
  ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_donor`
--
ALTER TABLE `register_donor`
  MODIFY `did` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



