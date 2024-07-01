-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2022 at 12:41 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`a_id`, `description`, `date`, `name`) VALUES
(1, 'User has been logged successfully.[id = 12]', '2022-02-25 00:00:00', 'Olive Yew'),
(2, 'User has been logged successfully.[id = 13]', '2022-02-25 00:00:00', 'Peg Legge'),
(3, 'User has been logged successfully.[id = 12]', '2022-02-25 00:00:00', 'Olive Yew'),
(4, 'User has been logged successfully.[id = 12]', '2022-02-25 10:24:40', 'Olive Yew'),
(5, 'User has been logged successfully.[id = 12]', '2022-02-25 16:00:47', 'Olive Yew'),
(6, 'User has been logged successfully.[id = 12]', '2022-02-28 09:48:24', 'Olive Yew'),
(7, 'Profile has been updated by Employee [ id=12]', '2022-02-28 05:30:47', 'Olive Yew'),
(8, 'User has been logged successfully.[id = 12]', '2022-02-28 11:15:42', 'Olive Yew'),
(9, 'Employee has been logged out [ id =12]', '2022-02-28 05:50:27', 'Olive Yew'),
(10, 'User has been logged successfully.[id = 12]', '2022-02-28 11:21:03', 'Olive Yew'),
(11, 'User has been logged in successfully.[id = 12]', '2022-02-28 11:21:27', 'Olive Yew'),
(12, 'Employee has been logged out [ id =12]', '2022-02-28 11:21:33', 'Olive Yew'),
(13, 'User has been logged in successfully.[id = 12]', '2022-02-28 11:34:03', 'Olive Yew'),
(14, 'Task has been completed by Employee [ id=]', '2022-02-28 11:34:19', 'Olive Yew'),
(15, 'Task has been completed by Employee [ id=12]', '2022-02-28 11:35:55', 'Olive Yew'),
(16, 'Task has been deleted by Employee [ id=15]', '2022-02-28 12:00:28', 'Olive Yew'),
(17, 'Task has been deleted by Employee [ id=14]', '2022-02-28 12:00:30', 'Olive Yew'),
(18, 'Task has been deleted by Employee [ id=13]', '2022-02-28 12:00:32', 'Olive Yew'),
(19, 'New Task added by Employee [ id=12]', '2022-02-28 12:01:08', 'Olive Yew'),
(20, 'Task has been completed by Employee [ id=12], [ task_id =16]', '2022-02-28 12:01:11', 'Olive Yew'),
(21, 'Employee has been logged in successfully.[id = 12]', '2022-03-01 10:28:49', 'Olive Yew'),
(22, 'Employee has been logged out [ id =12]', '2022-03-01 16:51:46', 'Olive Yew'),
(23, 'Employee has been logged in successfully.[id = 13]', '2022-03-02 09:49:23', 'Peg Legge'),
(24, 'Employee has been logged out [ id =13]', '2022-03-02 09:50:37', 'Peg Legge'),
(25, 'Employee has been logged in successfully.[id = 13]', '2022-03-02 09:50:42', 'Peg Legge'),
(26, 'Employee has been logged out [ id =13]', '2022-03-02 09:50:59', 'Peg Legge'),
(27, 'Employee has been logged in successfully.[id = 12]', '2022-03-02 09:51:06', 'Olive Yew'),
(28, 'Employee has been logged in successfully.[id = 12]', '2022-03-02 09:57:17', 'Olive Yew'),
(29, 'Employee has been logged in successfully.[id = 12]', '2022-03-04 09:49:41', 'Olive Yew'),
(30, 'Employee has been logged in successfully.[id = 12]', '2022-03-04 12:19:40', 'Olive Yew'),
(31, 'Employee has been logged in successfully.[id = 12]', '2022-03-04 14:48:17', 'Olive Yew'),
(32, 'Employee has been logged in successfully.[id = 12]', '2022-03-07 10:07:14', 'Olive Yew'),
(33, 'Employee has been logged in successfully.[id = 12]', '2022-03-07 17:16:17', 'Olive Yew'),
(34, 'Employee has been logged out [ id =12]', '2022-03-07 17:16:21', 'Olive Yew'),
(35, 'Employee has been logged in successfully.[id = 12]', '2022-03-07 17:21:58', 'Olive Yew'),
(36, 'Employee has been logged out [ id =12]', '2022-03-07 17:26:05', 'Olive Yew'),
(37, 'Employee has been logged in successfully.[id = 12]', '2022-03-07 17:30:39', 'Olive Yew'),
(38, 'Employee has been logged in successfully.[id = 12]', '2022-03-08 10:03:07', 'Olive Yew'),
(39, 'Employee has been logged in successfully.[id = 12]', '2022-03-08 15:05:50', 'Olive Yew'),
(40, 'Employee has been logged out [ id =12]', '2022-03-08 15:58:08', 'Olive Yew'),
(41, 'Employee has been logged in successfully.[id = 13]', '2022-03-08 15:58:13', 'Peg Legge'),
(42, 'Employee has been logged out [ id =13]', '2022-03-08 15:58:16', 'Peg Legge'),
(43, 'Employee has been logged in successfully.[id = 0]', '2022-03-08 15:58:22', 'Olive Yew'),
(44, 'Employee has been logged in successfully.[id = 6]', '2022-03-09 17:06:51', 'Olive Yew'),
(45, 'Employee has been logged in successfully.[id = 6]', '2022-03-09 17:07:25', 'Olive Yew'),
(46, 'Employee has been logged in successfully.[id = 6]', '2022-03-16 17:00:12', 'Olive Yew'),
(47, 'New leave added by Employee [ id=6]', '2022-03-16 17:06:59', 'Olive Yew'),
(48, 'leave has been canceled by Employee [ id=6],[ leave_id = 28]', '2022-03-16 17:07:18', 'Olive Yew'),
(49, 'leave has been canceled by Employee [ id=6],[ leave_id = 29]', '2022-03-16 17:07:19', 'Olive Yew'),
(50, 'New leave added by Employee [ id=6]', '2022-03-16 17:22:49', 'Olive Yew'),
(51, 'New leave added by Employee [ id=6]', '2022-03-16 17:24:51', 'Olive Yew'),
(52, 'New leave added by Employee [ id=6]', '2022-03-16 17:26:20', 'Olive Yew'),
(53, 'New leave added by Employee [ id=6]', '2022-03-16 17:30:23', 'Olive Yew'),
(54, 'New leave added by Employee [ id=6]', '2022-03-16 17:31:14', 'Olive Yew'),
(55, 'Task has been completed by Employee [ id=6], [ task_id =17]', '2022-03-16 17:34:59', 'Olive Yew'),
(56, 'Employee has been logged out [ id =6]', '2022-03-16 17:35:23', 'Olive Yew'),
(57, 'Employee has been logged in successfully.[id = 6]', '2022-03-16 17:35:56', 'Olive Yew'),
(58, 'Employee has been logged out [ id =6]', '2022-03-16 17:39:19', 'Olive Yew'),
(59, 'Employee has been logged in successfully.[id = 6]', '2022-03-16 17:40:53', 'Olive Yew'),
(60, 'New leave added by Employee [ id=6]', '2022-03-16 17:41:23', 'Olive Yew'),
(61, 'Task has been completed by Employee [ id=6], [ task_id =18]', '2022-03-16 17:44:26', 'Olive Yew'),
(62, 'New Task added by Employee [ id=6]', '2022-03-16 17:44:47', 'Olive Yew'),
(63, 'Task has been completed by Employee [ id=6], [ task_id =19]', '2022-03-16 17:44:56', 'Olive Yew'),
(64, 'Employee has been logged out [ id =6]', '2022-03-16 17:46:16', 'Olive Yew'),
(65, 'Employee has been logged in successfully.[id = 6]', '2022-03-16 17:46:20', 'Olive Yew'),
(66, 'Employee has been logged in successfully.[id = 2]', '2022-03-16 17:47:00', 'Peg Legge'),
(67, 'Employee has been logged out [ id =2]', '2022-03-16 17:47:09', 'Peg Legge'),
(68, 'Employee has been logged in successfully.[id = 6]', '2022-03-17 10:41:19', 'Olive Yew'),
(69, 'Employee has been logged out [ id =6]', '2022-03-17 14:05:42', 'Olive Yew'),
(70, 'Employee has been logged in successfully.[id = 4]', '2022-03-17 14:05:47', 'Augusta Wind'),
(71, 'Employee has been logged out [ id =4]', '2022-03-17 14:06:05', 'Augusta Wind'),
(72, 'Employee has been logged in successfully.[id = 6]', '2022-03-17 14:06:10', 'Olive Yew'),
(73, 'Employee has been logged out [ id =6]', '2022-03-17 14:06:22', 'Olive Yew'),
(74, 'Employee has been logged in successfully.[id = 6]', '2022-03-17 14:06:48', 'Olive Yew'),
(75, 'Employee has been logged out [ id =6]', '2022-03-17 14:07:35', 'Olive Yew'),
(76, 'Employee has been logged in successfully.[id = 6]', '2022-03-17 14:07:40', 'Olive Yew'),
(77, 'Employee has been logged out [ id =6]', '2022-03-17 14:07:47', 'Olive Yew'),
(78, 'Employee has been logged in successfully.[id = 2]', '2022-03-17 14:07:52', 'Peg Legge'),
(79, 'Employee has been logged out [ id =2]', '2022-03-17 14:07:58', 'Peg Legge'),
(80, 'Employee has been logged in successfully.[id = 6]', '2022-03-17 14:23:20', 'Olive Yew'),
(81, 'New leave added by Employee [ id=6]', '2022-03-17 14:23:35', 'Olive Yew'),
(82, 'New leave added by Employee [ id=6]', '2022-03-17 14:28:04', 'Olive Yew'),
(83, 'Employee has been logged in successfully.[id = 6]', '2022-03-21 09:58:15', 'Olive Yew'),
(84, 'Employee has been logged out [ id =6]', '2022-03-21 11:04:53', 'Olive Yew'),
(85, 'Employee has been logged in successfully.[id = 2]', '2022-03-21 11:04:58', 'Peg Legge'),
(86, 'Employee has been logged out [ id =2]', '2022-03-21 11:05:02', 'Peg Legge'),
(87, 'Employee has been logged in successfully.[id = 3]', '2022-03-21 11:05:07', 'MATTS'),
(88, 'Employee has been logged out [ id =3]', '2022-03-21 11:05:10', 'MATTS'),
(89, 'Employee has been logged in successfully.[id = 6]', '2022-03-21 11:05:15', 'Olive Yew'),
(90, 'New leave added by Employee [ id=6]', '2022-03-21 11:54:58', 'Olive Yew'),
(91, 'New leave added by Employee [ id=6]', '2022-03-21 12:00:56', 'Olive Yew'),
(92, 'New leave added by Employee [ id=6]', '2022-03-21 12:02:12', 'Olive Yew'),
(93, 'New leave added by Employee [ id=6]', '2022-03-21 12:04:20', 'Olive Yew'),
(94, 'Employee has been logged in successfully.[id = 6]', '2022-03-21 14:13:53', 'Olive Yew'),
(95, 'Employee has been logged in successfully.[id = 6]', '2022-03-21 16:50:51', 'Olive Yew'),
(96, 'Employee has been logged in successfully.[id = 6]', '2022-03-22 10:09:50', 'Olive Yew'),
(97, 'Employee has been logged out [ id =6]', '2022-03-22 12:24:13', 'Olive Yew'),
(98, 'Employee has been logged in successfully.[id = 2]', '2022-03-22 12:24:23', 'Peg Legge'),
(99, 'Employee has been logged in successfully.[id = 6]', '2022-03-24 10:02:55', 'Olive Yew'),
(100, 'Employee has been logged in successfully.[id = 6]', '2022-03-24 13:57:20', 'Olive Yew'),
(101, 'Employee has been logged in successfully.[id = 6]', '2022-03-24 17:19:22', 'Olive Yew'),
(102, 'New leave added by Employee [ id=6]', '2022-03-24 17:20:25', 'Olive Yew'),
(103, 'Employee has been logged in successfully.[id = 6]', '2022-03-25 11:06:00', 'Olive Yew'),
(104, 'leave has been canceled by Employee [ id=6],[ leave_id = 42]', '2022-03-25 11:52:13', 'Olive Yew'),
(105, 'Employee has been logged in successfully.[id = 6]', '2022-04-20 11:42:52', 'Olive Yew'),
(106, 'Employee has been logged in successfully.[id = 6]', '2022-04-22 09:50:05', 'Olive Yew'),
(107, 'Employee has been logged in successfully.[id = 6]', '2022-04-22 09:51:04', 'Olive Yew'),
(108, 'Employee has been logged in successfully.[id = 6]', '2022-07-12 11:00:10', 'Olive Yew'),
(109, 'Employee has been logged out [ id =6]', '2022-07-12 11:00:26', 'Olive Yew'),
(110, 'Employee has been logged in successfully.[id = 6]', '2022-08-24 21:10:08', 'Olive Yew'),
(111, 'Profile has been updated by Employee [ id=6]', '2022-08-24 21:11:21', 'Olive Yew'),
(112, 'New Task added by Employee [ id=6]', '2022-08-24 21:11:40', 'Olive Yew'),
(113, 'Task has been completed by Employee [ id=6], [ task_id =21]', '2022-08-24 21:11:44', 'Olive Yew'),
(114, 'Employee has been logged in successfully.[id = 2]', '2022-10-19 19:17:19', 'Peg Legge'),
(115, 'Task has been completed by Employee [ id=2], [ task_id =20]', '2022-10-19 19:17:31', 'Peg Legge'),
(116, 'Employee has been logged out [ id =2]', '2022-10-19 19:17:50', 'Peg Legge'),
(117, 'Employee has been logged in successfully.[id = 2]', '2022-10-19 19:18:00', 'Peg Legge'),
(118, 'Employee has been logged in successfully.[id = 6]', '2022-11-26 18:34:34', 'Olive Yew'),
(119, 'Profile has been updated by Employee [ id=6]', '2022-11-26 18:35:15', 'Olive Yew'),
(120, 'Profile has been updated by Employee [ id=6]', '2022-11-26 18:35:31', 'Olive Yew');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(10) NOT NULL,
  `date` date NOT NULL,
  `present` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `eid`, `date`, `present`) VALUES
