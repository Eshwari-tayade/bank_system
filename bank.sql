-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 06:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sr`, `name`, `email`, `message`) VALUES
(1, 'Gunjan Bhagat', 'gunjan@gmail.com', 'How to update my gmail?'),
(2, 'Shraddha Mahajan', 'shraddha@gmail.com', 'How to check my balance?'),
(3, 'Rudra Tayade', 'rudra@gmail.com', 'Thank you for your service!'),
(4, '', '', ''),
(5, 'Sanjana Gaikwad', 'sanjana@gmail.com', 'This is my new contact number:xxxxxxxx7701'),
(6, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sr` int(11) NOT NULL,
  `sender` varchar(10) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sr`, `sender`, `receiver`, `amount`, `status`) VALUES
(1, 'TECSC2162', 'TECSC2167', 200, 'succeed'),
(2, 'TECSC2164', 'TECSC2170', 0, 'succeed'),
(3, '', '', 0, 'failed'),
(4, '', '', 0, 'failed'),
(5, 'TECSC2171', 'TECSC2163', 90000, 'failed'),
(6, 'TECSC2162', 'TECSC2164', 100, 'succeed'),
(7, 'TECSC2162', 'TECSC2166',5000, 'succeed'),
(8, 'TECSC2168', 'TECSC2165', 200, 'succeed'),
(9, 'TECSC2165', 'TECSC2166', 500, 'succeed'),
(10, '', '', 0, 'failed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `accno` varchar(10) NOT NULL,
  `blc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr`, `name`, `email`, `accno`, `blc`) VALUES
(1, 'Gunjan Bhagat', 'gunjan@gmail.com', 'TECSC2162', 139000),
(2, 'Sudhanshu Wakode', 'sudhanshu@gmail.com', 'TECSC2163', 120000),
(3, 'Ayushi Wasankar', 'ayushi@gmail.com', 'TECSC2164', 64000),
(4, 'Shraddha Mahajan', 'shraddha@gmail.com', 'TECSC2165', 20000),
(5, 'Yash Rathod', 'yash@gmail.com', 'TECSC2166', 30500),
(6, 'Sanjana Gaikwad', 'sanjana@gmail.com', 'TECSC2167', 102000),
(7, 'Unnati Tripathi', 'unnati@gmail.com', 'TECSC2168', 92000),
(8, 'Ninad Khan', 'ninad@gmail.com', 'TECSC2169', 50000),
(9, 'Rudra Tayade', 'rudra@gmail.com', 'TECSC2170', 70800),
(10, 'Rohit Katole', 'rohit@gmail.com', 'TECSC2171', 90000);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
