-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2013 at 08:34 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_discuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `slug`, `description`, `image`) VALUES
(2, 'Technology', 'technology', 'this category is for technical discussions ', 'computer.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_friend`
--

CREATE TABLE IF NOT EXISTS `tbl_friend` (
  `req_from` varchar(13) NOT NULL,
  `req_to` varchar(13) NOT NULL,
  `accept` char(1) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_friend`
--

INSERT INTO `tbl_friend` (`req_from`, `req_to`, `accept`, `created_at`) VALUES
('5', '1', 'y', 0),
('5', '2', 'y', 0),
('2', '1', 'y', 0),
('1', '3', 'y', 0),
('10', '9', 'y', 0),
('10', '2', 'y', 0),
('1', '9', 'y', 0),
('1', '7', 'y', 0),
('4', '1', 'y', 0),
('6', '1', 'y', 0),
('11', '1', 'y', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mailbox`
--

CREATE TABLE IF NOT EXISTS `tbl_mailbox` (
  `mail_from` int(11) NOT NULL,
  `mail_to` int(11) NOT NULL,
  `messages` text NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mailbox`
--

INSERT INTO `tbl_mailbox` (`mail_from`, `mail_to`, `messages`, `created_at`) VALUES
(0, 10, 'Hello Raj,\r\nHow are you.', 0),
(0, 5, 'kasdh jashdj sadusad ', 0),
(0, 3, 'Raja babu', 0),
(0, 2, 'Hello', 0),
(0, 2, 'Hello', 0),
(0, 2, 'Hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_replies`
--

CREATE TABLE IF NOT EXISTS `tbl_replies` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `rep_message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  KEY `rid` (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_replies`
--

INSERT INTO `tbl_replies` (`rid`, `tid`, `rep_message`, `user_id`, `created_at`) VALUES
(1, 3, 'Hey', 0, 0),
(2, 1, 'Reply of new model of computer arrived', 0, 0),
(3, 0, 'Reply of new model of computer arrived', 0, 0),
(4, 10, 'No no it is not true', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topics`
--

CREATE TABLE IF NOT EXISTS `tbl_topics` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic` varchar(202) NOT NULL,
  `message` text NOT NULL,
  `replies` varchar(7) NOT NULL,
  `category` varchar(22) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_topics`
--

INSERT INTO `tbl_topics` (`tid`, `user_id`, `topic`, `message`, `replies`, `category`, `created_at`) VALUES
(10, 1, 'New computer', 'Hey I have heard that new branded computers have arrived in Kathmandu. Is it true', '1', 'Technology', 0),
(11, 1, 'database design', 'database design kasari garne ?', '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(58) NOT NULL,
  `mname` varchar(58) DEFAULT NULL,
  `lname` varchar(58) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `fname`, `mname`, `lname`, `country`, `phone`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'Bijay', '', '', 'Nepal', '5525950', 'link2bj@gmail.com', 'bijay', 'bijay', 0),
(2, 'Binita', '', '', 'Nepal', '3333333', 'b_nita@yahoo.com', 'nita', 'nita', 0),
(4, 'Gopal', '', '', 'Canada', '2147483647', 'gopal@hotmail.com', 'gopal', 'gopal', 0),
(5, 'Bivek', '', '', 'Nepal', '2147483647', 'bivek_j@gmail.com', 'bivek', 'bivek', 0),
(6, 'Shreeva', '', '', 'Nepal', '2147483647', 'shreeva@yahoo.com', 'shree', 'shree', 0),
(7, 'Suman', '', '', 'Nepal', '897587423', 'suman@yahoo.com', 'suman', 'suman', 0),
(9, 'Sailesh', '', '', 'Nepal', '2454235436', 'sailesh@yahoo.com', 'sailesh', 'sailesh', 0),
(10, 'Raj', '', '', 'China', '2134324', 'raj@yahoo.com', 'raj', 'raj', 0),
(11, 'Deependra', '', 'Timalsina', 'Nepal', '9841067482', 'email@email.com', 'username', 'password', 0),
(12, 'Kapil', '', 'Maharjan', 'Nepal', '9808765135', 'kapil@hotmail.com', 'frantic', 'fractpil', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
