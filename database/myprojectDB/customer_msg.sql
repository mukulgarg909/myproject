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
-- Table structure for table `customer_msg`
--

CREATE TABLE IF NOT EXISTS `customer_msg` (
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `msg` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_msg`
--

INSERT INTO `customer_msg` (`name`, `email`, `msg`) VALUES
('Mukul Garg', 'mukulgarg909@gmail.com', 'admin please respond to my test check'),
('Huma', 'huma786@gmail.com', 'when will the sale begins?'),
('rohit', 'rohit123@gmail.com', 'i made a connection with you,\r\nconnect with asap.'),
('Mukul Garg', 'mukulgarg909@gmail.com', 'i got it');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
