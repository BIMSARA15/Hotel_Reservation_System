-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 11:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservations`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `res_id` int(11) NOT NULL,
  `passport` char(15) NOT NULL,
  `hotel` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`res_id`, `passport`, `hotel`, `location`, `check_in`, `check_out`, `adults`, `child`, `rooms`) VALUES
(1, 'S20034568712365', 'Hotel Kandurata', 'Kandy', '2024-05-10', '2024-05-12', 3, 3, 3),
(3, 'S20034568712365', 'Hotel Ocean', 'Nilaweli', '2024-05-11', '2024-05-18', 2, 4, 3),
(5, 'S20034568712365', 'Sigiri Stay', 'Sigirya', '2024-05-13', '2024-05-10', 3, 2, 4),
(6, 'S20034568712365', 'Hotel Viyamba', 'Sigirya', '2024-05-18', '2024-05-25', 3, 2, 4),
(8, '6512325515', 'Hotel Kandurata', 'Kandy', '2024-05-13', '2024-05-08', 1, 0, 1),
(9, '6512325515', 'Hotel Kandurata', 'Kandy', '2024-05-13', '2024-05-08', 1, 0, 1),
(10, '6512325515', 'Hotel Kandurata', 'Kandy', '2024-05-08', '2024-05-09', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `fid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` char(10) DEFAULT NULL,
  `review` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`fid`, `name`, `email`, `number`, `review`) VALUES
(1, 'kavindu', 'kavinduattanayaka@gmail.com', '778084753', 'kokokokokkokokkokkasdnajda'),
(2, 'kavindu', 'kavinduattanayaka@gmail.com', '778084753', 'KOkO molo MOkolo MOKOKlol'),
(3, 'garu muhandiram', 'muhandiram@gmail.com', '0772583629', 'dsajdnakjsaiadaidsmomoo');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `country`) VALUES
(1, 'Sri Lanka'),
(2, 'India'),
(3, 'USA'),
(4, 'Germany'),
(5, 'Africa'),
(6, 'Australia'),
(7, 'Newzealand'),
(8, 'Thailand');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(3, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `index` int(11) NOT NULL,
  `HID` char(6) NOT NULL,
  `HName` varchar(50) DEFAULT NULL,
  `HEmail` varchar(50) DEFAULT NULL,
  `Hcontact` varchar(11) DEFAULT NULL,
  `Hwebsite` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`index`, `HID`, `HName`, `HEmail`, `Hcontact`, `Hwebsite`) VALUES
(1, 'H00001', 'Hotel Kandurata', 'kandurata@example.com', '0456123698', 'www.examplgmail.com'),
(2, 'H00002', 'Hotel Araliya', 'araliya@example.com', '0456123698', 'www.examplgmail.com'),
(3, 'H00003', 'Sigiri Stay', 'sigiristay@example.com', '0456123698', 'www.examplgmail.com'),
(4, 'H00004', 'Hotel Viyamba', 'viyambaD@example.com', '0456123698', 'www.examplgmail.com'),
(5, 'H00005', 'Hotel Ocean', 'ocean@example.com', '0456123698', 'www.examplgmail.com'),
(6, 'H00006', 'Hotel Helios', 'helios@example.com', '0456123698', 'www.examplgmail.com'),
(7, 'H00007', 'HotelA', 'hotelA@example.com', '0456123698', 'www.examplgmail.com'),
(8, 'H00008', 'HotelB', 'hotelB@example.com', '0456123698', 'www.examplgmail.com'),
(9, 'H00009', 'HotelC', 'hotelC@example.com', '0456123698', 'www.examplgmail.com'),
(10, 'H00010', 'HotelD', 'hotelD@example.com', '0456123698', 'www.examplgmail.com'),
(11, 'H00011', 'HotelD', 'hotelD@example.com', '4561237870', 'www.hoteld.com');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int(11) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `h_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `passport`, `review`, `h_id`, `date`) VALUES
(1, '7998789', 'sssssssssssss', 4, '2024-05-07 00:50:18'),
(2, '789789987', 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 4, '2024-05-07 00:51:10'),
(4, '753265', 'hjhjhjvfcutdvysej', 7, '2024-05-07 02:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `staff_acc`
--

CREATE TABLE `staff_acc` (
  `acc_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `dep` varchar(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `num` varchar(20) NOT NULL,
  `hotel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_acc`
--

INSERT INTO `staff_acc` (`acc_id`, `fname`, `lname`, `pass`, `dep`, `mail`, `num`, `hotel`) VALUES
(1, 'popol', 'kupa', 'popol', 'Reception', 'popol@gmail.com', '0777897122', '-'),
(2, 'koko', 'molo', 'kupa', 'Admin', 'molo@gmail.com', '0123456789', '-'),
(3, 'hoho', 'lala', 'hotel', 'Exterenal H', 'lala@gmail.com', '456321787', 'Hotel Helios');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `address_line_01` varchar(50) NOT NULL,
  `address_line_02` varchar(50) NOT NULL,
  `address_line_03` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(10) NOT NULL,
  `joined_date` date NOT NULL,
  `verification_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`, `passport`, `mobile`, `gender_id`, `address_line_01`, `address_line_02`, `address_line_03`, `city`, `postal_code`, `country_id`, `status`, `joined_date`, `verification_code`) VALUES
(5, 'Kamal', 'Ekanayake', 'kkk@gmail.com', '22222', '52525252', '2352363253', 3, 'aaaa', 'aaaaa', 'aaaa', 'aaaa', 'aaa', 1, 0, '2024-05-06', ''),
(1, 'aaaaa', 'aaaaa', 'prabhaviperera85@gmail.com', '44444', '45645645', '0231526456', 1, 'aaaaaaaaAAAAA', 'aaaaa', 'aaaa', 'aaaa', 'aaa', 1, 0, '2024-05-06', '6638bc366b05d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`res_id`,`passport`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HID`),
  ADD UNIQUE KEY `idd` (`index`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `passport` (`passport`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `staff_acc`
--
ALTER TABLE `staff_acc`
  ADD PRIMARY KEY (`acc_id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `num` (`num`),
  ADD KEY `dep` (`dep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `passport` (`passport`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_acc`
--
ALTER TABLE `staff_acc`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hotel` (`index`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `country` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
