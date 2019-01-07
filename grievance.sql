-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 07:40 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grievance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'kumarsourabh556@gmail.com', '13901055');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `email`, `password`) VALUES
(1, 'guest@gmail.com', 'guestlogin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Roll` varchar(15) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `GrievanceType` varchar(20) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Grievance` varchar(250) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(25) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Roll`, `Department`, `GrievanceType`, `Subject`, `Grievance`, `Email`, `Pass`, `Status`, `datetime`, `Month`) VALUES
(1, 'sourabh kumar', 'BE/6153/16', 'IT', 'Mess', 'Mess Menu', 'Menu is not good', 'kumarsourabh556@gmail.com', '1234', 'Done', '0000-00-00 00:00:00', '2019-02'),
(2, 'Rahul Kumar', '6166/16', 'ITY', 'Mess', 'Mess Menu', 'Our mess incharge is not taking care of mess menu', 'rahulkvbr@gmail.com', '13901055', 'Done', '0000-00-00 00:00:00', ''),
(3, 'Vibhor Singh', '6159/16', 'EEE', 'Labs', 'Electric instruments', 'Instrument are not good.', 'vibhorsgahlot@gmail.com', '1234', 'Done', '2018-08-01 14:07:03', ''),
(4, 'vedant tibrewal', 'BE/6167/16', 'IT', 'Academics', 'njhn', 'jknkhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'vedanttibrewal2010@gmail.com', '1234', 'Done', '2018-08-01 14:34:30', ''),
(6, 'Sagar', 'BE/6157/16', 'Maths', 'Academics', 'Electric instruments', 'kj', 'kumarsagar5962@gmail.com', '1234', 'Not Done', '2018-08-05 16:10:32', '2018-01'),
(16, 'Sagar', '', '', '', '', '', 'kumarsagar5962@gmail.com', '12345', '', '2018-08-05 22:20:34', ''),
(21, 'Sagar', '', '', '', '', '', 'kumarsourabh556@gmail.com', '12345', '', '0000-00-00 00:00:00', ''),
(22, 'Dhruv gupta', '', '', '', '', '', 'djcd@gmail.com', 'cdloves', 'Done', '0000-00-00 00:00:00', ''),
(23, 'Dhruv gupta', '', '', '', '', '', 'djcd@gmail.com', 'cdloves', '', '0000-00-00 00:00:00', '2018-02'),
(24, 'Shalu', '', '', '', '', '', 'shalu@gmail.com', '1234', 'Done', '0000-00-00 00:00:00', '2018-02'),
(25, 'Vikash Ranjan', 'BE/6157/16', 'CSE', 'Labs', 'Electric instruments', 'klkkl', 'vikashpat@gmail.com', '1234', 'Done', '0000-00-00 00:00:00', '2018-02'),
(27, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', '', '2018-08-10 10:53:09', ''),
(28, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', '', '2018-08-10 10:55:18', ''),
(29, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', '', '2018-08-10 10:57:35', ''),
(30, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', '', '2018-08-10 10:58:00', ''),
(31, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', '', '2018-08-10 10:59:52', ''),
(32, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', '', '2018-08-10 11:00:32', ''),
(33, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', 'Done', '2018-08-10 11:01:01', ''),
(34, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', '', '2018-08-10 11:01:23', ''),
(35, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', '', '2018-08-10 11:01:43', ''),
(36, 'Keshav Madhav', '', '', '', '', '', 'keshav@gmail.com', '1234', 'Done', '2018-08-10 11:02:29', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
