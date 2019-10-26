-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 04:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_fair`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(20) NOT NULL,
  `create_date` date NOT NULL,
  `semester` varchar(20) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `fair_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `create_date`, `semester`, `event_name`, `location`, `description`, `fair_date`, `end_date`) VALUES
(1, '0000-00-00', 'Summer,2019', 'SWE project fair', 'DT-5, 71 milanayoton', 'thnaks', '2019-03-30', '2019-03-22'),
(2, '0000-00-00', 'Summer,2019', 'SWE project fair', 'DT-5, 71 milanayoton', 'invited', '2019-03-31', '2019-03-28'),
(3, '0000-00-00', 'fall, 2019', 'SWE project fair', 'DT-5, 71 milanayoton', 'adnan', '2019-03-30', '2019-03-25'),
(4, '0000-00-00', 'Spring, 2019', 'SWE project fair', 'DT-5, 71 milanayoton', 'test', '2019-03-31', '2019-03-28'),
(5, '0000-00-00', 'fall, 2019', 'SWE project fair', 'DT-5, 71 milanayoton', 'test', '2019-03-30', '2019-03-26'),
(6, '0000-00-00', 'Summer,2019', 'Spring 2019, SWE department project fair', 'DT-5, 71 milanayoton', 'project fair', '2019-03-30', '2019-03-28'),
(7, '0000-00-00', 'Summer,2019', 'SWE project fair', 'DT-5, 71 milanayoton', 'test', '2019-03-30', '2019-03-19'),
(8, '2019-03-15', 'Summer,2019', 'SWE project fair', 'DT-5, 71 milanayoton', 'test', '2019-03-31', '2019-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `project_id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `develop_semester` varchar(15) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `category` varchar(30) NOT NULL,
  `language` varchar(20) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `collaboration_type` varchar(10) NOT NULL,
  `id_name` varchar(1000) NOT NULL,
  `add_prize` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`project_id`, `event_id`, `email`, `student_id`, `student_name`, `phone`, `develop_semester`, `course_code`, `category`, `language`, `project_title`, `short_description`, `collaboration_type`, `id_name`, `add_prize`) VALUES
(1, 1, 'rafika35-1653@diu.edu.bd', 1653, 'rafika risha', 123456789, 'Third', 'SWE133', 'Desktop Application', 'C', 'String matching game', 'lAKSJDFHGH', 'Single', '1653', 3),
(2, 2, 'adnan35-1654@diu.edu.bd', 1654, 'adnan', 1234567889, 'Fourth', 'SWE211', 'Desktop Application', 'JAVA', 'Blood Donation', ';LKSJDHNF', 'Single', '1654', 2),
(3, 1, 'esha@gmai.com', 1642, 'esha', 1521660986, 'Third', 'SWE133', 'Desktop Application', 'C', 'reunion management system', 'slkdjshfd', 'Single', '162-35-1642', 0),
(4, 2, 'risharafika@gmail.com', 1653, 'risha', 12345678, 'Fourth', 'SWE211', 'Desktop Application', 'JAVA', 'student\'s result management system', 'lKASJDFH', 'Single', '162-35-1653', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_result`
--

CREATE TABLE `project_result` (
  `result_id` int(20) NOT NULL,
  `project_id` int(20) NOT NULL,
  `student_id` int(20) NOT NULL,
  `marks` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_result`
--

INSERT INTO `project_result` (`result_id`, `project_id`, `student_id`, `marks`) VALUES
(1, 1, 1653, 20),
(2, 2, 1654, 15),
(3, 3, 1642, 30),
(4, 1, 1653, 30),
(5, 2, 1654, 40),
(6, 3, 1642, 20);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(20) NOT NULL,
  `project_id` int(20) NOT NULL,
  `student_id` int(20) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `project_id`, `student_id`, `total`) VALUES
(1, 1, 1653, 0),
(2, 1, 1653, 50);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'X', 'x@gmail.com', 1797455036, '1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Anwar Hossen', 'anwar.swe@diu.edu.bd', 123456789, 'a1'),
(2, 'Dr.  Asraf Ali', 'asraf.swe@diu.edu.bd', 987174562, 'd1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Rafika Risha', 'rafika35-1653@diu.edu.bd', 1797455036, 'rafika'),
(2, 'Adnan Mission', 'adnan35-1654@diu.edu.bd', 123456789, 'adnan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_result`
--
ALTER TABLE `project_result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `project_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_result`
--
ALTER TABLE `project_result`
  MODIFY `result_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
