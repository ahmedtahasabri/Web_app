-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2024 at 08:05 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `individual_payment`
--

DROP TABLE IF EXISTS `individual_payment`;
CREATE TABLE IF NOT EXISTS `individual_payment` (
  `violation id` int NOT NULL AUTO_INCREMENT,
  `id user` varchar(50) NOT NULL,
  `time&date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`violation id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `individual_payment`
--

INSERT INTO `individual_payment` (`violation id`, `id user`, `time&date`, `status`) VALUES
(1, 'E2806894000050209105BD14', '2024-05-29 16:51:13', 0),
(2, 'E2806894000050209105BD14', '2024-05-29 16:51:13', 0),
(3, 'E2806894000050209105BD14', '2024-05-29 17:05:48', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
