-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2011 at 12:28 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

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
-- Table structure for table `tbl_discuss`
--

CREATE TABLE IF NOT EXISTS `tbl_discuss` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(58) NOT NULL,
  `country` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `intrests` text NOT NULL,
  `biography` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_discuss`
--

INSERT INTO `tbl_discuss` (`uid`, `name`, `country`, `age`, `gender`, `phone`, `email`, `username`, `password`, `intrests`, `biography`) VALUES
(1, 'Bijay', 'Nepal', 25, 'm', '5525950', 'link2bj@gmail.com', 'bijay', 'bijay', 'Music, Playing, Entertainment only. ', 'height 5''8". '),
(2, 'Binita', 'Nepal', 20, 'f', '3333333', 'b_nita@yahoo.com', 'nita', 'nita', 'Music  ', 'Fun loving and joking.  '),
(4, 'Gopal', 'Canada', 28, 'm', '2147483647', 'gopal@hotmail.com', 'gopal', 'gopal', '', ''),
(5, 'Bivek', 'Nepal', 30, 'm', '2147483647', 'bivek_j@gmail.com', 'bivek', 'bivek', '', ''),
(6, 'Shreeva', 'Nepal', 22, 'f', '2147483647', 'shreeva@yahoo.com', 'shree', 'shree', '', ''),
(7, 'Suman', 'Nepal', 25, 'm', '897587423', 'suman@yahoo.com', 'suman', 'suman', '', ''),
(8, '', '', 0, 'm', '', '', '', '', '', ''),
(9, 'Sailesh', 'Nepal', 27, 'm', '2454235436', 'sailesh@yahoo.com', 'sailesh', 'sailesh', '', ''),
(10, 'Raj', 'China', 27, 'm', '2134324', 'raj@yahoo.com', 'raj', 'raj', 'Traveling, Reading.  ', 'Fight character.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_friend`
--

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
('6', '1', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mailbox`
--

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
('Bijay', '3', 'Raja babu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_replies`
--

CREATE TABLE IF NOT EXISTS `tbl_replies` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `rep_message` text NOT NULL,
  `name` varchar(55) NOT NULL,
  KEY `rid` (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_replies`
--

INSERT INTO `tbl_replies` (`rid`, `tid`, `rep_message`, `name`) VALUES
(1, 3, 'Hey', 'Binita');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topics`
--

CREATE TABLE IF NOT EXISTS `tbl_topics` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `startedby` varchar(55) NOT NULL,
  `topic` varchar(202) NOT NULL,
  `message` text NOT NULL,
  `replies` varchar(7) NOT NULL,
  `category` varchar(22) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_topics`
--

