-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2018 at 02:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `rollno` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sub1` varchar(200) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL,
  `sub4` int(11) NOT NULL,
  `sub5` int(11) NOT NULL,
  `sub6` int(11) NOT NULL,
  `batch` int(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`rollno`, `division`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `batch`, `year`, `total`, `password`) VALUES
('15IT1092', 'A', 'chinmay vinchurkar', '28', 2, 1, 0, 3, 0, 1, '3', '', '1234'),
('15IT3005', 'A', 'amit gawai', '21', 1, 0, 0, 0, 0, 1, '3', '', '1234'),
('15IT6007', 'A', 'kaustubh the great', '10', 1, 1, 0, 2, 0, 1, '3', '', '1234'),
('15IT1003', 'A', 'sirisha the grwtr', '9', 0, 0, 0, 3, 0, 1, '3', '', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `marks_upload`
--

CREATE TABLE `marks_upload` (
  `rollno` varchar(200) NOT NULL,
  `uploadlink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_upload`
--

INSERT INTO `marks_upload` (`rollno`, `uploadlink`) VALUES
('45yr47ehtru4t4', 'storage/45yr47ehtru4t4filename.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `name` varchar(200) NOT NULL,
  `P_name` varchar(200) NOT NULL,
  `rollno` varchar(200) NOT NULL,
  `P_contact_no` varchar(200) NOT NULL,
  `P_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`name`, `P_name`, `rollno`, `P_contact_no`, `P_email`) VALUES
('Chinmay', 'Gajanan', '15IT1092', '8755274886', 'chinmayvinchurkar24@gmail.com'),
('Amit Gawai', 'kaustubh', '15IT3004', '845933473573', 'something@mail.com'),
('shirisha agarthala', 'kashinath ', '15IT301997', '99224455', 'somethin@gmail.com'),
('test', 'parent test', 'test1093', '1355928448', 'testtest@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `Subjects`
--

CREATE TABLE `Subjects` (
  `Year` varchar(25) NOT NULL,
  `Sub1` varchar(25) NOT NULL,
  `Sub2` varchar(25) NOT NULL,
  `Sub3` varchar(25) NOT NULL,
  `Sub4` varchar(25) NOT NULL,
  `Sub5` varchar(25) NOT NULL,
  `Sub6` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Subjects`
--

INSERT INTO `Subjects` (`Year`, `Sub1`, `Sub2`, `Sub3`, `Sub4`, `Sub5`, `Sub6`) VALUES
('BE', 'SEO', 'TRA', 'POR', 'ART', 'JGH', 'PTR'),
('SE', 'DSA', 'ADC', 'PADC', 'M3', 'DBMS', 'AT'),
('TE', 'OST', 'ABMS', 'SE', 'DMBI', 'OS', 'COA');

-- --------------------------------------------------------

--
-- Table structure for table `Teacher_table`
--

CREATE TABLE `Teacher_table` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Division` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Teacher_table`
--

INSERT INTO `Teacher_table` (`username`, `password`, `Name`, `Department`, `Division`) VALUES
('MichAmit', 'Michael78', 'Amit Gawai', 'IT', 'A'),
('chinmay60', '1234', 'Chinmay V', 'IT', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks_upload`
--
ALTER TABLE `marks_upload`
  ADD UNIQUE KEY `rollno` (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
