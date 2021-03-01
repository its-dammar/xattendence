-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2021 at 11:37 AM
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
-- Table structure for table `tbl_attendences`
--

DROP TABLE IF EXISTS `tbl_attendences`;
CREATE TABLE IF NOT EXISTS `tbl_attendences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_developers`
--

INSERT INTO `tbl_developers` (`id`, `name`, `company`, `address`, `email`, `qfn`, `position`, `contact`, `experience`, `status`) VALUES
(19, 'Kasimir Dillon', 'Roy Mills Trading', 'Error est duis exerc', 'goher@mailinator.com', 'Animi fugit atque ', 'Maiores blanditiis d', 'Vel mollit quae lore', 'Aut maxime dolore qu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

DROP TABLE IF EXISTS `tbl_teams`;
CREATE TABLE IF NOT EXISTS `tbl_teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_no` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
