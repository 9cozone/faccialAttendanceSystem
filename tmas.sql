-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2020 at 08:38 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'emeka', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `username`) VALUES
(1, 'chemical');

-- --------------------------------------------------------

--
-- Table structure for table `captures`
--

DROP TABLE IF EXISTS `captures`;
CREATE TABLE IF NOT EXISTS `captures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(33) NOT NULL,
  `time` varchar(33) NOT NULL,
  `username` varchar(33) NOT NULL,
  `department` varchar(33) NOT NULL,
  `course_title` varchar(33) NOT NULL,
  `course_code` varchar(33) NOT NULL,
  `lecturer_name` varchar(33) NOT NULL,
  `reg_number` varchar(22) NOT NULL,
  `level` varchar(33) NOT NULL,
  `status` enum('unchecked','checked') NOT NULL DEFAULT 'unchecked',
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captures`
--

INSERT INTO `captures` (`id`, `date`, `time`, `username`, `department`, `course_title`, `course_code`, `lecturer_name`, `reg_number`, `level`, `status`, `image`) VALUES
(1, 'MONDAY', '8', 'EMEKA', 'COMPUTER', 'COMPUTER ENGINERING', 'COM333', 'CS/H2912E3', 'Year 1', '3', 'unchecked', ''),
(2, '2020-Jan-Tue', '1578384487', 'nikol', 'ACCIDENT & EMERGENCY', 'Computer Engineering', 'com22', 'Engr. Emeka', 'CS/ N2014/R?36', 'Year 1', 'checked', ''),
(3, '2020-Jan-Tue', '1578384623', 'nikol', 'ACCIDENT & EMERGENCY', 'dfasd', 'dfads', 'dfsa', 'adfa', 'Year 1', 'checked', ''),
(4, '2020-Jan-Tue', '1578384755', 'nikol', 'ACCIDENT & EMERGENCY', 'kdjfa', ';fa', 'adjf', ';ad', 'Year 1', 'unchecked', ''),
(5, '2020-Jan-Tue', '1578384845', 'nikol', 'AGRICULTURE ECONOMICS & EXTENSION', 'dfa', 'adfa', 'adfa', 'adfa', 'Year 1', 'unchecked', ''),
(6, '2020-Jan-Tue', '1578384931', 'nikol', 'ANATOMY', 'adfa', 'adf;', 'adfa', 'adf', 'Year 1', 'checked', ''),
(7, '2020-Jan-Tue', '1578384997', 'nikol', 'ACCIDENT & EMERGENCY', 'dafads', 'adsf', 'adf', 'adfsdf', 'Year 1', 'unchecked', ''),
(8, '2020-Jan-Tue', '1578414760', 'nikol', 'ANATOMY', 'dd', 'dd', 'dd', 'dd', 'Year 1', 'unchecked', ''),
(9, '2020-Jan-Tue', '1578418441', 'admin', 'ACCIDENT & EMERGENCY', 'dfa', 'traf', 'Engr. Emeka', 'CS/ N2014/R?36', 'Year 4', 'checked', ''),
(10, '2020-Jan-Tue', '1578418930', 'admin', 'ACCIDENT & EMERGENCY', 'comp', 'com22', 'emeka', 'CS/ N2014/R?36', 'Year 2', 'checked', '20-01-07.png'),
(11, '2020-Jan-Tue', '1578419062', 'admin', 'ACCIDENT & EMERGENCY', 'comp', 'COM331', 'com', 'CS/ N2014/R?36', 'Year 1', 'checked', '5e14c376e2bb6.png'),
(12, '2020-Jan-Tue', '1578419269', 'admin', 'ACCIDENT & EMERGENCY', 'Computer Engineering', 'COM331', 'Engr. Emeka', 'CS/ N2014/R?36', 'Year 1', 'unchecked', '5e14c445b9bf5.png'),
(13, '2020-Jan-Thu', '1578568974', 'nikol', 'ACCIDENT & EMERGENCY', 'Algebra', 'COM331', 'Achi', 'CS/H2019/224', 'Year 1', 'checked', '5e170d0ea7dfc.png'),
(14, '2020-Jan-Thu', '1578574779', 'nikol', 'COMMUNITY MEDICINE', 'Meta physics', ' MTE22', 'Nwaosu', 'CS/ N2014/R?36', 'Year 4', 'unchecked', '5e1723bb4abcf.png'),
(15, '2020-Jan-Thu', '1578574854', 'nikol', 'ACCIDENT & EMERGENCY', 'Computer Engineering', 'COM331', 'Nwaosu', 'CS/ N2014/R?36', 'Year 1', 'unchecked', '5e172406a0226.png'),
(16, '2020-Jan-Thu', '1578594470', 'nikol', 'APPLIED BIOLOGY & BIOTECHNOLOGY', 'anatomy', 'ACC334', 'ifuna', 'CS/ N2014/R?36', 'Year 1', 'checked', '5e1770a673422.png'),
(17, '2020-Jan-Thu', '1578599155', 'nikol', 'COMMUNITY MEDICINE', 'rtwt', 'adf', 'adf', 'adfa', 'Year 4', 'unchecked', '5e1782f392274.png'),
(18, '2020-Jan-Thu', '1578599783', 'frank', '', '', '', '', '', '', 'unchecked', '5e17856807f91.png'),
(19, '2020-Jan-Thu', '1578600408', 'frank', 'COMPUTER SCIENCE', 'Computer Engineering', 'COM331', 'Engr. Emeka', 'CS/H2019/R/003', 'Year 1', 'unchecked', '5e1787d8cee09.png');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(111) NOT NULL,
  `average_time` varchar(111) NOT NULL,
  `reg_number` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(100) NOT NULL,
  `lecturer` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `remark` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `username`, `average_time`, `reg_number`, `date`, `course`, `lecturer`, `year`, `course_code`, `remark`) VALUES
