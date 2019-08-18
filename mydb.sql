-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 05:08 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `group_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `name_project` varchar(100) NOT NULL,
  `info_project` text NOT NULL,
  `check1` tinyint(1) DEFAULT NULL,
  `check2` tinyint(1) DEFAULT NULL,
  `teacher_teacher_id` int(11) NOT NULL,
  `student_student_id_1` int(11) NOT NULL,
  `student_student_id_2` int(11) NOT NULL,
  `student_student_id_3` int(11) NOT NULL,
  `request_request_id1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `data`, `name_project`, `info_project`, `check1`, `check2`, `teacher_teacher_id`, `student_student_id_1`, `student_student_id_2`, `student_student_id_3`, `request_request_id1`) VALUES
(1, '99 Mb', 'A', 'a', 0, 0, 99, 99, 99, 99, 99),
(2, '99 Mb', 'B', 'b', 0, 0, 99, 99, 99, 99, 99),
(3, '99 Mb', 'C', 'c', 0, 0, 99, 99, 99, 99, 99);

-- --------------------------------------------------------

--
-- Table structure for table `lockbook`
--

CREATE TABLE `lockbook` (
  `lock_id` int(11) NOT NULL,
  `lock_adviser` text NOT NULL,
  `lock_commit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lockbook`
--

INSERT INTO `lockbook` (`lock_id`, `lock_adviser`, `lock_commit`) VALUES
(1, '0', '0'),
(2, '0', '0'),
(99, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `req_1` int(11) DEFAULT NULL,
  `req_2` int(11) DEFAULT NULL,
  `req_3` int(11) DEFAULT NULL,
  `req_4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `req_1`, `req_2`, `req_3`, `req_4`) VALUES
(99, 99, 99, 99, 99);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `lockbook_lock_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `title`, `fname`, `lname`, `lockbook_lock_id`) VALUES
(1, '', '', '', 1),
(2, '', '', '', 2),
(99, '99', '99', '99', 99);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `ability` varchar(45) DEFAULT NULL,
  `adviser` int(11) DEFAULT NULL,
  `committee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `type`, `title`, `fname`, `lname`, `ability`, `adviser`, `committee`) VALUES
(2, 2, 'ผศ.', 'อติวิชญ์', 'ม่วงศร', 'SE, Security, Network, IoT', 3, 2),
(3, 1, 'รศ.', 'สาทิด', 'ตำนาน', 'SAE', 2, 1),
(4, 2, 'รศ.', 'บัวบาน', 'จันทร์', 'SAE', 2, 1),
(5, 1, 'ดร.', 'จักร', 'พงษ์', 'Network', 2, 3),
(6, 1, 'ดร.', 'กำ', 'แบ', 'Network', 1, 2),
(7, 1, 'ผศ.', 'เจ', 'จา', 'REA', 2, 1),
(99, 99, '99', '99', '99', '99', 99, 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `fk_group_teacher_idx` (`teacher_teacher_id`),
  ADD KEY `fk_group_student1_idx` (`student_student_id_1`),
  ADD KEY `fk_group_request1_idx` (`request_request_id1`),
  ADD KEY `fk_group_student3` (`student_student_id_3`) USING BTREE,
  ADD KEY `fk_group_student2` (`student_student_id_2`) USING BTREE;

--
-- Indexes for table `lockbook`
--
ALTER TABLE `lockbook`
  ADD PRIMARY KEY (`lock_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `fk_student_lockbook1_idx` (`lockbook_lock_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lockbook`
--
ALTER TABLE `lockbook`
  MODIFY `lock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `fk_group_request1` FOREIGN KEY (`request_request_id1`) REFERENCES `request` (`request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_group_student1` FOREIGN KEY (`student_student_id_1`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_group_student2` FOREIGN KEY (`student_student_id_2`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_group_student3` FOREIGN KEY (`student_student_id_3`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_group_teacher` FOREIGN KEY (`teacher_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_lockbook1` FOREIGN KEY (`lockbook_lock_id`) REFERENCES `lockbook` (`lock_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
