-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 06:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `regno` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub1` double NOT NULL,
  `sub2` double NOT NULL,
  `sub3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regno`, `pass`, `name`, `sub1`, `sub2`, `sub3`) VALUES
(1001, 'akshay123', 'Akshay', 48, 47, 44),
(1002, 'aka123', 'Akanksha', 50, 35, 41),
(1003, 'dhh112', 'Dhruv', 49, 38, 45),
(1004, 'div99', 'Divya', 49, 50, 58),
(1005, 'km2', 'Kamran', 29, 48, 33),
(1006, 'zaid87', 'Zaid', 45, 44, 33),
(1007, 'hari00', 'Harish', 29, 33, 37),
(1008, 'jeetu21', 'Jeetu', 50, 49, 49),
(1009, 'yogi55', 'Yogi', 33, 34, 32),
(1010, 'nav99', 'Navya', 22, 29, 38),
(9999, 'admin123', 'tester', 1, 2.2, 3.3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
