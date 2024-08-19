-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 04:49 PM
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
-- Database: `penciluxe`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(11) NOT NULL,
  `order_Cost` decimal(6,2) NOT NULL,
  `order_Status` varchar(100) NOT NULL,
  `user_Address` varchar(255) NOT NULL,
  `order_Date` datetime NOT NULL,
  `customer_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `order_Cost`, `order_Status`, `user_Address`, `order_Date`, `customer_ID`) VALUES
(1, 19.00, 'Paid', 'Yeovil Town FC', '2024-03-22 16:48:46', 2),
(2, 19.00, 'Paid', 'sddada', '2024-03-22 16:51:08', 2),
(3, 19.00, 'on_hold', 'sddada', '2024-03-22 16:51:19', 2),
(4, 19.00, 'Paid', 'asasa', '2024-03-22 16:51:34', 2),
(5, 305.00, 'Paid', 'Yeovil Town FC', '2024-03-22 17:06:05', 2),
(6, 1.00, 'Paid', 'Yeovil Town FC', '2024-03-22 18:23:07', 2),
(7, 1.00, 'Paid', 'Yeovil Town FC', '2024-03-22 18:25:12', 2),
(8, 1.00, 'Paid', 'Yeovil Town FC', '2024-03-22 18:27:33', 2),
(9, 118.00, 'Paid', '22 Yeo', '2024-03-25 11:56:00', 33444),
(10, 305.00, 'Paid', '22 yeo', '2024-03-26 00:18:18', 33444),
(11, 44.00, 'Paid', 'ssffccs', '2024-03-26 10:59:34', 2),
(12, 186.00, 'on_hold', 'asdfghjkl', '2024-03-28 14:14:15', 3839),
(13, 186.00, 'on_hold', 'ddd', '2024-03-28 15:31:46', 3839),
(14, 155.00, 'Paid', 'ytyty', '2024-03-30 13:41:04', 2),
(15, 527.00, 'Paid', '1234', '2024-03-31 16:52:04', 2),
(16, 556.00, 'Paid', 'scxsxcxc', '2024-03-31 16:57:09', 2),
(17, 14.00, 'on_hold', 'yeo 1', '2024-03-31 17:00:04', 6153),
(18, 14.00, 'on_hold', 'w', '2024-04-01 15:16:02', 6153),
(19, 14.00, 'on_hold', 'yy', '2024-04-01 15:16:19', 6153),
(20, 14.00, 'on_hold', 'u', '2024-04-01 15:18:25', 6153),
(21, 14.00, 'on_hold', 'www', '2024-04-01 15:25:49', 6153),
(22, 14.00, 'on_hold', 'ddd', '2024-04-01 16:44:44', 6153),
(23, 34.00, 'Paid', 'tttt', '2024-04-04 13:16:56', 33444),
(24, 69.00, 'Paid', 'www', '2024-04-04 14:00:42', 33444),
(25, 19.00, 'on_hold', 'Yeovil Town FC', '2024-04-17 17:37:21', 36004),
(26, 72.00, 'Paid', 'Yeovil Town FC', '2024-04-18 14:28:48', 3839),
(27, 9.00, 'Paid', 'ddd', '2024-04-19 12:12:45', 33444),
(28, 9.00, 'Paid', 's', '2024-04-19 14:58:49', 33444),
(29, 34.00, 'Paid', 'nbb', '2024-04-23 14:54:56', 2),
(30, 44.00, 'Paid', 'yeo 1', '2024-04-23 14:58:37', 537),
(31, 39.00, 'on_hold', 'yeo 1', '2024-04-24 12:03:03', 6303),
(32, 14.00, 'Paid', 'gggggggggggggg', '2024-04-25 11:31:43', 2),
(33, 35.00, 'Paid', 'dsdsd', '2024-04-25 13:12:44', 2),
(34, 31.00, 'Paid', 'ssssssssssssssssss', '2024-04-25 13:13:46', 2),
(35, 28.00, 'Paid', 'ffffffffffffffffff', '2024-04-25 13:14:37', 2),
(36, 77.00, 'Paid', 'ttttttttttttttttttttttt', '2024-04-25 14:14:32', 2),
(37, 34.00, 'Paid', 'xxxxxxxxxxxxxxxxxxxx', '2024-04-25 15:08:30', 2),
(38, 34.00, 'Paid', 'gggggggggggggggggg', '2024-04-25 15:50:04', 2),
(39, 118.00, 'on_hold', 'zc', '2024-04-26 16:04:58', 2),
(40, 465.00, 'Paid', 'ff', '2024-04-26 16:06:07', 2),
(41, 104.00, 'Paid', 'zxzxz', '2024-04-26 16:25:57', 33444),
(42, 34.00, 'Paid', 'dddd', '2024-04-26 16:30:03', 33444),
(43, 34.00, 'Paid', 'fff', '2024-04-26 16:43:59', 33444);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_ID` int(11) NOT NULL,
  `item_ID` int(11) NOT NULL,
  `product_ID` varchar(255) NOT NULL,
  `product_Name` varchar(255) NOT NULL,
  `product_Image` varchar(255) NOT NULL,
  `product_Price` decimal(6,2) NOT NULL,
  `product_Quantity` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `order_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_ID`, `item_ID`, `product_ID`, `product_Name`, `product_Image`, `product_Price`, `product_Quantity`, `customer_ID`, `order_Date`) VALUES
