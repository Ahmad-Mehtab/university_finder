-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 12:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`) VALUES
(1, 'Civil engineering'),
(2, 'Electrical engineering'),
(3, 'Mechanical engineering'),
(4, 'Architecture department'),
(7, 'Computer Science dept');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_members`
--

CREATE TABLE IF NOT EXISTS `faculty_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `university_id` int(11) NOT NULL,
  `department_id` int(200) NOT NULL,
  `faculty_name` varchar(200) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `heighest_degree` varchar(300) NOT NULL,
  `degree_institute` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `faculty_members`
--

INSERT INTO `faculty_members` (`id`, `university_id`, `department_id`, `faculty_name`, `designation`, `heighest_degree`, `degree_institute`) VALUES
(14, 2, 2, 'Prof. Dr. Azzam ul Asar', 'Professor & Dean Faculty of Engineering', 'Post Doctorate Electrical Engineering', 'New Jersey Institute of Technology, USA'),
(15, 2, 2, 'Dr. Zahid Ullah', 'Chairman / Associate Professor', 'Ph.D Electronics Engg', 'City University of Hong Kong, Kowloon Tong, Hong Kong'),
(16, 4, 2, 'Engr. Khalid Rehman', 'Academic Coordinator / Assistant Professor', 'MS.c Mobile & Sattellite Comm Ph.D In Progress', 'Univerisity of Bradford, UK CECOS University'),
(17, 4, 1, 'Prof. Dr. Hassan Nasir', 'Associate Professor', 'Ph. D Civil Engineering (Construction)', 'University Of Waterloo, Canada'),
(18, 2, 1, 'Dr. Shahid Iqbal', 'Assistant Professor', 'Ph. D Structural Engineering', 'HTWK Lipzig, Germany & TU Freiberg, Germany'),
(19, 2, 1, 'Dr. Muhammad Ali Sikandar', 'Academic Coordinator / Assistant Professor', 'MS.c Mobile & Sattellite Comm Ph.D In Progress', 'Hanyang University South Korea'),
(20, 4, 4, 'Ar. Adnan Ahmad Khan', 'Chairman & Associate Professor', 'B. Architecture M.Sc. Urban & Regional Planning M.Sc. Construction & Project Management', 'M.Sc Construction and Project Management Queens University Belfast UK.'),
(21, 4, 4, 'Ar. Shaukat Ali', 'Assistant Professor', 'M.Sc. U & R P PhD (enrolled)', 'University of Peshawar'),
(22, 2, 7, 'test name', 'de', 'BIT', 'sfsdfsdfsf'),
(23, 4, 1, 'test name', 'de', 'BIT', 'sfsdfsdfsf'),
(25, 2, 1, 'Rehan Alvi', 'Professor', 'PHD', 'Peshawar University '),
(26, 8, 1, 'Rehan Alvi', 'Professor', 'BIT', 'Peshawar University ');

-- --------------------------------------------------------

--
-- Table structure for table `fee_structure`
--

CREATE TABLE IF NOT EXISTS `fee_structure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `univ_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `semestername` text NOT NULL,
  `admission_fee` float NOT NULL,
  `reg_fee` float NOT NULL,
  `tution_fee` float NOT NULL,
  `exam_fee` float NOT NULL,
  `misc_charges` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fee_structure`
--

