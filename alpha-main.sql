-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 06:36 AM
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
-- Database: `alpha`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`id`, `product_name`, `user`) VALUES
(43, 'NIKE AIRMAX 99', 'mamac123'),
(44, 'NIKE AIRMAX 99', 'mamac123'),
(45, 'NIKE AIRMAX 99', 'mamac123'),
(76, 'ADIDAS TRAE YOUNG', 'admin'),
(90, 'GIANT HANDLEBAR', 'test'),
(92, 'GIANT JACKET', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `cod_order`
--

CREATE TABLE `cod_order` (
  `prod_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `category` varchar(50) DEFAULT NULL,
  `zipcode` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cod_order`
--

INSERT INTO `cod_order` (`prod_id`, `firstname`, `lastname`, `address`, `phone_number`, `landmark`, `product_name`, `qty`, `date`, `category`, `zipcode`, `user`) VALUES
(42, 'Christian', 'Tanedo', 'Tisa Cebu City', '09972166644', 'Swimming pool - Tisa', 'GIANT HOODIE', 1, '2022-06-10', 'cod', '6000', 'kaelzamora');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `username`, `product_name`, `product_id`, `comment`, `date`) VALUES
(22, 'Roger', 'NIKE AIRFORCE', NULL, 'Nice quality, will order again!', '2022-05-06 12:39:59'),
(23, 'kaelzamora', 'NIKE AIRFORCE', NULL, 'Comment Test', '2022-05-06 14:31:35'),
(24, 'kaelzamora', 'NIKE AIRFORCE', NULL, 'This is a test comment!', '2022-05-07 13:19:46'),
(25, 'kaelzamora', 'GIANT HANDLEBAR', NULL, 'Comment something!', '2022-05-07 13:20:19'),
(26, 'kaelzamora', 'NIKE AIRFORCE', NULL, 'Test comment!', '2022-05-07 13:32:39'),
(27, 'kaelzamora', 'GIANT WOMENS ARMWARMER', NULL, 'Comment here', '2022-05-07 13:33:35'),
(28, 'kaelzamora', 'NIKE AIRFORCE', NULL, 'INTPROG', '2022-05-07 13:43:48'),
(29, 'kaelzamora', 'GIANT KICKSTAND', NULL, 'Add comment!!!', '2022-05-07 13:44:36'),
(30, 'kaelzamora', 'GIANT BASELAYER', NULL, 'Wow Sulit yung item', '2022-06-08 14:56:30'),
(67, 'kaelzamora', 'NIKE AIRFORCE', NULL, 'test', '2022-06-09 18:49:11'),
(68, 'kaelzamora', 'GIANT BASELAYER', NULL, 'Nice quality', '2022-06-10 09:34:50'),
(69, 'kaelzamora', 'GIANT BASELAYER', NULL, 'Nice quality', '2022-06-10 09:35:27'),
(70, 'kaelzamora', 'GIANT BASELAYER', NULL, 'Nice quality', '2022-06-10 09:35:32'),
(71, 'kaelzamora', 'GIANT BASELAYER', NULL, 'Nice quality', '2022-06-10 09:35:42'),
(72, 'kaelzamora', 'GIANT BASELAYER', NULL, 'Nice quality', '2022-06-10 09:36:06'),
(73, 'kaelzamora', 'GIANT BASELAYER', NULL, 'Nice quality', '2022-06-10 09:36:12'),
(74, 'kaelzamora', 'GIANT BASELAYER', NULL, 'Nice quality', '2022-06-10 09:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_tag` varchar(50) NOT NULL,
  `product_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_img`, `product_name`, `product_price`, `product_tag`, `product_category`) VALUES
(5001, 'GIANT-HANDLEBAR.jpg', 'GIANT HANDLEBAR', 1500, 'Equipments', 'Bicycle'),
(5002, 'GIANT-KICKSTAND.jpg', 'GIANT KICKSTAND', 1050, 'Equipments', 'Bicycle'),
(5003, 'GIANT-MENS-BASELAYER.jpg', 'GIANT BASELAYER', 880, 'Equipments', 'Bicycle'),
(5004, 'GIANT-MENS-BIBSHORT.jpg', 'GIANT BIB SHORT', 1200, 'Men', 'Bicycle'),
(5005, 'GIANT-MENS-JERSEY.jpg', 'GIANT JERSEY', 1800, 'Men', 'Bicycle'),
(5006, 'GIANT-MENS-SHORT.jpg', 'GIANT SHORT', 900, 'Men', 'Bicycle'),
(5007, 'GIANT-MENS-TEES.jpg', 'GIANT GRAPHIC TEE', 1200, 'Men', 'Bicycle'),
(5008, 'GIANT-PEDALS.jpg', 'GIANT PEDALS', 650, 'Equipments', 'Bicycle'),
(5009, 'GIANT-SADDLE.jpg', 'GIANT SADDLE', 1200, 'Equipments', 'Bicycle'),
(5010, 'GIANT-TUBES.jpg', 'GIANT TUBES', 1200, 'Equipments', 'Bicycle'),
(5011, 'GIANT-WOMENS-ARMWARMER.jpg', 'GIANT WOMENS ARMWARMER', 1500, 'Women', 'Bicycle'),
(5012, 'GIANT-WOMENS-HOODIE.jpg', 'GIANT HOODIE', 2300, 'Women', 'Bicycle'),
(5013, 'GIANT-WOMENS-JACKET.jpg', 'GIANT JACKET', 2300, 'Women', 'Bicycle'),
(5014, 'GIANT-WOMENS-SHOE-COVER.jpg', 'GIANT SHOE COVER', 2300, 'Women', 'Bicycle'),
(5015, 'GIANT-WOMENS-SOCKS.jpg', 'GIANT SOCKS WOMEN', 650, 'Women', 'Bicycle'),
(6000, 'NIKE-AIRFORCE1.png', 'NIKE AIRFORCE', 7650, 'Men', 'Basketball'),
(6001, 'NIKE-AIRMAX99.png', 'NIKE AIRMAX 99', 5650, 'Men', 'Basketball'),
(6002, 'ADIDAS-YOUNG.png', 'ADIDAS TRAE YOUNG', 9990, 'Men', 'Basketball'),
(6003, 'NIKE-KOBE1.png', 'NIKE KOBE 1', 7500, 'Men', 'Basketball'),
(6004, 'REBOOK-11.webp', 'REBOOK GLAZE', 6000, 'Men', 'Basketball'),
(6005, 'NIKE-AIRFORCE10.webp', 'NIKE AIRFORCE 1 7', 5600, 'Women', 'Basketball'),
(6006, 'NIKE-AIRMAX90.webp', 'NIKE AIRMAX 90', 7500, 'Women', 'Basketball'),
(6007, 'NIKE-AIRMAX270.webp', 'NIKE AIRMAX 270', 8200, 'Women', 'Basketball'),
(6008, 'NIKE-AIRMAX2022.webp', 'NIKE AIRMAX 2022', 8300, 'Women', 'Basketball');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `age`, `address`, `phone_number`, `email`, `username`, `password`, `user_id`) VALUES
('cj', 'Tanedo', 21, 'Tisa Rivaridge', '09972166644', 'tanedochristian1@gmail.com', 'admin', 'cabinetsays17', 7),
('Roger', 'Roger', 16, 'Tisa Cebu', '09994535445', 'rogerintong@gmail.com', 'Roger', '@cabinetsays17', 25),
('Christian', 'Tanedo', 21, 'Tisa Cebu City', '09972166644', 'tanedo1@gmail.com', 'kaelzamora', '@test123', 26),
('Test', 'Test', 25, 'Test', 'Test', 'test@gmail.com', 'test', '@Cabinetsays17', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cod_order`
--
ALTER TABLE `cod_order`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `cod_order`
--
ALTER TABLE `cod_order`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
