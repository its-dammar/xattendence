-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2021 at 08:48 AM
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
-- Table structure for table `tbl_days`
--

DROP TABLE IF EXISTS `tbl_days`;
CREATE TABLE IF NOT EXISTS `tbl_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_days`
--

INSERT INTO `tbl_days` (`id`, `day`, `status`) VALUES
(4, 'sunday', 1),
(5, 'sunday', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_developers`
--

INSERT INTO `tbl_developers` (`id`, `name`, `company`, `address`, `email`, `qfn`, `position`, `contact`, `experience`, `status`) VALUES
(35, 'Sagar Bohora', 'Xdezo Tenchnologies', 'Sirjana chowk', 'sagar@gmail.com', '+2 pass and half bacholer pass', 'DCO', '908000000008', 'no experience', 1),
(33, 'Regina Munoz', 'Erickson Solomon LLC', 'Ex tempor in non ass', 'quli@mailinator.com', 'Eu nesciunt tempor ', 'Nulla qui soluta id', 'Sit ut adipisci non', 'Et ut Nam optio fug', 1),
(31, 'Orli Chandler', 'Garrett Park LLC', 'Consectetur alias am', 'xahoze@mailinator.com', 'Totam saepe unde aut', 'Corrupti iure a omn', 'Quisquam ipsa earum', 'Consequatur Rerum h', 1),
(28, 'Maile Mccoy', 'Guerrero Carey LLC', 'Quibusdam laudantium', 'dyzeb@mailinator.com', 'Quia fugiat velit et', 'Minima cillum Nam qu', 'Cupiditate laboris v', 'Sunt anim libero iur', 1),
(29, 'Edward Fleming', 'Bradley Shepherd Co', 'Unde non perspiciati', 'powu@mailinator.com', 'Quos culpa sunt rem', 'Consequuntur et volu', 'Laboriosam quos quo', 'Illum omnis corrupt', 1),
(30, 'Dale Hunter', 'Norton and Richards Traders', 'Eveniet ab et natus', 'ladeh@mailinator.com', 'Sint est dolore eum ', 'Autem consectetur de', 'Proident quia offic', 'Voluptates at dolor ', 1),
(24, 'Nehru Whitaker', 'Mccullough and Carter Inc', 'Esse perspiciatis ', 'balevyha@mailinator.com', 'Dolorum tempore vel', 'Repellendus In quas', 'Minus laborum quo ni', 'Ex laboris vel cillu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mattendences`
--

DROP TABLE IF EXISTS `tbl_mattendences`;
CREATE TABLE IF NOT EXISTS `tbl_mattendences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dp_id` int(11) NOT NULL,
  `y_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_months`
--

INSERT INTO `tbl_months` (`id`, `month`, `status`) VALUES
(19, 'january', 1),
(18, 'january', 1),
(15, 'hello3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xdatten`
--

DROP TABLE IF EXISTS `tbl_xdatten`;
CREATE TABLE IF NOT EXISTS `tbl_xdatten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tick` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_years`
--

INSERT INTO `tbl_years` (`id`, `year`, `status`) VALUES
(7, 23423423, 1),
(5, 2323, 1),
(6, 2021, 1),
(8, 2021, 1),
(9, 2021, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
