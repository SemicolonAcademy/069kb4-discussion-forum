-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2013 at 04:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_discuss`
--
DROP DATABASE `db_discuss`;
CREATE DATABASE `db_discuss` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_discuss`;

-- --------------------------------------------------------

--
-- Table structure for table `table`
--
-- Creation: Apr 02, 2013 at 08:07 AM
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_discuss`
--
-- Creation: Apr 02, 2013 at 08:07 AM
-- Last update: Apr 02, 2013 at 08:18 AM
--

DROP TABLE IF EXISTS `tbl_discuss`;
CREATE TABLE IF NOT EXISTS `tbl_discuss` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(58) NOT NULL,
  `mname` varchar(58) NOT NULL,
  `lname` varchar(58) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_discuss`
--

INSERT INTO `tbl_discuss` (`uid`, `fname`, `mname`, `lname`, `country`, `phone`, `email`, `username`, `password`) VALUES
(1, 'Bijay', '', '', 'Nepal', '5525950', 'link2bj@gmail.com', 'bijay', 'bijay'),
(2, 'Binita', '', '', 'Nepal', '3333333', 'b_nita@yahoo.com', 'nita', 'nita'),
(4, 'Gopal', '', '', 'Canada', '2147483647', 'gopal@hotmail.com', 'gopal', 'gopal'),
(5, 'Bivek', '', '', 'Nepal', '2147483647', 'bivek_j@gmail.com', 'bivek', 'bivek'),
(6, 'Shreeva', '', '', 'Nepal', '2147483647', 'shreeva@yahoo.com', 'shree', 'shree'),
(7, 'Suman', '', '', 'Nepal', '897587423', 'suman@yahoo.com', 'suman', 'suman'),
(9, 'Sailesh', '', '', 'Nepal', '2454235436', 'sailesh@yahoo.com', 'sailesh', 'sailesh'),
(10, 'Raj', '', '', 'China', '2134324', 'raj@yahoo.com', 'raj', 'raj'),
(11, 'Deependra', '', 'Timalsina', 'Nepal', '9841067482', 'email@email.com', 'username', 'password'),
(12, 'Kapil', '', 'Maharjan', 'Nepal', '9808765135', 'kapil@hotmail.com', 'frantic', 'fractpil');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_friend`
--
-- Creation: Apr 02, 2013 at 08:07 AM
-- Last update: Apr 02, 2013 at 08:07 AM
--

DROP TABLE IF EXISTS `tbl_friend`;
CREATE TABLE IF NOT EXISTS `tbl_friend` (
  `req_from` varchar(13) NOT NULL,
  `req_to` varchar(13) NOT NULL,
  `accept` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_friend`
--

INSERT INTO `tbl_friend` (`req_from`, `req_to`, `accept`) VALUES
('5', '1', 'y'),
('5', '2', 'y'),
('2', '1', 'y'),
('1', '3', 'y'),
('10', '9', 'y'),
('10', '2', 'y'),
('1', '9', 'y'),
('1', '7', 'y'),
('4', '1', 'y'),
('6', '1', 'y'),
('11', '1', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mailbox`
--
-- Creation: Apr 02, 2013 at 08:07 AM
-- Last update: Apr 02, 2013 at 08:07 AM
--

DROP TABLE IF EXISTS `tbl_mailbox`;
CREATE TABLE IF NOT EXISTS `tbl_mailbox` (
  `mail_from` varchar(55) NOT NULL,
  `mail_to` varchar(13) NOT NULL,
  `messages` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mailbox`
--

INSERT INTO `tbl_mailbox` (`mail_from`, `mail_to`, `messages`) VALUES
('Binita', '10', 'Hello Raj,\r\nHow are you.'),
('Bijay', '5', 'kasdh jashdj sadusad '),
('Bijay', '3', 'Raja babu'),
('', '2', 'Hello'),
('Bijay', '2', 'Hello'),
('Bijay', '2', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_replies`
--
-- Creation: Apr 02, 2013 at 08:07 AM
-- Last update: Apr 02, 2013 at 08:13 AM
--

DROP TABLE IF EXISTS `tbl_replies`;
CREATE TABLE IF NOT EXISTS `tbl_replies` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `rep_message` text NOT NULL,
  `name` varchar(55) NOT NULL,
  KEY `rid` (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_replies`
--

INSERT INTO `tbl_replies` (`rid`, `tid`, `rep_message`, `name`) VALUES
(1, 3, 'Hey', 'Binita'),
(2, 1, 'Reply of new model of computer arrived', ''),
(3, 0, 'Reply of new model of computer arrived', ''),
(4, 10, 'No no it is not true', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topics`
--
-- Creation: Apr 02, 2013 at 08:07 AM
-- Last update: Apr 02, 2013 at 08:13 AM
--

DROP TABLE IF EXISTS `tbl_topics`;
CREATE TABLE IF NOT EXISTS `tbl_topics` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `startedby` varchar(55) NOT NULL,
  `topic` varchar(202) NOT NULL,
  `message` text NOT NULL,
  `replies` varchar(7) NOT NULL,
  `category` varchar(22) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_topics`
--

INSERT INTO `tbl_topics` (`tid`, `startedby`, `topic`, `message`, `replies`, `category`) VALUES
(10, 'bijay', 'New computer', 'Hey I have heard that new branded computers have arrived in Kathmandu. Is it true', '1', 'Technology');
