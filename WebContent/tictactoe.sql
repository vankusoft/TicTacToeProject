-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 08:48 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tictactoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Password`, `Email`, `Score`) VALUES
(0, 'admin', 'admin', 'amdin', 0),
(0, 'admin', 'admin', 'admin', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, 'dada', 'dada', 'dada', 0),
(0, 'ivan', 'ivan', 'ivandinkow@abv.bg', 0),
(0, 'ivand', 'ivan', 'ivan', 0),
(0, 'ivand', 'ivan', 'ivan', 0),
(0, 'ivand', 'ivan', 'ivan', 0),
(0, 'ivand', 'ivan', 'ivan', 0),
(0, 'hello', 'world', 'ivan', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0),
(0, '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
