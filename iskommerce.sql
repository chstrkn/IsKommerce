-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 10:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iskommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `cart_item_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `user_id` int(6) UNSIGNED DEFAULT NULL,
  `product_id` int(6) UNSIGNED DEFAULT NULL,
  `quantity` int(2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `user_id` int(6) UNSIGNED DEFAULT NULL,
  `delivery_address` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(6) UNSIGNED DEFAULT NULL,
  `product_id` int(6) UNSIGNED DEFAULT NULL,
  `quantity` int(2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(6) UNSIGNED NOT NULL,
  `category_id` int(1) UNSIGNED DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `name`, `description`, `price`, `image`) VALUES
(1, 1, 'UPBEAT-University of the Philippines shirt 2018', 'This Unisex Maroon T-Shirt feels light-weight when worn and has a smooth texture. It quality of this shirt is 100% airlume combed and ring-spun cotton.\r\n        Size ranges from XS to 4XL (Male) and XS to L (Female).', 476.00, 'images/UPBEAT-University of the Philippines shirt 2018.jpg'),
(2, 1, 'UPBEAT-University of the Philippines-UP Baguio Shirt 2016', 'This Unisex Maroon UP Baguio T-Shirt is perfect for the students in UP Baguio. It is made of heavy cotton making it a basic staple any wardrobe. No side seams so it is itch-free on the underarms.\r\n        Size ranges from XS to 4XL (Male) and XS to L (Female).', 500.00, 'images/UPBEAT-University of the Philippines-UP Baguio Shirt 2016.jpg'),
(3, 1, 'UPBEAT-University of the Philippines-UP Iloilo Shirt 2016', 'This Unisex Maroon UP Iloilo T-Shirt is perfect for the students in UP Iloilo. It is made of heavy cotton making it a basic staple any wardrobe. No side seams so it is itch-free on the underarms.\r\n        Size ranges from XS to 4XL (Male) and XS to L (Female).', 500.00, 'images/UPBEAT-University of the Philippines-UP Iloilo Shirt 2016.jpg'),
(4, 1, 'UPBEAT-University of the Philippines-UP Open University Shirt', 'This Unisex Maroon UP Open Univ T-Shirt is a perfect top to pair with anything. It is made of heavy cotton making it a basic staple any wardrobe. No side seams so it is itch-free on the underarms.\r\n        Size ranges from XS to 4XL (Male) and XS to L (Female).', 500.00, 'images/UPBEAT-University of the Philippines-UP Open University Shirt.jpg'),
(5, 1, 'UPBEAT-University of the Philippines-UP shirt 2021 BLACK', 'This Unisex UP T-Shirt 2021 is something new to the eye. It has a solid black color which makes a classic fit when going out. It is made of heavy cotton making it a basic staple any wardrobe. No side seams so it is itch-free on the underarms.\r\n        Size ranges from XS to 4XL (Male) and XS to L (Female).', 479.00, 'images/UPBEAT-University of the Philippines-UP shirt 2021 BLACK.jpg'),
(6, 1, 'UPBEAT-University of the Philippines-UP shirt 2022 BLACK', 'This Unisex UP T-Shirt 2022 is something new to the eye. It has a solid black color which makes a classic fit when going out. It is made of heavy cotton making it a basic staple any wardrobe. No side seams so it is itch-free on the underarms.\r\n        Size ranges from XS to 4XL (Male) and XS to L (Female).', 479.00, 'images/UPBEAT-University of the Philippines-UP shirt 2022 BLACK.jpg'),
(7, 1, 'UPBEAT-University of the Philippines-UP shirt 2022 RED', 'This Red Unisex UP T-Shirt could be your everyday comfy tee, smooth wardrobe staple. It is made from 100% real cotton.\r\n        Size ranges from XS to 4XL (Male) and XS to L (Female).', 490.00, 'images/UPBEAT-University of the Philippines-UP shirt 2022 RED.jpg'),
(8, 1, 'UPBEAT-University of the Philippines-UP Visayas Shirt 2017', 'Affordable Unisex UP T-Shirt that has a unique design. It is made with cotton for comfort and breathability.\r\n        Size ranges from XS to 4XL (Male) and XS to L (Female).', 520.00, 'images/UPBEAT-University of the Philippines-UP Visayas Shirt 2017.jpg'),
(9, 2, 'UPBEAT-University of the Philippines-Hoodie Black', 'Affordable Hoodie that has a perfect color combination design. It is made with cotton to provide warmth and comfort. It also has a pocket which is very convenient.\r\n        Size ranges from XS to 4XL (Male) and M to L (Female).', 448.00, 'images/UPBEAT-University of the Philippines-Hoodie Black.jpg'),
(10, 2, 'UPBEAT-University of the Philippines-Maroons Hoodie (Gray)', 'Affordable Hoodie that has a perfect color combination design. The fabric is thick and soft making it perfect for sweater weather.\r\n        Size ranges from XS to 4XL (Male) and M to L (Female).', 1430.00, 'images/UPBEAT-University of the Philippines-Maroons Hoodie (Gray).jpg'),
(11, 2, 'UPBEAT-University of the Philippines-UP Hoodie 2021 Gray', 'Affordable Hoodie with a minimalist design. The fabric is thick and soft making it perfect for sweater weather.\r\n        Sizes range from XS to 4XL (Male) and M to L (Female).', 1500.00, 'images/UPBEAT-University of the Philippines-UP Hoodie 2021 Gray.jpg'),
(12, 3, 'UPBEAT-University of the Philippines-Varsity Jacket 2018', 'This UP Varsity Jacket is stylish but a classic one. It has pockets and a color design that is a head-turner. It has a zipper on the front part and has good material quality.\r\n     It also provides comfort and freedom of movement when worn.\r\n        Sizes range from XS to 4XL (Male) and M to L (Female).', 1250.00, 'images/UPBEAT-University of the Philippines-Varsity Jacket 2018.jpg'),
(13, 4, 'UPBEAT-University of the Philippines-Embroidered Lanyard', 'A classic UP Lanyard which features the name of the university and the image of the oblation.', 130.00, 'images/UPBEAT-University of the Philippines-Embroidered Lanyard.jpg'),
(14, 4, 'UPBEAT-University of the Philippines-Honor and Excellence Lanyard (New)', 'A UP Lanyard which features the Honor and Excellence saying.', 150.00, 'images/UPBEAT-University of the Philippines-Honor and Excellence Lanyard (New).jpg'),
(15, 4, 'UPBEAT-University of the Philippines-Matapang Matalino Lanyard', 'A UP Lanyard that has the words printed as Matapang Matalino.', 150.00, 'images/UPBEAT-University of the Philippines-Matapang Matalino Lanyard.jpg'),
(16, 4, 'UPBEAT-University of the Philippines-Sablay Lanyard', 'A UP Lanyard which has a minimalist design. It has the word UP printed to it together with a baybayin writing.', 150.00, 'images/UPBEAT-University of the Philippines-Sablay Lanyard.jpg'),
(17, 4, 'UPBEAT-University of the Philippines-UP Black Lanyard', 'A Black UP Lanyard which features the Honor and Excellence saying.', 150.00, 'images/UPBEAT-University of the Philippines-UP Black Lanyard.jpg'),
(18, 5, 'UPBEAT-University of the Philippines-UAAP Championship Cap (Black)', 'Perfect accessory to wear when watching the UAAP Championship. It has a curved visor and comes in a black color with an embroidered yellowish gold print. ', 600.00, 'images/UPBEAT-University of the Philippines-UAAP Championship Cap (Black).jpg'),
(19, 5, 'UPBEAT-University of the Philippines-UAAP Championship Cap (Maroon)', 'Perfect accessory to wear when watching the UAAP Championship. It has a curved visor and comes in a maroon color with an embroidered yellowish gold print.', 600.00, 'images/UPBEAT-University of the Philippines-UAAP Championship Cap (Maroon).jpg'),
(20, 5, 'UPBEAT-University of the Philippines-UP Baseball cap 1908 2019', 'Faded Red Baseball Cap with an embroidered classic UP design. It has a curved visor and a metal buckle adjustment at the back.', 500.00, 'images/UPBEAT-University of the Philippines-UP Baseball cap 1908 2019.jpg'),
(21, 5, 'UPBEAT-University of the Philippines-UP Baseball cap 2019', 'Red Baseball Cap with an embroidered UP design. It has a curved visor and a metal buckle adjustment at the back ', 500.00, 'images/UPBEAT-University of the Philippines-UP Baseball cap 2019.jpg'),
(22, 6, 'UPBEAT University of the Philippines Sablay ng Tagumpay (embroidered)', 'CONGRATS! This is a Hand-Woven Sablay with embroidered Baybayin. It is used for commencement exercises.\r\n        Sizes range from S, M and L.', 1700.00, 'images/UPBEAT University of the Philippines Sablay ng Tagumpay (embroidered).jpg'),
(23, 6, 'UPBEAT-University of the Philippines-Sablay ng Tagumpay (Full Habi)', 'CONGRATS! This is a Hand-Woven Sablay used for commencement exercises.\r\n        Sizes range from S, M and L.', 1500.00, 'images/UPBEAT-University of the Philippines-Sablay ng Tagumpay (Full Habi).jpg'),
(24, 7, 'UPBEAT-Pink Collection-KIDZ-Iskolar Para sa Bayan-FUCHSIA (Kids Edition)', 'Cute Fuschia Isko T-Shirt for the kiddies. Made from cotton so it has a smooth texture to avoid rashes. It has a silk-screen print.\r\n        Sizes range from infant size to XL.', 380.00, 'images/UPBEAT-Pink Collection-KIDZ-Iskolar Para sa Bayan-FUCHSIA (Kids Edition).jpg'),
(25, 7, 'UPBEAT-University of the Philippines-KIDZ-UP shirt 2021 (Kids edition)', 'Cute Maroon UP T-Shirt for the kiddies. Made from cotton so it has a smooth texture to avoid rashes. It has a silk-screen print.\r\n        Sizes range from infant size to XL.', 380.00, 'images/UPBEAT-University of the Philippines-KIDZ-UP shirt 2021 (Kids edition).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(1) UNSIGNED NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`) VALUES
(1, 'T-Shirts'),
(2, 'Hoodies'),
(3, 'Jackets'),
(4, 'Lanyards'),
(5, 'Cap'),
(6, 'Sablay'),
(7, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cart_item_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
