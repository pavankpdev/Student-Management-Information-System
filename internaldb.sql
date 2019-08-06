-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 06:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internaldb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectUser` ()  BEGIN
           SELECT * FROM student_pro_1 ORDER BY id DESC;
           END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `attendence_sem1`
--

CREATE TABLE `attendence_sem1` (
  `regno` varchar(20) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `total_class_conducted` int(3) NOT NULL,
  `total_class_attended` int(3) NOT NULL,
  `percentage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attendence_sub1`
--

CREATE TABLE `attendence_sub1` (
  `sl no` int(3) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendence_sub1`
--

INSERT INTO `attendence_sub1` (`sl no`, `reg_no`, `status`) VALUES
(1, '102cs16003', 'present'),
(2, '102cs16004', 'absent'),
(3, '102cs16005', 'present'),
(4, '102cs16006', 'present'),
(5, '102cs16007', 'present'),
(6, '102cs16008', 'absent'),
(7, '102cs16009', 'absent'),
(8, '102cs16010', 'absent'),
(9, '102cs16011', 'absent'),
(10, '102cs16012', 'present'),
(11, '102cs16013', 'present'),
(12, '102cs16014', 'present'),
(13, '102cs16015', 'absent'),
(14, '102cs16016', 'present'),
(17, '102cs16018', 'present'),
(18, '102cs16023', 'absent'),
(19, '102cs16031', 'present'),
(20, '102cs16039', 'absent'),
(21, '102cs16048', 'present'),
(22, '102cs16051', 'present'),
(23, '102cs17001', 'present'),
(24, '102cs17002', 'present'),
(25, '102cs17003', 'absent'),
(26, '102cs17004', 'present'),
(27, '102cs17005', 'present'),
(28, '102cs17006', 'present'),
(29, '102cs17007', 'present'),
(30, '102cs17008', 'present'),
(31, '102cs17009', 'present'),
(32, '102cs17010', 'present'),
(33, '102cs17011', 'present'),
(34, '102cs17012', 'present'),
(35, '102cs17013', 'present'),
(36, '102cs17014', 'present'),
(37, '102cs17015', 'absent'),
(38, '102cs17016', 'present'),
(39, '102cs17017', 'present'),
(40, '102cs17018', 'present'),
(41, '102cs17019', 'present'),
(42, '102cs17020', 'present'),
(43, '102cs17021', 'present'),
(44, '102cs17022', 'present'),
(45, '102cs17023', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `collegeinfo_master`
--

CREATE TABLE `collegeinfo_master` (
  `info_id` int(30) NOT NULL,
  `info_type` varchar(30) DEFAULT NULL,
  `info` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegeinfo_master`
--

INSERT INTO `collegeinfo_master` (`info_id`, `info_type`, `info`) VALUES
(1, 'principal', 'Hello, students, your exams are going to start on the 8th of April, all the best do well'),
(3, 'hod', 'Hello, students, your exams are going to start on the 8th of April, all the best do well');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `subject`, `number`) VALUES
(1, 'PHP', 8),
(2, 'JAVA', 7),
(3, 'JQUERY', 8),
(4, 'JAVASCRIPT', 7);

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `event_name` varchar(35) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `dis` varchar(200) NOT NULL,
  `event_id` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`event_name`, `start_date`, `end_date`, `dis`, `event_id`) VALUES
('testing 123', '2019-03-07', '2019-03-08', 'hello testing hello testing', 123),
('Testing', '2019-04-13', '2019-04-14', 'just to check', 5),
('Testing', '2019-04-13', '2019-04-14', 'just to check', 125),
('kp', '2019-04-05', '2019-04-06', 'k', 1),
('Testing', '2019-04-12', '2019-04-13', 'this is for testing', 126);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123admin');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `news_name` varchar(120) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `dis` varchar(200) NOT NULL,
  `news_id` int(25) NOT NULL,
  `down_id` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`news_name`, `start_date`, `end_date`, `dis`, `news_id`, `down_id`) VALUES
('testing', '2019-03-07', '2019-03-08', 'this is testing testign testing', 1, 1),
('kpkpkpk', '2019-04-12', '2019-04-13', 'thishshshshs', 12, 12),
('kpkpkpk', '2019-04-12', '2019-04-13', 'thishshshshs', 13, 32),
('kpkpkpk', '2019-04-12', '2019-04-13', 'thishshshshs', 125, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sem1attd`
--

CREATE TABLE `sem1attd` (
  `regno` varchar(20) NOT NULL,
  `math1` int(3) NOT NULL,
  `appsci` int(3) NOT NULL,
  `ceee` int(3) NOT NULL,
  `belab` int(3) NOT NULL,
  `aslab` int(3) NOT NULL,
  `bcslab` int(3) NOT NULL,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem1attd`
--

INSERT INTO `sem1attd` (`regno`, `math1`, `appsci`, `ceee`, `belab`, `aslab`, `bcslab`, `month`) VALUES
('102cs16001', 38, 38, 35, 15, 14, 13, 'june2017');

-- --------------------------------------------------------

--
-- Table structure for table `sem1attdm1`
--

CREATE TABLE `sem1attdm1` (
  `reg_no` varchar(15) NOT NULL,
  `maths_1` int(11) NOT NULL,
  `applied_science` int(11) NOT NULL,
  `Ceee` int(11) NOT NULL,
  `Science_lab` int(11) NOT NULL,
  `Be_lab` int(11) NOT NULL,
  `Bcs_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem1attdm1`
--

INSERT INTO `sem1attdm1` (`reg_no`, `maths_1`, `applied_science`, `Ceee`, `Science_lab`, `Be_lab`, `Bcs_lab`, `Month_of_admin`) VALUES
('102cs16004', 14, 15, 12, 6, 5, 4, '1stmonth'),
('102cs16005', 15, 20, 18, 7, 6, 7, '1stmonth'),
('102cs16006', 16, 12, 18, 5, 7, 6, 'february'),
('102cs16007', 17, 15, 12, 6, 7, 5, '1stmonth'),
('102cs16009', 13, 16, 18, 7, 6, 7, '1stmonth'),
('102cs16010', 20, 17, 18, 7, 5, 7, '1stmonth'),
('102cs16018', 10, 12, 12, 11, 16, 17, 'jan'),
('102cs16023', 13, 13, 15, 14, 16, 14, 'jan'),
('102kptest', 1, 1, 1, 1, 1, 1, 'month');

-- --------------------------------------------------------

--
-- Table structure for table `sem1attdm2`
--

CREATE TABLE `sem1attdm2` (
  `reg_no` varchar(15) NOT NULL,
  `maths_1` int(11) NOT NULL,
  `applied_science` int(11) NOT NULL,
  `Ceee` int(11) NOT NULL,
  `Science_lab` int(11) NOT NULL,
  `Be_lab` int(11) NOT NULL,
  `Bcs_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem1attdm2`
--

INSERT INTO `sem1attdm2` (`reg_no`, `maths_1`, `applied_science`, `Ceee`, `Science_lab`, `Be_lab`, `Bcs_lab`, `Month_of_admin`) VALUES
('', 0, 0, 0, 0, 0, 0, 'jan'),
('102cs123kp', 12, 10, 13, 5, 14, 4, 'jan'),
('102cs16001', 20, 20, 18, 7, 7, 7, '1stmonth'),
('102cs16002', 15, 12, 18, 7, 4, 5, '1stmonth'),
('102cs16003', 13, 14, 10, 7, 4, 7, '1stmonth'),
('102cs16004', 14, 15, 12, 6, 5, 4, '1stmonth'),
('102cs16005', 15, 20, 18, 7, 6, 7, '1stmonth'),
('102cs16006', 16, 12, 18, 5, 7, 6, '1stmonth'),
('102cs16007', 17, 15, 12, 6, 7, 5, '1stmonth'),
('102cs16008', 17, 14, 10, 7, 7, 6, '1stmonth'),
('102cs16009', 13, 16, 18, 7, 6, 7, '1stmonth'),
('102cs16010', 20, 17, 18, 7, 5, 7, '1stmonth'),
('102cs16018', 12, 18, 12, 8, 8, 6, 'jan'),
('102cs16023', 13, 15, 10, 15, 16, 19, 'jan'),
('102cs1kp12', 13, 12, 9, 13, 10, 13, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem1attdm3`
--

CREATE TABLE `sem1attdm3` (
  `reg_no` varchar(15) NOT NULL,
  `maths_1` int(11) NOT NULL,
  `applied_science` int(11) NOT NULL,
  `Ceee` int(11) NOT NULL,
  `Science_lab` int(11) NOT NULL,
  `Be_lab` int(11) NOT NULL,
  `Bcs_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem1attdm3`
--

INSERT INTO `sem1attdm3` (`reg_no`, `maths_1`, `applied_science`, `Ceee`, `Science_lab`, `Be_lab`, `Bcs_lab`, `Month_of_admin`) VALUES
('102cs16001', 20, 20, 18, 7, 7, 7, ''),
('102cs16002', 15, 12, 18, 7, 4, 5, '1stmonth'),
('102cs16003', 13, 14, 10, 7, 4, 7, '1stmonth'),
('102cs16004', 14, 15, 12, 6, 5, 4, '1stmonth'),
('102cs16005', 15, 20, 18, 7, 6, 7, '1stmonth'),
('102cs16006', 16, 12, 18, 5, 7, 6, '1stmonth'),
('102cs16007', 17, 15, 12, 6, 7, 5, '1stmonth'),
('102cs16008', 17, 14, 10, 7, 7, 6, '1stmonth'),
('102cs16009', 13, 16, 18, 7, 6, 7, '1stmonth'),
('102cs16010', 20, 17, 18, 7, 5, 7, 'july'),
('102cs16018', 8, 10, 15, 13, 12, 18, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem1attdm4`
--

CREATE TABLE `sem1attdm4` (
  `reg_no` varchar(15) NOT NULL,
  `maths_1` int(11) NOT NULL,
  `applied_science` int(11) NOT NULL,
  `Ceee` int(11) NOT NULL,
  `Science_lab` int(11) NOT NULL,
  `Be_lab` int(11) NOT NULL,
  `Bcs_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem1attdm4`
--

INSERT INTO `sem1attdm4` (`reg_no`, `maths_1`, `applied_science`, `Ceee`, `Science_lab`, `Be_lab`, `Bcs_lab`, `Month_of_admin`) VALUES
('102cs16002', 15, 12, 18, 7, 4, 5, '1stmonth'),
('102cs16003', 13, 14, 10, 7, 4, 7, '1stmonth'),
('102cs16005', 15, 20, 18, 7, 6, 7, '1stmonth'),
('102cs16008', 22, 14, 10, 7, 7, 6, ''),
('102cs16009', 13, 16, 18, 7, 6, 7, '1stmonth'),
('102cs16010', 20, 17, 18, 7, 5, 7, '1stmonth'),
('102cs16018', 9, 11, 14, 19, 20, 9, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem1ia`
--

CREATE TABLE `sem1ia` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Engg_maths1` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Ceee` int(11) NOT NULL,
  `Be_lab` int(11) NOT NULL,
  `Science_lab` int(11) NOT NULL,
  `Bcs_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem1ia`
--

INSERT INTO `sem1ia` (`Reg_no`, `month`, `Engg_maths1`, `Science`, `Ceee`, `Be_lab`, `Science_lab`, `Bcs_lab`) VALUES
('102cs16018', 'jan', 20, 22, 21, 19, 15, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sem1internal1`
--

CREATE TABLE `sem1internal1` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Engg_maths1` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Ceee` int(11) NOT NULL,
  `Be_lab` int(11) NOT NULL,
  `Science_lab` int(11) NOT NULL,
  `Bcs_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem1internal1`
--

INSERT INTO `sem1internal1` (`Reg_no`, `month`, `Engg_maths1`, `Science`, `Ceee`, `Be_lab`, `Science_lab`, `Bcs_lab`) VALUES
('', '', 0, 0, 0, 0, 0, 0),
('102cs16001', '2016', 15, 19, 10, 8, 6, 8),
('102cs16003', '2016', 16, 10, 2, 4, 9, 4),
('102cs16004', '2016', 5, 14, 10, 5, 9, 5),
('102cs16005', '2016', 15, 12, 15, 6, 6, 7),
('102cs16006', '2016', 11, 18, 10, 7, 6, 3),
('102cs16007', '2016', 12, 11, 7, 5, 8, 8),
('102cs16008', '2016', 11, 17, 11, 7, 6, 8),
('102cs16009', '2016', 18, 19, 12, 8, 7, 6),
('102cs16010', '2016', 15, 13, 10, 8, 6, 9),
('102cs16018', 'jan', 15, 10, 17, 8, 5, 5),
('102cs16021', 'jan', 13, 14, 15, 17, 16, 18),
('102cs16023', '', 13, 14, 15, 17, 16, 18),
('102cs16025', 'jan', 13, 14, 15, 17, 16, 18),
('102cs16027', 'jan', 12, 12, 12, 12, 12, 12),
('102cs16028', 'march', 10, 18, 12, 5, 4, 17),
('102cs16030', 'jan', 13, 14, 15, 17, 16, 18),
('102cs18027', 'jan', 13, 14, 15, 17, 16, 19);

-- --------------------------------------------------------

--
-- Table structure for table `sem1internal2`
--

CREATE TABLE `sem1internal2` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(11) NOT NULL,
  `Engg_maths1` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Ceee` int(11) NOT NULL,
  `Be_lab` int(11) NOT NULL,
  `Science_lab` int(11) NOT NULL,
  `Bcs_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem1internal2`
--

INSERT INTO `sem1internal2` (`Reg_no`, `month`, `Engg_maths1`, `Science`, `Ceee`, `Be_lab`, `Science_lab`, `Bcs_lab`) VALUES
('102cs16002', 'jan', 13, 15, 14, 8, 6, 8),
('102cs16003', '2017', 16, 10, 10, 4, 9, 4),
('102cs16004', '2017', 5, 14, 10, 9, 9, 5),
('102cs16005', '2017', 15, 11, 15, 6, 6, 7),
('102cs16006', '2016', 11, 18, 10, 7, 6, 3),
('102cs16007', '2016', 12, 11, 7, 5, 8, 8),
('102cs16008', '2016', 11, 17, 11, 7, 6, 8),
('102cs16009', '2016', 18, 19, 12, 8, 7, 6),
('102cs16010', '2016', 15, 13, 10, 8, 7, 9),
('102cs16018', 'jan', 20, 16, 12, 8, 5, 10),
('102cs16030', 'jan', 16, 19, 10, 9, 10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sem1internal3`
--

CREATE TABLE `sem1internal3` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(11) NOT NULL,
  `Engg_maths1` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Ceee` int(11) NOT NULL,
  `Be_lab` int(11) NOT NULL,
  `Science_lab` int(11) NOT NULL,
  `Bcs_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem1internal3`
--

INSERT INTO `sem1internal3` (`Reg_no`, `month`, `Engg_maths1`, `Science`, `Ceee`, `Be_lab`, `Science_lab`, `Bcs_lab`) VALUES
('102cs16002', 'march', 0, 14, 12, 8, 8, 8),
('102cs16003', '2016', 16, 10, 15, 4, 9, 4),
('102cs16004', '2016', 5, 14, 10, 5, 9, 5),
('102cs16005', '2016', 15, 12, 15, 6, 6, 7),
('102cs16006', '2016', 11, 18, 10, 7, 6, 3),
('102cs16007', '2016', 12, 11, 10, 5, 8, 8),
('102cs16008', '2016', 11, 17, 11, 7, 6, 8),
('102cs16009', '2016', 18, 19, 12, 8, 7, 6),
('102cs16010', '2016', 15, 13, 10, 8, 6, 9),
('102cs16018', 'jan', 10, 16, 20, 8, 9, 10),
('102cs16030', 'jan', 13, 14, 15, 17, 16, 18);

-- --------------------------------------------------------

--
-- Table structure for table `sem2attdm1`
--

CREATE TABLE `sem2attdm1` (
  `reg_no` varchar(15) NOT NULL,
  `maths_2` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `dcf` int(11) NOT NULL,
  `de_lab` int(11) NOT NULL,
  `basic_web_lab` int(11) NOT NULL,
  `multimedia_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem2attdm1`
--

INSERT INTO `sem2attdm1` (`reg_no`, `maths_2`, `english`, `dcf`, `de_lab`, `basic_web_lab`, `multimedia_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 14, 13, 6, 6, 5, '1stmoth'),
('102cs16002', 13, 12, 13, 5, 6, 4, '1stmonth'),
('102cs16003', 13, 11, 13, 5, 6, 4, '1stmonth'),
('102cs16004', 12, 13, 13, 6, 5, 5, '1stmonth'),
('102cs16005', 14, 11, 13, 7, 6, 6, '1stmonth'),
('102cs16006', 12, 12, 13, 5, 5, 7, '1stmonth'),
('102cs16007', 11, 13, 13, 6, 6, 7, '1stmonth'),
('102cs16008', 12, 12, 13, 6, 6, 6, '1stmonth'),
('102cs16009', 11, 11, 13, 5, 7, 6, '1stmonth'),
('102cs16010', 11, 12, 13, 5, 7, 4, '1stmonth'),
('102cs16018', 12, 13, 14, 15, 11, 10, 'feb');

-- --------------------------------------------------------

--
-- Table structure for table `sem2attdm2`
--

CREATE TABLE `sem2attdm2` (
  `reg_no` varchar(15) NOT NULL,
  `maths_2` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `dcf` int(11) NOT NULL,
  `de_lab` int(11) NOT NULL,
  `basic_web_lab` int(11) NOT NULL,
  `multimedia_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem2attdm2`
--

INSERT INTO `sem2attdm2` (`reg_no`, `maths_2`, `english`, `dcf`, `de_lab`, `basic_web_lab`, `multimedia_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 14, 13, 6, 6, 5, '1stmoth'),
('102cs16002', 13, 12, 13, 5, 6, 4, '1stmonth'),
('102cs16003', 13, 11, 13, 5, 6, 4, '1stmonth'),
('102cs16004', 12, 13, 13, 6, 5, 5, '1stmonth'),
('102cs16005', 14, 11, 13, 7, 6, 6, '1stmonth'),
('102cs16007', 11, 13, 13, 6, 6, 7, '1stmonth'),
('102cs16008', 12, 12, 13, 6, 6, 6, '1stmonth'),
('102cs16009', 11, 11, 13, 5, 7, 6, '1stmonth'),
('102cs16010', 11, 12, 13, 5, 7, 4, '1stmonth'),
('102cs16018', 12, 13, 14, 15, 11, 10, 'feb');

-- --------------------------------------------------------

--
-- Table structure for table `sem2attdm3`
--

CREATE TABLE `sem2attdm3` (
  `reg_no` varchar(15) NOT NULL,
  `maths_2` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `dcf` int(11) NOT NULL,
  `de_lab` int(11) NOT NULL,
  `basic_web_lab` int(11) NOT NULL,
  `multimedia_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem2attdm3`
--

INSERT INTO `sem2attdm3` (`reg_no`, `maths_2`, `english`, `dcf`, `de_lab`, `basic_web_lab`, `multimedia_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 14, 13, 6, 6, 5, '1stmoth'),
('102cs16002', 13, 12, 13, 5, 6, 4, '1stmonth'),
('102cs16003', 13, 11, 13, 5, 6, 4, '1stmonth'),
('102cs16004', 12, 13, 13, 6, 5, 5, '1stmonth'),
('102cs16005', 14, 11, 13, 7, 6, 6, '1stmonth'),
('102cs16006', 12, 12, 13, 5, 5, 7, '1stmonth'),
('102cs16007', 11, 13, 13, 6, 6, 7, '1stmonth'),
('102cs16008', 12, 12, 13, 6, 6, 6, '1stmonth'),
('102cs16009', 11, 11, 13, 5, 7, 6, '1stmonth'),
('102cs16010', 11, 12, 13, 5, 7, 4, '1stmonth'),
('102cs16018', 12, 13, 14, 15, 11, 10, 'feb');

-- --------------------------------------------------------

--
-- Table structure for table `sem2attdm4`
--

CREATE TABLE `sem2attdm4` (
  `reg_no` varchar(15) NOT NULL,
  `maths_2` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `dcf` int(11) NOT NULL,
  `de_lab` int(11) NOT NULL,
  `basic_web_lab` int(11) NOT NULL,
  `multimedia_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem2attdm4`
--

INSERT INTO `sem2attdm4` (`reg_no`, `maths_2`, `english`, `dcf`, `de_lab`, `basic_web_lab`, `multimedia_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 14, 13, 6, 6, 5, '1stmoth'),
('102cs16002', 13, 12, 13, 5, 6, 4, '1stmonth'),
('102cs16003', 13, 11, 13, 5, 6, 4, '1stmonth'),
('102cs16004', 12, 13, 13, 6, 5, 5, '1stmonth'),
('102cs16005', 14, 11, 13, 7, 6, 6, '1stmonth'),
('102cs16006', 12, 12, 13, 5, 5, 7, '1stmonth'),
('102cs16007', 11, 13, 13, 6, 6, 7, '1stmonth'),
('102cs16008', 12, 12, 13, 6, 6, 6, '1stmonth'),
('102cs16009', 11, 11, 13, 5, 7, 6, '1stmonth'),
('102cs16010', 11, 12, 13, 5, 7, 4, '1stmonth'),
('102cs16018', 12, 13, 14, 15, 11, 10, 'feb');

-- --------------------------------------------------------

--
-- Table structure for table `sem2ia`
--

CREATE TABLE `sem2ia` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Engg_maths2` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Dcf` int(11) NOT NULL,
  `De_lab` int(11) NOT NULL,
  `Basic_web_design_lab` int(11) NOT NULL,
  `Multimedia_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem2ia`
--

INSERT INTO `sem2ia` (`Reg_no`, `month`, `Engg_maths2`, `English`, `Dcf`, `De_lab`, `Basic_web_design_lab`, `Multimedia_lab`) VALUES
('102cs16018', 'jan', 22, 23, 21, 20, 15, 11);

-- --------------------------------------------------------

--
-- Table structure for table `sem2internal1`
--

CREATE TABLE `sem2internal1` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Engg_maths2` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Dcf` int(11) NOT NULL,
  `De_lab` int(11) NOT NULL,
  `Basic_web_design_lab` int(11) NOT NULL,
  `Multimedia_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem2internal1`
--

INSERT INTO `sem2internal1` (`Reg_no`, `month`, `Engg_maths2`, `English`, `Dcf`, `De_lab`, `Basic_web_design_lab`, `Multimedia_lab`) VALUES
('102cs16001', 'jan', 15, 13, 10, 8, 6, 7),
('102cs16002', 'jan', 0, 0, 12, 8, 6, 8),
('102cs16003', '2017', 16, 10, 2, 4, 9, 4),
('102cs16004', '2017', 5, 14, 10, 5, 9, 5),
('102cs16005', '2017', 15, 12, 15, 6, 6, 7),
('102cs16006', '2017', 11, 18, 10, 7, 6, 3),
('102cs16007', '2017', 12, 11, 7, 5, 8, 8),
('102cs16008', '2017', 11, 17, 11, 7, 6, 8),
('102cs16009', '2017', 18, 19, 12, 8, 7, 6),
('102cs16010', '2017', 15, 13, 10, 8, 6, 9),
('102cs16018', 'jan', 18, 16, 15, 8, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sem2internal2`
--

CREATE TABLE `sem2internal2` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Engg_maths2` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Dcf` int(11) NOT NULL,
  `De_lab` int(11) NOT NULL,
  `Basic_web_design_lab` int(11) NOT NULL,
  `Multimedia_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem2internal2`
--

INSERT INTO `sem2internal2` (`Reg_no`, `month`, `Engg_maths2`, `English`, `Dcf`, `De_lab`, `Basic_web_design_lab`, `Multimedia_lab`) VALUES
('102cs16002', 'jan', 0, 0, 12, 8, 6, 8),
('102cs16003', '2017', 16, 10, 2, 10, 9, 8),
('102cs16004', '2017', 5, 14, 10, 5, 9, 5),
('102cs16005', '2017', 19, 12, 15, 6, 6, 7),
('102cs16006', '2017', 11, 18, 10, 7, 6, 6),
('102cs16007', '2017', 12, 11, 7, 5, 8, 8),
('102cs16008', '2017', 11, 17, 11, 7, 6, 8),
('102cs16009', '2017', 18, 19, 12, 8, 7, 6),
('102cs16010', '2017', 15, 13, 15, 8, 6, 9),
('102cs16018', 'jan', 20, 17, 12, 9, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sem2internal3`
--

CREATE TABLE `sem2internal3` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Engg_maths2` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Dcf` int(11) NOT NULL,
  `De_lab` int(11) NOT NULL,
  `Basic_web_design_lab` int(11) NOT NULL,
  `Multimedia_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem2internal3`
--

INSERT INTO `sem2internal3` (`Reg_no`, `month`, `Engg_maths2`, `English`, `Dcf`, `De_lab`, `Basic_web_design_lab`, `Multimedia_lab`) VALUES
('102cs16001', '2017', 15, 13, 10, 8, 6, 9),
('102cs16002', '2017', 12, 14, 12, 8, 6, 8),
('102cs16003', '2017', 16, 10, 2, 4, 9, 4),
('102cs16004', '2017', 5, 14, 10, 5, 9, 5),
('102cs16005', '2017', 15, 12, 15, 6, 6, 7),
('102cs16006', '2017', 11, 18, 10, 7, 6, 3),
('102cs16007', '2017', 12, 11, 7, 5, 8, 8),
('102cs16008', '2017', 11, 17, 11, 7, 6, 8),
('102cs16009', '2017', 18, 19, 12, 8, 7, 6),
('102cs16010', '2017', 15, 13, 10, 8, 6, 9),
('102cs16018', 'jan', 16, 15, 13, 10, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sem3attdm1`
--

CREATE TABLE `sem3attdm1` (
  `reg_no` varchar(15) NOT NULL,
  `prog_with_c` int(11) NOT NULL,
  `co` int(11) NOT NULL,
  `dbms` int(11) NOT NULL,
  `cn` int(11) NOT NULL,
  `c_lab` int(11) NOT NULL,
  `dbms_lab` int(11) NOT NULL,
  `network_admin_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem3attdm1`
--

INSERT INTO `sem3attdm1` (`reg_no`, `prog_with_c`, `co`, `dbms`, `cn`, `c_lab`, `dbms_lab`, `network_admin_lab`, `Month_of_admin`) VALUES
('102cs16002', 11, 10, 12, 11, 4, 6, 3, '1stmonth'),
('102cs16003', 15, 11, 11, 10, 5, 4, 0, 'february'),
('102cs16004', 14, 12, 10, 11, 4, 4, 3, '1stmonth'),
('102cs16005', 12, 15, 12, 15, 5, 5, 4, '1stmonth'),
('102cs16006', 12, 11, 11, 10, 7, 5, 5, '1stmonth'),
('102cs16007', 15, 10, 12, 10, 7, 6, 4, '1stmonth'),
('102cs16008', 14, 11, 12, 10, 7, 4, 5, '1stmonth'),
('102cs16009', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16010', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16018', 12, 13, 11, 14, 15, 8, 9, 'march');

-- --------------------------------------------------------

--
-- Table structure for table `sem3attdm2`
--

CREATE TABLE `sem3attdm2` (
  `reg_no` varchar(15) NOT NULL,
  `prog_with_c` int(11) NOT NULL,
  `co` int(11) NOT NULL,
  `dbms` int(11) NOT NULL,
  `cn` int(11) NOT NULL,
  `c_lab` int(11) NOT NULL,
  `dbms_lab` int(11) NOT NULL,
  `network_admin_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem3attdm2`
--

INSERT INTO `sem3attdm2` (`reg_no`, `prog_with_c`, `co`, `dbms`, `cn`, `c_lab`, `dbms_lab`, `network_admin_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16002', 11, 10, 12, 11, 4, 6, 3, '1stmonth'),
('102cs16003', 10, 11, 11, 12, 5, 4, 4, '1stmonth'),
('102cs16004', 14, 12, 10, 11, 4, 4, 3, '1stmonth'),
('102cs16005', 12, 15, 12, 15, 5, 5, 4, '1stmonth'),
('102cs16006', 12, 11, 11, 10, 7, 5, 5, '1stmonth'),
('102cs16007', 15, 10, 12, 10, 7, 6, 4, '1stmonth'),
('102cs16008', 14, 11, 12, 10, 7, 4, 5, '1stmonth'),
('102cs16009', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16010', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16018', 12, 13, 11, 14, 15, 8, 9, 'march');

-- --------------------------------------------------------

--
-- Table structure for table `sem3attdm3`
--

CREATE TABLE `sem3attdm3` (
  `reg_no` varchar(15) NOT NULL,
  `prog_with_c` int(11) NOT NULL,
  `co` int(11) NOT NULL,
  `dbms` int(11) NOT NULL,
  `cn` int(11) NOT NULL,
  `c_lab` int(11) NOT NULL,
  `dbms_lab` int(11) NOT NULL,
  `network_admin_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem3attdm3`
--

INSERT INTO `sem3attdm3` (`reg_no`, `prog_with_c`, `co`, `dbms`, `cn`, `c_lab`, `dbms_lab`, `network_admin_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16002', 11, 10, 12, 11, 4, 6, 3, '1stmonth'),
('102cs16003', 10, 11, 11, 12, 5, 4, 4, '1stmonth'),
('102cs16004', 14, 12, 10, 11, 4, 4, 3, '1stmonth'),
('102cs16005', 12, 15, 12, 15, 5, 5, 4, '1stmonth'),
('102cs16006', 12, 11, 11, 10, 7, 5, 5, '1stmonth'),
('102cs16007', 15, 10, 12, 10, 7, 6, 4, '1stmonth'),
('102cs16008', 14, 11, 12, 10, 7, 4, 5, '1stmonth'),
('102cs16009', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16010', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16018', 15, 13, 15, 20, 5, 5, 4, 'march'),
('102cs1kp23', 12, 12, 12, 12, 12, 12, 12, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem3attdm4`
--

CREATE TABLE `sem3attdm4` (
  `reg_no` varchar(15) NOT NULL,
  `prog_with_c` int(11) NOT NULL,
  `co` int(11) NOT NULL,
  `dbms` int(11) NOT NULL,
  `cn` int(11) NOT NULL,
  `c_lab` int(11) NOT NULL,
  `dbms_lab` int(11) NOT NULL,
  `network_admin_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem3attdm4`
--

INSERT INTO `sem3attdm4` (`reg_no`, `prog_with_c`, `co`, `dbms`, `cn`, `c_lab`, `dbms_lab`, `network_admin_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16002', 11, 10, 12, 11, 4, 6, 3, '1stmonth'),
('102cs16003', 10, 11, 11, 12, 5, 4, 4, '1stmonth'),
('102cs16004', 14, 12, 10, 11, 4, 4, 3, '1stmonth'),
('102cs16005', 12, 15, 12, 15, 5, 5, 4, '1stmonth'),
('102cs16006', 12, 11, 11, 10, 7, 5, 5, '1stmonth'),
('102cs16007', 15, 10, 12, 10, 7, 6, 4, '1stmonth'),
('102cs16008', 14, 11, 12, 10, 7, 4, 5, '1stmonth'),
('102cs16009', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16010', 12, 10, 12, 15, 7, 6, 5, '1stmonth'),
('102cs16018', 12, 13, 11, 14, 15, 8, 9, 'march');

-- --------------------------------------------------------

--
-- Table structure for table `sem3ia`
--

CREATE TABLE `sem3ia` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `programming_with_c` int(11) NOT NULL,
  `Computer_organisation` int(11) NOT NULL,
  `Dbms` int(11) NOT NULL,
  `Computer_networks` int(11) NOT NULL,
  `C_lab` int(11) NOT NULL,
  `Dbms_lab` int(11) NOT NULL,
  `Networking_administration_lab` int(11) NOT NULL,
  `kannada` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem3ia`
--

INSERT INTO `sem3ia` (`Reg_no`, `month`, `programming_with_c`, `Computer_organisation`, `Dbms`, `Computer_networks`, `C_lab`, `Dbms_lab`, `Networking_administration_lab`, `kannada`) VALUES
('102cs16018', 'jan', 16, 19, 20, 22, 21, 23, 22, 23);

-- --------------------------------------------------------

--
-- Table structure for table `sem3internal1`
--

CREATE TABLE `sem3internal1` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `programming_with_c` int(11) NOT NULL,
  `Computer_organisation` int(11) NOT NULL,
  `Dbms` int(11) NOT NULL,
  `Computer_networks` int(11) NOT NULL,
  `C_lab` int(11) NOT NULL,
  `Dbms_lab` int(11) NOT NULL,
  `Networking_administration_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem3internal1`
--

INSERT INTO `sem3internal1` (`Reg_no`, `month`, `programming_with_c`, `Computer_organisation`, `Dbms`, `Computer_networks`, `C_lab`, `Dbms_lab`, `Networking_administration_lab`) VALUES
('102cs16001', '2017', 14, 16, 17, 12, 8, 7, 9),
('102cs16002', '2017', 12, 14, 14, 14, 7, 7, 9),
('102cs16003', '2017', 20, 16, 15, 12, 6, 8, 8),
('102cs16004', '2017', 10, 14, 16, 11, 7, 6, 6),
('102cs16005', '2017', 19, 12, 12, 15, 4, 7, 5),
('102cs16006', '2017', 16, 11, 12, 13, 7, 6, 7),
('102cs16007', '2017', 14, 16, 12, 15, 7, 7, 8),
('102cs16008', '2017', 5, 10, 11, 13, 8, 6, 7),
('102cs16009', '2017', 14, 15, 13, 10, 4, 8, 6),
('102cs16010', '2017', 12, 13, 11, 10, 8, 7, 7),
('102cs16018', 'jan', 16, 15, 12, 15, 9, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sem3internal2`
--

CREATE TABLE `sem3internal2` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `programming_with_c` int(11) NOT NULL,
  `Computer_organisation` int(11) NOT NULL,
  `Dbms` int(11) NOT NULL,
  `Computer_networks` int(11) NOT NULL,
  `C_lab` int(11) NOT NULL,
  `Dbms_lab` int(11) NOT NULL,
  `Networking_administration_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem3internal2`
--

INSERT INTO `sem3internal2` (`Reg_no`, `month`, `programming_with_c`, `Computer_organisation`, `Dbms`, `Computer_networks`, `C_lab`, `Dbms_lab`, `Networking_administration_lab`) VALUES
('102cs16001', '2017', 14, 14, 14, 14, 7, 7, 9),
('102cs16002', '2017', 10, 14, 11, 12, 7, 7, 9),
('102cs16003', '2017', 12, 12, 14, 11, 7, 7, 9),
('102cs16004', '2017', 12, 11, 14, 14, 9, 7, 9),
('102cs16005', '2017', 12, 14, 10, 10, 7, 7, 5),
('102cs16006', '2017', 12, 16, 14, 15, 7, 5, 9),
('102cs16007', '2017', 12, 14, 13, 11, 7, 7, 9),
('102cs16008', '2017', 12, 14, 18, 14, 7, 7, 9),
('102cs16009', '2017', 12, 14, 11, 14, 7, 7, 9),
('102cs16010', '2017', 12, 14, 14, 14, 7, 7, 9),
('102cs16018', 'jan', 15, 11, 16, 15, 9, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sem3internal3`
--

CREATE TABLE `sem3internal3` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `programming_with_c` int(11) NOT NULL,
  `Computer_organisation` int(11) NOT NULL,
  `Dbms` int(11) NOT NULL,
  `Computer_networks` int(11) NOT NULL,
  `C_lab` int(11) NOT NULL,
  `Dbms_lab` int(11) NOT NULL,
  `Networking_administration_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem3internal3`
--

INSERT INTO `sem3internal3` (`Reg_no`, `month`, `programming_with_c`, `Computer_organisation`, `Dbms`, `Computer_networks`, `C_lab`, `Dbms_lab`, `Networking_administration_lab`) VALUES
('102cs16001', '2017', 19, 12, 12, 15, 4, 7, 5),
('102cs16002', '2017', 12, 14, 14, 14, 7, 7, 9),
('102cs16003', '2017', 20, 16, 15, 12, 6, 8, 8),
('102cs16004', '2017', 10, 14, 16, 11, 7, 6, 6),
('102cs16005', '2017', 19, 12, 12, 15, 4, 7, 5),
('102cs16006', '2017', 16, 11, 12, 13, 7, 6, 7),
('102cs16007', '2017', 14, 16, 12, 15, 7, 7, 8),
('102cs16008', '2017', 5, 10, 11, 13, 8, 6, 7),
('102cs16009', '2017', 14, 15, 13, 10, 4, 8, 6),
('102cs16010', '2017', 12, 13, 11, 10, 8, 7, 7),
('102cs16018', 'jan', 20, 20, 12, 20, 10, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sem4attdm1`
--

CREATE TABLE `sem4attdm1` (
  `reg_no` varchar(15) NOT NULL,
  `Ds` int(11) NOT NULL,
  `oop_with_java` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  `pe&ic` int(11) NOT NULL,
  `ds_lab` int(11) NOT NULL,
  `java_lab` int(11) NOT NULL,
  `linux_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem4attdm1`
--

INSERT INTO `sem4attdm1` (`reg_no`, `Ds`, `oop_with_java`, `os`, `pe&ic`, `ds_lab`, `java_lab`, `linux_lab`, `Month_of_admin`) VALUES
('102cs16002', 11, 10, 10, 10, 5, 5, 4, '1stmonth'),
('102cs16003', 12, 11, 12, 11, 4, 4, 5, '1stmonth'),
('102cs16004', 13, 12, 12, 15, 5, 5, 3, '1stmonth'),
('102cs16005', 14, 13, 10, 12, 6, 6, 6, '1stmonth'),
('102cs16006', 11, 12, 11, 14, 6, 7, 3, '1stmonth'),
('102cs16007', 13, 11, 14, 13, 5, 6, 5, '1stmonth'),
('102cs16008', 11, 14, 13, 12, 4, 5, 5, '1stmonth'),
('102cs16009', 11, 15, 11, 12, 5, 6, 5, '1stmonth'),
('102cs16010', 12, 11, 11, 12, 5, 6, 5, '1stmonth'),
('102cs16018', 8, 9, 10, 11, 12, 13, 14, 'jan'),
('testkp123', 12, 2, 2, 2, 2, 2, 2, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem4attdm2`
--

CREATE TABLE `sem4attdm2` (
  `reg_no` varchar(15) NOT NULL,
  `Ds` int(11) NOT NULL,
  `oop_with_java` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  `pe&ic` int(11) NOT NULL,
  `ds_lab` int(11) NOT NULL,
  `java_lab` int(11) NOT NULL,
  `linux_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem4attdm2`
--

INSERT INTO `sem4attdm2` (`reg_no`, `Ds`, `oop_with_java`, `os`, `pe&ic`, `ds_lab`, `java_lab`, `linux_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 11, 12, 12, 5, 6, 5, '1stmonth'),
('102cs16002', 11, 10, 10, 10, 5, 5, 4, '1stmonth'),
('102cs16003', 12, 11, 12, 11, 4, 4, 5, '1stmonth'),
('102cs16004', 13, 12, 12, 15, 5, 5, 3, '1stmonth'),
('102cs16005', 14, 13, 10, 12, 6, 6, 6, '1stmonth'),
('102cs16006', 11, 12, 11, 14, 6, 7, 3, '1stmonth'),
('102cs16007', 13, 11, 14, 13, 5, 6, 5, '1stmonth'),
('102cs16008', 11, 14, 13, 12, 4, 5, 5, '1stmonth'),
('102cs16009', 11, 15, 11, 12, 5, 6, 5, '1stmonth'),
('102cs16010', 12, 11, 11, 12, 5, 6, 5, '1stmonth'),
('102cs16018', 13, 12, 10, 11, 5, 5, 4, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem4attdm3`
--

CREATE TABLE `sem4attdm3` (
  `reg_no` varchar(15) NOT NULL,
  `Ds` int(11) NOT NULL,
  `oop_with_java` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  `pe&ic` int(11) NOT NULL,
  `ds_lab` int(11) NOT NULL,
  `java_lab` int(11) NOT NULL,
  `linux_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem4attdm3`
--

INSERT INTO `sem4attdm3` (`reg_no`, `Ds`, `oop_with_java`, `os`, `pe&ic`, `ds_lab`, `java_lab`, `linux_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 11, 12, 12, 5, 6, 5, '1stmonth'),
('102cs16002', 11, 10, 10, 10, 5, 5, 4, '1stmonth'),
('102cs16003', 12, 11, 12, 11, 4, 4, 5, '1stmonth'),
('102cs16004', 13, 12, 12, 15, 5, 5, 3, '1stmonth'),
('102cs16005', 14, 13, 10, 12, 6, 6, 6, '1stmonth'),
('102cs16006', 11, 12, 11, 14, 6, 7, 3, '1stmonth'),
('102cs16007', 13, 11, 14, 13, 5, 6, 5, '1stmonth'),
('102cs16008', 11, 14, 13, 12, 4, 5, 5, '1stmonth'),
('102cs16009', 11, 15, 11, 12, 5, 6, 5, '1stmonth'),
('102cs16010', 12, 11, 11, 12, 5, 6, 5, '1stmonth'),
('102cs16018', 12, 15, 20, 11, 5, 6, 5, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem4attdm4`
--

CREATE TABLE `sem4attdm4` (
  `reg_no` varchar(15) NOT NULL,
  `Ds` int(11) NOT NULL,
  `oop_with_java` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  `pe&ic` int(11) NOT NULL,
  `ds_lab` int(11) NOT NULL,
  `java_lab` int(11) NOT NULL,
  `linux_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem4attdm4`
--

INSERT INTO `sem4attdm4` (`reg_no`, `Ds`, `oop_with_java`, `os`, `pe&ic`, `ds_lab`, `java_lab`, `linux_lab`, `Month_of_admin`) VALUES
('102cs16001', 12, 11, 12, 12, 5, 6, 5, '1stmonth'),
('102cs16002', 11, 10, 10, 10, 5, 5, 4, '1stmonth'),
('102cs16003', 12, 11, 12, 11, 4, 4, 5, '1stmonth'),
('102cs16004', 13, 12, 12, 15, 5, 5, 3, '1stmonth'),
('102cs16005', 14, 13, 10, 12, 6, 6, 6, '1stmonth'),
('102cs16006', 11, 12, 11, 14, 6, 7, 3, '1stmonth'),
('102cs16007', 13, 11, 14, 13, 5, 6, 5, '1stmonth'),
('102cs16008', 11, 14, 13, 12, 4, 5, 5, '1stmonth'),
('102cs16009', 11, 15, 11, 12, 5, 6, 5, '1stmonth'),
('102cs16010', 12, 11, 11, 12, 5, 6, 5, '1stmonth'),
('102cs16018', 8, 11, 13, 20, 5, 4, 6, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem4ia`
--

CREATE TABLE `sem4ia` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Datastructure_using_c` int(11) NOT NULL,
  `Oop_with_java` int(11) NOT NULL,
  `Operating_system` int(11) NOT NULL,
  `Pe&ic` int(11) NOT NULL,
  `ds_lab` int(11) NOT NULL,
  `Java_lab` int(11) NOT NULL,
  `Linux_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem4ia`
--

INSERT INTO `sem4ia` (`Reg_no`, `month`, `Datastructure_using_c`, `Oop_with_java`, `Operating_system`, `Pe&ic`, `ds_lab`, `Java_lab`, `Linux_lab`) VALUES
('102cs16018', 'jan', 18, 22, 23, 25, 24, 23, 21);

-- --------------------------------------------------------

--
-- Table structure for table `sem4internal1`
--

CREATE TABLE `sem4internal1` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Datastructure_using_c` int(11) NOT NULL,
  `Oop_with_java` int(11) NOT NULL,
  `Operating_system` int(11) NOT NULL,
  `Pe&ic` int(11) NOT NULL,
  `ds_lab` int(11) NOT NULL,
  `Java_lab` int(11) NOT NULL,
  `Linux_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem4internal1`
--

INSERT INTO `sem4internal1` (`Reg_no`, `month`, `Datastructure_using_c`, `Oop_with_java`, `Operating_system`, `Pe&ic`, `ds_lab`, `Java_lab`, `Linux_lab`) VALUES
('102cs16001', '2018', 17, 10, 11, 13, 8, 6, 7),
('102cs16002', '2018', 14, 15, 15, 10, 8, 6, 6),
('102cs16003', '2018', 10, 12, 11, 13, 8, 6, 8),
('102cs16004', '2018', 11, 11, 10, 11, 8, 6, 5),
('102cs16005', '2018', 12, 15, 19, 13, 8, 6, 8),
('102cs16006', '2018', 14, 16, 12, 11, 8, 6, 8),
('102cs16007', '2018', 15, 13, 11, 18, 8, 6, 8),
('102cs16008', '2018', 17, 16, 10, 15, 8, 6, 8),
('102cs16009', '2018', 18, 11, 14, 13, 8, 6, 8),
('102cs16010', '2018', 17, 10, 16, 13, 8, 6, 8),
('102cs16018', 'jan', 18, 12, 15, 15, 8, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sem4internal2`
--

CREATE TABLE `sem4internal2` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Datastructure_using_c` int(11) NOT NULL,
  `Oop_with_java` int(11) NOT NULL,
  `Operating_system` int(11) NOT NULL,
  `Pe&ic` int(11) NOT NULL,
  `ds_lab` int(11) NOT NULL,
  `Java_lab` int(11) NOT NULL,
  `Linux_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem4internal2`
--

INSERT INTO `sem4internal2` (`Reg_no`, `month`, `Datastructure_using_c`, `Oop_with_java`, `Operating_system`, `Pe&ic`, `ds_lab`, `Java_lab`, `Linux_lab`) VALUES
('102cs16001', '2018', 17, 10, 11, 13, 8, 6, 7),
('102cs16002', '2018', 14, 15, 15, 10, 8, 6, 6),
('102cs16003', '2018', 10, 12, 11, 13, 8, 6, 8),
('102cs16004', '2018', 11, 11, 10, 11, 8, 6, 5),
('102cs16005', '2018', 12, 15, 19, 13, 8, 6, 8),
('102cs16006', '2018', 14, 16, 12, 11, 8, 6, 8),
('102cs16007', '2018', 15, 13, 11, 18, 8, 6, 8),
('102cs16008', '2018', 17, 16, 10, 15, 8, 6, 8),
('102cs16009', '2018', 18, 11, 14, 13, 8, 6, 8),
('102cs16010', '2018', 17, 10, 16, 13, 8, 6, 8),
('102cs16018', 'jan', 18, 20, 20, 15, 10, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sem4internal3`
--

CREATE TABLE `sem4internal3` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Datastructure_using_c` int(11) NOT NULL,
  `Oop_with_java` int(11) NOT NULL,
  `Operating_system` int(11) NOT NULL,
  `Pe&ic` int(11) NOT NULL,
  `ds_lab` int(11) NOT NULL,
  `Java_lab` int(11) NOT NULL,
  `Linux_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem4internal3`
--

INSERT INTO `sem4internal3` (`Reg_no`, `month`, `Datastructure_using_c`, `Oop_with_java`, `Operating_system`, `Pe&ic`, `ds_lab`, `Java_lab`, `Linux_lab`) VALUES
('102cs16001', '2018', 17, 10, 11, 13, 8, 6, 7),
('102cs16002', '2018', 14, 15, 15, 10, 8, 6, 6),
('102cs16003', '2018', 10, 12, 11, 13, 8, 6, 8),
('102cs16004', '2018', 11, 11, 10, 11, 8, 6, 5),
('102cs16005', '2018', 12, 15, 19, 13, 8, 6, 8),
('102cs16006', '2018', 14, 16, 12, 11, 8, 6, 8),
('102cs16007', '2018', 15, 13, 11, 18, 8, 6, 8),
('102cs16008', '2018', 17, 16, 10, 15, 8, 6, 8),
('102cs16009', '2018', 18, 11, 14, 13, 8, 6, 8),
('102cs16010', '2018', 17, 10, 16, 13, 8, 6, 8),
('102cs16018', 'jan', 20, 20, 20, 19, 10, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sem5attdm1`
--

CREATE TABLE `sem5attdm1` (
  `reg_no` varchar(15) NOT NULL,
  `web_prog` int(11) NOT NULL,
  `software_engg` int(11) NOT NULL,
  `daa` int(11) NOT NULL,
  `green_computing` int(11) NOT NULL,
  `web_lab` int(11) NOT NULL,
  `daa_lab` int(11) NOT NULL,
  `pp_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem5attdm1`
--

INSERT INTO `sem5attdm1` (`reg_no`, `web_prog`, `software_engg`, `daa`, `green_computing`, `web_lab`, `daa_lab`, `pp_lab`, `Month_of_admin`) VALUES
('102cs16002', 12, 0, 10, 14, 6, 4, 0, 'january'),
('102cs16003', 12, 13, 11, 11, 7, 5, 5, '1stmonth'),
('102cs16004', 11, 12, 12, 11, 6, 6, 6, '1stmonth'),
('102cs16005', 13, 11, 13, 10, 4, 3, 4, '1stmonth'),
('102cs16006', 14, 12, 11, 11, 5, 5, 6, '1stmonth'),
('102cs16007', 12, 13, 15, 12, 4, 4, 5, '1stmonth'),
('102cs16008', 12, 12, 11, 12, 3, 3, 6, '1stmonth'),
('102cs16009', 11, 15, 11, 12, 7, 5, 4, '1stmonth'),
('102cs16010', 15, 12, 11, 15, 7, 2, 6, '1stmonth'),
('102cs16018', 10, 11, 12, 13, 15, 11, 9, 'feb'),
('kpkpkp123', 2, 2, 2, 2, 2, 2, 2, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem5attdm2`
--

CREATE TABLE `sem5attdm2` (
  `reg_no` varchar(15) NOT NULL,
  `web_prog` int(11) NOT NULL,
  `software_engg` int(11) NOT NULL,
  `daa` int(11) NOT NULL,
  `green_computing` int(11) NOT NULL,
  `web_lab` int(11) NOT NULL,
  `daa_lab` int(11) NOT NULL,
  `pp_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem5attdm2`
--

INSERT INTO `sem5attdm2` (`reg_no`, `web_prog`, `software_engg`, `daa`, `green_computing`, `web_lab`, `daa_lab`, `pp_lab`, `Month_of_admin`) VALUES
('102cs16001', 15, 12, 11, 12, 7, 2, 6, '1stmonth'),
('102cs16002', 11, 12, 10, 14, 6, 4, 4, '1stmonth'),
('102cs16003', 12, 13, 11, 11, 7, 5, 5, '1stmonth'),
('102cs16004', 11, 12, 12, 11, 6, 6, 6, '1stmonth'),
('102cs16005', 13, 11, 13, 10, 4, 3, 4, '1stmonth'),
('102cs16006', 14, 12, 11, 11, 5, 5, 6, '1stmonth'),
('102cs16007', 12, 13, 15, 12, 4, 4, 5, '1stmonth'),
('102cs16008', 12, 12, 11, 12, 3, 3, 6, '1stmonth'),
('102cs16009', 11, 15, 11, 12, 7, 5, 4, '1stmonth'),
('102cs16010', 15, 12, 11, 15, 7, 2, 6, '1stmonth'),
('102cs16018', 20, 15, 16, 13, 4, 5, 6, 'feb');

-- --------------------------------------------------------

--
-- Table structure for table `sem5attdm3`
--

CREATE TABLE `sem5attdm3` (
  `reg_no` varchar(15) NOT NULL,
  `web_prog` int(11) NOT NULL,
  `software_engg` int(11) NOT NULL,
  `daa` int(11) NOT NULL,
  `green_computing` int(11) NOT NULL,
  `web_lab` int(11) NOT NULL,
  `daa_lab` int(11) NOT NULL,
  `pp_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem5attdm3`
--

INSERT INTO `sem5attdm3` (`reg_no`, `web_prog`, `software_engg`, `daa`, `green_computing`, `web_lab`, `daa_lab`, `pp_lab`, `Month_of_admin`) VALUES
('102cs16001', 15, 12, 11, 12, 7, 2, 6, '1stmonth'),
('102cs16002', 11, 12, 10, 14, 6, 4, 4, '1stmonth'),
('102cs16003', 12, 13, 11, 11, 7, 5, 5, '1stmonth'),
('102cs16004', 11, 12, 12, 11, 6, 6, 6, '1stmonth'),
('102cs16005', 13, 11, 13, 10, 4, 3, 4, '1stmonth'),
('102cs16006', 14, 12, 11, 11, 5, 5, 6, '1stmonth'),
('102cs16007', 12, 13, 15, 12, 4, 4, 5, '1stmonth'),
('102cs16008', 12, 12, 11, 12, 3, 3, 6, '1stmonth'),
('102cs16009', 11, 15, 11, 12, 7, 5, 4, '1stmonth'),
('102cs16010', 15, 12, 11, 15, 7, 2, 6, '1stmonth'),
('102cs16018', 20, 15, 16, 13, 6, 5, 4, 'feb');

-- --------------------------------------------------------

--
-- Table structure for table `sem5attdm4`
--

CREATE TABLE `sem5attdm4` (
  `reg_no` varchar(15) NOT NULL,
  `web_prog` int(11) NOT NULL,
  `software_engg` int(11) NOT NULL,
  `daa` int(11) NOT NULL,
  `green_computing` int(11) NOT NULL,
  `web_lab` int(11) NOT NULL,
  `daa_lab` int(11) NOT NULL,
  `pp_lab` int(11) NOT NULL,
  `Month_of_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem5attdm4`
--

INSERT INTO `sem5attdm4` (`reg_no`, `web_prog`, `software_engg`, `daa`, `green_computing`, `web_lab`, `daa_lab`, `pp_lab`, `Month_of_admin`) VALUES
('102cs16001', 15, 12, 11, 12, 7, 2, 6, '1stmonth'),
('102cs16002', 11, 12, 10, 14, 6, 4, 4, '1stmonth'),
('102cs16003', 12, 13, 11, 11, 7, 5, 5, '1stmonth'),
('102cs16004', 11, 12, 12, 11, 6, 6, 6, '1stmonth'),
('102cs16005', 13, 11, 13, 10, 4, 3, 4, '1stmonth'),
('102cs16006', 14, 12, 11, 11, 5, 5, 6, '1stmonth'),
('102cs16007', 12, 13, 15, 12, 4, 4, 5, '1stmonth'),
('102cs16008', 12, 12, 11, 12, 3, 3, 6, '1stmonth'),
('102cs16009', 11, 15, 11, 12, 7, 5, 4, '1stmonth'),
('102cs16010', 15, 12, 11, 15, 7, 2, 6, '1stmonth'),
('102cs16018', 10, 11, 12, 13, 15, 11, 9, 'feb');

-- --------------------------------------------------------

--
-- Table structure for table `sem5ia`
--

CREATE TABLE `sem5ia` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Software_engg` int(11) NOT NULL,
  `Web_programming` int(11) NOT NULL,
  `Daa` int(11) NOT NULL,
  `Green_computing` int(11) NOT NULL,
  `Web_lab` int(11) NOT NULL,
  `Daa_lab` int(11) NOT NULL,
  `Professional_practice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem5ia`
--

INSERT INTO `sem5ia` (`Reg_no`, `month`, `Software_engg`, `Web_programming`, `Daa`, `Green_computing`, `Web_lab`, `Daa_lab`, `Professional_practice`) VALUES
('102cs16018', 'jan', 22, 21, 23, 8, 14, 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `sem5internal1`
--

CREATE TABLE `sem5internal1` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Software_engg` int(11) NOT NULL,
  `Web_programming` int(11) NOT NULL,
  `Daa` int(11) NOT NULL,
  `Green_computing` int(11) NOT NULL,
  `Web_lab` int(11) NOT NULL,
  `Daa_lab` int(11) NOT NULL,
  `Professional_practice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem5internal1`
--

INSERT INTO `sem5internal1` (`Reg_no`, `month`, `Software_engg`, `Web_programming`, `Daa`, `Green_computing`, `Web_lab`, `Daa_lab`, `Professional_practice`) VALUES
('102cs16002', '2018', 11, 14, 10, 13, 8, 7, 6),
('102cs16003', '2018', 13, 13, 13, 13, 6, 6, 7),
('102cs16004', '2018', 11, 14, 12, 13, 7, 8, 9),
('102cs16005', '2018', 10, 15, 13, 13, 5, 5, 6),
('102cs16006', '2018', 7, 11, 11, 13, 6, 5, 6),
('102cs16007', '2018', 13, 15, 5, 13, 8, 8, 8),
('102cs16008', '2018', 12, 11, 11, 13, 5, 9, 7),
('102cs16009', '2018', 14, 10, 10, 13, 6, 8, 6),
('102cs16010', '2018', 13, 15, 11, 13, 8, 7, 6),
('102cs16018', 'jan', 18, 15, 17, 18, 7, 8, 9),
('102cs1kp23', 'jan', 12, 12, 12, 12, 12, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sem5internal2`
--

CREATE TABLE `sem5internal2` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Software_engg` int(11) NOT NULL,
  `Web_programming` int(11) NOT NULL,
  `Daa` int(11) NOT NULL,
  `Green_computing` int(11) NOT NULL,
  `Web_lab` int(11) NOT NULL,
  `Daa_lab` int(11) NOT NULL,
  `Professional_practice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem5internal2`
--

INSERT INTO `sem5internal2` (`Reg_no`, `month`, `Software_engg`, `Web_programming`, `Daa`, `Green_computing`, `Web_lab`, `Daa_lab`, `Professional_practice`) VALUES
('102cs16001', '2018', 11, 15, 15, 13, 8, 7, 6),
('102cs16002', '2018', 12, 14, 10, 13, 8, 7, 6),
('102cs16003', '2018', 13, 13, 13, 13, 6, 6, 7),
('102cs16004', '2018', 10, 14, 12, 13, 7, 8, 9),
('102cs16005', '2018', 11, 15, 13, 13, 5, 5, 6),
('102cs16006', '2018', 13, 11, 11, 13, 6, 5, 6),
('102cs16007', '2018', 14, 15, 5, 13, 8, 8, 8),
('102cs16008', '2018', 12, 11, 11, 13, 5, 9, 7),
('102cs16009', '2018', 14, 10, 10, 13, 6, 8, 6),
('102cs16010', '2018', 13, 15, 11, 13, 8, 7, 6),
('102cs16018', 'jan', 18, 20, 17, 20, 7, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sem5internal3`
--

CREATE TABLE `sem5internal3` (
  `Reg_no` varchar(15) NOT NULL,
  `month` varchar(20) NOT NULL,
  `Software_engg` int(11) NOT NULL,
  `Web_programming` int(11) NOT NULL,
  `Daa` int(11) NOT NULL,
  `Green_computing` int(11) NOT NULL,
  `Web_lab` int(11) NOT NULL,
  `Daa_lab` int(11) NOT NULL,
  `Professional_practice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sem5internal3`
--

INSERT INTO `sem5internal3` (`Reg_no`, `month`, `Software_engg`, `Web_programming`, `Daa`, `Green_computing`, `Web_lab`, `Daa_lab`, `Professional_practice`) VALUES
('102cs16001', '2018', 13, 15, 15, 13, 8, 7, 6),
('102cs16002', '2018', 11, 14, 10, 13, 8, 7, 6),
('102cs16003', '2018', 13, 13, 13, 13, 6, 6, 7),
('102cs16004', '2018', 11, 14, 12, 13, 7, 8, 9),
('102cs16005', '2018', 10, 15, 13, 13, 5, 5, 6),
('102cs16006', '2018', 7, 11, 11, 13, 6, 5, 6),
('102cs16007', '2018', 13, 15, 5, 13, 8, 8, 8),
('102cs16008', '2018', 12, 11, 11, 13, 5, 9, 7),
('102cs16009', '2018', 14, 10, 10, 13, 6, 8, 6),
('102cs16010', '2018', 13, 15, 11, 13, 8, 7, 6),
('102cs16018', 'jan', 20, 19, 20, 18, 10, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sem6attdm1`
--

CREATE TABLE `sem6attdm1` (
  `regno` varchar(20) NOT NULL,
  `st` int(3) NOT NULL,
  `nsm` int(3) NOT NULL,
  `cc` int(3) NOT NULL,
  `st_lab` int(3) NOT NULL,
  `nsm_lab` int(3) NOT NULL,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6attdm1`
--

INSERT INTO `sem6attdm1` (`regno`, `st`, `nsm`, `cc`, `st_lab`, `nsm_lab`, `month`) VALUES
('102cs16018', 12, 11, 8, 9, 10, 'jan'),
('idk2321', 12, 12, 12, 12, 12, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem6attdm2`
--

CREATE TABLE `sem6attdm2` (
  `regno` varchar(20) NOT NULL,
  `st` int(3) NOT NULL,
  `nsm` int(3) NOT NULL,
  `cc` int(3) NOT NULL,
  `st_lab` int(3) NOT NULL,
  `nsm_lab` int(3) NOT NULL,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6attdm2`
--

INSERT INTO `sem6attdm2` (`regno`, `st`, `nsm`, `cc`, `st_lab`, `nsm_lab`, `month`) VALUES
('102cs16018', 0, 20, 14, 5, 4, 'january');

-- --------------------------------------------------------

--
-- Table structure for table `sem6attdm3`
--

CREATE TABLE `sem6attdm3` (
  `regno` varchar(20) NOT NULL,
  `st` int(3) NOT NULL,
  `nsm` int(3) NOT NULL,
  `cc` int(3) NOT NULL,
  `st_lab` int(3) NOT NULL,
  `nsm_lab` int(3) NOT NULL,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6attdm3`
--

INSERT INTO `sem6attdm3` (`regno`, `st`, `nsm`, `cc`, `st_lab`, `nsm_lab`, `month`) VALUES
('102cs16018', 12, 11, 8, 9, 10, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem6attdm4`
--

CREATE TABLE `sem6attdm4` (
  `regno` varchar(20) NOT NULL,
  `st` int(3) NOT NULL,
  `nsm` int(3) NOT NULL,
  `cc` int(3) NOT NULL,
  `st_lab` int(3) NOT NULL,
  `nsm_lab` int(3) NOT NULL,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6attdm4`
--

INSERT INTO `sem6attdm4` (`regno`, `st`, `nsm`, `cc`, `st_lab`, `nsm_lab`, `month`) VALUES
('102cs16018', 15, 12, 11, 4, 5, 'jan'),
('idk2321', 12, 12, 12, 12, 12, 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `sem6ia`
--

CREATE TABLE `sem6ia` (
  `regno` varchar(20) NOT NULL,
  `month` varchar(50) NOT NULL,
  `CC` int(3) NOT NULL,
  `NSM` int(3) NOT NULL,
  `ST` int(3) NOT NULL,
  `NSM_lab` int(3) NOT NULL,
  `ST_lab` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6ia`
--

INSERT INTO `sem6ia` (`regno`, `month`, `CC`, `NSM`, `ST`, `NSM_lab`, `ST_lab`) VALUES
('102cs16018', 'jan', 22, 22, 15, 12, 25);

-- --------------------------------------------------------

--
-- Table structure for table `sem6internal1`
--

CREATE TABLE `sem6internal1` (
  `regno` varchar(20) NOT NULL,
  `month` varchar(50) NOT NULL,
  `CC` int(3) NOT NULL,
  `NSM` int(3) NOT NULL,
  `ST` int(3) NOT NULL,
  `NSM_lab` int(3) NOT NULL,
  `ST_lab` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6internal1`
--

INSERT INTO `sem6internal1` (`regno`, `month`, `CC`, `NSM`, `ST`, `NSM_lab`, `ST_lab`) VALUES
('102cs16018', 'jan', 12, 15, 18, 9, 9),
('idk2321', 'feb', 12, 12, 12, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sem6internal2`
--

CREATE TABLE `sem6internal2` (
  `regno` varchar(20) NOT NULL,
  `month` varchar(50) NOT NULL,
  `CC` int(3) NOT NULL,
  `NSM` int(3) NOT NULL,
  `ST` int(3) NOT NULL,
  `NSM_lab` int(3) NOT NULL,
  `ST_lab` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6internal2`
--

INSERT INTO `sem6internal2` (`regno`, `month`, `CC`, `NSM`, `ST`, `NSM_lab`, `ST_lab`) VALUES
('102cs16001', 'june', 12, 12, 12, 12, 12),
('102cs16018', 'jan', 12, 15, 18, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sem6internal3`
--

CREATE TABLE `sem6internal3` (
  `regno` varchar(20) NOT NULL,
  `month` varchar(50) NOT NULL,
  `CC` int(3) NOT NULL,
  `NSM` int(3) NOT NULL,
  `ST` int(3) NOT NULL,
  `NSM_lab` int(3) NOT NULL,
  `ST_lab` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sem6internal3`
--

INSERT INTO `sem6internal3` (`regno`, `month`, `CC`, `NSM`, `ST`, `NSM_lab`, `ST_lab`) VALUES
('102cs16001', 'june', 12, 12, 12, 12, 12),
('102cs16018', 'jan', 12, 15, 18, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `semresult`
--

CREATE TABLE `semresult` (
  `sem` int(5) NOT NULL,
  `year` int(5) NOT NULL,
  `pass` int(20) NOT NULL,
  `fail` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semresult`
--

INSERT INTO `semresult` (`sem`, `year`, `pass`, `fail`) VALUES
(1, 2018, 51, 48),
(2, 2019, 53, 48),
(3, 2018, 65, 49),
(4, 2019, 65, 59),
(5, 2018, 60, 49),
(6, 2019, 57, 51);

-- --------------------------------------------------------

--
-- Table structure for table `slc`
--

CREATE TABLE `slc` (
  `name` varchar(34) NOT NULL,
  `sem1attd` int(2) NOT NULL,
  `sem1marks` int(3) NOT NULL,
  `sem2attd` int(2) NOT NULL,
  `sem2marks` int(3) NOT NULL,
  `sem3attd` int(2) NOT NULL,
  `sem3marks` int(3) NOT NULL,
  `sem4attd` int(2) NOT NULL,
  `sem4marks` int(3) NOT NULL,
  `sem5attd` int(2) NOT NULL,
  `sem5marks` int(3) NOT NULL,
  `sem6attd` int(2) NOT NULL,
  `sem6marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slc`
--

INSERT INTO `slc` (`name`, `sem1attd`, `sem1marks`, `sem2attd`, `sem2marks`, `sem3attd`, `sem3marks`, `sem4attd`, `sem4marks`, `sem5attd`, `sem5marks`, `sem6attd`, `sem6marks`) VALUES
('Pavan', 75, 325, 85, 450, 78, 356, 87, 500, 80, 498, 82, 450);

-- --------------------------------------------------------

--
-- Table structure for table `student_pro_1`
--

CREATE TABLE `student_pro_1` (
  `id` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `Mother_Name` varchar(30) NOT NULL,
  `Mother_Number` int(10) NOT NULL,
  `Father_Number` int(10) NOT NULL,
  `Father_Name` varchar(30) NOT NULL,
  `year_of_join` int(4) NOT NULL,
  `department` varchar(80) NOT NULL,
  `date_of_birth` date NOT NULL,
  `ph_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_pro_1`
--

INSERT INTO `student_pro_1` (`id`, `name`, `email`, `Mother_Name`, `Mother_Number`, `Father_Number`, `Father_Name`, `year_of_join`, `department`, `date_of_birth`, `ph_no`) VALUES
('', '', '', '', 0, 0, '', 0, '', '0000-00-00', 1886855797),
('102160160', 'demo', 'demo@gmail.com', 'demo', 123456, 123456, 'demo', 2015, 'cs', '2019-01-23', 123),
('102CS16003', 'AKSHAY KUMAR.U', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-02-20', 978556344),
('102CS16004', 'ARBAZ', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '1999-02-20', 976556348),
('102CS16005', 'CHANDRU', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-03-20', 978556314),
('102CS16006', 'DHARSHAN', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '1999-02-21', 979556344),
('102CS16007', 'JBL', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '1998-02-22', 970156344),
('102CS16008', 'NAVEEN', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '1998-02-23', 971556344),
('102CS16009', 'SHARMA', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '1998-02-24', 972556344),
('102CS16010', 'ROHIT', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '1998-02-25', 879269877),
('102CS16011', 'KRISHNA', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '1998-02-26', 974556344),
('102CS16012', 'ARYAN', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2001-02-20', 876556344),
('102CS16013', 'BALAJI', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-04-30', 776556344),
('102CS16014', 'ANIL', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-08-10', 971556144),
('102CS16015', 'AKASH', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2001-10-30', 976556444),
('102CS16016', 'APSAR', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '1998-02-20', 976556344),
('102cs16018', 'GOWTHAM', 'gowtham@gmail.com', 'mother', 144243, 4343434, 'father', 2016, 'computer science', '2000-12-30', 973963244),
('102cs16023', 'JOHN', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-08-03', 973556844),
('102cs16031', 'BHASKAR', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-01-03', 872556844),
('102cs16039', 'pavan kumar', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-07-15', 973963144),
('102cs160444', 'Demo', 'Demo@ddemo.demo', 'Demo mom', 897541231, 123546781, 'Demo dad', 2016, 'COMPUTER SCIENCE', '2000-01-30', 1686855796),
('102cs16048', 'ULLAS', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-06-03', 873556844),
('102cs16051', 'SHYAM', '', '', 0, 0, '', 2016, 'COMPUTER SCIENCE', '2000-08-30', 973556344),
('102cs160544', 'Demo', 'Demo@ddemo.demo', 'Demo mom', 897541231, 123546781, 'Demo dad', 2016, 'COMPUTER SCIENCE', '2000-01-30', 1786855796),
('102cs160644', 'Demo', 'Demo@ddemo.demo', 'Demo mom', 897541231, 123546781, 'Demo dad', 2016, 'COMPUTER SCIENCE', '2000-01-30', 1886855796),
('102cs17001', 'SUBHASH', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 845399786),
('102cs17002', 'SUBHASH2', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 875399786),
('102cs17003', 'SUBHASH3', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 847399786),
('102cs17004', 'SUBHASH4', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 845799786),
('102cs17005', 'SUBHASH5', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 845379786),
('102cs17006', 'SUBHASH6', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 845397786),
('102cs17007', 'SUBHASH7', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 845399776),
('102cs17008', 'SUBHASH8', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 845399787),
('102cs17009', 'SUBHASH9', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 645399786),
('102cs17010', 'SUBHASH10', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-12-30', 865399786),
('102cs17011', 'SUBHASH11', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-11-30', 845399781),
('102cs17012', 'SUBHASH12', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-11-30', 845399782),
('102cs17013', 'SUBHASH13', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-11-30', 845399783),
('102cs17014', 'SUBHASH14', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-11-30', 445399784),
('102cs17015', 'SUBHASH15', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-10-30', 845399785),
('102cs17016', 'SUBHASH16', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-06-30', 645399787),
('102cs17017', 'SUBHASH17', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-11-30', 845399788),
('102cs17018', 'SUBHASH18', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-10-30', 845399789),
('102cs17019', 'SUBHASH19', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-08-30', 845399780),
('102cs17020', 'SUBHASH20', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-08-30', 845399716),
('102cs17021', 'SUBHASH21', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-08-30', 845399726),
('102cs17022', 'SUBHASH22', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-07-30', 845399736),
('102cs17023', 'SUBHASH23', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-06-30', 845399746),
('102cs17024', 'SUBHASH24', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-05-30', 845399756),
('102cs17025', 'SUBHASH25', '', '', 0, 0, '', 2015, 'COMPUTER SCIENCE', '1998-04-30', 845399766),
('102cs17033', 'pavan', 'jdjd@f.f', 'mother', 789654, 789654, 'father', 2017, 'cs', '2019-03-22', 879654),
('102cskk15', 'kp', 'kp@kd.16', 'mom', 123654, 852369, 'dad', 2002, 'kp', '0200-12-25', 12364735),
('102cskkf1', 'kp', 'kp@kd.1f', 'mom', 123654, 852369, 'dad', 2002, 'kp', '0200-12-25', 7236473),
('102cskp12', 'kp', 'kp@fd.k', 'mom', 123654, 852369, 'dad', 2000, 'kp', '0200-12-23', 12364789),
('102cskp13', 'kp', 'kp@fd.o', 'mom', 123654, 852369, 'dad', 2000, 'kp', '0200-12-23', 12364788),
('102cskp14', 'kp', 'kp@fd.44', 'mom', 123654, 852369, 'dad', 2000, 'kp', '0200-12-23', 12364786),
('102cskp20', 'kp', 'kp@fd.54', 'mom', 123654, 852369, 'dad', 2000, 'kp', '0200-12-23', 12364766),
('102cskp22', 'kp', 'kp@fd.44', 'mom', 123654, 852369, 'dad', 2000, 'kp', '0200-12-23', 12364066),
('102cskpdd', 'kp', 'kp@fd.dd', 'mom', 123654, 852369, 'dad', 2000, 'kp', '0200-12-23', 72364066),
('102cskpdd1', 'kp', 'kp@fd.1f', 'mom', 123654, 852369, 'dad', 2001, 'kp', '0200-12-24', 72364726),
('102vk10636', 'vickie', 'vickie@kp.com', 'lucy', 321654, 0, '789654', 2015, 'cs', '2019-01-23', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `st_ma_2018_jun_1`
--

CREATE TABLE `st_ma_2018_jun_1` (
  `reg_no` varchar(10) NOT NULL,
  `exam_month_year` varchar(30) NOT NULL,
  `m1_external` int(3) NOT NULL,
  `applied_science_external` int(3) NOT NULL,
  `ceee_external` int(3) NOT NULL,
  `applied_science_lab_external` int(2) NOT NULL,
  `bcs_lab_external` int(2) NOT NULL,
  `be_lab_external` int(2) NOT NULL,
  `grand_total` int(3) NOT NULL,
  `result` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_ma_2018_jun_1`
--

INSERT INTO `st_ma_2018_jun_1` (`reg_no`, `exam_month_year`, `m1_external`, `applied_science_external`, `ceee_external`, `applied_science_lab_external`, `bcs_lab_external`, `be_lab_external`, `grand_total`, `result`) VALUES
('102cs16003', 'JUNE-2018', 90, 90, 70, 48, 47, 40, 534, 'PASS'),
('102cs16004', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 520, 'PASS'),
('102cs16005', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 520, 'PASS with distinction'),
('102cs16006', 'JUNE-2018', 90, 80, 70, 48, 47, 30, 510, 'PASS'),
('102cs16007', 'JUNE-2018', 70, 80, 70, 48, 47, 40, 500, 'PASS'),
('102cs16008', 'JUNE-2018', 60, 80, 70, 48, 47, 40, 490, 'PASS'),
('102cs16009', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 115, 'PASS'),
('102cs16010', 'JUNE-2018', 90, 80, 65, 48, 47, 40, 515, 'PASS'),
('102cs16011', 'JUNE-2018', 90, 80, 70, 46, 47, 40, 518, 'PASS'),
('102cs16012', 'JUNE-2018', 55, 80, 70, 48, 47, 40, 485, 'PASS'),
('102cs16013', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 520, 'PASS'),
('102cs16014', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 515, 'PASS with distinction'),
('102cs16015', 'JUNE-2018', 90, 90, 70, 48, 47, 35, 529, 'PASS'),
('102cs16016', 'JUNE-2018', 90, 93, 70, 48, 47, 40, 538, 'PASS'),
('102cs16018', 'JUNE-2018', 94, 100, 70, 48, 47, 40, 548, 'PASS with distinction'),
('102cs16023', 'JUNE-2018', 90, 90, 70, 48, 47, 40, 534, 'PASS with distinction'),
('102cs16031', 'JUNE-2018', 90, 90, 70, 48, 47, 40, 534, 'PASS'),
('102cs16039', 'JUNE-2018', 90, 95, 60, 46, 47, 40, 521, 'pass'),
('102cs16048', 'JUNE-2018', 90, 90, 70, 48, 47, 40, 534, 'PASS'),
('102cs16051', 'JUNE-2018', 90, 90, 70, 48, 47, 40, 534, 'PASS'),
('102cs16456', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 300, 'fail'),
('102cs16457', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 310, 'fail'),
('102cs16458', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 320, 'fail'),
('102cs16466', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 300, 'fail'),
('102cs17001', 'JUNE-2018', 90, 90, 70, 48, 47, 45, 532, 'PASS'),
('102cs17002', 'JUNE-2018', 90, 80, 74, 48, 47, 40, 599, 'PASS'),
('102cs17003', 'JUNE-2018', 98, 77, 70, 48, 47, 43, 555, 'PASS'),
('102cs17004', 'JUNE-2018', 90, 80, 70, 48, 47, 33, 577, 'PASS'),
('102cs17005', 'JUNE-2018', 70, 80, 70, 48, 47, 40, 556, 'PASS'),
('102cs17006', 'JUNE-2018', 90, 90, 70, 48, 47, 15, 505, 'FAIL'),
('102cs17007', 'JUNE-2018', 20, 93, 70, 48, 47, 40, 496, 'FAIL'),
('102cs17008', 'JUNE-2018', 94, 100, 70, 48, 47, 15, 523, 'FAIL'),
('102cs17009', 'JUNE-2018', 90, 20, 70, 48, 47, 33, 471, 'FAIL'),
('102cs17010', 'JUNE-2018', 90, 90, 70, 15, 47, 40, 499, 'FAIL'),
('102cs17011', 'JUNE-2018', 60, 80, 35, 5, 47, 40, 400, 'FAIL'),
('102cs17012', 'JUNE-2018', 90, 90, 70, 48, 47, 35, 525, 'PASS'),
('102cs17013', 'JUNE-2018', 90, 93, 70, 48, 47, 40, 566, 'PASS'),
('102cs17014', 'JUNE-2018', 94, 100, 70, 48, 47, 40, 548, 'PASS'),
('102cs17015', 'JUNE-2018', 90, 90, 70, 48, 47, 33, 544, 'PASS'),
('102cs17016', 'JUNE-2018', 90, 90, 70, 48, 47, 40, 532, 'PASS'),
('102cs17017', 'JUNE-2018', 60, 80, 70, 48, 47, 40, 450, 'PASS'),
('102cs17018', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 450, 'PASS'),
('102cs17019', 'JUNE-2018', 90, 80, 65, 48, 47, 40, 400, 'PASS'),
('102cs17020', 'JUNE-2018', 90, 80, 70, 46, 47, 40, 577, 'PASS'),
('102cs17021', 'JUNE-2018', 90, 80, 70, 48, 47, 55, 511, 'PASS'),
('102cs17022', 'JUNE-2018', 90, 80, 70, 48, 47, 40, 390, 'PASS'),
('102cs17023', 'JUNE-2018', 90, 80, 65, 48, 47, 40, 400, 'PASS'),
('102cs17024', 'JUNE-2018', 90, 80, 70, 46, 47, 40, 577, 'PASS'),
('102cs17025', 'JUNE-2018', 90, 80, 70, 48, 47, 55, 511, 'PASS'),
('102cs180kp', 'sdsd/1212', 13, 14, 32, 23, 23, 23, 23, 'distinction'),
('102cs1kp23', 'dec/0212', 55, 55, 55, 55, 55, 55, 55, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `st_ma_2018_jun_3`
--

CREATE TABLE `st_ma_2018_jun_3` (
  `reg_no` varchar(10) NOT NULL,
  `exam_month_year` varchar(30) NOT NULL,
  `prog_with_C_external` int(3) NOT NULL,
  `CO_external` int(2) NOT NULL,
  `dbms_external` int(3) NOT NULL,
  `CN_external` int(3) NOT NULL,
  `prog_with_C_lab_external` int(2) NOT NULL,
  `dbms_and_gui_lab_external` int(2) NOT NULL,
  `network_admin_lab_external` int(2) NOT NULL,
  `kannada1` int(2) NOT NULL,
  `grand_total` int(3) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_ma_2018_jun_3`
--

INSERT INTO `st_ma_2018_jun_3` (`reg_no`, `exam_month_year`, `prog_with_C_external`, `CO_external`, `dbms_external`, `CN_external`, `prog_with_C_lab_external`, `dbms_and_gui_lab_external`, `network_admin_lab_external`, `kannada1`, `grand_total`, `result`) VALUES
('102cs16003', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16004', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16005', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16006', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16007', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16008', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16010', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16011', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16012', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16013', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16014', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16015', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16016', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16018', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16023', 'JUNE-2018', 95, 85, 51, 47, 46, 47, 45, 25, 600, 'PASS'),
('102cs16028', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 45, 25, 680, 'PASS'),
('102cs16031', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16039', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16048', 'JUNE-2018', 96, 80, 70, 90, 49, 46, 46, 24, 646, 'pass'),
('102cs16051', 'JUNE-2018', 95, 85, 91, 97, 46, 47, 49, 25, 684, 'PASS'),
('102cs16456', 'JUNE-2018', 23, 23, 23, 23, 23, 23, 23, 23, 300, 'fail'),
('102cs16457', 'JUNE-2018', 23, 23, 23, 23, 23, 23, 23, 23, 310, 'fail'),
('102cs16458', 'JUNE-2018', 23, 23, 23, 23, 23, 23, 23, 23, 320, 'fail'),
('102cs16459', 'JUNE-2018', 23, 23, 23, 23, 23, 23, 23, 23, 330, 'fail'),
('102cs16461', 'JUNE-2018', 23, 23, 23, 23, 23, 23, 23, 23, 310, 'fail'),
('102cs17001', 'JUNE-2018', 90, 85, 91, 20, 46, 47, 49, 25, 500, 'FAIL'),
('102cs17002', 'JUNE-2018', 90, 15, 25, 97, 46, 47, 49, 25, 490, 'FAIL'),
('102cs17003', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 660, 'PASS'),
('102cs17004', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 699, 'PASS'),
('102cs17005', 'JUNE-2018', 90, 85, 20, 97, 46, 47, 49, 25, 570, 'FAIL'),
('102cs17006', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17007', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17008', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 15, 25, 400, 'FAIL'),
('102cs17009', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17010', 'JUNE-2018', 60, 85, 91, 97, 46, 47, 49, 25, 579, 'PASS'),
('102cs17011', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 670, 'PASS'),
('102cs17012', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 579, 'PASS'),
('102cs17013', 'JUNE-2018', 80, 85, 91, 97, 46, 47, 49, 25, 479, 'PASS'),
('102cs17014', 'JUNE-2018', 70, 85, 91, 97, 46, 47, 49, 25, 479, 'PASS'),
('102cs17015', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17016', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17017', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17018', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 670, 'PASS'),
('102cs17019', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 549, 'PASS'),
('102cs17020', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17021', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17022', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 679, 'PASS'),
('102cs17023', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 649, 'PASS'),
('102cs17024', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 629, 'PASS'),
('102cs17025', 'JUNE-2018', 90, 85, 91, 97, 46, 47, 49, 25, 636, 'PASS'),
('102kp10602', '', 0, 36, 0, 0, 0, 0, 0, 0, 36, '10'),
('102kp10603', '', 75, 70, 58, 67, 85, 85, 85, 0, 0, '98'),
('102kp10604', '', 80, 75, 61, 69, 80, 80, 80, 0, 0, '112'),
('102kp10605', '', 85, 80, 64, 20, 75, 75, 75, 0, 0, '115.333333'),
('102kp10606', '', 90, 85, 20, 73, 70, 70, 70, 0, 0, '121.333333'),
('102kp10607', '', 95, 90, 15, 75, 65, 65, 65, 0, 0, '127.333333'),
('102kp10608', '', 75, 10, 73, 77, 12, 12, 12, 0, 0, '133.333333'),
('102kp10609', '', 80, 85, 76, 79, 55, 55, 55, 0, 0, '139.333333'),
('102kp10610', '', 85, 95, 79, 81, 50, 50, 50, 0, 0, '111');

-- --------------------------------------------------------

--
-- Table structure for table `st_ma_2018_jun_5`
--

CREATE TABLE `st_ma_2018_jun_5` (
  `reg_no` varchar(10) NOT NULL,
  `exam_month_year` varchar(30) NOT NULL,
  `SE_external` int(3) NOT NULL,
  `web_prog_external` int(3) NOT NULL,
  `ada_external` int(3) NOT NULL,
  `GC_external` int(3) NOT NULL,
  `web_prog_lab_external` int(2) NOT NULL,
  `ada_lab_external` int(2) NOT NULL,
  `pp_eternal` int(2) NOT NULL,
  `project_work_1` int(2) NOT NULL,
  `grand_total` int(3) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_ma_2018_jun_5`
--

INSERT INTO `st_ma_2018_jun_5` (`reg_no`, `exam_month_year`, `SE_external`, `web_prog_external`, `ada_external`, `GC_external`, `web_prog_lab_external`, `ada_lab_external`, `pp_eternal`, `project_work_1`, `grand_total`, `result`) VALUES
('102cs16003', 'JUNE-2018', 80, 90, 85, 87, 46, 45, 47, 25, 652, 'PASS'),
('102cs16004', 'JUNE-2018', 80, 70, 68, 70, 45, 44, 45, 25, 588, 'pass'),
('102cs16005', 'JUNE-2018', 80, 90, 85, 87, 46, 45, 47, 25, 652, 'PASS'),
('102cs16006', 'JUNE-2018', 80, 70, 68, 70, 45, 44, 45, 25, 588, 'pass'),
('102cs16007', 'JUNE-2018', 85, 90, 85, 87, 46, 45, 47, 25, 657, 'PASS'),
('102cs16008', 'JUNE-2018', 80, 70, 71, 70, 45, 44, 45, 25, 591, 'pass'),
('102cs16009', 'JUNE-2018', 80, 90, 85, 83, 46, 45, 47, 25, 647, 'PASS'),
('102cs16010', 'JUNE-2018', 80, 70, 68, 70, 45, 44, 45, 25, 588, 'pass'),
('102cs16011', 'JUNE-2018', 80, 90, 85, 87, 46, 45, 47, 25, 652, 'PASS'),
('102cs16012', 'JUNE-2018', 80, 70, 68, 70, 45, 44, 45, 25, 588, 'pass'),
('102cs16013', 'JUNE-2018', 85, 90, 85, 87, 46, 45, 47, 25, 657, 'PASS'),
('102cs16014', 'JUNE-2018', 80, 70, 71, 70, 45, 44, 45, 25, 591, 'pass'),
('102cs16015', 'JUNE-2018', 85, 90, 85, 87, 46, 45, 47, 25, 657, 'PASS'),
('102cs16016', 'JUNE-2018', 80, 70, 71, 70, 45, 44, 45, 25, 591, 'pass'),
('102cs16018', 'JUNE-2018', 85, 90, 85, 87, 46, 45, 47, 25, 657, 'PASS'),
('102cs16028', 'JUNE-2018', 85, 90, 85, 87, 46, 45, 47, 25, 657, 'PASS'),
('102cs16031', 'JUNE-2018', 80, 90, 77, 70, 45, 44, 45, 256, 590, 'pass'),
('102cs16039', 'JUNE-2018', 80, 70, 71, 70, 45, 44, 45, 25, 591, 'pass'),
('102cs16048', 'JUNE-2018', 85, 90, 85, 87, 46, 45, 47, 25, 657, 'PASS'),
('102cs16051', 'JUNE-2018', 80, 70, 71, 70, 45, 44, 45, 25, 591, 'pass'),
('102cs17001', 'JUNE-2018', 70, 70, 71, 70, 45, 44, 45, 25, 581, 'pass'),
('102cs17002', 'JUNE-2018', 70, 70, 71, 70, 45, 44, 45, 25, 581, 'pass'),
('102cs17003', 'JUNE-2018', 70, 70, 71, 70, 45, 44, 45, 25, 581, 'pass'),
('102cs17004', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 571, 'pass'),
('102cs17005', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17006', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17007', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17008', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17009', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17010', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17011', 'JUNE-2018', 64, 70, 71, 20, 45, 44, 45, 25, 480, 'FAIL'),
('102cs17012', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 500, 'FAIL'),
('102cs17013', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17014', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17015', 'JUNE-2018', 20, 70, 71, 70, 45, 44, 45, 25, 390, 'FAIL'),
('102cs17016', 'JUNE-2018', 60, 70, 71, 70, 45, 44, 45, 25, 572, 'pass'),
('102cs17017', 'JUNE-2018', 64, 70, 71, 15, 45, 44, 45, 25, 521, 'FAIL'),
('102cs17018', 'JUNE-2018', 64, 70, 71, 70, 16, 44, 45, 25, 500, 'FAIL'),
('102cs17019', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 15, 25, 550, 'FAIL'),
('102cs17020', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17021', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17022', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17023', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17024', 'JUNE-2018', 64, 70, 71, 70, 45, 44, 45, 25, 576, 'pass'),
('102cs17025', 'JUNE-2018', 64, 70, 51, 70, 45, 44, 45, 25, 556, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `st_ma_2019_jan_2`
--

CREATE TABLE `st_ma_2019_jan_2` (
  `reg_no` varchar(10) NOT NULL,
  `exam_month_year` varchar(30) NOT NULL,
  `m2_external` int(3) NOT NULL,
  `communication_skills_in_english_external` int(3) NOT NULL,
  `dcf_external` int(3) NOT NULL,
  `de_lab_external` int(2) NOT NULL,
  `web_design_lab_external` int(2) NOT NULL,
  `multimedia_lab_external` int(2) NOT NULL,
  `grand_total` int(3) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_ma_2019_jan_2`
--

INSERT INTO `st_ma_2019_jan_2` (`reg_no`, `exam_month_year`, `m2_external`, `communication_skills_in_english_external`, `dcf_external`, `de_lab_external`, `web_design_lab_external`, `multimedia_lab_external`, `grand_total`, `result`) VALUES
('102cs16003', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16004', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs16005', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16006', 'JAN-2019', 75, 80, 90, 46, 48, 47, 500, 'pass'),
('102cs16007', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16008', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs16009', 'JAN-2019', 90, 24, 80, 48, 49, 49, 490, 'PASS'),
('102cs16010', 'JAN-2019', 75, 80, 90, 46, 48, 47, 450, 'pass'),
('102cs16011', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16012', 'JAN-2019', 75, 80, 90, 46, 48, 47, 500, 'pass'),
('102cs16013', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16014', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs16015', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16016', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs16018', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16023', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs16031', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16039', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs16048', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs16051', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs17001', 'JAN-2019', 90, 24, 80, 48, 49, 49, 500, 'PASS'),
('102cs17002', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs17003', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17004', 'JAN-2019', 75, 80, 90, 46, 48, 47, 500, 'pass'),
('102cs17005', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17006', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs17007', 'JAN-2019', 90, 24, 80, 48, 49, 49, 490, 'PASS'),
('102cs17008', 'JAN-2019', 75, 80, 90, 46, 48, 47, 450, 'pass'),
('102cs17009', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17010', 'JAN-2019', 75, 80, 90, 46, 48, 47, 500, 'pass'),
('102cs17011', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17012', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs17013', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17014', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs17015', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17016', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs17017', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17018', 'JAN-2019', 20, 80, 90, 46, 48, 47, 465, 'FAIL'),
('102cs17019', 'JAN-2019', 90, 24, 20, 48, 49, 49, 485, 'FAIL'),
('102cs17020', 'JAN-2019', 75, 80, 90, 46, 48, 47, 533, 'pass'),
('102cs17021', 'JAN-2019', 75, 80, 15, 46, 48, 47, 445, 'FAIL'),
('102cs17022', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17023', 'JAN-2019', 75, 80, 90, 46, 20, 47, 500, 'FAIL'),
('102cs17024', 'JAN-2019', 90, 24, 80, 48, 49, 49, 540, 'PASS'),
('102cs17025', 'JAN-2019', 75, 80, 90, 46, 48, 8, 499, 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `st_ma_2019_jan_4`
--

CREATE TABLE `st_ma_2019_jan_4` (
  `reg_no` varchar(10) NOT NULL,
  `exam_month_year` varchar(30) NOT NULL,
  `DS_using_C_external` int(3) NOT NULL,
  `OOP_with_java_external` int(2) NOT NULL,
  `OS_external` int(3) NOT NULL,
  `PE_and_IC_external` int(3) NOT NULL,
  `DS_lab_external` int(2) NOT NULL,
  `OOP_with_java_lab_external` int(2) NOT NULL,
  `linux_lab_external` int(2) NOT NULL,
  `kannada` int(2) NOT NULL,
  `grand_total` int(3) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_ma_2019_jan_4`
--

INSERT INTO `st_ma_2019_jan_4` (`reg_no`, `exam_month_year`, `DS_using_C_external`, `OOP_with_java_external`, `OS_external`, `PE_and_IC_external`, `DS_lab_external`, `OOP_with_java_lab_external`, `linux_lab_external`, `kannada`, `grand_total`, `result`) VALUES
('102cs16003', 'JAN-2019', 25, 90, 90, 80, 41, 49, 49, 38, 660, 'PASS'),
('102cs16004', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs16005', 'JAN-2019', 25, 90, 90, 80, 41, 49, 49, 38, 654, 'PASS'),
('102cs16006', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs16007', 'JAN-2019', 25, 90, 90, 80, 47, 49, 49, 38, 666, 'PASS'),
('102cs16008', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs16009', 'JAN-2019', 25, 90, 90, 70, 41, 49, 49, 38, 650, 'PASS'),
('102cs16010', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs16011', 'JAN-2019', 25, 90, 90, 80, 41, 49, 49, 38, 654, 'PASS'),
('102cs16012', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs16013', 'JAN-2019', 25, 90, 90, 80, 47, 49, 49, 38, 666, 'PASS'),
('102cs16014', 'JAN-2019', 25, 90, 90, 80, 47, 49, 45, 38, 656, 'PASS'),
('102cs16015', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs16016', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs16018', 'JAN-2019', 25, 90, 90, 80, 47, 49, 49, 38, 666, 'PASS'),
('102cs16023', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 632, 'pass'),
('102cs16031', 'JAN-2019', 85, 90, 76, 70, 47, 46, 49, 35, 633, 'pass'),
('102cs16039', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs16048', 'JAN-2019', 25, 85, 90, 80, 47, 49, 49, 38, 661, 'PASS'),
('102cs16051', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17001', 'JAN-2019', 25, 90, 90, 80, 41, 49, 49, 38, 660, 'PASS'),
('102cs17002', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17003', 'JAN-2019', 25, 90, 90, 80, 41, 49, 49, 38, 654, 'PASS'),
('102cs17004', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17005', 'JAN-2019', 25, 90, 90, 80, 47, 49, 49, 38, 666, 'PASS'),
('102cs17006', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17007', 'JAN-2019', 25, 90, 90, 70, 41, 49, 49, 38, 650, 'PASS'),
('102cs17008', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17009', 'JAN-2019', 25, 90, 90, 80, 41, 49, 49, 38, 654, 'PASS'),
('102cs17010', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17011', 'JAN-2019', 25, 90, 90, 80, 47, 49, 49, 38, 666, 'PASS'),
('102cs17012', 'JAN-2019', 25, 90, 90, 80, 47, 49, 45, 38, 656, 'PASS'),
('102cs17013', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17014', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17015', 'JAN-2019', 25, 90, 90, 80, 47, 49, 49, 12, 600, 'FAIL'),
('102cs17016', 'JAN-2019', 85, 90, 80, 70, 47, 46, 5, 35, 567, 'FAIL'),
('102cs17017', 'JAN-2019', 85, 90, 26, 70, 47, 46, 49, 35, 573, 'FAIL'),
('102cs17018', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17019', 'JAN-2019', 25, 85, 90, 80, 47, 49, 49, 38, 661, 'PASS'),
('102cs17020', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 637, 'pass'),
('102cs17021', 'JAN-2019', 85, 90, 80, 70, 47, 46, 49, 35, 632, 'pass'),
('102cs17022', 'JAN-2019', 85, 90, 76, 70, 47, 6, 49, 35, 593, 'FAIL'),
('102cs17023', 'JAN-2019', 85, 90, 80, 70, 7, 46, 49, 35, 607, 'FAIL'),
('102cs17024', 'JAN-2019', 25, 85, 90, 80, 47, 49, 49, 38, 661, 'PASS'),
('102cs17025', 'JAN-2019', 85, 20, 80, 70, 47, 46, 49, 35, 623, 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `st_ma_2019_jan_6`
--

CREATE TABLE `st_ma_2019_jan_6` (
  `reg_no` varchar(10) NOT NULL,
  `exam_month_year` varchar(30) NOT NULL,
  `ST_external` int(3) NOT NULL,
  `NS_management_external` int(3) NOT NULL,
  `CC_MC_IOT_ISM_external` int(3) NOT NULL,
  `ST_lab_external` int(2) NOT NULL,
  `NS_lab_external` int(2) NOT NULL,
  `softskills_intern` int(2) NOT NULL,
  `project_work_2` int(3) NOT NULL,
  `grand_total` int(3) DEFAULT NULL,
  `result` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_ma_2019_jan_6`
--

INSERT INTO `st_ma_2019_jan_6` (`reg_no`, `exam_month_year`, `ST_external`, `NS_management_external`, `CC_MC_IOT_ISM_external`, `ST_lab_external`, `NS_lab_external`, `softskills_intern`, `project_work_2`, `grand_total`, `result`) VALUES
('102cs16003', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 534, 'fail'),
('102cs16004', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 533, 'fail'),
('102cs16005', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 534, 'fail'),
('102cs16006', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 533, 'fail'),
('102cs16007', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 600, 'fail'),
('102cs16008', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 560, 'fail'),
('102cs16009', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 534, 'fail'),
('102cs16010', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 533, 'fail'),
('102cs16011', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 534, 'PASS'),
('102cs16012', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 533, 'pass'),
('102cs16013', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 600, 'pass'),
('102cs16014', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 560, 'pass'),
('102cs16015', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 612, 'pass'),
('102cs16016', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 590, 'pass'),
('102cs16018', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 300, 'fail'),
('102cs16023', 'JUNE-2018', 20, 80, 80, 45, 45, 25, 95, 510, 'FAIL'),
('102cs16028', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 560, 'pass'),
('102cs16031', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 612, 'pass'),
('102cs16039', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 322, 'fail'),
('102cs16048', 'JUNE-2018', 70, 80, 80, 45, 45, 25, 95, 590, 'pass'),
('102cs16051', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 540, 'pass'),
('102cs17001', 'JUNE-2018', 90, 92, 94, 48, 47, 225, 95, 490, 'pass'),
('102cs17002', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 590, 'pass'),
('102cs17003', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 590, 'pass'),
('102cs17004', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 590, 'pass'),
('102cs17005', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 590, 'pass'),
('102cs17006', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 599, 'pass'),
('102cs17007', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 530, 'pass'),
('102cs17008', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 591, 'pass'),
('102cs17009', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 590, 'pass'),
('102cs17010', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17011', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17012', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17013', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17014', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17015', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17016', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17017', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'fail'),
('102cs17018', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'fail'),
('102cs17019', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17020', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17021', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17022', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17023', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17024', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass'),
('102cs17025', 'JUNE-2018', 85, 92, 94, 48, 47, 225, 95, 592, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `m1` int(12) NOT NULL,
  `sc` int(12) NOT NULL,
  `ceee` int(12) NOT NULL,
  `belab` int(12) NOT NULL,
  `sclab` int(12) NOT NULL,
  `bcslab` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`m1`, `sc`, `ceee`, `belab`, `sclab`, `bcslab`) VALUES
(35, 36, 35, 36, 39, 40),
(35, 36, 35, 36, 39, 40),
(35, 36, 35, 36, 39, 40),
(35, 36, 35, 36, 39, 40),
(35, 36, 35, 36, 39, 40),
(50, 75, 20, 30, 20, 40),
(50, 60, 70, 30, 10, 20),
(35, 36, 35, 36, 39, 40),
(15, 90, 55, 65, 68, 40),
(75, 50, 75, 15, 45, 40),
(95, 60, 85, 45, 45, 40),
(35, 40, 0, 15, 45, 10),
(25, 20, 0, 15, 15, 10),
(15, 20, 0, 25, 25, 10),
(95, 80, 90, 45, 45, 40),
(95, 80, 10, 45, 45, 50),
(55, 50, 40, 45, 45, 50),
(36, 36, 36, 36, 36, 36),
(37, 37, 37, 37, 37, 37),
(36, 36, 36, 36, 36, 36),
(37, 37, 37, 37, 37, 37),
(38, 38, 38, 38, 38, 38),
(38, 38, 38, 38, 38, 38),
(35, 36, 35, 36, 39, 40),
(35, 36, 35, 36, 39, 40),
(35, 36, 35, 36, 39, 40),
(35, 36, 35, 36, 39, 40),
(35, 36, 35, 36, 39, 40),
(50, 75, 20, 30, 20, 40),
(50, 60, 70, 30, 10, 20),
(35, 36, 35, 36, 39, 40),
(15, 90, 55, 65, 68, 40),
(75, 50, 75, 15, 45, 40),
(95, 60, 85, 45, 45, 40),
(35, 40, 0, 15, 45, 10),
(25, 20, 0, 15, 15, 10),
(15, 20, 0, 25, 25, 10),
(95, 80, 90, 45, 45, 40),
(95, 80, 10, 45, 45, 50),
(55, 50, 40, 45, 45, 50),
(36, 36, 36, 36, 36, 36),
(37, 37, 37, 37, 37, 37),
(36, 36, 36, 36, 36, 36),
(37, 37, 37, 37, 37, 37),
(38, 38, 38, 38, 38, 38),
(38, 38, 38, 38, 38, 38);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `semester` varchar(6) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_code` varchar(15) NOT NULL,
  `attdm1` int(4) NOT NULL,
  `attdm2` int(4) NOT NULL,
  `attdm3` int(4) NOT NULL,
  `attdm4` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4`) VALUES
('2', 'english', '15cp01e', 13, 13, 14, 15),
('2', 'math2', '15cs02m', 12, 15, 12, 10),
('1', 'BCS lab', '15CS11P', 6, 7, 6, 8),
('2', 'DCF', '15cs21t', 12, 13, 15, 10),
('2', 'basic web lab', '15cs22p', 10, 8, 9, 6),
('2', 'MM lab', '15cs23p', 0, 0, 0, 0),
('3', 'C Programming', '15cs31t', 12, 14, 15, 10),
('3', 'CO', '15cs32t', 15, 12, 14, 10),
('3', 'DBMS', '15cs33t', 12, 15, 14, 8),
('3', 'CN', '15cs34t', 13, 15, 12, 9),
('3', 'C Programming Lab', '15cs35p', 8, 7, 9, 6),
('3', 'DBMS & GUI lab', '15cs36p', 8, 7, 9, 6),
('3', 'Network Lab', '15cs37p', 12, 8, 9, 6),
('4', 'Data Structures', '15cs41t', 13, 14, 15, 9),
('4', 'OOP with JAVA', '15cs42t', 15, 14, 12, 9),
('4', 'Operating System', '15cs43t', 12, 15, 14, 10),
('4', 'PC & IC', '15cs44t', 13, 12, 15, 10),
('4', 'Data Structure Lab', '15cs45p', 12, 9, 8, 7),
('4', 'OOP with JAVA Lab', '15cs46p', 11, 9, 8, 7),
('4', 'Linux Lab', '15cs47p', 10, 9, 8, 7),
('5', 'Software Engg', '15cs51t', 12, 14, 15, 10),
('5', 'Web Programming', '15cs52t', 13, 14, 15, 10),
('5', 'D.A.A', '15cs53t', 15, 14, 12, 10),
('5', 'Green Computing', '15cs54t', 16, 14, 12, 10),
('5', 'Web Programming Lab', '15cs55p', 10, 9, 8, 7),
('5', 'D.A.A Lab', '15cs56p', 12, 8, 9, 10),
('5', 'Professinal Practices', '15cs57p', 8, 9, 10, 10),
('6', 'Software Testing', '15cs61t', 12, 14, 16, 10),
('6', 'Network Security Mgmt', '15cs62t', 14, 15, 13, 10),
('6', 'Cloud COmputing', '15cs63t', 14, 15, 12, 10),
('6', 'Software Testing Lab', '15cs64p', 9, 8, 9, 10),
('6', 'Network Security Lab', '15cs65p', 8, 9, 7, 8),
('1', 'CEEE', '15EC01T', 15, 12, 8, 9),
('1', 'Basic Elec Lab', '15EC02P', 8, 9, 6, 7),
('2', 'DE lab', '15ec03p', 10, 8, 9, 7),
('4', 'Kannada', '15KA4KT', 12, 14, 16, 10),
('1', 'Engg Math-1', '15SC01M', 15, 8, 8, 7),
('1', 'App Science', '15SC03S', 13, 17, 12, 8),
('1', 'App Sc Lab', '15SC04P', 8, 7, 6, 7),
('', 'kp', 'kp123', 12, 12, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_excel`
--

CREATE TABLE `tbl_excel` (
  `excel_id` int(11) NOT NULL,
  `excel_name` varchar(250) NOT NULL,
  `excel_email` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_excel`
--

INSERT INTO `tbl_excel` (`excel_id`, `excel_name`, `excel_email`) VALUES
(1, 'kp', 'kp@jj.l'),
(2, 'pk', 'pk@kk.l'),
(3, 'kkp', 'p@kk.l'),
(4, 'ppk', 'kkp@kk.l'),
(5, 'kp', 'kp@jj.l'),
(6, 'pk', 'pk@kk.l'),
(7, 'kkp', 'p@kk.l'),
(8, 'ppk', 'kkp@kk.l'),
(9, 'kp', 'kp@jj.l'),
(10, 'pk', 'pk@kk.l'),
(11, 'kkp', 'p@kk.l'),
(12, 'ppk', 'kkp@kk.l');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `slno` int(225) NOT NULL,
  `name` varchar(25) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`slno`, `name`, `reg`, `type`, `sub`, `des`, `date`) VALUES
(3, 'pavan', '102cs16039', 'internals', 'Email Data is Incorrect', 'hello please review my email and change it to kppavu@gmail.com', '2019-04-05'),
(4, 'pavan', '102cs16039', 'pernsonal_information', 'My Mobile number is incorrect', 'Please change the mobile number to 9686855796', '2019-04-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence_sem1`
--
ALTER TABLE `attendence_sem1`
  ADD UNIQUE KEY `subject_name` (`subject_name`);

--
-- Indexes for table `attendence_sub1`
--
ALTER TABLE `attendence_sub1`
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `collegeinfo_master`
--
ALTER TABLE `collegeinfo_master`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `attend_master_idfk_2` (`down_id`);

--
-- Indexes for table `sem1attd`
--
ALTER TABLE `sem1attd`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `sem1attdm1`
--
ALTER TABLE `sem1attdm1`
  ADD UNIQUE KEY `regno` (`reg_no`);

--
-- Indexes for table `sem1attdm2`
--
ALTER TABLE `sem1attdm2`
  ADD UNIQUE KEY `regno` (`reg_no`);

--
-- Indexes for table `sem1attdm3`
--
ALTER TABLE `sem1attdm3`
  ADD UNIQUE KEY `regno` (`reg_no`);

--
-- Indexes for table `sem1attdm4`
--
ALTER TABLE `sem1attdm4`
  ADD UNIQUE KEY `regno` (`reg_no`);

--
-- Indexes for table `sem1ia`
--
ALTER TABLE `sem1ia`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem1internal1`
--
ALTER TABLE `sem1internal1`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem1internal2`
--
ALTER TABLE `sem1internal2`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem1internal3`
--
ALTER TABLE `sem1internal3`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem2attdm1`
--
ALTER TABLE `sem2attdm1`
  ADD UNIQUE KEY `regno` (`reg_no`);

--
-- Indexes for table `sem2attdm2`
--
ALTER TABLE `sem2attdm2`
  ADD UNIQUE KEY `regno` (`reg_no`);

--
-- Indexes for table `sem2attdm3`
--
ALTER TABLE `sem2attdm3`
  ADD UNIQUE KEY `regno` (`reg_no`);

--
-- Indexes for table `sem2attdm4`
--
ALTER TABLE `sem2attdm4`
  ADD UNIQUE KEY `regno` (`reg_no`);

--
-- Indexes for table `sem2ia`
--
ALTER TABLE `sem2ia`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem2internal1`
--
ALTER TABLE `sem2internal1`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem2internal2`
--
ALTER TABLE `sem2internal2`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem2internal3`
--
ALTER TABLE `sem2internal3`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem3attdm1`
--
ALTER TABLE `sem3attdm1`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem3attdm2`
--
ALTER TABLE `sem3attdm2`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem3attdm3`
--
ALTER TABLE `sem3attdm3`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem3attdm4`
--
ALTER TABLE `sem3attdm4`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem3ia`
--
ALTER TABLE `sem3ia`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem3internal1`
--
ALTER TABLE `sem3internal1`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem3internal2`
--
ALTER TABLE `sem3internal2`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem3internal3`
--
ALTER TABLE `sem3internal3`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem4attdm1`
--
ALTER TABLE `sem4attdm1`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem4attdm2`
--
ALTER TABLE `sem4attdm2`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem4attdm3`
--
ALTER TABLE `sem4attdm3`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem4attdm4`
--
ALTER TABLE `sem4attdm4`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem4ia`
--
ALTER TABLE `sem4ia`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem4internal1`
--
ALTER TABLE `sem4internal1`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem4internal2`
--
ALTER TABLE `sem4internal2`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem4internal3`
--
ALTER TABLE `sem4internal3`
  ADD UNIQUE KEY `reg_no` (`Reg_no`);

--
-- Indexes for table `sem5attdm1`
--
ALTER TABLE `sem5attdm1`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem5attdm2`
--
ALTER TABLE `sem5attdm2`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem5attdm3`
--
ALTER TABLE `sem5attdm3`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem5attdm4`
--
ALTER TABLE `sem5attdm4`
  ADD UNIQUE KEY `reg` (`reg_no`);

--
-- Indexes for table `sem5ia`
--
ALTER TABLE `sem5ia`
  ADD UNIQUE KEY `reg_num` (`Reg_no`);

--
-- Indexes for table `sem5internal1`
--
ALTER TABLE `sem5internal1`
  ADD UNIQUE KEY `reg_num` (`Reg_no`);

--
-- Indexes for table `sem5internal2`
--
ALTER TABLE `sem5internal2`
  ADD UNIQUE KEY `reg_num` (`Reg_no`);

--
-- Indexes for table `sem5internal3`
--
ALTER TABLE `sem5internal3`
  ADD UNIQUE KEY `reg_num` (`Reg_no`);

--
-- Indexes for table `sem6attdm1`
--
ALTER TABLE `sem6attdm1`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `sem6attdm2`
--
ALTER TABLE `sem6attdm2`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `sem6attdm3`
--
ALTER TABLE `sem6attdm3`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `sem6attdm4`
--
ALTER TABLE `sem6attdm4`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `sem6ia`
--
ALTER TABLE `sem6ia`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `sem6internal1`
--
ALTER TABLE `sem6internal1`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `sem6internal2`
--
ALTER TABLE `sem6internal2`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `sem6internal3`
--
ALTER TABLE `sem6internal3`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `semresult`
--
ALTER TABLE `semresult`
  ADD UNIQUE KEY `sem` (`sem`);

--
-- Indexes for table `slc`
--
ALTER TABLE `slc`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `student_pro_1`
--
ALTER TABLE `student_pro_1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ph_no` (`ph_no`);

--
-- Indexes for table `st_ma_2018_jun_1`
--
ALTER TABLE `st_ma_2018_jun_1`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `st_ma_2018_jun_3`
--
ALTER TABLE `st_ma_2018_jun_3`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `st_ma_2018_jun_5`
--
ALTER TABLE `st_ma_2018_jun_5`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `st_ma_2019_jan_2`
--
ALTER TABLE `st_ma_2019_jan_2`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `st_ma_2019_jan_4`
--
ALTER TABLE `st_ma_2019_jan_4`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `st_ma_2019_jan_6`
--
ALTER TABLE `st_ma_2019_jan_6`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_code`),
  ADD UNIQUE KEY `subject_name` (`subject_name`);

--
-- Indexes for table `tbl_excel`
--
ALTER TABLE `tbl_excel`
  ADD PRIMARY KEY (`excel_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collegeinfo_master`
--
ALTER TABLE `collegeinfo_master`
  MODIFY `info_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `event_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `news_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `student_pro_1`
--
ALTER TABLE `student_pro_1`
  MODIFY `ph_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `tbl_excel`
--
ALTER TABLE `tbl_excel`
  MODIFY `excel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `slno` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
