-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 08:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `1_22_ece`
--

CREATE TABLE `1_22_ece` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_1111111111111111_ece`
--

CREATE TABLE `1_1111111111111111_ece` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_1111111111111111_report`
--

CREATE TABLE `1_1111111111111111_report` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_ai_ece`
--

CREATE TABLE `1_ai_ece` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_ai_ica`
--

CREATE TABLE `1_ai_ica` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_ai_presentation`
--

CREATE TABLE `1_ai_presentation` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_csc_ica`
--

CREATE TABLE `1_csc_ica` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_csc_presentation`
--

CREATE TABLE `1_csc_presentation` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_database_ece`
--

CREATE TABLE `1_database_ece` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_database_ica`
--

CREATE TABLE `1_database_ica` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_database_presentation`
--

CREATE TABLE `1_database_presentation` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_dfbfg_ece`
--

CREATE TABLE `1_dfbfg_ece` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_dxevgt_ece`
--

CREATE TABLE `1_dxevgt_ece` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_nbvfd_ece`
--

CREATE TABLE `1_nbvfd_ece` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `1_test_ece`
--

CREATE TABLE `1_test_ece` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ac_year`
--

CREATE TABLE `ac_year` (
  `id` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `dep_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_year`
--

INSERT INTO `ac_year` (`id`, `year`, `dep_id`) VALUES
(1, '2012/2013', 1),
(2, '2013/2014', 1),
(3, '2014/2015', 0),
(4, '34567890', 0),
(10, '2015/2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ac_year_fdvd_`
--

CREATE TABLE `ac_year_fdvd_` (
  `S_Id` int(50) NOT NULL,
  `Reg_No` varchar(50) DEFAULT NULL,
  `Index_No` varchar(50) DEFAULT NULL,
  `Tittle` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ac_year_true_`
--

CREATE TABLE `ac_year_true_` (
  `S_Id` int(50) NOT NULL,
  `Reg_No` varchar(50) DEFAULT NULL,
  `Index_No` varchar(50) DEFAULT NULL,
  `Tittle` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_course`
--

CREATE TABLE `add_course` (
  `id` int(11) NOT NULL,
  `couseid` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `dep_id` varchar(5) NOT NULL,
  `qstn_no` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_course`
--

INSERT INTO `add_course` (`id`, `couseid`, `coursename`, `dep_id`, `qstn_no`) VALUES
(22, 'CSC316SC3', 'Advanced Database Design and Systems', '1', '8'),
(23, 'csc1', 'database', '1', '5');

-- --------------------------------------------------------

--
-- Table structure for table `add_ece`
--

CREATE TABLE `add_ece` (
  `index_no` varchar(20) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `ac_year` varchar(20) NOT NULL,
  `q1` int(3) DEFAULT NULL,
  `q2` int(3) DEFAULT NULL,
  `q3` int(3) DEFAULT NULL,
  `q4` int(3) DEFAULT NULL,
  `q5` int(3) DEFAULT NULL,
  `q6` int(3) DEFAULT NULL,
  `q7` int(3) DEFAULT NULL,
  `q8` int(3) DEFAULT NULL,
  `final` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_ece`
--

INSERT INTO `add_ece` (`index_no`, `reg_no`, `ac_year`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `final`) VALUES
('S9999', '2014/CSC/045', '2014/2015', 40, 50, 60, 70, NULL, NULL, NULL, NULL, 55);

-- --------------------------------------------------------

--
-- Table structure for table `add_ica`
--

CREATE TABLE `add_ica` (
  `no` int(3) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `index_no` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ac_year` varchar(20) NOT NULL,
  `ica1` int(3) DEFAULT NULL,
  `ica2` int(3) DEFAULT NULL,
  `sica1` varchar(3) DEFAULT NULL,
  `sica2` varchar(3) DEFAULT NULL,
  `mid1` int(3) DEFAULT NULL,
  `mid2` int(3) DEFAULT NULL,
  `assignment` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_ica`
--

INSERT INTO `add_ica` (`no`, `reg_no`, `index_no`, `name`, `ac_year`, `ica1`, `ica2`, `sica1`, `sica2`, `mid1`, `mid2`, `assignment`) VALUES
(1, '2014/CSC/045', 'S9999', 'abcde', '2014/2015', 80, 90, '-', '-', 70, 75, 90);

-- --------------------------------------------------------

--
-- Table structure for table `add_lecturer`
--

CREATE TABLE `add_lecturer` (
  `no` int(11) NOT NULL,
  `lec_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_lecturer`
--

INSERT INTO `add_lecturer` (`no`, `lec_name`) VALUES
(10, 'Dr.S.Mahesan'),
(11, 'Dr.E.Y.A.Charles'),
(12, 'Dr.K.Thabotharan'),
(13, 'Dr.A.Ramanan'),
(14, 'Mr.S.Suthakar'),
(15, 'Dr(Mrs.)B.Mayurathan'),
(16, 'Mr.K.Sarveswaran'),
(17, 'Mr.S.Shriparen');

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE `add_student` (
  `index_no` varchar(20) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `title` varchar(5) NOT NULL,
  `stu_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`index_no`, `reg_no`, `title`, `stu_name`) VALUES
('s9999', '2014/CSC/045', 'Mr.', 'abcdefg');

-- --------------------------------------------------------

--
-- Table structure for table `assign_course_2s`
--

CREATE TABLE `assign_course_2s` (
  `no` int(11) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  `lec_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_course_2s`
--

INSERT INTO `assign_course_2s` (`no`, `sub_id`, `lec_name`) VALUES
(16, 'CSC231SC2', 'Dr.S.Mahesan'),
(17, 'CSC232SC2', 'Dr.K.Thabotharan'),
(18, 'CSC234SC2', 'Dr.E.Y.A.Charles'),
(19, 'CSC231SC2', 'Dr.A.Ramanan'),
(20, 'CSC232SC2', 'Mr.K.Sarveswaran'),
(21, 'CSC233SC2', 'Mr.S.Suthakar'),
(22, 'CSC234SC2', 'Dr(Mrs.)B.Mayurathan');

-- --------------------------------------------------------

--
-- Table structure for table `assign_lecturer`
--

CREATE TABLE `assign_lecturer` (
  `id` int(11) NOT NULL,
  `dep_id` int(5) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `lec_id` varchar(20) NOT NULL,
  `acdm_yr_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_lecturer`
--

INSERT INTO `assign_lecturer` (`id`, `dep_id`, `courseid`, `lec_id`, `acdm_yr_id`) VALUES
(18, 0, 'csc1', ' 1', 1),
(19, 0, 'csc1', ' 1', 0),
(20, 0, 'csc1', ' 1', 2),
(21, 0, 'csc1', ' 1', 10),
(22, 0, 'csc1', ' 1', 10),
(23, 0, 'csc2', ' 2', 10),
(24, 0, 'csc2', ' 1', 10),
(25, 0, 'csc2', ' 1', 1),
(26, 0, 'csc2', ' 1', 2),
(27, 0, 'csc', ' 2', 1),
(28, 0, 'AI123', ' 1', 1),
(29, 0, 'HI', ' 26', 1),
(30, 0, 's', ' 29', 1),
(31, 0, 'dhnf', ' 21', 1),
(32, 0, 'csc6', ' 30', 1),
(33, 0, '111111111111111', ' 1', 1),
(34, 0, '22', ' 1', 1),
(35, 0, 'gobila', ' 2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `csc`
--

CREATE TABLE `csc` (
  `st_index` varchar(10) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `attempt` varchar(10) NOT NULL,
  `q1` int(5) NOT NULL,
  `q2` int(5) DEFAULT NULL,
  `q3` int(5) DEFAULT NULL,
  `q4` int(5) DEFAULT NULL,
  `q5` int(5) DEFAULT NULL,
  `q6` int(5) DEFAULT NULL,
  `total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csc2`
--

CREATE TABLE `csc2` (
  `st_index` varchar(10) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `attempt` varchar(5) NOT NULL,
  `q1` varchar(5) NOT NULL,
  `q2` varchar(5) DEFAULT NULL,
  `q3` varchar(5) DEFAULT NULL,
  `q4` varchar(5) DEFAULT NULL,
  `q5` varchar(5) DEFAULT NULL,
  `q6` varchar(5) DEFAULT NULL,
  `q7` varchar(5) DEFAULT NULL,
  `q8` varchar(5) DEFAULT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csc2`
--

INSERT INTO `csc2` (`st_index`, `ac_year`, `attempt`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `total`) VALUES
('sfsf', '2012/2013', 'P', 'sfs', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `csc3`
--

CREATE TABLE `csc3` (
  `st_index` varchar(10) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `attempt` varchar(5) NOT NULL,
  `q1` int(5) NOT NULL,
  `q2` int(5) DEFAULT NULL,
  `q3` int(5) DEFAULT NULL,
  `q4` int(5) DEFAULT NULL,
  `q5` int(5) DEFAULT NULL,
  `total` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csc4`
--

CREATE TABLE `csc4` (
  `st_index` varchar(10) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `q1` int(5) NOT NULL,
  `q2` int(5) DEFAULT NULL,
  `q3` int(5) DEFAULT NULL,
  `q4` int(5) DEFAULT NULL,
  `q5` int(5) DEFAULT NULL,
  `q6` int(5) DEFAULT NULL,
  `total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csc6`
--

CREATE TABLE `csc6` (
  `st_index` varchar(10) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `attempt` varchar(10) NOT NULL,
  `q1` int(5) NOT NULL,
  `q2` int(5) DEFAULT NULL,
  `q3` int(5) DEFAULT NULL,
  `q4` int(5) DEFAULT NULL,
  `q5` int(5) DEFAULT NULL,
  `q6` int(5) DEFAULT NULL,
  `q7` int(5) DEFAULT NULL,
  `q8` int(5) DEFAULT NULL,
  `total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csc7`
--

CREATE TABLE `csc7` (
  `st_index` varchar(10) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `q1` int(5) NOT NULL,
  `q2` int(5) DEFAULT NULL,
  `q3` int(5) DEFAULT NULL,
  `q4` int(5) DEFAULT NULL,
  `q5` int(5) DEFAULT NULL,
  `q6` int(5) DEFAULT NULL,
  `total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csc1111`
--

CREATE TABLE `csc1111` (
  `st_index` varchar(10) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `q1` varchar(5) NOT NULL,
  `q2` varchar(5) DEFAULT NULL,
  `q3` varchar(5) DEFAULT NULL,
  `q4` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cscscs`
--

CREATE TABLE `cscscs` (
  `st_index` varchar(10) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `attempt` varchar(10) NOT NULL,
  `q1` int(5) NOT NULL,
  `q2` int(5) DEFAULT NULL,
  `q3` int(5) DEFAULT NULL,
  `q4` int(5) DEFAULT NULL,
  `q5` int(5) DEFAULT NULL,
  `q6` int(5) DEFAULT NULL,
  `total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(50) NOT NULL,
  `fac_id` int(4) NOT NULL,
  `hd_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `fac_id`, `hd_id`) VALUES
(1, 'Computer Science', 3, 1),
(2, 'Chemistry', 3, 0),
(3, 'Department of Music', 2, 3),
(4, 'Department of Geography', 2, 0),
(5, 'Department of History ', 2, 0),
(6, 'Physics', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `dis_method`
--

CREATE TABLE `dis_method` (
  `id` int(11) NOT NULL,
  `dep_id` int(5) NOT NULL,
  `custom_id` int(5) NOT NULL,
  `srt_format` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dis_method`
--

INSERT INTO `dis_method` (`id`, `dep_id`, `custom_id`, `srt_format`) VALUES
(62, 1, 1, 'Presentation-2|Report-1'),
(104, 1, 1, 'ICA-2|ECE-1'),
(105, 1, 1, 'ICA-1|ECE-1|Presentation-1'),
(106, 1, 1, 'ICA-2|ECE-1'),
(107, 1, 1, 'ICA-2|ECE-1|Presentation-1');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_method`
--

CREATE TABLE `evaluation_method` (
  `id` int(5) NOT NULL,
  `dep_id` int(5) NOT NULL,
  `custom_id` int(11) NOT NULL,
  `no_of_objs` int(11) DEFAULT NULL,
  `obj1` varchar(50) DEFAULT NULL,
  `no_obj1` int(11) DEFAULT NULL,
  `con_obj_1` int(5) NOT NULL,
  `w1` double(5,2) DEFAULT NULL,
  `obj2` varchar(50) DEFAULT NULL,
  `no_obj2` int(11) DEFAULT NULL,
  `con_obj_2` int(5) NOT NULL,
  `w2` double(5,2) DEFAULT NULL,
  `obj3` varchar(50) DEFAULT NULL,
  `no_obj3` int(11) DEFAULT NULL,
  `con_obj_3` int(5) NOT NULL,
  `w3` double(5,2) DEFAULT NULL,
  `obj4` varchar(50) DEFAULT NULL,
  `no_obj4` int(11) DEFAULT NULL,
  `con_obj_4` int(5) NOT NULL,
  `w4` double(5,2) DEFAULT NULL,
  `obj5` varchar(50) DEFAULT NULL,
  `no_obj5` int(11) DEFAULT NULL,
  `con_obj_5` int(5) NOT NULL,
  `w5` double(5,2) DEFAULT NULL,
  `obj6` varchar(50) DEFAULT NULL,
  `no_obj6` int(11) DEFAULT NULL,
  `con_obj_6` int(5) NOT NULL,
  `w6` double(5,2) DEFAULT NULL,
  `obj7` varchar(50) DEFAULT NULL,
  `no_obj7` int(11) DEFAULT NULL,
  `con_obj_7` int(5) NOT NULL,
  `w7` double(5,2) DEFAULT NULL,
  `obj8` varchar(50) DEFAULT NULL,
  `no_obj8` int(11) DEFAULT NULL,
  `con_obj_8` int(5) NOT NULL,
  `w8` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_method`
--

INSERT INTO `evaluation_method` (`id`, `dep_id`, `custom_id`, `no_of_objs`, `obj1`, `no_obj1`, `con_obj_1`, `w1`, `obj2`, `no_obj2`, `con_obj_2`, `w2`, `obj3`, `no_obj3`, `con_obj_3`, `w3`, `obj4`, `no_obj4`, `con_obj_4`, `w4`, `obj5`, `no_obj5`, `con_obj_5`, `w5`, `obj6`, `no_obj6`, `con_obj_6`, `w6`, `obj7`, `no_obj7`, `con_obj_7`, `w7`, `obj8`, `no_obj8`, `con_obj_8`, `w8`) VALUES
(62, 1, 1, 2, 'Presentation', 2, 2, 15.00, 'Report', 3, 1, 70.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00),
(104, 1, 1, 2, 'ICA', 2, 2, 15.00, 'ECE', 1, 1, 70.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00),
(105, 1, 1, 3, 'ICA', 1, 1, 20.00, 'ECE', 4, 1, 20.00, 'Presentation', 1, 1, 60.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00),
(106, 1, 1, 2, 'ICA', 2, 2, 15.00, 'ECE', 1, 1, 70.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00),
(107, 1, 1, 3, 'ICA', 2, 2, 15.00, 'ECE', 1, 1, 35.00, 'Presentation', 1, 1, 35.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00, '', 0, 0, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_object`
--

CREATE TABLE `evaluation_object` (
  `id` int(11) NOT NULL,
  `dep_id` int(5) NOT NULL,
  `obj` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_object`
--

INSERT INTO `evaluation_object` (`id`, `dep_id`, `obj`) VALUES
(1, 1, 'ICA'),
(2, 1, 'ECE'),
(3, 1, 'Presentation'),
(4, 1, 'Practical Recording'),
(5, 1, 'Viva'),
(6, 1, 'Report'),
(7, 1, 'Mid Practical'),
(8, 1, 'Quiz'),
(9, 2, 'sdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `exam_format`
--

CREATE TABLE `exam_format` (
  `id` int(11) NOT NULL,
  `dep_id` int(5) NOT NULL,
  `lec_id` int(5) NOT NULL,
  `ac_id` varchar(50) NOT NULL,
  `courseid` varchar(50) NOT NULL,
  `method_id` int(5) NOT NULL,
  `main_object` varchar(50) NOT NULL,
  `no_qstn` int(5) NOT NULL,
  `obj1` varchar(50) NOT NULL,
  `obj1_tb1` varchar(50) NOT NULL,
  `obj2` varchar(50) NOT NULL,
  `obj1_tb2` varchar(50) NOT NULL,
  `obj3` varchar(50) NOT NULL,
  `obj1_tb3` varchar(50) NOT NULL,
  `obj4` varchar(50) NOT NULL,
  `obj1_tb4` varchar(50) NOT NULL,
  `obj5` varchar(50) NOT NULL,
  `obj1_tb5` varchar(50) NOT NULL,
  `obj6` varchar(50) NOT NULL,
  `obj1_tb6` varchar(50) NOT NULL,
  `obj7` varchar(50) NOT NULL,
  `obj1_tb7` varchar(50) NOT NULL,
  `save_state` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_format`
--

INSERT INTO `exam_format` (`id`, `dep_id`, `lec_id`, `ac_id`, `courseid`, `method_id`, `main_object`, `no_qstn`, `obj1`, `obj1_tb1`, `obj2`, `obj1_tb2`, `obj3`, `obj1_tb3`, `obj4`, `obj1_tb4`, `obj5`, `obj1_tb5`, `obj6`, `obj1_tb6`, `obj7`, `obj1_tb7`, `save_state`) VALUES
(47, 1, 1, '2012/2013', 'project', 104, 'ECE', 2, 'ICA', '1_project_ICA', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(48, 1, 1, '2012/2013', 'csc', 104, 'ECE', 3, 'ICA', '1_csc_ICA', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(49, 1, 1, '2012/2013', 'csc', 104, 'ECE', 3, 'ICA', '1_csc_ICA', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(50, 1, 1, '2012/2013', 'AI', 104, 'ICA', 2, 'ECE', '1_AI_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(51, 1, 1, '2012/2013', 'database', 104, 'ICA', 2, 'ECE', '1_database_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(55, 1, 0, '2012/2013', 'HI!@', 104, 'ICA', 2, 'ECE', '1_HI!@_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(56, 1, 0, '2012/2013', 'HI!@', 104, 'ICA', 2, 'ECE', '1_HI!@_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(57, 1, 0, '2012/2013', 'HI!@', 104, 'ICA', 2, 'ECE', '1_HI!@_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(58, 1, 1, '2012/2013', 'HI!@', 104, 'ICA', 2, 'ECE', '1_HI!@_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(59, 1, 1, '2012/2013', 'HI!@', 104, 'ICA', 2, 'ECE', '1_HI!@_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(60, 1, 1, '2012/2013', 'nbvfd', 104, 'ICA', 2, 'ECE', '1_nbvfd_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(61, 1, 1, '2012/2013', 'dfbfg', 104, 'ICA', 2, 'ECE', '1_dfbfg_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(62, 1, 1, '2012/2013', 'test', 104, 'ICA', 2, 'ECE', '1_test_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(81, 1, 1, '2012/2013', 'dxevgt', 104, 'ICA', 4, 'ECE', '1_dxevgt_ECE', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1),
(82, 1, 1, '2012/2013', '1111111111111111', 62, 'Presentation', 2, 'Report', '1_1111111111111111_Report', '', '0', '', '0', '', '0', '', '0', '', '0', '', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(5) NOT NULL,
  `fac_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_name`) VALUES
(1, 'Faculty of Agriculture'),
(2, 'Faculty of Arts'),
(3, 'Faculty of Science'),
(4, 'Faculty of Medicine'),
(5, 'Faculty of Management studies and Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_admin`
--

CREATE TABLE `faculty_admin` (
  `fac_id` int(11) NOT NULL,
  `fac_admin_name` varchar(50) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(15) NOT NULL,
  `access` varchar(10) NOT NULL DEFAULT 'TRUE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_admin`
--

INSERT INTO `faculty_admin` (`fac_id`, `fac_admin_name`, `from`, `to`, `username`, `password`, `email`, `mobile`, `access`) VALUES
(2, 'xx', '2017-08-22', '0000-00-00', 'dept_', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'X@gmail.com', 123456789, 'TRUE'),
(3, '3', '0000-00-00', '0000-00-00', '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '', 0, 'TRUE'),
(4, '1', '0000-00-00', '0000-00-00', '1', '1', '', 0, 'TRUE'),
(5, '2', '0000-00-00', '0000-00-00', '2', 'c81e728d9d4c2f636f067f89cc14862c', '', 0, 'TRUE');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `lec_name` varchar(50) NOT NULL,
  `dept_id` int(5) NOT NULL,
  `fact_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `lec_name`, `dept_id`, `fact_id`) VALUES
(1, 'Dr. A. Ramanan', 1, 3),
(2, 'Dr. S. Mahesan', 1, 3),
(21, 'Dr.E.Y.A.Charles', 1, 0),
(22, 'Dr.K.Thabotharan', 1, 0),
(23, 'Mr.S.Suthakar', 1, 0),
(24, 'Dr(Mrs.)B.Mayurathan', 1, 0),
(25, 'Mr.K.Sarveswaran', 1, 0),
(26, 'Mr.S.Shriparen', 1, 0),
(30, 'lecturer2', 4, 2),
(31, 'Chem hd', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `obj_mark`
--

CREATE TABLE `obj_mark` (
  `id` int(5) NOT NULL,
  `index` varchar(10) NOT NULL,
  `xm_format _type` varchar(50) NOT NULL,
  `ac_yr` varchar(50) NOT NULL,
  `ob1` int(5) NOT NULL,
  `ob2` int(5) NOT NULL,
  `ob3` int(5) NOT NULL,
  `ob4` int(5) NOT NULL,
  `ob5` int(5) NOT NULL,
  `ob6` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_report`
--

CREATE TABLE `project_report` (
  `st_index` varchar(10) NOT NULL,
  `q1` int(5) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_report_20132014`
--

CREATE TABLE `project_report_20132014` (
  `st_index` varchar(10) NOT NULL,
  `Total` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `fac_id` int(5) NOT NULL,
  `dep_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `lec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `fac_id`, `dep_id`, `username`, `password`, `type`, `lec_id`) VALUES
('3', 3, 0, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'fact_head', 0),
('University Admin', 0, 0, 'admin', '698d51a19d8a121ce581499d7b701668', 'admin', 0),
('dept_head', 3, 1, 'dept_head', '698d51a19d8a121ce581499d7b701668', 'dept_head', 0),
('fact_head', 2, 0, 'fact_head', '698d51a19d8a121ce581499d7b701668', 'fact_head', 0),
('lecturer', 0, 1, 'lecturer1', '698d51a19d8a121ce581499d7b701668', 'lecturer', 1),
('xx', 2, 0, 'lecturer2', '698d51a19d8a121ce581499d7b701668', 'lecturer', 30);

-- --------------------------------------------------------

--
-- Table structure for table `st_detail`
--

CREATE TABLE `st_detail` (
  `id` int(11) NOT NULL,
  `index_no` varchar(50) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `yr_study` int(5) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `st_index` varchar(10) NOT NULL,
  `q1` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_object`
--

CREATE TABLE `test_object` (
  `eo` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL,
  `per` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_object`
--

INSERT INTO `test_object` (`eo`, `no`, `per`) VALUES
('ICA', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('Viva', ' ', ''),
('Viva', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('Mid Practical', ' ', ''),
('Mid Practical', ' ', ''),
('Presentation', ' ', ''),
('Presentation', ' ', ''),
('Practical Recording', ' ', ''),
('Report', ' ', ''),
('Presentation', ' ', ''),
('ECE', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('ICA', ' ', ''),
('ECE', ' ', ''),
('Mid Practical', ' ', ''),
('Viva', ' ', ''),
('Viva', ' ', ''),
('ECE', ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `st_index` varchar(10) NOT NULL,
  `q1` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uni_admin`
--

CREATE TABLE `uni_admin` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_admin`
--

INSERT INTO `uni_admin` (`name`, `username`, `password`) VALUES
('admin123', 'admin123', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Table structure for table `view_result`
--

CREATE TABLE `view_result` (
  `stu_id` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `index_no` varchar(20) NOT NULL,
  `attempt` int(2) NOT NULL,
  `ac_year` varchar(10) NOT NULL,
  `final_mark` int(3) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view_result`
--

INSERT INTO `view_result` (`stu_id`, `course_id`, `index_no`, `attempt`, `ac_year`, `final_mark`, `grade`) VALUES
('2014/CSC/045', 'CSC555', 'S9999', 1, '2015/2016', 62, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_year`
--
ALTER TABLE `ac_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac_year_fdvd_`
--
ALTER TABLE `ac_year_fdvd_`
  ADD PRIMARY KEY (`S_Id`);

--
-- Indexes for table `ac_year_true_`
--
ALTER TABLE `ac_year_true_`
  ADD PRIMARY KEY (`S_Id`);

--
-- Indexes for table `add_course`
--
ALTER TABLE `add_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_ece`
--
ALTER TABLE `add_ece`
  ADD PRIMARY KEY (`index_no`);

--
-- Indexes for table `add_ica`
--
ALTER TABLE `add_ica`
  ADD PRIMARY KEY (`index_no`);

--
-- Indexes for table `add_lecturer`
--
ALTER TABLE `add_lecturer`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`index_no`);

--
-- Indexes for table `assign_course_2s`
--
ALTER TABLE `assign_course_2s`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `assign_lecturer`
--
ALTER TABLE `assign_lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `dis_method`
--
ALTER TABLE `dis_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_method`
--
ALTER TABLE `evaluation_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_object`
--
ALTER TABLE `evaluation_object`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_format`
--
ALTER TABLE `exam_format`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `faculty_admin`
--
ALTER TABLE `faculty_admin`
  ADD PRIMARY KEY (`fac_id`,`fac_admin_name`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_mark`
--
ALTER TABLE `obj_mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `st_detail`
--
ALTER TABLE `st_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni_admin`
--
ALTER TABLE `uni_admin`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_year`
--
ALTER TABLE `ac_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ac_year_fdvd_`
--
ALTER TABLE `ac_year_fdvd_`
  MODIFY `S_Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ac_year_true_`
--
ALTER TABLE `ac_year_true_`
  MODIFY `S_Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `add_course`
--
ALTER TABLE `add_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `add_lecturer`
--
ALTER TABLE `add_lecturer`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `assign_course_2s`
--
ALTER TABLE `assign_course_2s`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `assign_lecturer`
--
ALTER TABLE `assign_lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dis_method`
--
ALTER TABLE `dis_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `evaluation_method`
--
ALTER TABLE `evaluation_method`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `evaluation_object`
--
ALTER TABLE `evaluation_object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `exam_format`
--
ALTER TABLE `exam_format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fac_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `faculty_admin`
--
ALTER TABLE `faculty_admin`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `obj_mark`
--
ALTER TABLE `obj_mark`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `st_detail`
--
ALTER TABLE `st_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