(5, 1, '1', 'Golden Pencil', 'pencils.jpg', 19.00, 2, 2, '2024-03-22 17:06:05'),
(5, 2, '10', 'Book of Space', 'spaceBook.png', 114.00, 2, 2, '2024-03-22 17:06:05'),
(5, 3, '5', 'Pencil Case', 'pencilCase.png', 29.00, 3, 2, '2024-03-22 17:06:05'),
(6, 4, '1', 'Golden Pencil', 'pencils.jpg', 19.00, 1, 2, '2024-03-22 18:23:07'),
(6, 5, '10', 'Book of Space', 'spaceBook.png', 114.00, 2, 2, '2024-03-22 18:23:07'),
(6, 6, '5', 'Pencil Case', 'pencilCase.png', 29.00, 2, 2, '2024-03-22 18:23:07'),
(6, 7, '4', 'Green Pencil', 'greenPencil.png', 14.00, 37, 2, '2024-03-22 18:23:07'),
(6, 8, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 33, 2, '2024-03-22 18:23:07'),
(7, 9, '1', 'Golden Pencil', 'pencils.jpg', 19.00, 1, 2, '2024-03-22 18:25:12'),
(7, 10, '10', 'Book of Space', 'spaceBook.png', 114.00, 2, 2, '2024-03-22 18:25:12'),
(7, 11, '5', 'Pencil Case', 'pencilCase.png', 29.00, 2, 2, '2024-03-22 18:25:12'),
(7, 12, '4', 'Green Pencil', 'greenPencil.png', 14.00, 37, 2, '2024-03-22 18:25:12'),
(7, 13, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 33, 2, '2024-03-22 18:25:12'),
(8, 14, '1', 'Golden Pencil', 'pencils.jpg', 19.00, 1, 2, '2024-03-22 18:27:33'),
(8, 15, '10', 'Book of Space', 'spaceBook.png', 114.00, 2, 2, '2024-03-22 18:27:33'),
(8, 16, '5', 'Pencil Case', 'pencilCase.png', 29.00, 2, 2, '2024-03-22 18:27:33'),
(8, 17, '4', 'Green Pencil', 'greenPencil.png', 14.00, 37, 2, '2024-03-22 18:27:33'),
(8, 18, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 33, 2, '2024-03-22 18:27:33'),
(9, 19, '7', 'Green Book', 'greenBook.png', 34.00, 4, 33444, '2024-03-25 11:56:00'),
(10, 20, '6', 'Book of Syed', 'books.jpg', 155.00, 2, 33444, '2024-03-26 00:18:18'),
(10, 21, '3', 'Red Pencil', 'redPencil.png', 14.00, 1, 33444, '2024-03-26 00:18:18'),
(10, 22, '11', 'Pink Book', 'pinkBook.png', 34.00, 1, 33444, '2024-03-26 00:18:18'),
(11, 23, '3', 'Red Pencil', 'redPencil.png', 14.00, 3, 2, '2024-03-26 10:59:34'),
(12, 24, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 5, 3839, '2024-03-28 14:14:15'),
(12, 25, '8', 'Red Book', 'redBook.png', 34.00, 2, 3839, '2024-03-28 14:14:15'),
(12, 26, '4', 'Green Pencil', 'greenPencil.png', 14.00, 5, 3839, '2024-03-28 14:14:15'),
(13, 27, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 5, 3839, '2024-03-28 15:31:46'),
(13, 28, '8', 'Red Book', 'redBook.png', 34.00, 2, 3839, '2024-03-28 15:31:46'),
(13, 29, '4', 'Green Pencil', 'greenPencil.png', 14.00, 5, 3839, '2024-03-28 15:31:46'),
(14, 30, '6', 'Book of Syed', 'books.jpg', 155.00, 1, 2, '2024-03-30 13:41:04'),
(15, 31, '6', 'Book of Syed', 'books.jpg', 155.00, 4, 2, '2024-03-31 16:52:04'),
(16, 32, '6', 'Book of Syed', 'books.jpg', 155.00, 4, 2, '2024-03-31 16:57:09'),
(16, 33, '8', 'Red Book', 'redBook.png', 34.00, 1, 2, '2024-03-31 16:57:09'),
(17, 34, '4', 'Green Pencil', 'greenPencil.png', 14.00, 1, 6153, '2024-03-31 17:00:04'),
(18, 35, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 6153, '2024-04-01 15:16:02'),
(19, 36, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 6153, '2024-04-01 15:16:19'),
(20, 37, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 6153, '2024-04-01 15:18:25'),
(21, 38, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 6153, '2024-04-01 15:25:49'),
(22, 39, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 6153, '2024-04-01 16:44:44'),
(23, 40, '7', 'Green Book', 'greenBook.png', 34.00, 1, 33444, '2024-04-04 13:16:56'),
(24, 41, '7', 'Green Book', 'greenBook.png', 34.00, 1, 33444, '2024-04-04 14:00:42'),
(25, 42, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 36004, '2024-04-17 17:37:21'),
(26, 43, '7', 'Green Book', 'greenBook.png', 34.00, 1, 3839, '2024-04-18 14:28:48'),
(26, 44, '3', 'Red Pencil', 'redPencil.png', 14.00, 3, 3839, '2024-04-18 14:28:48'),
(27, 45, '12', 'Black Pen', 'blackPen.png', 9.00, 1, 33444, '2024-04-19 12:12:45'),
(28, 46, '12', 'Black Pen', 'blackPen.png', 9.00, 1, 33444, '2024-04-19 14:58:49'),
(29, 47, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 2, '2024-04-23 14:54:56'),
(30, 48, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 537, '2024-04-23 14:58:37'),
(31, 49, '8', 'Red Book', 'redBook.png', 34.00, 1, 6303, '2024-04-24 12:03:03'),
(32, 50, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 2, '2024-04-25 11:31:43'),
(33, 51, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 2, '2024-04-25 13:12:44'),
(34, 52, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 2, '2024-04-25 13:13:46'),
(35, 53, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 2, '2024-04-25 13:14:37'),
(36, 54, '2', 'Blue Pencil', 'bluePencil.png', 14.00, 1, 2, '2024-04-25 14:14:32'),
(36, 55, '5', 'Pencil Case', 'pencilCase.png', 29.00, 3, 2, '2024-04-25 14:14:32'),
(37, 56, '7', 'Green Book', 'greenBook.png', 34.00, 1, 2, '2024-04-25 15:08:30'),
(38, 57, '7', 'Green Book', 'greenBook.png', 34.00, 1, 2, '2024-04-25 15:50:04'),
(39, 58, '26', 'Red Book Big', 'redBook.png', 34.00, 4, 2, '2024-04-26 16:04:58'),
(40, 59, '6', 'Nice Book', 'books.jpg', 155.00, 3, 2, '2024-04-26 16:06:07'),
(41, 60, '7', 'Green Book', 'greenBook.png', 34.00, 3, 33444, '2024-04-26 16:25:57'),
(42, 61, '8', 'Red Book', 'redBook.png', 34.00, 1, 33444, '2024-04-26 16:30:03'),
(43, 62, '8', 'Red Book', 'redBook.png', 34.00, 1, 33444, '2024-04-26 16:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_ID` int(11) NOT NULL,
  `product_Name` varchar(100) NOT NULL,
  `product_Category` varchar(100) NOT NULL,
  `product_Description` varchar(255) NOT NULL,
  `product_Image` varchar(255) NOT NULL,
  `product_Image2` varchar(255) NOT NULL,
  `product_Image3` varchar(255) NOT NULL,
  `product_Image4` varchar(255) NOT NULL,
  `product_Price` decimal(6,2) NOT NULL,
  `product_Special_Offer` int(2) NOT NULL,
  `product_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_ID`, `product_Name`, `product_Category`, `product_Description`, `product_Image`, `product_Image2`, `product_Image3`, `product_Image4`, `product_Price`, `product_Special_Offer`, `product_Type`) VALUES
