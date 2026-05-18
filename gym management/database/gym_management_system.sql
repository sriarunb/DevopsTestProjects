-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2020 at 04:52 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gym_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_timing`
--

CREATE TABLE `class_timing` (
  `class_time_id` int(11) NOT NULL auto_increment,
  `class_time` varchar(100) NOT NULL,
  PRIMARY KEY  (`class_time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `class_timing`
--

INSERT INTO `class_timing` (`class_time_id`, `class_time`) VALUES
(17, '6:00AM'),
(18, '7:00AM'),
(19, '7;00AM'),
(21, '9:00PM'),
(22, '9:30 AM'),
(23, '5am');

-- --------------------------------------------------------

--
-- Table structure for table `customer_class_timing`
--

CREATE TABLE `customer_class_timing` (
  `customer_class_timing_id` int(100) NOT NULL auto_increment,
  `customer_id` varchar(100) NOT NULL,
  `class_timing_id` varchar(100) NOT NULL,
  PRIMARY KEY  (`customer_class_timing_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `customer_class_timing`
--

INSERT INTO `customer_class_timing` (`customer_class_timing_id`, `customer_id`, `class_timing_id`) VALUES
(7, '108', '108'),
(8, '20', '20'),
(9, '30', '30'),
(10, '402', '402'),
(11, '501', '501'),
(14, '10', '18'),
(15, '11', '22'),
(16, '57', '10'),
(17, '57', '23');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(100) NOT NULL auto_increment,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `health_details` varchar(200) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  PRIMARY KEY  (`customer_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_name`, `customer_address`, `customer_city`, `contact_number`, `email_id`, `image`, `weight`, `health_details`, `date_of_birth`, `gender`, `height`) VALUES
(57, 'raghu', 'belagavi', 'bgm', '9632208463', 'r@gmail.com', '', '75', 'good', '1994-04-21', 'Male', '5.11'),
(58, 'raghu', 'sadankere road', 'dharwad', '9009610033', 'raghu12@gmail.com', '', '67', 'normal', '1995-04-02', 'Male', '5.9'),
(59, 'pramod', 'dwd', 'bgm', '9632208463', 'p@gmail.com', 'home6.jfif', '75', 'good', '1994-04-21', 'Male', '5.11'),
(60, 'san', 'DWD', 'Hubali', '8105953436', 'san@gmail.com', '', '65', 'Good', '1994-04-21', 'FEMALE', '5.11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_fees_details`
--

CREATE TABLE `customer_fees_details` (
  `customer_fees_id` int(11) NOT NULL auto_increment,
  `customer_id` int(11) NOT NULL,
  `fees_amount` varchar(100) NOT NULL,
  `fees_date` varchar(100) NOT NULL,
  PRIMARY KEY  (`customer_fees_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `customer_fees_details`
--

INSERT INTO `customer_fees_details` (`customer_fees_id`, `customer_id`, `fees_amount`, `fees_date`) VALUES
(9, 20, '2000', '2020-01-01'),
(10, 2009, '2125', '2020-10-21'),
(11, 30, '1000', '2020-01-21'),
(12, 200, '11000', '2020-04-21'),
(17, 10, '2000', '2020-01-21'),
(18, 0, '', ''),
(19, 57, '2000', '2020-01-21'),
(20, 57, '2000', '2020-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(100) NOT NULL auto_increment,
  `customer_id` varchar(100) NOT NULL,
  `feedback_title` varchar(100) NOT NULL,
  `feedback_description` varchar(100) NOT NULL,
  `feedback_date` varchar(100) NOT NULL,
  PRIMARY KEY  (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `customer_id`, `feedback_title`, `feedback_description`, `feedback_date`) VALUES
(8, '10', 'super', 'very good', '2020-1-12'),
(9, '111', 'very good', 'well trained and good', '2020-02-25'),
(10, '12', 'osm', 'well equiped', '2020-01-25'),
(12, '57', 'super', 'very good', '2020-1-12');

-- --------------------------------------------------------

--
-- Table structure for table `gym_courses`
--

CREATE TABLE `gym_courses` (
  `gym_course_id` int(100) NOT NULL auto_increment,
  `gym_course_name` varchar(100) NOT NULL,
  `course_description` varchar(100) NOT NULL,
  `course_fees` varchar(100) NOT NULL,
  `course_duration` varchar(100) NOT NULL,
  PRIMARY KEY  (`gym_course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gym_courses`
--

INSERT INTO `gym_courses` (`gym_course_id`, `gym_course_name`, `course_description`, `course_fees`, `course_duration`) VALUES
(7, 'fat burn', 'to loose weight', '500', '3 months'),
(8, 'fitness', 'it maintains body fitness', '1000', '3 months');

-- --------------------------------------------------------

--
-- Table structure for table `gym_course_to_customer`
--

CREATE TABLE `gym_course_to_customer` (
  `gym_course_to_customer_id` int(100) NOT NULL auto_increment,
  `customer_id` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  PRIMARY KEY  (`gym_course_to_customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gym_course_to_customer`
--

INSERT INTO `gym_course_to_customer` (`gym_course_to_customer_id`, `customer_id`, `start_date`, `end_date`) VALUES
(6, '99', '2020-01-13', '2020-04-13'),
(7, '22', '2020-01-22', '2020-04-22'),
(13, '10', '2020-01-22', '2020-04-13'),
(14, '57', '2020-01-22', '2020-04-22'),
(15, '57', '2020-01-22', '2020-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `gym_items`
--

CREATE TABLE `gym_items` (
  `gym_id` int(100) NOT NULL auto_increment,
  `gym_item_name` varchar(100) NOT NULL,
  `gym_item_discription` varchar(100) NOT NULL,
  `gym_item_quantity` varchar(100) NOT NULL,
  `gym_item_photo` varchar(300) NOT NULL,
  PRIMARY KEY  (`gym_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gym_items`
--

INSERT INTO `gym_items` (`gym_id`, `gym_item_name`, `gym_item_discription`, `gym_item_quantity`, `gym_item_photo`) VALUES
(6, 'dumbells', 'ihelps to gain the muscles', '50', ''),
(7, 'threadmil', 'used to fit the body', '60', ''),
(9, 'dumbbells', 'it is used to gain the muscles', '10', ''),
(10, '', '', '', ''),
(11, 'dumbbells', 'used to fit the body', '10', ''),
(12, 'aa', 'aa', 'aa', 'home3.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(100) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `hint_question` varchar(100) NOT NULL,
  `hint_answer` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`, `hint_question`, `hint_answer`, `status`) VALUES
(1, 'admin', '12', 'admin', 'who are you', 'admin', 'active'),
(2, 'trainer', '123', 'trainer', 'who are you', 'trainer', 'active'),
(3, 'customer', '123', 'customer', 'who are you', 'customer', 'active'),
(4, 'san@gmail.com', '123', 'customer', 'What is Your Contact No.?', '8105953436', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_details`
--

CREATE TABLE `trainer_details` (
  `trainer_id` int(100) NOT NULL auto_increment,
  `trainer_name` varchar(100) NOT NULL,
  `trainer_address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `achievments` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY  (`trainer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `trainer_details`
--

INSERT INTO `trainer_details` (`trainer_id`, `trainer_name`, `trainer_address`, `contact_number`, `email_id`, `experience`, `date_of_birth`, `achievments`, `photo`) VALUES
(10, 'rr', 'navanagar', '9481976552', 'rahul12@gmail.com', '5 years', '1996-01-16', 'a', ''),
(11, 'suchidan', 'old spppp', '9845677234', 'suchidan2125@gmail.com', '30 years', '12-11-1995', 'active', ''),
(13, 'suchidananda', 'ys colony', '9880010866', 'ritesh123@gmail.com', '5 years', '1998-11-21', '', ''),
(14, 'suchidananda', 'ys colony', '9880010866', 'ritesh123@gmail.com', '10 years', '1996-01-16', '', ''),
(15, 'suchidananda', 'ys colony', '9880010866', 'ritesh123@gmail.com', '10 years', '1996-01-16', '', ''),
(16, 'suchidananda', 'ys colony', '9880010866', 'ritesh123@gmail.com', '10 years', '1996-01-16', '', ''),
(17, 'suchidananda', 'ys colony', '9880010866', 'ritesh123@gmail.com', '10 years', '1996-01-16', '', ''),
(18, 'suchidananda', 'ys colony', '9880010866', 'ritesh123@gmail.com', '10 years', '1996-01-16', '', ''),
(19, 'suchidananda', 'ys colony', '9880010866', 'ritesh123@gmail.com', '10 years', '1996-01-16', '', ''),
(20, 'suchiiiiiiiiiiiiii', 'ys colony', '9880010866', 'ritesh123@gmail.com', '10 years', '1996-01-16', '', ''),
(21, 'suchidananda', 'ys colony', '9880010866', 'ritesh123@gmail.com', '5', '1998-11-21', '', ''),
(22, 'san', 'san', '5', 'san@gmail.com', '12', '2020-12-12', 'good', ''),
(23, 'san', 'san', '5', 'san@gmail.com', '12', '2020-12-12', 'good', ''),
(24, 'sam', 'shettar colony', '9000861003', 'sam123@gmail.com', '2 years', '1998-02-04', 'good', ''),
(25, 'san', 'shettar colony', '9632208463', 'p@gmail.com', '12', '1994-04-21', 'good', ''),
(26, 'san', 'shettar colony', '9632208463', 'p@gmail.com', '12', '1994-04-21', 'good', ''),
(27, 'san', 'shettar colony', '9632208463', 'p@gmail.com', '12', '1994-04-21', 'good', 'user2.png'),
(28, 'san', 'shettar colony', '9632208463', 'p@gmail.com', '12', '1994-04-21', 'good', 'user2.png');
