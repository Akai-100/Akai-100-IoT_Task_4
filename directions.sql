-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 06:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directions`
--

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `robot_directions` varchar(10) NOT NULL,
  `movement_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`robot_directions`, `movement_time`) VALUES
('Right', '2022-08-15 07:02:27'),
('Forward', '2022-08-15 07:02:32'),
('Left', '2022-08-15 07:02:33'),
('Stop', '2022-08-15 07:02:34'),
('Right', '2022-08-15 07:02:36'),
('Backward', '2022-08-15 07:02:36'),
('Forward', '2022-08-15 07:31:44'),
('Left', '2022-08-15 07:31:45'),
('Backward', '2022-08-15 07:31:45'),
('Forward', '2022-08-15 07:46:57'),
('Left', '2022-08-15 07:46:58'),
('Backward', '2022-08-15 07:46:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
