-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 11:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenwash`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `spContactUs` (IN `name` VARCHAR(20), IN `email` VARCHAR(20), IN `message` VARCHAR(20))  NO SQL
BEGIN

INSERT INTO `tbl_contact` (`id`, `full_name`, `email`, `message`) VALUES (NULL, name, email, message);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spGetUsername` (IN `id` INT)  NO SQL
BEGIN
SELECT first_name,last_name FROM tbl_users u WHERE u.id=id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spLogin` (IN `uname` VARCHAR(60), IN `pass` VARCHAR(60))  NO SQL
BEGIN
select u.id,u.first_name from tbl_users u where u.email=uname and u.password=pass;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spPlaceOrder` (IN `address` VARCHAR(20), IN `payment` TEXT, IN `name` TEXT, IN `city` TEXT, IN `zip` INT(10), IN `phone` VARCHAR(15), IN `weight` INT(3))  NO SQL
BEGIN
INSERT INTO `tbl_order` (`id`, `address`, `payment`, `name`, `city`, `zip`, `phone`, `weight`,`order_status`) VALUES (NULL, address, payment, name, city, zip, phone, weight,'placed');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spSignUp` (IN `fname` VARCHAR(20), IN `lname` VARCHAR(20), IN `email` VARCHAR(30), IN `phone` BIGINT(15), IN `pass` VARCHAR(20))  NO SQL
BEGIN

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`) VALUES (NULL, fname, lname, email, phone, pass);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `full_name`, `email`, `message`) VALUES
(1, 'yash', 'yash@gmail.com', 'nice service'),
(2, 'Harry', 'harry@s.f', 'New contct us');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment` text NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `zip` int(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `weight` int(3) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `address`, `payment`, `name`, `city`, `zip`, `phone`, `weight`, `order_status`) VALUES
(1, 'pune', 'cod', 'Yash', 'pimple saudagar', 411017, '7276251509', 1, 'placed'),
(2, 'pune', 'cod', 'AK', 'pimprigaon', 411017, '7276251543', 1, 'confirmed'),
(3, 'pune', 'paytm', 'DAK', 'pimple saudagar', 411014, '7276251553', 4, 'placed'),
(4, 'pune', 'paytm', 'shubh', 'aundh', 411029, '7276251111', 4, 'placed'),
(5, 'shivam blgd', 'card', 'ram', 'Aundh', 411067, '8344333222', 1, 'placed'),
(6, 'amar', 'paytm', 'Asan', 'pimprigaon', 411017, '9988887676', 2, 'confirmed'),
(7, 'area', 'cod', 'aaa', 'pimprigaon', 411017, '2222222222', 1, 'confirmed'),
(8, '11 , satyam', 'card', 'aniket', 'pimple saudagar', 411019, '4444444444', 2, 'confirmed'),
(9, 'wing c , rama colony', 'cod', 'amit rao', 'pimprigaon', 411017, '6545879066', 1, 'confirmed'),
(10, '11, satyam', 'card', 'yasu', 'pimple saudagar', 411019, '6254334422', 1, 'confirmed'),
(11, 'New order', 'cod', 'Yash', 'pimple saudagar', 411918, '7276321666', 3, 'placed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`) VALUES
(1, 'Yashodip', 'Deshmukh', 'yash@gmail.com', 7276254325, 'yash1234'),
(2, 'Aniket', 'deshpande', 'ak@gmail.com', 1111111111, 'ak1234'),
(3, 'vishal', 'Dhumal', 'vishal@gmail.com', 7623553344, 'vishal1234'),
(4, 'Amol', 'joshi', 'amol@gmail.com', 8877886364, 'amol1234'),
(5, 'fgfgfg', 'fgfgfg', 'y@q', 5555555555, '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