INSERT INTO `fee_structure` (`id`, `univ_id`, `dept_id`, `semestername`, `admission_fee`, `reg_fee`, `tution_fee`, `exam_fee`, `misc_charges`, `total`) VALUES
(3, 4, 1, 'Semester 1', 2000, 3000, 4500, 6700, 7800, 45000),
(5, 4, 1, 'Semester 2', 0, 3000, 4500, 6700, 7800, 45000),
(7, 4, 1, 'Semester 3', 2000, 3000, 4500, 6700, 7800, 900000),
(8, 2, 1, 'Semester 1', 2000, 3000, 4500, 6700, 7800, 45000),
(9, 2, 1, 'Semester 2', 0, 3000, 4500, 6700, 7800, 45000),
(10, 8, 1, 'Semester 1', 2000, 3000, 4500, 6700, 7800, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE IF NOT EXISTS `universities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `university_name` text NOT NULL,
  `university_logo` text NOT NULL,
  `featureimg` text NOT NULL,
  `univ_description` text NOT NULL,
  `status` int(11) NOT NULL,
  `total_fees` float NOT NULL,
  `total_rating` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `university_name`, `university_logo`, `featureimg`, `univ_description`, `status`, `total_fees`, `total_rating`) VALUES
(2, 'CECOS-UNIVERISTY OF INFORMATION & SCIENCES PESHAWAR', '190629101051911.jpg', '190701909254620.png', 'CECOS Educational Institutions have been source of continuous support to more than twenty two thousand students for developing their careers, especially in Business Management, Computer Sciences and Information Technology since 1986. The story of genesis of this University and its evolution through various stages, started in the year 1986 when Engr. Muhammad Tanveer Javed established at Peshawar a small private sector institution, CECOS Data Institute, with only five computers and a very few students. CDI then designed a One Year diploma course in Computer Science and got it approved from Board of Technical Education (B.T.E) for implementation in NWFP (now KPK). Later this institute got affiliated to Peshawar University becoming the premier college to offer postgraduate courses in Computer Science and University of London for certain Computer courses. Today, Alhamdolillah, it has on its role over three thousand students.', 1, 0, 4.3),
(4, 'IQRA NATIONAL UNIVERSITY PESHAWAR HAYATABAD Phase 3', '1907019093347220px-Official_Logo_of_INU.png', '190701909334720.jpg', 'Defining possibilities, creating opportunities\r\nThe synthesis of teaching and research is fundamental to Iqra National University (INU). Its our constant endeavor to produce, not only excellent engineers and business leaders but also well balanced human beings with strong sense of values. Therefore INU always focuses at imparting high quality education not only at undergraduate and postgraduate levels but also at its MS / PhD programs of international level offered in disciplines of Management Sciences, Computer Sciences, Engineering and Art & Design. Moreover, the expansion of facilities at INU, not only helps to ensure conducive environment to cater for the educational needs of a large number of talented students but it also provide opportunities to the students to get benefit from modern age technology and make themselves competent enough to face this challenging era.\r\nINU has established its unique position due to the impressive vision of an enlightened management and tireless efforts of a highly qualified faculty. The University, for its repute, faculty and unique academic curriculums attracts a large number of students every year although it offers admission to a measured number of student s from all regions of country.', 1, 0, 4),
(5, 'NATIONAL UNIVERSITY OF COMPUTER & EMERGING SCIENCE,PESHAWAR', '19070210101251250px-National_University_of_Computer_and_Emerging_Sciences_logo.png', '1907011212283420.png', 'zzxzxc sadasasdsad sds', 1, 0, 3),
(6, 'UNIVERSITY OF ENGINEERING & TECHNOLOGY,PESHAWAR', '19070210103052220px-University_of_Engineering_and_Technology_Peshawar_logo.svg.png', '1907021010305220.jpg', 'creating opportunities The synthesis of teaching and research is fundamental to Iqra National University (INU). Its our constant endeavor to produce, not only excellent engineers and business leaders but also well balanced hucreating opportunities The synthesis of teaching and research is fundamental to Iqra National University (INU). Its our constant endeavor to produce, not only excellent engineers and business leaders but also well balanced hu', 1, 0, 0),
(7, 'ABDUL WALI KHAN UNIVERSITY MARDAN', '19070210105554AWKUM-Logo.jpeg', '1907021010555420.jpg', 'Educational Institutions have been source of continuous support to more than twenty two thousand students for developing their careers, especially in Business ManagementEducational Institutions have been source of continuous support to more than twenty two thousand students for developing their careers, especially in Business ManagementEducational Institutions have been source of continuous support to more than twenty two thousand students for developing their careers, especially in Business Management', 1, 0, 0),
(8, 'Hello testing ', '19070512124014AWKUM-Logo.jpeg', '1907051212401420.jpg', 'zxfzxccxzcsd fs dfdsf', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `country`, `password`, `date`, `address`, `status`) VALUES
(5, 'Rehan Alvi', 'rehan', 'al.czysz@gmail.com', '03469200752', 'Peshawar', '12345', '2019-04-29', 'ff-684 Deans Trade Center Pesh Cantt.', 1),
(6, 'Muhammad Anas', 'anaskhan', 'muh.anaskhan2627@gmail.com', '03469200752', 'Peshawar', '12345', '2019-04-29', 'ff-684 Deans Trade Center Pesh Cantt. ', 1),
(7, 'ahmad', 'ahmad', 'ahmad.mhtb@gmail.com', '03339686313', 'Peshawar', '12345', '2019-05-14', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE IF NOT EXISTS `user_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `university_name` text NOT NULL,
  `rating_value` int(11) NOT NULL,
  `comments` text NOT NULL,
  `status` int(11) NOT NULL,
  `add_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `userid`, `university_name`, `rating_value`, `comments`, `status`, `add_date`) VALUES
(45, 7, '2', 4, 's adfsd fsfssdf', 1, '2019-07-01'),
(46, 5, '2', 4, 'dfsdfsdsdf', 1, '2019-07-01'),
(48, 6, '2', 5, 'dsfdsfsf', 1, '2019-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(2, 'admin@gmail.com', 'admin123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