(1, 'Golden Pencil', 'Stationery', 'High quality golden pencil', 'pencils.jpg', 'pencils.jpg', 'pencils.jpg', 'pencils.jpg', 19.99, 0, 'pencil'),
(2, 'Blue Pencil', 'Stationery', 'High quality blue pencil', 'bluePencil.png', 'bluePencil.png', 'bluePencil.png', 'bluePencil.png', 14.99, 10, 'pencil'),
(3, 'Red Pencil', 'Stationery', 'High quality red pencil', 'redPencil.png', 'redPencil.png', 'redPencil.png', 'redPencil.png', 14.99, 0, 'pencil'),
(4, 'Green Pencil', 'Stationery', 'High quality green pencil', 'greenPencil.png', 'greenPencil.png', 'greenPencil.png', 'greenPencil.png', 14.99, 0, 'pencil'),
(5, 'Pencil Case', 'Stationery', 'High quality unbreakable pencil case', 'pencilCase.png', 'pencilCase.pngpencilCase.pngpencilCase.png', 'pencilCase.pngpencilCase.png', 'pencilCase.png', 29.99, 0, 'pencilCase'),
(6, 'Nice Book', 'book', 'A book about that is very nice.A book about that is very nice.A book about that is very nice.A book about that is very nice.A book about that is very nice.A book about that is very nice.A book about that is very nice.A book about that is very nice.A book ', 'books.jpg', 'books.jpg', 'books.jpg', 'books.jpg', 155.00, 30, 'specialEditionBook'),
(7, 'Green Book', 'book', 'High quality green book with no text', 'greenBook.png', 'greenBook.png', 'greenBook.png', 'greenBook.png', 34.99, 0, 'standardBook'),
(8, 'Red Book', 'book', 'High quality red book with no text', 'redBook.png', 'redBook.png', 'redBook.png', 'redBook.png', 34.99, 0, 'standardBook'),
(9, 'Blue Book', 'book', 'High quality blue book with no text', 'blueBook.png', 'blueBook.png', 'blueBook.png', 'blueBook.png', 34.99, 0, 'standardBook'),
(10, 'Book of Space', 'book', 'High quality book about space', 'spaceBook.png', 'spaceBook.png', 'spaceBook.png', 'spaceBook.png', 114.99, 0, 'specialEditionBook'),
(11, 'Pink Book', 'book', 'High quality pink book with no text', 'pinkBook.png', 'pinkBook.png', 'pinkBook.png', 'pinkBook.png', 34.99, 0, 'standardBook'),
(12, 'Black Pen', 'Stationery', 'Long lasting black pen', 'blackPen.png', 'blackPen.png', 'blackPen.png', 'blackPen.png', 9.99, 0, 'Pen'),
(13, 'Strong Eraser', 'Stationery', 'Strong eraser that will last forever', 'eraser.png', 'eraser.png', 'eraser.png', 'eraser.png', 24.99, 0, 'eraser'),
(14, 'Weak Eraser', 'Stationery', 'Doesnt last that long ', 'eraser.png', 'eraser.png', 'eraser.png', 'eraser.png', 9.99, 0, 'eraser'),
(15, 'Big Eraser', 'Stationery', 'Its big ', 'eraser.png', 'eraser.png', 'eraser.png', 'eraser.png', 9.99, 0, 'eraser'),
(16, 'Small Eraser', 'Stationery', 'Not very big ', 'eraser.png', 'eraser.png', 'eraser.png', 'eraser.png', 4.99, 0, 'eraser'),
(17, 'Regular Ruler ', 'Stationery', 'Its a ruler', 'ruler.png', 'ruler.png', 'ruler.png', 'ruler.png', 15.00, 0, 'ruler'),
(18, 'Regular Ruler Yellow ', 'Stationery', 'Its a ruler but yellow', 'ruler.png', 'ruler.png', 'ruler.png', 'ruler.png', 15.00, 0, 'ruler'),
(19, 'Regular Ruler Blue ', 'Stationery', 'Its a ruler but blue', 'ruler.png', 'ruler.png', 'ruler.png', 'ruler.png', 15.00, 0, 'ruler'),
(20, 'Regular Ruler Pink ', 'Stationery', 'Its a ruler but pink', 'ruler.png', 'ruler.png', 'ruler.png', 'ruler.png', 15.00, 0, 'ruler'),
(21, 'Blue Pen', 'Stationery', 'Long lasting blue pen', 'blackPen.png', 'blackPen.png', 'blackPen.png', 'blackPen.png', 9.99, 0, 'Pen'),
(22, 'Red Pen', 'Stationery', 'Long lasting red pen', 'blackPen.png', 'blackPen.png', 'blackPen.png', 'blackPen.png', 9.99, 0, 'Pen'),
(23, 'Green Pen', 'Stationery', 'Long lasting green pen', 'blackPen.png', 'blackPen.png', 'blackPen.png', 'blackPen.png', 9.99, 0, 'Pen'),
(24, 'Orange Pen', 'Stationery', 'Long lasting green pen', 'blackPen.png', 'blackPen.png', 'blackPen.png', 'blackPen.png', 9.99, 0, 'Pen'),
(25, 'Grey Book', 'book', 'High quality grey book with no text', 'greenBook.png', 'greenBook.png', 'greenBook.png', 'greenBook.png', 34.99, 0, 'standardBook'),
(26, 'Red Book Big', 'book', 'High quality red book with no text', 'redBook.png', 'redBook.png', 'redBook.png', 'redBook.png', 34.99, 0, 'standardBook');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `customer_ID` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `email` varchar(320) NOT NULL,
  `domain_Discount` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`customer_ID`, `username`, `pass`, `email`, `domain_Discount`) VALUES
