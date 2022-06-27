-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2016 at 12:39 AM
-- Server version: 5.5.16
-- PHP Version: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ocss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(45) NOT NULL,
  `password` varchar(221) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `id` varchar(32) NOT NULL,
  `faculty` varchar(42) NOT NULL,
  `department` varchar(32) NOT NULL,
  `acount_type` varchar(42) NOT NULL,
  `email` varchar(43) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `updated` varchar(34) NOT NULL,
  PRIMARY KEY (`user_name`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`, `full_name`, `id`, `faculty`, `department`, `acount_type`, `email`, `phone`, `updated`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'magnaw', '1221', 'FNCs', 'computer', 'admin', 'gergito2@gmail.com', '0932782826', 'yes'),
('cncs', 'd58c3659a7b4c66ccec09a492a451402', 'faculty head', '1256', 'FNCS', '', 'faculty dean', 'cncs@gmail.com', '+251932782', 'yes'),
('composa', '1aaab2b58e7d9915401ba26e17cfc368', 'yoseph Berihanue', '009', 'FNCS', 'COMPUTER SCIENCE', 'department dean', 'composa@gmail.com', '0932782826', 'yes'),
('facilo', '0e15eac8ca30dad2937b6543d2a45629', 'Facilw Alemu', 'gur1234', 'FNCS', 'COMPUTER SCIENCE', 'instructor', '', '', 'no'),
('gerg', '4abdaa16c2eb06d689ddd7d835e76bee', 'Gergito Kusse', '1174/05', 'FNCS', 'COMPUTER SCIENCE', 'instructor', 'gerg@gmail.com', '09325788', 'yes'),
('gergmagnaw', '9f6e0b233033f10fc19674dbb67e08ba', 'Gergitoo kussee', '4554', 'MEDICEN', 'CYCATOR', 'department dean', 'gergito.k@gmail.com', '+251976543234', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `back_up`
--

CREATE TABLE IF NOT EXISTS `back_up` (
  `full_name` varchar(89) NOT NULL,
  `id` varchar(89) NOT NULL,
  `account_type` varchar(78) NOT NULL,
  `user_name` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `campus_name` varchar(32) NOT NULL,
  `location` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`campus_name`, `location`) VALUES
('TEDDY CAMPUS', 'marak'),
('MARAKI CAMPUS', 'maraki kebele'),
('GC', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `faculty` varchar(90) NOT NULL,
  `department` varchar(90) NOT NULL,
  `semister` varchar(90) NOT NULL,
  `course_title` varchar(90) NOT NULL,
  `course_code` varchar(90) NOT NULL,
  `credite_hour` varchar(90) NOT NULL,
  `instructor` varchar(90) NOT NULL,
  `year` varchar(90) NOT NULL,
  `type` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`faculty`, `department`, `semister`, `course_title`, `course_code`, `credite_hour`, `instructor`, `year`, `type`) VALUES
('FNCS', 'INFORMATION SCIENCE', 'first semister', 'infosa one', '1232', '2', 'Kebede Kebyhu', 'First Year', 'classroom schedule'),
('FNCS', 'INFORMATION SCIENCE', 'first semister', 'Introduction to info', 'info12', '3', 'Geremu Kusse duba', 'First Year', 'classroom schedule'),
('FNCS', 'INFORMATION SCIENCE', 'first semister', 'java', '323', '4', 'Abebe Mengistu', 'Second Year', 'classroom schedule'),
('FNCS', 'INFORMATION SCIENCE', 'first semister', 'ip', '4346', '4', 'Earmi Shemisu', 'Second Year', 'classroom schedule'),
('FNCS', 'INFORMATION SCIENCE', 'first semister', 'indutrial project', '4345', '1', 'Geremu Kusse duba', 'Thrid Year', 'classroom schedule'),
('FNCS', 'INFORMATION SCIENCE', 'first semister', 'advanced database', 'yu78', '3', 'Kebede Kebyhu', 'Thrid Year', 'classroom schedule');

-- --------------------------------------------------------

--
-- Table structure for table `course_information`
--

CREATE TABLE IF NOT EXISTS `course_information` (
  `faculty` varchar(90) NOT NULL,
  `department` varchar(43) NOT NULL,
  `course_title` varchar(32) NOT NULL,
  `course_code` varchar(32) NOT NULL,
  `credite_houre` varchar(32) NOT NULL,
  `instructor` varchar(32) NOT NULL,
  `year` varchar(32) NOT NULL,
  `section` varchar(32) NOT NULL,
  `dt` varchar(32) NOT NULL,
  PRIMARY KEY (`dt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ddt`
--

CREATE TABLE IF NOT EXISTS `ddt` (
  `id` varchar(20) NOT NULL,
  `faculty` varchar(80) NOT NULL,
  `department` varchar(30) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `room` varchar(30) NOT NULL,
  `time_interval` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_manager`
--

CREATE TABLE IF NOT EXISTS `department_manager` (
  `full_name` varchar(66) NOT NULL,
  `id` varchar(68) NOT NULL,
  `department` varchar(78) NOT NULL,
  `faculty` varchar(90) NOT NULL,
  `status` varchar(78) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_manager`
--

INSERT INTO `department_manager` (`full_name`, `id`, `department`, `faculty`, `status`) VALUES
('YOSEPH BERIHANUE', '009', 'COMPUTER SCIENCE', 'FNCS', 'phd'),
('tibebu selemo', 'gur1234', 'INFORMATION SCIENCE', 'FNCS', 'instructor'),
('magnaw1 magnaw2', '090934', 'COMPUTER SCIENCE', 'FNCS', 'student'),
('facile alemu', 'gur', 'IT', 'FNCS', 'docter'),
('Gergitoo kussee', '4554', 'CYCATOR', 'MEDICEN', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `dt`
--

CREATE TABLE IF NOT EXISTS `dt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty` varchar(89) NOT NULL,
  `department` varchar(30) NOT NULL,
  `day` varchar(23) NOT NULL,
  `time` varchar(23) NOT NULL,
  `room` varchar(23) NOT NULL,
  `time_interval` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1476 ;

--
-- Dumping data for table `dt`
--

INSERT INTO `dt` (`id`, `faculty`, `department`, `day`, `time`, `room`, `time_interval`) VALUES
(1426, 'MEDICEN', 'CYCATOR', 'Monday', '2:00-4:00', 'G-10 D-1', 2),
(1427, 'MEDICEN', 'CYCATOR', 'Tuesday', '2:00-4:00', 'G-10 D-1', 2),
(1428, 'MEDICEN', 'CYCATOR', 'Wednesday', '2:00-4:00', 'G-10 D-1', 2),
(1429, 'MEDICEN', 'CYCATOR', 'Thursday', '2:00-4:00', 'G-10 D-1', 2),
(1430, 'MEDICEN', 'CYCATOR', 'Friday', '2:00-4:00', 'G-10 D-1', 2),
(1431, 'MEDICEN', 'CYCATOR', 'Monday', '4:00-6:00', 'G-10 D-1', 2),
(1432, 'MEDICEN', 'CYCATOR', 'Tuesday', '4:00-6:00', 'G-10 D-1', 2),
(1433, 'MEDICEN', 'CYCATOR', 'Wednesday', '4:00-6:00', 'G-10 D-1', 2),
(1434, 'MEDICEN', 'CYCATOR', 'Thursday', '4:00-6:00', 'G-10 D-1', 2),
(1435, 'MEDICEN', 'CYCATOR', 'Friday', '4:00-6:00', 'G-10 D-1', 2),
(1436, 'MEDICEN', 'CYCATOR', 'Monday', '8:00-10:00', 'G-10 D-1', 2),
(1437, 'MEDICEN', 'CYCATOR', 'Tuesday', '8:00-10:00', 'G-10 D-1', 2),
(1438, 'MEDICEN', 'CYCATOR', 'Wednesday', '8:00-10:00', 'G-10 D-1', 2),
(1439, 'MEDICEN', 'CYCATOR', 'Thursday', '8:00-10:00', 'G-10 D-1', 2),
(1440, 'MEDICEN', 'CYCATOR', 'Friday', '8:00-10:00', 'G-10 D-1', 2),
(1441, 'MEDICEN', 'CYCATOR', 'Friday', '7:00-8:00', 'G-10 D-1', 1),
(1442, 'MEDICEN', 'CYCATOR', 'Thursday', '7:00-8:00', 'G-10 D-1', 1),
(1443, 'MEDICEN', 'CYCATOR', 'Wednesday', '7:00-8:00', 'G-10 D-1', 1),
(1444, 'MEDICEN', 'CYCATOR', 'Tuesday', '7:00-8:00', 'G-10 D-1', 1),
(1445, 'MEDICEN', 'CYCATOR', 'Monday', '7:00-8:00', 'G-10 D-1', 1),
(1446, 'MEDICEN', 'CYCATOR', 'Friday', '10:00-11:00', 'G-10 D-1', 1),
(1447, 'MEDICEN', 'CYCATOR', 'Thursday', '10:00-11:00', 'G-10 D-1', 1),
(1448, 'MEDICEN', 'CYCATOR', 'Wednesday', '10:00-11:00', 'G-10 D-1', 1),
(1449, 'MEDICEN', 'CYCATOR', 'Tuesday', '10:00-11:00', 'G-10 D-1', 1),
(1450, 'MEDICEN', 'CYCATOR', 'Monday', '10:00-11:00', 'G-10 D-1', 1),
(1451, 'MEDICEN', 'CYCATOR', 'Monday', '2:00-4:00', 'G-11 D-2', 2),
(1452, 'MEDICEN', 'CYCATOR', 'Tuesday', '2:00-4:00', 'G-11 D-2', 2),
(1453, 'MEDICEN', 'CYCATOR', 'Wednesday', '2:00-4:00', 'G-11 D-2', 2),
(1454, 'MEDICEN', 'CYCATOR', 'Thursday', '2:00-4:00', 'G-11 D-2', 2),
(1455, 'MEDICEN', 'CYCATOR', 'Friday', '2:00-4:00', 'G-11 D-2', 2),
(1456, 'MEDICEN', 'CYCATOR', 'Monday', '4:00-6:00', 'G-11 D-2', 2),
(1457, 'MEDICEN', 'CYCATOR', 'Tuesday', '4:00-6:00', 'G-11 D-2', 2),
(1458, 'MEDICEN', 'CYCATOR', 'Wednesday', '4:00-6:00', 'G-11 D-2', 2),
(1459, 'MEDICEN', 'CYCATOR', 'Thursday', '4:00-6:00', 'G-11 D-2', 2),
(1460, 'MEDICEN', 'CYCATOR', 'Friday', '4:00-6:00', 'G-11 D-2', 2),
(1461, 'MEDICEN', 'CYCATOR', 'Monday', '8:00-10:00', 'G-11 D-2', 2),
(1462, 'MEDICEN', 'CYCATOR', 'Tuesday', '8:00-10:00', 'G-11 D-2', 2),
(1463, 'MEDICEN', 'CYCATOR', 'Wednesday', '8:00-10:00', 'G-11 D-2', 2),
(1464, 'MEDICEN', 'CYCATOR', 'Thursday', '8:00-10:00', 'G-11 D-2', 2),
(1465, 'MEDICEN', 'CYCATOR', 'Friday', '8:00-10:00', 'G-11 D-2', 2),
(1466, 'MEDICEN', 'CYCATOR', 'Friday', '7:00-8:00', 'G-11 D-2', 1),
(1467, 'MEDICEN', 'CYCATOR', 'Thursday', '7:00-8:00', 'G-11 D-2', 1),
(1468, 'MEDICEN', 'CYCATOR', 'Wednesday', '7:00-8:00', 'G-11 D-2', 1),
(1469, 'MEDICEN', 'CYCATOR', 'Tuesday', '7:00-8:00', 'G-11 D-2', 1),
(1470, 'MEDICEN', 'CYCATOR', 'Monday', '7:00-8:00', 'G-11 D-2', 1),
(1471, 'MEDICEN', 'CYCATOR', 'Friday', '10:00-11:00', 'G-11 D-2', 1),
(1472, 'MEDICEN', 'CYCATOR', 'Thursday', '10:00-11:00', 'G-11 D-2', 1),
(1473, 'MEDICEN', 'CYCATOR', 'Wednesday', '10:00-11:00', 'G-11 D-2', 1),
(1474, 'MEDICEN', 'CYCATOR', 'Tuesday', '10:00-11:00', 'G-11 D-2', 1),
(1475, 'MEDICEN', 'CYCATOR', 'Monday', '10:00-11:00', 'G-11 D-2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `efddt`
--

CREATE TABLE IF NOT EXISTS `efddt` (
  `id` int(43) NOT NULL AUTO_INCREMENT,
  `faculty` varchar(34) NOT NULL,
  `deparment` varchar(43) NOT NULL,
  `day` varchar(34) NOT NULL,
  `time` varchar(45) NOT NULL,
  `room` varchar(34) NOT NULL,
  `time_interval` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `efdt`
--

CREATE TABLE IF NOT EXISTS `efdt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty` varchar(43) NOT NULL,
  `department` varchar(86) NOT NULL,
  `day` varchar(23) NOT NULL,
  `time` varchar(43) NOT NULL,
  `room` varchar(29) NOT NULL,
  `no_ofdate` varchar(56) NOT NULL,
  `time_interval` varchar(43) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1141 ;

--
-- Dumping data for table `efdt`
--

INSERT INTO `efdt` (`id`, `faculty`, `department`, `day`, `time`, `room`, `no_ofdate`, `time_interval`) VALUES
(1099, 'MEDICEN', 'CYCATOR', 'Tuesday', '2:00-3:00', 'G-10 D-1', '0', '1:00'),
(1100, 'MEDICEN', 'CYCATOR', 'Thursday', '5:10-6:10', 'G-10 D-1', '0', '1:00'),
(1101, 'MEDICEN', 'CYCATOR', 'Monday', '7:00-8:00', 'G-10 D-1', '2', '1:00'),
(1102, 'MEDICEN', 'CYCATOR', 'Wednesday', '2:00-3:00', 'G-10 D-1', '2', '1:00'),
(1103, 'MEDICEN', 'CYCATOR', 'Wednesday', '3:10-4:10', 'G-10 D-1', '5', '1:00'),
(1104, 'MEDICEN', 'CYCATOR', 'Friday', '7:00-8:00', 'G-10 D-1', '7', '1:00'),
(1105, 'MEDICEN', 'CYCATOR', 'Monday', '7:00-8:00', 'G-10 D-1', '7', '1:00'),
(1106, 'MEDICEN', 'CYCATOR', 'Wednesday', '2:00-3:00', 'G-10 D-1', '9', '1:00'),
(1107, 'MEDICEN', 'CYCATOR', 'Wednesday', '3:10-4:10', 'G-10 D-1', '9', '1:00'),
(1108, 'MEDICEN', 'CYCATOR', 'Friday', '7:00-8:00', 'G-10 D-1', '11', '1:00'),
(1109, 'MEDICEN', 'CYCATOR', 'Tuesday', '2:00-3:00', 'G-10 D-1', '11', '1:00'),
(1110, 'MEDICEN', 'CYCATOR', 'Thursday', '5:10-6:10', 'G-10 D-1', '13', '1:00'),
(1111, 'MEDICEN', 'CYCATOR', 'Wednesday', '4:20-5:50', 'G-10 D-1', '0', '1:30'),
(1112, 'MEDICEN', 'CYCATOR', 'Wednesday', '9:10-10:40', 'G-10 D-1', '2', '1:30'),
(1113, 'MEDICEN', 'CYCATOR', 'Friday', '4:40-6:10', 'G-10 D-1', '2', '1:30'),
(1114, 'MEDICEN', 'CYCATOR', 'Monday', '5:10-6:40', 'G-10 D-1', '5', '1:30'),
(1115, 'MEDICEN', 'CYCATOR', 'Wednesday', '4:20-5:50', 'G-10 D-1', '7', '1:30'),
(1116, 'MEDICEN', 'CYCATOR', 'Wednesday', '9:10-10:40', 'G-10 D-1', '9', '1:30'),
(1117, 'MEDICEN', 'CYCATOR', 'Friday', '4:40-6:10', 'G-10 D-1', '11', '1:30'),
(1118, 'MEDICEN', 'CYCATOR', 'Monday', '5:10-6:40', 'G-10 D-1', '13', '1:30'),
(1119, 'MEDICEN', 'CYCATOR', 'Tuesday', '7:00-9:00', 'G-10 D-1', '0', '2:00'),
(1120, 'MEDICEN', 'CYCATOR', 'Thursday', '9:40-11:40', 'G-10 D-1', '2', '2:00'),
(1121, 'MEDICEN', 'CYCATOR', 'Wednesday', '7:00-9:00', 'G-10 D-1', '2', '2:00'),
(1122, 'MEDICEN', 'CYCATOR', 'Wednesday', '7:00-9:00', 'G-10 D-1', '5', '2:00'),
(1123, 'MEDICEN', 'CYCATOR', 'Friday', '8:10-10:10', 'G-10 D-1', '7', '2:00'),
(1124, 'MEDICEN', 'CYCATOR', 'Friday', '8:10-10:10', 'G-10 D-1', '9', '2:00'),
(1125, 'MEDICEN', 'CYCATOR', 'Tuesday', '7:00-9:00', 'G-10 D-1', '11', '2:00'),
(1126, 'MEDICEN', 'CYCATOR', 'Thursday', '9:40-11:40', 'G-10 D-1', '13', '2:00'),
(1127, 'MEDICEN', 'CYCATOR', 'Monday', '8:00-10:30', 'G-10 D-1', '0', '2:30'),
(1128, 'MEDICEN', 'CYCATOR', 'Thursday', '7:00-9:30', 'G-10 D-1', '2', '2:30'),
(1129, 'MEDICEN', 'CYCATOR', 'Monday', '8:00-10:30', 'G-10 D-1', '2', '2:30'),
(1130, 'MEDICEN', 'CYCATOR', 'Tuesday', '9:10-11:40', 'G-10 D-1', '5', '2:30'),
(1131, 'MEDICEN', 'CYCATOR', 'Thursday', '7:00-9:30', 'G-10 D-1', '7', '2:30'),
(1132, 'MEDICEN', 'CYCATOR', 'Friday', '2:00-4:30', 'G-10 D-1', '9', '2:30'),
(1133, 'MEDICEN', 'CYCATOR', 'Tuesday', '9:10-11:40', 'G-10 D-1', '11', '2:30'),
(1134, 'MEDICEN', 'CYCATOR', 'Friday', '2:00-4:30', 'G-10 D-1', '13', '2:30'),
(1135, 'MEDICEN', 'CYCATOR', 'Monday', '2:00-5:00', 'G-10 D-1', '0', '3:00'),
(1136, 'MEDICEN', 'CYCATOR', 'Thursday', '2:00-5:00', 'G-10 D-1', '2', '3:00'),
(1137, 'MEDICEN', 'CYCATOR', 'Monday', '2:00-5:00', 'G-10 D-1', '5', '3:00'),
(1138, 'MEDICEN', 'CYCATOR', 'Tuesday', '3:00-6:00', 'G-10 D-1', '9', '3:00'),
(1139, 'MEDICEN', 'CYCATOR', 'Thursday', '2:00-5:00', 'G-10 D-1', '11', '3:00'),
(1140, 'MEDICEN', 'CYCATOR', 'Tuesday', '3:10-6:10', 'G-10 D-1', '13', '3:00');

-- --------------------------------------------------------

--
-- Table structure for table `efsdt`
--

CREATE TABLE IF NOT EXISTS `efsdt` (
  `id` int(11) NOT NULL,
  `day` varchar(56) NOT NULL,
  `time` varchar(56) NOT NULL,
  `no_ofdate` varchar(56) NOT NULL,
  `time_interval` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `efsdt`
--

INSERT INTO `efsdt` (`id`, `day`, `time`, `no_ofdate`, `time_interval`) VALUES
(1, 'Tuesday', '2:00-3:00', '0', '1:00'),
(2, 'Thursday', '5:10-6:10', '0', '1:00'),
(3, 'Monday', '7:00-8:00', '2', '1:00'),
(4, 'Wednesday', '2:00-3:00', '2', '1:00'),
(5, 'Wednesday', '3:10-4:10', '5', '1:00'),
(6, 'Friday', '7:00-8:00', '7', '1:00'),
(7, 'Monday', '7:00-8:00', '7', '1:00'),
(8, 'Wednesday', '2:00-3:00', '9', '1:00'),
(9, 'Wednesday', '3:10-4:10', '9', '1:00'),
(10, 'Friday', '7:00-8:00', '11', '1:00'),
(11, 'Tuesday', '2:00-3:00', '11', '1:00'),
(12, 'Thursday', '5:10-6:10', '13', '1:00'),
(13, 'Wednesday', '4:20-5:50', '0', '1:30'),
(14, 'Wednesday', '9:10-10:40', '2', '1:30'),
(15, 'Friday', '4:40-6:10', '2', '1:30'),
(16, 'Monday', '5:10-6:40', '5', '1:30'),
(17, 'Wednesday', '4:20-5:50', '7', '1:30'),
(18, 'Wednesday', '9:10-10:40', '9', '1:30'),
(19, 'Friday', '4:40-6:10', '11', '1:30'),
(20, 'Monday', '5:10-6:40', '13', '1:30'),
(21, 'Tuesday', '7:00-9:00', '0', '2:00'),
(22, 'Thursday', '9:40-11:40', '2', '2:00'),
(23, 'Wednesday', '7:00-9:00', '2', '2:00'),
(24, 'Wednesday', '7:00-9:00', '5', '2:00'),
(25, 'Friday', '8:10-10:10', '7', '2:00'),
(26, 'Friday', '8:10-10:10', '9', '2:00'),
(27, 'Tuesday', '7:00-9:00', '11', '2:00'),
(28, 'Thursday', '9:40-11:40', '13', '2:00'),
(29, 'Monday', '8:00-10:30', '0', '2:30'),
(30, 'Thursday', '7:00-9:30', '2', '2:30'),
(31, 'Monday', '8:00-10:30', '2', '2:30'),
(32, 'Tuesday', '9:10-11:40', '5', '2:30'),
(33, 'Thursday', '7:00-9:30', '7', '2:30'),
(34, 'Friday', '2:00-4:30', '9', '2:30'),
(35, 'Tuesday', '9:10-11:40', '11', '2:30'),
(36, 'Friday', '2:00-4:30', '13', '2:30'),
(37, 'Monday', '2:00-5:00', '0', '3:00'),
(38, 'Thursday', '2:00-5:00', '2', '3:00'),
(39, 'Monday', '2:00-5:00', '5', '3:00'),
(40, 'Tuesday', '3:00-6:00', '9', '3:00'),
(41, 'Thursday', '2:00-5:00', '11', '3:00'),
(42, 'Tuesday', '3:10-6:10', '13', '3:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule`
--

CREATE TABLE IF NOT EXISTS `exam_schedule` (
  `id` varchar(32) NOT NULL,
  `faculty` varchar(32) NOT NULL,
  `department` varchar(32) NOT NULL,
  `course_title` varchar(32) NOT NULL,
  `day` varchar(43) NOT NULL,
  `time` varchar(45) NOT NULL,
  `time_interval` varchar(34) NOT NULL,
  `room` varchar(43) NOT NULL,
  `examiner` varchar(32) NOT NULL,
  `year` varchar(32) NOT NULL,
  `section` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_name` varchar(63) NOT NULL,
  `campus` varchar(43) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_name`, `campus`) VALUES
('FNCS', 'TEDDY CAMPUS'),
('INFOTMATICS', 'TEDDY CAMPUS'),
('LOW', 'MARAKI CAMPUS'),
('MEDICEN', 'GC');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_manager`
--

CREATE TABLE IF NOT EXISTS `faculty_manager` (
  `full_name` varchar(121) NOT NULL,
  `id` varchar(111) NOT NULL,
  `faculty` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_manager`
--

INSERT INTO `faculty_manager` (`full_name`, `id`, `faculty`) VALUES
('Tesfaye mangaw', '12345t', 'MEDICEN'),
('erami abebe', '21er', 'INFOTMATICS'),
('mamo Kutema', '893', 'FNCS'),
('binyam ataly', 'mm', 'LOW');

-- --------------------------------------------------------

--
-- Table structure for table `fandd`
--

CREATE TABLE IF NOT EXISTS `fandd` (
  `department_name` varchar(23) NOT NULL,
  `faculty` varchar(32) NOT NULL,
  `year` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fandd`
--

INSERT INTO `fandd` (`department_name`, `faculty`, `year`) VALUES
('COMPUTER SCIENCE', 'FNCS', 4),
('IT', 'FNCS', 4),
('CYCATOR', 'MEDICEN', 7);

-- --------------------------------------------------------

--
-- Table structure for table `instotherdep`
--

CREATE TABLE IF NOT EXISTS `instotherdep` (
  `department` varchar(30) NOT NULL,
  `course_title` varchar(30) NOT NULL,
  `course_code` varchar(30) NOT NULL,
  `ceradite_hour` varchar(30) NOT NULL,
  `instructor` varchar(30) NOT NULL,
  `to_department` varchar(30) NOT NULL,
  PRIMARY KEY (`course_title`,`to_department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instotherdep`
--

INSERT INTO `instotherdep` (`department`, `course_title`, `course_code`, `ceradite_hour`, `instructor`, `to_department`) VALUES
('COMPUTER SCIENCE', 'c++', 'cocso001', '3', 'Afework Ayalew', 'BIOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_information`
--

CREATE TABLE IF NOT EXISTS `instructor_information` (
  `department` varchar(23) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `instructor_id` varchar(30) NOT NULL,
  `instructor_status` varchar(30) NOT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_information`
--

INSERT INTO `instructor_information` (`department`, `first_name`, `instructor_id`, `instructor_status`) VALUES
('INFORMATION SCIENCE', 'Kebede Kebyhu', '123', 'student'),
('COMPUTER SCIENCE', 'Gashu Wondawoke', '1256', 'instructor'),
('INFORMATION SCIENCE', 'Geremu Kusse ', '3476', 'phd'),
('INFORMATION SCIENCE', 'Abebe Mengistu', '4321', 'instructor'),
('INFORMATION SCIENCE', 'Halue Kebre', '56788', 'instructor'),
('CYCATOR', 'Xyz Bbbbbbbbbbb', 'ere', 'rep'),
('COMPUTER SCIENCE', 'Mektew Worku', 'qa14', 'student'),
('INFORMATION SCIENCE', 'Earmi Shemisu', 's123', 'instructor'),
('COMPUTER SCIENCE', 'Desta Demisashu', 'we1144', 'instructor');

-- --------------------------------------------------------

--
-- Table structure for table `mdt`
--

CREATE TABLE IF NOT EXISTS `mdt` (
  `id` varchar(22) NOT NULL,
  `faculty` varchar(90) NOT NULL,
  `department` varchar(32) NOT NULL,
  `day` varchar(32) NOT NULL,
  `time` varchar(32) NOT NULL,
  `room` varchar(32) NOT NULL,
  `time_interval` varchar(32) NOT NULL,
  `year` varchar(32) NOT NULL,
  `section` varchar(32) NOT NULL,
  `by_instructor` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_room`
--

CREATE TABLE IF NOT EXISTS `registered_room` (
  `id` varchar(90) NOT NULL,
  `faculty` varchar(90) NOT NULL,
  `department` varchar(90) NOT NULL,
  `del_date` varchar(45) NOT NULL,
  `instructor_name` varchar(90) NOT NULL,
  `day` varchar(90) NOT NULL,
  `time` varchar(90) NOT NULL,
  `room` varchar(90) NOT NULL,
  `year` varchar(78) NOT NULL,
  `section` varchar(54) NOT NULL,
  `time_interval` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_information`
--

CREATE TABLE IF NOT EXISTS `room_information` (
  `department` varchar(30) NOT NULL,
  `room_location` varchar(43) NOT NULL,
  `block_number` varchar(43) NOT NULL,
  `room_id` varchar(43) NOT NULL,
  `faculty` varchar(78) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_information`
--

INSERT INTO `room_information` (`department`, `room_location`, `block_number`, `room_id`, `faculty`) VALUES
('CYCATOR', 'GC', 'G-10', 'G-10 D-1', 'MEDICEN'),
('CYCATOR', 'GC', 'G-11', 'G-11 D-2', 'MEDICEN');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_information`
--

CREATE TABLE IF NOT EXISTS `schedule_information` (
  `faculty` varchar(32) NOT NULL,
  `department` varchar(32) NOT NULL,
  `year` varchar(32) NOT NULL,
  `semister` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `course_title` varchar(32) NOT NULL,
  `course_code` varchar(32) NOT NULL,
  `credit_hour` varchar(32) NOT NULL,
  `instructor` varchar(32) NOT NULL,
  `byear` varchar(32) NOT NULL,
  `section` varchar(32) NOT NULL,
  `day` varchar(32) NOT NULL,
  `time` varchar(32) NOT NULL,
  `room` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sdt`
--

CREATE TABLE IF NOT EXISTS `sdt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(23) NOT NULL,
  `time` varchar(34) NOT NULL,
  `time_interval` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `sdt`
--

INSERT INTO `sdt` (`id`, `day`, `time`, `time_interval`) VALUES
(1, 'Monday', '2:00-4:00', 2),
(2, 'Tuesday', '2:00-4:00', 2),
(3, 'Wednesday', '2:00-4:00', 2),
(4, 'Thursday', '2:00-4:00', 2),
(5, 'Friday', '2:00-4:00', 2),
(6, 'Monday', '4:00-6:00', 2),
(7, 'Tuesday', '4:00-6:00', 2),
(8, 'Wednesday', '4:00-6:00', 2),
(9, 'Thursday', '4:00-6:00', 2),
(10, 'Friday', '4:00-6:00', 2),
(11, 'Monday', '8:00-10:00', 2),
(12, 'Tuesday', '8:00-10:00', 2),
(13, 'Wednesday', '8:00-10:00', 2),
(14, 'Thursday', '8:00-10:00', 2),
(15, 'Friday', '8:00-10:00', 2),
(16, 'Friday', '7:00-8:00', 1),
(17, 'Thursday', '7:00-8:00', 1),
(18, 'Wednesday', '7:00-8:00', 1),
(19, 'Tuesday', '7:00-8:00', 1),
(20, 'Monday', '7:00-8:00', 1),
(21, 'Friday', '10:00-11:00', 1),
(22, 'Thursday', '10:00-11:00', 1),
(23, 'Wednesday', '10:00-11:00', 1),
(24, 'Tuesday', '10:00-11:00', 1),
(25, 'Monday', '10:00-11:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_information`
--

CREATE TABLE IF NOT EXISTS `section_information` (
  `department` varchar(32) NOT NULL,
  `number` varchar(32) NOT NULL,
  `year` varchar(23) NOT NULL,
  `section` varchar(32) NOT NULL,
  PRIMARY KEY (`department`,`year`,`section`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_information`
--

INSERT INTO `section_information` (`department`, `number`, `year`, `section`) VALUES
('COMPUTER SCIENCE', '1', 'First Year', 'section 1'),
('COMPUTER SCIENCE', '2', 'First Year', 'section 2'),
('COMPUTER SCIENCE', '3', 'First Year', 'section 3'),
('COMPUTER SCIENCE', '1', 'Fourth Year', 'section 1'),
('COMPUTER SCIENCE', '1', 'Second Year', 'section 1'),
('COMPUTER SCIENCE', '2', 'Second Year', 'section 2'),
('COMPUTER SCIENCE', '1', 'Thrid Year', 'section 1'),
('COMPUTER SCIENCE', '2', 'Thrid Year', 'section 2'),
('CYCATOR', '1', 'Fifth Year', 'section 1'),
('CYCATOR', '2', 'Fifth Year', 'section 2'),
('CYCATOR', '1', 'First Year', 'section 1'),
('CYCATOR', '2', 'First Year', 'section 2'),
('CYCATOR', '3', 'First Year', 'section 3'),
('CYCATOR', '4', 'First Year', 'section 4'),
('CYCATOR', '1', 'Fourth Year', 'section 1'),
('CYCATOR', '1', 'Second Year', 'section 1'),
('CYCATOR', '2', 'Second Year', 'section 2'),
('CYCATOR', '1', 'Seventh Year', 'section 1'),
('CYCATOR', '2', 'Seventh Year', 'section 2'),
('CYCATOR', '1', 'Sixth Year', 'section 1'),
('CYCATOR', '1', 'Thrid Year', 'section 1');

-- --------------------------------------------------------

--
-- Table structure for table `startend_date`
--

CREATE TABLE IF NOT EXISTS `startend_date` (
  `department` varchar(32) NOT NULL,
  `start_date` varchar(43) NOT NULL,
  `end_date` varchar(45) NOT NULL,
  PRIMARY KEY (`department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startend_date`
--

INSERT INTO `startend_date` (`department`, `start_date`, `end_date`) VALUES
('COMPUTER SCIENCE', '06/04/2016', '06/22/2016');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `department` varchar(34) NOT NULL,
  `name` varchar(34) NOT NULL,
  `id` varchar(34) NOT NULL,
  `course` varchar(67) NOT NULL,
  `year` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE IF NOT EXISTS `student_information` (
  `department` varchar(90) NOT NULL,
  `year_of_study` varchar(90) NOT NULL,
  `first_name` varchar(90) NOT NULL,
  `last_name` varchar(90) NOT NULL,
  `id` varchar(90) NOT NULL,
  `section` varchar(90) NOT NULL,
  `phone` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`department`, `year_of_study`, `first_name`, `last_name`, `id`, `section`, `phone`) VALUES
('COMPUTER SCIENCE', 'Fourth Year', 'Gergito', 'kusse', 'gur/1174/05', 'section 1', '0963713952');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_information`
--
ALTER TABLE `course_information`
  ADD CONSTRAINT `course_information_ibfk_1` FOREIGN KEY (`dt`) REFERENCES `ddt` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `efddt`
--
ALTER TABLE `efddt`
  ADD CONSTRAINT `efddt_ibfk_1` FOREIGN KEY (`id`) REFERENCES `efdt` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
