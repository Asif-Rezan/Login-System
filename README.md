/* Here is the sql file. Import this in your database*/





-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 06:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(256) NOT NULL,
  `usersEmail` varchar(256) NOT NULL,
  `usersUid` varchar(256) NOT NULL,
  `usersPwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Shahriar Asif', 'asifrezan@gmail.com', 'rezan', '$2y$10$jVyOES/ddNrKKa1jcyr.u.7uc3THXleeb8mkYHYxnmc5WmiANMYWm'),
(2, 'Shahriar Asif', 'asifrezan@gmail.com', 'rezan', '$2y$10$ajPXV4NiF6OJCxIgSZzxM.7oU0yfcvYVgcrkbwuMuGfIZ5m9.oW0i'),
(3, 'Shahriar Asif', 'asifrezan2@gmail.com', 'eeee', '$2y$10$I0B76clFjWmgIQD/WMX6f.FPaAfWIdtlvCeyH79PPz4aJ1FxNRxCy'),
(4, 'Asif Rezan', 'shahriarasif753@gmail.com', 'asif', '$2y$10$j.l/h0VF2lQCxEZMBO8aQ.QJg2X86XZNIYwHsQ207aOuV1PHFQBYi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
