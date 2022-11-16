-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2022 at 04:47 AM
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
-- Database: `petCare`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `eventName` varchar(20) NOT NULL,
  `eventDate` date NOT NULL,
  `eventTime` time NOT NULL,
  `eventDescription` varchar(100) NOT NULL,
  `eventVenue` varchar(50) NOT NULL,
  `noOfParticipants` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `userID`, `eventName`, `eventDate`, `eventTime`, `eventDescription`, `eventVenue`, `noOfParticipants`) VALUES
(1, 1, 'huddle', '2022-11-15', '15:44:04', 'hello im dumb', 'bangalore', 18),
(1, 4, 'Huddle', '2022-11-16', '23:00:00', 'vvhghfyf', 'ecity', 0),
(2, 1, 'cats', '2022-11-23', '03:23:34', 'cnkenvknevni', 'dijenifni3r', 25),
(6, 1, 'wdfwfef', '2022-11-18', '21:53:00', 'fergth56h5', 'nkenvenrgie', 0),
(8, 1, 'negk4nk4', '2022-11-18', '21:54:00', 'dfrgt4ge', 'Bangalore', 0),
(8, 1, 'wdfwfef', '2022-11-18', '21:54:00', 'jhkhh', 'nkenvenrgie', 0),
(9, 1, 'wdfwfef', '2022-11-18', '21:59:00', 'jhkhh', 'Bangalore', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `heading`, `discription`, `date`) VALUES
(1, 'hi', 'hi', '2022-11-15'),
(77, 'hi', 'hi', '2022-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notifID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `petType` enum('Cat','Dog','Fish') NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petDob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petID`, `userID`, `petType`, `petName`, `petDob`) VALUES
(2, 1, 'Cat', 'bark', '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todoDate` date NOT NULL,
  `todoTime` time NOT NULL,
  `userID` int(11) NOT NULL,
  `task` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todoDate`, `todoTime`, `userID`, `task`) VALUES
('2022-11-17', '20:20:00', 1, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`) VALUES
(1, 'anupama'),
(2, 'namrata1'),
(3, 'pooja'),
(4, 'ria'),
(8, 'anupama1'),
(9, 'anupama1'),
(10, 'anupama1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `email`, `phonenumber`, `password`) VALUES
('anupama', 'anupamakpatil123@gmail.com', '6366466565', 'anupama'),
('anupama1', 'anupamakpatil123@gmail.com', '6366466565', 'anupama1'),
('namrata1', 'namrata@gmail.com', '9876565678', 'namrata1'),
('pooja', 'pooja@gmail.com', '9876564656', 'pooja'),
('ria', 'ria@gmail.com', '9876567487', 'ria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`,`eventName`,`userID`) USING BTREE,
  ADD KEY `userID` (`userID`) USING BTREE;

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notifID`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petID`,`userID`),
  ADD KEY `userID` (`userID`) USING BTREE;

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todoDate`,`todoTime`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`firstname`) USING BTREE,
  ADD UNIQUE KEY `firstname` (`firstname`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notifID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `PET_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `todo_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
