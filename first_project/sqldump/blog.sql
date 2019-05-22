-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2019 at 06:37 AM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `username` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `des` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`username`, `title`, `des`, `date`) VALUES
('admin', 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lectus arcu bibendum at varius vel. Id cursus metus aliquam eleifend mi. Cursus risus at ultrices mi tempus imperdiet. Urna duis convallis convallis tellus id interdum velit. Ut eu sem integer vitae. Dignissim convallis aenean et tortor at risus viverra adipiscing. In aliquam sem fringilla ut morbi tincidunt augue interdum. Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis. Magna sit amet purus gravida quis blandit turpis. Tempor orci dapibus ultrices in iaculis nunc sed augue. Ut pharetra sit amet aliquam id. Tortor vitae purus faucibus ornare suspendisse. Pellentesque habitant morbi tristique senectus et netus. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae.\r\n\r\nPosuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Enim facilisis gravida neque convallis. Blandit massa enim nec dui nunc mattis enim. Arcu cursus euismod quis viverra nibh cras. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Et netus et malesuada fames ac turpis egestas sed. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Purus viverra accumsan in nisl nisi scelerisque. Est ante in nibh mauris. Id porta nibh venenatis cras sed felis eget velit aliquet. Cursus eget nunc scelerisque viverra mauris. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant.', '2019-05-12 02:53:49'),
('ornob', 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lectus arcu bibendum at varius vel. Id cursus metus aliquam eleifend mi. Cursus risus at ultrices mi tempus imperdiet. Urna duis convallis convallis tellus id interdum velit. Ut eu sem integer vitae. Dignissim convallis aenean et tortor at risus viverra adipiscing. In aliquam sem fringilla ut morbi tincidunt augue interdum. Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis. Magna sit amet purus gravida quis blandit turpis. Tempor orci dapibus ultrices in iaculis nunc sed augue. Ut pharetra sit amet aliquam id. Tortor vitae purus faucibus ornare suspendisse. Pellentesque habitant morbi tristique senectus et netus. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae.\r\n\r\nPosuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Enim facilisis gravida neque convallis. Blandit massa enim nec dui nunc mattis enim. Arcu cursus euismod quis viverra nibh cras. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Et netus et malesuada fames ac turpis egestas sed. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Purus viverra accumsan in nisl nisi scelerisque. Est ante in nibh mauris. Id porta nibh venenatis cras sed felis eget velit aliquet. Cursus eget nunc scelerisque viverra mauris. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant.', '2019-05-12 02:54:13'),
('admin', 'aaaaaaa', 'aaaaaaaaaa', '0000-00-00 00:00:00'),
('admin', 'ssssssssssssss', 'sssssssssssss', '0000-00-00 00:00:00'),
('admin', 'ttt', 'titi', '2019-05-12 04:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `status`) VALUES
('admin', 'admin123', 'admin'),
('tanvir', '1122', 'user'),
('pirate', '1122', 'user'),
('ornob', '1122', 'admin'),
('ornob123', '1122', ''),
('huddin', '2233', ''),
('huddin', '2233', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fullname` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `repassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullname`, `username`, `password`, `repassword`) VALUES
('Tanvir Rahman', 'pirate123', '1122', '1122'),
('ornob tanvir', 'ornob123', '1122', '1122'),
('ornobtanvir', 'ornob123', '1122', '1122'),
('ornobtanvir', 'ornob123', '1122', '1122'),
('ornobtanvir', 'ornob123', '1122', '1122'),
('ornobtanvir', 'ornob123', '1122', '1122'),
('ornobtanvir', 'ornob123', '1122', '1122'),
('Hasib uddin', 'huddin', '2233', '2233'),
('Hasib uddin', 'huddin', '2233', '2233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD KEY `username` (`username`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
