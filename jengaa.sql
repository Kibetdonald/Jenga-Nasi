-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2020 at 07:55 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
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
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `delivery_id` int(20) NOT NULL,
  `delivery_status` varchar(20) NOT NULL,
  `delivery_date` date NOT NULL,
  PRIMARY KEY (`delivery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `uploaded` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Order_id` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `County` varchar(20) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `contactNo` varchar(11) DEFAULT NULL,
  `ExpirationDate` varchar(20) DEFAULT NULL,
  `Address` int(10) NOT NULL,
  `Cardname` varchar(30) NOT NULL,
  `Cardnumber` varchar(14) NOT NULL,
  PRIMARY KEY (`Order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1016 DEFAULT CHARSET=latin1;

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_title` text NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_quantity` text NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `date_added` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_quantity`, `product_price`, `product_code`, `product_image`, `date_added`) VALUES
(31, 'Birla White', 'Birla White', '120', 700, '2668', '1574203068.jpg', '2020-02-02 19:37:48.000000'),
(32, 'Hanson white cement', 'Hanson white cement', '100', 500, '39237', '1574203102.jpg', '2019-11-19 19:38:21.000000'),
(33, 'Tokyo super', 'Tokyo super', '100', 1000, '99310', '1574203141.jpg', '2019-11-19 19:39:01.000000'),
(34, 'Cetcoat DWC', 'Cetcoat DWC', '12', 1000, '13295', '1574203202.jpg', '2019-11-19 19:40:01.000000'),
(35, 'Blue triangle', ' mms smdnsmdn,sd', '1', 590, '74575', '1574203285.jpg', '2019-11-19 19:41:24.000000'),
(36, 'Nguvu cement', 'Nguvu cement', '2000', 1000, '11782', '1574203344.jpg', '2019-11-19 19:42:23.000000'),
(37, 'Rhino cement', 'dsdkl sdkjslkdjsd', '10', 1200, '71970', '1574203532.jpg', '2019-11-19 19:45:32.000000'),
(38, 'mombasa cement', 'mombasa cement', '1222', 1400, '62506', '1574203578.jpg', '2019-11-19 19:46:18.000000'),
(39, 'cement', 'cement', '100', 600, '32895', '1574237120.jpg', '2019-11-20 05:05:20.000000'),
(40, 'wooden tile', 'wooden tile', '56', 500, '33898', '1587494042.PNG', '2020-04-21 15:34:02.000000'),
(41, 'door hinge', 'hinge', '7', 700, '43859', '1587494106.jpg', '2020-04-21 15:35:05.000000'),
(42, 'sink tap', 'it is a sink tap', '', 800, '26162', '1587494318.PNG', '2020-04-21 15:38:38.000000'),
(43, 'timber', 'timber', '89', 800, '23864', '1587494798.jpg', '2020-04-21 15:46:37.000000'),
(44, 'timber', 'timber', '90', 800, '71208', '1587496889.jpg', '2020-04-21 16:21:28.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_first` text NOT NULL,
  `user_last` text NOT NULL,
  `user_password` varchar(205) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_email` varchar(205) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_first`, `user_last`, `user_password`, `created_at`, `user_email`) VALUES
(1, 'dfdf', 'dfdfdf', 'dfdf', '2d5e9848d263245e762a5571045672a8', '2020-04-21 17:17:39', 'wafu@gmail.com'),
(2, 'harriet', 'Harriet', 'Soita', 'd832f7f9bbb2f5b37e423fad2d79a4a9', '2020-04-21 17:18:54', 'hsoita@gmail.com'),
(3, 'harriet', 'Harriet', 'Soita', 'd832f7f9bbb2f5b37e423fad2d79a4a9', '2020-04-21 17:19:53', 'hsoita@gmail.com'),
(4, 'emmanuel', 'Emmanuel ', 'Wafula', '81dc9bdb52d04dc20036dbd8313ed055', '2020-04-21 17:33:21', 'ewafula@gmail.com'),
(5, 'marvn', 'gita', 'hat', '21232f297a57a5a743894a0e4a801fc3', '2020-06-26 15:56:01', 'marvingitau96@gmail.com'),
(6, 'Edgarwanjala', 'Edgar', 'Wanjala', 'b6a149049571fe7fd9b25debdc76da19', '2020-06-26 10:13:04', 'Wanjalaedgar@gmail.com'),
(7, 'Harriet', 'Soita', 'Anne', '4aabaed63185ca25bdd3d2f966691fad', '2020-06-26 10:16:24', 'Harrietsoita9@gmail.com'),
(8, 'Marggie', 'Margaret', 'Nafula', 'c3fd87257cac7759fe5d5e20e18c8759', '2020-06-26 13:08:00', 'Maggie45@gmail.com'),
(9, 'Joshua', 'Joshua', 'kamau', '6062fdd4f529fd750449f6c06375604c', '2020-06-26 13:32:24', 'joshkamau@gmail.com'),
(10, 'Kendi', 'Kendi', 'Muchungi', 'b6a149049571fe7fd9b25debdc76da19', '2020-06-26 13:34:39', 'kmuchungi@anu.ac.ke'),
(11, 'sharon', 'soita', 'mercy', 'b6a149049571fe7fd9b25debdc76da19', '2020-06-26 13:44:30', 'Kregister@gmailcom'),
(12, 'maggie', 'Maggie', 'Soita', 'fa7c79a4f404cbee2c7786be948ae160', '2020-06-28 14:49:40', 'Soitamaggie@gmail.com'),
(13, 'Vicky', 'Victoria', 'Mukami', '4aabaed63185ca25bdd3d2f966691fad', '2020-06-29 14:36:09', 'Vmukami@anu.ac.ke');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