(1, '', '23', 'cs12', '2019-10-15', 'data', 'achi', 'Year ONe', 'com111', 'good'),
(2, 'nikol', '5:0pm', 'cs/h2018/22', '2016-11-06', 'computer science', 'Mr Ozioko', 'Year One', 'CSC 101', 'good Student');

-- --------------------------------------------------------

--
-- Table structure for table `snapshot`
--

DROP TABLE IF EXISTS `snapshot`;
CREATE TABLE IF NOT EXISTS `snapshot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` int(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `reg_number` varchar(100) NOT NULL,
  `address` mediumtext NOT NULL,
  `sex` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `surname`, `firstname`, `lastname`, `email`, `state`, `phone_number`, `password`, `department`, `level`, `reg_number`, `address`, `sex`) VALUES
(1, 'nikol', '', '', '', '', '', '12345', '12345', '', '', '', '', ''),
(2, 'nikomec', 'ezeh', 'emeka', 'nicholas', 'emek@gmail.com', 'Enugu', '081488697988', '12345', 'ACCIDENT & EMERGENCY', 'Year 1', 'cs/n2018/002', '24 dedin', 'Male'),
(3, 'emma', 'Amada', 'Emilia', 'Eze', 'anyimnicholas0@gmail.com', 'Enugu', '0838233434', '12345', 'BANKING & FINANCE', 'Year 1', 'cs/n2018/002', 'No 22 edinburgh enugu', 'Female'),
(4, 'alami', 'ebenza', 'ebuka', 'amaka', 'anyimnichhholas0@gmail.com', 'Enugu', '03843434', '12345', 'COMPUTER ENGINEERING', 'Year 3', 'c', 'enugu', 'Female'),
(5, 'aba', 'aba', 'ifeoma', 'comanus', '08148869798', 'Enugu', '32832', '12345', 'ACCIDENT & EMERGENCY', 'Year 1', 'cs/n2018/002', 'No 22 edinburgh enugu', 'Female'),
(6, 'admin', 'Anyim', 'NIcholas', 'sunday', 'anyimnicholas@gmail.com', 'Enugu', '03843434', '123456', 'ACCIDENT & EMERGENCY', 'Year 3', 'CS/H2019/224', 'aba', 'Male'),
(7, 'frank', 'Anyim', 'Nicholas', 'Frankly', 'franking@gmail.com', 'Enugu', '081488696978', '123456', 'COMPUTER SCIENCE', 'Year 1', 'CS/H2019/R/003', '28 Edinbugh enugu state', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `webcam`
--

DROP TABLE IF EXISTS `webcam`;
CREATE TABLE IF NOT EXISTS `webcam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcam`
--

INSERT INTO `webcam` (`id`, `image`) VALUES
(3, '20-01-06.png'),
(4, '20-01-06.png'),
(5, '20-01-06.png'),
(6, '20-01-06.png'),
(7, '20-01-06.png'),
(8, '20-01-06.png'),
(9, '20-01-06.png'),
(10, '20-01-06.png'),
(11, '20-01-06.png'),
(12, '20-01-06.png'),
(13, '20-01-06.png'),
(14, '20-01-06.png'),
(15, '20-01-06.png'),
(16, '20-01-06.png'),
(17, '20-01-06.png'),
(18, '20-01-06.png'),
(19, '20-01-06.png'),
(20, '20-01-06.png'),
(21, '20-01-06.png'),
(22, '20-01-06.png'),
(23, 'Emeka'),
(24, 'EMEKA'),
(25, 'EMEKA'),
(26, '20-01-07.png'),
(27, '20-01-07.png'),
(28, '20-01-07.png'),
(29, '20-01-07.png'),
(30, '20-01-07.png'),
(31, '20-01-07.png'),
(32, '20-01-07.png'),
(33, '20-01-07.png'),
(34, '20-01-07.png'),
(35, '20-01-07.png'),
(36, '20-01-07.png'),
(37, '20-01-07.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
