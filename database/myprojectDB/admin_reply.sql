-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 04:35 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reply`
--

CREATE TABLE IF NOT EXISTS `admin_reply` (
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `msg` varchar(225) NOT NULL,
  `reply` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reply`
--

INSERT INTO `admin_reply` (`name`, `email`, `msg`, `reply`) VALUES
('Mukul Garg ', 'mukulgarg909@gmail.com', 'admin please respond to my test check', 'Yes, Mukul i have received your test query. For any query you can contact me whenever you want.'),
('Huma ', 'huma786@gmail.com', 'when will the sale begins?', 'at the beggining of diwali festival on the month of october, 2018'),
('rohit ', 'rohit123@gmail.com', 'i made a connection with you,connect with asap.', 'hi buddy, whats your query let me know'),
('Mukul Garg ', 'mukulgarg909@gmail.com', 'i got it', 'congralutions then...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
