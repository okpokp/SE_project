-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 05:47 PM
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
  `check1` tinyint(1) NOT NULL,
  `check2` tinyint(1) NOT NULL,
  `teacher_teacher_id` int(11) NOT NULL,
  `student_student_id_1` int(11) DEFAULT NULL,
  `student_student_id_2` int(11) DEFAULT NULL,
  `student_student_id_3` int(11) DEFAULT NULL,
  `request_request_id` int(11) NOT NULL,
  `score_score_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'www.googledrive.com', 'www.googledrive.com'),
(2, 'www.googledrive.com', 'www.googledrive.com'),
(3, 'www.googledrive.com', 'www.googledrive.com'),
(4, 'www.googledrive.com', 'www.googledrive.com'),
(5, 'www.googledrive.com', 'www.googledrive.com'),
(6, 'www.googledrive.com', 'www.googledrive.com'),
(7, 'www.googledrive.com', 'www.googledrive.com'),
(8, 'www.googledrive.com', 'www.googledrive.com'),
(9, 'www.googledrive.com', 'www.googledrive.com'),
(10, 'www.googledrive.com', 'www.googledrive.com');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `topic` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info_notice` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(11) NOT NULL,
  `document` int(11) DEFAULT NULL,
  `knowledge` int(11) DEFAULT NULL,
  `completly` int(11) DEFAULT NULL,
  `present` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Ms.', 'Mack', 'Randolph', 1),
(2, 'Ms.', 'Raees', 'Gibbons', 2),
(3, 'Mr.', 'Dora', 'Zhang', 3),
(4, 'Ms.', 'Humza', 'Parker', 4),
(5, 'Ms.', 'Cloe', 'Delacruz', 5),
(6, 'Mr.', 'Milo', 'Nicholson', 6),
(7, 'Mr.', 'Elysha', 'Mcdaniel', 7),
(8, 'Mr.', 'Asiyah', 'Grimes', 8),
(9, 'Mr.', 'Daanish', 'Redfern', 9),
(10, 'Ms.', 'Enya', 'Wolfe', 10);

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
  `committee` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `type`, `title`, `fname`, `lname`, `ability`, `adviser`, `committee`, `email`) VALUES
(1, 1, 'Mr.', 'Zhang', 'Dora', 'OS', 4, 5, 'DoraZhang@ku.ac.th'),
(2, 2, 'Mr.', 'Gibbons', 'Raees', 'AI', 2, 6, 'RaeesGibbons@ku.ac.th'),
(3, 1, 'Ms.', 'Daanish', 'Wolfe', 'Game', 4, 3, 'WolfeDaanish@ku.ac.th'),
(4, 1, 'Ms.', 'Mcdaniel', 'Cloe?', 'Data', 5, 2, 'Cloe?Mcdaniel@ku.ac.th'),
(5, 1, 'Mr.', 'Peter', 'Parker', 'Image', 3, 8, 'ParkerPeter@ku.ac.th'),
(6, 1, 'Mr.', 'Mack?', 'Wolfe', 'Unity', 7, 1, 'WolfeMack?@ku.ac.th');

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
  ADD KEY `fk_group_request1_idx` (`request_request_id`),
  ADD KEY `fk_group_student2_idx` (`student_student_id_2`) USING BTREE,
  ADD KEY `fk_group_student3_idx` (`student_student_id_3`) USING BTREE;

--
-- Indexes for table `lockbook`
--
ALTER TABLE `lockbook`
  ADD PRIMARY KEY (`lock_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`) USING BTREE;

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
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lockbook`
--
ALTER TABLE `lockbook`
  MODIFY `lock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `fk_group_request1` FOREIGN KEY (`request_request_id`) REFERENCES `request` (`request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