(2, 'Thomas', 'Password', 'thomaswellwood3@gmail.com', 10),
(537, 'Tom123', 'Password', 'tom@gmail.com', 10),
(3839, 'Tom1', 'Password', 'sddsdsdsd@gmail.com', NULL),
(6153, 'Jeff', 'Password', 'thomaswellwood33@gmail.com', 10),
(6303, 'Lewis', 'Password', 'thomaswellwood3@gmail.com', 10),
(30957, 'Tom1', 'Password', 'thomaswellwood3333@gmail.com', NULL),
(33444, 'Kingsley', 'Password', '687891@yeovil.ac.uk', 10),
(36004, 'Ryan', 'Password', 'king@gmail.com', NULL),
(72948, 'TestUser', 'Password', 'thomas@nhs.net', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `order_ID` int(11) NOT NULL,
  `customer_ID` int(6) NOT NULL,
  `wishlist_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `customer_ID` (`customer_ID`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_ID`),
  ADD KEY `order_ID` (`order_ID`),
  ADD KEY `product_ID` (`product_ID`),
  ADD KEY `product_Name` (`product_Name`),
  ADD KEY `customer_ID` (`customer_ID`),
  ADD KEY `product_Image` (`product_Image`),
  ADD KEY `order_Date` (`order_Date`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_ID`),
  ADD KEY `order_ID` (`order_ID`),
  ADD KEY `customer_ID` (`customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customerID` FOREIGN KEY (`customer_ID`) REFERENCES `users` (`customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
