-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 10:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `data`) VALUES
(1, 'rm218691@gmail.com', 'e53fcde5b60889071303ed98dca4d80523824dde', '2019-09-29 08:46:08'),
(2, 'manasa123@gmail.com', '0828dce97e9d29ad8547b9b588fa474a8eef0af1', '2019-09-28 15:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(150) NOT NULL,
  `name` varchar(250) NOT NULL,
  `class` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `name`, `class`, `subject`, `date`, `status`) VALUES
(1, 'Omkar Mani', '9', 'Biology', '2019-10-01', 'Done'),
(2, 'Harish Mani', '6', 'Social Studies', '2019-10-01', 'Done'),
(3, 'Omkar', '9', 'English', '2019-10-02', 'Pending'),
(4, 'Harish', '6', 'Science', '2019-10-02', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(15) NOT NULL,
  `pay_name` varchar(25) NOT NULL,
  `pay_class` varchar(25) NOT NULL,
  `pay_amt` varchar(25) NOT NULL,
  `pay_status` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `pay_name`, `pay_class`, `pay_amt`, `pay_status`, `date`) VALUES
(1, 'Harish ', '5', '600', 'Paid', '2019-09-28 16:00:11'),
(2, 'Omkar', '9', '800', 'Paid', '2019-09-28 15:59:54'),
(3, 'Manu', '5', '600', 'Paid', '2019-09-28 06:58:45'),
(4, 'Yuvraj kumar Singh', '7', '800', 'Paid', '2019-09-28 10:09:26'),
(5, 'Saanvi Choudhary', '1', '250', 'Paid', '2019-09-28 10:34:56'),
(6, 'Kushmitha', '1', '400', 'Paid', '2019-09-28 10:32:36'),
(7, 'Harshitha', '1', '400', 'Paid', '2019-09-28 16:00:19'),
(8, 'vandana', '1', '800', 'Paid', '2019-09-28 10:58:33'),
(9, 'Upasana', '1', '400', 'Paid', '2019-09-28 10:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `fee` int(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `course`, `fee`, `data`) VALUES
(1, 'Harish ', '5', 600, '2019-09-22 03:54:06'),
(2, 'Omkar', '9', 800, '2019-09-22 03:57:10'),
(3, 'Manu', '5', 600, '2019-09-22 03:58:44'),
(4, 'Yuvraj kumar Singh', '7', 800, '2019-09-23 14:11:10'),
(5, 'Saanvi Choudhary', 'UKG', 250, '2019-09-28 10:40:09'),
(6, 'Kushmitha', '1', 400, '2019-09-23 03:03:32'),
(7, 'Harshitha', '1', 400, '2019-09-23 03:03:58'),
(8, 'Vandana', '1', 400, '2019-09-28 10:10:11'),
(9, 'Upasana', '1', 400, '2019-09-28 10:35:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
