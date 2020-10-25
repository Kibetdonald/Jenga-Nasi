-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 06:04 PM
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
-- Database: `jengaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `phone`, `user_email`, `user_password`) VALUES
(1, 'Scofield', '0703959145', 'Scofield@gmail.com', '4b0d2b146577fda6c148eb6100c12b3c');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(1, '::1', 0),
(4, '::1', 0),
(11, '::1', 0),
(30, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Flooring'),
(2, 'Walling'),
(3, 'Plastering'),
(4, 'Finishing'),
(5, 'Roofing'),
(6, 'Plumbing'),
(7, 'Fittings'),
(8, 'Windows'),
(9, 'Doors'),
(10, 'Ceiling'),
(11, 'Tiling'),
(12, 'Electricals'),
(13, 'Painting');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`FirstName`, `LastName`, `Email`, `Message`) VALUES
('Harriet', 'nasimiyu', 'Harrietsoita9@gmail.com', 'How can i order hammer'),
('Dr Kendi', 'Muchungi', 'kmuchungi@anu.ac.ke', 'How can i order cement');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `Email_id` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `station` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`firstname`, `lastname`, `Email_id`, `phonenumber`, `address`, `station`) VALUES
('sdcsdc', 'csavc', 'johndoe@gmail.com', '007225555', 'sdvdsvd', 'Nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `user_id`, `due_amount`, `invoice_no`, `product_id`, `qty`, `order_date`, `order_status`) VALUES
(1, 42, 600, 925799359, '39', 10, '2020-07-02', 'pending'),
(3, 11, 12000, 1623003220, '35', 10, '2020-06-16', 'pending'),
(5, 77, 2000, 1392254653, '20', 10, '2020-08-03', 'pending'),
(6, 0, 600, 1392254653, '39', 10, '2020-09-16', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(20) NOT NULL,
  `delivery_status` varchar(20) NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(10) NOT NULL,
  `FirstName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `County` varchar(20) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `contactNo` varchar(11) DEFAULT NULL,
  `ExpirationDate` varchar(20) DEFAULT NULL,
  `Address` int(10) NOT NULL,
  `Cardname` varchar(30) NOT NULL,
  `Cardnumber` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `FirstName`, `LastName`, `Email`, `County`, `Town`, `contactNo`, `ExpirationDate`, `Address`, `Cardname`, `Cardnumber`) VALUES
(1005, 'POZZ', 'mbuvi', '16g01abt01@anu.ac.ke', 'Makueni', 'Matuu', '987', '01/2017', 78, '', '0'),
(1006, 'fff', 'dgg', '16g01ab001@anu.ac.ke', 'Tana', 'Eldoret', '45', '02/2017', 6, '', '0'),
(1007, 'mbuvi', 'pat', 'pat1@anu.ac.ke', 'Nakuru', 'Malindi', '3455', '09/2018', 98, '', '0'),
(1008, 'pffd', 'ddf', '16g01abt1@anu.ac.ke', 'Nakuru', 'Malindi', '2543', '02/2017', 9, 'jhdy', '0'),
(1009, 'paul', 'mbuvi', '16g01abt001@anu.ac.ke', 'Nakuru', 'Malindi', '88877', 'Month/Year', 67, 'jhdy', '776'),
(1010, 'tom', 'joy', '16g01ab@anu.ac.ke', 'Kisumu', 'Rongai', '095743', '12/2018', 8, 'tom joy', '1234557789'),
(1011, 'Donald', 'Kibet', 'kibetdonald97@gmail.com', 'Nakuru', 'Malindi', '0703959145', '02/2021', 0, 'visa', '0'),
(1012, 'Truth', 'Kibet', 'donald97@gmail.com', 'Nakuru', 'Malindi', '070395914', '08/2023', 123, 'visa', ''),
(1013, 'Shiku', 'Doreen', 'shikudoreen@gmail.com', 'Uasin Gishu', 'Eldoret', '0790369852', '02/2025', 89999, 'Mpesa', ''),
(1014, 'Shiku', 'Doreen', 'shikudoreen@gmail.com', 'Nakuru', 'Malindi', '0790369852', '02/2025', 455, 'Mpesa', ''),
(1015, 'Paulyne', 'Alayne', 'alayne@gmail.com', 'Mombasa', 'Malindi', '071458963', '04/2025', 5555, 'Smart', '');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `user_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(1, 0, 925799359, '39', 10, 'pending'),
(2, 0, 602746362, '35', 10, 'pending'),
(3, 0, 1623003220, '35', 10, 'pending'),
(4, 0, 1742819358, '20', 10, 'pending'),
(5, 0, 1392254653, '20', 10, 'pending'),
(6, 0, 1392254653, '39', 10, 'pending'),
(7, 0, 1522234524, '39', 11, 'pending'),
(8, 0, 768380696, '80', 500, 'pending'),
(9, 0, 1917548287, '11', 0, 'pending'),
(10, 0, 1917548287, '14', 10, 'pending'),
(11, 0, 1917548287, '25', 0, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prd_id` int(100) NOT NULL,
  `prd_title` varchar(255) NOT NULL,
  `prd_price` int(100) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_img` text NOT NULL,
  `prd_keyword` text NOT NULL,
  `prd_quantity` int(100) NOT NULL,
  `prd_cat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `prd_title`, `prd_price`, `prd_desc`, `prd_img`, `prd_keyword`, `prd_quantity`, `prd_cat`) VALUES
(1, 'Wood', 900, 'Wood', 'wood.jpg', 'Wood', 29, 5),
(2, 'Paint', 550, 'Its quality paint', 'paint.jpeg', 'Paint', 1200, 3),
(4, 'Brick', 50, 'Brick', 'brick.jpg', 'brick', 0, 2),
(11, 'PVC pipes', 500, 'PVC pipes', 'PVC pipes.jpeg', 'pipe', 33, 6),
(14, 'Glass', 300, 'Its glass', 'glass.jpg', 'glass', 10, 1),
(22, 'Hammer', 700, 'Hammer', 'hammer.jpeg', 'hammer', 26, 0),
(25, 'Sinktap', 500, 'Its a sink tap sprayer', 'sprayer.jpeg', 'Sink tap', 150, 6),
(29, 'Tiles', 7700, 'Tiles', 'image28.png', 'Tiles', 34, 2),
(30, 'Cement', 600, 'Cement', 'cement.jpg', 'cement', 45, 3),
(31, 'ironsheet', 700, 'ironsheet', 'mabati.jpeg', 'ironsheet', 24, 5),
(39, 'Ballast', 60, 'Its an interlocking block that consumes less cement', 'image1.jpg', 'Ballast', 35000, 2),
(45, 'reinforcement', 800, 'reinforcement', 'reinforcement.jpg', 'reinforcement', 7, 6),
(80, 'Bush stones', 40, 'They are squared block stones resistant to force and consumes less cement', 'stone1.jpg', 'bush stones', 60000, 2),
(81, 'Sand', 200, 'Best ad rough sand...Good for construction', 'sand.jpg', 'Sand', 50000, 1),
(250, 'Toilet sink', 1800, 'Its the best up to date toilet sink ever in the market', 'toilet sink.jpeg', 'toilet sink', 420, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_first` text NOT NULL,
  `user_last` text NOT NULL,
  `user_password` varchar(205) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_email` varchar(205) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_first`, `user_last`, `user_password`, `created_at`, `user_email`) VALUES
(18, 'Don', 'Don', 'Kibet', 'd23949a122499d1209be9a00deec30b5', '2020-09-20 17:19:41', 'don@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`Email_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`user_id`),
  ADD KEY `product_id` (`product_id`(3072));

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
