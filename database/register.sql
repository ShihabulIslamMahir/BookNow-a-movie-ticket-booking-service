-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2017 at 06:08 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(4, 'mahir', 'mahirworkstation@gmail.com', '03130f826d15d0f5dec987449c6b5de9', '2017-12-04 06:10:34'),
(5, 'mash bro', 'shihab.mahi1995@gmail.com', 'd096fce2d4d8bff74aef678de97967c4', '2017-12-04 06:14:36'),
(6, 'mash bro', 'shihab.mahi1995@gmail.com', 'd096fce2d4d8bff74aef678de97967c4', '2017-12-04 06:16:44'),
(7, 'mahirs', 'mash@gmail.com', '03130f826d15d0f5dec987449c6b5de9', '2017-12-04 07:54:37'),
(8, 'mahirs', 'mash@gmail.com', 'b877ece07375a0e06f44e3f8e10b2b88', '2017-12-17 03:36:41'),
(9, 'mahirs', 'mash@gmail.com', 'b877ece07375a0e06f44e3f8e10b2b88', '2017-12-17 03:37:52'),
(10, 'mahirs', 'mash@gmail.com', 'b877ece07375a0e06f44e3f8e10b2b88', '2017-12-17 03:38:10'),
(11, 'mash bro', 'shihab.mahi1995@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-12-17 03:41:46'),
(12, 'mash bro', 'shihab.mahi1995@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-12-17 03:42:19'),
(13, 'mahir', 'mahirworkstation@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2017-12-17 11:49:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
