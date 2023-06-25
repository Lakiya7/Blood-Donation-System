-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220521.3d3010916e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:01 PM
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
-- Table structure for table `blood_request_form`
--

CREATE TABLE `blood_request_form` (
  `form_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bloodtype` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `specialnotes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_request_form`
--

INSERT INTO `blood_request_form` (`form_no`, `name`, `age`, `phone`, `gender`, `email`, `bloodtype`, `date`, `specialnotes`) VALUES
(1, 'A.S.H.Dissanayake', 0, 2147483647, 'choice', 'shiharahimalshi@gmail.com', 'Blo', '0000-00-00', ' ');

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

-- --------------------------------------------------------

--
-- Table structure for table `register_patient`
--

CREATE TABLE `register_patient` (
  `PID` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `birthday` date NOT NULL,
  `nic` int(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `bloodType` varchar(3) NOT NULL,
  `Gname` varchar(255) NOT NULL,
  `Gnic` int(12) NOT NULL,
  `Gaddress` varchar(255) NOT NULL,
  `Gemail` varchar(255) NOT NULL,
  `Gphone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_patient`
--

INSERT INTO `register_patient` (`PID`, `name`, `gender`, `age`, `birthday`, `nic`, `address`, `email`, `phone`, `bloodType`, `Gname`, `Gnic`, `Gaddress`, `Gemail`, `Gphone`) VALUES
(1, 'Shihara', 'choice', 0, '0000-00-00', 0, 'j', 'shiharahimalshi@gmail.com', 0, 'Blo', '', 0, '', '', 0),
(2, '', 'choice', 0, '0000-00-00', 0, '', '', 0, 'Blo', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_a_date`
--

CREATE TABLE `reserve_a_date` (
  `DID` int(10) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `have_you_ever_donated_blood` varchar(255) NOT NULL,
  `no_of_donations` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserve_a_date`
--

INSERT INTO `reserve_a_date` (`DID`, `donor_name`, `age`, `address`, `phone`, `gender`, `email`, `blood_type`, `have_you_ever_donated_blood`, `no_of_donations`) VALUES
(1, '', 0, '16/8,LUCASWATTA,MARAPOLA,VEYANGODA', 2147483647, '', 'shiharahimalshi@gmail.com', 'Blood Type', '', 'No of Donations'),
(2, '', 0, '16/8,LUCASWATTA,MARAPOLA,VEYANGODA', 2147483647, '', 'shiharahimalshi@gmail.com', 'Blood Type', '', 'No of Donations'),
(3, '', 0, '16/8,LUCASWATTA,MARAPOLA,VEYANGODA', 2147483647, '', 'shiharahimalshi@gmail.com', 'Blood Type', '', 'No of Donations'),
(4, '', 0, '16/8,LUCASWATTA,MARAPOLA,VEYANGODA', 2147483647, 'choice1', 'shiharahimalshi@gmail.com', 'Blood Type', '', 'No of Donations'),
(5, '', 0, '16/8,LUCASWATTA,MARAPOLA,VEYANGODA', 2147483647, 'choice1', 'shiharahimalshi@gmail.com', 'Blood Type', '', 'No of Donations'),
(6, '', 0, '16/8,LUCASWATTA,MARAPOLA,VEYANGODA', 2147483647, 'choice1', 'shiharahimalshi@gmail.com', 'Blood Type', 'choice1', 'No of Donations'),
(7, '', 0, '16/8,LUCASWATTA,MARAPOLA,VEYANGODA', 2147483647, 'choice1', 'shiharahimalshi@gmail.com', 'Blood Type', 'choice1', 'No of Donations'),
(8, 'sgh', 0, ' ', 0, 'choice1', '', 'Blood Type', 'choice1', 'No of Donations');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_a_guide`
--

CREATE TABLE `reserve_a_guide` (
  `guidance_no` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `special_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserve_a_guide`
--

INSERT INTO `reserve_a_guide` (`guidance_no`, `name`, `phone`, `email`, `special_notes`) VALUES
(1, 'Shihara', '0000000000', 'shiharahimalshi@gmail.com', ' '),
(2, 'Shihara himalshi', '0000000000', 'shiharahimalshi@gmail.com', ' '),
(3, 'Shihara himalshi diss', '0000000000', 'shiharahimalshi@gmail.com', ' '),
(4, 'WIJESINGHAGE DONA IMASHA KAVINDI WIJESINGHA', '', '', ' '),
(5, 'A.S.H.Dissanayake', '+107190450', 'shiharahimalshi@gmail.com', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_request_form`
--
ALTER TABLE `blood_request_form`
  ADD PRIMARY KEY (`form_no`);

--
-- Indexes for table `register_donor`
--
ALTER TABLE `register_donor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `register_patient`
--
ALTER TABLE `register_patient`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `reserve_a_date`
--
ALTER TABLE `reserve_a_date`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `reserve_a_guide`
--
ALTER TABLE `reserve_a_guide`
  ADD PRIMARY KEY (`guidance_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_request_form`
--
ALTER TABLE `blood_request_form`
  MODIFY `form_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_donor`
--
ALTER TABLE `register_donor`
  MODIFY `did` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_patient`
--
ALTER TABLE `register_patient`
  MODIFY `PID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reserve_a_date`
--
ALTER TABLE `reserve_a_date`
  MODIFY `DID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reserve_a_guide`
--
ALTER TABLE `reserve_a_guide`
  MODIFY `guidance_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



