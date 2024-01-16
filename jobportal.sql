-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 07:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('raje', '19'),
('raje', '19');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `password`) VALUES
('raje', '19');

-- --------------------------------------------------------

--
-- Table structure for table `candidateapplied`
--

CREATE TABLE `candidateapplied` (
  `company` varchar(29) DEFAULT NULL,
  `job` varchar(16) DEFAULT NULL,
  `name` varchar(28) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidateapplied`
--

INSERT INTO `candidateapplied` (`company`, `job`, `name`, `email`, `phone`) VALUES
('SmartBridge', 'Web developer', 'Santhiya', 'deepikaaerd325@gmail', '9025812842');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `comapany` varchar(20) DEFAULT NULL,
  `postname` varchar(19) DEFAULT NULL,
  `skills` varchar(20) DEFAULT NULL,
  `descriptjob` varchar(100) DEFAULT NULL,
  `salary` varchar(14) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`comapany`, `postname`, `skills`, `descriptjob`, `salary`, `location`) VALUES
('UNIQ', 'UI/UX Design', 'Figma', 'Design seamless and intuitive user interfaces, merging creativity with functionality for an enhanced', '20,000', 'Coimbatore'),
('NXT Logic', 'Web developer', 'MERN', 'Create cutting-edge web applications with MERN stack expertise for seamless user experiences.', '30,000', 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `company` varchar(18) DEFAULT NULL,
  `post` varchar(20) DEFAULT NULL,
  `skills` varchar(20) DEFAULT NULL,
  `descript` varchar(70) DEFAULT NULL,
  `salary` varchar(12) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `name` varchar(16) DEFAULT NULL,
  `mailid` varchar(29) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`name`, `mailid`, `phone`, `password`) VALUES
('Poorna', 'poornasrip2003@gmail.com', '9025812842', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(93) DEFAULT NULL,
  `password` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`) VALUES
('', ''),
('', ''),
('', ''),
('', ''),
('poorna', '123'),
('poorna', '123'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('priya', '12345'),
('priya', '12345'),
('santhiya', 'san'),
('periyasamy', '12'),
('periyasamy', '12'),
('periyasamy', '12'),
('poorna', '123'),
('ajay', '12'),
('ajay', '34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
