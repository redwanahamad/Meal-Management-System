-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 01:53 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `did` int(150) NOT NULL,
  `day_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`did`, `day_name`) VALUES
(1, 'Saturday'),
(2, 'Sunday'),
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `item1` varchar(150) NOT NULL,
  `item2` varchar(150) NOT NULL,
  `did` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`item1`, `item2`, `did`) VALUES
('Kachchi Biryani', 'Egg', 1),
('Bhuna Khichuri', 'Vegetable', 2),
('Patla Khichuri', 'Egg', 3),
('Morog Polao', 'Vegetable', 4),
('Tehari', 'Egg', 5),
('Beef Biryani', 'Vegetable Curry', 6),
('Haji Biryani', 'Egg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `uname` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `meal` varchar(150) NOT NULL,
  `amount` varchar(150) NOT NULL,
  `purl` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`uname`, `fname`, `lname`, `email`, `dob`, `phone`, `gender`, `password`, `meal`, `amount`, `purl`) VALUES
('Redwan Ahamad', 'ahamad', 'redwan', 'redwan.ahamad@gmail.com', '04-04-1997', '01686095009', 'male', '7445', '0', '0', ''),
('karima al safa', 'safa', 'karima', 'karima.safa@gmail.com', '03-02-1997', '012345345', 'female', '5555', '0', '0', ''),
('siddik ahamad', 'siddik', 'ahamad', 'siddik.ahamad@gmail.com', '04-06-1998', '056434545343', 'male', '5555', '0', '0', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
