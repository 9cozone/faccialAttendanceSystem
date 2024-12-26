-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2020 at 09:24 AM
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
(1, 'iFY3254', '123456');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captures`
--

INSERT INTO `captures` (`id`, `date`, `time`, `username`, `department`, `course_title`, `course_code`, `lecturer_name`, `reg_number`, `level`, `status`, `image`) VALUES
(1, '2020-Jan-Tue', '1579012045', 'ify', 'COMPUTER SCIENCE', 'software enginereering', 'Csc 333', 'Mr Aasowga', '170275', 'Year 1', 'checked', '5e1dcfcd902e6.png'),
(2, '2020-Jan-Tue', '1579014100', 'Royal', 'COMPUTER SCIENCE', 'numerical method', 'csc315', 'Mr Ekemeize', '170276', 'Year 4', 'unchecked', '5e1dd7d45bf74.png'),
(4, '2020-Jan-Wed', '1579123666', 'Prof', 'COMPUTER SCIENCE', 'numerical method', 'csc315', 'Mr Ekemeize', '17078', 'Year 1', 'checked', '5e1f83d283299.png');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `surname`, `firstname`, `lastname`, `email`, `state`, `phone_number`, `password`, `department`, `level`, `reg_number`, `address`, `sex`) VALUES
(1, 'ify', 'Ejiifegbu', 'Ifeyinwa', 'christiana', 'tessy@gmail.com', 'Enugu', '08100403254', '12345678', 'COMPUTER SCIENCE', 'Year 1', '170275', '25', 'Female'),
(2, 'Royal', 'Ejegbu', 'Ifeyinwa', 'christiana', 'Ifeyinwa@gmail.com', 'Enugu', '08100403254', '1234567', 'COMPUTER SCIENCE', 'Year 4', '170276', '25ph', 'Female'),
(3, 'emeka', 'Anyim', 'Nicholas', 'Emeka', 'anyidmnicholas0@gmail.com', 'Enugu', '081488696978', '123456', 'COMPUTER ENGINEERING', 'Year 1', '17076', '28 Edinbugh enugu state', 'Male'),
(4, 'Prof', 'Ogbuani', 'Samuel', 'Uchnna', 'samuel@gmail.com', 'Enugu', '08130663807', '33570', 'COMPUTER SCIENCE', 'Year 1', '17078', 'charity ', 'Male');

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
