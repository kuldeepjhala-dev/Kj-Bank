-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 11:48 AM
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
-- Database: `kj-bank-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `accountno` int(10) NOT NULL,
  `currentbalance` int(100) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `accountno`, `currentbalance`, `email`) VALUES
(1, 'customer1', 1234567890, 1000, 'customer@gmail.com'),
(2, 'customer2', 1347856943, 2000, 'customer2@gmail.com'),
(3, 'customer3', 1347858623, 3000, 'customer3@gmail.com'),
(4, 'customer4', 1807897623, 4000, 'customer4@gmail.com'),
(5, 'customer5', 1107866623, 5000, 'customer5@gmail.com'),
(6, 'customer6', 1300556623, 6000, 'customer6@gmail.com'),
(7, 'customer7', 1306468463, 7000, 'customer7@gmail.com'),
(8, 'customer8', 1306472193, 8000, 'customer8@gmail.com'),
(9, 'customer9', 1306247100, 1000, 'customer9@gmail.com'),
(10, 'customer10', 1307777100, 10000, 'customer10@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` text NOT NULL,
  `reciever` text NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `reciever`, `amount`) VALUES
('customer10', 'customer9', 1000),
('customer9', 'customer10', 1000),
('customer9', 'customer10', 1000),
('customer10', 'customer9', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
