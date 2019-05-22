-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2019 at 10:12 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `appoinment_id` int(150) NOT NULL,
  `doctor_name` varchar(150) NOT NULL,
  `patient_name` varchar(150) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appoinment_id`, `doctor_name`, `patient_name`, `Time`) VALUES
(1, 'Brian	Nash', 'Amy Vaughan', '2019-05-19 08:11:52'),
(2, 'Connor	Morgan', 'Colin	Fraser', '2019-05-19 08:11:52'),
(3, 'Dorothy	Vaughan', 'Leonard	Piper', '2019-05-19 08:11:52'),
(4, 'Jane Abraham', 'Leonard	Piper', '2019-05-19 08:11:52'),
(5, 'Joanne	Lawrence', 'Pippa	Peake', '2019-05-19 08:11:52'),
(6, 'Tim Powell', 'William	Miller', '2019-05-19 08:11:52'),
(7, 'Jane Abraham', 'Leonard	Piper', '2019-05-19 08:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `Department_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`Department_name`) VALUES
('Accident and emergency'),
('Anaesthetics'),
('Breast screening'),
('Cardiology '),
('Chaplaincy'),
('Critical care'),
('Diagnostic imaging'),
('Ear nose and throat (ENT)');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `name` varchar(150) NOT NULL,
  `department` varchar(150) NOT NULL,
  `post` varchar(150) NOT NULL,
  `mobile` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`name`, `department`, `post`, `mobile`) VALUES
('Brian	Nash', 'Ear nose and throat (ENT)', 'Proff', '0002'),
('Connor	Morgan', 'Accident and emergency', 'Proff', '0001'),
('Dorothy	Vaughan', 'Anaesthetics', 'Prof', '0002'),
('Jane Abraham', 'Anaesthetics', 'Lec', '0008'),
('Joanne	Lawrence', 'Cardiology ', 'Prof', '0005'),
('Stephen	Arnold', 'Breast screening', 'proff', '0005'),
('Tim Powell', 'Diagnostic imaging', 'Proff', '0006');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `doctor_name` varchar(150) NOT NULL,
  `mobile` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `name`, `doctor_name`, `mobile`) VALUES
(1, 'Pippa	Peake', 'Brian	Nash', '00002'),
(2, 'Isaac	Wallace', 'Dorothy	Vaughan', '0005'),
(3, 'William	Miller', 'Jane Abraham', '23432423'),
(5, 'Leonard	Piper', 'Jane Abraham', '345435345'),
(7, 'Colin	Fraser', 'Dorothy	Vaughan', '234324'),
(8, 'Amy Vaughan', 'Jane Abraham', '5345345'),
(9, 'Pippa Peake', 'Stephen	Arnold', '345435');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin123'),
('pirate', 'pirate123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`appoinment_id`),
  ADD KEY `doctor_name` (`doctor_name`),
  ADD KEY `patient_name` (`patient_name`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD UNIQUE KEY `Department_name` (`Department_name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `doctor_name` (`doctor_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `appoinment_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`doctor_name`) REFERENCES `doctor` (`name`),
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`patient_name`) REFERENCES `patient` (`name`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`department`) REFERENCES `Department` (`Department_name`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`doctor_name`) REFERENCES `doctor` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
