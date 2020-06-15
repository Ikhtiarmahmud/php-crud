-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2020 at 03:43 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.29-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Division` varchar(255) NOT NULL,
  `Zipcode` int(11) NOT NULL,
  `Commnets` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `FirstName`, `LastName`, `Address`, `Email`, `City`, `Division`, `Zipcode`, `Commnets`, `Age`, `Salary`) VALUES
(2, 'Ikhtiar', 'Mitul', 'Dhaka', 'irmdmitul@gmail.com', 'Dhaka', 'Dhaka', 43, 'Nice Weather', 21, 100000),
(3, 'Kaspia ', 'Ameena', 'Chittagong', 'kashpia@gmail.com', 'Chittagong', 'Chittagong', 43, 'Covid-19 is dangerous virus. Stay Home', 23, 500000),
(6, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(7, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(8, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(9, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(10, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(11, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(12, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(13, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(15, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(17, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323),
(18, 'fsadf', 'fasd', 'fasdfa', 'irmdmitul@gmail.com', 'asdfasd', 'fasdfa', 43, 'sdfs', 23, 32323);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
