-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2021 at 06:40 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `george-marina`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone number` int NOT NULL,
  `userrole` enum('root','admin','customer','moderator') NOT NULL,
  `activated` tinyint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `firstname`, `infix`, `lastname`, `phone number`, `userrole`, `activated`) VALUES
(2, 'adruijter@gmail.com', '$2y$10$eoAd9qFVz4dvr7u3OD2Te.r3BFI7xhJCid823h8yOyHbf1HSoqPTe', '0', '0', '0', 0, 'customer', 0),
(3, 'rra@mboutrecht.nl', '$2y$10$SDPRaGXfY2/pRp/MYAdUX.NYHMxaGh1hGBSm9k9YUDy1dcRynETXC', '0', '0', '0', 0, 'customer', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
