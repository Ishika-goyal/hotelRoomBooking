-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 05:32 PM
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
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_dir`
--

CREATE TABLE `admin_dir` (
  `a_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_dir`
--

INSERT INTO `admin_dir` (`a_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `r_id` int(222) NOT NULL,
  `rimage` varchar(222) NOT NULL,
  `rtype` varchar(222) NOT NULL,
  `rprice` int(222) NOT NULL,
  `rtext` text NOT NULL,
  `available` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`r_id`, `rimage`, `rtype`, `rprice`, `rtext`, `available`) VALUES
(5, 'fav-room1', 'Single Rom', 2500, 'Single room with queen size bed and basic amenities.', 3),
(21, '', 'double room', 3500, '', 1),
(23, '', 'premium room', 7250, '', 3),
(24, '', 'delux room', 9998, '', 2),
(27, '59ccf7a2ac7f3.jpg', 'single room', 2321, 'lorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiuilorem guyes duin dfiui', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cb`
--

CREATE TABLE `cb` (
  `cab_id` int(10) NOT NULL,
  `cabtype` text NOT NULL,
  `pickadd` text NOT NULL,
  `dropadd` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `pickdate` date NOT NULL,
  `dropdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE `compare` (
  `c_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `bed` text NOT NULL,
  `amenities` varchar(20) NOT NULL,
  `cancellation` varchar(30) NOT NULL,
  `breakfast` varchar(30) NOT NULL,
  `gym` varchar(30) NOT NULL,
  `parking` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compare`
--

INSERT INTO `compare` (`c_id`, `name`, `type`, `price`, `bed`, `amenities`, `cancellation`, `breakfast`, `gym`, `parking`, `image`) VALUES
(1, 'ITC hotels', 'Single Room', 4000, 'Single bed', '5', 'bi bi-x-lg', 'bi bi-x-lg', 'bi bi-x-lg', 'bi bi-x-lg', '1'),
(2, 'Leela Ambience', 'Single Room', 3500, 'Single bed', '4', 'bi bi-check-lg', 'bi bi-x-lg', 'bi bi-x-lg', 'bi bi-check-lg', '2'),
(3, 'The Taj ', 'Single Room', 5500, 'Queen size', '7', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-x-lg', 'bi bi-check-lg', '3'),
(4, 'ITC hotels', 'Double Room', 4800, 'Double bed', '6', 'bi bi-x-lg', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-check-lg', '4'),
(5, 'Leela Ambience', 'Double Room', 5200, 'Double bed', '6', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-x-lg', 'bi bi-check-lg', '5'),
(6, 'The Taj', 'Double Room', 6000, 'Queen size', '7', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-x-lg', 'bi bi-check-lg', '6'),
(7, 'ITC hotels', 'Premium room', 8000, 'Queen size', '6', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-x-lg', 'bi bi-check-lg', '4'),
(8, 'Leela Ambience', 'Premium room', 8500, 'Queen size', '7', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-x-lg', 'bi bi-check-lg', '8'),
(9, 'The Taj', 'Premium Room', 9000, 'King size', '8', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-check-lg', 'bi bi-check-lg', '9'),
(10, 'ITC hotels', 'Delux Room', 8500, 'Queen size', '7', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-x-lg', 'bi bi-check-lg', '10'),
(11, 'Leela Ambience', 'Delux Room', 9000, 'Queen size', '7', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-check-lg', 'bi bi-check-lg', '11'),
(12, 'The Taj', 'Delux Room', 9500, 'King size', '8', 'bi bi-x-lg', 'bi bi-check-lg', 'bi bi-check-lg', 'bi bi-check-lg', '12');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(11, 'ishika', 'a@a', 'oooo', 'fbjkbfsdb'),
(12, 'rabi', 'rabi@gamil.com', 'qdgqkd', 'asmxakskabsdksaj'),
(13, 'shenky', 'shenky@gmail.com', 'test', 'test123'),
(14, 'saurabh', 'saurabh@gmail.com', 'test', 'random test'),
(15, 'nidhi', 'a@a', 'concern', 'hfgh'),
(16, 'ishika', 'ishika@gmail.com', 'hello', 'xxxxxxx'),
(17, 'ishika', 'ishikagoyal946@gmail.com', 'test', 'this is test mail');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `user_id` int(222) NOT NULL,
  `fname` varchar(222) NOT NULL,
  `lname` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `brand` varchar(222) NOT NULL,
  `cardno` varchar(222) NOT NULL,
  `emonth` varchar(222) NOT NULL,
  `eyear` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`user_id`, `fname`, `lname`, `address`, `city`, `email`, `phone`, `brand`, `cardno`, `emonth`, `eyear`) VALUES
(125, 'abcdef', 'bde', 'delhi', 'delhi', 'labham19@gmail.com', '234723949', 'Discover', '243534456456556', '05 ', '2018'),
(126, 'ollaaa', 'uberrr', 'delhi', 'delhi', 'labham19@gmail.com', '1362738462', 'Master Card', '2468723573483942', '03 ', '2018'),
(136, 'mukesh', 'accdsdc', 'delhi', 'delhi', 'mohitgoyal00111@gmail.com', '2345678977', 'Discover', '4534536578768978', '08 ', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `mb`
--

CREATE TABLE `mb` (
  `sno` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `price` int(100) NOT NULL,
  `eb` varchar(30) NOT NULL,
  `no_rooms` int(5) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `r_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `p_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `price` int(10) NOT NULL,
  `text` text NOT NULL,
  `stops` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `name`, `price`, `text`, `stops`, `image`) VALUES
(1, 'Goa Tour', 15000, 'explore goa', 'Calangute beach-Fort aguada-Dudhsagar falls-Anjuna beach', '01'),
(2, 'Delhi Tour', 12000, 'explore delhi', 'Akshardham temple-Qutub minar-Lotus temple-Red fort-Hauz khas village', '02'),
(3, 'Mumbai Tour', 20000, 'Explore mumbai', 'Marine drive-Gateway of India-Bandra Worli sea link-Shree siddhivinayak-Chhatrapati Shivaji Terminus', '03'),
(4, 'Jaipur Tour', 20000, 'Explore Jaipur forts!', 'Amber palace-EleSafari-Hawa mahal-Nahargarh fort', '04');

-- --------------------------------------------------------

--
-- Table structure for table `pb`
--

CREATE TABLE `pb` (
  `pb_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `no_guest` int(11) NOT NULL,
  `dep_date` date NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE `room_info` (
  `r_id` int(5) NOT NULL,
  `r_type` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(10000) NOT NULL,
  `available` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`r_id`, `r_type`, `city`, `price`, `text`, `image`, `available`) VALUES
(1, 'Single Room', 'delhi', 2500, 'Single room with queen size bed and basic amenities.', 'fav-room1', 3),
(2, 'Double Room', 'delhi', 3500, 'Double room (2 rooms) with queen size beds in each room and other basic amenities', 'fav-room2', 3),
(3, 'Premium Room', 'delhi', 5000, 'A luxury room with king size bed and basic amenities', 'fav-room3', 3),
(4, 'Delux Room', 'delhi', 6000, 'A luxury suite with 2 rooms, king size beds in each room and all basic amenities', 'fav-room4', 3),
(5, 'Single Room', 'mumbai', 2500, 'Single room with queen size bed and basic amenities.', 'fav-room1', 3),
(6, 'Double Room', 'mumbai', 3501, 'Double room (2 rooms) with queen size beds in each room and other basic amenities', 'fav-room2', 3),
(7, 'Premium Room', 'mumbai', 5000, 'A luxury room with king size bed and basic amenities', 'fav-room3', 3),
(8, 'Delux Room', 'mumbai', 6000, 'A luxury suite with 2 rooms, king size beds in each room and all basic amenities', 'fav-room4', 3),
(9, 'Single Room', 'goa', 2500, 'Single room with queen size bed and basic amenities.', 'fav-room1', 3),
(10, 'Double Room', 'goa', 3500, 'Double room (2 rooms) with queen size beds in each room and other basic amenities', 'fav-room2', 3),
(11, 'Premium Room', 'goa', 5000, 'A luxury room with king size bed and basic amenities', 'fav-room3', 3),
(12, 'Delux Room', 'goa', 6000, 'A luxury suite with 2 rooms, king size beds in each room and all basic amenities', 'fav-room4', 3),
(13, 'Single Room', 'jaipur', 2500, 'Single room with queen size bed and basic amenities.', 'fav-room1', 3),
(14, 'Double Room', 'jaipur', 3500, 'Double room (2 rooms) with queen size beds in each room and other basic amenities', 'fav-room2', 3),
(15, 'Premium Room', 'jaipur', 5000, 'A luxury room with king size bed and basic amenities', 'fav-room3', 3),
(16, 'Delux Room', 'jaipur', 6001, 'A luxury suite with 2 rooms, king size beds in each room and all basic amenities', 'fav-room4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sno` int(11) NOT NULL,
  `otp` int(10) NOT NULL,
  `verify` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `age`, `email`, `password`, `sno`, `otp`, `verify`) VALUES
('labham', 21, 'labham19@gmail.com', '12345678', 44, 7160, 1),
('rabi', 21, 'rabianandos2002@gmail.com', '12345678', 46, 5092, 1),
('uzaair', 21, 'umohd9296@gmail.com', '12345678', 47, 4971, 1),
('sheky', 28, 'prateek.mittal68@gmail.com', '12345678', 48, 3083, 1),
('saurabh', 28, 'saurabhmittal904@gmail.com', '12345678', 49, 2871, 1),
('mohtit', 22, 'mohitgoyal00111@gmail.com', 'Mohit@123', 56, 1691, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_dir`
--
ALTER TABLE `admin_dir`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `cb`
--
ALTER TABLE `cb`
  ADD PRIMARY KEY (`cab_id`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `mb`
--
ALTER TABLE `mb`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `pb`
--
ALTER TABLE `pb`
  ADD PRIMARY KEY (`pb_id`);

--
-- Indexes for table `room_info`
--
ALTER TABLE `room_info`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_dir`
--
ALTER TABLE `admin_dir`
  MODIFY `a_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `r_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cb`
--
ALTER TABLE `cb`
  MODIFY `cab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `compare`
--
ALTER TABLE `compare`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `user_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `mb`
--
ALTER TABLE `mb`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1221;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pb`
--
ALTER TABLE `pb`
  MODIFY `pb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room_info`
--
ALTER TABLE `room_info`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
