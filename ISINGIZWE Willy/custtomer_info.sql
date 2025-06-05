-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 11:10 AM
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
-- Database: `custtomer_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(68) DEFAULT NULL,
  `location` varchar(89) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `product_code` int(11) DEFAULT NULL,
  `order_number` int(11) DEFAULT NULL,
  `quantity_ordered` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `location`, `telephone`, `product_code`, `order_number`, `quantity_ordered`) VALUES
(13, 'Joelitta', ' Burera', 787946808, 9, 8, 10),
(19, 'Joelitta', ' Burera', 787946808, 16, 8, 1),
(27, 'Angelique', ' Rubavu', 791180789, 9, 10, 1),
(28, 'Angelique', ' Rubavu', 791180789, 12, 10, 2),
(29, 'Angelique', ' Rubavu', 791180789, 15, 10, 2),
(30, 'Angelique', ' Rubavu', 791180789, 16, 10, 2),
(31, 'Joelitta', ' Burera', 791180789, 9, 11, 4),
(32, 'Joelitta', ' Burera', 791180789, 12, 11, 6),
(33, 'Joelitta', ' Burera', 791180789, 15, 11, 4),
(34, 'Joelitta', ' Burera', 791180789, 16, 11, 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_number`, `order_date`) VALUES
(1, '2024-12-12 11:32:19'),
(2, '2024-12-12 11:33:31'),
(3, '2024-12-12 11:38:53'),
(4, '2024-12-12 11:40:16'),
(5, '2024-12-12 11:48:08'),
(6, '2024-12-12 11:48:08'),
(7, '2024-12-12 11:56:22'),
(8, '2024-12-15 08:40:36'),
(9, '2024-12-15 08:43:06'),
(10, '2024-12-15 11:49:51'),
(11, '2024-12-16 09:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_quantity` int(11) NOT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `product_name`, `product_quantity`, `unit_price`, `total_price`) VALUES
(9, 'Imyumbati', 5, 20, 200),
(12, 'Umuceri', 0, 450, 7650),
(15, 'Amashu', 4, 200, 3000),
(16, 'Amashu', 6, 200, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user__id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user__id`, `user_name`, `user_password`) VALUES
(1, 'Joelitta', '123'),
(5, 'Simeon', '1234'),
(6, '', ''),
(8, 'happy', '123'),
(9, 'Irafaesha', '123'),
(10, 'Irafaesha', '123'),
(11, 'Mariceline', '12'),
(12, '', ''),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, '', ''),
(18, '', ''),
(19, 'Marceline', '12'),
(20, 'Jeaninne', '1234'),
(21, 'Yvone', '1'),
(22, 'Solange', '12345'),
(23, 'Joel', '123'),
(24, 'Joelita', '123'),
(25, 'irafasha', '`12345'),
(26, 'Angelique', 'ange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `order_number` (`order_number`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user__id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user__id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `product` (`product_code`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`order_number`) REFERENCES `orders` (`order_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
