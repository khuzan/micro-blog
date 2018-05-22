-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2017 at 04:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bangtan`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `email`, `password`, `username`) VALUES
(72, 'admin@mail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(500) NOT NULL,
  `dates` varchar(500) NOT NULL,
  `images` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `post`, `dates`, `images`) VALUES
(21, 'POST 2', 'Oct.14.2017', 'gay5.jpg'),
(22, 'POST 3 hehehe', 'Oct.14.2017', 'gay6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `contact`) VALUES
(31, 'error', 'erro@mail.com', 'error', 2112312),
(33, 'dd', 'dd@mail.com', 'dd', 28282828),
(34, 'earlmoii', 'earlmoii@gmail.com', 'qwery', 2147483647),
(35, 'hoax', 'hoax@mail.com', 'hoax', 1921238),
(36, 'earlmoii', 'earlmoii@gmail.com', 'qwery', 2147483647),
(40, 'pawer', 'pawer@Mail.com', 'password', 121222213),
(41, 'cong', 'cong@mail.com', 'cong', 11),
(42, 'god', 'god@Mail.com', 'god', 121111),
(44, 'new', 'new@mail.com', 'new', 2147483647),
(46, 'kathpotpot', 'potpot@mail.com', 'potpot', 2147483647),
(48, 'ss', 'ss@mail.com', 'ss', 9292929),
(49, 's', 's@mail.cm', 'pas', 2123213),
(50, 'animal', 'animal@mail.com', 'animal', 1010);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
