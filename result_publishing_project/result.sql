-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2018 at 01:32 PM
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
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`username`, `password`) VALUES
('admin', 'admin'),
('backup', 'backup'),
('hello_admin', 'hello_admin'),
('pass_admin', 'pass_admin');

-- --------------------------------------------------------

--
-- Table structure for table `ssc`
--

CREATE TABLE `ssc` (
  `name` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `roll` int(30) NOT NULL,
  `school` varchar(30) NOT NULL,
  `board` varchar(30) NOT NULL,
  `gpa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc`
--

INSERT INTO `ssc` (`name`, `father`, `roll`, `school`, `board`, `gpa`) VALUES
('Md .Tanvir Rahman', 'Md. Ataur Rahman', 143000410, 'Tsp complex secondary School', 'Chittagong', '5.00'),
('Hasnat Rabi', 'Abul Hossen', 134000872, 'Tsp complex secondary School', 'Chittagong', '4.84'),
('Tonmoy Kumar', 'Bipul Kumar', 154000876, 'Navy School', 'Dhaka', '3.56'),
('Halima Khatun', 'abul kashem', 12608798, 'BAF shahin', 'Dinajpur', '4.67'),
('Tanvir Faisal', 'kaium Hossen', 131000310, 'Still mill ', 'Sylhet', '5.00'),
('Imran Khan', 'Faisal Khan', 123000210, 'Agrabad Boys ', 'Rajshahi', '2.00'),
('Imam Hossen', 'Abul Hosssen', 111000110, 'Ideal High School', 'Madrasah', '4.33'),
('Ehsan uddin', 'Rokibul Kabir', 161000310, 'Kathgar High School', 'Chittagong', '5.00'),
('Akib Ahmead', 'Firoz Ahmead', 132000320, 'ChawkBazar', 'Chittagong', '3.22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
