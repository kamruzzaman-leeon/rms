-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Full Project Completed By Kamruzzaman Leeon
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- Full Project Completed By Kamruzzaman Leeon
--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Full Project Completed By Kamruzzaman Leeon
--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `email`, `mobile`, `address`, `password`, `trn_date`) VALUES
(1, 'leeon', 'leeon@gmail.com', 11111111, 'fatullah,narayangonj', '1234', '2020-05-02 10:27:00'),
(2, 'alam', 'alam@gmail.com', 454, 'ullah bazar, Gaibandha', '1234', '2020-05-03 18:26:55'),
(3, 'sheikh_sal', 'sheikhzaman2017@gmail.com', 3443545, 'Dhaka,Bangladesh', '123456', '2020-05-05 10:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(255) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `foodtype` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `foodname`, `foodtype`, `description`, `price`, `availability`) VALUES
(19, 'pizza', 'fastfood', 'yummy!', 600, 'YES'),
(24, 'chicken fry (4 pcs)', 'fastfood', 'try our best food', 360, 'YES'),
(26, 'Handi Dum Biryani with Mutton (1:2)', 'Biryani ', 'One of the best food in our restaurants.', 575, 'YES'),
(27, 'Handi Dum Biryani with Chicken (1:2)', 'Biryani ', 'One of the best Biryani in Dhaka city.', 490, 'YES'),
(28, 'Mixed Fried Rice (Family Pack)', 'Rice', 'Best yummy pack', 495, 'YES'),
(29, 'Chicken Chilli Dry', 'Chicken ', 'One of the best chicken item ', 340, 'YES'),
(30, 'Chicken Red Chilli ', 'Chicken ', 'One of the best chicken item ', 380, 'NO'),
(31, 'Thai Salad', 'Salad', 'Very healthy Food ', 200, 'YES'),
(32, 'Fish Red Chilli dry', 'Fish & Sea Food ', 'Very healthy Food ', 600, 'YES'),
(33, 'Coffee Toffee ', 'Coffee ', 'One of the best coffee item in Dhaka city', 160, 'YES');

-- --------------------------------------------------------
-- Full Project Completed By Kamruzzaman Leeon
--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`id`, `food_id`, `price`, `quantity`, `orders_id`, `u_id`) VALUES
(9, 19, 600, 1, 6, 1),
(11, 19, 600, 1, 8, 1),
(13, 19, 600, 5, 9, 1),
(15, 19, 600, 1, 10, 1),
(17, 19, 600, 1, 15, 1),
(19, 19, 600, 2, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderstable`
--

CREATE TABLE `orderstable` (
  `id` int(11) NOT NULL,
  `total_price` float DEFAULT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderstable`
--

INSERT INTO `orderstable` (`id`, `total_price`, `u_id`) VALUES
(6, 620, 1),
(8, 620, 1),
(9, 3040, 1),
(10, 600, 1),
(11, 0, 1),
(12, 0, 1),
(13, 20, 1),
(14, 0, 1),
(15, 600, 1),
(16, 1220, 1);

-- --------------------------------------------------------
-- Full Project Completed By Kamruzzaman Leeon
--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(255) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `person` int(255) NOT NULL,
  `slot` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `customer_id`, `date`, `person`, `slot`, `status`) VALUES
(64, 1, '2020-05-13', 5, '12:00pm-1:00pm', 0),
(65, 1, '2020-05-18', 4, '12:00pm-1:00pm', 1),
(66, 1, '2020-07-18', 14, '1:30pm-2:30pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `salesman_id` int(11) NOT NULL,
  `salesman_name` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`salesman_id`, `salesman_name`, `mobile`) VALUES
(2, 'partho', '01524777'),
(0, 'shawon', '0191777'),
(0, 'prithom', '789456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `orders_id` (`orders_id`);

--
-- Indexes for table `orderstable`
--
ALTER TABLE `orderstable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coustomer_id` (`u_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `customer_id_fk` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orderstable`
--
ALTER TABLE `orderstable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--
-- Full Project Completed By Kamruzzaman Leeon
--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `food_id` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_id` FOREIGN KEY (`orders_id`) REFERENCES `orderstable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderstable`
--
ALTER TABLE `orderstable`
  ADD CONSTRAINT `coustomer_id` FOREIGN KEY (`u_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `customer_id_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE;
COMMIT;
-- Full Project Completed By Kamruzzaman Leeon
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
