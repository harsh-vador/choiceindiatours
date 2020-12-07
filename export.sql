-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2018 at 05:04 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `choiceindiatours`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE IF NOT EXISTS `company_details` (
  `admin_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `street` varchar(100) NOT NULL,
  `roadNo` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`admin_id`, `password`, `email`, `contact_no`, `street`, `roadNo`, `city`, `pincode`, `description`, `twitter`, `facebook`) VALUES
('admin', '4e0aca8642f3ef120e43db525b004be8', 'choiceindiatours@gmail.com', '022-28904567', '5,Shree Sawli Building, ', 'B T Road', 'Dahisar(W)', 400068, 'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.YJFTYFUYTFFGHDTYDH', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `feedback_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `fname`, `lname`, `email`, `subject`, `message`) VALUES
('2018-07-05 13:51:06', 'kunal', 'dawda', 'kunal.dawda@somaiya.edu', 'regarding website design', 'its awesome !'),
('2018-07-05 14:23:03', 'priyanka', 'k', 'pk@gmail.com', 'what a design', 'keep it up!'),
('2018-07-05 14:23:40', 'umag', ' rupareliya', 'ur@gmail.com', 'good', 'i wanna see igt'),
('2018-09-21 13:39:32', 'sakina', 'kachwala', 'ksakina@gmail.com', 'interesting site', 'how do i create a site?');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `s_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`s_id`, `email`) VALUES
('2018-07-05 23:51:09', ''),
('2018-07-05 23:53:57', 'kunal.dawda@somaiya.edu');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `tour_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(50) NOT NULL,
  `starting_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `places` varchar(500) NOT NULL,
  `price` varchar(8) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `pdf_url` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `type`, `starting_date`, `end_date`, `places`, `price`, `image_url`, `pdf_url`, `description`, `status`) VALUES
('2018-10-02 19:03:35', 'domestic', '11/2/2018', '11/10/2018', 'gangtok', '15000', 'images/tour_images/6628299.jpg', '', 'Kashmir is the northernmost geographical region of the Indian subcontinent. Until the mid-19th century, the term "Kashmir" denoted only the Kashmir Valley ...', 'pending'),
('2018-10-02 19:02:48', 'domestic', '10/27/2018', '11/3/2018', 'kullu, manali ', '25000', 'images/tour_images/9942261.jpg', '', 'Kashmir is the northernmost geographical region of the Indian subcontinent. Until the mid-19th century, the term "Kashmir" denoted only the Kashmir Valley ...', 'pending'),
('2018-10-02 19:01:36', 'domestic', '10/6/2018', '10/13/2018', 'Kashmir,Kullu Manali,Sikkim', '50000', 'images/tour_images/3926909.jpg', '', 'Kashmir is the northernmost geographical region of the Indian subcontinent. Until the mid-19th century, the term "Kashmir" denoted only the Kashmir Valley ...', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`),
  UNIQUE KEY `pnumber` (`pnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `email`, `pnumber`, `dob`, `reg_time`) VALUES
(' ', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '0000-00-00', '2018-08-27 10:07:54'),
('kunal dawda', 'cb93b44d07a7988746fb009ba7c44fca', 'kunalkd2244@gmail.com', '8888741122', '2018-08-07', '2018-08-27 10:24:28'),
('ranjan dawda', 'cb93b44d07a7988746fb009ba7c44fca', 'kunal.dawda@somaiya.edu', '9699975856', '2018-08-15', '2018-08-27 11:07:43'),
('meet desai', 'cb93b44d07a7988746fb009ba7c44fca', 'meet.d@somaiya.edu', '8275328222', '2018-09-01', '2018-09-24 09:19:45'),
('meet desai', 'ae2ba50ac734e27db244d55a10b4ac4e', 'meet.desai@somaiya.edu', '9638527410', '1992-08-09', '2018-10-15 10:36:03');
