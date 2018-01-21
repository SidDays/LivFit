-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2015 at 04:07 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `username`, `comment`, `rating`, `stamp`) VALUES
(1, 'Chinmaay', 'Best Site Ever! I am so in love', 5, '2015-09-27 15:36:14'),
(2, 'Siddhesh', 'This site made me very fit. thanks', 5, '2015-09-27 15:36:39'),
(3, 'sidraj', 'How to exercise', -1, '2015-10-11 10:02:39'),
(4, 'Chinmaay', 'I am now like Vin diesol', 2, '2015-10-11 10:30:39'),
(5, 'Siddhesh', 'Not so bad', 4, '2015-10-14 00:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `sex` char(1) NOT NULL,
  `dob` date NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `dp` blob,
  `wplevel` int(1) NOT NULL DEFAULT '1',
  `diet` int(1) NOT NULL DEFAULT '0',
  `difficulty` int(1) NOT NULL DEFAULT '1',
  `week` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table stores the user data for registration.';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `sex`, `dob`, `height`, `weight`, `dp`, `wplevel`, `diet`, `difficulty`, `week`) VALUES
('ChinmayTotes', 'Karanjkar 2', 'Chinmaay', 'chins', 'f', '1970-01-01', 172, 99, NULL, 1, 1, 1, 1),
('Siddhesh', 'Karekar', 'Siddhesh', '12345', 'm', '1970-01-18', 182, 64, NULL, 1, 1, 3, 1),
('Siddhes2', 'Karekar', 'sidraj', '123456', 'm', '1995-07-31', 182, 64, NULL, 1, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE IF NOT EXISTS `workouts` (
  `Muscle` varchar(10) NOT NULL,
  `Exercise` varchar(40) NOT NULL,
  `Reps` int(2) NOT NULL,
  `Sets` int(2) NOT NULL,
  `Difficulty` int(1) NOT NULL,
  `Id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`Muscle`, `Exercise`, `Reps`, `Sets`, `Difficulty`, `Id`) VALUES
('Chest', 'Flat Bench Press', 10, 2, 1, 1),
('Chest', 'Incline Bench Press', 10, 3, 2, 2),
('Chest', 'Decline Bench Press', 10, 2, 3, 3),
('Chest', 'Dumbell Press', 10, 2, 1, 4),
('Chest', 'Push Ups', 10, 2, 1, 5),
('Chest', 'Dumbell Fly', 7, 2, 3, 6),
('Back', 'T Bar', 10, 2, 3, 7),
('Back', 'Chin Ups', 7, 3, 2, 8),
('Back', 'Lat Pulldowns', 12, 4, 1, 9),
('Back', 'Dumbell Pull Backs', 10, 3, 1, 10),
('Back', 'Barbell Pull Backs', 10, 3, 3, 11),
('Back', 'Side Dumbell Pulls', 7, 2, 2, 12),
('Legs', 'Free Squats', 20, 3, 1, 13),
('Legs', 'Dumbell Squats', 10, 2, 1, 14),
('Legs', 'Front Curls', 15, 3, 1, 15),
('Legs', 'Weighted Squats', 10, 3, 2, 16),
('Legs', 'Leg Press', 10, 2, 3, 17),
('Legs', 'Reverse Curls', 10, 2, 3, 18),
('Legs', 'Calves Press', 15, 3, 2, 19),
('Arms', 'Barbell Curls', 12, 3, 1, 20),
('Arms', 'Dumbell Curls', 10, 3, 1, 21),
('Arms', 'Cable Curls', 10, 2, 1, 22),
('Arms', 'Tricep Extension', 10, 2, 2, 23),
('Arms', 'Single Dumbell Extensions', 10, 3, 2, 24),
('Arms', 'Reverse Cable Extensions', 10, 2, 2, 25),
('Abs', 'Situps', 10, 3, 1, 26),
('Abs', 'Crunch Machine', 10, 2, 3, 27),
('Abs', 'Planks', 10, 3, 2, 28),
('Abs', 'Decline Crunches', 10, 3, 3, 29),
('Abs', 'Leg Raises', 15, 2, 1, 30),
('Cardio', 'Jogging', 15, 2, 1, 31),
('Cardio', 'Cycling', 15, 2, 1, 32),
('Cardio', 'Cross Trainer', 10, 2, 2, 33),
('Cardio', 'High Intensity Interval Training', 10, 2, 3, 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