(169, 1, '2022-03-15', 1),
(170, 2, '2022-03-15', 1),
(171, 3, '2022-03-15', 1),
(172, 4, '2022-03-15', 0),
(173, 5, '2022-03-15', 1),
(174, 6, '2022-03-15', 1),
(175, 1, '2022-03-16', 1),
(176, 2, '2022-03-16', 1),
(177, 3, '2022-03-16', 0),
(178, 4, '2022-03-16', 1),
(179, 5, '2022-03-16', 1),
(180, 6, '2022-03-16', 1),
(187, 1, '2022-03-17', 1),
(188, 2, '2022-03-17', 1),
(189, 3, '2022-03-17', 1),
(190, 4, '2022-03-17', 0),
(191, 5, '2022-03-17', 1),
(192, 6, '2022-03-17', 1),
(193, 1, '2022-03-18', 1),
(194, 2, '2022-03-18', 0),
(195, 3, '2022-03-18', 1),
(196, 4, '2022-03-18', 1),
(197, 5, '2022-03-18', 1),
(198, 6, '2022-03-18', 0),
(199, 1, '2022-03-21', 1),
(200, 2, '2022-03-21', 1),
(201, 3, '2022-03-21', 0),
(202, 4, '2022-03-21', 1),
(203, 5, '2022-03-21', 1),
(204, 6, '2022-03-21', 1),
(205, 1, '2022-03-22', 1),
(206, 2, '2022-03-22', 1),
(207, 3, '2022-03-22', 1),
(208, 4, '2022-03-22', 1),
(209, 5, '2022-03-22', 1),
(210, 6, '2022-03-22', 1),
(211, 1, '2022-03-19', 0),
(212, 2, '2022-03-19', 0),
(213, 3, '2022-03-19', 0),
(214, 4, '2022-03-19', 0),
(215, 5, '2022-03-19', 0),
(216, 6, '2022-03-19', 0),
(217, 1, '2022-03-20', 0),
(218, 2, '2022-03-20', 0),
(219, 3, '2022-03-20', 0),
(220, 4, '2022-03-20', 0),
(221, 5, '2022-03-20', 0),
(222, 6, '2022-03-20', 0),
(223, 1, '2022-03-23', 0),
(224, 2, '2022-03-23', 1),
(225, 3, '2022-03-23', 1),
(226, 4, '2022-03-23', 1),
(227, 5, '2022-03-23', 1),
(228, 6, '2022-03-23', 0),
(229, 1, '2022-03-24', 1),
(230, 2, '2022-03-24', 1),
(231, 3, '2022-03-24', 1),
(232, 4, '2022-03-24', 1),
(233, 5, '2022-03-24', 1),
(234, 6, '2022-03-24', 1),
(235, 1, '2022-03-25', 1),
(236, 2, '2022-03-25', 1),
(237, 3, '2022-03-25', 1),
(238, 4, '2022-03-25', 1),
(239, 5, '2022-03-25', 1),
(240, 6, '2022-03-25', 1),
(241, 1, '2022-04-20', 1),
(242, 2, '2022-04-20', 1),
(243, 3, '2022-04-20', 1),
(244, 4, '2022-04-20', 1),
(245, 5, '2022-04-20', 1),
(246, 6, '2022-04-20', 1),
(247, 1, '2022-07-12', 1),
(248, 2, '2022-07-12', 0),
(249, 3, '2022-07-12', 1),
(250, 4, '2022-07-12', 1),
(251, 5, '2022-07-12', 1),
(252, 6, '2022-07-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dp_id` int(10) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) NOT NULL,
  `dept_status` int(11) NOT NULL,
  PRIMARY KEY (`dp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dp_id`, `department_name`, `dept_status`) VALUES
(1, 'Designing', 1),
(2, 'Training', 1),
(3, 'Sales', 1),
(4, 'Development', 1),
(5, 'Marketing', 1),
(6, 'Testing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

DROP TABLE IF EXISTS `employee_detail`;
CREATE TABLE IF NOT EXISTS `employee_detail` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `department` int(10) NOT NULL,
  `emp_role` int(1) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `total_leave` int(10) NOT NULL,
  `remaining_leave` float NOT NULL,
  `image` text NOT NULL,
  `emp_status` int(10) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`eid`, `name`, `department`, `emp_role`, `address`, `number`, `email`, `password`, `education`, `skill`, `total_leave`, `remaining_leave`, `image`, `emp_status`) VALUES
(1, 'Abhishek Singh', 1, 2, 'india', '8249675128', 'abhishek@gmail.com', '258963', 'Magic Knights', 'Four Leave Grimoire', 10, 5, 'abhishek.jpg', 1),
(2, 'Peg Legge', 4, 2, 'NEW RIVER', '1234567879', 'peg@gmail.com', '84014', 'Btech', 'laravel', 10, 2, 'IMG_20211003_000445.jpg', 1),
(3, 'MATTS', 5, 2, 'Rajkot', '2152313213', 'matts-ino33@emample.com', '84014', 'MBA', 'marketing Expert', 10, 10, 'IMG-20210812-WA00011.jpg', 1),
(4, 'Augusta Wind', 6, 2, 'Austria ', '4517825469', 'augusta@gmail.com', '84014', 'Btech', 'laravel', 10, 10, 'IMG-20211003-WA0000.jpg', 1),
(5, 'MIKE PEARL', 4, 2, 'Austria ', '4517825469', 'mike230@emample.com', '84014', 'Btech', 'btech', 10, 10, 'IMG-20211015-WA0060.jpg', 1),
(6, 'Olive Yew', 2, 2, 'London', '4517825469', 'olive@gmail.com', '84014', 'Btech', 'laravel', 10, 1, 'IMG_31235.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hr_details`
--

DROP TABLE IF EXISTS `hr_details`;
CREATE TABLE IF NOT EXISTS `hr_details` (
  `hid` int(12) NOT NULL,
  `hr_role` int(1) NOT NULL,
  `hr_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hr_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_details`
--

INSERT INTO `hr_details` (`hid`, `hr_role`, `hr_name`, `address`, `email`, `password`, `hr_image`) VALUES
(1, 1, 'nilay', 'rajkot', 'nchotaliya544@rku.ac.in', '123', 'nilay.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `leave_record`
--

DROP TABLE IF EXISTS `leave_record`;
CREATE TABLE IF NOT EXISTS `leave_record` (
  `le_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `d_from` date NOT NULL,
  `d_to` date NOT NULL,
  `sub_date` date NOT NULL,
  `total_day` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`le_id`),
  KEY `eid` (`eid`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_record`
--

INSERT INTO `leave_record` (`le_id`, `type`, `eid`, `desc`, `d_from`, `d_to`, `sub_date`, `total_day`, `status`) VALUES
(33, 2, 6, 'zvsdv', '2022-03-18', '2022-03-19', '2022-03-16', 1, 1),
(34, 4, 6, 'marriage', '2022-03-16', '2022-03-16', '2022-03-16', 0, 1),
(35, 2, 6, 'zfbbgf', '2022-03-16', '2022-03-18', '2022-03-16', 2, 1),
(36, 1, 6, 'marriage', '2022-03-17', '2022-03-19', '2022-03-17', 2, 1),
(37, 4, 6, 'sick', '2022-03-17', '2022-03-17', '2022-03-17', 0, 1),
(38, 1, 6, 'marriage', '2022-03-22', '2022-03-23', '2022-03-21', 1, 1),
(39, 2, 6, 'sick', '2022-03-22', '2022-03-25', '2022-03-21', 3, 1),
(40, 2, 6, 'xfbx', '2022-03-21', '2022-03-23', '2022-03-21', 2, 1),
(41, 1, 6, 'xfh', '2022-03-21', '2022-03-24', '2022-03-21', 3, 2),
(42, 2, 6, 'dvsfb', '2022-03-24', '2022-03-27', '2022-03-24', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

DROP TABLE IF EXISTS `leave_type`;
CREATE TABLE IF NOT EXISTS `leave_type` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`lid`, `lname`) VALUES
(1, 'casual leave'),
(2, 'sick leave'),
(3, 'privilege leave  '),
(4, 'Half day'),
(5, 'Maternity Leave'),
(6, 'Marriage Leave'),
(7, 'Bereavement Leave '),
(8, 'Compensatory Leave '),
(9, 'Paternity Leave');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `hid` int(15) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `hid` (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message_reciver`
--

DROP TABLE IF EXISTS `message_reciver`;
CREATE TABLE IF NOT EXISTS `message_reciver` (
  `mr_id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  PRIMARY KEY (`mr_id`),
  KEY `eid` (`eid`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_reciver`
--

INSERT INTO `message_reciver` (`mr_id`, `eid`, `hid`, `mid`) VALUES
(1, 13, 1, 4),
(2, 1, 1, 3),
(3, 2, 1, 3),
(4, 3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `md_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(50) NOT NULL,
  PRIMARY KEY (`md_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`md_id`, `module_name`) VALUES
(1, 'Employee'),
(2, 'Department');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `notification`, `status`) VALUES
(1, 'New message from Abhishek', 1),
(2, 'New message from Olive Yew', 1),
(3, 'New message from Olive Yew', 1),
(4, 'New message from Olive Yew', 1),
(5, 'New message from Olive Yew', 1),
(6, 'New message from Olive Yew', 1),
(7, 'New message from Olive Yew', 1),
(8, 'New message from Olive Yew', 1),
(9, 'New message from Olive Yew', 1),
(10, 'New message from Olive Yew', 1),
(11, 'New message from Olive Yew', 1),
(12, 'New message from Olive Yew', 1),
(13, 'New message from Olive Yew', 1),
(14, 'New message from Olive Yew', 1),
(15, 'New message from Olive Yew', 1),
(16, 'New message from Olive Yew', 1),
(17, 'New message from Olive Yew', 1),
(18, 'New message from Olive Yew', 1),
(19, 'New message from Olive Yew', 1),
(20, 'New message from Olive Yew', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(10) NOT NULL,
  `module` int(1) NOT NULL,
  `permission_edit` int(1) NOT NULL,
  `permission_add` int(1) NOT NULL,
  `permission_delete` int(1) NOT NULL,
  `permission_view` int(1) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `module` (`module`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rid`, `role_name`) VALUES
(1, 'hr'),
(2, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `task_assigner`
--

DROP TABLE IF EXISTS `task_assigner`;
CREATE TABLE IF NOT EXISTS `task_assigner` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `create_id` int(11) NOT NULL,
  `assign_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`tr_id`),
  KEY `assign_id` (`assign_id`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_assigner`
--

INSERT INTO `task_assigner` (`tr_id`, `tid`, `create_id`, `assign_id`, `status`) VALUES
(5, 8, 12, 12, 1),
(6, 9, 12, 12, 1),
(7, 11, 1, 12, 1),
(12, 16, 12, 12, 1),
(15, 19, 6, 6, 1),
(16, 20, 1, 2, 1),
(17, 21, 6, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_record`
--

DROP TABLE IF EXISTS `task_record`;
CREATE TABLE IF NOT EXISTS `task_record` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `create_id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_record`
--

INSERT INTO `task_record` (`tid`, `create_id`, `task`, `start_date`, `due_date`) VALUES
(4, 1, 'property visit', '2022-02-11', '2022-02-13'),
(5, 12, 'backend must be done my taaaoday.', '2022-02-11', '2022-02-14'),
(6, 1, 'property visit', '2022-02-11', '2022-02-13'),
(7, 1, 'property visit', '2022-02-21', '2022-02-23'),
(8, 12, 'backend must be done my tomorrow', '2022-02-22', '2022-02-22'),
(9, 12, 'property visit for new company.', '2022-02-21', '2022-02-22'),
(10, 1, 'property visit for new company.', '2022-02-23', '2022-02-24'),
(11, 1, 'property visit', '2022-03-01', '2022-03-02'),
(12, 1, 'backend must be done my today.', '2022-03-01', '2022-03-01'),
(13, 12, 'property visit', '2022-03-01', '2022-03-01'),
(14, 12, 'property visit', '2022-03-01', '2022-03-01'),
(15, 12, 'property visit', '2022-03-01', '2022-03-01'),
(16, 12, 'property visit', '2022-02-28', '2022-02-28'),
(17, 1, 'property visit', '2022-03-16', '2022-03-18'),
(18, 1, 'backend must be done my today.', '2022-03-17', '2022-03-18'),
(19, 6, 'property visit', '2022-03-17', '2022-03-18'),
(20, 1, 'backend must be done my tomorrow', '2022-03-22', '2022-03-24'),
(21, 6, 'property visit', '2022-08-25', '2022-08-26');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `permission_ibfk_1` FOREIGN KEY (`module`) REFERENCES `module` (`md_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
