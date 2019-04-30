-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2019 at 03:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalWebAssignment_simpsons`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `teacher_id`) VALUES
(10001, 'Computer Science 142', 1234),
(10002, 'Computer Science 143', 5678),
(10003, 'Computer Science 154', 9012),
(10004, 'Informatics 100', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `student_id` int(11) NOT NULL,
  `course_id` mediumint(9) NOT NULL,
  `grade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`student_id`, `course_id`, `grade`) VALUES
(123, 10001, 'B-'),
(123, 10002, 'C'),
(456, 10001, 'B+'),
(888, 10002, 'A+'),
(888, 10003, 'A+'),
(404, 10004, 'D+'),
(456, 10002, 'D-'),
(404, 10002, 'B'),
(789, 10003, 'D+');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` mediumint(9) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`) VALUES
(111, 'Lewis', 'lewis@fox.com', 'password'),
(123, 'Bart', 'bart@fox.com', 'bartman'),
(404, 'Ralph', 'ralph@fox.com', 'catfood'),
(456, 'Milhouse', 'milhouse@fox.com', 'fallout'),
(789, 'Nelson', 'muntz@fox.com', 'haha!'),
(888, 'Lisa', 'lisa@gmail.com', 'vegan');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_id`
--

CREATE TABLE `teacher_id` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_id`
--

INSERT INTO `teacher_id` (`id`, `name`) VALUES
(1234, 'Krabappel'),
(5678, 'Hoover'),
(9012, 'Stepp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
