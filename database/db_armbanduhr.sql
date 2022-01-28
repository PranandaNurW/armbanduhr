-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 03:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armbanduhr`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` float NOT NULL,
  `item_type` varchar(5) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_type`, `item_image`) VALUES
(1, 'Tag Heuer', 'Formula 1', 13000000, 'Men', './assets/product/men1.png'),
(2, 'Tudor', 'Geneve', 15000000, 'Men', './assets/product/men2.png'),
(3, 'Cartier', 'Classic 90', 16000000, 'Men', './assets/product/men3.png'),
(4, 'Hamilton', 'Retro', 17000000, 'Men', './assets/product/men4.png'),
(5, 'Patek Philippe', 'Ocean', 18000000, 'Men', './assets/product/men5.png'),
(6, 'Omega', 'Speedmaster', 19000000, 'Men', './assets/product/men6.png'),
(7, 'Rolex', 'Sea-Dweller', 15000000, 'Men', './assets/product/men7.png'),
(8, 'Tag Heuer', 'Carrera', 12000000, 'Women', './assets/product/women1.png'),
(9, 'Cartier', 'Vintage', 12000000, 'Women', './assets/product/women2.png'),
(10, 'Cartier', 'Constellation', 19000000, 'Women', './assets/product/women3.png'),
(11, 'Jaeger-LeCoultre', 'Classic P77', 18000000, 'Women', './assets/product/women4.png'),
(12, 'Tudor', 'Prince Oysterdate', 16000000, 'Women', './assets/product/women5.png'),
(13, 'Rolex', 'Oyster Perpetual', 11000000, 'Women', './assets/product/women6.png'),
(14, 'Cartier', 'Classic 80', 12000000, 'Women', './assets/product/women7.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_specs`
--

CREATE TABLE `product_specs` (
  `product_id` int(11) NOT NULL,
  `thick` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `strapw` varchar(100) NOT NULL,
  `strapc` varchar(100) NOT NULL,
  `water` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_specs`
--

INSERT INTO `product_specs` (`product_id`, `thick`, `color`, `strapw`, `strapc`, `water`) VALUES
(1, '7mm', 'Black Pearl', '20mm', 'Metal White', 'Up to 5 ATM'),
(2, '9mm', 'Shiny Black', '22mm', 'Black Doff', 'Up to 20 ATM'),
(3, '9mm', 'White Ivory', '20mm', 'Brown Hickory', 'Up to 5 ATM'),
(4, '8mm', 'White Eggshell', '20mm', 'Black Ebony', 'Up to 5 ATM'),
(5, '8mm', 'White Daisy', '20mm', 'Blue Denim', 'Up to 10 ATM'),
(6, '10mm', 'Black Onyx', '24mm', 'Metal Gray', 'Up to 20 ATM'),
(7, '12mm', 'Black Obsidian', '22mm', 'Metal White', 'Up to 30 ATM'),
(8, '7mm', 'Shiny Black Grease', '18mm', 'Black Jade', 'Up to 10 ATM'),
(9, '9mm', 'White Pearl', '20mm', 'Pink Salmon', 'Up to 5 ATM'),
(10, '10mm', 'White Chiffon', '22mm', 'Pink Peach', 'Up to 10 ATM'),
(11, '7mm', 'White Shell', '18mm', 'Pink Crepe', 'Up to 5 ATM'),
(12, '7mm', 'Tan Macaronn', '18mm', 'Metal Gold', 'Up to 3 ATM'),
(13, '8mm', 'Black Jade', '20mm', 'Metal Bronze', 'Up to 10 ATM'),
(14, '7mm', 'White Alabaster', '18mm', 'Brown Hickory', 'Up to 5 ATM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'nanda', 'halo@gmail.com', '$2y$10$1RNkE0rFcJs/syEeldFCie5wPlu56wzstdrWH26ymVrsJAkxczSbK'),
(2, 'gavin', 'gavin@gmail.com', '$2y$10$wyA8v5z/rk1xKT41fdv0N.37mjkCAVq9mVertZY5GtF8xvsYAr7E.'),
(3, 'bangjago', 'bangjago@gmail.com', '$2y$10$IGwKLMLVWkLkxLS0XWqc.uFRJ/2j6YKBlo903eBkU.R8UwN6mOe5C'),
(4, 'masandrew', 'haloo@gmail.com', '$2y$10$U5TorzM0L1jDiRb5o93UP.4GeJhvea1ZY/FxtgXklTrRjlMJcX24.'),
(5, 'prima', 'prima@gmail.com', '$2y$10$ldqZC74IXGRh67RqqPTg3O51H5ohUmp4K6hLqWltYI10JV9.m0pDK'),
(6, 'dava', 'dava@gmail.com', '$2y$10$jVnWE1hnHq9tHE/QgURLh.uR5pWqgpv4nvIdxBu9snMmjwASroHC.'),
(7, 'prananda', 'prananda@gmail.com', '$2y$10$QRA/.2nfOgCO5s519u2vM.BlMHx3zJTgQVPsCeMeOWkVW9lcz5vWu'),
(8, 'londi', 'londin@gmail.com', '$2y$10$fiRAQO7Ed4GalwgXC3t.1ezYQ7VPQial/zO4tBetoL9Z7L0GIe6pO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `product_specs`
--
ALTER TABLE `product_specs`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_specs`
--
ALTER TABLE `product_specs`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
