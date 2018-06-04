-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2014 at 08:41 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `transorder`
--

CREATE TABLE IF NOT EXISTS `transorder` (
  `Nopemes` int(5) NOT NULL,
  `Tglpemes` date NOT NULL,
  `Nmpemes` varchar(30) NOT NULL,
  `Pilpemes` varchar(10) NOT NULL,
  `Bykpemes` int(5) NOT NULL,
  `Jmltran` int(8) NOT NULL,
  PRIMARY KEY  (`Nopemes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transorder`
--

