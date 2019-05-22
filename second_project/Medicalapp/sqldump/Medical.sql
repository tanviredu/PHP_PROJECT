-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2019 at 09:21 PM
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
-- Database: `Medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `doctorapp` varchar(150) NOT NULL,
  `department` varchar(11) NOT NULL,
  `Time` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`fname`, `lname`, `email`, `contact`, `doctorapp`, `department`, `Time`) VALUES
('Tanvir rahman', 'ornob', '', 'cda', 'mohibul', 'Medecin', '3:00'),
('nizam', 'Uddin', '', 'ert', 'hasib', 'Emergency', '3:40'),
('Azad', 'hayder', '', 'ewr/22', 'Abul', 'Surgery', '3:22'),
('pavel', 'hayder', '', 'rr/4', 'babu', 'Skin', '8:00'),
('naila', 'hasan', '', 'ret/324', 'mohibul', 'Medecin', '1:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `reg_no` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`fname`, `lname`, `reg_no`, `title`) VALUES
('Tanvir', 'Rahman', '1122', 'Pr'),
('Abul', 'Hasnar', '3333', 'lc'),
('jashim', 'uddin', '3322', 'lr'),
('hasib', 'uddin', '6666', 'pr'),
('babu', 'sikder', '7654', 'lr'),
('mohibul', 'kabir', '1111', 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`username`, `password`) VALUES
('admin', 'admin123'),
('root', 'root123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
