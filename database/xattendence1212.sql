-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2021 at 06:51 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xattendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

DROP TABLE IF EXISTS `tbl_attendance`;
CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `developers_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `developers_id`, `year_id`, `month_id`, `day_id`, `status`) VALUES
(93, 38, 2021, 3, 4, 1),
(94, 33, 2021, 3, 4, 1),
(86, 24, 2021, 3, 4, 1),
(87, 28, 2021, 3, 4, 1),
(88, 37, 2021, 3, 4, 1),
(92, 39, 2021, 3, 4, 1),
(95, 36, 2021, 3, 4, 1),
(96, 40, 2021, 3, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

DROP TABLE IF EXISTS `tbl_days`;
CREATE TABLE IF NOT EXISTS `tbl_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_days`
--

INSERT INTO `tbl_days` (`id`, `day`, `status`) VALUES
(8, 'Tuesday', 1),
(7, 'Monday', 1),
(6, 'sunday', 1),
(9, 'Wednesday', 1),
(10, 'Thrusday', 1),
(11, 'Friday', 1),
(12, 'Saturday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_developers`
--

DROP TABLE IF EXISTS `tbl_developers`;
CREATE TABLE IF NOT EXISTS `tbl_developers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qfn` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_developers`
--

INSERT INTO `tbl_developers` (`id`, `name`, `company`, `address`, `email`, `qfn`, `position`, `contact`, `experience`, `status`) VALUES
(38, 'Dinesh Thapa', 'XDezo Technologies', 'Pokhara', 'dinesh@gmail.com', 'Master ', 'CEO', '9825174992', '10', 1),
(39, 'Sandesh Poudel', 'XDezo Technologies', 'Pokhara', 'sandeshpoudel73@gmail.com', 'Inter in Law, BBS 2nd year, Life Counselor', 'CMO', '9846043520', '3 years', 1),
(40, 'Santosh Baniya', 'XDezo Technologies', 'Pokhara', 'santosh@gmail.com', 'fged', 'fgbhfhg', '9825174992', 'ghj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_months`
--

DROP TABLE IF EXISTS `tbl_months`;
CREATE TABLE IF NOT EXISTS `tbl_months` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_months`
--

INSERT INTO `tbl_months` (`id`, `month`, `status`) VALUES
(24, 'May', 1),
(21, 'Febuary', 1),
(22, 'March', 1),
(23, 'April', 1),
(20, 'january', 1),
(25, 'June', 1),
(26, 'July', 1),
(27, 'Augest', 1),
(28, 'September', 1),
(29, 'Octumber', 1),
(30, 'November', 1),
(31, 'December', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_years`
--

DROP TABLE IF EXISTS `tbl_years`;
CREATE TABLE IF NOT EXISTS `tbl_years` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_years`
--

INSERT INTO `tbl_years` (`id`, `year`, `status`) VALUES
(14, 2004, 1),
(13, 2003, 1),
(12, 2002, 1),
(11, 2001, 1),
(10, 2000, 1),
(15, 2006, 1),
(16, 2007, 1),
(17, 2008, 1),
(18, 2009, 1),
(19, 2010, 1),
(20, 2011, 1),
(21, 2012, 1),
(22, 2013, 1),
(23, 2014, 1),
(24, 2015, 1),
(25, 2016, 1),
(26, 2017, 1),
(27, 2018, 1),
(28, 2019, 1),
(29, 2020, 1),
(30, 2021, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
