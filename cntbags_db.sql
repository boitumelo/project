-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2014 at 05:20 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c&tbags_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(4) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`adminID`),
  FULLTEXT KEY `LastName` (`LastName`),
  FULLTEXT KEY `LastName_2` (`LastName`),
  FULLTEXT KEY `FirstName` (`FirstName`),
  FULLTEXT KEY `FirstName_2` (`FirstName`),
  FULLTEXT KEY `Password` (`Password`),
  FULLTEXT KEY `Password_2` (`Password`),
  FULLTEXT KEY `Password_3` (`Password`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `FirstName`, `LastName`, `Password`) VALUES
(17, 'CAROLINE', 'MOLELE', '5678'),
(16, 'BOITUMELO', 'PHAHO', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
