-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2018 at 01:24 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `blood` varchar(5) NOT NULL,
  `district` varchar(50) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `blood`, `district`, `email`, `contact`) VALUES
(32, 'Tariqul islam', 'B+', 'Dhaka', 'tariqulislam@gmail.com', '+88019503054'),
(48, 'Parvin Begum', 'B+', 'Barisal', 'parvin@gmail.com', '016999548'),
(54, 'Arafat islam', 'A+', 'Khulna', 'Arafat@gmail.com', '019540668'),
(55, 'Rafiqul islam', 'A-', 'Chitagong', 'Rafiqulislam@email.com', '0154123'),
(57, 'MD. Rubel', 'A+', 'Dhaka', 'rubelduet@gmail.com', '016999548'),
(58, '', '', '', '', ''),
(59, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Tariqul', 't@gmail.com', '1202'),
(2, 'Jitu', 'j@gmail.com', '1e48c4420b7073bc11916c6c1de226'),
(3, 'Jitu', 'tariqul@gmail.com', 'fdfgsfdh'),
(4, 'tariqul', 't@gmail.com', '1202');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `Message`) VALUES
(1, 'Tariqul', 'tariqul.tais@gmail.com', 'HI'),
(2, 'Tariqul', 'tariqul.tais@gmail.com', 'HI');
