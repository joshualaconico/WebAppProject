-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 08:33 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `papasabaako`
--

-- --------------------------------------------------------

--
-- Table structure for table `gagalingankosafinals`
--

CREATE TABLE `gagalingankosafinals` (
  `user_id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `mname` varchar(500) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gagalingankosafinals`
--

INSERT INTO `gagalingankosafinals` (`user_id`, `username`, `password`, `email`, `fname`, `lname`, `mname`, `gender`, `status`) VALUES
(8, '', '7815696ecbf1c96e6894b779456d330e', 'asd@yahoo.com', 'asd', 'asd', 'asd', 'M', 0),
(9, 'asd', '7815696ecbf1c96e6894b779456d330e', 'asd@yahoo.com', 'asd', 'asd', 'asd', 'M', 0),
(10, 'asd', '7815696ecbf1c96e6894b779456d330e', 'asd@yahoo.com', 'asd', 'asd', 'asd', 'M', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gagalingankosafinals`
--
ALTER TABLE `gagalingankosafinals`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gagalingankosafinals`
--
ALTER TABLE `gagalingankosafinals`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
